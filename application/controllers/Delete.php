<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends MY_Controller {

    function __construct(){
            parent:: __construct();
            $this->redirectIfNotLoggedIn();
            $this->load->model('GetModel','fetch');
            $this->load->model('DeleteModel','delete');
    }
    
    public function Feedback($id)
    {
        $status= $this->delete->deleteInfo($id, 'feedbacks');
        if($status){
            $this->session->set_flashdata('success','Feedback deleted!');
            redirect('Admin/Feedbacks');
        }
        else{
            $this->session->set_flashdata('failed','Error!');
            redirect('Admin/Feedbacks');
        }
    }

    public function Policies($id)
    {
        $status= $this->delete->deleteInfo($id, 'policies');
        if($status){
            $this->session->set_flashdata('success','Policy deleted!');
            redirect('Admin/Policies');
        }
        else{
            $this->session->set_flashdata('failed','Error!');
            redirect('Admin/Policies');
        }
    }

    public function Reports($id)
    {
        $path="";
        $path2="";
        $res= $this->fetch->getInfoById($id,"reports");
        $path= 'assets/images/'.$res->thumb;
        $path2= 'assets/reports/'.$res->pdf_url;
        $status= $this->delete->deleteInfo($id, 'reports');

        if($status==true){
            if($path!=""){
                unlink($path);
            }
            if($path2!=""){
                unlink($path2);
            }
            $this->session->set_flashdata('success','Report Deleted!');
            redirect('Admin/Reports');
        }
        else{
            $this->session->set_flashdata('failed','Error!');
            redirect('Admin/Reports');
        }
    }

    public function News($id)
    {
        $path="";
        $res= $this->fetch->getInfoById($id,"news");
        $path= 'assets/images/'.$res->img_src;
        $status= $this->delete->deleteInfo($id, 'news');

        if($status==true){
            if($path!=""){
                unlink($path);
            }
            $this->session->set_flashdata('success','News Deleted!');
            redirect('Admin/News');
        }
        else{
            $this->session->set_flashdata('failed','Error!');
            redirect('Admin/News');
        }
    }

    public function Enquiry($id)
    {
        $status= $this->delete->deleteInfo($id, 'enquiries');

        if($status==true){
            $this->session->set_flashdata('success','Enquiry Deleted!');
            redirect('Admin');
        }
        else{
            $this->session->set_flashdata('failed','Error!');
            redirect('Admin');
        }
    }

    public function HeroSLider($id)
    {
        $path="";
        $res= $this->fetch->getInfoById($id,"hero_slider");
        $path= 'assets/images/'.$res->img_src;
        $status= $this->delete->deleteInfo($id, 'hero_slider');

        if($status==true){
            if($path!=""){
                unlink($path);
            }
            $this->session->set_flashdata('success','Hero Slider Deleted!');
            redirect('Admin/HeroSLider');
        }
        else{
            $this->session->set_flashdata('failed','Error!');
            redirect('Admin/HeroSLider');
        }
    }

    public function Directors($id)
    {
        $path="";
        $res= $this->fetch->getInfoById($id,"directors");
        $path= 'assets/images/'.$res->img_src;
        $status= $this->delete->deleteInfo($id, 'directors');

        if($status==true){
            if($path!=""){
                unlink($path);
            }
            $this->session->set_flashdata('success','Director Deleted!');
            redirect('Admin/Directors');
        }
        else{
            $this->session->set_flashdata('failed','Error!');
            redirect('Admin/Directors');
        }
    }

    public function Products($id)
    {
        $path="";
        $res= $this->fetch->getInfoById($id,"products");
        $path= 'assets/images/'.$res->img_src;
        $status= $this->delete->deleteInfo($id, 'products');

        if($status==true){
            if($path!=""){
                unlink($path);
            }
            $this->session->set_flashdata('success','Product Deleted!');
            redirect('Admin/Products');
        }
        else{
            $this->session->set_flashdata('failed','Error!');
            redirect('Admin/Products');
        }
    }

    public function Clientele($id)
    {
        $path="";
        $res= $this->fetch->getInfoById($id,"clients");
        $path= 'assets/images/'.$res->img_src;
        $status= $this->delete->deleteInfo($id, 'clients');

        if($status==true){
            if($path!=""){
                unlink($path);
            }
            $this->session->set_flashdata('success','Client Deleted!');
            redirect('Admin/Clientele');
        }
        else{
            $this->session->set_flashdata('failed','Error!');
            redirect('Admin/Clientele');
        }
    }

    public function Career($id)
    {
        $status= $this->delete->deleteCareer($id, 'careers');

        if($status==true){
            $this->session->set_flashdata('success','Career Deleted!');
            redirect('Admin/Careers');
        }
        else{
            $this->session->set_flashdata('failed','Error!');
            redirect('Admin/Careers');
        }
    }

    public function Application($id)
    {
        $res= $this->fetch->getInfoById($id,"applications");
        $path= 'assets/resumes/'.$res->resume;
        $status= $this->delete->deleteInfo($id, 'applications');

        if($status==true){
            unlink($path);
            $this->session->set_flashdata('success','Application Deleted!');
            redirect('Admin/Applications');
        }
        else{
            $this->session->set_flashdata('failed','Error!');
            redirect('Admin/Applications');
        }
    }


}
