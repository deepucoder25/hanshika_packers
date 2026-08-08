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
        $data['title'] = "Customer Reviews & Testimonials | " . $this->comp['company3'];
        $data['description'] = "Read genuine customer reviews and success stories for household shifting, office relocation, and bike/car transport services provided by " . $this->comp['company3'] . ".";
        $data['keywords'] = "customer reviews, relocation testimonials, packers movers feedback, client ratings, " . strtolower($this->comp['company3']);
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

