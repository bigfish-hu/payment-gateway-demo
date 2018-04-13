		<font>
			/**<br />
			&nbsp;* Cancel all One Click token (Borgun2, OTPSimple, Virpay):<br />
			&nbsp;* set provider name and registered user ID<br />
			&nbsp;*/
		</font><br />
		$oneClickTokenCancelAllResponse = \BigFish\PaymentGateway::oneClickTokenCancelAll(<br />
			<blockquote>new \BigFish\PaymentGateway\Request\OneClickTokenCancelAll($data['providerName'], $data['userId'])</blockquote>
		);
