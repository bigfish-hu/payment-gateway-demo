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
		<span class="providerData code Barion2 Borgun2 FHB GP IPG OTP OTP2 OTPay OTPSimple PayU2 UniCredit QPAY Saferpay Virpay">
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
		<span class="providerData code Barion2 Borgun2 Escalion GP OTPSimple Saferpay Virpay">
			<br />
			<font>
				/**<br />
				&nbsp;* If you want to start One Click Payment<br />
				&nbsp;* Card registration or pay by a registered card on Payment Gateway page<br />
				&nbsp;* It's possible to use the following functions for the further transactions:<br />
				&nbsp;* <blockquote style="display: inline-block">- <a href="/views/?action=startRP">Recurring Payment</a> (recommended for OTPSimple)</blockquote><br />
				&nbsp;* <blockquote style="display: inline-block">- <a href="/views/?action=selectOcp">One Click Payment without any intermediate page</a> (recommended for OTPSimple)</blockquote><br />
				&nbsp;*/
			</font><br />
			$initRequest->setOneClickPayment(true);<br />
		</span>
		<span class="providerData code OTPSimple">
			<br />
			<font>
				/**<br />
				&nbsp;* Send custom data if you want<br />
				&nbsp;*/
			</font><br />
			$data['extra'] = array(<br />
				<blockquote>'ORDER_PNAME' => 'Product name',</blockquote>
				<blockquote>'ORDER_PCODE' => 'Product unique id',</blockquote>
				<blockquote>'ORDER_PINFO' => 'Product description',</blockquote>
				<blockquote>'BILL_FNAME' => 'Customer first name',</blockquote>
				<blockquote>'BILL_LNAME' => 'Customer last name',</blockquote>
				<blockquote>'BILL_PHONE' => 'Customer phone number',</blockquote>
				<blockquote>'BILL_FAX' => 'Customer fax',</blockquote>
				<blockquote>'BILL_ADDRESS' => 'Customer billing address',</blockquote>
				<blockquote>'BILL_ADDRESS2' => 'More customer billing address',</blockquote>
				<blockquote>'BILL_ZIPCODE' => 'Customer billing zip code',</blockquote>
				<blockquote>'BILL_CITY' => 'Customer billing city',</blockquote>
				<blockquote>'BILL_STATE' => 'Customer billing state',</blockquote>
				<blockquote>'BILL_COUNTRYCODE' => 'Customer billing country code',</blockquote>
				<blockquote>'BILL_EMAIL' => 'Customer billing email',</blockquote>
				<blockquote>'DELIVERY_FNAME' => 'Customer delivery first name',</blockquote>
				<blockquote>'DELIVERY_LNAME' => 'Customer delivery last name',</blockquote>
				<blockquote>'DELIVERY_PHONE' => 'Customer delivery phone number',</blockquote>
				<blockquote>'DELIVERY_ADDRESS' => 'Customer delivery address',</blockquote>
				<blockquote>'DELIVERY_ADDRESS2' => 'More customer delivery address',</blockquote>
				<blockquote>'DELIVERY_ZIPCODE' => 'Customer delivery zip code',</blockquote>
				<blockquote>'DELIVERY_CITY' => 'Customer delivery city',</blockquote>
				<blockquote>'DELIVERY_STATE' => 'Customer delivery state',</blockquote>
				<blockquote>'DELIVERY_COUNTRYCODE' => 'Customer delivery country code',</blockquote>
			);<br />
			<br />
			<font>
				/**<br />
				&nbsp;* Send more than one product<br />
				&nbsp;*/
			</font><br />
			$data['extra']['productItems'] = array(<br />
				<blockquote>array(
					<blockquote>'Name' => 'Product name 1',</blockquote>
					<blockquote>'SKU' => 'Product ID 1',</blockquote>
					<blockquote>'Description' => 'Product description 1',</blockquote>
					<blockquote>'Price' => 'Product price',</blockquote>
					<blockquote>'Quantity' => 'Ordered quantity'</blockquote>
				),</blockquote>
				<blockquote>array(
					<blockquote>'Name' => 'Product name 2',</blockquote>
					<blockquote>'SKU' => 'Product ID 2',</blockquote>
					<blockquote>'Description' => 'Product description 2',</blockquote>
					<blockquote>'Price' => 'Product price',</blockquote>
					<blockquote>'Quantity' => 'Ordered quantity'</blockquote>
				),</blockquote>
				<blockquote>...</blockquote>
			);<br />
		</span>
		<span class="providerData code Borgun">
			<br />
			<font>
				/**<br />
				&nbsp;* Set product data if you want<br />
				&nbsp;*/
			</font><br />
			$data['extra']['productItems'] = array(<br />
				<blockquote>array(
					<blockquote>'Name' => 'Product name 1',</blockquote>
					<blockquote>'Price' => 'Product price',</blockquote>
					<blockquote>'Quantity' => 'Ordered quantity'</blockquote>
				),</blockquote>
				<blockquote>array(
					<blockquote>'Name' => 'Product name 2',</blockquote>
					<blockquote>'Price' => 'Product price',</blockquote>
					<blockquote>'Quantity' => 'Ordered quantity'</blockquote>
				),</blockquote>
				<blockquote>...</blockquote>
			);<br />
		</span>
		<span class="providerData code PayU2">
			<br />
			<font>
				/**<br />
				&nbsp;* Set customer email if you want<br />
				&nbsp;*/
			</font><br />
			$data['extra']['email'] = $data['email'];<br />
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
			if (isset($data['Paysafecash']) && is_array($data['Paysafecash']) && !empty($data['Paysafecash'])) {
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
				);
			}<br />
		</span>
		<span class="providerData code BBAruhitel">
			<br />
			if (isset($data['BBAruhitel']) && is_array($data['BBAruhitel']) && !empty($data['BBAruhitel'])) {
				<font>
					/**<br />
					&nbsp;* If you want to set custom data<br />
					&nbsp;*/
				</font><br />
				$data['extra']['BBAruhitel'] = array(<br />
					<blockquote>'firstName' => 'John',</blockquote>
					<blockquote>'lastName' => 'Doe',</blockquote>
					<blockquote>'e-mail' => 'test@bbaruhiteltest.hu',</blockquote>
					<blockquote>'term' => '10',</blockquote>
					<blockquote>'offerId' => 'tesztkonstrukcio1'</blockquote>
				);
			}<br />
		</span>
		<br />
		if (isset($data['extra']) && is_array($data['extra'])) {<br />
			<blockquote>$initRequest->setExtra($data['extra']);</blockquote>
		}<br />
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
