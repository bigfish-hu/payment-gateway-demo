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
		'welcome' => 'BIG FISH Payment Gateway - Demo',
		'start' => 'Start transaction (init, start)',
		'result' => 'Get result (result)',
		'close' => 'Allow/Revoke two-step transaction (close)',
		'details' => 'Get details (details)',
		'refund' => 'Refund (refund)',
		'selectOcp' => 'One Click Payment (without any intermediate page)',
		'startOcp' => 'One Click Payment (without any intermediate page)',
		'startRP' => 'Start recurring payment (initRP, startRP)',
		'invoice' => 'Invoice (invoice)',
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
		$this->include = $this->controller->action . '.html';
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
	 * Start
	 *
	 * @return void
	 * @access protected
	 */
	protected function start()
	{
		$this->setPhpInclude();
	}
	
	/**
	 * StartOCP
	 *
	 * @return void
	 * @access protected
	 */
	protected function startOcp()
	{
		$this->setPhpInclude();
	}
	
	/**
	 * StartRP
	 *
	 * @return void
	 * @access protected
	 */
	protected function startRP()
	{
		$this->setPhpInclude();
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
			$this->setPhpInclude();
			require_once(PROJECT_PATH . DS . 'views' . DS . $this->include);
		}	
	}
	
	/**
	 * SetPhpInclude
	 *
	 * @return void
	 * @access protected
	 */
	protected function setPhpInclude()
	{
		$this->include = $this->controller->action . '.php';
	}
}
