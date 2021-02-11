<?php 
include_once "db.php";
if(!isset($_SESSION['userlog'])){
    header("location: index.php");
  }
 $sessid= $_SESSION['userlog'];
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login - Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    .flex-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      margin-top: 12em;
    }

    .flex-item {
      width: 200px;
      height: 150px;
      border-radius: 10px;
      margin: 10px;
    }

    .flex-item p {
      margin-top: 1em;
      text-align: center;
      font-size: 1.4em;
    }

    .flex-item h1 {
      text-align: center;
      font-weight: bold;
    }

    .flex-item-1 {
      background:linear-gradient(135deg, #CE9FFC 0%,#7367F0 100%);
    }

    .flex-item-2 {
      background:linear-gradient(135deg, #42e695 0%,#3bb2b8 100%);
    }
  </style>
</head>
<body style="height:1500px">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid" style="background: #4CAF50;">
    <div class="navbar-header">
      <a class="navbar-brand" href="dashboard.php" style="color:#000;">Sentiment Detection On Text and Audio</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="logout.php" style="color:#000">Logout</a></li>
    </ul>
  </div>
</nav> 
<?php 
$sql=mysqli_query($con,"SELECT * FROM `comments` WHERE `sentiment`='from server:happy'");
$sql2=mysqli_query($con,"SELECT * FROM `comments` WHERE `sentiment`='from server:sad'");
?>
<div class="flex-container">
  <div class="flex-item flex-item-1">
    <p>No of Happy Users</p>
    <h1><?php echo mysqli_num_rows($sql); ?></h1>
  </div>
  <div class="flex-item flex-item-2">
    <p>No of Sad Users</p>
    <h1><?php echo mysqli_num_rows($sql2); ?></h1>
  </div>
</div>
</body>
</html>
