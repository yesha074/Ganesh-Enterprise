<?php

class Project extends CI_Controller {

public function __construct(){

        parent::__construct();
  			$this->load->helper('url');
  	 		$this->load->model('project_model');
            $this->load->library('session');
            $this->load->library('pagination');

}
public function index(){
	$data1['category_product_master']=$this->project_model->show_cart();
	$data2['data']=$this->project_model->fetch_imgs();
		$this->load->view('front/header',$data1);
		$this->load->view('front/index',$data2);
		$this->load->view('front/footer');
}
public function contactus()
{
	$data1['category_product_master']=$this->project_model->show_cart();
	$this->load->view('front/header',$data1);
		$this->load->view('front/contact');
		$this->load->view('front/footer');
}
public function aboutus()
{
	$data1['category_product_master']=$this->project_model->show_cart();
	$this->load->view('front/header',$data1);
		$this->load->view('front/about');
		$this->load->view('front/footer');
}
public function myaccount()
{
	$data1['category_product_master']=$this->project_model->show_cart();
	$id=$this->session->userdata('U_Id');
$data['i']= $this->project_model->loadimg($id);	

		if(empty($id))
		{
			redirect(base_url().'project/signin');
		}
	$this->load->view('front/header',$data1);
		$this->load->view('front/my-account',$data);
		$this->load->view('front/footer');
}
public function signin(){
	$data1['category_product_master']=$this->project_model->show_cart();
		$this->load->view('front/header',$data1);
		$this->load->view('front/login-register');
		$this->load->view('front/footer');
}
public function register_user()
{
	
	$config['upload_path']          = './uploads/';
	$config['allowed_types']        = 'gif|jpg|jpeg|png|pdf|doc';
	$config['max_size']             = 100000;
	$config['max_width']            = 130000;
	$config['max_height']           = 102400;

	$this->load->library('upload', $config);

	if ( ! $this->upload->do_upload('U_Image'))
	{
			
		$this->form_validation->set_error_delimiters('<p class="error">', '</p>');

		$error = array('error' => $this->upload->display_errors());
		$this->load->view('signin', $error);
	}
	else
	{
		$img=$this->upload->data('file_name');
		
		 $user=array('U_Image' => $img,
      'U_Name'=>$this->input->post('U_Name'),
	  'U_Address'=>$this->input->post('U_Address'),
      'U_Mobile'=>$this->input->post('U_Mobile'),
	  'U_Email'=>$this->input->post('U_Email'),
	  'U_Username'=>$this->input->post('U_Username'),
      'U_Password'=>md5($this->input->post('U_Password')),
      'U_Type'=>$this->input->post('U_Type'),
	  'U_Block'=>$this->input->post('U_Block')
        );
        

if($user){
  $this->project_model->register_user($user);
  $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
  redirect(base_url().'project/signin');

}
else{

  $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
  redirect(base_url().'project/signin');


}
	}
     

}

public function login_view(){

$this->load->view("project/login-register.php");

}

public function login_user(){
  $user_login=array(

  'U_Username'=>$this->input->post('U_Username'),
  'U_Password'=>md5($this->input->post('U_Password'))

    );

    $data=$this->project_model->login_user($user_login['U_Username'],$user_login['U_Password']);
	
      if($data)
      {
        $this->session->set_userdata('U_Id',$data['U_Id']);
        $this->session->set_userdata('U_Name',$data['U_Name']);
        $this->session->set_userdata('U_Address',$data['U_Address']);
		$this->session->set_userdata('U_Mobile',$data['U_Mobile']);
        $this->session->set_userdata('U_Email',$data['U_Email']);
		$this->session->set_userdata('U_Username',$data['U_Username']);
		$this->session->set_userdata('U_Password',$data['U_Password']);
		$this->session->set_userdata('U_Type',$data['U_Type']);
		$this->session->set_userdata('U_Image',$data['U_Image']);
		$this->session->set_userdata('U_Block',$data['U_Block']);
		
		
		
		

        redirect(base_url().'project/index');

      }
      else{
        $this->session->set_flashdata('error_msga', 'Incorrect Username or Password,Try again');
        redirect(base_url().'project/signin');
      }


}

public function user_logout(){

  $this->session->sess_destroy();
   redirect(base_url().'project/signin','refresh');

}
/*public function furniture(){
	$data1['category_product_master']=$this->project_model->show_cart();
	$id=$this->uri->segment(3);
	$data['category_master']=$this->project_model->fetch_scat($id);
	$data1['category_master']=$this->project_model->fetch_subcat($id);
		
		$this->load->view('front/header',$data1);
		$this->load->view('front/shop',$data);
		$this->load->view('front/footer');
}*/
public function shop(){
	$data1['category_product_master']=$this->project_model->show_cart();
	$id=$this->uri->segment(3);
	$data2['data']=$this->project_model->fetch_products($id);
	//$data2['data']=$this->project_model->fetch_products_sub($id);
		$this->load->view('front/header',$data1);
		$this->load->view('front/shop',$data2);
		$this->load->view('front/footer');
}
public function shopp(){
	$data1['category_product_master']=$this->project_model->show_cart();
	$id=$this->uri->segment(3);
	$data2['data']=$this->project_model->fetch_products_sub($id);
		$this->load->view('front/header',$data1);
		$this->load->view('front/shop',$data2);
		$this->load->view('front/footer');
}
public function singleproduct()
{
	$data1['category_product_master']=$this->project_model->show_cart();
	   $id=$this->uri->segment(3);
	   $data2['data']=$this->project_model->fetch_single_product($id);
	   $data=$this->project_model->fetch_single_product($id);
	   $C_Id=$data['C_Id'];
	   $data2['related_product']=$this->project_model->related_pro($C_Id);
	    $this->load->view('front/header',$data1);
		$this->load->view('front/single-product',$data2);
		$this->load->view('front/footer');
}
/*public function shopy(){
	$dataid['C_Id'] = $this->project_model->fetch_cat();
	$id=$this->uri->segment(3);
	$data['category_master']=$this->project_model->fetch_scat($id);
	$data2['data']=$this->project_model->fetch_imgs($id);
		$this->load->view('front/header',$dataid);
		$this->load->view('front/shop',$data2);
		$this->load->view('front/footer');
}*/
public function fetch_scat()
{
	$view=array(
		'C_Id'=>$this->input->post('C_Id'));

}
public function fetch_pcat()
{
	$view=array(
		'C_Parent_Id'=>$this->input->post('C_Parent_Id'));

}
public function display_maincat()
{
	$datamain['C_Id']=$this->project_model->fetch_maincat();
	$this->load->view('front/header',$datamain);
	$this->load->view('front/index');
	$this->load->view('front/footer');

}
public function display_des()
{
	$data1['data']=$this->project_model->fetch_product();
		$this->load->view('front/header');
		$this->load->view('front/index',$data1);
		$this->load->view('front/footer');
}
public function add_cart()
{
	$data1['category_product_master']=$this->project_model->show_cart();
		$this->load->view('front/header',$data1);
		$this->load->view('front/cart',$data1);
		$this->load->view('front/footer');
}
public function results()
{
	$data1['category_product_master']=$this->project_model->show_cart();
		$this->load->view('front/header',$data1);
		$this->load->view('front/results');
		$this->load->view('front/footer');
}
public function addtocart()
{

	$cart=array('CP_Id'=>$this->input->post('CP_Id'),
				'U_Id'=>$this->session->userdata('U_Id'),
				'Quantity'=>$this->input->post('Quantity'));
	$data=$this->project_model->addcart($cart);

	redirect(base_url().'project/add_cart/'.$cart['CP_Id']);
}
public function addtoorder()
{

	$uid=array('U_Id'=>$this->session->userdata('U_Id'),
		'O_Pcs'=>$this->input->post('qtyt'),
		'O_Total_Amount'=>$this->input->post('total')
	);
		
	$lid=$this->project_model->order($uid);

	$complete=$this->project_model->order_item($lid);

	$user=array(
      'First_Name'=>$this->input->post('Fname'),
      'User_Name'=>$this->input->post('Uname'),
      'Company_Name'=>$this->input->post('Cname'), 
      'Country'=>$this->input->post('Country'),
	  'Street_Address'=>$this->input->post('Address'),
      'City'=>$this->input->post('City'),
	  'State'=>$this->input->post('State'),
	  'Postcode'=>$this->input->post('code'),
	  'Phone'=>$this->input->post('Phone'),
	  'Email'=>$this->input->post('Email'));
	$data=$this->project_model->check($user);

	redirect(base_url('').'project/index/'.$cart['CP_Id']);
}
public function cart()
{
	$data=$this->project_model->show_cart();
}
public function deleted()
{
	$CP_Id=$this->uri->segment(3);
	if(empty($CP_Id))
	{
		show_404();
	}
	$this->project_model->cart_delete($CP_Id);
	redirect(base_url().'project/add_cart/');
}
public function updated()
{
	$cart=array('CP_Id'=>$this->input->post('CP_Id'),
				'Quantity'=>$this->input->post('Quantity'),
				'U_Id'=>$this->session->userdata('U_Id'));
	$data=$this->project_model->cart_update($cart);
	redirect(base_url().'project/add_cart/'.$cart['CP_Id']);
}

public function updateimg()
{	

	$config['upload_path']          = './uploads/';
	$config['allowed_types']        = 'gif|jpg|jpeg|png|pdf|doc';
	$config['max_size']             = 100000;
	$config['max_width']            = 130000;
	$config['max_height']           = 102400;

	$this->load->library('upload', $config);
	$this->load->helper('form');
    $this->load->library('form_validation');
	if (! $this->upload->do_upload('U_Image'))
	{
		$uid=$this->session->userdata('U_Id');
		 $user=array(
      'U_Name'=>$this->input->post('U_Name'),
	  'U_Address'=>$this->input->post('U_Address'),
      'U_Mobile'=>$this->input->post('U_Mobile'),
	  'U_Email'=>$this->input->post('U_Email'),
	  'U_Username'=>$this->input->post('U_Username'),
      
        );
        
  $this->project_model->update($user,$uid);
  $this->session->set_flashdata('success_msg', 'Successfully Updated.');
  redirect(base_url().'project/myaccount');

		
	}
	else
	{

		$img=$this->upload->data('file_name');
		$uid=$this->session->userdata('U_Id');
		 $user=array('U_Image' => $img
        );
        

if($user){
  $this->project_model->update($user,$uid);
  $this->session->set_flashdata('success_msg', 'Successfully Updated.');
  redirect(base_url().'project/myaccount');

}
else{

  $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
  redirect(base_url().'project/myaccount');


}
	}
     

}
 public function updatepass()

{
	$this->load->library('form_validation');
$uid=$this->session->userdata('U_Id');
		 $user=array(
      'Old_Password'=>md5($this->input->post('oldpassword')),
      'New_Password'=>md5($this->input->post('newpassword')),
      'Confirm_Password'=>md5($this->input->post('confirmpassword'))
        );
		 
if($user){
 $update= $this->project_model->updatepass($user,$uid);
 if($update)
 	{
  		$this->session->set_flashdata('success_msg', 'Your Password is Successfully Updated.');
	}
	else if($user['New_Password'] != $user['Confirm_Password'])
{
	$this->session->set_flashdata('success_msg', 'Please, Retype Correct Password.');
	
}
else
{
	$this->session->set_flashdata('success_msg', 'Old Password Does not Match.');
	
}
  redirect(base_url().'project/myaccount');
}



else{

  $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
  redirect(base_url().'project/myaccount');


}
}
public function checkout()
{
	$data1['category_product_master']=$this->project_model->show_cart();
		$this->load->view('front/header',$data1);
		$this->load->view('front/checkout');
		$this->load->view('front/footer');
}



public function forgot_password()
{
	$data1['category_product_master']=$this->project_model->show_cart();
		$this->load->view('front/header',$data1);
		$this->load->view('front/forgot');
		$this->load->view('front/footer');
}

public function forgot()
{

	$email=$this->input->post('Email');

	$check=$this->project_model->check_mail($email);
	if($check)
	{
	$msg = '
		<a href="http://localhost/ganesh_enterprise/project/reset_password/'.$check['U_Id'].'">http://localhost/ganesh_enterprise/project/reset_password/'.$check['U_Id'].'</a>
	';
	
	//Load email library
	$this->load->library('email');

	//SMTP & mail configuration
	$config = array(
		'protocol'  => 'smtp',
		'smtp_host' => 'ssl://smtp.gmail.com',
		'smtp_port' => 465,
		'smtp_user' => 'sapanamathur12@gmail.com',
		'smtp_pass' => 'sapana@12',
		'mailtype'  => 'html',
		'charset'   => 'utf-8'
	);
	$this->email->initialize($config);
	$this->email->set_mailtype("html");
	$this->email->set_newline("\r\n");
	
	$this->email->from('elly@gmail.com');
	$this->email->to($email);

	$this->email->subject('Forgot Password');
	$this->email->message($msg);

	$sendmail=$this->email->send();
	if($sendmail)
	{
    $success = 'Check your mailbox to reset password...';
	$this->session->set_flashdata('success_msg',$success);
	redirect(base_url().'project/forgot_password');
	}
	}
	else
	{
		$error = 'Email Id Not Register...';
		$this->session->set_flashdata('error_msg',$error);
		redirect(base_url().'project/forgot_password');
	}
}

public function reset_password()
{	
	$data1['category_product_master']=$this->project_model->show_cart();
		$this->load->view('front/header',$data1);
		$this->load->view('front/reset_password');
		$this->load->view('front/footer');
}

public function reset_pass()
{
	
	$id=$this->input->post('uid');
	$password=$this->input->post('password');
	$cpassword=$this->input->post('cpassword');
	$md=md5($this->input->post('password'));
	if($password==$cpassword)
	{
		$check=$this->project_model->change_pass($md,$id);

		$success = 'Successfully Changed';
		$this->session->set_flashdata('success_msg',$success);
		redirect(base_url().'project/signin');	
	}
	else
	{
		$error = 'Password Confirm Password Not Match...';
		$this->session->set_flashdata('error_msg',$error);
		redirect(base_url().'project/reset_password');	
	}
}
public function search(){

                            $search_book =$this->input->post('search');
                 $ss =$this->project_model->user_search($search_book);

             $data['searches'] = $ss;
             
           $data1['category_product_master']=$this->project_model->show_cart();
	
		$this->load->view('front/header',$data1);
		
		if(empty($ss))
		{
			$this->load->view('front/search');
		
		}
		else
		{
		$this->load->view('front/search', $data);
			
		}
		$this->load->view('front/footer');

}
/*public function departmentdata() {
	$data1['category_product_master']=$this->project_model->show_cart();
	$id=$this->uri->segment(3);
	//$data['category_master']=$this->project_model->fetch_scat($id);
	//$data2['data']=$this->project_model->fetch_products($id);

		
       $config = array();
       $config["base_url"] = base_url() . "project/departmentdata";
       $config["total_rows"] = $this->project_model->record_count();
       $config["per_page"] = 5;
       $config["uri_segment"] = 3;
       $this->pagination->initialize($config);
       $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
       $data["data"] = $this->project_model->
           fetch_departments($config["per_page"], $page,$id);
       $data["data"] = $this->pagination->create_links();
       //$this->load->view("project/shop", $data);
       $this->load->view('front/header',$data1);
		$this->load->view('front/shop',$data);
		$this->load->view('front/footer');
   }*/

}
