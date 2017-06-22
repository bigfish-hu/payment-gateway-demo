<div class="nav">
	<h2>Functions</h2>
	<ul>
		<li><div><a class="<?=($_GET['action'] == 'start' ? 'li-active' : '');?>" href="/"><?=self::$header['start'];?></a></div></li>
		<li><div><a class="<?=($_GET['action'] == 'result' ? 'li-active' : '');?>" href="/views/?action=result"><?=self::$header['result'];?></a></div></li>
		<li><div><a class="<?=($_GET['action'] == 'close' ? 'li-active' : '');?>" href="/views/?action=close"><?=self::$header['close'];?></a></div></li>
		<li><div><a class="<?=($_GET['action'] == 'details' ? 'li-active' : '');?>" href="/views/?action=details"><?=self::$header['details'];?></a></div></li>
		<li><div><a class="<?=($_GET['action'] == 'refund' ? 'li-active' : '');?>" href="/views/?action=refund"><?=self::$header['refund'];?></a></div></li>
		<li><div><a class="<?=($_GET['action'] == 'selectOcp' ? 'li-active' : '');?>" href="/views/?action=selectOcp"><?=self::$header['selectOcp'];?></a></div></li>
		<li><div><a class="<?=($_GET['action'] == 'startRP' ? 'li-active' : '');?>" href="/views/?action=startRP"><?=self::$header['startRP'];?></a></div></li>
		<li><div><a class="<?=($_GET['action'] == 'invoice' ? 'li-active' : '');?>" href="/views/?action=invoice"><?=self::$header['invoice'];?></a></div></li>
		<li><div><a class="<?=($_GET['action'] == 'oneClickTokenCancel' ? 'li-active' : '');?>" href="/views/?action=oneClickTokenCancel"><?=self::$header['oneClickTokenCancel'];?></a></div></li>
		<li><div><a class="<?=($_GET['action'] == 'paymentLinkCreate' ? 'li-active' : '');?>" href="/views/?action=paymentLinkCreate"><?=self::$header['paymentLinkCreate'];?></a></div></li>
		<li><div><a class="<?=($_GET['action'] == 'paymentLinkDetails' ? 'li-active' : '');?>" href="/views/?action=paymentLinkDetails"><?=self::$header['paymentLinkDetails'];?></a></div></li>
		<li><div><a class="<?=($_GET['action'] == 'paymentLinkCancel' ? 'li-active' : '');?>" href="/views/?action=paymentLinkCancel"><?=self::$header['paymentLinkCancel'];?></a></div></li>
	</ul>
	<h2>Guides</h2>
	<ul>
		<li><div><a class="<?=($_GET['guide'] == 'featureMatrix' ? 'li-active' : '');?>" href="/views/?guide=featureMatrix"><?=self::$header['featureMatrix'];?></a></div></li>
	</ul>
</div><!-- /.nav -->
