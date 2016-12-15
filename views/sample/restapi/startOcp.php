		<b>Init One Click Payment transaction (without any intermediate page):</b><br />
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
		OneClickPayment*<br />
		OneClickReferenceId*<br />
		ModuleName<br />
		ModuleVersion<br />
		<br />
		Example:<br />
		<br />
		method=Init&json={"StoreName":"sdk_test","ProviderName":"<?=$_POST['providerName'];?>","ResponseUrl":"<?=json_encode($this->responseUrl);?>","Amount":"100","Currency":"HUF","OrderId":"DEMO_ORDER","UserId":"<?=$_POST['userId'];?>","OneClickPayment":"1","OneClickReferenceId":"[cardReferenceId]"}<br />
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
