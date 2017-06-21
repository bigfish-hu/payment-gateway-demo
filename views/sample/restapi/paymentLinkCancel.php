		<b>Cancel payment link:</b><br />
		<br />
		Required data (HTTP POST):<br />
		<br />
		method = PaymentLinkCancel<br />
		json = {json encoded variable}<br />
		<br />
		Parameter (* if necessary):<br />
		<br />
		PaymentLinkName*<br />
		<br />
		Example:<br />
		<br />
		method=PaymentLinkCancel&json={"PaymentLinkName":"[PaymentLinkName received by PaymentLinkCreate]"}<br />
		<br />
		Response data (JSON format):<br />
		<br />
		PaymentLinkName<br />
		Status<br />
		ResultCode<br />
		ResultMessage<br />
		<br />
