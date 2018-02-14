<!DOCTYPE html>
<html lang="en">
<head>
  <title>Layout Twitter Boostrap</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    .header {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    .row.body {height: 450px}
    
    .sidebar {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    @media screen and (max-width: 767px) {
      .sidebar {
        height: auto;
        padding: 15px;
      }
      .row.body {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="header navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Header</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Buku Tamu</a></li>
        <li><a href="#">Kontak Kami</a></li>
        
      </ul>
      
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidebar">
      <p><a href="#">Dumbways</a></p>
      <p><a href="#">Detik</a></p>
      <p><a href="#">Kompas</a></p>
    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Layout Bootstrap</h1>
        <table class="table table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Dibuat Oleh</th>
        <th>Komentar</th>
      </tr>
    </thead>
    <tbody>
     <?php
        $link = mysqli_connect("localhost", "root", "","blog");

            $sql=mysqli_query($link,"SELECT posts.title, users.username, comments.comment
FROM (posts INNER JOIN users on posts.idusers=users.id)
INNER JOIN comments on posts.idposts=comments.postId");
            $no=0;
            while ($data=mysqli_fetch_array($sql)) {
                $judul=$data['title'];
                $user=$data['username'];
                $komen=$data['comment'];
                $no++
            
            
            ?>
    
      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $judul; ?></td>
        <td><?php echo $user; ?></td>
        <td><?php echo $komen; ?></td>
      </tr>
      <?php }?>
    </tbody>
    
  </table>
    </div>
    <div class="col-sm-2 sidebar">
      <div class="well">
        <p>Iklan Premium</p>
      </div>
      <div class="well">
        <p>Iklan Gratis</p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>dibuat oleh Rosid Mustofa</p>
</footer>

</body>
</html>
