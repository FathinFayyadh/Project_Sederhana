<?php 
$action =isset($_GET['$action'])? $_GET['$action']:'/';

switch ($action){
  
    case'/':
        echo"index";
        break;

     case'/detail-mahasiswa':
     echo"Masuk ke detail mahasiswa"; 
     break;
     
     case'/tambah mahasisiwa':
        echo"masukkan dan tambah mahasiswa";
       break;
       
      case '/proses-tambah-mahasiswa':
        echo"masuk ke proses Tambah Mahasiswa"; 
        break;

        case'/delete-mahasiswa':
            echo"masuk keproses  delete";
            break;

         case'/update-mahasiswa':
            echo"Masuk keproses update mahasiswa";
            break;
          case'/proses update mahasiswa':  
            echo"Masuk keproses update mahasiswa";
            break;
            default:
            echo"404 Not Found";
            break;

};

?>