		$initRPRequest = new \BigFish\PaymentGateway\Request\InitRP();<br />
		<br />
		$initRPRequest
			<blockquote>->setReferenceTransactionId($data['referenceTransactionId'])</blockquote>
			<blockquote>->setResponseUrl($data['responseUrl'])</blockquote>
			<blockquote>->setAmount($data['amount'])</blockquote>
			<blockquote>->setCurrency($data['currency'])</blockquote>
			<blockquote>->setOrderId($data['orderId'])</blockquote>
			<blockquote>->setUserId($data['userId'])</blockquote>
		<br />
		$initRPResponse = \BigFish\PaymentGateway::initRP($initRPRequest);<br />
		<br />
		if ($initRPResponse->ResultCode == "SUCCESSFUL" && $initRPResponse->TransactionId) {<br />
			<blockquote>
				<font>
					/**<br />
					&nbsp;* Save TransactionId into database before call start().<br />
					&nbsp;*/
				</font><br />
				$startRPResponse = \BigFish\PaymentGateway::startRP(<br />
					<blockquote>new \BigFish\PaymentGateway\Request\StartRP($initRPResponse->TransactionId)</blockquote>
				);
			</blockquote>
		}
