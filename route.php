   <?php

   require 'controller/MahasiswaController.php';
   
   $action = isset($_GET['action']) ? $_GET['action'] : '/';  
   $mahasiswaController= new MahasiswaController();
   switch ($action){
      case '/':
         $mahasiswaController->index();
         break;

      case '/detail-mahasiswa':
         echo "Masuk ke detail mahasiswa"; 
         break;

      case '/tambah-mahasiswa':
         echo "Masukkan dan tambah mahasiswa";
         break;

      case '/proses-tambah-mahasiswa':
         echo "Masuk ke proses Tambah Mahasiswa"; 
         break;

      case '/delete-mahasiswa':
         echo "Masuk ke proses delete";
         break;

      case '/update-mahasiswa':
         echo "Masuk ke proses update mahasiswa";
         break;

      case '/proses-update-mahasiswa': 
         echo "Masuk ke proses update mahasiswa";
         break;

      default:
         echo "404 Not Found";
         break;
   }

   ?>
