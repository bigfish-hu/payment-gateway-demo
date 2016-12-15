		<b>Get registered card data belonging to customer:</b><br />
		<br />
		Required data (HTTP POST):<br />
		<br />
		method = OneClickOptions<br />
		json = {json encoded variables}<br />
		<br />
		Parameter (* if necessary):<br />
		<br />
		StoreName*<br />
		ProviderName*<br />
		UserId*<br />
		<br />
		Example:<br />
		<br />
		method=OneClickOptions&json={"StoreName":"sdk_test","ProviderName":"OTPSimple","UserId":"[One Click Payment registered customer identifier]"}<br />
		<br />
		Response data (JSON format):<br />
		<br />
		Data<br />
		ResultCode<br />
		ResultMessage<br />
		<br />
