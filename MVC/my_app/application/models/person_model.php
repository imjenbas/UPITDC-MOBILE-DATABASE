<?phpclass Person_model extends CI_Model {	public function __construct()	{		$this->load->database();	}		function get_all_persons()	{		$this->db->select('*');		$this->db->from('persons');		return $this->db->get()-> result();	}		function get_persons_with_first_name($first_name)	{		$this->db->select('*');		$this->db->from('persons');		$this->db->where('first_name',$first_name);		return $this->db->get()->result();	}		function insert_person($first_name, $last_name, $age)	{		$this->first_name = $first_name;		$this->last_name = $last_name;		$this->age = $age;		$this->db->insert('persons', $this);	}	}