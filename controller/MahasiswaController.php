<?php 
require 'model/Mahasiswa.php';

class MahasiswaController {
    private $model;

    public function __construct() {
        $this->model = new Mahasiswa();
    }

    public function index() {
        $mahasiswa = $this->model->getAll();
        include('view/TableMahasiswa.php');
    }

    public function show($id) { 
        $mahasiswa = $this->model->getById($id);
        include('view/DetailMahasiswa.php');
    }
}
?>
