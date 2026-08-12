<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends MX_Controller {

    function __construct(){
        parent::__construct();
    }

    private function slugify($text) {
        $text = strtolower($text);
        $text = preg_replace('~[^a-z0-9\s-]~', '', $text);
        $text = preg_replace('~[\s-]+~', '-', $text);
        return trim($text, '-');
    }

    private function loadBlogs() {
        $blogs = [];
        $seen_ids = [];

        // 1. Fetch from Database Table 'blog' safely with try-catch
        try {
            $CI =& get_instance();
            if (!isset($this->db) || !is_object($this->db) || !@$this->db->conn_id) {
                $CI->load->database();
                if (isset($CI->db)) {
                    $this->db = $CI->db;
                }
            }

            if (isset($this->db) && is_object($this->db) && !empty($this->db->conn_id)) {
                if ($this->db->table_exists('blog')) {
                    $this->db->order_by('b_id', 'DESC');
                    $query = $this->db->get('blog');

                    if ($query && $query->num_rows() > 0) {
                        foreach ($query->result_array() as $row) {
                            $id = $row['b_id'] ?? 0;
                            $title = !empty($row['title']) ? $row['title'] : (!empty($row['main_title']) ? $row['main_title'] : 'Relocation Guide');
                            $slug = !empty($row['slug']) ? $row['slug'] : $this->slugify($title);
                            $raw_date = !empty($row['timestamp']) ? $row['timestamp'] : (!empty($row['date']) ? $row['date'] : date('Y-m-d H:i:s'));
                            $desc = $row['description'] ?? '';
                            $content = !empty($row['content']) ? $row['content'] : $desc;

                            $blogs[] = [
                                'id' => $id,
                                'b_id' => $id,
                                'title' => $title,
                                'main_title' => $row['main_title'] ?? $title,
                                'slug' => $slug,
                                'description' => $desc,
                                'content' => $content,
                                'date' => $row['date'] ?? date('d/m/Y'),
                                'created_at' => $raw_date,
                                'image' => $row['image'] ?? '',
                                'author' => !empty($row['author']) ? $row['author'] : 'Admin',
                                'meta_title' => $row['meta_title'] ?? '',
                                'meta_desc' => $row['meta_desc'] ?? '',
                                'tags' => $row['tags'] ?? ''
                            ];
                            if ($id) {
                                $seen_ids[$id] = true;
                            }
                        }
                    }
                }
            }
        } catch (\Throwable $e) {
            // DB connection failure or driver issue, fail gracefully
        }

        return $blogs;
    }

    function index() {
        $this->view();
    }

    function view(){
        $this->load->library('pagination');
        $this->load->helper('text'); 

        $all_blogs = $this->loadBlogs();
        $total_rows = count($all_blogs);
        $per_page = 6;
        $offset = (int) $this->uri->segment(3);

        $config['base_url'] = site_url('blog/view');
        $config['total_rows'] = $total_rows;
        $config['per_page'] = $per_page;
        $config['uri_segment'] = 3;

        $config['full_tag_open'] = '<ul class="styled-pagination clearfix text-center">';
        $config['full_tag_close'] = '</ul>';
        $config['prev_link'] = '&laquo;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li><a href="#" class="active rc_first_hr color_dark">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['last_link'] = 'Last';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['first_link'] = 'First';

        $this->pagination->initialize($config);

        $data['blogs'] = array_slice($all_blogs, $offset, $per_page);
        $data['total'] = $total_rows;
        $data['recent_posts'] = array_slice($all_blogs, 0, 5);

        $data['title'] = "Relocation Blog & Shifting Guides | " . $this->comp['company3'];
        $data['description'] = "Explore expert articles on packing tips, house shifting checklists, office relocation advice, and logistics insights from " . $this->comp['company3'] . ".";
        $data['keywords'] = "relocation blog, shifting tips, house moving guide, packers movers articles, packing advice, " . strtolower($this->comp['company3']);
        $data['module'] = "blog";
        $data['view_file'] = "blog"; 

        echo Modules::run('template/layout2', $data);
    }

    function read($slug = '') {
        $this->load->helper('text');

        $all_blogs = $this->loadBlogs();
        $selected_blog = null;
        
        foreach ($all_blogs as $b) {
            $custom_slug = $b['slug'] ?? '';
            $auto_slug = $this->slugify($b['title']);
            
            // Handle CI's translate_uri_dashes by replacing _ back to - in incoming slug
            $search_slug = str_replace('_', '-', $slug);

            if (
                (!empty($custom_slug) && strtolower($custom_slug) == strtolower($search_slug)) || 
                (strtolower($auto_slug) == strtolower($search_slug)) ||
                (($b['id'] ?? 0) == $search_slug) ||
                (($b['b_id'] ?? 0) == $search_slug)
            ) {
                $selected_blog = (object) $b;
                break;
            }
        }

        if ($selected_blog) {
            $data['query'] = [$selected_blog];
            $data['recent_posts'] = array_slice($all_blogs, 0, 5);
            
            $meta_t = !empty($selected_blog->meta_title) ? $selected_blog->meta_title : (ucfirst($selected_blog->title) . " | " . $this->comp['company3']);
            $meta_d = !empty($selected_blog->meta_desc) ? $selected_blog->meta_desc : character_limiter(trim(preg_replace('/\s+/', ' ', strip_tags($selected_blog->description))), 155);
            $meta_k = !empty($selected_blog->tags) ? $selected_blog->tags : ("packers movers guide, " . strtolower($selected_blog->title) . ", relocation advice, " . strtolower($this->comp['company3']));
            
            $data['title'] = $meta_t;
            $data['description'] = $meta_d;
            $data['keywords'] = $meta_k;
            
            $image_file = $selected_blog->image;
            if ($image_file && file_exists(FCPATH . 'assets/uploads/blog/' . $image_file)) {
                $data['img'] = base_url('assets/uploads/blog/' . $image_file);
            } elseif ($image_file && file_exists(FCPATH . 'uploads/blogs/' . $image_file)) {
                $data['img'] = base_url('uploads/blogs/' . $image_file);
            } else {
                $data['img'] = base_url('assets/images/about/packers_movers.jpg');
            }
            
            $data['module'] = "blog";
            $data['view_file'] = "view"; 

            echo Modules::run('template/layout2', $data);
        } else {
            show_404();
        }
    }
}
