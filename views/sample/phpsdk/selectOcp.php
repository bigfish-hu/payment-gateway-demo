		<font>
			/**<br />
			&nbsp;* Get registered card data belonging to customer<br />
			&nbsp;*/
		</font><br />
		$oneClickOptionsResponse = \BigFish\PaymentGateway::oneClickOptions(<br />
			<blockquote>new \BigFish\PaymentGateway\Request\OneClickOptions(<br />
				<blockquote>$data['providerName'],</blockquote>
				<blockquote>$data['userId']</blockquote>
			)</blockquote>
		);
