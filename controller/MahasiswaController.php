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
        // return $mahasiswa;
        print_r($mahasiswa);
        // include('view/Table-mahasiswa.php');
    }

 }
 ?>