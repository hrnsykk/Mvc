<?php


class index_model extends model{

	function __construct(){
	
		parent::__construct();
	
	}
	
	
	public function SivasSpor(){
		$sql = "
			SELECT * FROM phpbb_posts PHPOST 
			LEFT OUTER JOIN phpbb_attachments ATCH ON PHPOST.post_id = ATCH.post_msg_id 
			LEFT OUTER JOIN phpbb_topics TPC ON PHPOST.post_id = TPC.topic_first_post_id
			WHERE PHPOST.forum_id = 8
		";

		Return R::getAll( $sql);
	
	}
	
	public function Sivas(){
		
		return R::getAll( 'select * from phpbb_posts where forum_id=9');
	
	}
	public function Gundem(){
		
		return R::getAll( 'select * from phpbb_posts where forum_id=7');
	
	}


}


 ?>