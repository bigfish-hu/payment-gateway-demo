		<b>Init recurring payment:</b><br />
		<br />
		Required data (HTTP POST):<br />
		<br />
		method = InitRP<br />
		json = {json encoded variables}<br />
		<br />
		Parameters (* if necessary):<br />
		<br />
		StoreName*<br />
		ReferenceTransactionId*<br />
		ResponseUrl*<br />
		Amount*<br />
		Currency*<br />
		OrderId*<br />
		UserId*<br />
		ModuleName<br />
		ModuleVersion<br />
		<br />
		Example:<br />
		<br />
		method=Init&json={"StoreName":"sdk_test","ReferenceTransactionId":"[One Click Payment registered transaction ID]","ResponseUrl":"<?=json_encode($this->responseUrl);?>","Amount":"100","Currency":"HUF","OrderId":"DEMO_ORDER","UserId":"DEMO_USER"}<br />
		<br />
		Response data (JSON format):<br />
		<br />
		TransactionId<br />
		ResultCode<br />
		ResultMessage<br />
		<br />
		<br />
		<b>Start recurring transaction:</b><br />
		<br />
		HTTP Redirect<br />
		<br />
		Test URL: <a>https://test.paymentgateway.hu/StartRP</a><br />
		<br />
		Production URL: <a>https://www.paymentgateway.hu/StartRP</a><br />
		<br />
		Required data (HTTP GET):<br />
		<br />
		TransactionId<br />
		<br />
		Example:<br />
		<br />
		<a>https://test.paymentgateway.hu/StartRP?TransactionId=[TransactionId received by InitRP]</a><br />
		<br />
