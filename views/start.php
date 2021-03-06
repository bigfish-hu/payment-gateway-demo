<form name="startForm" action="/controllers/?action=<?=$this->controller->action;?>" method="post" target="_blank">
	<label>
		<span>Provider *:</span>
	</label>
	<ul>
		<li><label><input type="radio" name="providerName" value="Barion2"><span><span></span></span>Barion</label></li>
		<li><label><input type="radio" name="providerName" value="Borgun"><span><span></span></span>Borgun SecurePay</label></li>
		<li><label><input type="radio" name="providerName" value="Borgun2"><span><span></span></span>Borgun RPG</label></li>
		<li><label><input type="radio" name="providerName" value="BBAruhitel"><span><span></span></span>Budapest Bank Áruhitel</label></li>
		<li><label><input type="radio" name="providerName" value="CIB"><span><span></span></span>CIB Bank</label></li>
		<li><label><input type="radio" name="providerName" value="FHB"><span><span></span></span>FHB Bank</label></li>
		<li><label><input type="radio" name="providerName" value="GP"><span><span></span></span>Global Payments</label></li>
		<li><label><input type="radio" name="providerName" value="IPG"><span><span></span></span>Intelligent Payments</label></li>
		<li><label><input type="radio" name="providerName" value="KHB"><span><span></span></span>K&H Bank</label></li>
		<li><label><input type="radio" name="providerName" value="KHBSZEP"><span><span></span></span>K&H SZÉP Card</label></li>
		<li><label><input type="radio" name="providerName" value="MKBSZEP"><span><span></span></span>MKB SZÉP Card</label></li>
		<li><label><input type="radio" name="providerName" value="OTP"><span><span></span></span>OTP Bank, OTP SZÉP Card</label></li>
		<li><label><input type="radio" name="providerName" value="OTP2"><span><span></span></span>OTP Bank (two-party)</label></li>
		<li><label><input type="radio" name="providerName" value="OTPAruhitel"><span><span></span></span>OTP Bank Áruhitel</label></li>
		<li><label><input type="radio" name="providerName" value="OTPSimple"><span><span></span></span>OTP Simple</label></li>
		<li><label><input type="radio" name="providerName" value="OTPSimpleWire"><span><span></span></span>OTP Simple wire</label></li>
		<li><label><input type="radio" name="providerName" value="PayPal"><span><span></span></span>PayPal</label></li>
		<li><label><input type="radio" name="providerName" value="PayPalRest"><span><span></span></span>PayPal REST</label></li>
		<li><label><input type="radio" name="providerName" value="PSC"><span><span></span></span>paysafecard</label></li>
		<li><label><input type="radio" name="providerName" value="Paysafecash"><span><span></span></span>Paysafecash</label></li>
		<li><label><input type="radio" name="providerName" value="PayU2"><span><span></span></span>PayU Classic</label></li>
		<li><label><input type="radio" name="providerName" value="PayURest"><span><span></span></span>PayU REST</label></li>
		<li><label><input type="radio" name="providerName" value="Saferpay"><span><span></span></span>Saferpay (SIX Payment)</label></li>
		<li><label><input type="radio" name="providerName" value="Sofort"><span><span></span></span>Sofort Banking</label></li>
		<li><label><input type="radio" name="providerName" value="UniCredit"><span><span></span></span>UniCredit Bank</label></li>
		<li><label><input type="radio" name="providerName" value="Virpay"><span><span></span></span>VirPAY</label></li>
		<li><label><input type="radio" name="providerName" value="Wirecard"><span><span></span></span>Wirecard</label></li>
	</ul>
	
	<div id="testData"></div>

	<? if ($this->controller->action == "start") { ?>

		<div class="providerData Barion2">
			<table class="table-test-data">
				<thead><tr><th colspan="2">Test data:</th></tr></thead>
				<tbody>
					<tr><td>To success payment:</td><td>4444888888885559</td><td>Expiration date:</td><td>any future date</td><td>CVC2:</td><td>any</td></tr>
					<tr><td>To failed payment:</td><td>4444888888884446</td><td>Expiration date:</td><td>any future date</td><td>CVC2:</td><td>any</td></tr>
				</tbody>
			</table>
		</div>

		<div class="providerData BBAruhitel">
			<table class="table-test-data">
				<tbody>
					<tr>
						<td>
							To test, you must record the following line in your hosts file:<br />
							<br />
							195.56.141.154 onlinet.bbrt.hu netbank-uat-tim.bbrt.hu netbank-uat-akm.bbrt.hu netbank-uat-tkm.bbrt.hu netbank-uat-dkm.bbrt.hu netbank-uat-szkm.bbrt.hu<br />
							<br />
							The amount must be 50000 HUF.<br />
							<br />
							Entry data to initiate a loan request:<br />
							<br />
							User: automata420<br />
							Password: password<br />
							SMS code: 00000000<br />
							E-pin (if necessary): 112233<br />
							<br />
							To request status change, please write a letter to peter.bakti@budapestbank.hu by specifying the transaction ID.
							<hr>
							Or you can use BIG FISH Payment Gateway test interface for Budapest Bank Áruhitel:<br />
							<br />
							Put testMode into extra JSON object with true value.
						</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="providerData Borgun">
			<table class="table-test-data">
				<thead><tr><th colspan="6">Test data:</th></tr></thead>
				<tbody>
					<tr><td>To success payment:</td><td>4741520000000003</td><td>Expiration date:</td><td>any</td><td>CVC:</td><td>any</td></tr>
					<tr><td>To failed payment:</td><td>4155520000000002</td><td>Expiration date:</td><td>any</td><td>CVC:</td><td>any</td></tr>
				</tbody>
			</table>
		</div>

		<div class="providerData Borgun2 Virpay">
			<table class="table-test-data">
				<thead><tr><th colspan="6">Test data:</th></tr></thead>
				<tbody>
					<tr><td>To success payment (MasterCard, 3DSecure):</td><td>5587402000012011</td><td>Expiration date:</td><td>any</td><td>CVC:</td><td>any</td></tr>
					<tr><td>To success payment (VISA, 3DSecure):</td><td>4741520000000003</td><td>Expiration date:</td><td>any</td><td>CVC:</td><td>any</td></tr>
					<tr><td>To failed payment (VISA, 3DSecure):</td><td>4242424242424242</td><td>Expiration date:</td><td>any</td><td>CVC:</td><td>any</td></tr>
					<tr><td>To failed payment (VISA):</td><td>4155520000000002</td><td>Expiration date:</td><td>any</td><td>CVC:</td><td>any</td></tr>
				</tbody>
			</table>
		</div>

		<div class="providerData CIB">
			<table class="table-test-data">
				<thead><tr><th colspan="6">Test data:</th></tr></thead>
				<tbody>
					<tr><td>To success payment:</td><td>4111 1111 1111 1111</td><td>Expiration date:</td><td>any</td><td>CVC:</td><td>111</td></tr>
					<tr><td>To failed payment:</td><td>4999 9999 9999 9999</td><td>Expiration date:</td><td>any</td><td>CVC:</td><td>111</td></tr>
				</tbody>
			</table>
		</div>

		<div class="providerData FHB">
			<table class="table-test-data">
				<thead><tr><th colspan="6">Test data:</th></tr></thead>
				<tbody>
					<tr><td>To success payment:</td><td>4314229999999913</td><td>Expiration date:</td><td>01/18</td><td>CVC:</td><td>123</td></tr>
					<tr><td>To failed payment:</td><td>4314229999999913</td><td>Expiration date:</td><td>01/20</td><td>CVC:</td><td>123</td></tr>
				</tbody>
			</table>
		</div>

		<div class="providerData GP">
			<table class="table-test-data">
				<thead><tr><th colspan="2">Test data:</th></tr></thead>
				<tbody>
					<tr><td>To success card payment:</td><td>4056070000000008</td><td>Expiration date:</td><td>12/20</td><td>CVC2:</td><td>200</td></tr>
					<tr><td colspan="6"><br />Google Pay:<br />You can securely use your own production Google Pay account to test payment. The test terminal will replace your valid card data with its own test card in the background and no charge will happen on your Google-stored card.</td></tr>
				</tbody>
			</table>
		</div>

		<div class="providerData IPG">
			<table class="table-test-data">
				<thead><tr><th colspan="6">Test data:</th></tr></thead>
				<tbody>
					<tr><td>To success payment:</td><td>5454545454545454</td><td>Expiration date:</td><td>12/18</td><td>CVC:</td><td>123</td></tr>
					<tr><td>To failed payment:</td><td colspan="5">20.12 EUR amount transaction</td></tr>
				</tbody>
			</table>
		</div>

		<div class="providerData KHB">
			<table class="table-test-data">
				<thead><tr><th colspan="6">Test data:</th></tr></thead>
				<tbody>
					<tr><td>To success payment:</td><td>4550522598305372</td><td>Expiration date:</td><td>11/2003</td><td>CVV2:</td><td>271</td></tr>
					<tr><td>To failed payment:</td><td>4205792507864590</td><td>Expiration date:</td><td>10/2006</td><td>CVV2:</td><td>106</td></tr>
				</tbody>
			</table>
		</div>

		<div class="providerData KHBSZEP">
			<table class="table-test-data">
				<thead><tr><th colspan="3">Test data:</th></tr></thead>
				<tbody>
					<tr><td>To success payment:</td><td>Card number:</td><td>64719254</td></tr>
					<tr><td></td><td>Expiration date:</td><td>12/2030</td></tr>
					<tr><td></td><td>Controlling value:</td><td>213</td></tr>
					<tr><td></td><td>Password:</td><td>PGtest01</td></tr>
					<tr><td>To failed payment:</td><td>Card number:</td><td>05101182</td></tr>
					<tr><td></td><td>Expiration date:</td><td>12/2019</td></tr>
					<tr><td></td><td>Controlling value:</td><td>508</td></tr>
					<tr><td></td><td>Password:</td><td>Aa123456</td></tr>
				</tbody>
			</table>
		</div>

		<div class="providerData MKBSZEP">
			<table class="table-test-data">
				<thead><tr><th colspan="4">Test data:</th></tr></thead>
				<tbody><tr><td>Card number:</td><td>6101 3170 0000 0128</td><td>CVV:</td><td>497</td></tr></tbody>
			</table>
		</div>

		<div class="providerData OTP">
			<table class="table-test-data">
				<thead><tr><th colspan="6">Test data:</th></tr></thead>
				<tbody>
					<tr><td>To success payment:</td><td>4908366099706566</td><td>Expiration date:</td><td>02/23</td><td>CVC2:</td><td>298</td></tr>
					<tr><td>To failed payment:</td><td>1111111111111117</td><td>Expiration date:</td><td>04/04</td><td>CVC2:</td><td>111</td></tr>
				</tbody>
			</table>

			<table class="table-test-data">
				<thead><tr><th colspan="6">SZÉP Card test data:</th></tr></thead>
				<tbody><tr><td>To success payment:</td><td>6101324010002441</td><td>Expiration date:</td><td>02/06</td><td>CVC2:</td><td>282</td></tr></tbody>
			</table>
		</div>

		<div class="providerData OTP2">
			<table class="table-test-data">
				<thead><tr><th colspan="2">Test data:</th></tr></thead>
				<tbody>
					<tr><td>Card number:</td><td>4908366099900425</td></tr>
					<tr><td>Expiration date (mmyy):</td><td>1014</td></tr>
					<tr><td>CVC/CVV:</td><td>823</td></tr>
				</tbody>
			</table>
		</div>

		<div class="providerData PayPal">
			<table class="table-test-data">
				<thead><tr><th colspan="2">Test data:</th></tr></thead>
				<tbody>
					<tr><td>Buyer e-mail:</td><td>paymentgateway+paypalbuyer@bigfish.hu</td></tr>
					<tr><td>Password:</td><td>bfppbuyer@</td></tr>
				</tbody>
			</table>
		</div>

		<div class="providerData PayPalRest">
			<table class="table-test-data">
				<thead><tr><th colspan="2">Test data:</th></tr></thead>
				<tbody>
				<tr><td>Buyer e-mail:</td><td>paymentgateway+paypalbuyer@bigfish.hu</td></tr>
				<tr><td>Password:</td><td>bfppbuyer@</td></tr>
				</tbody>
			</table>
		</div>

		<div class="providerData PSC">
			<table class="table-test-data">
				<thead><tr><th colspan="2">Test data:</th></tr></thead>
				<tbody><tr><td>Test PIN <em>(to buy without my paysafecard account)</em>:</td><td>7130286683905171</td></tr></tbody>
			</table>
		</div>

		<div class="providerData Paysafecash">
			<table class="table-test-data">
				<thead><tr><th colspan="2">Test user:</th></tr></thead>
				<tbody>
					<tr><td>E-mail address:</td><td>FWjkMvnwXS@JwRypsogma.sVO</td></tr>
					<tr><td>Password:</td><td>8zcIYjFXVCXEnaA1</td></tr>
					<tr><td colspan="2"><em>(Please set the "paysafecash_test_user" User ID when using the above user.)</em></td></tr>
				</tbody>
			</table>
		</div>

		<div class="providerData PayURest">
			<table class="table-test-data">
				<thead><tr><th colspan="6">Test data:</th></tr></thead>
				<tbody>
					<tr><td>To success payment (VISA):</td><td>4444333322221111</td><td>Expiration date:</td><td>any</td><td>CVC:</td><td>any</td></tr>
					<tr><td>To success payment (VISA, 3DS):</td><td>4012001037141112</td><td>Expiration date:</td><td>any</td><td>CVC:</td><td>any</td></tr>
					<tr><td>To success payment (MASTERCARD):</td><td>5434021016824014</td><td>Expiration date:</td><td>any</td><td>CVC:</td><td>any</td></tr>
					<tr><td>To failed payment (MASTERCARD):</td><td>5000105018126595</td><td>Expiration date:</td><td>any</td><td>CVC:</td><td>any</td></tr>
					<tr><td colspan="6"><br />Google Pay:<br />You can securely use your own production Google Pay account to test payment. The test terminal will replace your valid card data with its own test card in the background and no charge will happen on your Google-stored card.</td></tr>
					<tr><td colspan="6"><br /><em>(For card tokenization you must pass an email address through the extra data.)</em></td></tr>
				</tbody>
			</table>
		</div>

		<div class="providerData Saferpay">
			<table class="table-test-data">
				<thead><tr><th colspan="6">Test data:</th></tr></thead>
				<tbody>
					<tr><td>To success payment (VISA):</td><td>9010101052000002</td><td>Expiration date:</td><td>any</td><td>CVC:</td><td>any</td></tr>
					<tr><td>To failed payment (VISA):</td><td>9010100152000003</td><td>Expiration date:</td><td>any</td><td>CVC:</td><td>any</td></tr>
					<tr><td>To success payment (MASTERCARD):</td><td>9030101052000008</td><td>Expiration date:</td><td>any</td><td>CVC:</td><td>any</td></tr>
					<tr><td>To failed payment (MASTERCARD):</td><td>9030100152000009</td><td>Expiration date:</td><td>any</td><td>CVC:</td><td>any</td></tr>
					<tr><td colspan="6"><br /><em>(The test payment is only available in EUR currency.)</em></td></tr>
				</tbody>
			</table>
		</div>

		<div class="providerData Sofort">
			<table class="table-test-data">
				<thead><tr><th colspan="2">Test data:</th></tr></thead>
				<tbody>
					<tr><td colspan="2"><em>(Tracking only in EUR. Germany should be selected.)</em></td></tr>
					<tr><td>Sort code:</td><td>88888888</td></tr>
					<tr><td>Kontonummer:</td><td>123456789</td></tr>
					<tr><td>PIN:</td><td>00000</td></tr>
				</tbody>
			</table>
		</div>

		<div class="providerData UniCredit">
			<table class="table-test-data">
				<thead><tr><th colspan="6">Test data:</th></tr></thead>
				<tbody>
					<tr><td>To success payment:</td><td>4314229999999913</td><td>Expiration date:</td><td>01/22</td><td>CVV2:</td><td>123</td></tr>
					<tr><td>To failed payment:</td><td>4314229999999913</td><td>Expiration date:</td><td>01/21</td><td>CVV2:</td><td>123</td></tr>
				</tbody>
			</table>
		</div>

		<div class="providerData Wirecard">
			<table class="table-test-data">
				<thead><tr><th colspan="6">Test data:</th></tr></thead>
				<tbody>
				<tr><td width="205">Credit card (No 3DSecure):</td><td>5413330300002004, Date: 01/23, CVC: 004</td></tr>
				<tr><td>Credit card (3DSecure 1.0.2):</td><td>4012000300001003, Date: 01/23, CVC: 003, Password: wirecard</td></tr>
				<tr><td>Credit card (3DSecure 2.1.0):</td><td>5413330300201002, Date: 01/23, CVC: 002, Password: wirecard</td></tr>
				<tr><td>Credit card (Issuer declined):</td><td>5413330500050001, Date: 01/23, CVC: 001</td></tr>
				<tr><td>eps:</td><td>BIC: BWFBATW1XXX, Login data: Just click to continue - no input needed.</td></tr>
				<tr><td>iDEAL:</td><td>Bank: ING or Rabobank</td></tr>
				<tr><td>SEPA Direct Debit:</td><td>IBAN: DE42512308000000060004</td></tr>
				<tr><td>Sofort:</td><td>Bank name, User ID, PIN: 00000, TAN: 12345</td></tr>
				<tr><td>Alipay:</td><td>Account name: alipaytest20091@gmail.com, Password: 111111, Payment Password: 111111</td></tr>
				<tr>
					<td colspan="2">
						<dl>
							<li>Payment method names in the Extra parameter: alipay-xborder, creditcard, eps, ideal, sepadirectdebit, sofortbanking</li>
							<li>Enter an email address in the Customer:General:Email or Order:BillingData:Email SCA info object to test 3DSecure 2.0</li>
							<li>Later authorization is only allowed for Credit card payment method</li>
							<li>One Click Payment is only allowed for Credit card and SEPA Direct Debit payment methods</li>
							<li>Use IBAN (NL53INGB0654422370) and BIC (INGBNL2A) code in the Extra parameter to refund eps and Sofort transactions.</li>
						</dl>
					</td></tr>
				</tbody>
			</table>
		</div>

		<label>
			<span>Response URL (It must be available publicly) *:</span>
			<input class="full-width" type="text" name="responseUrl" value="<?=$this->responseUrl;?>">
		</label>
	<? } ?>

	<? if ($this->controller->action == "paymentLinkCreate") { ?>
		<div class="row">
			<label class="col-2">
				<span>Flexible amount:</span>
				<select name="flexibleAmount" onchange="document.getElementById('amount-row').style.display = (this.value === 'true' ? 'none' : 'block'); document.getElementById('flexible-amount-row').style.display = (this.value === 'true' ? 'block' : 'none');">
					<option value="false">No</option>
					<option value="true">Yes</option>
				</select>
			</label>
			<label class="col-2" id="amount-row">
				<span>Amount *:</span>
				<input type="text" name="amount" value="">
			</label>
		</div>
	<? } ?>

	<? if ($this->controller->action == "paymentLinkCreate") { ?>
		<div class="row" id="flexible-amount-row" style="display: none;">
			<label class="col-2">
				<span>Minimum amount *:</span>
				<input type="text" name="minimumAmount" value="">
			</label>
			<label class="col-2">
				<span>Maximum amount:</span>
				<input type="text" name="maximumAmount" value="">
			</label>
		</div>
	<? } ?>

	<div class="row">
		<? if ($this->controller->action != "paymentLinkCreate") { ?>
			<label class="col-2">
				<span>Amount *:</span>
				<input type="text" name="amount" value="">
			</label>
		<? } ?>

		<label class="col-2">
			<span>Currency:</span>
			<select name="currency">
				<option value="HUF">HUF</option>
				<option value="EUR">EUR</option>
				<option value="USD">USD</option>
				<option value="AED">AED</option>
				<option value="CAD">CAD</option>
				<option value="CHF">CHF</option>
				<option value="CZK">CZK</option>
				<option value="DKK">DKK</option>
				<option value="GBP">GBP</option>
				<option value="HRK">HRK</option>
				<option value="ISK">ISK</option>
				<option value="JPY">JPY</option>
				<option value="NOK">NOK</option>
				<option value="PLN">PLN</option>
				<option value="RON">RON</option>
				<option value="SEK">SEK</option>
			</select>
		</label>

		<? if ($this->controller->action == "paymentLinkCreate") { ?>
			<label class="col-2 providerData Barion2 Borgun Borgun2 BBAruhitel CIB FHB GP IPG KHB KHBSZEP MKBSZEP OTP OTP2 OTPAruhitel OTPSimple OTPSimpleWire PayPal PayPalRest PSC Paysafecash PayU2 PayURest Saferpay Sofort UniCredit Virpay">
				<span>Allow multiple transactions:</span>
				<select name="multipleTransactions" onchange="
				(function(multipleTransaction) {
					if (multipleTransaction) {
						document.querySelector('input[name=userId]').setAttribute('disabled', 'disabled');
						document.querySelector('textarea[name=infoData]').setAttribute('disabled', 'disabled');
						document.getElementById('userId').style.display = document.getElementById('info').style.display = 'none';
					} else {
						document.querySelector('input[name=userId]').removeAttribute('disabled');
						document.querySelector('textarea[name=infoData]').removeAttribute('disabled');
						document.getElementById('userId').style.display = document.getElementById('info').style.display = 'block';
					}
				})(this.value === 'true');" class="input Barion2 Borgun Borgun2 BBAruhitel CIB FHB GP IPG KHB KHBSZEP MKBSZEP OTP OTP2 OTPAruhitel OTPSimple OTPSimpleWire PayPal PayPalRest PSC Paysafecash PayU2 PayURest Saferpay Sofort UniCredit Virpay">
					<option value="false">No</option>
					<option value="true">Yes</option>
				</select>
			</label>
		<? } ?>
	</div>

	<div class="row">
		<label class="col-2">
			<span>Order ID:</span>
			<input type="text" name="orderId" value="">
		</label>

		<label class="col-2" id="userId">
			<span>User ID:</span>
			<input type="text" name="userId" value="">
		</label>
	</div>

	<div class="row">
		<label class="col-2">
			<span>Language:</span>
			<select name="language">
				<option value="HU">HU</option>
				<option value="EN">EN</option>
				<option value="DE">DE</option>
				<option value="CZ">CZ</option>
				<option value="ES">ES</option>
				<option value="FR">FR</option>
				<option value="HR">HR</option>
				<option value="IS">IS</option>
				<option value="IT">IT</option>
				<option value="PL">PL</option>
				<option value="PT">PT</option>
				<option value="RO">RO</option>
				<option value="RU">RU</option>
				<option value="SE">SE</option>
				<option value="SI">SI</option>
				<option value="SK">SK</option>
			</select>
		</label>

		<label class="col-2 providerData Barion2 Borgun2 FHB GP IPG OTP OTP2 OTPSimple PayU2 PayURest UniCredit Saferpay Virpay Wirecard PayPalRest">
			<span>Authorization:</span>
			<select name="autoCommit" class="input Barion2 Borgun2 FHB GP IPG OTP OTP2 OTPSimple PayU2 PayURest UniCredit Saferpay Virpay Wirecard PayPalRest">
				<option value="true">Immediate</option>
				<option value="false">Later</option>
			</select>
		</label>
	</div>

	<label class="providerData KHBSZEP MKBSZEP OTP">
		<span>SZÉP Card pocket ID (cafeteria):</span>
		<select name="szepPocket" class="input KHBSZEP MKBSZEP OTP">
			<option value=""></option>
			<option value="accommodation">Accommodation</option>
			<option value="hospitality">Hospitality</option>
			<option value="leisure">Leisure</option>
		</select>
	</label>

	<? if ($this->controller->action == "start") { ?>

		<label class="providerData OTP OTP2">
			<span>OTP consumer registration ID (One Click Payment):</span>
			<input type="text" name="otpConsumerRegistrationId" value="" class="input OTP OTP2">
		</label>

		<label class="label-chkbox providerData Barion2 Borgun2 GP OTPSimple PayURest Saferpay Virpay Wirecard PayPalRest">
			<span>One Click Payment (Card registration or pay by a registered card on Payment Gateway page): <input type="checkbox" name="oneClickPayment" value="1" class="input Barion2 Borgun2 GP OTPSimple PayURest Saferpay Virpay Wirecard PayPalRest"><span class="chkbox"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-check"></use></svg></span></span>
		</label>

		<label class="label-chkbox-second providerData Barion2 Borgun2 GP OTPSimple PayURest Saferpay Virpay Wirecard PayPalRest">
			<span>One Click Payment with forced registration (Normal payment with card registration): <input type="checkbox" name="oneClickForcedRegistration" value="1" class="input Barion2 Borgun2 GP OTPSimple PayURest Saferpay Virpay Wirecard PayPalRest"><span class="chkbox"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-check"></use></svg></span></span>
		</label>

	<? } ?>

	<label class="label-chkbox providerData Barion2 BBAruhitel GP OTPAruhitel Paysafecash PayURest Wirecard">
		<span>Check to use extra data: <input type="checkbox" name="useExtra" value="1" class="input Barion2 BBAruhitel GP OTPAruhitel Paysafecash PayURest Wirecard PayPalRest"><span class="chkbox"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-check"></use></svg></span></span>
	</label>

	<label class="providerData Barion2">
		<span>Extra data:</span>
		<textarea name="extra[Barion2]" class="input Barion2">
{
	"PaymentRequest":
	{
		"ReservationPeriod":"7:00:00:00",
		"PaymentWindow":"00:20:00",
		"GuestCheckout":true,
		"FundingSources":
		[
			"All"
		],
		"PaymentRequestId":"PaymentIdInShop",
		"PayerHint":"Payer's Barion username (optional)",
		"OrderNumber":"OrderNumberInShop",
		"ShippingAddress":"1110 Budapest, Test street 1.",
		"Transactions":
		[
			{
				"POSTransactionId":"TransactionId",
				"Payee":"1. payee's Barion username",
				"Comment":"Test payment",
				"Items":
				[
					{
						"Name":"Orange",
						"Description":"Sweet orange",
						"Quantity":"1",
						"Unit":"kg",
						"UnitPrice":"2",
						"ItemTotal":"2",
						"SKU":"ID1"
					},
					{
						"Name":"Banana",
						"Description":"Ripe banana",
						"Quantity":"2",
						"Unit":"kg",
						"UnitPrice":"4",
						"ItemTotal":"8",
						"SKU":"ID2"
					}
				],
				"PayeeTransactions":
				[
					{
						"POSTransactionId":"TransactionId-01",
						"Payee":"2. payee's Barion username",
						"Total":2,
						"Comment":"Marketplace fee"
					},
					{
						"POSTransactionId":"TransactionId-02",
						"Payee":"3. payee's Barion username",
						"Total":1,
						"Comment":"Marketplace agent price"
					}
				]
			}
		]
	}
}
		</textarea>
	</label>

	<label class="providerData Paysafecash">
		<span>Extra data:</span>
		<textarea name="extra[Paysafecash]" class="input Paysafecash">
{
	"salutation":"mr",
	"firstName":"John",
	"lastName":"Doe",
	"birthDate":"31/01/1970",
	"phoneNumber":"+36201234567",
	"email":"test@psctest.hu",
	"address1":"Test street 1.",
	"city":"Budapest",
	"postalCode":"9999"
}
		</textarea>
	</label>

	<label class="providerData BBAruhitel">
		<span>Extra data:</span>
		<textarea name="extra[BBAruhitel]" class="input BBAruhitel">
{
	"firstName":"John",
	"lastName":"Doe",
	"e-mail":"test@bbaruhiteltest.hu",
	"term":"10",
	"offerId":"tesztkonstrukcio1",
	"testMode":false
}
		</textarea>
	</label>

	<label class="providerData GP">
		<span>Extra data:</span>
		<textarea name="extra[GP]" class="input GP">
{
	"PAYMETHODS":"GPAY",
	"FASTPAYID":0
}
		</textarea>
	</label>

	<label class="providerData PayURest">
		<span>Extra data:</span>
		<textarea name="extra[PayURest]" class="input PayURest">
{
	"timeout": 20,
	"payMethods":
	{
		"payMethod":
		{
			"type": "PBL",
			"value": "c"
		}
	},
	"buyer":
	{
		"customerIp":"127.0.0.1",
		"email":"test@payutest.com",
		"phone":"+36201234567",
		"firstName":"John",
		"lastName":"Doe",
		"nin":"National Identification Number",
		"language":"hu",
		"delivery":
		{
			"street": "Test street 1.",
			"postalBox": "",
			"postalCode": "1066",
			"city": "Budapest",
			"state": "Hungary",
			"countryCode": "HU",
			"name": "John Doe",
			"recipientName": "John Doe",
			"recipientEmail": "test@payutest.com",
			"recipientPhone": "+36201234567"
		}
	},
	"products":
	[
		{
			"name": "Orange",
			"unitPrice": "2",
			"quantity": "1"
		},
		{
			"name": "Banana",
			"unitPrice": "4",
			"quantity": "2"
		}
	]
}
		</textarea>
	</label>

	<label class="providerData OTPAruhitel">
		<span>Extra data:</span>
		<textarea name="extra[OTPAruhitel]" class="input OTPAruhitel">
{
	"ConstructionGroup":"1000000"
}
		</textarea>
	</label>

	<label class="providerData Wirecard">
		<span>Extra data:</span>
		<textarea name="extra[Wirecard]" class="input Wirecard">
{
	"paymentMethod": "sepadirectdebit",
	"descriptor": "account statement note",
	"theme": "test",
	"mandateId": "123456789",
	"mandateSignedDate": "<?=date('Y-m-dP');?>"
}
		</textarea>
	</label>

	<? if ($this->controller->action == "start") { ?>

		<ul class="providerData PayPal">
			<li><label><input type="radio" name="oneClickPayment" class="input PayPal" onclick="showPayPalReference(false);" checked><span><span></span></span>Normal Payment</label></li>
			<li><label><input type="radio" name="oneClickPayment" value="1" class="input PayPal" onclick="showPayPalReference(false);"><span><span></span></span>Buyer registration to Reference Payment</label></li>
			<li><label><input type="radio" name="oneClickPayment" value="1" class="input PayPal" onclick="showPayPalReference(true);"><span><span></span></span>Buyer registration to Recurring Payment</label></li>
		</ul>

		<div class="row providerData PayPal-Reference">
			<label class="col-2 providerData PayPal">
				<span>Initial amount:</span>
				<input type="text" name="extra[REFERENCE][INITAMT]" value="0" class="input PayPal-Reference">
			</label>

			<label class="col-2 providerData PayPal">
				<span>Billing date start, in UTC/GMT format *:</span>
				<input type="text" name="extra[REFERENCE][PROFILESTARTDATE]" value="" class="input PayPal-Reference" required placeholder="<?php echo gmdate("Y-m-d\TH:i:s\Z", time()+3600);?>">
			</label>
		</div>

		<div class="row providerData PayPal-Reference">
			<label class="col-2 providerData PayPal">
				<span>Frequency of charges *:</span>
				<input type="text" name="extra[REFERENCE][BILLINGFREQUENCY]" value="" class="input PayPal-Reference" required>
			</label>

			<label class="col-2 providerData PayPal">
				<span>Time period between billings *:</span>
				<select name="extra[REFERENCE][BILLINGPERIOD]" class="input PayPal-Reference" required>
					<option value="" selected>Setting by frequency</option>
					<option value="Day">Day</option>
					<option value="Week">Week</option>
					<option value="SemiMonth">SemiMonth</option>
					<option value="Month">Month</option>
					<option value="Year">Year</option>
				</select>
			</label>
		</div>

		<div class="row providerData PayPal-Reference">
			<label class="col-2 providerData PayPal">
				<span>Description *:</span>
				<input type="text" name="extra[REFERENCE][DESC]" value="" class="input PayPal-Reference" required>
			</label>
		</div>

		<div class="row providerData PayPal-Reference">
			<table class="table-test-data">
				<thead><tr><th>Note:</th></tr></thead>
				<tbody>
				<tr><td>The combination of BillingPeriod and BillingFrequency cannot exceed one year.</td></tr>
				<tr><td>
						PayPal has some extra[REFERENCE][field]. See documentation:
						<a href="https://developer.paypal.com/docs/classic/api/merchant/CreateRecurringPaymentsProfile_API_Operation_NVP/" target="_blank">CreateRecurringPaymentsProfile</a>
					</td></tr>
				</tbody>
			</table>
		</div>

		<ul class="providerData PayPalRest">
			<li><label><input type="radio" name="PaymentType" class="input PayPalRest" onclick="showPayPalRestSubscription(false);" checked><span><span></span></span>Normal Payment</label></li>
			<li><label><input type="radio" name="PaymentType" value="2" class="input PayPalRest" onclick="showPayPalRestSubscription(true);"><span><span></span></span>Buyer registration to Subscription Payment</label></li>
		</ul>
		<div class="row providerData PayPalRest-Subscription">
			<label>
				<span>Extra data:</span>
				<textarea name="extra[PayPalRest]" class="input PayPalRest"><?php print_r(json_encode(Demo::getGeneratedPayPalRestSubscriptionExtra(), JSON_PRETTY_PRINT)); ?></textarea>
			</label>
		</div>

		<label class="label-chkbox providerData MKBSZEP OTP2">
			<span>Add your card data on merchant's page:</span>
		</label>

		<label class="providerData MKBSZEP OTP2">
			<span>Card number:</span>
			<input type="text" name="cardNumber" value="" class="input MKBSZEP OTP2" size="17">
		</label>

		<label class="providerData OTP2">
			<span>Expiration date (mmyy):</span>
			<input type="text" name="cardExpiration" value="" class="input OTP2">
		</label>

		<label class="providerData MKBSZEP OTP2">
			<span>CVC/CVV:</span>
			<input type="text" name="cardCvc" value="" class="input MKBSZEP OTP2">
		</label>

		<label class="label-chkbox providerData MKBSZEP">
			<span>Add your card data on Payment Gateway page: <input type="checkbox" name="gatewayPaymentPage" value="1" class="input MKBSZEP" checked="checked"><span class="chkbox"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-check"></use></svg></span></span>
		</label>

	<? } ?>

	<label class="providerData Saferpay">
		<span>Payment methods by card:</span>
	</label>

	<div class="row providerData Saferpay">
		<?foreach (self::$saferpayPaymentMethods as $saferpayPaymentMethodKey => $saferpayPaymentMethodName) {?>
			<label class="col-2">
				<span><input type="checkbox" name="extra[SaferpayPaymentMethods][]" value="<?=$saferpayPaymentMethodKey;?>" class="input Saferpay"><span class="chkbox"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-check"></use></svg></span> <?=$saferpayPaymentMethodName;?></span>
			</label>
		<?}?>
	</div>

	<label class="providerData Saferpay">
		<span>Payment methods by wallet:</span>
	</label>

	<div class="row providerData Saferpay">
		<?foreach (self::$saferpayWallets as $saferpayWalletKey => $saferpayWalletName) {?>
			<label class="col-2">
				<span><input type="checkbox" name="extra[SaferpayWallets][]" value="<?=$saferpayWalletKey;?>" class="input Saferpay"><span class="chkbox"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-check"></use></svg></span> <?=$saferpayWalletName;?></span>
			</label>
		<?}?>
	</div>

	<? if ($this->controller->action == "paymentLinkCreate") { ?>

		<div class="row">
			<label class="col-2">
				<span>Merchant notification email <sup>**</sup>:</span>
				<input type="text" name="notificationEmail" value="">
			</label>

			<label class="col-2">
				<span>Expiration time (YYYY-MM-DD HH:MM:SS):</span>
				<input type="text" name="expirationTime" value="">
			</label>
		</div>

		<label class="label-chkbox">
			<span>Email notification only if the transaction is successful: <input type="checkbox" name="emailNotificationOnlySuccess" value="1" class="input All"><span class="chkbox"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-check"></use></svg></span></span>
		</label>

		<div class="row">
			<label class="col-2">
				<span>Information form:</span>
				<select name="infoForm">
					<option value="" selected>No</option>
					<option value="product">Product</option>
					<option value="service">Service</option>
				</select>
			</label>

			<label class="col-2">
				<span>Redirect URL:</span>
				<input type="text" name="redirectUrl" value="">
			</label>
		</div>

		<div class="row">
			<label class="col-2">
				<span>Privacy policy URL:</span>
				<input type="text" name="privacyPolicyUrl" value="">
			</label>
		</div>

	<? } ?>

	<div id="info">
		<label class="label-chkbox-second">
			<span>Check to use info data: <input type="checkbox" name="useInfo" value="1" class="input All"><span class="chkbox"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-check"></use></svg></span></span>
		</label>
		<label>
			<span>Info data:</span>
			<textarea name="infoData" class="input All"><?php print_r(json_encode(Demo::getGeneratedInfoObject()->getData(), JSON_PRETTY_PRINT)); ?></textarea>
		</label>
	</div>

	<input type="submit" name="submit" value="Next">
</form>
