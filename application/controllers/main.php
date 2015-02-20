<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

    protected $data = array();

    protected function is_post(){

        return ($_SERVER['REQUEST_METHOD'] == "POST") ? true : false;

    }


    public function index(){

        if($this->is_post()){

            $files = $this->input->post('phototemplates');
            $email = $this->input->post('email');

            if(is_array($files)){

                $real_url = null;
                foreach($files as $file){
                    $real_url[] = base_url().'img/stickers/'.$file;
                }

                $theme = "Поступил заказ";
                $text = "Получен заказ на изображения:<br />";

                foreach($real_url as $file){
                    $text .= $file.'<br />';
                }



            }


        }

        $this->load->view('main/index');


    }



}