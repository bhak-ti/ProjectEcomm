<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php
class Overview extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->simple_login->cek_login();
    }
    public function index()
    {
        // load view admin/overview.php
        $this->load->view("overview");
    }
}
