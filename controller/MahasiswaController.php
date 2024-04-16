<?php 
require 'model/Mahasiswa.php';
// require 'model/book.php';

 class MahasiswaController{

    private $model;

    public function __construct(){
    $this->model = new Mahasiswa();
    }

    public function index(){
        $mahasiswa= $this->model->getAll();
        include('view/TableMahasiswa.php');
    }

 }
 ?>