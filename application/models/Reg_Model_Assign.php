<?php

class Reg_Model_Assign extends CI_Model{

    public function savedet($name,$age,$email,$mobile){
        $query = "insert into userdetails values ('','$name','$age','$email','$mobile')";
        $this->db->query($query);
    }

    public function displayUsers(){
        $query = $this->db->query("select * from userdetails");
        return $query->result();
    }

    public function deleteUsers($id){
        $this->db->query("delete from userdetails where id= $id");
    }

    public function updateUsers($id,$name,$age,$email,$mobile){
        $this->db->query("update userdetails set name='$name',age='$age',email='$email',phone='$mobile' where id='$id'");
    }

    public function displayuserbyid($id){
        $query = $this->db->query("select * from userdetails where id='$id'");
        return $query->result();
    }
}


?>