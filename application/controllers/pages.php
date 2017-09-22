<?php
/**
 * Created by PhpStorm.
 * User: sayho
 * Date: 2017-09-22
 * Time: 오후 1:19
 */
?>


<?
    class Pages extends CI_Controller{

        public function view($page = 'home'){
            if(!file_exists(APPPATH."views/pages/".$page.".php"))
                show_404();

            $data['title'] = ucfirst($page); // Capitalize the first letter

            $this->load->view('templates/header', $data);
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer', $data);
        }

    }
?>
