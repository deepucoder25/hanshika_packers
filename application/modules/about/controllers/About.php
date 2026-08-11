<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class About extends MX_Controller
{
    function index()
    {
        $data['title'] = "About Us - Trusted Packers and Movers | " . $this->comp['company3'];
        $data['description'] = "Learn about " . $this->comp['company3'] . ", India's trusted relocation company with a proven track record in household shifting, office moving, and vehicle transport.";
        $data['keywords'] = "about " . strtolower($this->comp['company3']) . ", trusted relocation company, packers movers profile, professional shifting services";
        $data['module'] = "about";
        $data['view_file'] = "about";
        echo Modules::run('template/layout2', $data);
    }

    function choose()
    {
        $data['title'] = "Why Choose Us | Reliable Relocation Services - " . $this->comp['company3'];
        $data['description'] = "Discover why thousands of customers trust " . $this->comp['company3'] . " for safe packing, transparent pricing, transit insurance, and 24/7 customer support.";
        $data['keywords'] = "why choose " . strtolower($this->comp['company3']) . ", reliable movers, best shifting service, safe packing, transparent moving charges";
        $data['module'] = "about";
        $data['view_file'] = "choose";
        echo Modules::run('template/layout2', $data);
    }

    function faqs()
    {
        $data['title'] = "Frequently Asked Questions (FAQs) - Packing & Shifting | " . $this->comp['company3'];
        $data['description'] = "Get instant answers to common questions about house shifting costs, transit insurance coverage, packing quality, tracking, and delivery timelines at " . $this->comp['company3'] . ".";
        $data['keywords'] = "packers movers faq, house shifting cost questions, moving charges faq, relocation questions, " . strtolower($this->comp['company3']);
        $data['module'] = "about";
        $data['view_file'] = "faqs";
        echo Modules::run('template/layout2', $data);
    }

    function testimonials()
    {
        $reviews = null;
        try {
            @$this->load->database();
            if (isset($this->db) && is_object($this->db) && @$this->db->conn_id) {
                $this->db->order_by('r_id', 'desc');
                $this->db->where('status', 1);
                $reviews = @$this->db->get('reviews');
            }
        } catch (\Throwable $e) {
            $reviews = null;
        } catch (\Exception $e) {
            $reviews = null;
        }

        if (!$reviews || (is_object($reviews) && method_exists($reviews, 'num_rows') && $reviews->num_rows() == 0)) {
            try {
                $sqlite_path = FCPATH . 'application/database.php';
                if (file_exists($sqlite_path)) {
                    $pdo = new PDO('sqlite:' . $sqlite_path);
                    $stmt = $pdo->query("SELECT * FROM reviews WHERE status = 1 OR status = '1' ORDER BY r_id DESC");
                    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    if ($rows) {
                        $reviews = $rows;
                    }
                }
            } catch (\Throwable $ex) {}
        }

        $data['reviews'] = $reviews;

        $data['title'] = "Customer Testimonials & Ratings | " . $this->comp['company3'];
        $data['description'] = "Read genuine client testimonials and feedback about " . $this->comp['company3'] . ". See how we deliver hassle-free home, vehicle, and office relocations across India.";
        $data['keywords'] = "packers movers reviews, customer testimonials, shifting service feedback, client ratings";
        $data['module'] = "about";
        $data['view_file'] = "testimonials";
        echo Modules::run('template/layout2', $data);
    }

    function reviews()
    {
        // Redirect to main reviews module
        redirect('reviews');
    }

    function privacy()
    {
        $data['title'] = "Privacy Policy | " . $this->comp['company3'];
        $data['description'] = "Read the official Privacy Policy of " . $this->comp['company3'] . ". Learn how we collect, protect, and handle your personal details securely during relocation.";
        $data['keywords'] = "privacy policy, data security, " . strtolower($this->comp['company3']) . " policy";
        $data['module'] = "about";
        $data['view_file'] = "privacy";
        echo Modules::run('template/layout2', $data);
    }

    function terms()
    {
        $data['title'] = "Terms & Conditions | " . $this->comp['company3'];
        $data['description'] = "Review the terms and conditions governing packing, moving, transit insurance claims, and vehicle transport services offered by " . $this->comp['company3'] . ".";
        $data['keywords'] = "terms and conditions, shifting terms, relocation rules, " . strtolower($this->comp['company3']);
        $data['module'] = "about";
        $data['view_file'] = "terms";
        echo Modules::run('template/layout2', $data);
    }
}

