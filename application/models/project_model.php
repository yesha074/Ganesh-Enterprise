<?php
class Project_model extends CI_model{

  public function __construct()
  {
		$this->load->database();
  }
  public function register_user($user){


$this->db->insert('user_master', $user);
 
}

public function login_user($U_Username,$U_Password){


  $this->db->select('*');
  $this->db->from('user_master');
  $this->db->where('U_Username',$U_Username);
  $this->db->where('U_Password',$U_Password);
  $this->db->where('U_Type','U');

  if($query=$this->db->get())
  {
      return $query->row_array();
  }
  else{
    return false;
  }


}
public function fetch_cat()
{
	$this->db->select('*');
  $this->db->from('category_master');
  $this->db->where('C_Parent_Id',4);
	$cate=$this->db->get();
	return $cate->result_array();

        
}
public function fetch_scat($id)
{
  $this->db->select('*');
  $this->db->from('category_master');
  $this->db->where('C_Id',$id);
  $cate=$this->db->get();
  return $cate->result_array();
        
}
public function fetch_imgs()
{
  $this->db->select('*');
  $this->db->from('category_product_master');
  $img=$this->db->get();
  return $img->result_array();

        
}

public function fetch_products($id)
{
  $this->db->select('*');
  $this->db->from('category_product_master');
  $this->db->where('C_Parent_Id',$id);
  $this->db->where('CP_Display',true);
  $img=$this->db->get();
  return $img->result_array();
}
public function fetch_products_sub($id)
{
  $this->db->select('category_product_master.*');
  $this->db->select('category_master.*');
  $this->db->from('category_product_master,category_master');
  $this->db->where('category_master.C_Id',$id);
  $this->db->where('category_master.C_Id=category_product_master.C_Id');
  $this->db->where('category_product_master.CP_Display',true);
  $img=$this->db->get();
  return $img->result_array();
}
public function fetch_single_product($id)
{
  $this->db->select('*');
 // $this->db->select('product_images.*');
  $this->db->from('category_product_master');
  $this->db->where('CP_Id',$id);
  $img=$this->db->get();
  return $img->row_array();
}
public function related_pro($id)
{
  $this->db->select('*');
  $this->db->from('category_product_master');
  $this->db->where('C_Id',$id);
  $img=$this->db->get();
  return $img->result_array();
}
public function addcart($cart)
{
  $this->db->insert('cart',$cart);
}
public function order($uid)
{
  $this->db->insert('order',$uid);

  $insert_id = $this->db->insert_id();

   return  $insert_id;
}

public function order_item($lid)
{

  $pid=$this->input->post('pid');

  for($i=0;$i<sizeof($pid);$i++){

  $qty=$this->input->post('qty');
  $price=$this->input->post('price');
  $famt=$this->input->post('famt');
  
  $uid=array('CP_Id'=>$pid[$i],
    'O_Id'=>$lid,
    'OI_Price'=>$price[$i],
    'OI_Pcs'=>$qty[$i],
    'OI_Total_Amount'=>$famt[$i],
  );

  $uida=array('status'=>1);

  $this->db->insert('order_items',$uid);

 $this->db->where('CP_Id',$pid[$i]);
  $this->db->update('cart',$uida);
}

}

public function show_cart()
{
  $this->db->select('*');
  $this->db->from('cart');
  $this->db->join('category_product_master','category_product_master.CP_Id=cart.CP_Id');
  $this->db->where('cart.status','0');
  $query=$this->db->get();
  return $query->result_array();
}
public function cart_delete($CP_Id)
{
  $this->db->where('CP_Id',$CP_Id);
  return $this->db->delete('cart');
}
public function cart_update($cart)
{
  return $this->db->update('cart',$cart);
}
public function loadimg($user)
{
  $this->db->select('*');
  $this->db->from('user_master');
  $this->db->where('U_Id',$user);
  $img=$this->db->get();
  return $img->row_array();
}
public function update($user,$id)
{
  $this->db->where('U_Id',$id);
  return $this->db->update('user_master',$user);
}
public function updatepass($user,$id)
{
  $que=$this->db->query("select * from user_master where U_Id=$id");
      $row=$que->row();      

    if((!strcmp($user['Old_Password'], $row->U_Password)) && (!strcmp($user['New_Password'], $user['Confirm_Password']))){


      $data=array(
        'U_Password' => $user['New_Password']);
      $this->db->update('user_master', $data, "U_Id = $id");
      return 1;
      }
          else{
            return 0;
          }

}
public function check_mail($email)
{
   $this->db->select('*');
    $this->db->from('user_master');
    $this->db->where('U_Email',$email);
  
    if($query=$this->db->get())
    {
        return $query->row_array();
    }
    else{
      return false;
    }
}

public function change_pass($md,$id)
{
  $data=array('U_Password'=>$md);
  $this->db->where('U_Id',$id);
   $this->db->update('user_master',$data);
}
public function check($user)
{
  $this->db->insert('checkout',$user);
  
}
public function user_search($search_book) 
{
   $this->db->select('*');
  $this->db->from('category_product_master');
  $this->db->like('CP_Name',$search_book);
//$this->db->join('product_images', 'product_images.CP_Id = category_product_master.CP_Id');
//$this->db->join('product_belongs', 'product_belongs.CP_Id = category_product_master.CP_Id');
  $this->db->where('CP_Display',true);
 
  
 $this->db->or_like('CP_Description',$search_book);
  $this->db->or_like('CP_Prize',$search_book);
  $query=$this->db->get();
  return $query->result_array();


}
 /*public function record_count() {

       return $this->db->count_all("category_product_master");
   }
   public function fetch_departments($limit, $start,$id) {
$this->db->select('category_product_master.*');
  $this->db->select('product_images.*');
  $this->db->select('product_belongs.*');
  $this->db->from('category_product_master,product_belongs,product_images');
  $this->db->where('product_belongs.C_Id',$id);
  $this->db->where('category_product_master.CP_Display',true);
  $this->db->limit($limit, $start);
  $where='category_product_master.CP_Id=product_belongs.CP_Id AND product_images.CP_Id=product_belongs.CP_Id';
  $this->db->where($where);
  //$img=$this->db->get();
  //return $img->result_array();

       
       $query = $this->db->get();
       if ($query->num_rows() > 0) {
           foreach ($query->result() as $row) {
               $data[] = $row;
           }
           return $data;
       }
       return false;
   }*/
}
