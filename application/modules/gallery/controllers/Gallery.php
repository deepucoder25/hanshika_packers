<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Gallery extends MX_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function photo_gallery()
    {
        $data['title'] = "Photo Gallery - Packing & Relocation Photos | " . $this->comp['company3'];
        $data['description'] = "Explore photo gallery of " . $this->comp['company3'] . ". View images of our high-quality packing materials, specialized container trucks, warehouse storage, and team in action.";
        $data['keywords'] = "packers movers photos, shifting images, packing gallery, warehouse photos, " . strtolower($this->comp['company3']);
        
        $this->db->where('status', 1);
        $this->db->order_by('auto_id', 'DESC');
        $data['photos'] = $this->db->get('gallery')->result();
        
        $data['module'] = "gallery";
        $data['view_file'] = "photo-gallery";
        echo Modules::run('template/layout2', $data);
    }

    function video_gallery()
    {
        $data['title'] = "Video Gallery - Relocation & Transport Videos | " . $this->comp['company3'];
        $data['description'] = "Watch live video clips of loading, unloading, vehicle transport, and high-quality packing methods performed by " . $this->comp['company3'] . " teams.";
        $data['keywords'] = "packers movers videos, shifting demo, vehicle transport videos, loading unloading videos, " . strtolower($this->comp['company3']);
        
        $this->db->where('status', 1);
        $this->db->order_by('auto_id', 'DESC');
        $data['videos'] = $this->db->get('video_gallery')->result();
        
        $data['module'] = "gallery";
        $data['view_file'] = "video-gallery";
        echo Modules::run('template/layout2', $data);
    }
}