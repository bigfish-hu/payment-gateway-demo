<form name="startRPForm" action="/controllers/?action=startRP" method="post" target="_blank">
	<label>
		<span>Reference transaction ID * :</span>
		<input type="text" name="referenceTransactionId" value="">
	</label>

	<label>
		<span>Response URL * :</span>
		<input class="full-width" type="url" name="responseUrl" value="<?=$this->responseUrl;?>">
	</label>

	<div class="row">
		<label class="col-2">
			<span>Amount :</span>
			<input type="text" name="amount" value="">
		</label>

		<label class="col-2">
			<span>Currency :</span>
			<select name="currency">
				<option value="HUF">HUF</option>
				<option value="EUR">EUR</option>
				<option value="USD">USD</option>
			</select>
		</label>
	</div>

	<div class="row">
		<label class="col-2">
			<span>Order ID :</span>
			<input type="text" name="orderId" value="">
		</label>

		<label class="col-2">
			<span>User ID :</span>
			<input type="text" name="userId" value="">
		</label>
	</div>

	<label class="label-chkbox">
		<span>Check to use info data: <input type="checkbox" name="useInfo" value="1" class="input All"><span class="chkbox"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-check"></use></svg></span></span>
	</label>
	<label>
		<span>Info data:</span>
		<textarea name="infoData" class="input All"><?php print_r(json_encode(Demo::getGeneratedInfoObject()->getData(), JSON_PRETTY_PRINT)); ?></textarea>
	</label>

	<input type="submit" name="submit" value="Next">
</form>
