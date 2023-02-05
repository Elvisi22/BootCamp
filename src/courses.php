<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Courses</title>
    <style>
      /* CSS for header */
    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #f5f5f5;
    }

    .header .logo {
      font-size: 25px;
      /* font-family: 'Sriracha', cursive; */
      color: #000;
      text-decoration: none;
      margin-left: 30px;
    }

    .nav-items {
      display: flex;
      justify-content: space-around;
      align-items: center;
      background-color: #f5f5f5;
      margin-right: 20px;
    }

    .nav-items a {
      text-decoration: none;
      color: #000;
      padding: 35px 20px;
    }
    
    </style>
</head>
<body>
<header class="header">
    <a href="#" class="logo">CIT</a>
    <nav class="nav-items">
      <a href="home.php">Home</a>
      
    </nav>
</header>
    <hr>
    <h1><center>Courses</center></h1>
    <br>
    <hr>
    <br>
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1169&q=80" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Web design</h5>
      <p class="card-text">In this course you will learn how to create your first webpage, using html css javaScript</p>
      <p class="card-text"><small class="text-muted">Last updated 1month ago</small></p>
      <button class="btn btn-primary" id="btn-open" onclick="window.location.href='webdesign.php'">Open</button>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="https://images.unsplash.com/photo-1603302576837-37561b2e2302?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1168&q=80" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Intro to programming</h5>
      <p class="card-text">In this course you will learn how to create your first program, using java, python etc</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      <button class="btn btn-primary" id="btn-open">Open</button>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="https://images.unsplash.com/photo-1516259762381-22954d7d3ad2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1189&q=80" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Database</h5>
      <p class="card-text">This is a course about working and understanding how data works and how it is saved on the database</p>
      <p class="card-text"><small class="text-muted">Last updated 5hours ago</small></p>
      <button class="btn btn-primary" id="btn-open">Open</button>
    </div>
  </div>
</div>
<br>
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Operating Systems</h5>
      <p class="card-text">In this course you will learn how to create your first webpage, using html css javaScript</p>
      <p class="card-text"><small class="text-muted">Last updated 1month ago</small></p>
      <button class="btn btn-primary" id="btn-open">Open</button>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="https://images.unsplash.com/photo-1640552435845-d65c23b75934?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Fundamentals of Eng</h5>
      <p class="card-text">In this course you will learn how to create your first program, using java, python etc</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      <button class="btn btn-primary" id="btn-open">Open</button>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="https://images.unsplash.com/photo-1562819606-b7a0ebd7e7c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Computer Applications</h5>
      <p class="card-text">This is a course about working and understanding how data works and how it is saved on the database</p>
      <p class="card-text"><small class="text-muted">Last updated 5hours ago</small></p>
      <button class="btn btn-primary" id="btn-open">Open</button>
    </div>
  </div>
</div>
    
</body>
</html>