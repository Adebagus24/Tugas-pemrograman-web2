<!DOCTYPE html> 
<html> 
<head> 
    <title>Tambah data</title> 
</head> 
<body> 
    <h1>Tambah Data Mahasiswa</h1> 
    <br/> 
        <a href="index.php">Data Mahasiswa</a> 
    <br/><br/> 

    <form action="prosestambah12.php" method="post" enctype="multipart/form-data"> 
    <table width="400" >         
        <tr> 
            <td>NPM</td> 
            <td><input type="text" name="npm"></td> 
        </tr> 
        <tr>             
            <td>Nama</td> 
            <td><input type="text" name="nama" requied></td> 
        </tr> 
        <tr> 
            <td>Jenis Kelamin</td> 
            <td> 
                <input type="radio" value=L name="jekel">Laki-laki  
                <input type="radio" value=P name="jekel">Perempuan 
            </td> 
        </tr> 
        <tr> 
            <td>Jurusan</td> 
            <td> 
            <Select name=jurusan> 
                <option value=SI Informasi>SI</option> 
                <option value=TI Informatika>TI</option> 
                <option value=SIA Informatika>SIA</option> 
            </select> 
            </td> 
        </tr> 
        <tr> 
            <td>Kelas</td> 
            <td><input type="text" name="kelas"></td> 
        </tr> 
        <tr> 
            <td>Photo</td> 
            <td><input type="file" name="file"></td> 
        </tr> 
        <tr> 
            <td></td> 
            <td> 
            <br/><br/> 
                <input name="save" type="submit" value="SIMPAN"> 
                <input name="BtnBatal" type="reset" value="BATAL" /> 
            </td> 
        </tr>        
    </table> 
     
    </form> 
</body> 
</html> 
