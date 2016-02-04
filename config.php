<?php

define('PROJECT_PATH', realpath(dirname(__FILE__)));
define('DS', DIRECTORY_SEPARATOR);

/**
 * Autoload
 */
$vendorAutoload = PROJECT_PATH . DS . 'vendor' . DS . 'autoload.php';
$sdkAutoload = PROJECT_PATH . DS . 'vendor' . DS . 'bigfish' . DS . 'paymentgateway' . DS . 'src' . DS . 'BigFish' . DS . 'PaymentGateway' . DS . 'Autoload.php';

if (!is_file($sdkAutoload)) {
	echo 'A BIG FISH Payment Gateway - PHP SDK modul nincs telepítve.';
	exit;
}

if (is_file($vendorAutoload)) {
	require_once($vendorAutoload);
} else {
	require_once($sdkAutoload);
	BigFish\PaymentGateway\Autoload::register();
}

require_once(PROJECT_PATH . DS . 'demo.php');
require_once(PROJECT_PATH . DS . 'controllers' . DS . 'controller.php');
require_once(PROJECT_PATH . DS . 'views' . DS . 'view.php');

$config = array(
	'storeName' => 'sdk_test',
	'apiKey' => '86af3-80e4f-f8228-9498f-910ad',
	'testMode' => true,
);

switch ($_POST['providerName']) {
	case 'OTP2':
		$config['encryptPublicKey'] = '-----BEGIN PUBLIC KEY-----
MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCpRN6hb8pQaDen9Qjt18P2FqSc
F2uhjKfd0DZ1t0HWtvYMmJGfM6+wgjQGDHHc4LAcLIHF1TQVLCYdbyLzsOTRUhi4
UFsW18IBznoEAx2wxiTCyzxtONpIkr5HD2E273UbXvVKA2hig2BgpOA2Poil9xtO
XIm63iVw6gjP2qDnNwIDAQAB
-----END PUBLIC KEY-----';
		break;
	case 'MKBSZEP':
		$config['encryptPublicKey'] = '-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA0tDZrRNNcde2H0Si9Q0J
V7UnAPeWmWrj/RXHSB8vkNOWbC9Df3+mDVNXTN4xPsCh6H/HWIX6fKiWIDy6uerl
wSgbXKdmqFW42bFkzd/6W1kcqJibDmqmQbCQjLCVp35GcIhcQHAYcq359CBIS0RR
ZiWxhCWEGhjHqcjX9qKK/ApOmkc0wr82mUVcr1g3zkW5LFu2vKSalrLlaV064FlF
kVE+dwhO5Q78b/IcaVavIghSjkd76+l5SS5tcHk4/J5/KKayjcYpzxwSLzU+OOQ7
3SHB3aShQtzIWhdMbx2YuyB38hORUK/lAqqHp0lCgWA4x1y1WRB87lSva/uQDEWu
rwIDAQAB
-----END PUBLIC KEY-----';
		break;
}

Demo::setConfig($config);
