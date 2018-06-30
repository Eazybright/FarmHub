<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
    public function __construct(){
        parent::__construct();
            $this->load->database();
            $this->load->model(array('products_model'));
    }
    public function index(){
        if ((isset($_SESSION['logged_in'] ) && $_SESSION['logged_in'] == true )){
            $this->load->view('billing');
        }else{
            $this->load->view('home');
        }
    }
    public function display_products(){
        // if ((isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true)){
			$this->data['title'] = 'Products';

			$this->data['products'] = $this->products_model->get_all();

			$this->load->view('products', $this->data);
		// }else{
		// 	$this->load->view('home');
		// }
    }
    
}