<form name="invoiceForm" action="/controllers/?action=invoice" method="post" target="_blank">
	<label>
		<span>Transaction ID * :</span>
		<input type="text" name="TransactionId" value="">
	</label>

	<label>
		<span>Test data * :</span>
			<textarea name="testData">
array(
	'beallitasok' => array(
		'felhasznalo' => '',
		'jelszo' => '',
		'eszamla' => 'true',
		'kulcstartojelszo' => '',
		'szamlaLetoltes' => 'true',
		'szamlaLetoltesPld' => 2,
		'valaszVerzio' => 2,
	),
	'fejlec' => array(
		'keltDatum' => '2016-11-30',
		'teljesitesDatum' => '2016-11-30',
		'fizetesiHataridoDatum' => '2016-11-30',
		'fizmod' => 'Átutalás',
		'penznem' => 'HUF',
		'szamlaNyelve' => 'hu',
		'megjegyzes' => 'Számla megjegyzés',
		'rendelesSzam' => rand(1000000, 9999999),
		'elolegszamla' => 'false',
		'vegszamla' => 'false',
		'helyesbitoszamla' => 'false',
		'helyesbitettSzamlaszam' => '',
		'dijbekero' => 'false',
		'szamlaszamElotag' => '',
		'fizetve' => 'true',
	),
	'elado' => array(
		'bank' => 'OTP Bank',
		'bankszamlaszam' => '11111111-22222222-33333333',
		'emailReplyto' => '',
		'emailTargy' => '',
		'emailSzoveg' => '',
		'alairoNeve' => '',
	),
	'vevo' => array(
		'nev' => 'Kovács Bt.',
		'irsz' => '2030',
		'telepules' => 'Érd',
		'cim' => 'Tárnoki út 23.',
		'adoszam' => '12345678-1-42',
		'postazasiNev' => 'Kovács Bt. postázási név',
		'postazasiIrsz' => '2040',
		'postazasiTelepules' => 'Budaörs',
		'postazasiCim' => 'Szivárvány utca 8. VI.em. 42.',
		'alairoNeve' => 'Vevő Aláírója',
		'telefonszam' => 'Tel:+3630-555-55-55, Fax:+3623-555-555',
		'megjegyzes' => 'A portáról felszólni a 214-es mellékre.',
	),
	'tetelek' => array(
		array(
			'megnevezes' => 'Elado izé',
			'mennyiseg' => '1.0',
			'mennyisegiEgyseg' => 'db',
			'nettoEgysegar' => '10000',
			'afakulcs' => '25',
			'nettoErtek' => '10000.0',
			'afaErtek' => '2500.0',
			'bruttoErtek' => '12500.0',
			'megjegyzes' => 'tétel megjegyzés 1',
		),
		array(
			'megnevezes' => 'Elado izé 2.',
			'mennyiseg' => '2.0',
			'mennyisegiEgyseg' => 'db',
			'nettoEgysegar' => '10000',
			'afakulcs' => '25',
			'nettoErtek' => '20000.0',
			'afaErtek' => '5000.0',
			'bruttoErtek' => '25000.0',
			'megjegyzes' => 'tétel megjegyzés 2',
		),
	),
)</textarea>
	</label>
	<input type="submit" name="submit" value="Next">
</form>
