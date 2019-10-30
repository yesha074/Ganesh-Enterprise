<?php

class Admin extends CI_Controller {

public function __construct(){

        parent::__construct();
  			$this->load->helper('url');
  	 		$this->load->model('admin_model');
            $this->load->library('session');

}
public function index(){
		
		$id=$this->session->userdata('U_Id');
		if(empty($id))
		{
			redirect(base_url().'admin/login_view');
		}
		$this->load->view('back/header');
    $this->load->view('back/carousels');
		$this->load->view('back/index');
		
}

public function forms()
{

  $data['cat']=$this->admin_model->fetch_cat();

  $this->load->view('back/header');
  $this->load->view('back/forms',$data);
  $this->load->view('back/index');
}
public function addcategory()
{

  $data['cat']=$this->admin_model->fetch_cat();

  $this->load->view('back/header');
  $this->load->view('back/addcat',$data);
  $this->load->view('back/index');
}
 public function insert_categories()
{
          $user=array(
            'C_Name'=>$this->input->post('C_Name'),
    'C_Description'=>$this->input->post('C_Description'),
      'C_Parent_Id'=>$this->input->post('C_Parent_Id'),
        );
         
     $C_Id=$this->input->post('C_Id');
        $data=$this->admin_model->insert_categories($user,$C_Id);
        redirect(base_url()."admin/addcategory");
    
 }
public function displaycategory()
{

  $data['cat']=$this->admin_model->display_cat();

  $this->load->view('back/header');
  $this->load->view('back/displaycat',$data);
  $this->load->view('back/index');
}
public function displayuser()
{

  $data['user']=$this->admin_model->display_user();

  $this->load->view('back/header');
  $this->load->view('back/customers',$data);
  $this->load->view('back/index');
}
/*public function edit_product()
{
  $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['category_product_master']=$this->admin_model->editmodel($id);
        $this->form_validation->set_rules('title','Title','required');
        $this->form_validation->set_rules('text','Text','required');
        if($this->form_validation->run()==FALSE)
        {
          $this->load->view('back/header');
          $this->load->view('back/editproducts',$data);
          $this->load->view('back/index');
        }
        else
        {
          $this->admin_model->setdata($id);
          $this->load->view('back/editproducts');
        }
}*/
public function edit_product()
{
  $id=$this->uri->segment('3');
$data['i']= $this->admin_model->edit($id); 
  $data['cat']=$this->admin_model->fetch_cat();


  $this->load->view('back/header');
  $this->load->view('back/editproducts',$data);
  $this->load->view('back/index');
}
public function update()
{
  $config['upload_path']          = './products_img/';
  $config['allowed_types']        = 'gif|jpg|jpeg|png|pdf|doc';
  $config['max_size']             = 100000;
  $config['max_width']            = 130000;
  $config['max_height']           = 102400;

  $this->load->url('helper');
  $this->load->library('upload', $config);
  $this->load->library('form_validation');

  if ( ! $this->upload->do_upload('Product_Image'))
  {
      
    $this->form_validation->set_error_delimiters('<p class="error">', '</p>');

    $error = array('error' => $this->upload->display_errors());

    $this->load->view('editproducts', $error);
  }
  else
  {
    $img=$this->upload->data('file_name');
          $user=array('Product_Image' => $img,
          'C_Id'=>$this->input->post('C_Id'),
      'C_Parent_Id'=>$this->input->post('C_Parent_Id'),
      'CP_Name'=>$this->input->post('CP_Name'),
    'CP_Description'=>$this->input->post('CP_Description'),
      'CP_Size'=>$this->input->post('CP_Size'),
    'CP_Old_Prize'=>$this->input->post('CP_Old_Prize'),
    'CP_Prize'=>$this->input->post('CP_Prize'),
      'CP_Display'=>$this->input->post('CP_Display'),    
        );
         
     $CP_Id=$this->input->post('CP_Id');
        $data=$this->admin_model->update($user,$CP_Id);
        redirect(base_url()."admin/forms");
 
      }
}
public function product()
{

  $data['product']=$this->admin_model->fetch_product();

  $this->load->view('back/header');
  $this->load->view('back/product',$data);
  $this->load->view('back/index');
}
  public function insert_products()
{
 $config['upload_path']          = './products_img/';
  $config['allowed_types']        = 'gif|jpg|jpeg|png|pdf|doc';
  $config['max_size']             = 100000;
  $config['max_width']            = 130000;
  $config['max_height']           = 102400;

  $this->load->library('upload', $config);

  if ( ! $this->upload->do_upload('Product_Image'))
  {
      
    $this->form_validation->set_error_delimiters('<p class="error">', '</p>');

    $error = array('error' => $this->upload->display_errors());

    $this->load->view('forms', $error);
  }
  else
  {
    $img=$this->upload->data('file_name');
          $user=array('Product_Image' => $img,
          'C_Id'=>$this->input->post('C_Id'),
      'C_Parent_Id'=>$this->input->post('C_Parent_Id'),
      'CP_Name'=>$this->input->post('CP_Name'),
    'CP_Description'=>$this->input->post('CP_Description'),
      'CP_Size'=>$this->input->post('CP_Size'),
    'CP_Old_Prize'=>$this->input->post('CP_Old_Prize'),
    'CP_Prize'=>$this->input->post('CP_Prize'),
      'CP_Display'=>$this->input->post('CP_Display'),    
        );
         
     $CP_Id=$this->input->post('CP_Id');
        $data=$this->admin_model->insert_products($user,$CP_Id);
        redirect(base_url()."admin/forms");
      }
 }
public function images()
{
  $config['upload_path']          = './products_img/';
  $config['allowed_types']        = 'gif|jpg|jpeg|png|pdf|doc';
  $config['max_size']             = 100000;
  $config['max_width']            = 130000;
  $config['max_height']           = 102400;

  $this->load->library('upload', $config);

  if ( ! $this->upload->do_upload('Product_Image'))
  {
      
    $this->form_validation->set_error_delimiters('<p class="error">', '</p>');

    $error = array('error' => $this->upload->display_errors());

    $this->load->view('forms', $error);
  }
  else
  {
    $img=$this->upload->data('file_name');
    
  
}
}
public function login_view(){


	$this->load->view("back/login.php");

}

function login_user(){
  $user_login=array(

  'U_Username'=>$this->input->post('U_Username'),
  'U_Password'=>md5($this->input->post('U_Password'))

    );

    $data=$this->admin_model->login_user($user_login['U_Username'],$user_login['U_Password']);
      if($data)
      {
        $this->session->set_userdata('U_Id',$data['U_Id']);
		$this->session->set_userdata('U_Username',$data['U_Username']);
        $this->session->set_userdata('U_Password',$data['U_Password']);
		

        redirect(base_url().'admin/index');

      }
      else{
        $this->session->set_flashdata('error_msga', 'Incorrect Username or Password,Try again');
        redirect(base_url().'admin/login_view');
      }


}


public function user_logout(){

  $this->session->sess_destroy();
   redirect(base_url().'admin/login_view','refresh');

}

}



