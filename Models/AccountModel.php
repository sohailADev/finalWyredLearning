<?php




class AccountModel
	{
	 private $db;
	 public function __construct()
    {
        $this->db = new Database();
    }

    public function findUserByEmail($email)
    {
       return $this->db->userExistDB($email);
    }
    //register user
    public function createUser($data)
    {

     return $this->db->createUserDB($data);


    }
    public function userLogin($email,$password)
    {

        return $this->db->userLoginDB($email,$password);
    }


	}