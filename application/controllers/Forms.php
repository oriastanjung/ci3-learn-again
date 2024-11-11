<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Forms extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form'); // Memuat form helper
        $this->load->model("FormsModel"); // Pastikan ini sesuai dengan nama model
    }

    public function index() {
        $this->load->view("forms/index");
    }

    public function submit() {
        // Ambil data dari form
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $feedback = $this->input->post('feedback');
        $gender = $this->input->post('gender');
        $subscribe = $this->input->post('subscribe');
        $hobbies = $this->input->post('hobbies'); // Ini akan menjadi array jika beberapa checkbox dicentang
    
        // Validasi sederhana
        if (empty($email) || empty($password) || empty($feedback) || empty($gender)) {
            echo "All fields are required.";
            return;
        }
    
        // Kirim data ke model untuk diproses
        $result = $this->FormsModel->process_form($email, $password, $feedback, $gender, $subscribe, $hobbies);
    
        // Tampilkan hasil (untuk testing)
        echo $result;
    }
    
}
