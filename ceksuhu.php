<?php

        //TODO: Buat Koneksi ke database
         $konek = mysqli_connect("localhost","root","","dbiotsensor");

        //! baca data tabel tb_sensor
         $sql = mysqli_query($konek,"SELECT * FROM tb_sensor ORDER BY id");  //!data terakhir ada berada diatas
        //  $result = mysqli_query($konek,$sql);

        //!baca data paling atas
         $data = mysqli_fetch_array($sql);
         $suhu = $data['suhu'];

        //? uji , apabila nilai suhu belum ada ; maka anggap suhu = 0
        if( $suhu == "" ) $suhu = 0;
       
       //* Cetak nilai suhu
        echo $suhu;
?>
