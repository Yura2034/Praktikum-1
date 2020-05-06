<!doctype html>
<html >
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        body{
            width: 600px;
            margin: 0 auto;
            margin-bottom: 20px;
        }
        h1{
            margin-bottom: 20px;
        }
    </style>

    <title>Formulir</title>
  </head>
  <body>
    <h1>CETAK FORMULIR</h1>
    <p>Nama                     : <?php echo $_POST["Nama"]; ?> </p>
    <p>NIM                      : <?php echo $_POST["NIM"]; ?> </p>
    <p>Tanggal Lahir            : <?php echo $_POST["Tanggallahir"]; ?> </p>  
    <p>Tempat Lahir             : <?php echo $_POST["TempatLahir"]; ?></p>  
    <p>Umur                     : <?php echo $_POST["Umur"], " ";  
        if($_POST["Umur"] <= 10 ){
                echo "(Anak-anak)";
        }
        elseif($_POST["Umur"] <= 20){
                echo "(Remaja)";
        }
        elseif($_POST["Umur"] <= 30){
                echo "(Dewasa)";
        }
        else{
                echo "(Tua)";
        }
        ?> </p>

    <p>Hobi         : <?php echo $_POST["Hobi"]; ?> </p>  
    <p>Keterangan    : <?php echo $_POST["Keterangan"]; ?> </p>  
  
  </body>
</html>