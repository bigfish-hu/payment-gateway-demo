<form name="startForm" action="/controllers/?action=start" method="post" target="_blank">
	<label>Provider * :</label>
	<ul style="list-style-type: none; padding: 0;">
		<li><input type="radio" name="providerName" value="Barion" /> Barion</li>
		<li><input type="radio" name="providerName" value="Borgun" /> Borgun</li>
		<li><input type="radio" name="providerName" value="CIB" /> CIB Bank</li>
		<li><input type="radio" name="providerName" value="Escalion" /> Escalion</li>
		<li><input type="radio" name="providerName" value="FHB" /> FHB Bank</li>
		<li><input type="radio" name="providerName" value="KHB" /> K&H Bank</li>
		<li><input type="radio" name="providerName" value="KHBSZEP" /> K&H SZÉP Card</li>
		<li><input type="radio" name="providerName" value="MKBSZEP" /> MKB SZÉP Card</li>
		<li><input type="radio" name="providerName" value="OTP" /> OTP Bank, OTP SZÉP Card</li>
		<li><input type="radio" name="providerName" value="OTP2" /> OTP Bank (two-way)</li>
		<li><input type="radio" name="providerName" value="OTPMultipont" /> OTP Multipont</li>
		<li><input type="radio" name="providerName" value="OTPSimple" /> OTP Simple</li>
		<li><input type="radio" name="providerName" value="OTPSimpleWire" /> OTP Simple wire</li>
		<li><input type="radio" name="providerName" value="OTPay" /> OTPay</li>
		<li><input type="radio" name="providerName" value="OTPayMP" /> OTPay MasterPass</li>
		<li><input type="radio" name="providerName" value="PayPal" /> PayPal</li>
		<li><input type="radio" name="providerName" value="PSC" /> Paysafecard</li>
		<li><input type="radio" name="providerName" value="PayU2" /> PayU (Polish)</li>
		<li><input type="radio" name="providerName" value="Sofort" /> Sofort Banking</li>
		<li><input type="radio" name="providerName" value="UniCredit" /> UniCredit Bank</li>
		<li><input type="radio" name="providerName" value="QPAY" /> Wirecard QPAY</li>
	</ul>
	
	<div class="providerData Barion">
		<b>Test data:</b><br/>
		<table>
			<tr><td>E-mail:</td><td>barion-test@bigfish.hu</td></tr>
			<tr><td>Password:</td><td>bf-barion-1</td></tr>
		</table>
	</div>
	<div class="providerData Borgun">
		<b>Test data:</b><br/>
		<table>
			<tr><td>To success payment:</td><td>4741520000000003</td><td>CVC: 000</td></tr>
			<tr><td>To failed payment:</td><td>4155520000000002</td><td>CVC: 121</td></tr>
		</table>
	</div>
	<div class="providerData CIB">
		<b>Test data:</b><br/>
		<table>
			<tr><td>To success payment:</td><td>5111 1111 1111 1111</td><td>Expired date: any</td><td>CVC: 111</td></tr>
			<tr><td>To failed payment:</td><td>4999 9999 9999 9999</td><td>Expired date: any</td><td>CVC: 111</td></tr>
		</table>
	</div>
	<div class="providerData Escalion">
		<b>Test data:</b><br/>
		<table>
			<tr><td>To success payment:</td><td>5431 1111 1111 1111</td><td>Expired date: any</td><td>CVC: 111</td></tr>
			<tr><td>To failed payment:</td><td>4111 1111 1111 1111</td><td>Expired date: any</td><td>CVC: 111</td></tr>
		</table>
	</div>
	<div class="providerData FHB">
		<b>Test data:</b><br/>
		<table>
			<tr><td>To success payment:</td><td>4314 2299 9999 9913</td><td>Expired date: 01/18</td><td>CVC: 123</td></tr>
			<tr><td>To failed payment:</td><td>4314 2299 9999 9913</td><td>Expired date: 01/20</td><td>CVC: 123</td></tr>
		</table>
	</div>
	<div class="providerData KHB">
		<b>Test data:</b><br/>
		<table>
			<tr><td>To success payment:</td><td>4550 5225 9830 5372</td><td>Expired date: 2003/11</td><td>CVV2: 271</td></tr>
			<tr><td>To failed payment:</td><td>4205 7925 0786 4590</td><td>Expired date: 2006/10</td><td>CVV2: 106</td></tr>
		</table>
	</div>
	<div class="providerData KHBSZEP">
		<b>Test data:</b><br/>
		<table>
			<tr>
				<td valign="top">To success payment:</td>
				<td>
					Card number: 64719254<br />
					Expired date: 2019.12.31<br />
					Controlling value: 213<br />
					Password: PGtest01
				</td>
			</tr>
			<tr>
				<td valign="top">To failed payment:</td>
				<td>
					Card number: 05101182<br />
					Expired date: 2019.12.31<br />
					Controlling value: 508<br />
					Password: Aa123456
				</td>
			</tr>
		</table>
	</div>
	<div class="providerData MKBSZEP">
		<b>Test data:</b><br/>
		<table>
			<tr><td>Card number:</td><td>6101317000000128</td><td>CVV:</td><td>497</td></tr>
		</table>
	</div>
	<div class="providerData OTP">
		<b>Test data:</b><br/>
		<table>
			<tr><td>To success payment:</td><td>4908 3660 9990 0425</td><td>Expired date: 2014/10</td><td>CVC2: 823</td></tr>
			<tr><td>To failed payment:</td><td>1111 1111 1111 1117</td><td>Expired date: 2004/04</td><td>CVC2: 111</td></tr>
			<tr><td colspan="4"><br /><b>SZÉP Card test data:</b></td></tr>
			<tr><td>To success payment:</td><td>6101 3242 9999 2718</td><td>Expired date: 09/19</td><td>CVC2: 282</td></tr>
		</table>
	</div>
	<div class="providerData OTP2">
		<b>Test data:</b><br/>
		<table>
			<tr><td>Card number:</td><td>4908366099900425</td></tr>
			<tr><td>Expired date (mmyy):</td><td>1014</td></tr>
			<tr><td>CVC/CVV:</td><td>823</td></tr>
		</table>
	</div>
	<div class="providerData OTPMultipont">
		<b>Test data:</b><br/>
		<table>
			<tr><td>To success payment:</td><td>6369471300001646</td></tr>
		</table>
	</div>
	<div class="providerData OTPSimple">
		OTP Simple
	</div>
	<div class="providerData OTPay">
		<b>Test data:</b><br/>
		Phone number: 36101022001
	</div>
	<div class="providerData OTPayMP">
		<b>Android test application:</b><br/><br/>
		<a href="https://rink.hockeyapp.net/apps/fb0e2cb7852d2e61cf1101aa29852510/app_versions/131" target="_blank">https://rink.hockeyapp.net/apps/fb0e2cb7852d2e61cf1101aa29852510/app_versions/131</a><br /><br />
		It is necessary to intall the application on a device which live OTPay is not installed.<br /><br />
		<b>Do not update the test application!</b><br /><br />
		During the registration you have to receive a code in SMS. Send a reply to get the 5-digit code.<br/><br/>
		<b>Test data to register mCard in app:</b><br/><br/>
		<table>
			<tr><td>mCard name:</td><td>any</td></tr>
			<tr><td>Name on card:</td><td>TESZT 84</td></tr>
			<tr><td>Card number:</td><td>5437 5884 9990 0468</td></tr>
			<tr><td>Expired date (mm/yy):</td><td>1216</td></tr>
			<tr><td>CVC:</td><td>578</td></tr>
			<tr><td><br/></td><td><br/></td></tr>
			<tr><td>Card activation number:</td><td>0000</td></tr>
			<tr><td colspan="2"><br/><b>Choose next on MasterPass:</b><br/><br/></td></tr>
			<tr><td>Country:</td><td>Magyarország</td></tr>
			<tr><td>Wallet:</td><td>test OTPay</td></tr>
		</table>
	</div>
	<div class="providerData PayPal">
		<b>Test data:</b><br/>
		<table>
			<tr><td>Buyer e-mail:</td><td>buyer_1264842853_per@bigfish.hu</td></tr>
			<tr><td>Password:</td><td>bfppbuyer</td></tr>
		</table>
	</div>
	<div class="providerData PSC">
		<b>Test data:</b><br/>
		<table>
			<tr><td>Test PIN (to buy without my paysafecard account):</td><td>7130 2866 8390 5171</td></tr>
		</table>
	</div>
	<div class="providerData PayU2">
		Polish PayU
	</div>
	<div class="providerData Sofort">
		<b>Test data:</b><br/>
		(Tracking only in EUR. Germany should be selected.)<br/>
		<table>
			<tr><td>Sort code:</td><td>88888888</td></tr>
			<tr><td>Kontonummer:</td><td>123456789</td></tr>
			<tr><td>PIN:</td><td>00000</td></tr>
		</table>
	</div>
	<div class="providerData UniCredit">
		<b>Test data:</b><br/>
		<table>
			<tr><td>To success payment:</td><td>4314 2299 9999 9913</td><td>Expired date: 01/18</td><td>CVC: 123</td></tr>
			<tr><td>To failed payment:</td><td>4314 2299 9999 9913</td><td>Expired date: 01/20</td><td>CVC: 123</td></tr>
		</table>
	</div>
	<div class="providerData QPAY">
		<b>Test data:</b><br/>
		<table>
			<tr><td>To success payment:</td><td>4200000000000018</td><td>Expired date: 01/19</td><td>CVC: 018</td></tr>
			<tr><td>To failed payment:</td><td>4200000000000083</td><td>Expired date: 01/19</td><td>CVC: 083</td></tr>
		</table>
	</div>
	
	<div>
		<label>Response URL (It must be available publicly) * :</label>
		<input type="text" name="responseUrl" value="<?=$this->responseUrl;?>" size="80" />
	</div>
	<div>
		<label>Amount * :</label>
		<input type="text" name="amount" value="" size="10" />
		<select name="currency" size="1">
			<option value="HUF">HUF</option>
			<option value="EUR">EUR</option>
			<option value="USD">USD</option>
		</select>
	</div>
	<div>
		<label>Order ID:</label>
		<input type="text" name="orderId" value="" />
	</div>
	<div>
		<label>User ID:</label>
		<input type="text" name="userId" value="" />
	</div>
	<div>
		<label>Language:</label>
		<select name="language" size="1">
			<option value="HU">HU</option>
			<option value="EN">EN</option>
			<option value="DE">DE</option>
		</select>
	</div>
	<div>
		<label>Authorization:</label>
		<select name="autoCommit" size="1" class="input FHB OTP OTP2 OTPay OTPSimple PayU2 UniCredit QPAY">
			<option value="true">Immediate</option>
			<option value="false">Later</option>
		</select>
	</div>
	<div>
		<label>Add your card data on Payment Gateway page:</label>
		<input type="checkbox" name="gatewayPaymentPage" value="1" class="input MKBSZEP" />
	</div>
	<div>
		<label>Add your card data on merchant's page:</label>
		<div>
			Card number: <input type="text" name="cardNumber" value="" class="input MKBSZEP OTP2" size="17" /> Expired date (mmyy): <input type="text" name="cardExpiration" value="" class="input MKBSZEP OTP2" size="3" /> CVC/CVV: <input type="text" name="cardCvc" value="" class="input MKBSZEP OTP2" size="3" />
		</div>
	</div>
	<div>
		<label>Phone number:</label>
		<input type="text" name="phoneNumber" value="" class="input OTPay" />
	</div>
	<div>
		<label>SZÉP Card pocket ID (cafeteria):</label>
		<select name="szepPocket" size="1" class="input KHBSZEP MKBSZEP OTP">
			<option value=""></option>
			<option value="accommodation">Accommodation</option>
			<option value="hospitality">Hospitality</option>
			<option value="leisure">Leisure</option>
		</select>
	</div>
	<div>
		<label>OTP consumer registration ID (One Click Payment):</label>
		<input type="text" name="otpConsumerRegistrationId" value="" class="input OTP OTP2" />
	</div>
	<div>
		<label>One Click Payment (User registration or pay by a registered user on Payment Gateway page):</label>
		<input type="checkbox" name="oneClickPayment" value="1" class="input Escalion OTPSimple" />
	</div>
	<br /><br />
	<input type="submit" name="submit" value="Next" />
</form>
<script type="text/javascript">
	var providers = document.startForm.providerName;
	var providerData = document.getElementsByClassName("providerData");
	var inputs = document.getElementsByClassName("input");

	inputController();
	setProviderDataHide();
	setInputsDisabled();
</script>
