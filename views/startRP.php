<form name="startRPForm" action="/controllers/?action=startRP" method="post" target="_blank">
	<label class="col-2">
        <span>Reference transaction ID * :</span>
        <input type="text" name="referenceTransactionId" value="">
    </label>

	<label class="col-2">
        <span>Response URL * :</span>
        <input type="url" name="responseUrl" value="<?=$this->responseUrl;?>">
    </label>

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
        </select>
    </label>

	<label class="col-2">
        <span>Order ID:</span>
        <input type="text" name="orderId" value="">
    </label>

	<label class="col-2">
        <span>User ID:</span>
        <input type="text" name="userId" value="">
    </label>
	<input type="submit" name="submit" value="Next">
</form>
