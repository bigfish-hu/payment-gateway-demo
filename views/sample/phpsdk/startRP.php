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
		<font>
			/**<br />
			* SCA - PSD2<br />
			* For 3DS authentication send data that you know about your customer<br />
			*/
		</font>
		<br />
		$info = new \BigFish\PaymentGateway\Data\Info();<br />
		$infoCustomerGeneral = new \BigFish\PaymentGateway\Data\Info\InfoCustomerGeneral();<br />
		<br />
		$infoCustomerGeneral<br />
			<blockquote>->setFirstName('John')</blockquote>
			<blockquote>->setLastName('Doe')</blockquote>
			<blockquote>->setEmail('test@testdomain.com')</blockquote>
			<blockquote>->setIp('10.0.0.10');</blockquote>
		<br />
		$info->setData($infoCustomerGeneral);<br />
		<br />
		$infoOrderShipping = new \BigFish\PaymentGateway\Data\Info\InfoOrderShippingData();<br />
		<br />
		$infoOrderShipping<br />
			<blockquote>->setFirstName('John')</blockquote>
			<blockquote>->setLastName('Doe')</blockquote>
			<blockquote>->setCity('Budapest')</blockquote>
			<blockquote>->setCountry('Hungary')</blockquote>
			<blockquote>->setCountryCode('348')</blockquote>
			<blockquote>->setLine1('Nyugati ter')</blockquote>
			<blockquote>->setLine2('1-2')</blockquote>
			<blockquote>->setPostalCode('1066');</blockquote>
		<br />
		$info->setData($infoOrderShipping);<br />
		<br />
		<font>
			// Set Info object
		</font><br />
		$initRPRequest->setInfoObject($info);
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
