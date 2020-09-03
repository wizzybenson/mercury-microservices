<?php
namespace models;
/**
 * @table('users')
*/
class Users{
	/**
	 * @id
	 * @column("name"=>"user_id","nullable"=>false,"dbType"=>"int unsigned")
	 * @validator("id","constraints"=>array("autoinc"=>true))
	**/
	private $user_id;

	/**
	 * @column("name"=>"email","nullable"=>false,"dbType"=>"varchar(255)")
	 * @validator("email","constraints"=>array("notNull"=>true))
	 * @validator("length","constraints"=>array("max"=>255))
	**/
	private $email;

	/**
	 * @column("name"=>"password","nullable"=>false,"dbType"=>"varchar(255)")
	 * @validator("length","constraints"=>array("max"=>255,"notNull"=>true))
	 * @transformer("name"=>"password")
	**/
	private $password;

	/**
	 * @column("name"=>"first_name","nullable"=>false,"dbType"=>"varchar(255)")
	 * @validator("length","constraints"=>array("max"=>255,"notNull"=>true))
	**/
	private $firstName;

	/**
	 * @column("name"=>"last_name","nullable"=>false,"dbType"=>"varchar(255)")
	 * @validator("length","constraints"=>array("max"=>255,"notNull"=>true))
	**/
	private $lastName;

	/**
	 * @column("name"=>"created_at","nullable"=>false,"dbType"=>"timestamp")
	 * @validator("notNull")
	**/
	private $createdAt;

	/**
	 * @column("name"=>"updated_at","nullable"=>true,"dbType"=>"timestamp")
	**/
	private $updatedAt;

	 public function getUser_id(){
		return $this->user_id;
	}

	 public function setUser_id($userId){
		$this->user_id=$userId;
	}

	 public function getEmail(){
		return $this->email;
	}

	 public function setEmail($email){
		$this->email=$email;
	}

	 public function getPassword(){
		return $this->password;
	}

	 public function setPassword($password){
		$this->password=$password;
	}

	 public function getFirstName(){
		return $this->firstName;
	}

	 public function setFirstName($firstName){
		$this->firstName=$firstName;
	}

 public function getLastName(){
    return $this->lastName;
}

	 public function setLastName($lastName){
		$this->lastName=$lastName;
	}

	 public function getCreatedAt(){
		return $this->createdAt;
	}

	 public function setCreatedAt($createdAt){
		$this->createdAt=$createdAt;
	}

	 public function getUpdatedAt(){
		return $this->updatedAt;
	}

	 public function setUpdatedAt($updatedAt){
		$this->updatedAt=$updatedAt;
	}

	 public function __toString(){
		return ($this->firstName??'').' '.($this->lastName??'').'';
	}

}