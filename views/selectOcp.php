<form name="selectOcpForm" action="/controllers/?action=selectOcp" method="post" target="_blank">
	<label>
		<span>Provider * :</span>
	</label>
	<ul>
		<li><label><input type="radio" name="providerName" value="Barion2"><span><span></span></span>Barion</label></li>
		<li><label><input type="radio" name="providerName" value="Escalion"><span><span></span></span>Escalion</label></li>
		<li><label><input type="radio" name="providerName" value="OTPSimple"><span><span></span></span>OTP Simple</label></li>
		<li><label><input type="radio" name="providerName" value="Saferpay"><span><span></span></span>Saferpay</label></li>
	</ul>
	<label>
		<span>Registered user ID * :</span>
		<input type="text" name="userId" value="">
	</label>
	<input type="submit" name="submit" value="Next">
</form>
