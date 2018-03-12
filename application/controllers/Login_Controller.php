<?php
/**
 * Created by PhpStorm.
 * User: Alvaro
 * Date: 12/03/2018
 * Time: 11:16
 */

class Login_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {
        if (isset($_POST['password'])) {
            $this->load->model('login_model');
            if ($this->login_model->login($_POST['user_name'], $_POST['password'])) {
                redirect('index_controller');

            }


        }
        $this->load->view('login');
    }

    public function login()
    {
        if (isset($_POST['password'])) {
            $this->load->model('login_model');
            if ($this->login_model->login($_POST['user_name'], $_POST['password'])) {
                redirect('index_controller');
            } else {
                redirect('login_controller');
            }


        }
        $this->load->view('login');
    }
        function logout()
        {

        }


    }