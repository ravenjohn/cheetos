<?php
class Feed_model extends Kiel_Model{

	public function get_messages($parent_id = null, $offset = 0, $limit = 10)
	{ 
		if(!empty($parent_id)){
			$where = "$parent_id = '{$parent_id}'"; 
		}
		return $this->data_handler->get('messages',null,$offset,$limit,null,'date_created',$where);
	}
	
	public function single_item($id)
	{
		return $this->data_handler->get_where('messages',null," WHERE id = '{$id}' ",null,null,null,'date_created');
	}

	public function search($q, $offset = 0, $limit = 10)
	{
		$query  = "SELECT * FROM messages WHERE MATCH (sender,message,place_tag,sender_number) AGAINST ('{$q}' WITH QUERY EXPANSION) ORDER BY date_created desc LIMIT {$offset},{$limit}";
		return $this->data_handler->query($query);
	}

	public function search_item($q, $offset = 0, $limit = 10)
	{
		$query = "SELECT * FROM messages $q ORDER BY date_created desc LIMIT {$offset}, {$limit};";
		return $this->data_handler->query($query);
	}

	public function update_status($data)
	{
		$query  = "UPDATE messages SET status='".$data['status']."' WHERE id = '".$data['id']."'";
		$res = $this->data_handler->query($query);
		//return $this->data_handler->query($query);	
	}

	public function add_messages($user_no,$addr,$name,$message,$source,$parent_id)
	{
		$data = '';
		if(!empty($parent_id)){
			$data .= "'{$parent_id}'."; 
		}
		else{
			$data .= " NULL,";
		}
		$tm = $this->_time;
		$id = md5($this->_time.$name);
		$data .= "'{$id}',";
		if($addr != NULL){
			$addr = strip_tags(filter_var(trim($addr),FILTER_SANITIZE_ENCODED));
			$data .= " '{$addr}',";
		} else{
			$data .= " NULL,";
		}
		if($name != NULL){
			$name = strip_tags(filter_var(trim($name),FILTER_SANITIZE_ENCODED));
			$data .= " '{$name}',";
		} else{
			$data .= " NULL,";
		}
		$data .= " '{$user_no}',";
		$message = strip_tags(filter_var(trim($message),FILTER_SANITIZE_ENCODED));
		$data .= " '{$message}',";
		
		$data .= " {$tm}, {$tm}, NULL, 'pending' , '{$source}' ";

		return $this->data_handler->insert('messages',$data);
	}
}

?>