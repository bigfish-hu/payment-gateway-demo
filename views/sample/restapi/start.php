		<b>Init transaction:</b><br />
		<br />
		Required data (HTTP POST):<br />
		<br />
		method = Init<br />
		json = {json encoded variables}<br />
		<br />
		Parameters (* if necessary):<br />
		<br />
		StoreName*<br />
		ProviderName*<br />
		ResponseUrl*<br />
		Amount*<br />
		Currency*<br />
		OrderId*<br />
		UserId*<br />
		Language<br />
		MppPhoneNumber<br />
		OtpCardNumber<br />
		OtpExpiration<br />
		OtpCvc<br />
		OtpCardPocketId<br />
		OtpConsumerRegistrationId (OTP One Click Payment)<br />
		MkbSzepCafeteriaId<br />
		MkbSzepCardNumber<br />
		MkbSzepCvv<br />
		OneClickPayment<br />
		OneClickReferenceId<br />
		AutoCommit (2-step payment if false)<br />
		Extra (<a href="https://github.com/bigfish-hu/payment-gateway-php-sdk/blob/master/src/BigFish/PaymentGateway/Request/Init.php#L573" target="_blank">See here how to use: public function setExtra()</a>)<br />
		GatewayPaymentPage (MKBSZEP: Card data handling on Payment Gateway page or Merchant website.)<br />
		NotificationUrl<br />
		ModuleName<br />
		ModuleVersion<br />
		<br />
		Example:<br />
		<br />
		method=Init&json={"StoreName":"sdk_test","ProviderName":"OTP","ResponseUrl":"<?=json_encode($this->responseUrl);?>","Amount":"100","Currency":"HUF","OrderId":"DEMO_ORDER","UserId":"DEMO_USER","Language":"HU"}<br />
		<br />
		Response data (JSON format):<br />
		<br />
		TransactionId<br />
		ResultCode<br />
		ResultMessage<br />
		<br />
		<br />
		<b>Start transaction:</b><br />
		<br />
		HTTP Redirect<br />
		<br />
		Test URL: <a>https://test.paymentgateway.hu/Start</a><br />
		<br />
		Production URL: <a>https://www.paymentgateway.hu/Start</a><br />
		<br />
		Required data (HTTP GET):<br />
		<br />
		TransactionId<br />
		<br />
		Example:<br />
		<br />
		<a>https://test.paymentgateway.hu/Start?TransactionId=[TransactionId received by Init]</a><br />
		<br />
