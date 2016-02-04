<form name="startForm" action="/controllers/?action=start" method="post" target="_blank">
	<label>Fizetési mód * :</label>
	<ul style="list-style-type: none; padding: 0;">
		<li><input type="radio" name="providerName" value="Barion" /> Barion</li>
		<li><input type="radio" name="providerName" value="Borgun" /> Borgun</li>
		<li><input type="radio" name="providerName" value="CIB" /> CIB Bank</li>
		<li><input type="radio" name="providerName" value="Escalion" /> Escalion</li>
		<li><input type="radio" name="providerName" value="FHB" /> FHB Bank</li>
		<li><input type="radio" name="providerName" value="KHB" /> K&H Bank</li>
		<li><input type="radio" name="providerName" value="KHBSZEP" /> K&H SZÉP Kártya</li>
		<li><input type="radio" name="providerName" value="MKBSZEP" /> MKB SZÉP Kártya</li>
		<li><input type="radio" name="providerName" value="OTP" /> OTP Bank, OTP SZÉP Kártya</li>
		<li><input type="radio" name="providerName" value="OTP2" /> OTP Bank (kétszereplős)</li>
		<li><input type="radio" name="providerName" value="OTPMultipont" /> OTP Multipont</li>
		<li><input type="radio" name="providerName" value="OTPSimple" /> OTP Simple</li>
		<li><input type="radio" name="providerName" value="OTPSimpleWire" /> OTP Simple átutalás</li>
		<li><input type="radio" name="providerName" value="OTPay" /> OTPay</li>
		<li><input type="radio" name="providerName" value="OTPayMP" /> OTPay MasterPass</li>
		<li><input type="radio" name="providerName" value="PayPal" /> PayPal</li>
		<li><input type="radio" name="providerName" value="PSC" /> Paysafecard</li>
		<li><input type="radio" name="providerName" value="PayU2" /> PayU (lengyel)</li>
		<li><input type="radio" name="providerName" value="Sofort" /> Sofort Banking</li>
		<li><input type="radio" name="providerName" value="UniCredit" /> UniCredit Bank</li>
		<li><input type="radio" name="providerName" value="QPAY" /> Wirecard QPAY</li>
	</ul>
	
	<div class="providerData Barion">
		<b>Teszteléshez az alábbi hozzáférések használhatóak:</b><br/>
		<table>
			<tr><td>E-mail:</td><td>barion-test@bigfish.hu</td></tr>
			<tr><td>Jelszó:</td><td>bf-barion-1</td></tr>
		</table>
	</div>
	<div class="providerData Borgun">
		<b>Teszteléshez az alábbi bankkártyaszámok használhatók:</b><br/>
		<table>
			<tr><td>Sikeres fizetés:</td><td>4741520000000003</td><td>CVC: 000</td></tr>
			<tr><td>Sikertelen fizetés:</td><td>4155520000000002</td><td>CVC: 121</td></tr>
		</table>
	</div>
	<div class="providerData CIB">
		<b>Teszteléshez az alábbi bankkártyaszámok használhatók:</b><br/>
		<table>
			<tr><td>Sikeres fizetés:</td><td>5111 1111 1111 1111</td><td>lejárati idő: bármi</td><td>CVC: 111</td></tr>
			<tr><td>Sikertelen fizetés:</td><td>4999 9999 9999 9999</td><td>lejárati idő: bármi</td><td>CVC: nem kell</td></tr>
		</table>
	</div>
	<div class="providerData Escalion">
		<b>Teszteléshez az alábbi bankkártyaszámok használhatók:</b><br/>
		<table>
			<tr><td>Sikeres fizetés:</td><td>5431 1111 1111 1111</td><td>lejárati idő: bármi</td><td>CVC: 111</td></tr>
			<tr><td>Sikertelen fizetés:</td><td>4111 1111 1111 1111</td><td>lejárati idő: bármi</td><td>CVC: 111</td></tr>
		</table>
	</div>
	<div class="providerData FHB">
		<b>Teszteléshez az alábbi bankkártyaszámok használhatók:</b><br/>
		<table>
			<tr><td>Sikeres fizetés:</td><td>4314 2299 9999 9913</td><td>lejárati idő: 01/18</td><td>CVC: 123</td></tr>
			<tr><td>Sikertelen fizetés:</td><td>4314 2299 9999 9913</td><td>lejárati idő: 01/20</td><td>CVC: 123</td></tr>
		</table>
	</div>
	<div class="providerData KHB">
		<b>Teszteléshez az alábbi bankkártyaszámok használhatók:</b><br/>
		<table>
			<tr><td>Sikeres fizetés:</td><td>4550 5225 9830 5372</td><td>lejárati idő: 2003/11</td><td>CVV2: 271</td></tr>
			<tr><td>Sikertelen fizetés:</td><td>4205 7925 0786 4590</td><td>lejárati idő: 2006/10</td><td>CVV2: 106</td></tr>
		</table>
	</div>
	<div class="providerData KHBSZEP">
		<b>Teszteléshez az alábbi kártyaszámok használhatók:</b><br/>
		<table>
			<tr>
				<td valign="top">Sikeres fizetés:</td>
				<td>
					Kártyaszám: 64719254<br />
					Lejárat: 2019.12.31<br />
					Ellenőrző jegyek: 213<br />
					Jelszó: PGtest01
				</td>
			</tr>
			<tr>
				<td valign="top">Sikertelen fizetés:</td>
				<td>
					Kártyaszám: 05101182<br />
					Lejárat: 2019.12.31<br />
					Ellenőrző jegyek: 508<br />
					Jelszó: Aa123456
				</td>
			</tr>
		</table>
	</div>
	<div class="providerData MKBSZEP">
		<b>Teszteléshez az alábbi adatok használhatók:</b><br/>
		<table>
			<tr><td>Kártyaszám:</td><td>6101317000000128</td><td>CVV:</td><td>497</td></tr>
		</table>
	</div>
	<div class="providerData OTP">
		<b>Teszteléshez az alábbi bankkártyaszámok használhatók:</b><br/>
		<table>
			<tr><td>Sikeres fizetés:</td><td>4908 3660 9990 0425</td><td>lejárati idő: 2014/10</td><td>CVC2: 823</td></tr>
			<tr><td>Sikertelen fizetés:</td><td>1111 1111 1111 1117</td><td>lejárati idő: 2004/04</td><td>CVC2: 111</td></tr>
			<tr><td colspan="4"><br /><b>Cafeteria / SZÉP kártya tranzakció teszteléséhez zseb azonosítót kell választani:</b></td></tr>
			<tr><td>Sikeres fizetés:</td><td>6101 3242 9999 2718</td><td>Lejárati dátum: 09/19</td><td>CVC2: 282</td></tr>
		</table>
	</div>
	<div class="providerData OTP2">
		<b>Teszteléshez az alábbi adatokat használjuk:</b><br/>
		<table>
			<tr><td>Kártyaszám:</td><td>4908366099900425</td></tr>
			<tr><td>Kártyalejárat dátuma (hhéé):</td><td>1014</td></tr>
			<tr><td>CVC/CVV ellenőrző kód:</td><td>823</td></tr>
		</table>
	</div>
	<div class="providerData OTPMultipont">
		<b>Teszteléshez az alábbi kártyaszám használható:</b><br/>
		<table>
			<tr><td>Sikeres fizetés:</td><td>6369471300001646</td></tr>
		</table>
	</div>
	<div class="providerData OTPSimple">
		OTP Simple
	</div>
	<div class="providerData OTPay">
		<b>Kérjük, írja be mobiltelefonszámát vagy MobilFizetés azonosítóját:</b><br/>
		Telefonszám: 36101022001
	</div>
	<div class="providerData OTPayMP">
		<b>Teszteléshez az alábbi helyről tölthető le az Android alkalmazás:</b><br/><br/>
		<a href="https://rink.hockeyapp.net/apps/fb0e2cb7852d2e61cf1101aa29852510/app_versions/131" target="_blank">https://rink.hockeyapp.net/apps/fb0e2cb7852d2e61cf1101aa29852510/app_versions/131</a><br /><br />
		Az alkalmazást olyan készülékre kell telepíteni, amin nincs telepítve éles OTPay alkalmazás.<br /><br />
		<b>A feltelepített teszt alkalmazást nem szabad frissíteni!</b><br /><br />
		A regisztráció során SMS-ben kiküldésre kerül egy kódsor, amire válasz SMS-t küldve megkapható a regisztrációhoz szükséges 5 jegyű kód.<br/><br/>
		<b>Adatok a teszt mKártya regisztrálásához az alkalmazásban:</b><br/><br/>
		<table>
			<tr><td>mKártya neve:</td><td>tetszőleges elnevezés</td></tr>
			<tr><td>Kártyán szereplő név:</td><td>TESZT 84</td></tr>
			<tr><td>Kártya száma:</td><td>5437 5884 9990 0468</td></tr>
			<tr><td>Érvényességi idő (hh/éé):</td><td>1216</td></tr>
			<tr><td>Kártya biztonsági (CVC) kódja:</td><td>578</td></tr>
			<tr><td><br/></td><td><br/></td></tr>
			<tr><td>Kártya aktiválása:</td><td>0000</td></tr>
			<tr><td colspan="2"><br/><b>MasterPass felületén választandó:</b><br/><br/></td></tr>
			<tr><td>Ország:</td><td>Magyarország</td></tr>
			<tr><td>Pénztárca:</td><td>test OTPay</td></tr>
		</table>
	</div>
	<div class="providerData PayPal">
		<b>Teszteléshez az alábbi hozzáférések használhatóak:</b><br/>
		<table>
			<tr><td>Vevő e-mail:</td><td>buyer_1264842853_per@bigfish.hu</td></tr>
			<tr><td>Jelszó:</td><td>bfppbuyer</td></tr>
			<tr><td>Eladó e-mail:</td><td>seller_1264850679_biz@bigfish.hu</td></tr>
			<tr><td>Jelszó:</td><td>bfppseller</td></tr>
		</table>
	</div>
	<div class="providerData PSC">
		<b>Teszteléshez az alábbi adatok használhatók:</b><br/>
		<table>
			<tr><td>Teszt PIN (my paysafecard nélküli vásárláshoz):</td><td>7130 2866 8390 5171</td></tr>
		</table>
	</div>
	<div class="providerData PayU2">
		Lengel PayU
	</div>
	<div class="providerData Sofort">
		<b>Teszteléshez az alábbi hozzáférések használhatóak:</b><br/>
		(Nyomonkövetés csak EUR pénznemben. SOFORT oldalán Németországot kell kiválasztani.)<br/>
		<table>
			<tr><td>Sort code:</td><td>88888888</td></tr>
			<tr><td>Kontonummer:</td><td>123456789</td></tr>
			<tr><td>PIN:</td><td>00000</td></tr>
		</table>
	</div>
	<div class="providerData UniCredit">
		<b>Teszteléshez az alábbi bankkártyaszámok használhatók:</b><br/>
		<table>
			<tr><td>Sikeres fizetés:</td><td>4314 2299 9999 9913</td><td>lejárati idő: 01/18</td><td>CVC: 123</td></tr>
			<tr><td>Sikertelen fizetés:</td><td>4314 2299 9999 9913</td><td>lejárati idő: 01/20</td><td>CVC: 123</td></tr>
		</table>
	</div>
	<div class="providerData QPAY">
		<b>Teszteléshez az alábbi bankkártyaszámok használhatók:</b><br/>
		<table>
			<tr><td>Sikeres fizetés:</td><td>4200000000000018</td><td>lejárati idő: 01/19</td><td>CVC: 018</td></tr>
			<tr><td>Sikertelen fizetés:</td><td>4200000000000083</td><td>lejárati idő: 01/19</td><td>CVC: 083</td></tr>
		</table>
	</div>
	
	<div>
		<label>Válasz url (publikusan elérhetőnek kell lennie) * :</label>
		<input type="text" name="responseUrl" value="<?=$this->responseUrl;?>" size="80" />
	</div>
	<div>
		<label>Összeg * :</label>
		<input type="text" name="amount" value="" size="10" />
		<select name="currency" size="1">
			<option value="HUF">HUF</option>
			<option value="EUR">EUR</option>
			<option value="USD">USD</option>
		</select>
	</div>
	<div>
		<label>Rendelés azonosító:</label>
		<input type="text" name="orderId" value="" />
	</div>
	<div>
		<label>Felhasználó azonosító:</label>
		<input type="text" name="userId" value="" />
	</div>
	<div>
		<label>Nyelv:</label>
		<select name="language" size="1">
			<option value="HU">HU</option>
			<option value="EN">EN</option>
			<option value="DE">DE</option>
		</select>
	</div>
	<div>
		<label>Végrehajtás:</label>
		<select name="autoCommit" size="1" class="input FHB OTP OTP2 OTPay OTPSimple PayU2 UniCredit QPAY">
			<option value="true">Azonnali terhelés</option>
			<option value="false">Későbbi időpontban</option>
		</select>
	</div>
	<div>
		<label>Kártyaadatok megadása a Payment Gateway oldalán:</label>
		<input type="checkbox" name="gatewayPaymentPage" value="1" class="input MKBSZEP" />
	</div>
	<div>
		<label>Kártyaadatok megadása kereskedő oldalán:</label>
		<div>
			Kártyaszám: <input type="text" name="cardNumber" value="" class="input MKBSZEP OTP2" size="17" /> Kártyalejárat dátuma (hhéé): <input type="text" name="cardExpiration" value="" class="input MKBSZEP OTP2" size="3" /> CVC/CVV ellenőrző kód: <input type="text" name="cardCvc" value="" class="input MKBSZEP OTP2" size="3" />
		</div>
	</div>
	<div>
		<label>Telefonszám:</label>
		<input type="text" name="phoneNumber" value="" class="input OTPay" />
	</div>
	<div>
		<label>SZÉP Kártya zseb (cafetéria) azonosító:</label>
		<select name="szepPocket" size="1" class="input KHBSZEP MKBSZEP OTP">
			<option value=""></option>
			<option value="accommodation">Szálláshely</option>
			<option value="hospitality">Vendéglátás</option>
			<option value="leisure">Szabadidő</option>
		</select>
	</div>
	<div>
		<label>OTP vásárló azonosító (One Click Payment fizetéshez):</label>
		<input type="text" name="otpConsumerRegistrationId" value="" class="input OTP OTP2" />
	</div>
	<div>
		<label>One Click Payment fizetés (felhasználó regisztráció vagy fizetés egy regisztrált felhasználóval a Payment Gateway oldalán):</label>
		<input type="checkbox" name="oneClickPayment" value="1" class="input Escalion OTPSimple" />
	</div>
	<br /><br />
	<input type="submit" name="submit" value="Tovább" />
</form>
<script type="text/javascript">
	var providers = document.startForm.providerName;
	var providerData = document.getElementsByClassName("providerData");
	var inputs = document.getElementsByClassName("input");

	inputController();
	setProviderDataHide();
	setInputsDisabled();
</script>
