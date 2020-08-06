<?php

class Upload extends CI_Controller{

    public function index(){

        $this->load->view('img_upload');

    }

    public function upload_file(){

        $config['allowed_types'] = 'jpg|png';
        $config['upload_path'] = './uploads/';
        $this->upload->initialize($config);

        if($this->upload->do_upload('image')){
            echo "<script>
            alert('Image Added Successfully');
            window.location = 'http://localhost/ci/assignment/Upload';
            </script>";
        }else{
            print_r($this->upload->display_errors());
        }
        
    }


}



?>
