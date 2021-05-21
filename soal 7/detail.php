<?php
// Create connection
$conn = mysql_connect('localhost', 'root', '');
$db=mysql_select_db('blog');
$data=mysql_query("select * FROM POSTS,users WHERE users.id=posts.createdBy and posts.id='$_GET[k]'")  or die(mysql_error());
$datakomentar=mysql_query("select *  FROM comments, posts where posts.id=comments.postId and posts.id='$_GET[k]'")  or die(mysql_error());
//data=mysql_query("select posts.title,posts.content, users.username,comments.comment from posts,users,comments where posts.createdBy=users.id and comments.postId=posts.id")  or die(mysql_error());;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@1,300&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <style>

        nav{
            background-color: #002540;
        }
       .container h3{
           margin-top: 95px;
           font-family: 'Playfair Display', serif;
          
       }
       footer .container .col-md-4 ul li{
         list-style-type: none;
       }
      
    </style>
    <nav class="navbar fixed-top">
        <span class="navbar-brand text-white ">Blog</span>
    </nav>
    
    <?php while($hasil = mysql_fetch_array($data)){ ?>
    <div class="container border-bottom w-75 shadow" style="background-color:#e8e8e8;">
    <h3 class="text-center"><?=$hasil['title']; ?></h3>
    <p><?= $hasil['content']; ?></p>
    <footer class="blockquote-footer">Created By <cite title="Source Title"><?= $hasil['username']; ?></cite></footer>
    <p></p>
    </div>
    <?php } ?>
    
    <div class="container mt-2  w-75 ">
        <h4 class="mt-4">Komentar</h4>
            <div class="card " >
        <ul class="list-group list-group-flush">
        <?php while($hs = mysql_fetch_array($datakomentar)){ ?>
            <li class="list-group-item"><?=$hs['comment']; ?></li>
            <?php } ?>
        </ul>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>