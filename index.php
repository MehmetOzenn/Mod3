<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mehmet ÖZEN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <form style="margin: 200px 200px 0 200px;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Hesaplayalım</label>
          <div class="col-sm-10">
            <input type="text" name="number" class="form-control" id="inputEmail3" required>
          </div>
        </div>
        <button type="submit" name="send" class="btn btn-primary mb-3">3'den Kalan</button>
    </form>
    <div class="row mb-3" style="margin:80px 200px 0  200px;">
      <p style="font-size:24px;font-weight:700;" >Sonuç</p>
      <div class="col-sm-10">
        <p style="font-size:16px" >
        <?php 
          if(isset($_POST['send'])){
            $p =  $_POST['number'] % 3;
            $a = 3 - $p;
            if($p==0){
              echo " Girdiğiniz sayının 3 ile bölümünden kalan 0'dır";
            }

            else echo $_POST['number']." sayısı 3'e bölünemez. Bölünebilecek ilk sayı ".$_POST['number']+$a."'dir";
          }
          else{
            echo " Girdiğiniz sayının 3 ile bölümünden kalan 0'dır";
          }
          ?>
        </p>
      </div>
    </div>
</body>
</html>