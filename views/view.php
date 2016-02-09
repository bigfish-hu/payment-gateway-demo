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
		'start' => 'Tranzakció indítása (init, start)',
		'result' => 'Eredmény lekérdezése (result)',
		'close' => '2 lépcsős tranzakció engedélyezése/elutasítása (close)',
		'details' => 'Részletes adatok lekérdezése (details)',
		'refund' => 'Visszatérítés (refund)',
		'selectOcp' => 'One Click Payment indítása (köztes oldal nélkül)',
		'startOcp' => 'One Click Payment indítása (köztes oldal nélkül)',
		'startRP' => 'Ismétlődő fizetés indítása (initRP, startRP)',
		'invoice' => 'Számlázás (invoice)',
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
