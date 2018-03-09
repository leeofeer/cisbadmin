<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 */
class Pages extends CI_Controller {


  public function index(){
    $this->load->view('login');
  }

  public function dashboard(){
    $this->template->display('pages/dashboard');
  }

  public function table(){
    $this->template->display('pages/table');
  }

  public function registration(){
    $this->template->display('pages/registration');
  }
}
