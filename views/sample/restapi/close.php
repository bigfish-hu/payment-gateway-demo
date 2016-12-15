		<b>Close transaction:</b><br />
		<br />
		Required data (HTTP POST):<br />
		<br />
		method = Close<br />
		json = {json encoded variables}<br />
		<br />
		Parameters (* if necessary):<br />
		<br />
		TransactionId*<br />
		Approved (default true)<br />
		<br />
		Example:<br />
		<br />
		method=Close&json={"TransactionId":"[TransactionId received by Init]","Approved":"false"}<br />
		<br />
		Response data (JSON format):<br />
		<br />
		TransactionId<br />
		ResultCode<br />
		ResultMessage<br />
		<br />
