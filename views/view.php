<?

/**
 * View class
 */
class View
{
	/**
	 * controller
	 * 
	 * @var object
	 * @access protected
	 */
	protected $controller;

	/**
	 * include
	 * 
	 * @var string
	 * @access protected
	 */
	protected $include;
	
	/**
	 * header
	 * 
	 * @var array
	 * @access public
	 * @static
	 */
	public static $header = array(
		'start' => 'Start transaction (init, start)',
		'result' => 'Get result (result)',
		'close' => 'Allow/Revoke two-step transaction (close)',
		'details' => 'Get details (details)',
		'refund' => 'Refund (refund)',
		'selectOcp' => 'One Click Payment (without any intermediate page)',
		'startOcp' => 'One Click Payment (without any intermediate page)',
		'startRP' => 'Start recurring payment (initRP, startRP)',
		'invoice' => 'Invoice (invoice)',
		'oneClickTokenCancel' => 'Cancel One Click Token (oneClickTokenCancel)',
		'oneClickTokenCancelAll' => 'Cancel all One Click Token (oneClickTokenCancelAll)',
		'featureMatrix' => 'Feature matrix',
		'paymentLinkCreate' => 'Create payment link (paymentLinkCreate)',
		'paymentLinkDetails' => 'Get payment link details (paymentLinkDetails)',
		'paymentLinkCancel' => 'Cancel payment link (paymentLinkCancel)',
	);

	/**
	 * Docs
	 * 
	 * @var array
	 * @access public
	 * @static
	 */
	public static $docs = array(
		'start' => '#functions-initialising-transactions',
		'result' => '#functions-querying-transaction-results',
		'close' => '#functions-closing-the-pre-authorised-transactions',
		'details' => '#functions-querying-transaction-details',
		'refund' => '#functions-refunding-transaction-amounts',
		'selectOcp' => '#functions-querying-the-details-of-registered-bank-cards',
		'startOcp' => '#functions-creating-a-transaction-using-a-registered-bank-card-initialising-a-transaction-using-the-service-providers-reference-transaction',
		'startRP' => '#functions-creating-a-transaction-using-a-registered-bank-card-initialising-a-transaction-using-the-big-fish-payment-gateway-reference-transaction',
		'invoice' => '#functions-invoicing-paybill',
		'oneClickTokenCancel' => '#functions-cancelling-a-bank-card-registration',
		'oneClickTokenCancelAll' => '#functions-cancelling-all-bank-card-registrations',
		'paymentLinkCreate' => '#functions-payment-link-paylink-creating-a-payment-link',
		'paymentLinkDetails' => '#functions-payment-link-paylink-querying-payment-link-details',
		'paymentLinkCancel' => '#functions-payment-link-paylink-cancelling-a-payment-link',
	);
	
	/**
	 * Saferpay payment methods
	 * 
	 * @var array
	 * @access public
	 * @static
	 */
	public static $saferpayPaymentMethods = array(
		'AMEX' => 'AMEX',
		'DIRECTDEBIT' => 'DIRECTDEBIT',
		'INVOICE' => 'INVOICE',
		'BONUS' => 'BONUS',
		'DINERS' => 'DINERS',
		'EPRZELEWY' => 'EPRZELEWY',
		'EPS' => 'EPS',
		'GIROPAY' => 'GIROPAY',
		'IDEAL' => 'IDEAL',
		'JCB' => 'JCB',
		'MAESTRO' => 'MAESTRO',
		'MASTERCARD' => 'MASTERCARD',
		'MYONE' => 'MYONE',
		'PAYPAL' => 'PAYPAL',
		'POSTCARD' => 'POSTCARD',
		'POSTFINANCE' => 'POSTFINANCE',
		'SAFERPAYTEST' => 'SAFERPAYTEST',
		'SOFORT' => 'SOFORT',
		'VISA' => 'VISA',
		'VPAY' => 'VPAY',
	);

	/**
	 * Saferpay wallets
	 * 
	 * @var array
	 * @access public
	 * @static
	 */
	public static $saferpayWallets = array(
		'MASTERPASS' => 'MASTERPASS',
	);

	/**
	 * Wirecard payment types
	 * 
	 * @var array
	 * @access public
	 * @static
	 */
	public static $wirecardPaymentTypes = array(
		'SELECT' => 'Select it on Wirecard side',
		'BANCONTACT_MISTERCASH' => 'Bancontact/Mister Cash',
		'CCARD' => 'Credit Card, Maestro SecureCode',
		'CCARD-MOTO' => 'Credit Card - Mail Order and Telephone Order',
		'EKONTO' => 'eKonto',
		'EPAY_BG' => 'ePay.bg',
		'EPS' => 'eps Online-wire',
		'GIROPAY' => 'giropay',
		'IDL' => 'iDEAL',
		'MONETA' => 'moneta.ru',
		'MPASS' => 'mpass',
		'PRZELEWY24' => 'Przelewy24',
		'PAYPAL' => 'PayPal',
		'PBX' => 'paybox',
		'POLI' => 'POLi',
		'PSC' => 'paysafecard',
		'QUICK' => '@Quick',
		'SEPA-DD' => 'SEPA Direct Debit',
		'SKRILLDIRECT' => 'Skrill Direct',
		'SKRILLWALLET' => 'Skrill Digital Wallet',
		'SOFORTUEBERWEISUNG' => 'SOFORT Banking',
		'TATRAPAY' => 'TatraPay',
		'TRUSTLY' => 'Trustly',
		'TRUSTPAY' => 'TrustPay',
		'VOUCHER' => 'My Voucher',
	);

	/**
	 * Contructor
	 *
	 * @param object $controller
	 * @return void
	 * @access public
	 */
	public function __construct(Controller $controller)
	{
		$this->controller = $controller;
		$this->include = ($this->controller->action == 'paymentLinkCreate' ? 'start' : $this->controller->action) . '.php';
		$this->responseUrl = (($_SERVER['HTTPS'] == 'on') ? 'https' : 'http') . '://' . $_SERVER["HTTP_HOST"] . '/response.php';
		$this->call();
	}
	
	/**
	 * Call
	 *
	 * @return void
	 * @access protected
	 */
	protected function call()
	{
		if (!empty($this->controller->action)) {
			if (method_exists(__CLASS__, $this->controller->action)) {
				call_user_func(array($this, $this->controller->action));
			}
			
			$this->output();
		}
	}
	
	/**
	 * Output
	 *
	 * @return void
	 * @access protected
	 */
	protected function output()
	{
		require_once(PROJECT_PATH . DS . 'views' . DS . 'frame.php');
	}

	/**
	 * Invoice
	 *
	 * @return void
	 * @access protected
	 */
	protected function invoice()
	{
		if (!empty($this->controller->data)) {
			$this->include = 'get' . ucfirst($this->controller->action) . '.php';
			require_once(PROJECT_PATH . DS . 'views' . DS . $this->include);
		}	
	}
}
