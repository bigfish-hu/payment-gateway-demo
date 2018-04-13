		<b>Cancel all One Click Token (Borgun2, OTPSimple, Virpay):</b><br />
		<br />
		Required data (HTTP POST):<br />
		<br />
		method = OneClickTokenCancelAll<br />
		json = {json encoded variable}<br />
		<br />
		Parameters (* if necessary):<br />
		<br />
		StoreName*<br />
		ProviderName*<br />
		UserId*<br />
		<br />
		Example:<br />
		<br />
		method=OneClickTokenCancelAll&json={"StoreName":"sdk_test","ProviderName":"OTPSimple","UserId":"USER-ID"}<br />
		<br />
		Response data (JSON format):<br />
		<br />
		ResultCode<br />
		ResultData<br />
		ResultMessage<br />
		<br />
