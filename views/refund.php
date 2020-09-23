<form name="refundForm" action="/controllers/?action=refund" method="post" target="_blank">
	<div class="row">
		<label class="col-2">
			<span>Transaction ID *:</span>
			<input type="text" name="TransactionId" value="">
		</label>
		<label class="col-2">
			<span>Amount * (in origin currency):</span>
			<input type="text" name="amount" value="">
		</label>
	</div>

	<label class="label-chkbox">
		<span>Check to use extra data: <input type="checkbox" name="useExtra" value="1" class="input"><span class="chkbox"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-check"></use></svg></span></span>
	</label>

	<label>
		<span>Extra data:</span>
		<textarea name="extra" class="input">
{
	"bankAccount": {
		"iban": "NL53INGB0654422370",
		"bic": "INGBNL2A"
	}
}
		</textarea>
	</label>
	<input type="submit" name="submit" value="Next">
</form>
