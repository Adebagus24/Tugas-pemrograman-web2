<?php 
 include('koneksi.php'); 
  if(isset($_GET['id'])){ 
 
 $npm=$_GET['id']; 
 $namafile = 'img_'.$npm.'.jpg';     
 
if(is_file("file/".$namafile)){  
    unlink("file/".$namafile);  
} 
    $del=mysqli_query($koneksi,"DELETE FROM tbmahasiswa WHERE npm='$npm'");     if($del){ 
    echo'Data mahasiswa berhasil dihapus! ';
    echo'<a href="index.php">Kembali</a>';
}else{
    echo'Gagal menghapus data! ';
    echo'<a href="index.php">Kembali</a>';
}
}
?>