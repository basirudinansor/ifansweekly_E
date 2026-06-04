<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa | Informatika</title>
</head>
<body>
    <h1 align="center">INFORMATIKA</h1>
    <center>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f0/Bank_Negara_Indonesia_logo_%282004%29.svg/1280px-Bank_Negara_Indonesia_logo_%282004%29.svg.png" width="200px" />
    </center>
    <br>
    <table border="1" cellspacing="0" cellpadding="10px" align="center">
        <tr>
            <td><a href="index.php">Home</a></td>
            <td><a href="profile.php">Profile</a></td>
            <td><a href="contact.php">Contact</a></td>
            <td><a href="mahasiswa.php">Data Mahasiswa</a></td>
        </tr>
    </table>
    <h2>
        Data Mahasiswa
    </h2>
    <a href="tambahdata.php">
        <button>Tambah Data</button>
    </a>
    <table border="1" cellpadding="10px">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Program Studi</th>
            <th>Email</th>
            <th>No. HP</th>
            <th>Foto</th>
            <th>Aksi</th>            
        </tr>        
        <tr>
            <td align="center">1</td>
            <td>Ahmad Jackson</td>
            <td>1132532432432</td>
            <td>Informatika Medis</td>
            <td>ahmad@mail.com</td>
            <td>0866554321322</td>
            <td><img src="assets/images/ahmad.webp" alt="Ahmad" width="60px"></td>  
            <td>
                <a href="editdata.php"><button>Edit</button></a> | 
                <a href="deletedata.php"><button>Hapus</button></a>
            </td>          
        </tr>
    </table>
    <br>
    <hr>
</body>
</html>