		<b>Get payment link details:</b><br />
		<br />
		Required data (HTTP POST):<br />
		<br />
		method = PaymentLinkDetails<br />
		json = {json encoded variable}<br />
		<br />
		Parameter (* if necessary):<br />
		<br />
		PaymentLinkName*<br />
		<br />
		Example:<br />
		<br />
		method=PaymentLinkDetails&json={"PaymentLinkName":"[PaymentLinkName received by PaymentLinkCreate]"}<br />
		<br />
		Response data (JSON format):<br />
		<br />
		CommonData<br />
		RelatedTransactions<br />
		ResultCode<br />
		<br />
