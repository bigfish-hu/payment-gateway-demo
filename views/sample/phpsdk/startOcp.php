		$initRequest = new \BigFish\PaymentGateway\Request\Init();<br />
		<br />
		$initRequest
			<blockquote>->setProviderName('<?=$_POST['providerName'];?>')</blockquote>
			<blockquote>->setResponseUrl($data['responseUrl'])</blockquote>
			<blockquote>->setAmount($data['amount'])</blockquote>
			<blockquote>->setCurrency($data['currency'])</blockquote>
			<blockquote>->setOrderId($data['orderId'])</blockquote>
			<blockquote>->setUserId('<?=$_POST['userId'];?>')</blockquote>
			<blockquote>->setOneClickPayment(true);</blockquote>
			<blockquote>->setOneClickReferenceId($data['cardReferenceId']);</blockquote>
		<br />
		$initResponse = \BigFish\PaymentGateway::init($initRequest);<br />
		<br />
		if ($initResponse->ResultCode == "SUCCESSFUL" && $initResponse->TransactionId) {<br />
			<blockquote>
				<font>
					/**<br />
					&nbsp;* Save TransactionId into database before call start().<br />
					&nbsp;*/
				</font><br />
				$startResponse = \BigFish\PaymentGateway::start(<br />
					<blockquote>new \BigFish\PaymentGateway\Request\Start($initResponse->TransactionId)</blockquote>
				);
			</blockquote>
		}
