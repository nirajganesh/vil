<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

        function __construct(){
                parent:: __construct();
                $this->load->model('GetModel','fetch');
                $this->redirectIfNotLoggedIn();
        }

        public function index()
        {
                $enq=$this->fetch->getInfo('enquiries');
                $this->load->view('admin/adminheader',['title'=>'Enquiries','enq'=>$enq]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/dashboard'); 
                $this->load->view('admin/adminfooter');  
        }

        public function Header_images()
        {
                $this->load->view('admin/adminheader',['title'=>'Header images']); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/header_images'); 
                $this->load->view('admin/adminfooter');  
        }

        public function HeroSlider()
        {
                $data=$this->fetch->getInfo('hero_slider');
                $this->load->view('admin/adminheader',['title'=>'Hero Slider','data' => $data]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/hero_sliders'); 
                $this->load->view('admin/adminfooter');  
        }

        public function Content($page_uri)
        {
                $data=$this->fetch->getInfoType('contents', 'page_uri', $page_uri)[0];
                $this->load->view('admin/adminheader',['title'=>'Content','data' => $data]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/content-form'); 
                $this->load->view('admin/adminfooter');  
        }

        public function Directors()
        {
                $data=$this->fetch->getInfo('directors');
                $this->load->view('admin/adminheader',['title'=>'Board of directors','data' => $data]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/directors'); 
                $this->load->view('admin/adminfooter');  
        }

        public function Clientele()
        {
                $data=$this->fetch->getInfo('clients');
                $this->load->view('admin/adminheader',['title'=>'Clientele','data' => $data]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/clients'); 
                $this->load->view('admin/adminfooter');  
        }

        public function Reports()
        {
                $data=$this->fetch->getInfo('reports');
                $this->load->view('admin/adminheader',['title'=>'Reports','data' => $data]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/reports'); 
                $this->load->view('admin/adminfooter');  
        }

        public function Policies()
        {
                $data=$this->fetch->getInfo('policies');
                $this->load->view('admin/adminheader',['title'=>'Policies','data' => $data]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/policies'); 
                $this->load->view('admin/adminfooter');  
        }

        public function News()
        {
                $data=$this->fetch->getInfo('news');
                $this->load->view('admin/adminheader',['title'=>'Latest News','data' => $data]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/news'); 
                $this->load->view('admin/adminfooter');  
        }

        public function Products()
        {
                $data=$this->fetch->getInfo('products');
                $this->load->view('admin/adminheader',['title'=>'Product Management','data' => $data]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/products'); 
                $this->load->view('admin/adminfooter');  
        }

        public function Careers()
        {
                $careers=$this->fetch->getInfo('careers');
                $this->load->view('admin/adminheader', ['title'=>'Careers','careers' => $careers]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/adminCareers'); 
                $this->load->view('admin/adminfooter');  
        }

        public function Applications()
        {
                $apps=$this->fetch->getInfo('applications');
                $this->load->view('admin/adminheader', ['title'=>'Job applications','apps' => $apps]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/adminApplications'); 
                $this->load->view('admin/adminfooter');  
        }

        
        // public function Counters()
        // {
        //         $data=$this->fetch->getInfo('counters');
        //         $this->load->view('admin/adminheader',['title'=>'Counters','data' => $data]); 
        //         $this->load->view('admin/adminaside'); 
        //         $this->load->view('admin/counters'); 
        //         $this->load->view('admin/adminfooter');  
        // }

        // public function Feedcks()
        // {
        //         $data=$this->fetch->getInfo('feedbacks');
        //         $this->load->view('admin/adminheader', ['title'=>'Feedbacks','data' => $data]); 
        //         $this->load->view('admin/adminaside'); 
        //         $this->load->view('admin/feedbacks'); 
        //         $this->load->view('admin/adminfooter');  
        // }

        // public function Subscriptions()
        // {
        //         $data=$this->fetch->getInfo('subscriptions');
        //         $this->load->view('admin/adminheader',['title'=>'Subscriptions','data' => $data]); 
        //         $this->load->view('admin/adminaside'); 
        //         $this->load->view('admin/subscriptions'); 
        //         $this->load->view('admin/adminfooter');  
        // }


        public function webProfile()
        {
                $profile=$this->fetch->getWebProfile();
                $this->load->view('admin/adminheader', ['title'=>'Web profile','profile' => $profile]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/webProfile'); 
                $this->load->view('admin/adminfooter');  
        }

        public function adminProfile()
        {
                $admProfile=$this->fetch->getAdminProfile();
                $this->load->view('admin/adminheader', ['title'=>'Admin Profile','admProfile' => $admProfile]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/adminProfile'); 
                $this->load->view('admin/adminfooter');  
        }

        public function rootLogin()
        {
                if($this->input->post('p')===TXN_PWD){
                        $this->session->set_userdata(['root' => 'root']);  
                        redirect('Admin/rootFileUpload',['title'=>'Admin Root']);
                }
                else{
                        redirect('Admin');
                }
        }

        public function rootFileUpload()
        {
                $this->load->view('admin/adminheader',['title'=>'Root Upload']); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/rootUpload'); 
                $this->load->view('admin/adminfooter');  
        }

        public function processRootUpload()
        {
                if($_FILES['file']['name']!=null){
                        $path = $this->input->post('path');
                        $initialize = array(
                                "upload_path" => $path,
                                "allowed_types" => "*",
                                "overwrite" => true
                        );
                        $this->load->library('upload', $initialize);
                        if (!$this->upload->do_upload('file')) {
                                $this->session->set_flashdata('failed',trim(strip_tags($this->upload->display_errors())) );
                                redirect('Admin/rootFileUpload');
                        }
                        else {
                                $this->session->set_flashdata('success','Uploaded !' );
                                redirect('Admin/rootFileUpload');
                        } 
                }
                else{
                        $this->session->set_flashdata('failed','No file selected !');
                        redirect('Admin/rootFileUpload');
                }
        }

        public function processRootNewFolder()
        {
                $path = $this->input->post('path');
                $folder = $this->input->post('folder');
                if(!file_exists($path.$folder)){
                    if(mkdir($path.$folder)){
                        $this->session->set_flashdata('success','Created !');
                        redirect('Admin/rootFileUpload');
                    }
                    else{
                        $this->session->set_flashdata('failed','Error !');
                        redirect('Admin/rootFileUpload');
                    }
                }
                else{
                        $this->session->set_flashdata('failed','Already exists');
                        redirect('Admin/rootFileUpload');
                }
        }
        
        public function Extract()
        {
                if(!empty($_FILES['file']['name'])){ 
                     $config['upload_path'] = './'; 
                     $config['allowed_types'] = 'zip'; 
           
                     $this->load->library('upload',$config); 
                     if($this->upload->do_upload('file')){ 
                        $uploadData = $this->upload->data(); 
                        $filename = $uploadData['file_name'];
           
                        $zip = new ZipArchive;
                        $res = $zip->open("./".$filename);
                        if ($res === TRUE) {
                          $extractpath = $this->input->post('path');
                          $zip->extractTo($extractpath);
                          $zip->close();
                          unlink('./'.$filename);
                          $this->session->set_flashdata('success','Upload & Extract successful.');
                          redirect('Admin/rootFileUpload');
                        }
                        else {
                          $this->session->set_flashdata('failed','Failed to extract !');
                          redirect('Admin/rootFileUpload');
                        }
                        
                    }
                    else{ 
                       $this->session->set_flashdata('failed','Failed to upload !');
                       redirect('Admin/rootFileUpload');
                    } 
                }
                else{ 
                    $this->session->set_flashdata('failed','No file selected for uploading!');
                    redirect('Admin/rootFileUpload');
                } 
           
        }

        public function rootDownload()
        {
                $path=$this->input->post('path');
                $dirPath=$this->input->post('dirPath');
                if($path!=''){
                        $path=$this->input->post('path');
                        $this->load->helper('download');
                        if(force_download($path, NULL)){
                                $this->session->set_flashdata('success','File download initiated !');
                                redirect('Admin/rootFileUpload');
                        }
                        else{
                                $this->session->set_flashdata('failed','Error !');
                                redirect('Admin/rootFileUpload');
                        }
                }
                if($dirPath!=''){
                        $this->load->library('zip');
                        $filename = "backupz.zip";
                        $this->zip->read_dir($dirPath);
                        $this->zip->archive($filename);
                        if($this->zip->download($filename)){
                                $this->session->set_flashdata('success','Zip download initiated !');
                                redirect('Admin/rootFileUpload');
                        }
                        else{
                                $this->session->set_flashdata('failed','Error !');
                                redirect('Admin/rootFileUpload');
                        }
                }
                $this->session->set_flashdata('failed','No path given !');
                redirect('Admin/rootFileUpload');
        }

        public function dbDownload()
        {
                $this->load->dbutil();
                $prefs = array(     
                        'format'      => 'zip',             
                        'filename'    => 'my_db_backup.sql'
                );
                $backup =& $this->dbutil->backup($prefs); 
                $db_name = 'backup-on-'. date("Y-m-d-H-i-s") .'.zip';
                // $save = 'assets/'.$db_name;
                $this->load->helper('file');
                write_file($save, $backup); 
                $this->load->helper('download');
                force_download($db_name, $backup); 
        }

        public function delBackupz(){
                if(unlink('backupz.zip')){
                        $this->session->set_flashdata('success','Backupz.zip deleted !');
                        redirect('Admin/rootFileUpload');
                }
                else{
                        $this->session->set_flashdata('failed','Error !');
                        redirect('Admin/rootFileUpload');
                }
        }

        public function rootUploadOff()
        {
                $this->session->unset_userdata(['root']);
                redirect('Admin');
        }

}
