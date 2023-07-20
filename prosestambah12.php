<!DOCTYPE html> 
<html> 
    <head> 
        <title>Upload File </title> 
    </head> 
    <body> 
    <h1>Upload File</h1> 
        <?php          
            include 'koneksi.php';         
            if($_POST['save']){ 
 
            $npm = $_POST['npm']; 
            $nama = $_POST['nama']; 
            $jekel = $_POST['jekel']; 
            $jurusan = $_POST['jurusan']; 
            $kelas = $_POST['kelas']; 
 
            $ekstensi_diperbolehkan = array('png','jpg'); 
 
            $photo = $_FILES['file']['name']; 
            $x = explode('.', $photo); 
            $ekstensi = strtolower(end($x)); 
            $ukuran = $_FILES['file']['size']; 
            $file_tmp = $_FILES['file']['tmp_name']; 
            $namafile = 'img_'.$npm.'.jpg';  
            if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){                 
                if($ukuran < 1044070){                               
                    move_uploaded_file($file_tmp, 'file/'.$namafile); 
                    $query = mysqli_query($koneksi,"insert into tbmahasiswa(npm,nama,jns_kelamin,jurusan,kelas,photo)values('$npm','$nama','$jekel','$jurusan','$kelas','$namafile')");                     
                if($query){ 
                        echo "<script>alert('DATA BERHASIL DI SIMPAN');window.location='index.php';</script>"; 
                    }else{  
                        echo "<script>alert('GAGAL MENGUPLOAD GAMBAR');window.location='index.php';</script>"; 
                    }    }else{ 
                    echo "<script>alert('UKURAN FILE TERLALU BESAR');window.location='tambahdata.php';</script>"; 
                }             
            }else{ 
                echo "<script>alert('EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN');window.location='tambahdata.php';</script>"; 
            } 
        } 
        ?> 
  
    </body> 
</html> 
