<?php

/**
 * Controller class
 */
class Controller
{
	/**
	 * action
	 * 
	 * @var string
	 * @access public
	 */
	public $action;

	/**
	 * result
	 * 
	 * @var string
	 * @access public
	 */	
	public $result;
	
	/**
	 * data
	 * 
	 * @var string
	 * @access public
	 */
	public $data;
	
	/**
	 * enabledActions
	 * 
	 * @var array
	 * @access public
	 * @static
	 */
	public static $enabledActions = array(
		'start',
		'result',
		'close',
		'details',
		'refund',
		'selectOcp',
		'startRP',
		'invoice',
	);

	/**
	 * Contructor
	 *
	 * @return void
	 * @access public
	 */
	public function __construct()
	{
		$this->setAction($_GET['action']);
	}
	
	/**
	 * Check action
	 *
	 * @return void
	 * @access protected
	 */
	protected function setAction($action)
	{
		if (in_array($action, self::$enabledActions)) {
			$this->action = $action;
		} else {
			$this->action = 'welcome';
			$this->result = 'Invalid "action" parameter';
		}
	}

	/**
	 * Call
	 *
	 * @return void
	 * @access public
	 */
	public function call()
	{
		if (!empty($this->action)) {
			if (method_exists(__CLASS__, $this->action)) {
				call_user_func(array($this, $this->action));
			}
		}
	}
	
	/**
	 * Start
	 *
	 * @return void
	 * @access protected
	 */
	protected function start()
	{
		$this->result = Demo::start($_POST);
	}

	/**
	 * Result
	 *
	 * @return void
	 * @access protected
	 */
	protected function result()
	{
		$this->result = Demo::result($_GET);
	}

	/**
	 * Close
	 *
	 * @return void
	 * @access protected
	 */
	protected function close()
	{
		$this->result = Demo::close($_POST);
	}

	/**
	 * Details
	 *
	 * @return void
	 * @access protected
	 */
	protected function details()
	{
		$this->result = Demo::details($_GET);
	}

	/**
	 * Refund
	 *
	 * @return void
	 * @access protected
	 */
	protected function refund()
	{
		$this->result = Demo::refund($_POST);
	}

	/**
	 * SelectOCP
	 *
	 * @return void
	 * @access protected
	 */
	protected function selectOcp()
	{
		$oneClickOptions = Demo::oneClickOptions($_POST);
		
		if (isset($oneClickOptions->Data) && is_array($oneClickOptions->Data)) {
			$this->action = 'startOcp';
			$this->data = $oneClickOptions->Data;
		} else {
			$this->result = $oneClickOptions;
		}
	}

	/**
	 * StartRP
	 *
	 * @return void
	 * @access protected
	 */
	protected function startRP()
	{
		$this->result = Demo::startRP($_POST);
	}

	/**
	 * Invoice
	 *
	 * @return void
	 * @access protected
	 */
	protected function invoice()
	{
		/**
		 * Convert string to array
		 * Only for testing!
		 */
		if (!empty($_POST['testData'])) {
			eval("\$_POST['data'] = ".$_POST['testData'].";");
		}

		$invoice = Demo::invoice($_POST);

		if ($invoice->ResultCode == 'OK') {
			$this->data = $invoice->Data;
		} else {
			$this->result = $invoice;
		}
	}
}
