<form name="startOcpForm" action="/controllers/?action=start" method="post" target="_blank">
	<table class="table-test-data">
		<tbody>
			<tr><td>Provider:</td><td><?=$_POST['providerName'];?><input type="hidden" name="providerName" value="<?=$_POST['providerName'];?>" /></td></tr>
			<tr><td>One Click Payment:</td><td>enabled<input type="hidden" name="oneClickPayment" value="1" /></td></tr>
			<tr><td>Registered user ID:</td><td><?=$_POST['userId'];?><input type="hidden" name="userId" value="<?=$_POST['userId'];?>" /></td></tr>
		</tbody>
	</table>
	
	<label>
		<span>Response URL (It must be available publicly) * :</span>
		<input class="full-width" type="text" name="responseUrl" value="<?=$this->responseUrl;?>">
	</label>

	<div class="row">
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
				<option value="GBP">GBP</option>
				<option value="RON">RON</option>
			</select>
		</label>
	</div>

	<div class="row">
		<label class="col-2">
			<span>Order ID * :</span>
			<input type="text" name="orderId" value="">
		</label>
		
		<label class="col-2">
			<span>Registered card * :</span>
			<select name="cardReferenceId">
				<? foreach ($this->controller->data as $data) { ?>
					<option value="<?=$data->card_reference_id;?>">****<?=$data->card_pan;?> (<?=$data->card_type;?>)</option>
				<? } ?>
			</select>
		</label>
	</div>

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
					<blockquote>new BigFish\PaymentGateway\Request\Start($initResponse->TransactionId)</blockquote>
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
		<b>Init One Click Payment transaction (without any intermediate page):</b><br />
		<br />
		Required data (HTTP POST):<br />
		<br />
		method = Init<br />
		json = {json encoded variables}<br />
		<br />
		Parameters (* if necessary):<br />
		<br />
		StoreName*<br />
		ProviderName*<br />
		ResponseUrl*<br />
		Amount*<br />
		Currency*<br />
		OrderId*<br />
		UserId*<br />
		OneClickPayment*<br />
		OneClickReferenceId*<br />
		ModuleName<br />
		ModuleVersion<br />
		<br />
		Example:<br />
		<br />
		method=Init&json={"StoreName":"sdk_test","ProviderName":"<?=$_POST['providerName'];?>","ResponseUrl":"<?=json_encode($this->responseUrl);?>","Amount":"100","Currency":"HUF","OrderId":"DEMO_ORDER","UserId":"<?=$_POST['userId'];?>","OneClickPayment":"1","OneClickReferenceId":"[cardReferenceId]"}<br />
		<br />
		Response data (JSON format):<br />
		<br />
		TransactionId<br />
		ResultCode<br />
		ResultMessage<br />
		<br />
		<br />
		<b>Start transaction:</b><br />
		<br />
		HTTP Redirect<br />
		<br />
		Test URL: <a>https://test.paymentgateway.hu/Start</a><br />
		<br />
		Production URL: <a>https://www.paymentgateway.hu/Start</a><br />
		<br />
		Required data (HTTP GET):<br />
		<br />
		TransactionId<br />
		<br />
		Example:<br />
		<br />
		<a>https://test.paymentgateway.hu/Start?TransactionId=[TransactionId received by Init]</a><br />
		<br />
	</div>
</div>
