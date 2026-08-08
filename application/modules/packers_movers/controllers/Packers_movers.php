<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Packers_movers extends MX_Controller
{

    function index()
    {
        $data['title'] = "Packers and Movers India - All State Branches | " . $this->comp['company3'];
        $data['description'] = "Explore " . $this->comp['company3'] . " network across all Indian states & major cities. Trusted household shifting, office moving, and vehicle transport nationwide.";
        $data['keywords'] = "packers movers India, all India shifting, state branches, house movers nationwide, " . strtolower($this->comp['company3']);
        $data['module'] = "packers_movers";
        $data['view_file'] = "states";
        echo Modules::run('template/layout2', $data);
    }
    function state()
    {
        $data['title'] = "Packers and Movers India - All State Branches | " . $this->comp['company3'];
        $data['description'] = "Explore " . $this->comp['company3'] . " network across all Indian states & major cities. Trusted household shifting, office moving, and vehicle transport nationwide.";
        $data['keywords'] = "packers movers India, all India shifting, state branches, house movers nationwide, " . strtolower($this->comp['company3']);
        $data['module'] = "packers_movers";
        $data['view_file'] = "states";
        echo Modules::run('template/layout2', $data);
    }
    function state_services($state)
    {
        $this->load->module('home');
        $this->home->oldurl_to_newurl();
        $this->load->helper('text');
        $state = str_replace("_", " ", $state);
        $state = ucwords(str_replace("-", " ", $state));
        $data = array(
            "state" => $state,
            "title" => "Best Packers and Movers in $state | Top Relocation Services - " . $this->comp['company3'],
            "description" => "Looking for reliable packers and movers in $state? " . $this->comp['company3'] . " offers safe local and intercity household moving, car/bike transport, and packing at affordable rates.",
            "keywords" => "packers and movers $state, best movers in $state, home shifting $state, vehicle transport $state, " . strtolower($this->comp['company3']) . " $state",
            "module" => "packers_movers",
            "view_file" => "city_list",
        );
        echo Modules::run('template/layout2', $data);
    }
    function get_title($city, $state)
    { 
        $seo = array();
        foreach ($seo as $k => $s) {
            if ($k == $city) {
                return $s;
            }
        }
        return array(
            'title' => "Best Packers and Movers in $city, $state | " . $this->comp['company3'],
            "desc" => "Hire top-rated packers and movers in $city, $state. " . $this->comp['company3'] . " offers safe household shifting, office relocation, and vehicle transport at affordable rates."
        );
    }
    function city($state = 'Bihar', $city = 'Patna')
    {
        $this->load->helper('text');
        $state = str_replace("_", " ", $state);
        $state = ucwords(str_replace("-", " ", $state));
        $city = str_replace("_", " ", $city);
        $city = urldecode(ucwords(str_replace("-", " ", $city)));
        $seo = $this->get_title($city, $state);
        $statelink = strtolower($state);
        $data = array(
            "city" => $city,
            "state" => $state,
            'img' => base_url('assets') . "/images/state/google/$statelink.png",
            "title" => $seo['title'],
            "description" => $seo['desc'],
            "keywords" => "movers and packers in $city, Packers and movers in $city, Best packers and movers in $city, Home shifting in $city, Car transport in $city, Bike transport in $city, Affordable movers $city, " . strtolower($this->comp['company3']) . " $city",
            "module" => "packers_movers",
            "view_file" => "view_service",
        );
        echo Modules::run('template/layout2', $data);
    }
   
}
