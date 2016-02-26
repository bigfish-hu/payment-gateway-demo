<div class="nav">
	<h2>Functions</h2>
	<ul>
		<li><div><a class="<?=($_GET['action'] == 'start' ? 'li-active' : '');?>" href="/">Start transaction (init, start)</a></div></li>
		<li><div><a class="<?=($_GET['action'] == 'result' ? 'li-active' : '');?>" href="/views/?action=result">Get result (result)</a></div></li>
		<li><div><a class="<?=($_GET['action'] == 'close' ? 'li-active' : '');?>" href="/views/?action=close">Allow/Revoke two-step transaction (close)</a></div></li>
		<li><div><a class="<?=($_GET['action'] == 'details' ? 'li-active' : '');?>" href="/views/?action=details">Get details (details)</a></div></li>
		<li><div><a class="<?=($_GET['action'] == 'refund' ? 'li-active' : '');?>" href="/views/?action=refund">Refund (refund)</a></div></li>
		<li><div><a class="<?=($_GET['action'] == 'selectOcp' ? 'li-active' : '');?>" href="/views/?action=selectOcp">One Click Payment (without any intermediate page)</a></div></li>
		<li><div><a class="<?=($_GET['action'] == 'startRP' ? 'li-active' : '');?>" href="/views/?action=startRP">Start recurring payment (initRP, startRP)</a></div></li>
		<li><div><a class="<?=($_GET['action'] == 'invoice' ? 'li-active' : '');?>" href="/views/?action=invoice">Invoice (invoice)</a></div></li>
	</ul>
</div><!-- /.nav -->
