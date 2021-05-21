<?php
// Create connection
$conn = mysql_connect('localhost', 'root', '');
$db=mysql_select_db('blog');
$data=mysql_query("select * FROM POSTS ORDER BY id asc")  or die(mysql_error());;

//data=mysql_query("select posts.title,posts.content, users.username,comments.comment from posts,users,comments where posts.createdBy=users.id and comments.postId=posts.id")  or die(mysql_error());;
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <title> Home</title>
</head>
<body>
  
    <style>
   
        nav,footer{
            background-color: #002540;
        }
       .container h1.display-2{
           margin-top: 85px;
           font-family: 'Dancing Script', cursive;
       }
       footer .container .col-md-4 ul li{
         list-style-type: none;
       }
    </style>
    <nav class="navbar fixed-top">
        <span class="navbar-brand text-white ">Blog</span>
    </nav>
    <div class="container mt-5">
        <h1 class="display-2 text-center ">Welcome</h1>
        <p class="lead text-center mb-5">
            This is a lead paragraph. It stands out from regular paragraphs.
          </p>
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner shadow ">
              <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1581011062468-93be6b8cb301?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2048&q=80" class="d-block w-100 rounded " alt="..." height="400px">
             
              </div>
              <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1574788901656-6a9ee34a3fa7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=967&q=80" class="d-block w-100 rounded" alt="..." height="400px">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          
          </div>

        
          
          <?php while($hasil = mysql_fetch_array($data)){ ?>
          <div class="card mx-auto mt-5" style="max-width: 700px;">
          
            <div class="row no-gutters">
              <div class="col-md-4 ">
                <img src="https://images.unsplash.com/photo-1468581264429-2548ef9eb732?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"  width="230px" height ="188px" alt="...">
              </div>
              <div class="col-md-8 ">
                <div class="card-body">
                   
                  <h5 class="card-title text-center"><?=$hasil['title']; ?></h5>
                  <p class="card-text"><?= substr($hasil['content'],0,100) ?> </p>
                  <a href="detail.php?k=<?=$hasil['id'];?>" class="btn btn-outline-secondary w-100"> Lihat </a>
                   
                
                </div>
              </div>
            </div>
            
          </div>
          <?php }?>




          


    </div>
   

    <footer class="fixed h-50 mt-4 text-white"> 
          <div class="container">
          <div class="row  text-center ">
          <div class="col-md-4 mt-4">
          <h4 >Location</h4>
           <p class="text-center mt-3">Sumatra Barat, <br> Indonesia</p>
           
          </div>
          <div class="col-md-4 mt-4 ">
          <h4 class="">Around The Web</h4>
          <ul class="mt-3 text-center ">
                <li class="text-center ">
                  <a href="#"><i class=" fab fa-youtube  text-white  ml-n5  "></i></a> <!--text-white class dari Bootstap bukan dari font-->
                  <a href="#"> <i class="fab fa-linkedin  text-white     ml-4 "></i></a>
                  <a href="#"> <i class="fas fa-envelope-square  text-white     ml-4 "></i></a>
                  <a href="#"> <i class="fab fa-twitter-square  text-white  fa-1x  ml-4    "></i></a>
                </li>
              </ul>
          </div>
          <div class="col-md-4 mt-4">
           <h4>About</h4>
           <p class="text-center mt-3">Blog adalah website yang mengandung konten </p>
          </div>
          </div>
          </div>
          </footer>
          
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>    
</body>
</html>