
<?php
	class model_laythongtin{
	public $db;
	public function __construct(){
	   $this->db= new mysqli('localhost', 'root', '', 'web_tintuc') or die(213);	
	    if($this->db->connect_errno) die( $db->connect_error ); 	
	    $this->db->set_charset("utf8");
	}	
}//class

?>