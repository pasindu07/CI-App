<?php

class Reg_Assign extends CI_Controller{

    public function __construct(){
        parent::__construct();

        //$this->load->database();//? this one is not needed as it is autoloaded
        // s
        $this->load->helper(array('form'));
        $this->load->library(array('form_validation'));
         $this->load->model('Reg_Model_Assign');
    }

    public function submitdata(){

        // $this->load->view('user_reg');

        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('age','Age','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('mobile','Mobile','required');

        if($this->form_validation->run() == FALSE){
            $this->load->view('user_reg');
        }
        // else{
        //     $this->load->view('success');
        // }
    else{
        if($this->input->post('save')){
            $name = $this->input->post('name');
            $age = $this->input->post('age');
            $email = $this->input->post('email');
            $mobile = $this->input->post('mobile');
            $this->Reg_Model_Assign->savedet($name,$age,$email,$mobile);
            echo "<script type='text/javascript'>
            alert('Record Added Successfully!');
            window.location = 'http://localhost/ci/assignment/reg_assign/submitdata';
            </script>";
            // redirect('reg_assign/submitdata');
        }
        }
    }

    public function displaydata(){
        $result['data'] = $this->Reg_Model_Assign->displayUsers();
        $this->load->view('display_users',$result);
    }

    public function deletedata(){
        $id = $this->input->get('id');
        $this->Reg_Model_Assign->deleteUsers($id);
        redirect("Reg_Assign/displaydata");
    }

    // public function deletedata(){
    //     $id = $this->input->get('id');
    //     $this->Reg_Model->deleteUsers($id); 
    //     redirect("Reg_Assign/displaydata");
    // }

    public function updatedata(){
        $id = $this->input->get('id');
        $result['data']= $this->Reg_Model_Assign->displayuserbyid($id);
        $this->load->view('update_users',$result);

        if($this->input->post('update')){
            $id = $this->input->get('id');
            $name = $this->input->post('name');
            $age = $this->input->post('age');
            $email = $this->input->post('email');
            $mobile = $this->input->post('mobile');
            $this->Reg_Model_Assign->updateUsers($id,$name,$age,$email,$mobile);
            echo "<script>
            alert('Records updated successfully');
            window.location = 'http://localhost/ci/assignment/Reg_Assign/displaydata';
            </script>";
            // echo "Records updated successfully";
            //test
            // redirect('Reg_Assign/displaydata');
        }
 
    }


}

?>