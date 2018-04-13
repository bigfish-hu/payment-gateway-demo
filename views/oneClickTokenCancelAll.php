<form name="oneClickTokenCancelAllForm" action="/controllers/?action=oneClickTokenCancelAll" method="post" target="_blank">
	<label>
		<span>Provider *:</span>
	</label>
	<ul>
		<li><label><input type="radio" name="providerName" value="Borgun2"><span><span></span></span>Borgun RPG</label></li>
		<li><label><input type="radio" name="providerName" value="OTPSimple"><span><span></span></span>OTP Simple</label></li>
		<li><label><input type="radio" name="providerName" value="Virpay"><span><span></span></span>VirPAY</label></li>
	</ul>
	<label>
		<span>Registered user ID *:</span>
		<input type="text" name="userId" value="">
	</label>
	<input type="submit" name="submit" value="Next">
</form>
