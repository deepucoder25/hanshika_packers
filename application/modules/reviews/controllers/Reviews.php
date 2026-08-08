<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Reviews extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
    }

    function index()
    {
        $this->load->library('pagination');
        $star_filter = $this->input->get('star');
        $total_rows = 0;
        $query = null;

        try {
            @$this->load->database();
            if (isset($this->db) && is_object($this->db) && @$this->db->conn_id && @$this->db->table_exists('reviews')) {
                $this->db->where('status', 1);
                if ($star_filter) {
                    $this->db->where('stars', $star_filter);
                }
                $total_rows = $this->db->count_all_results('reviews');
            }
        } catch (\Throwable $e) {
            $total_rows = 0;
        } catch (\Exception $e) {
            $total_rows = 0;
        }

        // Pagination Config
        $config['base_url'] = site_url('reviews');
        $config['total_rows'] = $total_rows;
        $config['per_page'] = 9;
        $config['page_query_string'] = TRUE;
        $config['reuse_query_string'] = TRUE;
        
        $config['full_tag_open'] = '<ul class="pagination justify-content-center" style="margin-top: 30px;">';
        $config['full_tag_close'] = '</ul>';
        $config['prev_link'] = '&laquo;';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo;';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a href="javascript:void(0)" class="page-link" style="background:#002446; border-color:#002446; color:#fff;">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['attributes'] = array('class' => 'page-link');
        
        $this->pagination->initialize($config);
        
        $offset = $this->input->get('per_page') ? (int) $this->input->get('per_page') : 0;

        // Fetch data
        try {
            if (isset($this->db) && is_object($this->db) && @$this->db->conn_id && @$this->db->table_exists('reviews')) {
                $this->db->order_by('r_id', 'desc');
                $this->db->where('status', 1);
                if ($star_filter) {
                    $this->db->where('stars', $star_filter);
                }
                $query = @$this->db->get('reviews', $config['per_page'], $offset);
            }
        } catch (\Throwable $e) {
            $query = null;
        } catch (\Exception $e) {
            $query = null;
        }
        
        $company_name = isset($this->comp['company3']) ? $this->comp['company3'] : 'Elite Packers and Movers';
        $data['reviews'] = $query;
        $data['company3'] = $company_name;
        $data['pagination'] = $this->pagination->create_links();
        $data['title'] = "Verified Customer Reviews & Ratings | " . $company_name;
        $data['description'] = "Read verified customer reviews, ratings, and real client feedback about " . $company_name . ". Check our service quality for home and vehicle relocation.";
        $data['keywords'] = "customer reviews, packers movers ratings, client feedback, genuine shifting reviews, " . $company_name . " ratings";
        $data['module'] = "reviews";
        $data['view_file'] = "reviews";
        echo Modules::run('template/layout2', $data);
    }

    function submit() {
        $this->_process_review_submission();
    }

    function review() {
        $this->_process_review_submission();
    }

    private function _process_review_submission() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->load->database();
            
            $redirect_url = isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : site_url('testimonials');
            
            $name = $this->input->post('name') ? trim($this->input->post('name')) : 'Valued Customer';
            $email = $this->input->post('email') ? trim($this->input->post('email')) : 'client@example.com';
            
            $city = $this->input->post('city') ? trim($this->input->post('city')) : ($this->input->post('title') ? trim($this->input->post('title')) : 'Home Relocation');
            $desc = $this->input->post('review') ? trim($this->input->post('review')) : ($this->input->post('desc') ? trim($this->input->post('desc')) : '');
            $stars = $this->input->post('rating') ? (int) $this->input->post('rating') : ($this->input->post('stars') ? (int) $this->input->post('stars') : 5);
            if ($stars <= 0) $stars = 5;

            $uploaded_images = [];
            
            // Check review_images[] or img files
            $file_key = isset($_FILES['review_images']) ? 'review_images' : (isset($_FILES['img']) ? 'img' : null);

            if ($file_key && !empty($_FILES[$file_key]['name'])) {
                $upload_path = FCPATH . 'assets/images/reviews/';
                if (!is_dir($upload_path)) mkdir($upload_path, 0777, true);
                
                $files = $_FILES[$file_key];
                $is_multiple = is_array($files['name']);
                $count = $is_multiple ? count($files['name']) : 1;
                
                for($i=0; $i<$count; $i++) {
                    $tmp_name = $is_multiple ? $files['tmp_name'][$i] : $files['tmp_name'];
                    $name_file = $is_multiple ? $files['name'][$i] : $files['name'];
                    $error = $is_multiple ? $files['error'][$i] : $files['error'];
                    $size = $is_multiple ? $files['size'][$i] : $files['size'];
                    
                    if ($error === UPLOAD_ERR_OK && !empty($tmp_name)) {
                        $finfo = finfo_open(FILEINFO_MIME_TYPE);
                        $mime = finfo_file($finfo, $tmp_name);
                        finfo_close($finfo);
                        
                        $allowed_mimes = ['image/jpeg', 'image/png', 'image/webp', 'image/jpg'];
                        if (in_array($mime, $allowed_mimes)) {
                            $ext = pathinfo($name_file, PATHINFO_EXTENSION);
                            $new_name = uniqid('rev_') . '.' . ($ext ? $ext : 'jpg');
                            $dest = $upload_path . $new_name;
                            if (move_uploaded_file($tmp_name, $dest)) {
                                $uploaded_images[] = 'assets/images/reviews/' . $new_name;
                            }
                        }
                    }
                }
            }
            
            $r_img_val = implode(',', $uploaded_images);
            
            $data = array(
                'name' => $name,
                'email' => $email,
                'r_title' => $city,
                'r_desc' => $desc,
                'stars' => $stars,
                'status' => 1, // Active / auto-approved to display directly on website
                'b_id' => 0,
                'r_img' => $r_img_val,
                'views' => 0,
                'posted_date' => date('Y-m-d H:i:s')
            );
            
            $this->db->insert('reviews', $data);
            
            if ($this->input->is_ajax_request() || (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest')) {
                header('Content-Type: application/json');
                echo json_encode(['err' => 0, 'msg' => 'Thank you! Your review has been submitted successfully.']);
                return;
            }

            $this->session->set_flashdata('success', 'Thank you! Your review has been submitted successfully.');
            redirect($redirect_url);
        }
    }
}