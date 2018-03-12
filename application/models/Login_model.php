<?php
/**
 * Created by PhpStorm.
 * User: Alvaro
 * Date: 12/03/2018
 * Time: 16:11
 */

class Login_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function login($user_name, $password)
    {
        $this->db->where('nombre_usuario', $user_name);
        $this->db->where('contrasenia', $password);
        $sql = $this->db->get('adm_usuario');

        if ($sql->num_rows() > 0) {
            return true;

        } else {
            return false;
        }

    }



}