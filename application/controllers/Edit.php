<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends MY_Controller {

    function __construct()
    {
        parent:: __construct();
        $this->redirectIfNotLoggedIn();
        $this->load->model('GetModel','fetch');
        $this->load->model('EditModel','edit');
        $this->load->model('AddModel','add');
        $this->load->model('DeleteModel','delete');
    }

    public function Header_images($name){
        if($_FILES['img']['name']!=null){
            $path ='assets/images/';
            $initialize = array(
                "upload_path" => $path,
                "allowed_types" => "*",
                "remove_spaces" => TRUE,
                "max_size" => 1200,
                "overwrite" => true,
                'file_name' => $name.'.jpg'
            );
            $this->load->library('upload', $initialize);
            if (!$this->upload->do_upload('img')) {
                $this->session->set_flashdata('failed',trim(strip_tags($this->upload->display_errors())) );
                redirect('Admin/Header_images');
            } 
            else {
                $this->session->set_flashdata('success',"Image updated" );
                redirect('Admin/Header_images');
            }
        }
        else{
            $this->session->set_flashdata('failed','No file selected' );
            redirect('Admin/Header_images');
        }
    }

    public function Youtube($id)
    {
        $data=$this->input->post();
        $status= $this->edit->updateInfo($data, $id, 'video');
        if($status){
            $this->session->set_flashdata('success','Video link Updated !');
            redirect('Admin/Youtube');
        }
        else{
            $this->session->set_flashdata('failed','Error !');
            redirect('Admin/Youtube');
        }
    }

    public function Policies($id)
    {
        $data=$this->input->post();
        $status= $this->edit->updateInfo($data, $id, 'policies');
        if($status){
            $this->session->set_flashdata('success','Policy Updated !');
            redirect('Admin/Policies');
        }
        else{
            $this->session->set_flashdata('failed','Error !');
            redirect('Admin/Policies');
        }
    }

    public function Reports($id)
    {
            $data= $this->fetch->getInfoById($id,'reports');
            $this->load->view('admin/adminheader',['title'=>'Edit Report', 'submit'=>base_url('Edit/updateReports/').$id,'data' => $data]); 
            $this->load->view('admin/adminaside'); 
            $this->load->view('admin/reports-form'); 
            $this->load->view('admin/adminfooter');  
    }

    public function updateReports($id)
    {
        $path=$path2="";
        $data=$this->input->post();
        $this->load->library('upload');
        if ($_FILES['img']['name'] != null) {
            $path = 'assets/images';
            $initialize = array(
                "upload_path" => $path,
                "allowed_types" => "jpg|jpeg|png|bmp|webp",
                "remove_spaces" => TRUE,
                "max_size" => 600
            );
            $this->load->library('upload');
            $this->upload->initialize($initialize);
            if (!$this->upload->do_upload('img')) {
                $this->session->set_flashdata('failed', trim(strip_tags($this->upload->display_errors())));
                redirect('Admin/Reports');
            } else {
                $imgdata = $this->upload->data();
                $imagename = $imgdata['file_name'];
                $data['thumb'] = $imagename;
                $d= $this->fetch->getInfoById($id,'reports');
                $path2= 'assets/images/'.$d->thumb ;
            }
        }
        if($_FILES['pdf']['name']!=null){
            $path ='assets/reports';
            $initialize = array(
                "upload_path" => $path,
                "allowed_types" => "pdf|doc|docx|xls|xlsx",
                "remove_spaces" => TRUE,
                "max_size" => 35000
            );
            $this->upload->initialize($initialize);
            if (!$this->upload->do_upload('pdf')) {
                $this->session->set_flashdata('failed',trim(strip_tags($this->upload->display_errors())) );
                redirect('Admin/Reports');
            }
            else {
                $imgdata = $this->upload->data();
                $imagename = $imgdata['file_name'];
                $data['pdf_url ']=$imagename;
                $d= $this->fetch->getInfoById($id,'reports');
                $path= 'assets/reports/'.$d->pdf_url ;
            } 
        } 

        $data['featured'] = isset($data['featured']) ? 1 : 0;
        $status= $this->edit->updateInfo($data, $id, 'reports');
        if($status==true){
            if($path!=""){
                unlink($path);
            }
            if($path2!=""){
                unlink($path2);
            }
            $this->session->set_flashdata('success','Report updated !' );
            redirect('Admin/Reports');
        }
        else{
            $this->session->set_flashdata('failed','Error !');
            redirect('Admin/Reports');
        }
    }

    public function News($id)
    {
            $data= $this->fetch->getInfoById($id,'news');
            $this->load->view('admin/adminheader',['title'=>'Edit News', 'submit'=>base_url('Edit/updateNews/').$data->id,'data' => $data]); 
            $this->load->view('admin/adminaside'); 
            $this->load->view('admin/news-form'); 
            $this->load->view('admin/adminfooter');  
    }

    public function updateNews($id)
    {
        $path="";
        $data=$this->input->post();
        $data['tags']=implode('|',$data['tags']);
        $data['featured'] = isset($data['featured']) ? 1 : 0;
        $this->load->library('upload');
        if($_FILES['img']['name']!=null){
            $path ='assets/images';
            $initialize = array(
                "upload_path" => $path,
                "allowed_types" => "jpg|jpeg|png|bmp|webp",
                "remove_spaces" => TRUE,
                "max_size" => 350
            );
            $this->upload->initialize($initialize);
            if (!$this->upload->do_upload('img')) {
                $this->session->set_flashdata('failed',trim(strip_tags($this->upload->display_errors())) );
                redirect('Edit/News');
            }
            else {
                $imgdata = $this->upload->data();
                $imagename = $imgdata['file_name'];
                $data['img_src']=$imagename;
                $d= $this->fetch->getInfoById($id,'news');
                $path= 'assets/images/'.$d->img_src;
            } 
        } 

        $status= $this->edit->updateInfo($data, $id, 'news');
        if($status==true){
            if($path!=""){
                unlink($path);
            }
            $this->session->set_flashdata('success','News updated !' );
            redirect('Admin/News');
        }
        else{
            $this->session->set_flashdata('failed','Error !');
            redirect('Edit/News');
        }
    }

    public function Products($id)
    {
            $data= $this->fetch->getInfoById($id,'products');
            $this->load->view('admin/adminheader',['title'=>'Edit Product', 'submit'=>base_url('Edit/updateProducts/').$data->id,'data' => $data]); 
            $this->load->view('admin/adminaside'); 
            $this->load->view('admin/products-form'); 
            $this->load->view('admin/adminfooter');  
    }

    public function updateProducts($id)
    {
        $path="";
        $data=$this->input->post();
        $data['tags']=implode('|',$data['tags']);
        $this->load->library('upload');
        if($_FILES['img']['name']!=null){
            $path ='assets/images';
            $initialize = array(
                "upload_path" => $path,
                "allowed_types" => "jpg|jpeg|png|bmp|webp",
                "remove_spaces" => TRUE,
                "max_size" => 3500
            );
            $this->upload->initialize($initialize);
            if (!$this->upload->do_upload('img')) {
                $this->session->set_flashdata('failed',trim(strip_tags($this->upload->display_errors())) );
                redirect('Edit/Products');
            }
            else {
                $imgdata = $this->upload->data();
                $imagename = $imgdata['file_name'];
                $data['img_src']=$imagename;
                $d= $this->fetch->getInfoById($id,'products');
                $path= 'assets/images/'.$d->img_src;
            } 
        } 

        $status= $this->edit->updateInfo($data, $id, 'products');
        if($status==true){
            if($path!=""){
                unlink($path);
            }
            $this->session->set_flashdata('success','Product updated !' );
            redirect('Admin/Products');
        }
        else{
            $this->session->set_flashdata('failed','Error !');
            redirect('Edit/Products');
        }
    }

    public function HeroSlider($id)
    {
        $path="";
        $data=$this->input->post();
        $this->load->library('upload');
        if($_FILES['img']['name']!=null){
            $path ='assets/images';
            $initialize = array(
                "upload_path" => $path,
                "allowed_types" => "jpg|jpeg|png|bmp|webp",
                "remove_spaces" => TRUE,
                "max_size" => 2000
            );
            $this->upload->initialize($initialize);
            if (!$this->upload->do_upload('img')) {
                $this->session->set_flashdata('failed',trim(strip_tags($this->upload->display_errors())) );
                redirect('Admin/HeroSLider');
            }
            else {
                $imgdata = $this->upload->data();
                $imagename = $imgdata['file_name'];
                $data['img_src']=$imagename;
                $d= $this->fetch->getInfoById($id,'hero_slider');
                $path= 'assets/images/'.$d->img_src;
            } 
        } 
        $status= $this->edit->updateInfo($data, $id, 'hero_slider');
        if($status==true){
            if($path!=""){
                unlink($path);
            }
            $this->session->set_flashdata('success','Hero slider updated !' );
            redirect('Admin/HeroSLider');
        }
        else{
            $this->session->set_flashdata('failed','Error !');
            redirect('Admin/HeroSLider');
        }
    }

    public function Directors($id)
    {
        $path="";
        $data=$this->input->post();
        $this->load->library('upload');
        if($_FILES['img']['name']!=null){
            $path ='assets/images';
            $initialize = array(
                "upload_path" => $path,
                "allowed_types" => "jpg|jpeg|png|bmp|webp",
                "remove_spaces" => TRUE,
                "max_size" => 2000
            );
            $this->upload->initialize($initialize);
            if (!$this->upload->do_upload('img')) {
                $this->session->set_flashdata('failed',trim(strip_tags($this->upload->display_errors())) );
                redirect('Admin/Directors');
            }
            else {
                $imgdata = $this->upload->data();
                $imagename = $imgdata['file_name'];
                $data['img_src']=$imagename;
                $d= $this->fetch->getInfoById($id,'directors');
                $path= 'assets/images/'.$d->img_src;
            } 
        } 
        $status= $this->edit->updateInfo($data, $id, 'directors');
        if($status==true){
            if($path!=""){
                unlink($path);
            }
            $this->session->set_flashdata('success','Director updated !' );
            redirect('Admin/Directors');
        }
        else{
            $this->session->set_flashdata('failed','Error !');
            redirect('Admin/Directors');
        }
    }

    public function Clientele($id)
    {
        $path="";
        $data=$this->input->post();
        $this->load->library('upload');
        if($_FILES['img']['name']!=null){
            $path ='assets/images';
            $initialize = array(
                "upload_path" => $path,
                "allowed_types" => "jpg|jpeg|png|bmp|webp",
                "remove_spaces" => TRUE,
                "max_size" => 2000
            );
            $this->upload->initialize($initialize);
            if (!$this->upload->do_upload('img')) {
                $this->session->set_flashdata('failed',trim(strip_tags($this->upload->display_errors())) );
                redirect('Admin/Clientele');
            }
            else {
                $imgdata = $this->upload->data();
                $imagename = $imgdata['file_name'];
                $data['img_src']=$imagename;
                $d= $this->fetch->getInfoById($id,'clients');
                $path= 'assets/images/'.$d->img_src;
            } 
        } 
        $status= $this->edit->updateInfo($data, $id, 'clients');
        if($status==true){
            if($path!=""){
                unlink($path);
            }
            $this->session->set_flashdata('success','Client updated !' );
            redirect('Admin/Clientele');
        }
        else{
            $this->session->set_flashdata('failed','Error !');
            redirect('Admin/Clientele');
        }
    }

    public function Counter($id)
    {
        $data=$this->input->post();
        $status= $this->edit->updateInfo($data, $id, 'counters');
        if($status==true){
            $this->session->set_flashdata('success','Counter Updated !');
            redirect('Admin/Counters');
        }
        else{
            $this->session->set_flashdata('failed','Error !');
            redirect('Admin/Counters');
        }
    }

    public function Content($id, $page_uri)
    {
        $data=$this->input->post();
        $status= $this->edit->updateInfo($data, $id, 'contents');
        if($status==true){
            $this->session->set_flashdata('success','Content Updated !');
            redirect('Admin/Content/'.$page_uri);
        }
        else{
            $this->session->set_flashdata('failed','Error !');
            redirect('Admin/Content/'.$page_uri);
        }
    }

    public function Feedback($id)
    {
        $data=$this->input->post();
        $status= $this->edit->updateInfo($data, $id, 'feedbacks');
        if($status){
            $this->session->set_flashdata('success','Feedback Updated !');
            redirect('Admin/Feedbacks');
        }
        else{
            $this->session->set_flashdata('failed','Error !');
            redirect('Admin/Feedbacks');
        }
    }

    public function webProfile()
    {
        $data=$this->input->post();
        $status= $this->edit->updateWebProfile($data);

        if($status){
            $this->session->set_flashdata('success','Web Profile Updated !');
            redirect('Admin/webProfile');
        }
        else{
            $this->session->set_flashdata('failed','Error !');
            redirect('Admin/webProfile');
        }
    }

    public function Career($id)
    {
        $data=$this->input->post();
        // echo '<pre>'; var_dump($data); exit;
        $status= $this->edit->updateCareer($data, $id, 'careers');
        
        if($status==true){
            $this->session->set_flashdata('success','Career Updated !');
            redirect('Admin/Careers');
        }
        else{
            $this->session->set_flashdata('failed','Error !');
            redirect('Admin/Careers');
        }
    }

    public function enqStatus($id)
    {
        $status= $this->edit->updateEnqStatus($id);
        if($status){
            redirect('Admin');
        }
        else{
            redirect('Admin');
        }
    }

    public function adminProfile($id)
    {
        $data=$this->input->post();
        $status= $this->edit->updateAdminProfile($data,$id);
        $user=$this->fetch->getAdminProfile();
        $this->session->set_userdata(['user' =>  $user]);

        if($status){
            $this->session->set_flashdata('success','Admin Panel Profile Updated !');
            redirect('Admin/adminProfile');
        }
        else{
            $this->session->set_flashdata('failed','Error !');
            redirect('Admin/adminProfile');
        }
    }
    
    function generate_url_slug($string,$table,$field='slug',$key=NULL,$value=NULL){
        $t =& get_instance();
        $slug = url_title($string);
        $slug = strtolower($slug);
        $i = 0;
        $params = array ();
        $params[$field] = $slug;
        if($key)$params["$key !="] = $value; 
        while ($t->db->where($params)->get($table)->num_rows())
        {
            if (!preg_match ('/-{1}[0-9]+$/', $slug )){
                $slug .= '-' . ++$i;
            }
            else{
                $slug = preg_replace ('/[0-9]+$/', ++$i, $slug );
            }
            $params [$field] = $slug;
        }
            return $slug;
    }




















}
