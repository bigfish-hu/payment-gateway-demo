		<b>Refund transaction:</b><br />
		<br />
		Required data (HTTP POST):<br />
		<br />
		method = Refund<br />
		json = {json encoded variables}<br />
		<br />
		Parameters (* if necessary):<br />
		<br />
		TransactionId*<br />
		Amount*<br />
		<br />
		Example:<br />
		<br />
		method=Refund&json={"TransactionId":"[TransactionId received by Init]","Amount":"100"}<br />
		<br />
		Response data (JSON format):<br />
		<br />
		TransactionId<br />
		ResultCode<br />
		ResultMessage<br />
		<br />
