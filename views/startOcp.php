<form name="startOcpForm" action="/controllers/?action=start" method="post" target="_blank">
	<label>Fizetési mód: <?=$_POST['providerName'];?></label>
	<input type="hidden" name="providerName" value="<?=$_POST['providerName'];?>" />
	<label>One Click Payment fizetés: bekapcsolva</label>
	<input type="hidden" name="oneClickPayment" value="1" />
	<label>Korábban regisztrált felhasználó azonosító: <?=$_POST['userId'];?></label>
	<input type="hidden" name="userId" value="<?=$_POST['userId'];?>" />
	<label>Válasz url * :</label>
	<input type="text" name="responseUrl" value="<?=$this->responseUrl;?>" size="80" />
	<label>Összeg * :</label>
	<input type="text" name="amount" value="" />
	<select name="currency" size="1">
		<option value="HUF">HUF</option>
		<option value="EUR">EUR</option>
		<option value="USD">USD</option>
	</select>
	<label>Rendelés azonosító:</label>
	<input type="text" name="orderId" value="" />
	<label>Regisztrált bankkártya * :</label>
	<select name="cardReferenceId" size="1">
	<? foreach ($this->controller->data as $data) { ?>
		<option value="<?=$data->card_reference_id;?>">****<?=$data->card_pan;?> (<?=$data->card_type;?>)</option>
	<? } ?>
	</select>
	<br /><br />
	<input type="submit" name="submit" value="Tovább" />
</form>
