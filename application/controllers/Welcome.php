<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/
	 * 	- or -
	 * 		http://example.com/welcome/index
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$userrole = $this->session->userdata('userrole');
		if ($userrole != 'admin' && $userrole != 'user') {
			$this->data['pagebody'] = 'notauthorized';
			$this->data['pagetitle'] = 'Access Denied';
			$message = 'You are not authorized to access this page.';
			$this->data['content'] = $message;

			$this->render();
			return;
		}

		$this->data['pagebody'] = 'homepage';
		$this->data['pagetitle'] = 'JappaDog';
		$this->data['subtitle'] = 'Sales #';

		// This will be replaced with transaction model in assignment 2.
		$receivingCosts = $this->receivingOrders->getTotalCosts();
		$this->data['InventoryCost'] = number_format((float)$receivingCosts, 2, '.', '');
		$this->data['Revenue'] = '200,000';
		$this->data['SalesCost'] = '50,000';
		$this->render();
	}

}
