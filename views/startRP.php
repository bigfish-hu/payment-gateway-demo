<form name="startRPForm" action="/controllers/?action=startRP" method="post" target="_blank">
	<label>Reference transaction ID * :</label>
	<input type="text" name="referenceTransactionId" value="" size="40" />
	<label>Response URL * :</label>
	<input type="text" name="responseUrl" value="<?=$this->responseUrl;?>" size="80" />
	<label>Amount * :</label>
	<input type="text" name="amount" value="" />
	<select name="currency" size="1">
		<option value="HUF">HUF</option>
		<option value="EUR">EUR</option>
		<option value="USD">USD</option>
	</select>
	<label>Order ID:</label>
	<input type="text" name="orderId" value="" />
	<label>User ID:</label>
	<input type="text" name="userId" value="" />
	<br /><br />
	<input type="submit" name="submit" value="Next" />
</form>
