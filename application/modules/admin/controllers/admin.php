<?php
class Admin extends MX_Controller
{

	 function __construct()
    {
        // this is your constructor
        parent::__construct();
		session_start();

		$this->load->model('admin/users_model');
    }

	/*
	check if user is logged in to the admin panel
	default function of the controller when the loads
	*/
	function index()
	{
		if($this->session->userdata('is_logged_in_admin'))
		{
			redirect('admin/dashboard');
		}else{
			$data['message_error'] = TRUE;
			$this->load->view('admin/login');
		}
	}

	 /**
    * encript the password
    * @return mixed
    */
    function __encrip_password($password) {
       return md5($password);
    }
	 /**
    * check the username and the password with the database
    * @return void
    */
	function validate_credentials()
	{
		$user_name = $this->input->post('username');
		$password = $this->__encrip_password($this->input->post('password'));
		$is_valid = $this->users_model->validate($user_name, $password);

		if($is_valid)
			{
			$data = array(
				'user_name' => $user_name,
				'is_logged_in_admin' => true
			);
			$this->session->set_userdata($data);
			redirect('admin/dashboard');
		}
		else // incorrect username or password
		{
			$data['message_error'] = TRUE;
			$this->load->view('admin/login', $data);
		}
	}
	/**
    * admin dashboard function after login
    * @return void
    */
	function dashboard()
	{
		$this->checkloginadmin();
		$this->template->write('title', 'Welcome to the Exam Admin Dashboard !');
		$this->template->write_view('content', 'dashboard');
		$this->template->render();
	}
	//detailsreports of all the report
	function detailsreports($val='')
	{
		$data['type']=$val;
		$data['result']=$this->users_model->detailReport($val);
		//template for detail report
		$this->template->write('title', 'Welcome to the Exam Admin Report !');
		$this->template->write_view('content', 'detailsreports',$data);
		$this->template->render();
	}
	//report options
	function reports()
	{
		$this->checkloginadmin();
		$data['totalrecord']=$this->users_model->totalRecord();

		$data['ftotal']=$this->users_model->totalRecordByFieldName('f');
		$data['ltotal']=$this->users_model->totalRecordByFieldName('l');
		$data['ptotal']=$this->users_model->totalRecordByFieldName('p');
		$data['rtotal']=$this->users_model->totalRecordByFieldName('r');
		$data['ttotal']=$this->users_model->totalRecordByFieldName('t');
		$data['pardottotal']=$this->users_model->totalRecordByFieldName('pardot');
		$data['cf_leadidtotal']=$this->users_model->totalRecordByFieldName('cf_leadid');
		$data['cf_new_leadtotal']=$this->users_model->totalRecordByFieldName('cf_new_lead');
		$data['teltotal']=$this->users_model->totalRecordByFieldName('tel');


		$data['fnametotal']=$this->users_model->totalRecordByFieldName('fname');
		$data['lnametotal']=$this->users_model->totalRecordByFieldName('lname');
		$data['aIDtotal']=$this->users_model->totalRecordByFieldName('aID');
		$data['aFNtotal']=$this->users_model->totalRecordByFieldName('aFN');
		$data['aLNtotal']=$this->users_model->totalRecordByFieldName('aLN');
		
		$data['transfer_phonetotal']=$this->users_model->totalRecordByFieldName('transfer_phone');
		$data['lead_rectotal']=$this->users_model->totalRecordByFieldName('lead_rec');
		$data['lead_first_nametotal']=$this->users_model->totalRecordByFieldName('lead_first_name');
		$data['lead_last_nametotal']=$this->users_model->totalRecordByFieldName('lead_last_name');

		$data['lead_phone_numbertotal']=$this->users_model->totalRecordByFieldName('lead_phone_number');
		$data['paneltotal']=$this->users_model->totalRecordByFieldName('panel');
		$data['notinterestedtotal']=$this->users_model->totalRecordByFieldName('notinterested');
		$data['starttotal']=$this->users_model->totalRecordByFieldName('start');

		$data['noofagents']=$this->users_model->totalNoOfAgents();
		
		$data['noofleads']=$this->users_model->totalNoOfLeads();

		


		$this->template->write('title', 'Welcome to the Exam Admin Report !');
		$this->template->write_view('content', 'reports',$data);
		$this->template->render();
	}
	//Logout function
	function logout()
	{
		$this->session->sess_destroy();
		redirect('admin/index');
	}
	//add event
	public function addevent($id)
	{
					$this->checkloginadmin();
					$this->session->set_userdata('uid',$id);
					$data['allusers']=$this->users_model->listAllUsers();
					$data['id']=$id;
					$this->template->write('title', 'Welcome to the Add Event  !');
					$this->template->write_view('content','addevent',$data);
					$this->template->render();
	}
	//rest API call
	public function restapi()
	{	
		$email=$this->input->post('email');
		$date=$this->input->post('date');
		$time=$this->input->post('time');
		$result=$this->users_model->searchEventData($email,$date,$time);
		if(count($result)>0)
			echo json_encode('yes');
		else
			echo json_encode('no');
	}
	//show event
	public function showevent()
	{
		
		$str='[';
		$uid=$this->session->userdata('uid');
		$events=$this->users_model->allEventsDataByUserId($uid);	
		foreach ($events as $e)
		{
			$endtime = strtotime($e['end']) + 60*60;
			$time = date('H:i', $endtime);
		 	$str.='{ "id": "'.$e['id'].'", 
			"backgroundColor": "'.$e['color_code'].'",
		 	"title": "'.$e['title'].'",
			"description": "'.$e['description'].'",
		 	"start": "'.$e['start'].'",
			"end": "'.$e['end'].'",
		 	"allDay": false },'; 
		}
		
		$str=rtrim($str, ",");
		$str.=']';
		
		echo $str;
	}
	//update event
	public function updateevent() 
	{
		$id=$this->input->post('id');
		$title=$this->input->post('title');
		$desc=$this->input->post('desc');

		//event start time
		$start=$this->input->post('start');
		$start = substr($start, 0, strpos($start, 'GMT'));
		$start =date('Y-m-d h:i:s', strtotime($start));
	
		//event end time
		$end=$this->input->post('end');
		$end = substr($end, 0, strpos($end, 'GMT'));
		$end =date('Y-m-d h:i:s', strtotime($end));
		
		//data validation
		//data array need to save
			$data = array(
			'title' =>$title,
			'description' =>$desc,
			'start'=>$start,
			'end'=>$end
		);
		$eid=$this->users_model->updateData($id,'event_user_event_details',$data);
		echo 'Event updated successfully.';
	}	
	//save event
	public function saveevent() 
	{
		$uid=$this->session->userdata('uid');
		$title=$this->input->post('title');
		$desc=$this->input->post('desc');
		
		//event start time
		$start=$this->input->post('start');
		$start = substr($start, 0, strpos($start, 'GMT'));
		$start =date('Y-m-d h:i:s', strtotime($start));
	
		//event end time
		$end=$this->input->post('end');
		$end = substr($end, 0, strpos($end, 'GMT'));
		$end =date('Y-m-d h:i:s', strtotime($end));
		
		//data validation
		//data array need to save
		
			$data = array(
			'userid' =>$uid,
			'title' =>$title,
			'description' =>$desc,
			'start'=>$start,
			'end'=>$end,
			'eventcreated' =>  date('Y-m-d H:i:s')
		);
		
		$eid=$this->users_model->saveData('event_user_event_details',$data);
		
		if($eid>0)
		{
			echo 'Event saved successfully.';
		}
		else {
			echo 'Event not saved.';
		}
	}
	//add user
	public function adduser($id='')
	{
		$this->checkloginadmin();
		if (!isset($_POST['submit']))
				{
					if($id>0)
					{
						$data['userdetails']=$this->users_model->userData($id);
						$this->template->write_view('content', 'adduser',$data);
					}
					else
					{
						$this->template->write_view('content', 'adduser');
					}

					$this->template->write('title', 'Welcome to the Event  !');
					$this->template->render();
				}
			  	else
				  {
				  		if($_POST['id']>0)
				  		{
				  					$data = array(
										'firstname' =>$this->input->post('firstname'),
										'lastname'=>$this->input->post('lastname'),
										'email'=>$this->input->post('email'),
										'modefied' =>  date('Y-m-d H:i:s'),
										'color_code'=>$this->input->post('colors')
									);

				  			$qid=$this->users_model->updateData($_POST['id'],'event_user',$data);
				  			$this->session->set_flashdata('flash_message', 'updated');

				  		}
				  		else
				  		{
				  					$data = array(
										'firstname' =>$this->input->post('firstname'),
										'lastname'=>$this->input->post('lastname'),
										'email'=>$this->input->post('email'),
										'created' =>  date('Y-m-d H:i:s'),
										'modefied' =>  date('Y-m-d H:i:s'),
										'is_active'=>'1',
										'created_by_admin'=>'1',
										'color_code'=>$this->input->post('colors')
									);

				  			$qid=$this->users_model->saveData('event_user',$data);
				  			$this->session->set_flashdata('flash_message', 'added');
				  		}

						redirect('admin/users');

				  }

	}
	//delete question
	public function deleteuser($id)
	{
		$this->users_model->deleteUser($id);
		$this->session->set_flashdata('flash_message', 'deleted');
		redirect('admin/users');
	}
	//list question
	public function users()
	{
		$this->checkloginadmin();
		$data['allusers']=$this->users_model->listAllUsers();
		$this->template->write('title', 'Welcome to the List Users !');
		$this->template->write_view('content', 'listusers',$data);
		$this->template->render();
	}
	//checklogin admin
	public function checkloginadmin()
	{
	   if(!$this->session->userdata('user_name')=='admin')
		redirect('admin');
	}
}
?>
