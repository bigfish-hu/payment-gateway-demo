<div class="description">
	<h2>PHP SDK</h2>
	<? if ($this->controller->action == 'start') { ?>
		<div class="text"><span class="showProviderName">(Choose a provider to specific sample code)</span><br /><br /></div>
	<? } ?>
	<div class="xdebug-var-dump">
		$config = new \BigFish\PaymentGateway\Config();<br />
		<br />
		$config->storeName = $data['storeName'];<br />
		$config->apiKey = $data['apiKey'];<br />
		$config->testMode = true; <font>// Set to false in production environment</font><br />
		
		<? if ($this->controller->action == 'start') { ?>
			<span class="providerData code OTP OTP2">
				<br />
				if (isset($data['otpConsumerRegistrationId']) && !empty($data['otpConsumerRegistrationId'])) {
					<blockquote>
						<font>
							/**<br />
							&nbsp;* If you want to start OTP One Click Payment<br />
							&nbsp;*/
						</font><br />
						$config->encryptPublicKey = [Your Public Key]; <font>// genetared by BIG FISH</font>
					</blockquote>
				}<br />
			</span>
			<span class="providerData code MKBSZEP">
				<br />
				<font>
					/**<br />
					&nbsp;* Set encryptPublicKey config param if gatewayPaymentPage=false<br />
					&nbsp;*/
				</font><br />
				$config->encryptPublicKey = [Your Public Key]; <font>// genetared by BIG FISH</font>
				<br />
			</span>
		<? } ?>
		<br />
		\BigFish\PaymentGateway::setConfig($config);<br />
		<br />
		<?
			require_once('phpsdk' . DS . $this->controller->action . '.php');
		?>
	</div>
	<br />
	<div class="text">
		Download PHP SDK from GitHub: <a href="https://github.com/bigfish-hu/payment-gateway-php-sdk" target="_blank">https://github.com/bigfish-hu/payment-gateway-php-sdk</a><br />
		Download DEMO code from GitHub: <a href="https://github.com/bigfish-hu/payment-gateway-demo" target="_blank">https://github.com/bigfish-hu/payment-gateway-demo</a>
	</div>
</div>
