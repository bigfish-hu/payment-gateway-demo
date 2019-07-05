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
		$initRequest->setInfoObject($info);<br />
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
