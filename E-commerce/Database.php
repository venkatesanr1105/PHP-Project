<?php
    include_once 'config.php';

    class Database
    {

        public function __construct()
        {
            $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        }

        public function checkEmail($email)
        {
            $sql = "select * from Account where Email = '".$email."'";
            $result = $this->connection->query($sql);
            return (mysqli_num_rows($result)==0)?1:0;
        }

        public function validateUser($email,$password)
        {
            $sql = "select * from Account where Email = '".$email."' and Password = '".$password."'";
            $result = $this->connection->query($sql);
            return mysqli_num_rows($result) == 0 ? 0:1;
        }

        public function insertUserDetails($params)
        {
                foreach($params as $key => $value){
                    $$key = $value;
                }
                $sql = "insert into Account (Firstname, Lastname, Email, Mobile, Password, Address, Pincode) values ('".$fname."','".$lname."','".$email."','".$mobile."','".$password."','".$address."','".$pincode."')";
                $this->connection->query($sql);
        }
    }