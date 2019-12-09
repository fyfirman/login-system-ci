<?php

include 'ShiftChiper.php';

class User_model extends CI_Model{
    function register($data){
        $username = $data['username'];
        $shiftchiper = new ShiftChiper;
        $password = $data['password'];
        $password = $shiftchiper->encrypt(md5($password));

        $email = $data['email'];
        
        $query = $this->db->query("INSERT INTO user(nama_user,password,email) VALUES ('$username','$password','$email')");
        
        return $query;
    }
    
    function check_login($username, $password){
        $shiftchiper = new ShiftChiper;
        var_dump($password);
        $password = $shiftchiper->encrypt(md5($password));
        var_dump($password);
        $data = $this->db->query("SELECT * FROM user WHERE nama_user='{$username}' AND password='{$password}'");
        echo "<pre>";
        var_dump($data);
        echo "</pre>";
        if($data->num_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
}

?>