<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
 * |==============================================================|
 * | Please DO NOT modify this information :                      |
 * |--------------------------------------------------------------|
 * | Author          : Susantokun
 * | Email           : admin@susantokun.com
 * | Filename        : Auth_model.php
 * | Instagram       : @susantokun
 * | Blog            : http://www.susantokun.com
 * | Info            : http://info.susantokun.com
 * | Demo            : http://demo.susantokun.com
 * | Youtube         : http://youtube.com/susantokun
 * | File Created    : Thursday, 12th March 2020 8:31:02 am
 * | Last Modified   : Thursday, 12th March 2020 8:39:31 am
 * |==============================================================|
 */

class Auth_model extends CI_Model
{
    public $table       = 'admin';
    public $id          = 'admin.id';

    public function __construct()
    {
        parent::__construct();
    }

    public function reg()
    {
      date_default_timezone_set('ASIA/JAKARTA');
      $data = array(
        'username' => $this->input->post('username'),
        'email' => $this->input->post('email'),
        'password' => $this->input->post('password')
      );
      return $this->db->insert($this->table, $data);
    }
}
