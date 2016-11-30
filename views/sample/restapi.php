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
		<?
			require_once('restapi' . DS . $this->controller->action . '.php');
		?>
	</div>
</div>
