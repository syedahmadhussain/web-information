<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

   public function __construct(){
      parent::__construct();

   }
   public function index()
   {
      $this->load->view('header');
      $this->load->view('list');
      $this->load->view('footer');
   }

   public function search()
   {
      $this->load->view('header');
      $this->load->view('list');
      $this->load->view('footer');
   }
}
