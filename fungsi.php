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

?>