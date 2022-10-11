<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Add extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->redirectIfNotLoggedIn();
        $this->load->model('AddModel', 'save');
        $this->load->model('GetModel', 'fetch');
    }

    public function Feedback()
    {
        $this->form_validation->set_rules('content', 'Feedback', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('designation', 'Designation', 'required');
        $this->form_validation->set_rules('rating', 'Rating', 'required');
        if ($this->form_validation->run() == true) {
            $data = $this->input->post();
            // echo '<pre>'; var_dump($data); exit;
            $status = $this->save->saveInfo($data, 'feedbacks');
            if ($status == true) {
                $this->session->set_flashdata('success', 'New Feedback added !');
                redirect('Admin/Feedbacks');
            } else {
                $this->session->set_flashdata('failed', 'Error !');
                redirect('Admin/Feedbacks');
            }
        } else {
            $err = trim(strip_tags(validation_errors()));
            $this->session->set_flashdata('failed', $err);
            redirect('Admin/Feedbacks');
        }
    }

    public function News()
    {
        $this->load->view('admin/adminheader', ['title' => 'Add News', 'submit' => base_url('Add/saveNews')]);
        $this->load->view('admin/adminaside');
        $this->load->view('admin/news-form');
        $this->load->view('admin/adminfooter');
    }

    public function saveNews()
    {
        $data = $this->input->post();
        $data['tags'] = implode('|', $data['tags']);
        $data['featured'] = isset($data['featured']) ? 1 : 0;
        $data['slug'] = $this->generate_url_slug($this->input->post('head'), 'news');
        if ($_FILES['img']['name'] != null) {
            $path = 'assets/images';
            $initialize = array(
                "upload_path" => $path,
                "allowed_types" => "jpg|jpeg|png|bmp|webp",
                "remove_spaces" => TRUE,
                "max_size" => 350
            );
            $this->load->library('upload');
            $this->upload->initialize($initialize);
            if (!$this->upload->do_upload('img')) {
                $this->session->set_flashdata('failed', trim(strip_tags($this->upload->display_errors())));
                redirect('Add/News');
            } else {
                $imgdata = $this->upload->data();
                $imagename = $imgdata['file_name'];
                $data['img_src'] = $imagename;

                $status = $this->save->saveInfo($data, 'news');
                if ($status == true) {
                    $this->session->set_flashdata('success', 'News added !');
                    redirect('Admin/News');
                } else {
                    $this->session->set_flashdata('failed', 'Error !');
                    redirect('Add/News');
                }
            }
        } else {
            $this->session->set_flashdata('failed', 'No image selected !');
            redirect('Add/News');
        }
    }

    public function Products()
    {
        $this->load->view('admin/adminheader', ['title' => 'Add Product', 'submit' => base_url('Add/saveProducts')]);
        $this->load->view('admin/adminaside');
        $this->load->view('admin/products-form');
        $this->load->view('admin/adminfooter');
    }

    public function saveProducts()
    {
        $data = $this->input->post();
        $data['tags'] = implode('|', $data['tags']);
        // var_dump('<pre>',$data);exit;
        $data['slug'] = $this->generate_url_slug($this->input->post('name'), 'products');
        if ($_FILES['img']['name'] != null) {
            $path = 'assets/images';
            $initialize = array(
                "upload_path" => $path,
                "allowed_types" => "jpg|jpeg|png|bmp|webp",
                "remove_spaces" => TRUE,
                "max_size" => 3500
            );
            $this->load->library('upload');
            $this->upload->initialize($initialize);
            if (!$this->upload->do_upload('img')) {
                $this->session->set_flashdata('failed', trim(strip_tags($this->upload->display_errors())));
                redirect('Add/Products');
            } else {
                $imgdata = $this->upload->data();
                $imagename = $imgdata['file_name'];
                $data['img_src'] = $imagename;

                $status = $this->save->saveInfo($data, 'products');
                if ($status == true) {
                    $this->session->set_flashdata('success', 'Product added !');
                    redirect('Admin/Products');
                } else {
                    $this->session->set_flashdata('failed', 'Error !');
                    redirect('Add/Products');
                }
            }
        } else {
            $this->session->set_flashdata('failed', 'No image selected !');
            redirect('Add/Products');
        }
    }

    public function Reports()
    {
        $this->load->view('admin/adminheader', ['title' => 'Add Report', 'submit' => base_url('Add/saveReports')]);
        $this->load->view('admin/adminaside');
        $this->load->view('admin/reports-form');
        $this->load->view('admin/adminfooter');
    }

    public function saveReports()
    {
        $data = $this->input->post();
        $data['featured'] = isset($data['featured']) ? 1 : 0;
        // var_dump('<pre>',$data);exit;
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
                redirect('Add/Reports');
            } else {
                $imgdata = $this->upload->data();
                $imagename = $imgdata['file_name'];
                $data['thumb'] = $imagename;
            }
        }
        if ($_FILES['pdf']['name'] != null) {
            $path = 'assets/reports';
            $initialize = array(
                "upload_path" => $path,
                "allowed_types" => "pdf|doc|docx|xls|xlsx",
                "remove_spaces" => TRUE,
                "max_size" => 35000
            );
            $this->load->library('upload');
            $this->upload->initialize($initialize);
            if (!$this->upload->do_upload('pdf')) {
                $this->session->set_flashdata('failed', trim(strip_tags($this->upload->display_errors())));
                redirect('Add/Reports');
            } else {
                $imgdata = $this->upload->data();
                $imagename = $imgdata['file_name'];
                $data['pdf_url'] = $imagename;

                $status = $this->save->saveInfo($data, 'reports');
                if ($status == true) {
                    $this->session->set_flashdata('success', 'Report added !');
                    redirect('Admin/Reports');
                } else {
                    $this->session->set_flashdata('failed', 'Error !');
                    redirect('Add/Reports');
                }
            }
        } else {
            $this->session->set_flashdata('failed', 'No Report document selected !');
            redirect('Add/Reports');
        }
    }

    public function HeroSlider()
    {
        $data = $this->input->post();
        if ($_FILES['img']['name'] != null) {
            $path = 'assets/images';
            $initialize = array(
                "upload_path" => $path,
                "allowed_types" => "jpg|jpeg|png|bmp|webp",
                "remove_spaces" => TRUE,
                "max_size" => 2000
            );
            $this->load->library('upload');
            $this->upload->initialize($initialize);
            if (!$this->upload->do_upload('img')) {
                $this->session->set_flashdata('failed', trim(strip_tags($this->upload->display_errors())));
                redirect('Admin/HeroSlider');
            } else {
                $imgdata = $this->upload->data();
                $imagename = $imgdata['file_name'];
                $data['img_src'] = $imagename;
                $status = $this->save->saveInfo($data, 'hero_slider');
                if ($status == true) {
                    $this->session->set_flashdata('success', 'Slider added !');
                    redirect('Admin/HeroSLider');
                } else {
                    $this->session->set_flashdata('failed', 'Error !');
                    redirect('Admin/HeroSLider');
                }
            }
        } else {
            $this->session->set_flashdata('failed', 'No image selected !');
            redirect('ADmin/HeroSLider');
        }
    }

    public function Directors()
    {
        $data = $this->input->post();
        if ($_FILES['img']['name'] != null) {
            $path = 'assets/images';
            $initialize = array(
                "upload_path" => $path,
                "allowed_types" => "jpg|jpeg|png|bmp|webp",
                "remove_spaces" => TRUE,
                "max_size" => 2000
            );
            $this->load->library('upload');
            $this->upload->initialize($initialize);
            if (!$this->upload->do_upload('img')) {
                $this->session->set_flashdata('failed', trim(strip_tags($this->upload->display_errors())));
                redirect('Admin/Directors');
            } else {
                $imgdata = $this->upload->data();
                $imagename = $imgdata['file_name'];
                $data['img_src'] = $imagename;
                $status = $this->save->saveInfo($data, 'directors');
                if ($status == true) {
                    $this->session->set_flashdata('success', 'Director added !');
                    redirect('Admin/Directors');
                } else {
                    $this->session->set_flashdata('failed', 'Error !');
                    redirect('Admin/Directors');
                }
            }
        } else {
            $this->session->set_flashdata('failed', 'No image selected !');
            redirect('ADmin/Directors');
        }
    }

    public function Clientele()
    {
        $data = $this->input->post();
        if ($_FILES['img']['name'] != null) {
            $path = 'assets/images';
            $initialize = array(
                "upload_path" => $path,
                "allowed_types" => "jpg|jpeg|png|bmp|webp",
                "remove_spaces" => TRUE,
                "max_size" => 2000
            );
            $this->load->library('upload');
            $this->upload->initialize($initialize);
            if (!$this->upload->do_upload('img')) {
                $this->session->set_flashdata('failed', trim(strip_tags($this->upload->display_errors())));
                redirect('Admin/Clientele');
            } else {
                $imgdata = $this->upload->data();
                $imagename = $imgdata['file_name'];
                $data['img_src'] = $imagename;
                $status = $this->save->saveInfo($data, 'clients');
                if ($status == true) {
                    $this->session->set_flashdata('success', 'Client added !');
                    redirect('Admin/Clientele');
                } else {
                    $this->session->set_flashdata('failed', 'Error !');
                    redirect('Admin/Clientele');
                }
            }
        } else {
            $this->session->set_flashdata('failed', 'No image selected !');
            redirect('ADmin/Clientele');
        }
    }

    public function Policies()
    {
        $data = $this->input->post();
        $status = $this->save->saveInfo($data, 'policies');
        if ($status == true) {
            $this->session->set_flashdata('success', 'Policy added !');
            redirect('Admin/Policies');
        } else {
            $this->session->set_flashdata('failed', 'Error !');
            redirect('Admin/Policies');
        }
    }

    function generate_url_slug($string, $table, $field = 'slug', $key = NULL, $value = NULL)
    {
        $t = &get_instance();
        $slug = url_title($string);
        $slug = strtolower($slug);
        $i = 0;
        $params = array();
        $params[$field] = $slug;
        if ($key) $params["$key !="] = $value;
        while ($t->db->where($params)->get($table)->num_rows()) {
            if (!preg_match('/-{1}[0-9]+$/', $slug)) {
                $slug .= '-' . ++$i;
            } else {
                $slug = preg_replace('/[0-9]+$/', ++$i, $slug);
            }
            $params[$field] = $slug;
        }
        return $slug;
    }

    public function Career()
    {
        $status = $this->save->saveInfo($this->input->post(), 'careers');
        if ($status == true) {
            $this->session->set_flashdata('success', 'New Career added !');
            redirect('Admin/Careers');
        } else {
            $this->session->set_flashdata('failed', 'Error !');
            redirect('Admin/Careers');
        }
    }
}
