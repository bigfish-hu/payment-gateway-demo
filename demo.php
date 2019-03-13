<?php

/**
 * Demo abstract class
 */
abstract class Demo
{
	/**
	 * Matching SZÉP Card pocket id
	 * 
	 * @var array
	 * @access protected
	 * @static
	 */
	protected static $szepCardId = array(
		'OTP' => array(
			'accommodation' => '09',
			'hospitality' => '07',
			'leisure' => '08',
		),
		'KHBSZEP' => array(
			'accommodation' => '1',
			'hospitality' => '2',
			'leisure' => '3',
		),
		'MKBSZEP' => array(
			'accommodation' => '1111',
			'hospitality' => '2222',
			'leisure' => '3333',
		),
	);

	/**
	 * Config settings
	 * 
	 * @param array $data
	 * @return void
	 * @access public
	 * @static
	 */
	public static function setConfig(array $data = array())
	{
		$config = new \BigFish\PaymentGateway\Config();

		$config->storeName = $data['storeName'];
		$config->apiKey = $data['apiKey'];
		$config->testMode = $data['testMode'];
		$config->encryptPublicKey = $data['encryptPublicKey'];

		if (isset($data['gatewayUrlTest']) && !empty($data['gatewayUrlTest'])) {
			$config->gatewayUrlTest = $data['gatewayUrlTest'];
		}

		\BigFish\PaymentGateway::setConfig($config);
	}

	/**
	 * Set provider extra
	 * 
	 * @param array $data reference
	 * @return void
	 * @access private
	 * @static
	 */
	private static function setProviderExtra(&$data)
	{
		if (isset($_POST['useExtra']) && (int)$_POST['useExtra'] && isset($_POST['extra'][$data['providerName']]) && !empty($_POST['extra'][$data['providerName']])) {
			$data['extra'][$data['providerName']] = json_decode($_POST['extra'][$data['providerName']], true);
		} else {
			unset($data['extra']);
		}
	}

	/**
	 * Init and start transaction
	 * 
	 * @param array $data
	 * @return object|string
	 * @access public
	 * @static
	 */
	public static function start(array $data = array())
	{
		try {
			$initRequest = new \BigFish\PaymentGateway\Request\Init();

			$initRequest->setProviderName($data['providerName'])
						->setResponseUrl($data['responseUrl'])
						->setAmount($data['amount'])
						->setCurrency($data['currency'])
						->setOrderId($data['orderId'])
						->setUserId($data['userId']);

			if (!empty($data["language"])) {
				$initRequest->setLanguage($data["language"]);
			}
			
			if (isset($data["autoCommit"]) && ($data["autoCommit"] === 'false' || $data["autoCommit"] === false)) {
				$initRequest->setAutoCommit(false);
			}
			
			switch ($data['providerName']) {
				case \BigFish\PaymentGateway::PROVIDER_MKB_SZEP:
					$initRequest->setMkbSzepCafeteriaId(self::$szepCardId[$data['providerName']][$data["szepPocket"]]);

					if ((int)$data["gatewayPaymentPage"]) {
						$initRequest->setGatewayPaymentPage(true);
					} else {
						$initRequest->setMkbSzepCardNumber($data["cardNumber"])
									->setMkbSzepCvv($data["cardCvc"]);
					}
					break;
				case \BigFish\PaymentGateway::PROVIDER_KHB_SZEP:
					$data['extra']['KhbCardPocketId'] = self::$szepCardId[$data['providerName']][$data["szepPocket"]];
					break;
				case \BigFish\PaymentGateway::PROVIDER_OTP:
					if (!empty($data["szepPocket"])) {
						$initRequest->setOtpCardPocketId(self::$szepCardId[$data['providerName']][$data["szepPocket"]]);
					}

					if (!empty($data['otpConsumerRegistrationId'])) {
						$initRequest->setOtpConsumerRegistrationId($data['otpConsumerRegistrationId']);
					}
					break;
				case \BigFish\PaymentGateway::PROVIDER_OTP_TWO_PARTY:
					if (!empty($data['otpConsumerRegistrationId'])) {
						$initRequest->setOtpConsumerRegistrationId($data['otpConsumerRegistrationId']);
					}

					$initRequest->setOtpCardNumber($data["cardNumber"])
								->setOtpExpiration($data["cardExpiration"])
								->setOtpCvc($data["cardCvc"]);
					break;
				case \BigFish\PaymentGateway::PROVIDER_OTPAY:
					if (!empty($data['phoneNumber'])) {
						$initRequest->setMppPhoneNumber($data['phoneNumber']);
					}
					break;
				case \BigFish\PaymentGateway::PROVIDER_BARION2:
					self::setProviderExtra($data);
				case \BigFish\PaymentGateway::PROVIDER_BORGUN2:
				case \BigFish\PaymentGateway::PROVIDER_ESCALION:
				case \BigFish\PaymentGateway::PROVIDER_GP:
				case \BigFish\PaymentGateway::PROVIDER_OTP_SIMPLE:
				case \BigFish\PaymentGateway::PROVIDER_SAFERPAY:
				case \BigFish\PaymentGateway::PROVIDER_PAYPAL:
				case \BigFish\PaymentGateway::PROVIDER_VIRPAY:
					if ((int)$data['oneClickPayment']) {
						$initRequest->setOneClickPayment(true);
					}
					if (isset($data['cardReferenceId']) && strlen($data['cardReferenceId'])) {
						$initRequest->setOneClickReferenceId($data['cardReferenceId']);
					}
					break;
				case \BigFish\PaymentGateway::PROVIDER_PAYSAFECASH:
					self::setProviderExtra($data);
					break;
				case \BigFish\PaymentGateway::PROVIDER_BBARUHITEL:
					self::setProviderExtra($data);
					break;
			}
			
			if (isset($data['extra']) && is_array($data['extra'])) {
				$initRequest->setExtra($data['extra']);
			}

			$initResponse = \BigFish\PaymentGateway::init($initRequest);
			
			if ($initResponse->ResultCode == "SUCCESSFUL" && $initResponse->TransactionId) {
				/**
				 * Save TransactionId into database before call start().
				 */
				$startResponse = \BigFish\PaymentGateway::start(new \BigFish\PaymentGateway\Request\Start($initResponse->TransactionId));
				return $startResponse;
			}

			return $initResponse;
		} catch (\BigFish\PaymentGateway\Exception $e) {
			return $e->getMessage();
		}
	}

	/**
	 * Get transaction result
	 * 
	 * @param array $data
	 * @return object|string
	 * @access public
	 * @static
	 */
	public static function result(array $data = array())
	{
		try {
			$resultResponse = \BigFish\PaymentGateway::result(new \BigFish\PaymentGateway\Request\Result($data['TransactionId']));

			return $resultResponse;
		} catch (\BigFish\PaymentGateway\Exception $e) {
			return $e->getMessage();
		}
	}
	
	/**
	 * Close transaction (two-step payment)
	 * 
	 * @param array $data
	 * @return object|string
	 * @access public
	 * @static
	 */
	public static function close(array $data = array())
	{
		try {
			$closeResponse = \BigFish\PaymentGateway::close(new \BigFish\PaymentGateway\Request\Close($data['TransactionId'], $data['Approved']));

			return $closeResponse;
		} catch (\BigFish\PaymentGateway\Exception $e) {
			return $e->getMessage();
		}
	}
	
	/**
	 * Get transaction details
	 * 
	 * @param array $data
	 * @return object|string
	 * @access public
	 * @static
	 */
	public static function details(array $data = array())
	{
		try {
			$detailsResponse = \BigFish\PaymentGateway::details(new \BigFish\PaymentGateway\Request\Details($data['TransactionId'], false));

			return $detailsResponse;
		} catch (\BigFish\PaymentGateway\Exception $e) {
			return $e->getMessage();
		}
	}
	
	/**
	 * Refund transaction
	 * 
	 * @param array $data
	 * @return object|string
	 * @access public
	 * @static
	 */
	public static function refund(array $data = array())
	{
		try {
			$refundResponse = \BigFish\PaymentGateway::refund(new \BigFish\PaymentGateway\Request\Refund($data['TransactionId'], $data['amount']));

			return $refundResponse;
		} catch (\BigFish\PaymentGateway\Exception $e) {
			return $e->getMessage();
		}
	}

	/**
	 * Init and start recurring payment
	 * 
	 * @param array $data
	 * @return object|string
	 * @access public
	 * @static
	 */
	public static function startRP(array $data = array())
	{
		try {
			$initRPRequest = new \BigFish\PaymentGateway\Request\InitRP();

			$initRPRequest->setReferenceTransactionId($data['referenceTransactionId'])
				->setResponseUrl($data['responseUrl'])
				->setAmount($data['amount'])
				->setCurrency($data['currency'])
				->setOrderId($data['orderId'])
				->setUserId($data['userId']);

			$initRPResponse = \BigFish\PaymentGateway::initRP($initRPRequest);
			
			if ($initRPResponse->ResultCode == "SUCCESSFUL" && $initRPResponse->TransactionId) {
				$startRPResponse = \BigFish\PaymentGateway::startRP(new \BigFish\PaymentGateway\Request\StartRP($initRPResponse->TransactionId));
				return $startRPResponse;
			}

			return $initRPResponse;
		} catch (\BigFish\PaymentGateway\Exception $e) {
			return $e->getMessage();
		}
	}
	
	/**
	 * Invoice transaction
	 * 
	 * @param array $data
	 * @return object|string
	 * @access public
	 * @static
	 */
	public static function invoice(array $data = array())
	{
		try {
			$invoiceResponse = \BigFish\PaymentGateway::invoice(new \BigFish\PaymentGateway\Request\Invoice($data['TransactionId'], $data['data']));

			return $invoiceResponse;
		} catch (\BigFish\PaymentGateway\Exception $e) {
			return $e->getMessage();
		}
	}
	
	/**
	 * Get reference transaction id to start One Click Payment without any intermediate page
	 * 
	 * @param array $data
	 * @return object|string
	 * @access public
	 * @static
	 */
	public static function oneClickOptions(array $data = array())
	{
		try {
			$oneClickOptionsResponse = \BigFish\PaymentGateway::oneClickOptions(new \BigFish\PaymentGateway\Request\OneClickOptions($data['providerName'], $data['userId']));

			return $oneClickOptionsResponse;
		} catch (\BigFish\PaymentGateway\Exception $e) {
			return $e->getMessage();
		}
	}
	
	/**
	 * One Click Token Cancel
	 * 
	 * @param array $data
	 * @return object|string
	 * @access public
	 * @static
	 */
	public static function oneClickTokenCancel(array $data = array())
	{
		try {
			$oneClickTokenCancelResponse = \BigFish\PaymentGateway::oneClickTokenCancel(new \BigFish\PaymentGateway\Request\OneClickTokenCancel($data['TransactionId']));

			return $oneClickTokenCancelResponse;
		} catch (\BigFish\PaymentGateway\Exception $e) {
			return $e->getMessage();
		}
	}
	
	/**
	 * One Click Token Cancel All
	 * 
	 * @param array $data
	 * @return object|string
	 * @access public
	 * @static
	 */
	public static function oneClickTokenCancelAll(array $data = array())
	{
		try {
			$oneClickTokenCancelAllResponse = \BigFish\PaymentGateway::oneClickTokenCancelAll(new \BigFish\PaymentGateway\Request\OneClickTokenCancelAll($data['providerName'], $data['userId']));

			return $oneClickTokenCancelAllResponse;
		} catch (\BigFish\PaymentGateway\Exception $e) {
			return $e->getMessage();
		}
	}
	
	/**
	 * Create payment link
	 * 
	 * @param array $data
	 * @return object|string
	 * @access public
	 * @static
	 */
	public static function paymentLinkCreate(array $data = array())
	{
		try {
			$paymentLinkCreateRequest = new \BigFish\PaymentGateway\Request\PaymentLinkCreate();

			$paymentLinkCreateRequest->setProviderName($data['providerName'])
				->setAmount($data['amount'])
				->setCurrency($data['currency'])
				->setOrderId($data['orderId'])
				->setUserId($data['userId'])
				->setExpirationTime($data['expirationTime'])
				->setNotificationEmail($data['notificationEmail'])
				->setEmailNotificationOnlySuccess($data['emailNotificationOnlySuccess']);

			if (!empty($data["language"])) {
				$paymentLinkCreateRequest->setLanguage($data["language"]);
			}

			if (isset($data["autoCommit"]) && ($data["autoCommit"] === 'false' || $data["autoCommit"] === false)) {
				$paymentLinkCreateRequest->setAutoCommit(false);
			}

			switch ($data['providerName']) {
				case \BigFish\PaymentGateway::PROVIDER_MKB_SZEP:
					$data['extra']['MkbSzepCafeteriaId'] = self::$szepCardId[$data['providerName']][$data["szepPocket"]];
					break;
				case \BigFish\PaymentGateway::PROVIDER_KHB_SZEP:
					$data['extra']['KhbCardPocketId'] = self::$szepCardId[$data['providerName']][$data["szepPocket"]];
					break;
				case \BigFish\PaymentGateway::PROVIDER_OTP:
					if (!empty($data["szepPocket"])) {
						$data['extra']['OtpCardPocketId'] = self::$szepCardId[$data['providerName']][$data["szepPocket"]];
					}
					break;
				case \BigFish\PaymentGateway::PROVIDER_BARION2:
				case \BigFish\PaymentGateway::PROVIDER_PAYSAFECASH:
				case \BigFish\PaymentGateway::PROVIDER_BBARUHITEL:
					self::setProviderExtra($data);
					break;
			}

			if (isset($data['extra']) && is_array($data['extra'])) {
				$paymentLinkCreateRequest->setExtra($data['extra']);
			}

			$paymentLinkCreateResponse = \BigFish\PaymentGateway::paymentLinkCreate($paymentLinkCreateRequest);

			return $paymentLinkCreateResponse;
		} catch (\BigFish\PaymentGateway\Exception $e) {
			return $e->getMessage();
		}
	}

	/**
	 * Get payment link details
	 * 
	 * @param array $data
	 * @return object|string
	 * @access public
	 * @static
	 */
	public static function paymentLinkDetails(array $data = array())
	{
		try {
			$paymentLinkDetailsResponse = \BigFish\PaymentGateway::paymentLinkDetails(new \BigFish\PaymentGateway\Request\PaymentLinkDetails($data['PaymentLinkName']));

			return $paymentLinkDetailsResponse;
		} catch (\BigFish\PaymentGateway\Exception $e) {
			return $e->getMessage();
		}
	}

	/**
	 * Cancel payment link
	 * 
	 * @param array $data
	 * @return object|string
	 * @access public
	 * @static
	 */
	public static function paymentLinkCancel(array $data = array())
	{
		try {
			$paymentLinkCancelResponse = \BigFish\PaymentGateway::paymentLinkCancel(new \BigFish\PaymentGateway\Request\PaymentLinkCancel($data['PaymentLinkName']));

			return $paymentLinkCancelResponse;
		} catch (\BigFish\PaymentGateway\Exception $e) {
			return $e->getMessage();
		}
	}
}
