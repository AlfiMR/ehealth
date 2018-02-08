<?php
class UserIdentity extends CUserIdentity
{

	private $_id;
	private $level;
 
	/**
	* Authenticates a user.
	* @return boolean whether authentication succeeds.
	*/
	public function authenticate()
	{
		$username = strtolower($this->username);
		$user = User::model()->find("username = '$username'");
	 
		if($user===null)
	   		$this->errorCode=self::ERROR_USERNAME_INVALID;
	 
		else if($user->check($this->password,$user->password)){ // return true
	    	$this->errorCode = self::ERROR_PASSWORD_INVALID;
	  	}
		else{
		   // successful login
		   $this->_id = $user->id;
		   $this->username = $user->username;
		   $this->setState('level', $user->level); //untuk memanggil level di database menggunakan EWebUser.php nanti
		   $this->errorCode = self::ERROR_NONE;
	 	}
	  	return !$this->errorCode;
	}
	 
	public function getId()
	{
	   return $this->_id;
	}
}