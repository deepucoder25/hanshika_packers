<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
class Home extends MX_Controller
{
    function error()
    {
        $this->oldurl_to_newurl();
        $data['title'] = "Page Not Found (404) | " . $this->comp['company3'];
        $data['description'] = "The page you requested could not be found on " . $this->comp['company3'] . ". Please navigate back to home or contact our support team.";
        $data['keywords'] = "404 not found, page error, " . strtolower($this->comp['company3']);
        $data['module'] = "home";
        $data['view_file'] = "error";
        echo Modules::run('template/layout2', $data);
    }
    function index()
    {
        $data['title'] = "Best Packers and Movers in India | " . $this->comp['company3'] . " - Safe & Fast Shifting";
        $data['description'] = "Hire top-rated packers and movers in India. " . $this->comp['company3'] . " offers safe household shifting, office relocation, car & bike transport at affordable rates.";
        $data['keywords'] = "packers and movers, home shifting, office relocation, car transport, bike transport, " . strtolower($this->comp['company3']) . ", relocation services India";

        $data['module'] = "home";
        $data['view_file'] = "home";
        echo Modules::run('template/layout1', $data);
    }

    public function oldurl_to_newurl()

    {

        // if (@$this->uri->segment(1) == "packers-movers-bihar-india") {
        //     redirect("bihar", 'location', 301);
        // }
    }
}
