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
			if (in_array($data['providerName'], array(\BigFish\PaymentGateway::PROVIDER_BBARUHITEL, \BigFish\PaymentGateway::PROVIDER_PAYUREST))) {
				$data['extra'] = json_decode($_POST['extra'][$data['providerName']], true);
			} else {
				$data['extra'][$data['providerName']] = json_decode($_POST['extra'][$data['providerName']], true);
			}
		} else {
			unset($data['extra']);
		}
	}

	/**
	 * Get info
	 * 
	 * @param array $data
	 * @return array
	 * @access private
	 * @static
	 */
	private static function getInfo($data)
	{
		if (isset($data["useInfo"]) && $data["useInfo"] && isset($data["infoData"]) && !empty($data["infoData"])) {
			$infoData = json_decode($data["infoData"], true);

			if (json_last_error() !== JSON_ERROR_NONE) {
				throw new \BigFish\PaymentGateway\Exception("The info data is not JSON format.");
			}

			return $infoData;
		}

		return array();
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
				case \BigFish\PaymentGateway::PROVIDER_PAYUREST:
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
					if ((int)$data['oneClickForcedRegistration']) {
						$initRequest->setOneClickForcedRegistration(true);
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

			$initRequest->setInfo(self::getInfo($data));

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
			$detailsResponse = \BigFish\PaymentGateway::details(new \BigFish\PaymentGateway\Request\Details($data['TransactionId'], false, true));

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

			$initRPRequest->setInfo(self::getInfo($data));

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
				case \BigFish\PaymentGateway::PROVIDER_PAYUREST:
					self::setProviderExtra($data);
					break;
			}

			$paymentLinkCreateRequest->setInfo(self::getInfo($data));

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
			$paymentLinkDetailsResponse = \BigFish\PaymentGateway::paymentLinkDetails(new \BigFish\PaymentGateway\Request\PaymentLinkDetails($data['PaymentLinkName'], true));

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

	/**
	 * @return \BigFish\PaymentGateway\Data\Info
	 */
	public static function getGeneratedInfoObject()
	{
		$infoObject = new \BigFish\PaymentGateway\Data\Info();

		$infoObject->setData(self::getCustomerGeneral());
		$infoObject->setData(self::getCustomerStoreSpecific());
		$infoObject->setData(self::getCustomerBrowser());
		$infoObject->setData(self::getOrderGeneral());
		$infoObject->setData(self::getOrderBillingData());
		$infoObject->setData(self::getOrderShippingData());
		$infoObject->setData(self::getOrderProductItem(1));
		$infoObject->setData(self::getOrderProductItem(2));
		$infoObject->setData(self::getOrderProductItem(3));
		$infoObject->setData(self::getOrderRecurringPayment());

		return $infoObject;
	}

	/**
	 * @return \BigFish\PaymentGateway\Data\Info\InfoCustomerGeneral
	 */
	public static function getCustomerGeneral()
	{
		$infoCustomerGeneral = new \BigFish\PaymentGateway\Data\Info\InfoCustomerGeneral();
		$infoCustomerGeneral
			->setFirstName("John")
			->setLastName("Doe")
			->setEmail("test@testmail.com")
			->setIp("10.0.0.1")
			->setHomePhoneCc("36")
			->setHomePhone("801231212")
			->setMobilePhoneCc("36")
			->setMobilePhone("801231212")
			->setWorkPhoneCc("36")
			->setWorkPhone("801231212");

		return $infoCustomerGeneral;
	}

	/**
	 * @return \BigFish\PaymentGateway\Data\Info\InfoCustomerStoreSpecific
	 */
	public static function getCustomerStoreSpecific()
	{
		$infoCustomerStoreSpecific = new \BigFish\PaymentGateway\Data\Info\InfoCustomerStoreSpecific();
		$infoCustomerStoreSpecific
			->setUpdateDate("2018-05-10")
			->setUpdateDateIndicator("03")
			->setCreationDate("2016-04-01")
			->setCreationDateIndicator("05")
			->setPasswordChangeDate("2016-04-01")
			->setPasswordChangeDateIndicator("01")
			->setAuthenticationTimestamp("2019-04-28 12:00:01")
			->setAuthenticationMethod("05")
			->setChallengeIndicator("01")
			->setShippingAddressFirstUse("2016-05-05")
			->setShippingAddressFirstUseIndicator("04")
			->setCardTransactionsLastDay("5")
			->setCardCreationDate("2018-08-05")
			->setCardCreationDateIndicator("05")
			->setTransactionsLastDay("2")
			->setTransactionsLastYear("95")
			->setPurchasesLastSixMonths("6")
			->setSuspiciousActivity("01");

		return $infoCustomerStoreSpecific;
	}

	/**
	 * @return \BigFish\PaymentGateway\Data\Info\InfoCustomerBrowser
	 */
	public static function getCustomerBrowser()
	{
		$infoCustomerBrowser = new \BigFish\PaymentGateway\Data\Info\InfoCustomerBrowser();
		$infoCustomerBrowser
			->setAcceptHeader("text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8,application/json")
			->setJavaEnabled("1")
			->setLanguage("en-US")
			->setColorDepth("24")
			->setScreenHeight("1024")
			->setScreenWidth("768")
			->setTimeZone("+60")
			->setUserAgent("Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.36")
			->setWindowSize("05");

		return $infoCustomerBrowser;
	}

	/**
	 * @return \BigFish\PaymentGateway\Data\Info\InfoOrderGeneral
	 */
	public static function getOrderGeneral()
	{
		$infoOrderGeneral = new \BigFish\PaymentGateway\Data\Info\InfoOrderGeneral();
		$infoOrderGeneral
			->setDeliveryEmail("test@testdomain.com")
			->setDeliveryTimeFrame("04")
			->setGiftCardAmount("100")
			->setGiftCardCount("3")
			->setGiftCardCurrency("HUF")
			->setPreorderDate("2019-09-05")
			->setAvailability("01")
			->setReorderItems("02")
			->setShippingMethod("02")
			->setAddressMatchIndicator("1")
			->setDifferentShippingName("01")
			->setTransactionType("01");

		return $infoOrderGeneral;
	}

	/**
	 * @return \BigFish\PaymentGateway\Data\Info\InfoOrderShippingData
	 */
	public static function getOrderShippingData()
	{
		$infoOrderShipping = new \BigFish\PaymentGateway\Data\Info\InfoOrderShippingData();
		$infoOrderShipping
			->setFirstName("John")
			->setLastName("Doe")
			->setPhoneCc("36")
			->setPhone("801234567")
			->setCity("Budapest")
			->setCountry("Hungary")
			->setCountryCode("348")
			->setLine1("Nyugati tér")
			->setLine2("1-2")
			->setLine3("7. emelet")
			->setPostalCode("1066")
			->setState("HU");

		return $infoOrderShipping;
	}

	/**
	 * @return \BigFish\PaymentGateway\Data\Info\InfoOrderBillingData
	 */
	public static function getOrderBillingData()
	{
		$infoOrderBilling = new \BigFish\PaymentGateway\Data\Info\InfoOrderBillingData();
		$infoOrderBilling
			->setFirstName("John")
			->setLastName("Doe")
			->setPhoneCc("36")
			->setPhone("801234567")
			->setCity("Budapest")
			->setCountry("Hungary")
			->setCountryCode("348")
			->setLine1("Nyugati tér")
			->setLine2("1-2")
			->setLine3("7. emelet")
			->setPostalCode("1066")
			->setState("HU");

		return $infoOrderBilling;
	}

	/**
	 * @param string $suffix
	 * @return \BigFish\PaymentGateway\Data\Info\InfoOrderProductItem
	 */
	public static function getOrderProductItem($suffix = '1')
	{
		$infoOrderProductItem = new \BigFish\PaymentGateway\Data\Info\InfoOrderProductItem();
		$infoOrderProductItem
			->setSku("PMG00010" . $suffix)
			->setName("Termék" . $suffix)
			->setQuantity("10")
			->setQuantityUnit("db")
			->setUnitPrice("22")
			->setPrice("220")
			->setImageUrl("http://webhsop/termek" . $suffix . ".jpg")
			->setDescription("Termék" . $suffix . " leírása");

		return $infoOrderProductItem;
	}

	/**
	 * @return \BigFish\PaymentGateway\Data\Info\InfoOrderRecurringPayment
	 */
	public static function getOrderRecurringPayment()
	{
		$infoOrderRecurringPayment = new \BigFish\PaymentGateway\Data\Info\InfoOrderRecurringPayment();

		$infoOrderRecurringPayment
			->setExpireDate("2030-02-05")
			->setFrequency("14");

		return $infoOrderRecurringPayment;
	}
}
