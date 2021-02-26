<?php
class mainmodel extends CI_model
{
	public function encpswd($pass)
	{
		return password_hash($pass, PASSWORD_BCRYPT);
	}
	//Insert Registered Details
	public function inreg($a,$b)
	{
		$this->db->insert("login",$b);
		$loginid=$this->db->insert_id();
		$a['loginid']=$loginid;
	   $this->db->insert("register",$a);
	}
	
public function view()
	{
		$this->db->select('*');
		$this->db->join('login','login.id=reg.loginid','inner');
		$qry=$this->db->get("register");
        return $qry;
	}
	
   public function select($email,$pass)
	{
		$this->db->select('password');
		$this->db->from("login");
		$this->db->where("email",$email);
		$qry=$this->db->get()->row('password');
		return $this->verifypass($pass,$qry);
	}
	public function verifypass($pass)
	   {
         return password_hash($pass, PASSWORD_BCRYPT);
          
        }
	public function getuserid($email)
	{
		$this->db->select('id');
		$this->db->from("login");
		$this->db->where("email",$email);
		return $this->db->get()->row('id');
	}
	public function getuser($id)
	{
		$this->db->select('*');
		$this->db->from("login");
		$this->db->where("id",$id);
		return $this->db->get()->row();
	}

	//insert Airport Details
	public function airportmodel($a)
	{
		$this->db->insert("airport",$a);
	}
	//User view
	public function reguser1()
	{
		$this->db->select('*');
		$this->db->join('login','login.id=register.loginid','inner');
		$qry=$this->db->get("register");
		return $qry;
	}
	//User profile updation
	public function regupdateform($id)

	{
		$this->db->select('*');
		$qry=$this->db->join("login",'login.id=register.loginid','inner');
		$qry=$this->db->where("register.loginid",$id);
		$qry=$this->db->get("register");
		return $qry;
	}
	public function regupdateform1($a,$b,$id)
	{
        $this->db->select('*');
        $qry=$this->db->where("loginid",$id);
        $qry=$this->db->join('register','login.id=register.loginid','inner');
        $qry=$this->db->update("register",$a);
        $qry=$this->db->where("login.id",$id);
        $qry=$this->db->update("login",$b);
        return $qry;


	}
	//airprt details view
	public function airportdetails1()
	{	

	$this->db->select('*');
	$qry=$this->db->get("airport");
	return $qry;

}
//airport delete
public function deleteairport($id)
{
	$this->db->select('*');
	$this->db->where('id',$id);
	$this->db->delete("airport");
}
//airport update
public function airportupdateform($id)

	{
		$this->db->select('*');
		$qry=$this->db->get("airport");
		return $qry;
	}
	public function airportupdateform1 ($a,$id)
	{
        $this->db->select('*');
        $qry=$this->db->where("id",$id);
        $qry=$this->db->update("airport",$a);
        return $qry;


	}

}


?>
