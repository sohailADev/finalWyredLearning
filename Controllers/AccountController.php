<?php


class AccountController extends BaseController
{
	public function __construct()
	{
		$this->accountModel = $this->model('AccountModel');
	}



	public function userLogin()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$data = [
					'email' => '',
					'password' => '',
					'emailError' =>'',
					'passwordError' => '',
	                ];
			$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
			$data['email'] =trim($_POST['email']);
			$data['password'] =trim($_POST['password']);
			//email
			if (empty($data['email'])) {
                $data['emailError'] = 'Please enter the email';
            }
			elseif (!preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/", $data['email']) )
			{
                $data['emailError'] = 'Invalid email format';
            }
			//Validate password
            if (empty($data['password']))
			{
                $data['passwordError'] = 'Please enter the password';
            }

			if ( empty($data['emailError']) && empty($data['passwordError']))
			{

				$loggedInUser = $this->accountModel->userLogin($data['email'], $data['password']);
				if ($loggedInUser) {
                    //create a session
                    $this->createUserSession($loggedInUser);

                } else {
                    $data['passwordError'] = 'Password and Email not matched with our record';
					$this->view('Account/userLogin', $data);
                }
			}
			else
			{

                $this->view('Account/userLogin', $data);
            }
		}
		else

		{

			$data = [
					'email' => '',
					'password' => '',
					'emailError' =>'',
					'passwordError' => '',
	                ];
			$this->view('Account/userLogin',$data);
		}
	}
	public function userRegister()
	{


        if ($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$data = [
						'firstName' => '',
						'lastName' => '',
						'email' => '',
						'password' => '',
						'confirmPassword' => '',
						'firstNameError' => '',
						'lastNameError' => '',
						'emailError' =>'',
						'passwordError' => '',
						'confirmPasswordError' => ''
		];
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


			$data['firstName'] = trim($_POST['firstName']);
			$data['lastName'] = trim($_POST['lastName']);
			$data['email'] =trim($_POST['email']);
			$data['password'] =trim($_POST['password']);
			$data['confirmPassword'] = trim($_POST['confirmPassword']);

			//Validate name
            if (empty($data['firstName'])) {
                $data['firstNameError'] = 'Please enter the first name';
            }
			elseif (strlen($data['firstName']) < 3 || strlen($data['firstName']) > 18 )
			{
                $data['firstNameError'] = 'First Name must be at least 3 and maximum 18 characters';
            }
			elseif (!preg_match("/^[A-Za-z. ]*$/", $data['firstName']) )
			{
                $data['firstNameError'] = 'Only letters and white spaces are allowed';
            }
			//last name
			if (empty($data['lastName'])) {
                $data['lastNameError'] = 'Please enter the last name';
            }
			elseif (strlen($data['lastName']) < 3 || strlen($data['lastName']) > 18 )
			{
                $data['lastNameError'] = 'Last Name must be at least 3 and maximum 18 characters';
            }
			elseif (!preg_match("/^[A-Za-z. ]*$/", $data['lastName']) )
			{
                $data['lastNameError'] = 'Only letters and white spaces are allowed';
            }
			//email
			if (empty($data['email'])) {
                $data['emailError'] = 'Please enter the email';
            }
			elseif (!preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/", $data['email']) )
			{
                $data['emailError'] = 'Invalid email format';
            }else {

				if ($this->accountModel->findUserByEmail($data['email'])) {
				    $data['emailError'] = 'Email is already exist';
				}
            }

            //Validate password
            if (empty($data['password']))
			{
                $data['passwordError'] = 'Please enter the password';
            }
			elseif (strlen($data['password']) < 6 || strlen($data['password']) > 18)
			{
                $data['passwordError'] = 'Password must be at least 6 and maximum 18 characters';
            }
			elseif (!preg_match("/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/", $data['password']))
			{
                $data['passwordError'] = '1 upercase,1 lowercase 1 number or special character and at least 8 characters required';
            }
            //Validate conf pass
            if (empty($data['confirmPassword'])) {
                $data['confirmPasswordError'] = 'Please enter the confirm password';
            } elseif ($data['password'] != $data['confirmPassword']) {
                $data['confirmPasswordError'] = 'Passwords do not match';
            }
            //make sure that erros should be empty
            if (empty($data['firstNameError']) && empty($data['lastNameError']) && empty($data['emailError']) && empty($data['passwordError'])  && empty($data['confirmPasswordError']))
			{
				if ($this->accountModel->createUser($data))
					{

						flash('rgisterSuccess', 'You are regitered and can login');
						redirect('AccountController/userLogin');

					}
					else
					{
					die("Something went wrong ");
					}


					}
			else
			{
                //load view with errors
                $this->view('Account/userRegister', $data);
            }


		}
		else
		{

		  $data = [
					'firstName' => '',
					'lastName' => '',
					'email' => '',
					'password' => '',
					'confirmPassword' => '',
					'firstNameError' => '',
					'lastNameError' => '',
					'emailError' =>'',
					'passwordError' => '',
					'confirmPasswordError' => ''
			     ];
		 $this->view('Account/userRegister',$data);
		}
	}

	public function userLogout()
	{
		unset($_SESSION['_id']);
        unset($_SESSION['firstName']);
        unset($_SESSION['email']);
        redirect('AccountController/userLogin');
	}
	public function createUserSession($loggedInUser)
    {
        $_SESSION['_id'] = $loggedInUser['_id'];
        $_SESSION['firstName'] = $loggedInUser['firstName'];
        $_SESSION['email'] = $loggedInUser['email'];
        redirect('HomeController/index');
    }

}