<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once './'.APPPATH.'/libraries/libs/autoload.php';

class Smarttemplater extends Smarty{

    public function __construct(){
        parent::__construct();
        $this->setTemplateDir('./'.APPPATH.'/views/skins/');
        $this->setCompileDir('./'.APPPATH.'/views/compile/');
        $this->setCacheDir('./'.APPPATH.'/views/cache/');

    }

} 