<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <script type="text/javascript" src="jquery/jquery.min.js"></script>

    <!-- //* load otomatis /realtime -->
    <script type="text/javascript">
      $(document).ready( function() {
        
        setInterval( function () {
          $("#ceksuhu").load("ceksuhu.php");
          $("#cekhumidity").load("cekhumidity.php");
        },1000  );
        

      } )
    </script>

    <title>IoT Sensor</title>
  </head>
  <body>
    
    <div class="container" style="text-align: Center; margin-top:200px "> 
    
      <h2>Monitoring Sensor DHT11 & Soil <br>Secara Real Time</h2>

      <div style="display: flex;">
       <!-- //!Menampilkan Sensor Suhu  -->
     <div class="card text-center" style="width:33.33%">
      <div class="card-header" style="font-size: 30px; font-weight:bold; background-color: yellow">
      Suhu
      </div>
      <div class="card-body">
       <h1> <span id="ceksuhu"> 0 </span> </h1>
      </div>
      
     </div>
      <!-- //!Akhir Menampilkan Sensor -->

        <!-- //?Menampilkan Sensor Humidity  -->
        <div class="card text-center" style="width:33.33%">
      <div class="card-header" style="font-size: 30px; font-weight:bold; background-color: blue">
      Humidity
      </div>
      <div class="card-body">
       <h1> <span id="cekhumidity"> 0 </span> </h1>
      </div>
      
     </div>
      <!-- //?Akhir Menampilkan Sensor Humidity -->

        <!-- //*Menampilkan Sensor Soil  -->
        <div class="card text-center" style="width:33.33%">
      <div class="card-header" style="font-size: 30px; font-weight:bold; background-color: green ">
      Soil
      </div>
      <div class="card-body">
       <h1> <span id="ceksoil"> 0 </span> </h1>
      </div>
      
     </div>
      <!-- //*Akhir Menampilkan Sensor Soil -->
      </div>

    </div>
  


















    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>
