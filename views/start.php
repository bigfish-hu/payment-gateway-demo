<form name="startForm" action="/controllers/?action=start" method="post" target="_blank">
	<label>
		<span>Provider *:</span>
	</label>
	<ul>
		<li><label><input type="radio" name="providerName" value="Barion"><span><span></span></span>Barion</label></li>
		<li><label><input type="radio" name="providerName" value="Borgun"><span><span></span></span>Borgun</label></li>
		<li><label><input type="radio" name="providerName" value="CIB"><span><span></span></span>CIB Bank</label></li>
		<li><label><input type="radio" name="providerName" value="Escalion"><span><span></span></span>Escalion</label></li>
		<li><label><input type="radio" name="providerName" value="FHB"><span><span></span></span>FHB Bank</label></li>
		<li><label><input type="radio" name="providerName" value="IPG"><span><span></span></span>Intelligent Payments</label></li>
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
		<li><label><input type="radio" name="providerName" value="Saferpay"><span><span></span></span>Saferpay</label></li>
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
			<thead><tr><th colspan="4">Test data:</th></tr></thead>
			<tbody>
				<tr><td>To success payment:</td><td>4741520000000003</td><td>CVC:</td><td>000</td></tr>
				<tr><td>To failed payment:</td><td>4155520000000002</td><td>CVC:</td><td>121</td></tr>
			</tbody>
		</table>
	</div>

	<div class="providerData CIB">
		<table class="table-test-data">
			<thead><tr><th colspan="6">Test data:</th></tr></thead>
			<tbody>
				<tr><td>To success payment:</td><td>5111 1111 1111 1111</td><td>Expired date:</td><td>any</td><td>CVC:</td><td>111</td></tr>
				<tr><td>To failed payment:</td><td>4999 9999 9999 9999</td><td>Expired date:</td><td>any</td><td>CVC:</td><td>111</td></tr>
			</tbody>
		</table>
	</div>

	<div class="providerData Escalion">
		<table class="table-test-data">
			<thead><tr><th colspan="6">Test data:</th></tr></thead>
			<tbody>
				<tr><td>To success payment:</td><td>5431 1111 1111 1111</td><td>Expired date:</td><td>any</td><td>CVC:</td><td>111</td></tr>
				<tr><td>To failed payment:</td><td>4111 1111 1111 1111</td><td>Expired date:</td><td>any</td><td>CVC:</td><td>111</td></tr>
			</tbody>
		</table>
	</div>

	<div class="providerData FHB">
		<table class="table-test-data">
			<thead><tr><th colspan="6">Test data:</th></tr></thead>
			<tbody>
				<tr><td>To success payment:</td><td>4314229999999913</td><td>Expired date:</td><td>01/18</td><td>CVC:</td><td>123</td></tr>
				<tr><td>To failed payment:</td><td>4314229999999913</td><td>Expired date:</td><td>01/20</td><td>CVC:</td><td>123</td></tr>
			</tbody>
		</table>
	</div>
	

	<div class="providerData IPG">
		<table class="table-test-data">
			<thead><tr><th colspan="6">Test data:</th></tr></thead>
			<tbody>
				<tr><td>To success payment:</td><td>5454545454545454</td><td>Expired date:</td><td>12/18</td><td>CVC:</td><td>123</td></tr>
				<tr><td>To failed payment:</td><td colspan="5">20.12 EUR amount transaction</td></tr>
			</tbody>
		</table>
	</div>

	<div class="providerData KHB">
		<table class="table-test-data">
			<thead><tr><th colspan="6">Test data:</th></tr></thead>
			<tbody>
				<tr><td>To success payment:</td><td>4550 5225 9830 5372</td><td>Expired date:</td><td>2003/11</td><td>CVV2:</td><td>271</td></tr>
				<tr><td>To failed payment:</td><td>4205 7925 0786 4590</td><td>Expired date:</td><td>2006/10</td><td>CVV2:</td><td>106</td></tr>
			</tbody>
		</table>
	</div>

	<div class="providerData KHBSZEP">
		<table class="table-test-data">
			<thead><tr><th colspan="3">Test data:</th></tr></thead>
			<tbody>
				<tr><td>To success payment:</td><td>Card number:</td><td>64719254</td></tr>
				<tr><td></td><td>Expired date:</td><td>2019.12.31</td></tr>
				<tr><td></td><td>Controlling value:</td><td>213</td></tr>
				<tr><td></td><td>Password:</td><td>PGtest01</td></tr>
				<tr><td>To failed payment:</td><td>Card number:</td><td>05101182</td></tr>
				<tr><td></td><td>Expired date:</td><td>2019.12.31</td></tr>
				<tr><td></td><td>Controlling value:</td><td>508</td></tr>
				<tr><td></td><td>Password:</td><td>Aa123456</td></tr>
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
			<thead><tr><th colspan="6">Test data:</th></tr></thead>
			<tbody>
				<tr><td>To success payment:</td><td>4908 3660 9990 0425</td><td>Expired date:</td><td>any</td><td>CVC2:</td><td>any</td></tr>
				<tr><td>To failed payment:</td><td>1111 1111 1111 1117</td><td>Expired date:</td><td>2004/04</td><td>CVC2:</td><td>111</td></tr>
			</tbody>
		</table>

		<table class="table-test-data">
			<thead><tr><th colspan="6">SZÉP Card test data:</th></tr></thead>
			<tbody><tr><td>To success payment:</td><td>6101 3242 9999 2718</td><td>Expired date:</td><td>09/19</td><td>CVC2:</td><td>282</td></tr></tbody>
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

	<div class="providerData Saferpay">
		<table class="table-test-data">
			<thead><tr><th colspan="6">Test data:</th></tr></thead>
			<tbody>
				<tr><td>To success payment (VISA):</td><td>9010101052000002</td><td>Expired date:</td><td>any</td><td>CVC:</td><td>any</td></tr>
				<tr><td>To failed payment (VISA):</td><td>9010100152000003</td><td>Expired date:</td><td>any</td><td>CVC:</td><td>any</td></tr>
				<tr><td>To success payment (MASTERCARD):</td><td>9030101052000008</td><td>Expired date:</td><td>any</td><td>CVC:</td><td>any</td></tr>
				<tr><td>To failed payment (MASTERCARD):</td><td>9030100152000009</td><td>Expired date:</td><td>any</td><td>CVC:</td><td>any</td></tr>
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
				<tr><td>To success payment:</td><td>4314229999999913</td><td>Expired date:</td><td>01/18</td><td>CVC:</td><td>123</td></tr>
				<tr><td>To failed payment:</td><td>4314229999999913</td><td>Expired date:</td><td>01/20</td><td>CVC:</td><td>123</td></tr>
			</tbody>
		</table>
	</div>

	<div class="providerData QPAY">
		<table class="table-test-data">
			<thead><tr><th colspan="6">Test data:</th></tr></thead>
			<tbody>
				<tr><td>MasterCard without MasterCard SecureCode (SSL only):</td><td>9500000000000002</td><td>Expired date:</td><td>any</td><td>CVC:</td><td>any</td></tr>
				<tr><td>MasterCard with MasterCard SecureCode:</td><td>9500000000000001</td><td>Expired date:</td><td>any</td><td>CVC:</td><td>any</td></tr>
				<tr><td>Visa without Verified by Visa (SSL only):</td><td>9400000000000004</td><td>Expired date:</td><td>any</td><td>CVC:</td><td>any</td></tr>
				<tr><td>Visa with Verified by Visa:</td><td>9400000000000003</td><td>Expired date:</td><td>any</td><td>CVC:</td><td>any</td></tr>
				<tr><td>Maestro with Maestro SecureCode:</td><td>9600000000000005</td><td>Expired date:</td><td>any</td><td>CVC:</td><td>any</td></tr>
				<tr><td>American Express (SSL only):</td><td>9100000000000006</td><td>Expired date:</td><td>any</td><td>CVC:</td><td>any</td></tr>
				<tr><td>American Express with American Express SafeKey:</td><td>9100000000000005</td><td>Expired date:</td><td>any</td><td>CVC:</td><td>any</td></tr>
				<tr><td>Diners Club (SSL only):</td><td>9200000000000007</td><td>Expired date:</td><td>any</td><td>CVC:</td><td>any</td></tr>
				<tr><td>JCB (SSL only):</td><td>9300000000000008</td><td>Expired date:</td><td>any</td><td>CVC:</td><td>any</td></tr>
				<tr><td>UATP (SSL only):</td><td>9110000000000010</td><td>Expired date:</td><td>any</td><td>CVC:</td><td>any</td></tr>
				<tr><td>Discover (SSL only):</td><td>9090000000000011</td><td>Expired date:</td><td>any</td><td>CVC:</td><td>any</td></tr>
			</tbody>
		</table>
	</div>

	<label>
		<span>Response URL (It must be available publicly) *:</span>
		<input class="full-width" type="text" name="responseUrl" value="<?=$this->responseUrl;?>">
	</label>

	<div class="row">
		<label class="col-2">
			<span>Amount *:</span>
			<input type="text" name="amount" value="">
		</label>
		
		<label class="col-2">
			<span>Currency:</span>
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
			<span>Order ID *:</span>
			<input type="text" name="orderId" value="">
		</label>

		<label class="col-2">
			<span>User ID *:</span>
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
			</select>
		</label>
		
		<label class="col-2 providerData FHB IPG OTP OTP2 OTPay OTPSimple PayU2 UniCredit QPAY Saferpay">
			<span>Authorization:</span>
			<select name="autoCommit" class="input FHB IPG OTP OTP2 OTPay OTPSimple PayU2 UniCredit QPAY Saferpay">
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

	<label class="providerData OTPay">
		<span>Phone number:</span>
		<input type="text" name="phoneNumber" value="" class="input OTPay">
	</label>

	<label class="providerData OTP OTP2">
		<span>OTP consumer registration ID (One Click Payment):</span>
		<input type="text" name="otpConsumerRegistrationId" value="" class="input OTP OTP2">
	</label>

	<label class="label-chkbox providerData Escalion OTPSimple Saferpay">
		<span>One Click Payment (Card registration or pay by a registered card on Payment Gateway page): <input type="checkbox" name="oneClickPayment" value="1" class="input Escalion OTPSimple Saferpay"><span class="chkbox"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-check"></use></svg></span></span>
	</label>

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

	<label class="label-chkbox providerData MKBSZEP OTP2">
		<span>Add your card data on merchant's page:</span>
	</label>

	<label class="providerData MKBSZEP OTP2">
		<span>Card number:</span>
		<input type="text" name="cardNumber" value="" class="input MKBSZEP OTP2" size="17">
	</label>

	<label class="providerData OTP2">
		<span>Expired date (mmyy):</span>
		<input type="text" name="cardExpiration" value="" class="input OTP2">
	</label>

	<label class="providerData MKBSZEP OTP2">
		<span>CVC/CVV:</span>
		<input type="text" name="cardCvc" value="" class="input MKBSZEP OTP2">
	</label>

	<label class="label-chkbox providerData MKBSZEP">
		<span>Add your card data on Payment Gateway page: <input type="checkbox" name="gatewayPaymentPage" value="1" class="input MKBSZEP"><span class="chkbox"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-check"></use></svg></span></span>
	</label>

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

	<label class="providerData QPAY">
		<span>Payment type:</span>
	</label>

	<div class="row providerData QPAY">
		<select name="extra[QpayPaymentType]" class="input QPAY">
			<option value="">Setting by store</option>
			<?foreach (self::$wirecardPaymentTypes as $wirecardPaymentTypeKey => $wirecardPaymentTypeName) {?>
				<option value="<?=$wirecardPaymentTypeKey;?>"><?=$wirecardPaymentTypeName;?></option>
			<?}?>
		</select>
	</div>

	<input type="submit" name="submit" value="Next">
</form>
