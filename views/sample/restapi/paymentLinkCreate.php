		<b>Create payment link:</b><br />
		<br />
		Required data (HTTP POST):<br />
		<br />
		method = PaymentLinkCreate<br />
		json = {json encoded variables}<br />
		<br />
		Parameters (* if necessary):<br />
		<br />
		StoreName*<br />
		ProviderName*<br />
		Amount*<br />
		Currency*<br />
		OrderId<br />
		UserId<br />
		Language<br />
		AutoCommit (2-step payment if false)<br />
		ExpirationTime (YYYY-MM-DD HH:MM:SS)<br />
		NotificationUrl<br />
		NotificationEmail*<br />
		EmailNotificationOnlySuccess<br />
		Extra<br />
		ModuleName<br />
		ModuleVersion<br />
		<br />
		Example:<br />
		<br />
		method=PaymentLinkCreate&json={"StoreName":"sdk_test","ProviderName":"OTP","Amount":"100","Currency":"HUF","OrderId":"DEMO_ORDER","UserId":"DEMO_USER","Language":"HU","NotificationEmail":"somebody@domain.com"}<br />
		<br />
		Response data (JSON format):<br />
		<br />
		PaymentLinkName<br />
		PaymentLinkUrl<br />
		ResultCode<br />
		ResultMessage<br />
		ProviderName<br />
		Amount<br />
		Currency<br />
		Language<br />
		OrderId<br />
		UserId<br />
		AutoCommit<br />
		ExpirationTime<br />
		NotificationEmail<br />
		Status<br />
		Created<br />
		LastModified<br />
