		$paymentLinkCreateRequest = new \BigFish\PaymentGateway\Request\PaymentLinkCreate();<br />
		<br />
		$paymentLinkCreateRequest
			<blockquote>->setProviderName('<span class="showProviderName"></span>')</blockquote>
			<blockquote>->setAmount($data['amount'])</blockquote>
			<blockquote>->setCurrency($data['currency'])</blockquote>
			<blockquote>->setOrderId($data['orderId'])</blockquote>
			<blockquote>->setUserId($data['userId'])</blockquote>
			<blockquote>->setLanguage($data['language'])</blockquote>
			<blockquote>->setExpirationTime($data['expirationTime'])</blockquote>
			<blockquote>->setNotificationEmail($data['notificationEmail'])</blockquote>
			<blockquote>->setEmailNotificationOnlySuccess($data['emailNotificationOnlySuccess']);</blockquote>
		<span class="providerData code Barion2 Borgun2 FHB GP IPG OTP OTP2 OTPay OTPSimple PayU2 PayURest UniCredit QPAY Saferpay Virpay">
			<br />
			<font>
				/**<br />
				&nbsp;* If you want to start 2-step payment<br />
				&nbsp;*/
			</font><br />
			$paymentLinkCreateRequest->setAutoCommit(false);<br />
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
			$data['extra']['MkbSzepCafeteriaId'] = $data['szepPocketId'];<br />
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
					$data['extra']['OtpCardPocketId'] = $data['szepPocketId'];<br />
				</blockquote>
			}<br />
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
				<blockquote>'ORDER_PINFO' => Product description'',</blockquote>
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
				<blockquote><blockquote>'customerIp' => 'Buyer's IP address',</blockquote></blockquote>
				<blockquote><blockquote>'email' => 'Buyer's email address',</blockquote></blockquote>
				<blockquote><blockquote>'phone' => 'Buyer's telephone number',</blockquote></blockquote>
				<blockquote><blockquote>'firstName' => 'Buyer's first name',</blockquote></blockquote>
				<blockquote><blockquote>'lastName' => 'Buyer's last name',</blockquote></blockquote>
				<blockquote><blockquote>'nin' => 'National Identification Number',</blockquote></blockquote>
				<blockquote><blockquote>'language' => 'Denotes the language version of e-mail messages sent from PayU to the payer',</blockquote></blockquote>
				<blockquote><blockquote>'delivery' => array(</blockquote></blockquote>
				<blockquote><blockquote><blockquote>'street' => 'Street',</blockquote></blockquote></blockquote>
				<blockquote><blockquote><blockquote>'postalBox' => 'Postal box',</blockquote></blockquote></blockquote>
				<blockquote><blockquote><blockquote>'postalCode' => 'Postal code',</blockquote></blockquote></blockquote>
				<blockquote><blockquote><blockquote>'city' => 'City',</blockquote></blockquote></blockquote>
				<blockquote><blockquote><blockquote>'state' => 'State',</blockquote></blockquote></blockquote>
				<blockquote><blockquote><blockquote>'countryCode' => 'Two-letter country code compliant with ISO-3166',</blockquote></blockquote></blockquote>
				<blockquote><blockquote><blockquote>'name' => 'Address description',</blockquote></blockquote></blockquote>
				<blockquote><blockquote><blockquote>'recipientName' => 'Recipient name',</blockquote></blockquote></blockquote>
				<blockquote><blockquote><blockquote>'recipientEmail' => 'Recipient email',</blockquote></blockquote></blockquote>
				<blockquote><blockquote><blockquote>'recipientPhone' => 'Recipient phone number'</blockquote></blockquote></blockquote>
				<blockquote><blockquote>)</blockquote></blockquote>
				<blockquote>),</blockquote>
				<blockquote>'products' => array(</blockquote>
				<blockquote><blockquote>array(</blockquote></blockquote>
				<blockquote><blockquote><blockquote>'name' => 'Name of the product',</blockquote></blockquote></blockquote>
				<blockquote><blockquote><blockquote>'unitPrice' => 'Unit price',</blockquote></blockquote></blockquote>
				<blockquote><blockquote><blockquote>'quantity' => 'Quantity'</blockquote></blockquote></blockquote>
				<blockquote><blockquote>),</blockquote></blockquote>
				<blockquote><blockquote>...</blockquote></blockquote>
				<blockquote>)</blockquote>
			);<br />
		</span>
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
		$paymentLinkCreateRequest->setInfoObject($info);<br />
		<br />
		if (isset($data['extra']) && is_array($data['extra'])) {<br />
			<blockquote>$paymentLinkCreateRequest->setExtra($data['extra']);</blockquote>
		}<br />
		<br />
		$paymentLinkCreateResponse = \BigFish\PaymentGateway::paymentLinkCreate($paymentLinkCreateRequest);
