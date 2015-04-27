<?php
	class menu extends CI_Controller{
		
		function __construct(){
			
			parent::__construct();
			
		}
		
		function index(){
			
			$this->load->view('page/home/home');
		}
		
		function home(){
			
			$this->load->view('page/home/home');
		}
		
		function about(){
			
			$this->load->view('page/about/index');
		}
		
		function contact(){
			
			$this->load->view('page/contact/index');
		}
		
		/* Tutorial */
		
		function html(){
			$this->load->view('page/tutorial/html/index');
		}
		function php(){
			$this->load->view('page/tutorial/php/index');
		}
		function css(){
			$this->load->view('page/tutorial/css/index');
		}
		/* End Tutorial */
		
	}