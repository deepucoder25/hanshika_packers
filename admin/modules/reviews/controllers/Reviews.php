<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Reviews extends MX_Controller
{
    //wGtRkO8VoEyUjS
    private $type;
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) { redirect('login'); }
        $this->load->model('mdl_reviews');
    }
    function index()
    {
        $this->load->view('data');
    }

    function toggle_sample()
    {
        $file = FCPATH . 'assets/hide_sample_reviews.txt';
        if (file_exists($file)) {
            @unlink($file);
            echo json_encode(['status' => 'show', 'hidden' => false, 'msg' => 'Default sample reviews are now VISIBLE on website.']);
        } else {
            @file_put_contents($file, '1');
            echo json_encode(['status' => 'hide', 'hidden' => true, 'msg' => 'Default sample reviews are now HIDDEN from website.']);
        }
    }

    function check_sample_status()
    {
        $file = FCPATH . 'assets/hide_sample_reviews.txt';
        $hidden = file_exists($file);
        $this->output->set_content_type('application/json')->set_output(json_encode(['hidden' => $hidden]));
    }
    function save()
    {
        if (isset($_GET['id']) && $_GET['id'] !== '') {
            $where['r_id'] = $_GET['id'];
            $data['status'] = $_GET['status'];
            
            // Sync status update directly to SQLite application/database.php
            try {
                $sqlite_path = FCPATH . 'application/database.php';
                if (file_exists($sqlite_path)) {
                    $pdo = new PDO('sqlite:' . $sqlite_path);
                    $stmt = $pdo->prepare("UPDATE reviews SET status = :status WHERE r_id = :r_id");
                    $stmt->execute([':status' => $_GET['status'], ':r_id' => $_GET['id']]);
                }
            } catch (\Throwable $e) {}

            echo $this->mdl_reviews->update_data($where, $data);
        } else {
            echo "invalid Request";
        }
    }
    function update_data()
    {
        if (!$this->input->post('r_id')) {
            echo "invalid Request";
            return;
        }
        $where['r_id'] = $this->input->post('r_id');
        $data = array();
        if ($this->input->post('name') !== null) $data['name'] = $this->input->post('name');
        if ($this->input->post('email') !== null) $data['email'] = $this->input->post('email');
        if ($this->input->post('stars') !== null) $data['stars'] = $this->input->post('stars');
        if ($this->input->post('r_desc') !== null) $data['r_desc'] = $this->input->post('r_desc');
        if ($this->input->post('r_title') !== null) $data['r_title'] = $this->input->post('r_title');
        if ($this->input->post('r_type') !== null) $data['r_type'] = $this->input->post('r_type');
        if ($this->input->post('admin_reply') !== null) $data['admin_reply'] = $this->input->post('admin_reply');
        if ($this->input->post('status') !== null) $data['status'] = $this->input->post('status');

        if (empty($data)) {
            echo "invalid Request";
            return;
        }
        echo $this->mdl_reviews->update_data($where, $data);
    }
    function delete_data()
    {
        if (isset($_GET['id']) && $_GET['id'])
        {
            $del_id = $_GET['id'];

            // 1. Delete from SQLite database application/database.php
            try {
                $sqlite_path = FCPATH . 'application/database.php';
                if (file_exists($sqlite_path)) {
                    $pdo = new PDO('sqlite:' . $sqlite_path);
                    $stmt = $pdo->prepare("DELETE FROM reviews WHERE r_id = :id");
                    $stmt->execute([':id' => $del_id]);
                }
            } catch (\Throwable $e) {}

            // 2. Delete from CI db model
            try {
                $where['r_id'] = $del_id;
                $this->mdl_reviews->delete_data($where);
            } catch (\Throwable $e) {}

            echo "Deleted";
        } else {
            echo "Not Deleted";
        }
    }
    function view_data()
    {
        $where=null;
        if (isset($_GET['id']))
	         $where['r_id']=$_GET['id'];
        
        if (isset($_GET['data']))
	        $select=$_GET['data'];
	    else $select="r_id,name as unm,email, r_img as img,stars as rt,r_desc as cmt,posted_date as pd,r_title as t,r_type as ty,admin_reply as ar,timestamp as tm,status as st";
	    
        $return=$this->mdl_reviews->view_data($where,$select);
        $this->output->set_content_type('application/json')->set_output(json_encode($return->result_array()));
    }
}
