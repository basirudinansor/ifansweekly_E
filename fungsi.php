<?php
    $koneksi = mysqli_connect("localhost", "root", "","answeekly-ife");

    function tampildata($query) /// proses data yg kita minta
    {
        global $koneksi;
        $result = mysqli_query($koneksi,$query); /// lemari sesuai perintah kita 

        /// siapkan wadah 
        $rows = [];

        /// ambil data
        while($row = mysqli_fetch_assoc($result))
        {
            $rows[] = $row; /// taruh di wadah
        }

        return $rows; /// array assoc

    }


    function tambahdata($data)
    {
        global $koneksi;

        $nama = htmlspecialchars($data["nama"]);
        $nim = htmlspecialchars($data["nim"]); 
        $prodi = htmlspecialchars($data["prodi"]);
        $email = htmlspecialchars($data["email"]);
        $nohp = htmlspecialchars($data["hp"]);
        $foto = $data["foto"];

        $query = "INSERT INTO mahasiswa (nama,nim,prodi,email,no_hp,foto)
                VALUES ('$nama', '$nim', '$prodi', '$email', '$nohp', '$foto')";
    
        mysqli_query($koneksi,$query);

        return mysqli_affected_rows($koneksi); /// QUERY OK 1 ROW AFFECTED

    }


    function hapusdata($id)
    {
        global $koneksi;

        $query = "DELETE FROM mahasiswa WHERE id=$id";
        mysqli_query($koneksi,$query);

        return mysqli_affected_rows($koneksi); /// QUERY OK 1 ROW AFFECTED
    }

?>