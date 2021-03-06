<form name="startOcpForm" action="/controllers/?action=start" method="post" target="_blank">
	<table class="table-test-data">
		<tbody>
			<tr><td>Provider:</td><td><?=$_POST['providerName'];?><input type="hidden" name="providerName" value="<?=$_POST['providerName'];?>" /></td></tr>
			<tr><td>One Click Payment:</td><td>enabled<input type="hidden" name="oneClickPayment" value="1" /></td></tr>
			<tr><td>Registered user ID:</td><td><?=$_POST['userId'];?><input type="hidden" name="userId" value="<?=$_POST['userId'];?>" /></td></tr>
		</tbody>
	</table>
	
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
			<span>Order ID *:</span>
			<input type="text" name="orderId" value="">
		</label>
		
		<label class="col-2">
			<span>Registered card *:</span>
			<select name="cardReferenceId">
				<? foreach ($this->controller->data as $data) { ?>
					<option value="<?=$data->card_reference_id;?>"><?=$data->currency;?><?=(!empty($data->payment_method) ? ', ' . $data->payment_method : '')?>: <?=strlen($data->card_pan) == 4 ? '**** **** **** ' : '';?><?=$data->card_pan;?> (<?=$data->card_type;?>)</option>
				<? } ?>
			</select>
		</label>
	</div>

	<label>
		<span>Authorization:</span>
		<select name="autoCommit">
			<option value="true">Immediate</option>
			<option value="false">Later</option>
		</select>
	</label>

	<label class="col-full">
		<span>Check to use info data: <input type="checkbox" name="useInfo" value="1" class="input All"><span class="chkbox"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-check"></use></svg></span></span>
	</label>
	<label>
		<span>Info data:</span>
		<textarea name="infoData" class="input All"><?php print_r(json_encode(Demo::getGeneratedInfoObject()->getData(), JSON_PRETTY_PRINT)); ?></textarea>
	</label>

	<input type="submit" name="submit" value="Next">
</form>
