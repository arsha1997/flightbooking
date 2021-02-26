
  
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}
	public function w()
	{
		$this->load->view('w');
	}

	//new

	 public function register()
    {
        $this->load->view('index');
    }
    //Insert register details
	public function reg()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("fname","fname",'required');
        $this->form_validation->set_rules("lname","lname",'required');
        $this->form_validation->set_rules("age","age",'required');
        $this->form_validation->set_rules("gender","gender",'required');
        $this->form_validation->set_rules("address","address",'required');
        $this->form_validation->set_rules("phno","phno",'required');
        $this->form_validation->set_rules("adno","adno",'required');
        $this->form_validation->set_rules("email","email",'required');
        $this->form_validation->set_rules("password","password",'required');
        if($this->form_validation->run())
        {
        $this->load->model('mainmodel');
        $pass=$this->input->post("password");
        $encpass=$this->mainmodel->encpswd($pass);
        $a=array("fname"=>$this->input->post("fname"),
                "lname"=>$this->input->post("lname"),
                "age"=>$this->input->post("age"),
                 "gender"=>$this->input->post("gender"),
                  "address"=>$this->input->post("address"),
                "phno"=>$this->input->post("phno"),"adno"=>$this->input->post("adno"));
       $b=array("email"=>$this->input->post("email"),
                "password"=>$encpass,
                "utype"=>'0');
        $this->mainmodel->inreg($a,$b);    
        redirect(base_url().'main/index'); 
        }
    }    

     // Login 
   public function loginform()
    {
        $this->load->view('logform');
    }
     public function login()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("email","email",'required');
        $this->form_validation->set_rules("password","password",'required');
            if($this->form_validation->run())
            {
                $this->load->model('mainmodel');
                $email=$this->input->post("email");
                $pass=$this->input->post("password");
                $rslt=$this->mainmodel->select($email,$pass);
                if($rslt)
                {
                    $id=$this->mainmodel->getuserid($email);
                    $user=$this->mainmodel->getuser($id);
                 $this->load->library(array('session'));
                $this->session->set_userdata(array('id'=>(int)$user->id,'status'=>$user->status,'utype'=>$user->utype));
                    if($_SESSION['utype']=='1' )
                    {
                                redirect(base_url().'main/admin');
                    }
                    elseif($_SESSION['utype']=='0' )
                    {
                                redirect(base_url().'main/user');
                    }
                    else
                    {
                        echo "waiting for approval";
                    }
                }
                else
                {
                 echo "invalid user";
                }
            }
else{
    redirect('main/logform','refresh');
    }
}

     // View User Details
     public function view()
    {
        $this->load->model('mainmodel');
        $data['n']=$this->mainmodel->view();
        $this->load->view('view',$data);
    }   

     // Approve the user
    public function approve()
    {
        $this->load->model('mainmodel');
        
        $id=$this->uri->segment(3);
        $this->mainmodel->approve($id);
        redirect('main/view','refresh');
    }   

    //Reject the user 
    public function reject()
    {
        $this->load->model('mainmodel');
        
        $id=$this->uri->segment(3);
        $this->mainmodel->reject($id);
        redirect('main/view','refresh');
    }

    //Admin View Dashboard
    public function admin()
	{
		$this->load->view('admin');
	}

	//View Page of Airport Details
	public function airportdet()
	{
		$this->load->view('airport_det');
	} 

	//Insert Airport Details
	public function airportinsert()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("aname","aname",'required');
		$this->form_validation->set_rules("cntry","cntry",'required');
		$this->form_validation->set_rules("state","state",'required');
		$this->form_validation->set_rules("contact","contact",'required');
		$this->form_validation->set_rules("loc","loc",'required');
		if($this->form_validation->run())
		{
		$this->load->model('Mainmodel');
		$a=array("aname"=>$this->input->post("aname"),"cntry"=>$this->input->post("cntry"),"state"=>$this->input->post("state"),"contact"=>$this->input->post("contact"),"loc"=>$this->input->post("loc"));
		$this->Mainmodel->airportmodel($a);
		redirect(base_url().'main/admin');

		}

	}
    //user view
    public function regusertable()
    {
        $this->load->model('mainmodel');
        $data['n']=$this->mainmodel->reguser1();
        $this->load->view('reguserview',$data);

    }
    //search form view
    public function searchflight()
    {
        $this->load->view('searchform');
    } 
    //update form

    public function regupdate()
    {
        
        $this->load->model('mainmodel');
        $id=$this->session->id;
        $data['user_data']=$this->mainmodel->regupdateform($id);
        $this->load->view('userupdate',$data);

    }
    //profile update
    public function reguserupdate()
    {
        $a=array("fname"=>$this->input->post("fname"),"lname"=>$this->input->post("lname"),"age"=>$this->input->post("age"),"gender"=>$this->input->post("gender"),"address"=>$this->input->post("address"),"phno"=>$this->input->post("phno"),"adno"=>$this->input->post("adno"));
        $b=array("email"=>$this->input->post("email"));
        $this->load->model('mainmodel');
        
        if($this->input->post("update"))
        {
            $id=$this->session->id;
            $this->mainmodel->regupdateform1($a,$b,$id);
            redirect('main/regupdate','refresh');
        }

    }
    //userhome view
     public function user()
    {
        $this->load->view('user');
    }
    //airport view
    public function airportdetails()
    {
        $this->load->model('mainmodel');
        $data['n']=$this->mainmodel->airportdetails1();
        $this->load->view('airportview',$data);

    } 
    //airport deletion
    public function deleteairport()
    {   
    $this->load->model('mainmodel');
    $id=$this->uri->segment(3);
    $this->mainmodel->deleteairport($id);
    redirect('main/airportdetails','refresh');
}
//airport updation
public function airportupdateview()
    {
        
        $this->load->model('mainmodel');
        $id=$this->session->id;
        $data['user_data']=$this->mainmodel->airportupdateform($id);
        $this->load->view('airportupdate',$data);

    }
    public function airportupdate1()
    {
        $a=array("aname"=>$this->input->post("aname"),
            "cntry"=>$this->input->post("cntry"),
            "state"=>$this->input->post("state"),
            "contact"=>$this->input->post("contact"),
            "loc"=>$this->input->post("loc"));
       
        
        if($this->input->post("update"))
        {
            $id=$this->session->id;
            $this->mainmodel->airportupdateform1($a,$id);
            redirect('main/airportupdateview','refresh');
        }

    }


}
	
