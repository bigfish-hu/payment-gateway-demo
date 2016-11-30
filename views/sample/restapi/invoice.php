		<b>Create invoice:</b><br />
		<br />
		Required data (HTTP POST):<br />
		<br />
		method = Invoice<br />
		json = {json encoded variables}<br />
		<br />
		Parameters (* if necessary):<br />
		<br />
		TransactionId*<br />
		InvoiceData*<br />
		<br />
		Example:<br />
		<br />
		method=Invoice&json={"TransactionId":"[TransactionId]","InvoiceData":{"beallitasok":{"felhasznalo":"[felhasznalo]","jelszo":"[jelszo]","eszamla":"true","kulcstartojelszo":"","szamlaLetoltes":"true","szamlaLetoltesPld":2,"valaszVerzio":2},"fejlec":{"keltDatum":"2015-07-09","teljesitesDatum":"2015-07-08","fizetesiHataridoDatum":"2015-07-20","fizmod":"\u00c1tutal\u00e1s","penznem":"HUF","szamlaNyelve":"hu","megjegyzes":"Sz\u00e1mla megjegyz\u00e9s","rendelesSzam":8987854,"elolegszamla":"false","vegszamla":"false","helyesbitoszamla":"false","helyesbitettSzamlaszam":"","dijbekero":"false","szamlaszamElotag":"","fizetve":"true"},"elado":{"bank":"OTP Bank","bankszamlaszam":"11111111-22222222-33333333","emailReplyto":"","emailTargy":"","emailSzoveg":"","alairoNeve":""},"vevo":{"nev":"Kov\u00e1cs Bt.","irsz":"2030","telepules":"\u00c9rd","cim":"T\u00e1rnoki \u00fat 23.","adoszam":"12345678-1-42","postazasiNev":"Kov\u00e1cs Bt. post\u00e1z\u00e1si n\u00e9v","postazasiIrsz":"2040","postazasiTelepules":"Buda\u00f6rs","postazasiCim":"Sziv\u00e1rv\u00e1ny utca 8. VI.em. 42.","alairoNeve":"Vev\u0151 Al\u00e1\u00edr\u00f3ja","telefonszam":"Tel:+3630-555-55-55, Fax:+3623-555-555","megjegyzes":"A port\u00e1r\u00f3l felsz\u00f3lni a 214-es mell\u00e9kre."},"tetelek":[{"megnevezes":"Elado iz\u00e9","mennyiseg":"1.0","mennyisegiEgyseg":"db","nettoEgysegar":"10000","afakulcs":"25","nettoErtek":"10000.0","afaErtek":"2500.0","bruttoErtek":"12500.0","megjegyzes":"t\u00e9tel megjegyz\u00e9s 1"},{"megnevezes":"Elado iz\u00e9 2.","mennyiseg":"2.0","mennyisegiEgyseg":"db","nettoEgysegar":"10000","afakulcs":"25","nettoErtek":"20000.0","afaErtek":"5000.0","bruttoErtek":"25000.0","megjegyzes":"t\u00e9tel megjegyz\u00e9s 2"}]}}<br />
		<br />
		Response data (JSON format):<br />
		<br />
		Data<br />
		ResultCode<br />
		ResultMessage<br />
		<br />
