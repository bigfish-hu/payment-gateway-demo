<form name="closeForm" action="/controllers/?action=close" method="post" target="_blank">
	<label class="col-2">
		<span>Transaction ID * :</span>
		<input type="text" name="TransactionId" value="">
	</label>
	<label class="col-2">
		<span>Approve:</span>
		<select name="Approved">
			<option value="true">Allow</option>
			<option value="false">Revoke</option>
		</select>
	</label>
	<input type="submit" name="submit" value="Next">
</form>
