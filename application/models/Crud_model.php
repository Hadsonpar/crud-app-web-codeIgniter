<?php

class Crud_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

    public function create($first,$last,$email,$gender,$age){
        $query = $this->db->query("insert into employee (first_name,last_name,gender,age,email_id) 
                                    values('$first','$last','$gender','$age','$email')");
            if($query){
                return "success";
            }else{
                return "failed";
            }
    }

    public function read(){ 
        $query = $this->db->query("SELECT case e.gender 
                                    WHEN 'm' THEN 'Masculino' 
                                    WHEN 'f' THEN 'Femenino' 
                                    END as gend, e.* FROM employee e;");
        return $query;
    }

    public function get_record_byID($id){
        $query = $this->db->query("select * from employee where id='$id'");
        return $query->row();
    }

    public function update($first,$last,$email,$gender,$age,$id){
		$query = $this->db->query("UPDATE `employee` SET first_name='$first', last_name='$last',
                                            email_id='$email', gender='$gender', age=$age WHERE id=$id");
	
		if($query){
			return "success";
		}else{
			return "failed";
		}
	}
    
    public function delete($id){
        $query = $this->db->query("delete from employee where id ='$id'");
        if($query){
            return "success";
        }else{
            return "failed";
        }
    }

}