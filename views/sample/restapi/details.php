		<b>Get transaction details</b><br />
		<br />
		Required data (HTTP POST):<br />
		<br />
		method = Details<br />
		json = {json encoded variable}<br />
		<br />
		Parameter (* if necessary):<br />
		<br />
		TransactionId*<br />
		<br />
		Example:<br />
		<br />
		method=Details&json={"TransactionId":"[TransactionId received by Init]"}<br />
		<br />
		Response data (JSON format):<br />
		<br />
		CommonData<br />
		ProviderSpecificData<br />
		RelatedTransactions<br />
		ResultCode<br />
		ResultMessage<br />
		ProviderName<br />
		<br />
