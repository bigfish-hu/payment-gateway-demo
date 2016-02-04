<!DOCTYPE html>
<html>
<head lang="hu">
	<title>BIG FISH Payment Gateway - Demo  (<?=$this->controller->action;?>)</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="/assets/css/demo.css" rel="stylesheet" type="text/css" />
	<script src="/assets/js/demo.js" type="text/javascript"></script>
</head>
<body>
	<div>
		<?
		echo '<h1>' . self::$header[$this->controller->action] . '</h1>';
		
		if (!empty($this->controller->result)) {
			var_dump($this->controller->result);
		} else {
			require_once(PROJECT_PATH . DS . 'views' . DS . $this->include);
		}
		?>
	</div>
</body>
</html>