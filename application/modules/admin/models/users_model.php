<?php 

class Users_model extends CI_Model {

    /**
    * Validate the login's data with the database
    * @param string $user_name
    * @param string $password
    * @return void
    */
	function validate($user_name, $password)
	{
		$this->db->where('username', $user_name);
		$this->db->where('password', $password);
		$query = $this->db->get('event_admin');
		
		if($query->num_rows == 1)
		{
			return true;
		}		
	}
	//search event data
	function searchEventData($email,$date,$time)
	{
		$datetime=$date.' '.$time;
		$sql = "select event_user_event_details.id as id,
event_user_event_details.userid as userid,
event_user_event_details.start as start ,
event_user_event_details.end as end
from event_user,event_user_event_details 
where event_user.id=event_user_event_details.userid
and event_user.email='$email'
and '$datetime' BETWEEN `start` and `end`" ; 
	
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return @$result;
	}
	//all events by user id
	function allEventsDataByUserId($uid)
	{
		$sql = "select event_user_event_details.id as id,event_user_event_details.userid as userid,event_user_event_details.title as title,event_user_event_details.description as description,event_user_event_details.start as start,event_user_event_details.end as end,event_user_event_details.eventcreated as eventcreated,event_user.color_code as color_code  from event_user_event_details left join event_user on event_user_event_details.userid=event_user.id" ; 
	
	if($uid!='all')
		{
			$sql .=' where event_user_event_details.userid='.$uid;
		}
	
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return @$result;
	}
	//delete question
	function deleteUser($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('event_user'); 	
	}
	//total by field name
	function totalRecordByFieldName($field)
	{
			$sql = "select count(*) as total from event_report where ".$field." is NOT NULL AND (LENGTH(".$field.")>0)" ; 
			$query = $this->db->query($sql);
			$result = $query->result_array();
			return @$result;
	}
	//total records
	
	function totalRecord()
	{
			$sql = "SELECT count(*) as total FROM event_report" ; 
			$query = $this->db->query($sql);
			$result = $query->result_array();
			return @$result;
	}
	//function detailReport
	function detailReport($var)
	{
		if($var=='totalrecords')
		{
			$sql = "SELECT * FROM event_report";  	
		}
		if($var=='totalf')
		{
			$sql = "SELECT * FROM event_report where f is not null"; 
		}
		if($var=='totall')
		{
			$sql = "SELECT * FROM event_report where l is not null"; 
		}
		if($var=='totalp')
		{
			$sql = "SELECT * FROM event_report where p is not null"; 
		}
		if($var=='totalr')
		{
			$sql = "SELECT * FROM event_report where r is not null";  
		}
		if($var=='totalt')
		{
			$sql = "SELECT * FROM event_report where t is not null"; 
		}
		if($var=='totalpardot')
		{
			$sql = "SELECT * FROM event_report where pardot is not null"; 
		}
		if($var=='totalcfleadid')
		{
			$sql = "SELECT * FROM event_report where cf_leadid is not null"; 
		}
		if($var=='totalcfnewlead')
		{
			$sql = "SELECT * FROM event_report where cf_new_lead is not null"; 
		}
		if($var=='totaltel')
		{
			$sql = "SELECT * FROM event_report where tel is not null"; 
		}
		if($var=='totalfname')
		{
			$sql = "SELECT * FROM event_report where fname is not null"; 
		}
		if($var=='totallname')
		{
			$sql = "SELECT * FROM event_report where lname is not null"; 
		}
		if($var=='totalaid')
		{
			$sql = "SELECT * FROM event_report where aID is not null"; 
		}
		if($var=='totalafn')
		{
			$sql = "SELECT * FROM event_report where aFN is not null"; 
		}
		if($var=='totalaln')
		{
			$sql = "SELECT * FROM event_report where aLN is not null"; 
		}
		if($var=='totaltransferphone')
		{
			$sql = "SELECT * FROM event_report where transfer_phone is not null"; 
		}
		if($var=='totalleadrec')
		{
			$sql = "SELECT * FROM event_report where lead_rec is not null"; 
		}
		if($var=='totalleadfirstname')
		{
			$sql = "SELECT * FROM event_report where lead_first_name is not null"; 
		}
		if($var=='totalleadlastname')
		{
			$sql = "SELECT * FROM event_report where lead_last_name is not null"; 
		}
		if($var=='totalleadphoneno')
		{
			$sql = "SELECT * FROM event_report where lead_phone_number is not null";  
		}
		if($var=='totalpanel')
		{
			$sql = "SELECT * FROM event_report where panel is not null"; 
		}
		if($var=='totalnotinterested')
		{
			$sql = "SELECT * FROM event_report where notinterested is not null"; 
		}
		if($var=='totalstart')
		{
			$sql = "SELECT * FROM event_report where start is not null"; 
		}
			$query = $this->db->query($sql);
			$result = $query->result_array();
			return @$result;
	}
	//user details by id
	
	function userData($id)
	{
			$sql = "SELECT * FROM event_user where id=".$id ; 
			$query = $this->db->query($sql);
			$result = $query->result_array();
			return @$result;
	}
	//total no of leads
	function totalNoOfLeads()
	{
			$sql = "select aFN,aLN,fname,lname,count(fname) as total from event_report where fname is not null group by fname,lname" ; 
			$query = $this->db->query($sql);
			$result = $query->result_array();
			return @$result;
	}
	//total no of agents
	function totalNoOfAgents()
	{
			$sql = "select aFN,aLN,count(aFN) as total from event_report where aFN is not null group by aFN,aLN" ; 
			$query = $this->db->query($sql);
			$result = $query->result_array();
			return @$result;
	}
	//list all questions  
	function listAllUsers()
	{
			$sql = "SELECT * FROM event_user" ; 
			$query = $this->db->query($sql);
			$result = $query->result_array();
			return @$result;
	}
	
	//save data
	function saveData($tablename,$data)
	{
		$this->db->insert($tablename, $data);
		$id = $this->db->insert_id(); 
		return @$id;
	}
	//update data
	function updateData($id,$tablename,$data)
	{
		$this->db->where('id', $id);
		$this->db->update($tablename, $data);
		$id = $this->db->insert_id(); 
		return @$id;
	}
    /**
    * Serialize the session data stored in the database, 
    * store it in a new array and return it to the controller 
    * @return array
    */
	function get_db_session_data()
	{
		$query = $this->db->select('user_data')->get('ci_sessions');
		$user = array(); /* array to store the user data we fetch */
		foreach ($query->result() as $row)
		{
		    $udata = unserialize($row->user_data);
		    /* put data in array using username as key */
		    $user['user_name'] = $udata['user_name']; 
		    $user['is_logged_in_admin'] = $udata['is_logged_in_admin']; 
		}
		return $user;
	}
	

}

