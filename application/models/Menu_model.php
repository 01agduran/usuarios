<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Alvaro
 * Date: 22/1/2018
 * Time: 03:55
 */
class Menu_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }


    function listarMenu()
    {
        return $this->db->query('
                                select men.*,count(cat.idMenu)as nro
                                from  adm_menu men
                                LEFT JOIN adm_categoria cat on men.idMenu=cat.idMenu
                                where men.estado=1 
                                GROUP BY men.idMenu ORDER BY men.idMenu ASC ')->result_array();
    }

    function listarCategorias()
    {
        return $this->db->query('select cat.*
        from adm_menu men
        INNER JOIN adm_categoria cat on men.idMenu=cat.idMenu
        where men.estado=1 and cat.estado=1')->result_array();
    }
}