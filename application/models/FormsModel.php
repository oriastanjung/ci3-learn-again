<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormsModel extends CI_Model {

    // Method dummy untuk memproses data form
    public function process_form($email, $password, $feedback, $gender, $subscribe, $hobbies) {
        // Proses data (dummy saja, tidak ada DB)

        // Ubah array hobbies menjadi string untuk ditampilkan
        $hobbies_list = is_array($hobbies) ? implode(', ', $hobbies) : $hobbies;

        return "Data received!@: Email = $email, Password = $password, Feedback = $feedback, Gender = $gender, Subscribe = $subscribe, Hobbies = $hobbies_list";
    }
}
