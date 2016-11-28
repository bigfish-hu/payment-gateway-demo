<form name="startRPForm" action="/controllers/?action=startRP" method="post" target="_blank">
	<label>
		<span>Reference transaction ID * :</span>
		<input type="text" name="referenceTransactionId" value="">
	</label>

	<label>
		<span>Response URL * :</span>
		<input class="full-width" type="url" name="responseUrl" value="<?=$this->responseUrl;?>">
	</label>

	<label class="col-2">
		<span>Amount * :</span>
		<input type="text" name="amount" value="">
	</label>

	<label class="col-2">
		<span>Currency :</span>
		<select name="currency">
			<option value="HUF">HUF</option>
			<option value="EUR">EUR</option>
			<option value="USD">USD</option>
		</select>
	</label>

	<label class="col-2">
		<span>Order ID * :</span>
		<input type="text" name="orderId" value="">
	</label>

	<label class="col-2">
		<span>User ID * :</span>
		<input type="text" name="userId" value="">
	</label>
	<input type="submit" name="submit" value="Next">
</form>

<div class="description">
	<h2>Specific sample code with PHP SDK</h2>
	<div class="xdebug-var-dump">
		$config = new \BigFish\PaymentGateway\Config();<br />
		<br />
		$config->storeName = $data['storeName'];<br />
		$config->apiKey = $data['apiKey'];<br />
		$config->testMode = true; <font>// Set to false in production environment</font><br />
		<br />
		BigFish\PaymentGateway::setConfig($config);<br />
		<br />
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
					<blockquote>new BigFish\PaymentGateway\Request\StartRP($initRPResponse->TransactionId)</blockquote>
				);
			</blockquote>
		}
	</div>
	<br />
	<div class="text">
		Download PHP SDK from GitHub: <a href="https://github.com/bigfish-hu/payment-gateway-php-sdk" target="_blank">https://github.com/bigfish-hu/payment-gateway-php-sdk</a>
	</div>
</div>

<div class="description">
	<h2>REST API</h2>
	<div class="text">
		<br />
		Test URL: <a>https://test.paymentgateway.hu/api/rest/</a><br />
		<br />
		Production URL: <a>https://www.paymentgateway.hu/api/rest/</a><br />
		<br />
		<br />
		<b>HTTP Basic Authentication:</b><br />
		<br />
		Send base64 encoded StoreName and ApiKey in HTTP Header.<br />
		<br />
		Example:<br />
		<br />
		Authorization: Basic c2RrX3Rlc3Q6ODZhZjMtODBlNGYtZjgyMjgtOTQ5OGYtOTEwYWQ=<br />
		<br />
		Where the c2RrX3Rlc3Q6ODZhZjMtODBlNGYtZjgyMjgtOTQ5OGYtOTEwYWQ= string equal in PHP:<br />
		<br />
		base64_encode("sdk_test:86af3-80e4f-f8228-9498f-910ad");<br />
		<br />
		<br />
		<b>Init recurring payment:</b><br />
		<br />
		Required data (HTTP POST):<br />
		<br />
		method = InitRP<br />
		json = {json encoded variables}<br />
		<br />
		Parameters (* if necessary):<br />
		<br />
		StoreName*<br />
		ReferenceTransactionId*<br />
		ResponseUrl*<br />
		Amount*<br />
		Currency*<br />
		OrderId*<br />
		UserId*<br />
		ModuleName<br />
		ModuleVersion<br />
		<br />
		Example:<br />
		<br />
		method=Init&json={"StoreName":"sdk_test","ReferenceTransactionId":"[One Click Payment registered transaction ID]","ResponseUrl":"<?=json_encode($this->responseUrl);?>","Amount":"100","Currency":"HUF","OrderId":"DEMO_ORDER","UserId":"DEMO_USER"}<br />
		<br />
		Response data (JSON format):<br />
		<br />
		TransactionId<br />
		ResultCode<br />
		ResultMessage<br />
		<br />
		<br />
		<b>Start recurring transaction:</b><br />
		<br />
		HTTP Redirect<br />
		<br />
		Test URL: <a>https://test.paymentgateway.hu/StartRP</a><br />
		<br />
		Production URL: <a>https://www.paymentgateway.hu/StartRP</a><br />
		<br />
		Required data (HTTP GET):<br />
		<br />
		TransactionId<br />
		<br />
		Example:<br />
		<br />
		<a>https://test.paymentgateway.hu/StartRP?TransactionId=[TransactionId received by InitRP]</a><br />
		<br />
	</div>
</div>
