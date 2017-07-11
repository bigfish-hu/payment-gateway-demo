		<b>Cancel One Click Token (Borgun2, OTPSimple):</b><br />
		<br />
		Required data (HTTP POST):<br />
		<br />
		method = OneClickTokenCancel<br />
		json = {json encoded variable}<br />
		<br />
		Parameters (* if necessary):<br />
		<br />
		TransactionId*<br />
		<br />
		Example:<br />
		<br />
		method=OneClickTokenCancel&json={"TransactionId":"[TransactionId received by registered One Click Payment]"}<br />
		<br />
		Response data (JSON format):<br />
		<br />
		TransactionId<br />
		ResultCode<br />
		ResultMessage<br />
		<br />
