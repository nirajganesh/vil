<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('GetModel','fetch');
		$this->load->model('AddModel','save');
		$this->load->library("pagination");
	}

	public function index()
	{
		$feat=$this->fetch->getFeat();
		$banner=$this->fetch->getInfo('hero_slider');
		$clients=$this->fetch->getInfo('clients');
		$web=$this->fetch->getWebProfile('webprofile');
		$this->load->view('header',['title' => 'Home',
									'feat'=>$feat,
									'banner'=>$banner,
									'clients'=>$clients,
									'web'=>$web
								]
							);
		$this->load->view('index');
		$this->load->view('footer');

	}

	public function About($value)
	{
		$clients=$this->fetch->getInfo('clients');
		$about=$this->fetch->getInfoType('contents','page_uri','about_us')[0];
		$msg=$this->fetch->getInfoType('contents','page_uri','chairman_msg')[0];
		$directors=$this->fetch->getInfo('directors');
		$web=$this->fetch->getWebProfile('webprofile');
		$this->load->view('header',['title' => 'Home',
									'about'=>$about,
									'msg'=>$msg,
									'directors'=>$directors,
									'clients'=>$clients,
									'web'=>$web
								]
							);
		$this->load->view('about',['value'=>$value]);
		$this->load->view('footer');
	}

	public function Products($value)
	{
		$banner=$this->fetch->getInfo('hero_slider');
		$clients=$this->fetch->getInfo('clients');
		$web=$this->fetch->getWebProfile('webprofile');
		$this->load->view('header',['title' => 'Products',
									'banner'=>$banner,
									'clients'=>$clients,
									'web'=>$web
								]
							);
		$this->load->view('products',['value'=>$value,'change'=>'true']);
		$this->load->view('footer');
	}

	public function Investors($name)
	{
		$clients=$this->fetch->getInfo('clients');
		$reports=$this->fetch->getInfo('reports');
		$web=$this->fetch->getWebProfile('webprofile');
		$this->load->view('header',['title' => 'Investors',
									'reports'=>$reports,
									'clients'=>$clients,
									'web'=>$web
								]
							);
		$this->load->view($name);
		$this->load->view('footer');
	}

	public function Privacy_policy()
	{
		$clients=$this->fetch->getInfo('clients');
		$web=$this->fetch->getWebProfile('webprofile');
		$msg=$this->fetch->getInfoType('contents','page_uri','privacy_policy')[0];
		$this->load->view('header',['title' => 'Privacy Policy',
									'clients'=>$clients,
									'msg'=>$msg,
									'web'=>$web
								]
							);
		$this->load->view('policies');
		$this->load->view('footer');
	}

	public function Terms()
	{
		$clients=$this->fetch->getInfo('clients');
		$web=$this->fetch->getWebProfile('webprofile');
		$msg=$this->fetch->getInfoType('contents','page_uri','t_c')[0];
		$this->load->view('header',['title' => 'Terms of Use',
									'clients'=>$clients,
									'msg'=>$msg,
									'web'=>$web
								]
							);
		$this->load->view('terms');
		$this->load->view('footer');
	}

	public function Contact()
	{
		$clients=$this->fetch->getInfo('clients');
		$web=$this->fetch->getWebProfile('webprofile');
		$this->load->view('header',['title' => 'Contact',
									'clients'=>$clients,
									'web'=>$web
								]
							);
		$this->load->view('contact');
		$this->load->view('footer');
	}

	public function Careers($id=null)
	{
		$clients=$this->fetch->getInfo('clients');
		$web=$this->fetch->getWebProfile('webprofile');
		if($id){
			$career=$this->fetch->getInfoByColId('career_id',$id,'careers');
			$this->load->view('header',['title' => 'Careers',
										'clients'=>$clients,
										'career'=>$career,
										'web'=>$web
									]
								);
		
			$this->load->view('careers-single');
		} else {
			$careers=$this->fetch->getInfoType('careers','visibility',1);
			$this->load->view('header',['title' => 'Careers',
										'clients'=>$clients,
										'careers'=>$careers,
										'web'=>$web
									]
								);
		
			$this->load->view('careers');
		}
		$this->load->view('footer');
	}

	public function News($id=null)
	{
		$config = array();
		$config["base_url"] = base_url() . "news/page";
		$config["total_rows"] = $this->fetch->record_count('news');
		$config["per_page"] = 10;
		$config["uri_segment"] = 3;
		$this->pagination->initialize($config);
		
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$news=$this->fetch->fetch_blogs($config["per_page"], $page);
		$pages = $this->pagination->create_links();

		$clients=$this->fetch->getInfo('clients');
		$web=$this->fetch->getWebProfile('webprofile');
		$this->load->view('header',['title' => 'Investors',
									'clients'=>$clients,
									'news'=>$news,
									'pages'=>$pages,
									'web'=>$web
								]
							);

		$this->load->view('news');
		$this->load->view('footer');
	}


	public function news_post($id)
	{
		// echo $id; exit;
		$news=$this->fetch->getInfoById($id, 'news');
		$social_meta='
			<meta name="og:title" content="'.$news->head.'">
			<meta name="og:description" content="'.substr(trim(strip_tags($news->head)),0,100).'">
			<meta name="og:image" content="'.base_url("assets/images/").$news->img_src.'">
			<meta name="og:url" content="'.base_url().'">
			<meta name="og:site_name" content="Vaswani Industries Ltd.">

			<meta name="twitter:card" content="summary">
			<meta name="twitter:title" content="'.$news->head.'">
			<meta name="twitter:description" content="'.substr(trim(strip_tags($news->head)),0,100).'">
			<meta name="twitter:site" content="">
			<meta name="twitter:image" content="'.base_url("assets/images/").$news->img_src.'">

			<meta itemprop="name" content="'.$news->head.'">
			<meta itemprop="description" content="'.substr(trim(strip_tags($news->head)),0,100).'">
			<meta itemprop="image" content="'.base_url("assets/images/").$news->img_src.'">
		';
		
		$clients=$this->fetch->getInfo('clients');
		$web=$this->fetch->getWebProfile('webprofile');
		$this->load->view('header',['web'=>$web,'clients'=>$clients,'news'=>$news,'social_meta'=>$social_meta]);
		$this->load->view('news-single');
		$this->load->view('footer');
	}

	public function Mail()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'E-mail ID', 'required');
		if($this->input->post('phone')!=null){
			$this->form_validation->set_rules('phone', 'Contact No.', 'max_length[10]|min_length[10]');
		}
		if($this->input->post('message')!=null){
			$this->form_validation->set_rules('message', 'Message', 'max_length[250]');
		}

		if($this->form_validation->run() == true){
			$data=$this->input->post();
			$data['date']=date('Y-m-d');
			$status= $this->save->saveInfo($data,'enquiries');

			if($status==true){
				// $name=$data['name'];
				// $guest_email=$data['email'];
				// if($this->input->post('phone')!=null){
				// 	$contact=$data['phone'];
				// }
				// if($this->input->post('message')!=null){
				// 	$message=$data['message'];
				// }
				// $mail_arr = $this->fetch->getWebProfile();
				// $to = $mail_arr->email;

				// $msg ="You have a new Enquiry from- \n\r Name:".$name.".\n\r E-mail:".$guest_email."\n\r Contact No.:".$contact."\n\r Message:".$message;
				// $subject = "VIL - New Enquiry";
				// $headers = "From:" . $name;

				// mail($to, $subject, $msg, $headers);
				
				echo 'success';
			}
			else{
				echo 'error';
			}
		}
		else{
			echo 'form_validation_error';
		}
	}


	public function Application()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'E-mail ID', 'required');
		$this->form_validation->set_rules('phone', 'Contact No.', 'required');
		if($this->form_validation->run() == true){
			$data=$this->input->post();

			$path ='assets/resumes/';
			$initialize = array(
				"upload_path" => $path,
				"allowed_types" => "pdf|doc|docx",
				"remove_spaces" => TRUE
			);
			$this->load->library('upload', $initialize);
			if (!$this->upload->do_upload('file')) {
				$newstr=str_replace('<p>','',$this->upload->display_errors());
				$err_str=str_replace('</p>','',$newstr);
				$this->session->set_flashdata('failed',str_replace('<p>','',$err_str));
				redirect('Careers');
			} 
			else {
				$docdata = $this->upload->data();
				$docname = $docdata['file_name'];
				$data['resume']=$docname;
				$data['date']=date('Y-m-d');

				$status= $this->save->saveInfo($data, 'applications');

				if($status==true){
					// $name=$data['name'];
					// $guest_email=$data['email'];
					// $mob=$data['phone'];
					// $position=$data['for_position'];
					// $mail_arr = $this->fetch->getWebProfile();
					// $to = $mail_arr->email;

					// $msg ="You have a new job application from- \n\r Name:".$name.".\n\r E-mail:".$guest_email.".\n\r Contact no:".$mob."\n\r Applied for:".$position;
					// $subject = "VIL - New job application";
					// $headers = "From:" . $name;

					// mail($to, $subject, $msg, $headers);
					$this->session->set_flashdata('success','You have successfully applied for the job !' );
					redirect('Careers');
				}
				else{
					$this->session->set_flashdata('failed','Unknown error !');
					redirect('Careers');
				}
			}
		}
		else{
			$err_str=trim(strip_tags(validation_errors()));
			$this->session->set_flashdata('failed',$err_str);
			redirect('Careers');
		}
	}


}
?>
