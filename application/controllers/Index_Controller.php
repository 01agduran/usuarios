<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index_Controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('menu_model');
	}

	public function index()
	{
		$menu['menu']=$this->menu_model->listarMenu();
		$menu['categoria']=$this->menu_model->listarCategorias();
		$this->load->view('index',$menu);


	}

	public function listarMenu()
	{
		$cate['cat']=$this->menu_model->listarCategorias();
	}

}
