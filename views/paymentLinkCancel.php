<form name="paymentLinkCancelForm" action="/controllers/?action=<?=$this->controller->action;?>" method="post" target="_blank">
	<input type="hidden" name="action" value="paymentLinkCancel">
	<label>
		<span>Payment link name * :</span>
		<input type="text" name="PaymentLinkName" value="">
	</label>
	<input type="submit" name="submit" value="Next">
</form>
