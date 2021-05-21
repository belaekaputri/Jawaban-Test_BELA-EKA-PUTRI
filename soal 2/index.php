
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <form class="w-50 mx-auto mt-5" method="POST" >
    <div class="card ">
    <h3 class="text-center mt-3">Login</h3>
  <div class="form-group row mt-2 ml-2 mr-2 mb-2">
    <label for="user" class="col-sm-3 col-form-label" >Username</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="user" name="user" autocomplete="off">
    </div>
  </div>
  <div class="form-group row mt-2 ml-2 mr-2 mb-2">
    <label for="em" class="col-sm-3 col-form-label">Email</label>
    <div class="col-sm-9">
      <input type="email" class="form-control" id="em" name="em" autocomplete="off">
    </div>
  </div>
  <div class="form-group row mt-2 ml-2 mr-2 mb-2">
    <label for="nohp" class="col-sm-3 col-form-label">No Hp</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="nohp" name="nohp" autocomplete="off">
    </div>
  </div>
  <div class="form-group row mt-2 ml-2 mr-2 mb-2 ">
    <div class="col-sm-12 mx-auto">
      <button type="submit" class="btn btn-primary w-100 mx-auto " name="log">Sign in</button>
    </div>
  </div>

  </div>
</form>
    
    </div>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script> 
</body>
</html>

<?php
 if(isset($_POST['log']))
 {
      // validasi input data
     return validasi();
     
 }
 
 

 function validasi(){
    $user =$_POST['user'];
    $em =$_POST['em'];
    $nohp =$_POST['nohp'];
    $dt=true;
    if(!preg_match("/^[a-z]*$/", $user))
    {
       
        echo "<script> alert(' Username hanya boleh huruf kecil.! ') </script>";
        $dt=false;
    } 
     if (!preg_match("/^[a-z]+@[a-z.]+/", $em)){
      echo "<script> alert(' Email hanya boleh huruf kecil.! ') </script>";
        $dt=false;
     }
     if (!preg_match("/^[0-9|(\+|) ]*$/", $nohp)){
      echo "<script> alert(' Nohp hanya boleh angka,spasi,dan + ') </script>";
        
        $dt=false;
     }

    // jika validasi input terpenuhi
    if( !empty($user) and !empty($em)  and !empty($nohp) and $dt )
    {
        echo "<script>alert('Welcome')</script>";
    }



   
}
?>

