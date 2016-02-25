<form name="startForm" action="/controllers/?action=start" method="post" target="_blank">
	<label>
		<span>Provider * :</span>
	</label>
	<ul>
		<li><label><input type="radio" name="providerName" value="Barion"><span><span></span></span>Barion</label></li>
		<li><label><input type="radio" name="providerName" value="Borgun"><span><span></span></span>Borgun</label></li>
		<li><label><input type="radio" name="providerName" value="CIB"><span><span></span></span>CIB Bank</label></li>
		<li><label><input type="radio" name="providerName" value="Escalion"><span><span></span></span>Escalion</label></li>
		<li><label><input type="radio" name="providerName" value="FHB"><span><span></span></span>FHB Bank</label></li>
		<li><label><input type="radio" name="providerName" value="KHB"><span><span></span></span>K&H Bank</label></li>
		<li><label><input type="radio" name="providerName" value="KHBSZEP"><span><span></span></span>K&H SZÉP Card</label></li>
		<li><label><input type="radio" name="providerName" value="MKBSZEP"><span><span></span></span>MKB SZÉP Card</label></li>
		<li><label><input type="radio" name="providerName" value="OTP"><span><span></span></span>OTP Bank, OTP SZÉP Card</label></li>
		<li><label><input type="radio" name="providerName" value="OTP2"><span><span></span></span>OTP Bank (two-party)</label></li>
		<li><label><input type="radio" name="providerName" value="OTPMultipont"><span><span></span></span>OTP Multipont</label></li>
		<li><label><input type="radio" name="providerName" value="OTPSimple"><span><span></span></span>OTP Simple</label></li>
		<li><label><input type="radio" name="providerName" value="OTPSimpleWire"><span><span></span></span>OTP Simple wire</label></li>
		<li><label><input type="radio" name="providerName" value="OTPay"><span><span></span></span>OTPay</label></li>
		<li><label><input type="radio" name="providerName" value="OTPayMP"><span><span></span></span>OTPay MasterPass</label></li>
		<li><label><input type="radio" name="providerName" value="PayPal"><span><span></span></span>PayPal</label></li>
		<li><label><input type="radio" name="providerName" value="PSC"><span><span></span></span>Paysafecard</label></li>
		<li><label><input type="radio" name="providerName" value="PayU2"><span><span></span></span>PayU (Polish)</label></li>
		<li><label><input type="radio" name="providerName" value="SMS"><span><span></span></span>SMS</label></li>
		<li><label><input type="radio" name="providerName" value="Sofort"><span><span></span></span>Sofort Banking</label></li>
		<li><label><input type="radio" name="providerName" value="UniCredit"><span><span></span></span>UniCredit Bank</label></li>
		<li><label><input type="radio" name="providerName" value="QPAY"><span><span></span></span>Wirecard QPAY</label></li>
	</ul>
	
	<div class="providerData Barion">
		<table class="table-test-data">
			<thead><tr><th colspan="2">Test data:</th></tr></thead>
			<tbody>
				<tr><td>E-mail:</td><td>barion-test@bigfish.hu</td></tr>
				<tr><td>Password:</td><td>bf-barion-1</td></tr>
			</tbody>
		</table>
	</div>

	<div class="providerData Borgun">
		<table class="table-test-data">
			<thead><tr><th colspan="3">Test data:</th></tr></thead>
			<tbody>
				<tr><td>To success payment:</td><td>4741520000000003</td><td>CVC: 000</td></tr>
				<tr><td>To failed payment:</td><td>4155520000000002</td><td>CVC: 121</td></tr>
			</tbody>
		</table>
	</div>

	<div class="providerData CIB">
		<table class="table-test-data">
			<thead><tr><th colspan="4">Test data:</th></tr></thead>
			<tbody>
				<tr><td>To success payment:</td><td>5111 1111 1111 1111</td><td>Expired date: any</td><td>CVC: 111</td></tr>
				<tr><td>To failed payment:</td><td>4999 9999 9999 9999</td><td>Expired date: any</td><td>CVC: 111</td></tr>
			</tbody>
		</table>
	</div>

	<div class="providerData Escalion">
		<table class="table-test-data">
			<thead><tr><th colspan="4">Test data:</th></tr></thead>
			<tbody>
				<tr><td>To success payment:</td><td>5431 1111 1111 1111</td><td>Expired date: any</td><td>CVC: 111</td></tr>
				<tr><td>To failed payment:</td><td>4111 1111 1111 1111</td><td>Expired date: any</td><td>CVC: 111</td></tr>
			</tbody>
		</table>
	</div>

	<div class="providerData FHB">
		<table class="table-test-data">
			<thead><tr><th colspan="4">Test data:</th></tr></thead>
			<tbody>
				<tr><td>To success payment:</td><td>4314 2299 9999 9913</td><td>Expired date: 01/18</td><td>CVC: 123</td></tr>
				<tr><td>To failed payment:</td><td>4314 2299 9999 9913</td><td>Expired date: 01/20</td><td>CVC: 123</td></tr>
			</tbody>
		</table>
	</div>

	<div class="providerData KHB">
		<table class="table-test-data">
			<thead><tr><th colspan="4">Test data:</th></tr></thead>
			<tbody>
				<tr><td>To success payment:</td><td>4550 5225 9830 5372</td><td>Expired date: 2003/11</td><td>CVV2: 271</td></tr>
				<tr><td>To failed payment:</td><td>4205 7925 0786 4590</td><td>Expired date: 2006/10</td><td>CVV2: 106</td></tr>
			</tbody>
		</table>
	</div>

	<div class="providerData KHBSZEP">
		<table class="table-test-data">
			<thead><tr><th colspan="2">Test data:</th></tr></thead>
			<tbody>
				<tr>
					<td>To success payment:</td>
					<td>
						Card number: 64719254<br />
						Expired date: 2019.12.31<br />
						Controlling value: 213<br />
						Password: PGtest01
					</td>
				</tr>
				<tr>
					<td>To failed payment:</td>
					<td>
						Card number: 05101182<br />
						Expired date: 2019.12.31<br />
						Controlling value: 508<br />
						Password: Aa123456
					</td>
				</tr>
			</tbody>
		</table>
	</div>

	<div class="providerData MKBSZEP">
		<table class="table-test-data">
			<thead><tr><th colspan="4">Test data:</th></tr></thead>
			<tbody><tr><td>Card number:</td><td>6101317000000128</td><td>CVV:</td><td>497</td></tr></tbody>
		</table>
	</div>

	<div class="providerData OTP">
		<table class="table-test-data">
			<thead><tr><th colspan="4">Test data:</th></tr></thead>
			<tbody>
				<tr><td>To success payment:</td><td>4908 3660 9990 0425</td><td>Expired date: 2014/10</td><td>CVC2: 823</td></tr>
				<tr><td>To failed payment:</td><td>1111 1111 1111 1117</td><td>Expired date: 2004/04</td><td>CVC2: 111</td></tr>
			</tbody>
		</table>

		<table class="table-test-data">
			<thead><tr><th colspan="4">SZÉP Card test data:</th></tr></thead>
			<tbody><tr><td>To success payment:</td><td>6101 3242 9999 2718</td><td>Expired date: 09/19</td><td>CVC2: 282</td></tr></tbody>
		</table>
	</div>
	
	<div class="providerData OTP2">
		<table class="table-test-data">
			<thead><tr><th colspan="2">Test data:</th></tr></thead>
			<tbody>
				<tr><td>Card number:</td><td>4908366099900425</td></tr>
				<tr><td>Expired date (mmyy):</td><td>1014</td></tr>
				<tr><td>CVC/CVV:</td><td>823</td></tr>
			</tbody>
		</table>
	</div>

	<div class="providerData OTPMultipont">
		<table class="table-test-data">
			<thead><tr><th colspan="2">Test data:</th></tr></thead>
			<tbody><tr><td>To success payment:</td><td>6369471300001646</td></tr></tbody>
		</table>
	</div>

	<div class="providerData OTPay">
		<table class="table-test-data">
			<thead><tr><th colspan="2">Test data:</th></tr></thead>
			<tbody><tr><td>Phone number:</td><td>36101022001</td></tr></tbody>
		</table>
	</div>

	<div class="providerData OTPayMP">
		<table class="table-test-data">
			<thead><tr><th colspan="2">Test data to register mCard in app:</th></tr></thead>
			<tbody>
				<tr>
					<td colspan="2">
						<p>
							<strong>Android test application: </strong>
							<br><a href="https://rink.hockeyapp.net/apps/fb0e2cb7852d2e61cf1101aa29852510/app_versions/131" target="_blank">https://rink.hockeyapp.net/apps/fb0e2cb7852d2e61cf1101aa29852510/app_versions/131</a>
							<br>It is necessary to intall the application on a device which live OTPay is not installed.
							<br>Do not update the test application!
							<br>During the registration you have to receive a code in SMS. Send a reply to get the 5-digit code.
						</p>
					</td>
				</tr>
				<tr><td>mCard name:</td><td>any</td></tr>
				<tr><td>Name on card:</td><td>TESZT 84</td></tr>
				<tr><td>Card number:</td><td>5437 5884 9990 0468</td></tr>
				<tr><td>Expired date (mm/yy):</td><td>1216</td></tr>
				<tr><td>CVC:</td><td>578</td></tr>
				<tr><td>Card activation number:</td><td>0000</td></tr>
			</tbody>
		</table>

		<table class="table-test-data">
			<thead><tr><th colspan="2">Choose next on MasterPass:</th></tr></thead>
			<tbody>
				<tr><td>Country:</td><td>Magyarország</td></tr>
				<tr><td>Wallet:</td><td>test OTPay</td></tr>
			</tbody>
		</table>
	</div>

	<div class="providerData PayPal">
		<table class="table-test-data">
			<thead><tr><th colspan="2">Test data:</th></tr></thead>
			<tbody>
				<tr><td>Buyer e-mail:</td><td>buyer_1264842853_per@bigfish.hu</td></tr>
				<tr><td>Password:</td><td>bfppbuyer</td></tr>
			</tbody>
		</table>
	</div>

	<div class="providerData PSC">
		<table class="table-test-data">
			<thead><tr><th colspan="2">Test data:</th></tr></thead>
			<tbody><tr><td>Test PIN <em>(to buy without my paysafecard account)</em>:</td><td>7130 2866 8390 5171</td></tr></tbody>
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
			<thead><tr><th colspan="4">Test data:</th></tr></thead>
			<tbody>
				<tr><td>To success payment:</td><td>4314 2299 9999 9913</td><td>Expired date: 01/18</td><td>CVC: 123</td></tr>
				<tr><td>To failed payment:</td><td>4314 2299 9999 9913</td><td>Expired date: 01/20</td><td>CVC: 123</td></tr>
			</tbody>
		</table>
	</div>

	<div class="providerData QPAY">
		<table class="table-test-data">
			<thead><tr><th colspan="4">Test data:</th></tr></thead>
			<tbody>
				<tr><td>To success payment:</td><td>4200000000000018</td><td>Expired date: 01/19</td><td>CVC: 018</td></tr>
				<tr><td>To failed payment:</td><td>4200000000000083</td><td>Expired date: 01/19</td><td>CVC: 083</td></tr>
			</tbody>
		</table>
	</div>

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
			<span>User ID * :</span>
			<input type="text" name="userId" value="">
		</label>
	</div>

	<div class="row">
		<label class="col-2">
			<span>Language :</span>
			<select name="language">
				<option value="HU">HU</option>
				<option value="EN">EN</option>
				<option value="DE">DE</option>
			</select>
		</label>
		
		<label class="col-2">
			<span>Authorization :</span>
			<select name="autoCommit" class="input FHB OTP OTP2 OTPay OTPSimple PayU2 UniCredit QPAY">
				<option value="true">Immediate</option>
				<option value="false">Later</option>
			</select>
		</label>
	</div>

	<div class="row">
		<label class="col-2">
			<span>SZÉP Card pocket ID (cafeteria) :</span>
			<select name="szepPocket" class="input KHBSZEP MKBSZEP OTP">
				<option value=""></option>
				<option value="accommodation">Accommodation</option>
				<option value="hospitality">Hospitality</option>
				<option value="leisure">Leisure</option>
			</select>
		</label>

		<label class="col-2">
			<span>Phone number :</span>
			<input type="text" name="phoneNumber" value="" class="input OTPay">
		</label>
	</div>

	<label>
		<span>OTP consumer registration ID (One Click Payment) :</span>
		<input type="text" name="otpConsumerRegistrationId" value="" class="input OTP OTP2">
	</label>

	<label class="label-chkbox">
		<span>One Click Payment (User registration or pay by a registered user on Payment Gateway page): <input type="checkbox" name="oneClickPayment" value="1" class="input Escalion OTPSimple"><span class="chkbox"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-check"></use></svg></span></span>
	</label>

	<label class="label-chkbox">
		<span>Add your card data on merchant's page:</span>
	</label>

	<label>
		<span>Card number :</span>
		<input type="text" name="cardNumber" value="" class="input MKBSZEP OTP2" size="17">
	</label>

	<label>
		<span>Expired date (mmyy) :</span>
		<input type="text" name="cardExpiration" value="" class="input MKBSZEP OTP2">
	</label>

	<label>
		<span>CVC/CVV :</span>
		<input type="text" name="cardCvc" value="" class="input MKBSZEP OTP2">
	</label>

	<label class="label-chkbox">
		<span>Add your card data on Payment Gateway page: <input type="checkbox" name="gatewayPaymentPage" value="1" class="input MKBSZEP"><span class="chkbox"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-check"></use></svg></span></span>
	</label>

	<input type="submit" name="submit" value="Next">
</form>

<script type="text/javascript">
	var providers = document.startForm.providerName;
	var providerData = document.getElementsByClassName("providerData");
	var inputs = document.getElementsByClassName("input");

	inputController();
	setProviderDataHide();
	setInputsDisabled();
</script>
