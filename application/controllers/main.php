<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

    protected $data = array();


    public function index(){

        $this->load->view('main/index');


    }



}