<?php
class Admin_model extends CI_model{

  public function __construct()
  {
		$this->load->database();
  }
  public function login_user($U_Username,$U_Password){

  $this->db->select('*');
  $this->db->from('user_master');
  $this->db->where('U_Username',$U_Username);
  $this->db->where('U_Password',$U_Password);
  $this->db->where('U_Type','A');

  if($query=$this->db->get())
  {
      return $query->row_array();
  }
  else{
    return false;
  }
}
/*public function editmodel($id=0)
{
  if($id==0)
  {
    $query=$this->db->get('category_product_master');
    return $query->result_array();
  }
  $query=$this->db->get_where('category_product_master',array('CP_Id'=>$id));
  return $query->row_array();
}
public function setdata($id=0)
{
  $this->load->helper('url');
  $data=array('C_Id'=>$this->input->post('C_Id'),
      'C_Parent_Id'=>$this->input->post('C_Parent_Id'),
      'CP_Name'=>$this->input->post('CP_Name'),
    'CP_Description'=>$this->input->post('CP_Description'),
      'CP_Size'=>$this->input->post('CP_Size'),
    'CP_Old_Prize'=>$this->input->post('CP_Old_Prize'),
    'CP_Prize'=>$this->input->post('CP_Prize'),
      'CP_Display'=>$this->input->post('CP_Display'));
  if($id==0)
  {
    return $this->db->insert('category_product_master',$data);
  }
  else
  {
    $this->db->where('CP_Id',$id);
    return $this->db->update('category_product_master',$data);
  }
}*/
public function fetch_cat(){

  $this->db->select('*');
  $this->db->from('category_master');
$this->db->where_not_in('C_Parent_Id','1');
  if($query=$this->db->get())
  {
      return $query->result_array();
  }
  else{
    return false;
  }
}

public function fetch_product(){

  $this->db->select('*');
  $this->db->from('category_product_master');
  
  if($query=$this->db->get())
  {
      return $query->result_array();
  }
  else{
    return false;
  }
}
public function display_cat(){

  $this->db->select('*');
  $this->db->from('category_master');
  
  if($query=$this->db->get())
  {
      return $query->result_array();
  }
  else{
    return false;
  }
}
public function display_user(){

  $this->db->select('*');
  $this->db->from('user_master');
  
  if($query=$this->db->get())
  {
      return $query->result_array();
  }
  else{
    return false;
  }
}
public function insert_products($user,$CP_Id)
{
  $this->db->insert('category_product_master', $user);
}
public function insert_categories($user,$C_Id)
{
  $this->db->insert('category_master', $user);
}
public function edit($id)
{
 $this->db->select('*');
  $this->db->from('category_product_master');
  $this->db->where('CP_Id',$id);  
  $img=$this->db->get();
  return $img->row_array();
}
public function update($user,$CP_Id)
{
  $this->db->where('CP_Id',$CP_Id);
  return $this->db->update('category_product_master',$user);
}
public function images()
{
  $this->db->select('CP_Id');
  $this->db->from('category_product_master');
  $this->db->join('category_product_master','category_product_master.CP_Id=product_images.CP_Id');
  $query=$this->db->get();
 // $this->admin->insert_images($query);
}

public function insert_images($user)
{
  $this->db->insert('product_images',$user);
}
}