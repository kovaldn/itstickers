<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

    protected $data = array();

    protected function is_post(){

        return ($_SERVER['REQUEST_METHOD'] == "POST") ? true : false;

    }


    public function index(){

        if($this->is_post()){

            $files = $this->input->post('phototemplates');

            if(is_array($files)){

                $this->load->library('zip');

                $name = 'photo.jpg';
                $data = base_url().'img/stickers/sticker1.jpg';
                $this->zip->add_data($name, $data);
                $this->zip->download('my_backup.zip');

            }

        }

        $this->load->view('main/index');


    }



}