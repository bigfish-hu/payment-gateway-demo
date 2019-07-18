		$initRequest = new \BigFish\PaymentGateway\Request\Init();<br />
		<br />
		$initRequest
			<blockquote>->setProviderName('<span class="showProviderName"></span>')</blockquote>
			<blockquote>->setResponseUrl($data['responseUrl'])</blockquote>
			<blockquote>->setAmount($data['amount'])</blockquote>
			<blockquote>->setCurrency($data['currency'])</blockquote>
			<blockquote>->setOrderId($data['orderId'])</blockquote>
			<blockquote>->setUserId($data['userId'])</blockquote>
			<blockquote>->setLanguage($data['language']);</blockquote>
		<span class="providerData code Barion2 Borgun2 FHB GP IPG OTP OTP2 OTPay OTPSimple PayU2 PayURest UniCredit QPAY Saferpay Virpay">
			<br />
			<font>
				/**<br />
				&nbsp;* If you want to start 2-step payment<br />
				&nbsp;*/
			</font><br />
			$initRequest->setAutoCommit(false);<br />
		</span>
		<span class="providerData code MKBSZEP">
			<br />
			<font>
				/**<br />
				&nbsp;* MKB SZÉP Cafeteria IDs:<br />
				&nbsp;* <br />
				&nbsp;* accommodation => 1111<br />
				&nbsp;* hospitality => 2222<br />
				&nbsp;* leisure => 3333<br />
				&nbsp;*/
			</font><br />
			$initRequest->setMkbSzepCafeteriaId($data['szepPocketId']);<br />
			<br />
			<font>
				/**<br />
				&nbsp;* The customer will be redirected to the payment page<br />
				&nbsp;*/
			</font><br />
			$initRequest->setGatewayPaymentPage(true);<br />
			<br />
			<font>
				/**<br />
				&nbsp;* Set card data if gatewayPaymentPage=false<br />
				&nbsp;*/
			</font><br />
			$initRequest
			<blockquote>->setMkbSzepCardNumber($data['cardNumber'])</blockquote>
			<blockquote>->setMkbSzepCvv($data['cardCvc']);</blockquote>
		</span>
		<span class="providerData code KHBSZEP">
			<br />
			<font>
				/**<br />
				&nbsp;* KHB SZÉP Pocket IDs:<br />
				&nbsp;* <br />
				&nbsp;* accommodation => 1<br />
				&nbsp;* hospitality => 2<br />
				&nbsp;* leisure => 3<br />
				&nbsp;*/
			</font><br />
			$data['extra']['KhbCardPocketId'] = $data['szepPocketId'];<br />
		</span>
		<span class="providerData code OTP">
			<br />
			if (isset($data['szepPocketId']) && !empty($data['szepPocketId'])) {
				<blockquote>
					<font>
						/**<br />
						&nbsp;* OTP SZÉP Pocket IDs:<br />
						&nbsp;* <br />
						&nbsp;* accommodation => 09<br />
						&nbsp;* hospitality => 07<br />
						&nbsp;* leisure => 08<br />
						&nbsp;*/
					</font><br />
					$initRequest->setOtpCardPocketId($data['szepPocketId']);
				</blockquote>
			}<br />
		</span>
		<span class="providerData code OTP">
			<br />
			if (isset($data['otpConsumerRegistrationId']) && !empty($data['otpConsumerRegistrationId'])) {
				<blockquote>
					<font>
						/**<br />
						&nbsp;* If you want to start OTP One Click Payment you will need to register the customer<br />
						&nbsp;* It's possible to use the following functions for the further One Click Payment:<br />
						&nbsp;* <blockquote style="display: inline-block">- <a href="/views/?action=startRP">Recurring Payment</a> or</blockquote><br />
						&nbsp;* <blockquote style="display: inline-block">- Pay by OTP Bank (two-party) with OTP consumer registration ID</blockquote><br />
						&nbsp;*/
					</font><br />
					$initRequest->setOtpConsumerRegistrationId($data['otpConsumerRegistrationId']);
				</blockquote>
			}<br />
		</span>
		<span class="providerData code OTP2">
			<br />
			if (isset($data['otpConsumerRegistrationId']) && !empty($data['otpConsumerRegistrationId'])) {
				<blockquote>
					<font>
						/**<br />
						&nbsp;* It's possible to use the following functions for the further One Click Payment:<br />
						&nbsp;* <blockquote style="display: inline-block">- <a href="/views/?action=startRP">Recurring Payment</a> or</blockquote><br />
						&nbsp;* <blockquote style="display: inline-block">- Pay by OTP Bank (two-party) with OTP consumer registration ID</blockquote><br />
						&nbsp;*/
					</font><br />
					$initRequest->setOtpConsumerRegistrationId($data['otpConsumerRegistrationId']);
				</blockquote>
			}<br />
			<br />
			<font>
				/**<br />
				&nbsp;* If the merchant asks for the card data<br />
				&nbsp;*/
			</font><br />
			$initRequest
			<blockquote>->setOtpCardNumber($data['cardNumber'])</blockquote>
			<blockquote>->setOtpExpiration($data['cardExpiration'])</blockquote>
			<blockquote>->setOtpCvc($data['cardCvc']);</blockquote>
		</span>
		<span class="providerData code OTPay">
			<br />
			if (isset($data['phoneNumber']) && !empty($data['phoneNumber'])) {
				<blockquote>
					<font>
						/**<br />
						&nbsp;* If you want to set phone number<br />
						&nbsp;*/
					</font><br />
					$initRequest->setMppPhoneNumber($data['phoneNumber']);<br />
				</blockquote>
			}<br />
		</span>
		<span class="providerData code Barion2 Borgun2 Escalion GP OTPSimple PayURest Saferpay Virpay">
			<br />
			<font>
				/**<br />
				&nbsp;* If you want to start One Click Payment<br />
				&nbsp;* Card registration or pay by a registered card on Payment Gateway page<br />
				&nbsp;* It's possible to use the following functions for the further transactions:<br />
				&nbsp;* <blockquote style="display: inline-block">- <a href="/views/?action=startRP">Recurring Payment</a></blockquote><br />
				&nbsp;* <blockquote style="display: inline-block">- <a href="/views/?action=selectOcp">One Click Payment without any intermediate page</a></blockquote><br />
				&nbsp;*/
			</font><br />
			$initRequest->setOneClickPayment(true);<br />
		</span>
		<span class="providerData code Barion2 Borgun2 Escalion GP OTPSimple PayURest Saferpay Virpay">
			<br />
			<font>
				/**<br />
				&nbsp;* If you want to use normal payment with card registration <br />
				&nbsp;*/
			</font><br />
			$initRequest->setOneClickForcedRegistration(true);<br />
		</span>
		<span class="providerData code PayPal">
			<br />
			<font>
				/**<br />
				&nbsp;* If you want to register Reference or Recurring payment<br />
				&nbsp;*/
			</font><br />
			$initRequest->setOneClickPayment(true);<br />
			<br />
			if (isset($data['REFERENCE']) && !empty($data['REFERENCE'])) {
				<blockquote>
					<font>
						/**<br />
						&nbsp;* If you want to register Recurring payment<br />
						&nbsp;*/
					</font><br />
					$data['extra']['REFERENCE'] = array(<br />
						<blockquote>'INITAMT' => $data['REFERENCE']['INITAMT'],</blockquote>
						<blockquote>'PROFILESTARTDATE' => $data['REFERENCE']['PROFILESTARTDATE'],</blockquote>
						<blockquote>'BILLINGFREQUENCY' => $data['REFERENCE']['BILLINGFREQUENCY'],</blockquote>
						<blockquote>'BILLINGPERIOD' => $data['REFERENCE']['BILLINGPERIOD'],</blockquote>
						<blockquote>'DESC' => $data['REFERENCE']['DESC'],</blockquote>
					);<br />
				</blockquote>
			}<br />
		</span>
		<span class="providerData code Saferpay">
			<br />
			if (isset($data['SaferpayPaymentMethods']) && !empty($data['SaferpayPaymentMethods'])) {
				<blockquote>
					<font>
						/**<br />
						&nbsp;* Set payment methods if you want<br />
						&nbsp;*/
					</font><br />
					$data['extra']['SaferpayPaymentMethods'] = $data['SaferpayPaymentMethods'][];<br />
				</blockquote>
			}<br />
			<br />
			if (isset($data['SaferpayWallets']) && !empty($data['SaferpayWallets'])) {
				<blockquote>
					<font>
						/**<br />
						&nbsp;* Set wallets if you want<br />
						&nbsp;*/
					</font><br />
					$data['extra']['SaferpayWallets'] = $data['SaferpayWallets'][];<br />
				</blockquote>
			}<br />
		</span>
		<span class="providerData code QPAY">
			<br />
			if (isset($data['QpayPaymentType']) && !empty($data['QpayPaymentType'])) {
				<blockquote>
					<font>
						/**<br />
						&nbsp;* Set payment type if you want<br />
						&nbsp;*/
					</font><br />
					$data['extra']['QpayPaymentType'] = $data['QpayPaymentType'];<br />
				</blockquote>
			}<br />
		</span>
		<span class="providerData code Barion2">
			<br />
			if (isset($data['Barion2']) && is_array($data['Barion2']) && !empty($data['Barion2'])) {
				<blockquote>
					<font>
						/**<br />
						&nbsp;* If you want to set custom data<br />
						&nbsp;*/
					</font><br />
					$data['extra']['Barion2'] = $data['Barion2'];<br />
				</blockquote>
			}<br />
		</span>
		<span class="providerData code Paysafecash">
			<br />
			<font>
				/**<br />
				&nbsp;* Send customer data to prefill the registration form (optional)<br />
				&nbsp;*/
			</font><br />
			$data['extra']['Paysafecash'] = array(<br />
				<blockquote>'salutation' => 'salutation',</blockquote>
				<blockquote>'firstName' => 'First name',</blockquote>
				<blockquote>'lastName' => 'Last name',</blockquote>
				<blockquote>'birthDate' => 'Birth date',</blockquote>
				<blockquote>'phoneNumber' => 'Phone number',</blockquote>
				<blockquote>'email' => 'email',</blockquote>
				<blockquote>'address1' => 'Address',</blockquote>
				<blockquote>'city' => 'city',</blockquote>
				<blockquote>'postalCode' => 'Postal code'</blockquote>
			);<br />
		</span>
		<span class="providerData code BBAruhitel">
			<br />
			<font>
				/**<br />
				&nbsp;* If you want to set custom data<br />
				&nbsp;*/
			</font><br />
			$data['extra'] = array(<br />
				<blockquote>'firstName' => 'The loan applicant's first name',</blockquote>
				<blockquote>'lastName' => 'The loan applicant's last name',</blockquote>
				<blockquote>'e-mail' => 'The loan applicant's email address',</blockquote>
				<blockquote>'term' => 'The term of the loan',</blockquote>
				<blockquote>'offerId' => 'Loan offer identifier'</blockquote>
				<blockquote>'testMode' => 'Use BIG FISH Payment Gateway test interface'</blockquote>
			);<br />
		</span>
		<span class="providerData code PayURest">
			<br />
			<font>
				/**<br />
				&nbsp;* If you want to set custom data<br />
				&nbsp;*/
			</font><br />
			$data['extra'] = array(<br />
				<blockquote>'timeout' => 'Timeout in minutes',</blockquote>
				<blockquote>'payMethods' => array(</blockquote>
				<blockquote><blockquote>'payMethod' => array(</blockquote></blockquote>
				<blockquote><blockquote><blockquote>'type' => 'Payment method type (PBL, CARD_TOKEN, PAYMENT_WALL)',</blockquote></blockquote></blockquote>
				<blockquote><blockquote><blockquote>'value' => 'Payment method value'</blockquote></blockquote></blockquote>
				<blockquote><blockquote>),</blockquote></blockquote>
				<blockquote>),</blockquote>
				<blockquote>'buyer' => array(</blockquote>
				<blockquote><blockquote>'nin' => 'National Identification Number',</blockquote></blockquote>
				<blockquote><blockquote>'language' => 'Denotes the language version of e-mail messages sent from PayU to the payer',</blockquote></blockquote>
				<blockquote><blockquote>'delivery' => array(</blockquote></blockquote>
				<blockquote><blockquote><blockquote>'postalBox' => 'Postal box',</blockquote></blockquote></blockquote>
				<blockquote><blockquote>)</blockquote></blockquote>
				<blockquote>)</blockquote>
			);<br />
		</span>
		<br />
		if (isset($data['extra']) && is_array($data['extra'])) {<br />
			<blockquote>$initRequest->setExtra($data['extra']);</blockquote>
		}<br />
		<br />
		<font>
			/**<br />
			 * SCA - PSD2<br />
			 * For 3DS authentication send data that you know about your customer<br />
			 */
		</font>
		<br />
		$info = new \BigFish\PaymentGateway\Data\Info();<br />
		$infoCustomerGeneral = new \BigFish\PaymentGateway\Data\Info\InfoCustomerGeneral();<br />
		<br />
		$infoCustomerGeneral<br />
			<blockquote>->setFirstName('John')</blockquote>
			<blockquote>->setLastName('Doe')</blockquote>
			<blockquote>->setEmail('test@testdomain.com')</blockquote>
			<blockquote>->setIp('10.0.0.10');</blockquote>
		<br />
		$info->setData($infoCustomerGeneral);<br />
		<br />
		$infoOrderShipping = new \BigFish\PaymentGateway\Data\Info\InfoOrderShippingData();<br />
		<br />
		$infoOrderShipping<br />
			<blockquote>->setFirstName('John')</blockquote>
			<blockquote>->setLastName('Doe')</blockquote>
			<blockquote>->setEmail('test@testmail.com')</blockquote>
			<blockquote>->setCity('Budapest')</blockquote>
			<blockquote>->setCountry('Hungary')</blockquote>
			<blockquote>->setCountryCode1('348')</blockquote>
			<blockquote>->setCountryCode2('HU')</blockquote>
			<blockquote>->setCountryCode3('HU-BU')</blockquote>
			<blockquote>->setLine1('Nyugati ter')</blockquote>
			<blockquote>->setLine2('1-2')</blockquote>
			<blockquote>->setPostalCode('1066');</blockquote>
		<br />
		$info->setData($infoOrderShipping);<br />
		<br />
		<font>
			// Set Info object
		</font><br />
		$initRequest->setInfoObject($info);<br />
		<br />
		$initResponse = \BigFish\PaymentGateway::init($initRequest);<br />
		<br />
		if ($initResponse->ResultCode == "SUCCESSFUL" && $initResponse->TransactionId) {<br />
			<blockquote>
				<font>
					/**<br />
					&nbsp;* Save TransactionId into database before call start().<br />
					&nbsp;*/
				</font><br />
				$startResponse = \BigFish\PaymentGateway::start(<br />
					<blockquote>new \BigFish\PaymentGateway\Request\Start($initResponse->TransactionId)</blockquote>
				);
				<br />
				<span class="providerData code Escalion OTPSimple Saferpay">
					<br />
					<font>
						/**<br />
						&nbsp;* Use the following start method if you want to register a NEW card to One Click<br />
						&nbsp;* ($initRequest->setOneClickPayment(true) method call is necessary)<br />
						&nbsp;*/
					</font><br />
					$startRequest = new \BigFish\PaymentGateway\Request\Start(<br />
						<blockquote>$initResponse->TransactionId</blockquote>
					);<br />
					$startUrl = \BigFish\PaymentGateway::getStartUrl($startRequest);<br />
					<br />
					if (isset($_POST['addNewCard'])) {<br />
						$startUrl .= '&normalPayment';<br />
					}<br />
					<br />
					header('Location: ' . $startUrl);<br />
					exit();<br />
				</span>
				
			</blockquote>
		}
