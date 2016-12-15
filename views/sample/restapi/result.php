		<b>Get transaction result:</b><br />
		<br />
		Required data (HTTP POST):<br />
		<br />
		method = Result<br />
		json = {json encoded variable}<br />
		<br />
		Parameter (* if necessary):<br />
		<br />
		TransactionId*<br />
		<br />
		Example:<br />
		<br />
		method=Result&json={"TransactionId":"[TransactionId received by Init]"}<br />
		<br />
		Response data (JSON format):<br />
		<br />
		TransactionId<br />
		ResultCode<br />
		ResultMessage<br />
		Anum<br />
		OrderId<br />
		UserId<br />
		ProviderTransactionId<br />
		AutoCommit<br />
		CommitState<br />
		<br />
