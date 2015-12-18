<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Logged_tagihan extends MX_Controller {

    function __construct(){
        $this->logged = new Logged();
    }
 
    public function index()
    {	

        !isset($_GET['action']) ? $_GET['action'] = 'manage' : false;

            switch ($_GET['action']) {
            case 'manage':
                $this->logged->main(NULL,'logged_tagihan/section_tagihan');
            break;
            default:
                $this->logged->main(NULL,'logged_tagihan/section_tagihan');
            break;
        }
    }

}