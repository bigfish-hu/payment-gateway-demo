		<font>
			/**<br />
			&nbsp;* Cancel One Click token (Borgun2, OTPSimple, PayURest, Virpay):<br />
			&nbsp;* set that transaction ID which you received the first registered payment<br />
			&nbsp;*/
		</font><br />
		$oneClickTokenCancelResponse = \BigFish\PaymentGateway::oneClickTokenCancel(<br />
			<blockquote>new \BigFish\PaymentGateway\Request\OneClickTokenCancel($data['TransactionId'])</blockquote>
		);
