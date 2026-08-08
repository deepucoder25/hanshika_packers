<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Services extends MX_Controller
{
    function index()
    {
        redirect('', 'location', 301);
    }

    function homeShifting()
    {
        $data['title'] = "Best Home Shifting Services | Safe Household Moving - " . $this->comp['company3'];
        $data['description'] = "Get reliable, safe, and professional home shifting services from " . $this->comp['company3'] . ". Multi-layer protective packing and hassle-free door-to-door household relocation.";
        $data['keywords'] = "home shifting services, household relocation, house moving company, safe packing, domestic shifting";
        $data['module'] = "services";
        $data['view_file'] = "home_shifting";
        echo Modules::run('template/layout2', $data);
    }

    function office()
    {
        $data['title'] = "Professional Office Relocation Services | Commercial Moving - " . $this->comp['company3'];
        $data['description'] = "Seamless corporate & office relocation services by " . $this->comp['company3'] . ". Fast execution, safe IT hardware moving, and minimal business downtime.";
        $data['keywords'] = "office relocation services, commercial shifting, corporate moving company, office relocation experts";
        $data['module'] = "services";
        $data['view_file'] = "office";
        echo Modules::run('template/layout2', $data);
    }

    function bike()
    {
        $data['title'] = "Reliable Bike Transportation Services in India | " . $this->comp['company3'];
        $data['description'] = "Hire trusted two-wheeler and bike transport services from " . $this->comp['company3'] . ". Specialized bike container transport with scratch-free packing and door delivery.";
        $data['keywords'] = "bike transportation services, two wheeler courier, bike shifting, motorcycle transport, safe bike moving";
        $data['module'] = "services";
        $data['view_file'] = "bike";
        echo Modules::run('template/layout2', $data);
    }

    function car()
    {
        $data['title'] = "Safe Car Transportation Services | Enclosed Car Carrier - " . $this->comp['company3'];
        $data['description'] = "Secure car carrier & vehicle transportation services by " . $this->comp['company3'] . ". Dedicated enclosed trailers, doorstep pickup, and full transit insurance.";
        $data['keywords'] = "car transportation services, car carrier service, enclosed car transport, vehicle shifting, safe car carrier";
        $data['module'] = "services";
        $data['view_file'] = "car";
        echo Modules::run('template/layout2', $data);
    }

    function packingMoving()
    {
        $data['title'] = "Professional Packing and Moving Services | " . $this->comp['company3'];
        $data['description'] = "Premium packing and moving services by " . $this->comp['company3'] . ". High-grade bubble wrap, corrugated sheets, sturdy boxes, and experienced moving professionals.";
        $data['keywords'] = "packing and moving services, high quality packing, professional packers, secure moving";
        $data['module'] = "services";
        $data['view_file'] = "packing_moving";
        echo Modules::run('template/layout2', $data);
    }

    function loadingUnloading()
    {
        $data['title'] = "Safe Loading and Unloading Services | " . $this->comp['company3'];
        $data['description'] = "Safe and professional loading and unloading services by " . $this->comp['company3'] . ". Expert handlers for heavy furniture, fragile electronics, and delicate goods.";
        $data['keywords'] = "loading unloading services, heavy goods loading, safe unloading, luggage handling";
        $data['module'] = "services";
        $data['view_file'] = "loading_unloading";
        echo Modules::run('template/layout2', $data);
    }
}
