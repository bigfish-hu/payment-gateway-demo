		$paymentLinkCreateRequest = new \BigFish\PaymentGateway\Request\PaymentLinkCreate();<br />
		<br />
		$paymentLinkCreateRequest
			<blockquote>->setProviderName('<span class="showProviderName"></span>')</blockquote>
			<blockquote>->setAmount($data['amount'])</blockquote>
			<blockquote>->setCurrency($data['currency'])</blockquote>
			<blockquote>->setOrderId($data['orderId'])</blockquote>
			<blockquote>->setUserId($data['userId'])</blockquote>
			<blockquote>->setLanguage($data['language']);</blockquote>
			<blockquote>->setExpirationTime($data['expirationTime']);</blockquote>
			<blockquote>->setNotificationEmail($data['notificationEmail']);</blockquote>
			<blockquote>->setEmailNotificationOnlySuccess($data['emailNotificationOnlySuccess']);</blockquote>
		<span class="providerData code Barion2 Borgun2 FHB IPG OTP OTP2 OTPay OTPSimple PayU2 UniCredit QPAY Saferpay">
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
		<br />
		if (isset($data['extra']) && is_array($data['extra'])) {<br />
			<blockquote>$paymentLinkCreateRequest->setExtra($data['extra']);</blockquote>
		}<br />
		<br />
		$paymentLinkCreateResponse = \BigFish\PaymentGateway::paymentLinkCreate($paymentLinkCreateRequest);
