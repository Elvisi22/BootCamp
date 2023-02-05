<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CIT BOOTCAMP</title>
  
  <style>
   

    body {
      margin: 0;
      box-sizing: border-box;
    }

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

    /* CSS for main element */
    .intro {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      width: 100%;
      height: 520px;
      background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.5) 100%), url("https://images.unsplash.com/photo-1505238680356-667803448bb6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80");
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }

    .intro h1 {
      font-family: sans-serif;
      font-size: 60px;
      color: #fff;
      font-weight: bold;
      text-transform: uppercase;
      margin: 0;
    }

    .intro p {
      font-size: 20px;
      color: #d1d1d1;
      text-transform: uppercase;
      margin: 20px 0;
    }

    .intro button {
      background-color: #5edaf0;
      color: #000;
      padding: 10px 25px;
      border: none;
      border-radius: 5px;
      font-size: 20px;
      font-weight: bold;
      cursor: pointer;
      box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.4)
    }

    .achievements {
      display: flex;
      justify-content: space-around;
      align-items: center;
      padding: 40px 80px;
    }

    .achievements .school {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 0 40px;
    }

    .achievements .school i {
      width: fit-content;
      font-size: 50px;
      color: #333333;
      border-radius: 50%;
      border: 2px solid #333333;
      padding: 12px;
    }

    .achievements .school .school-heading {
      font-size: 20px;
      color: #333333;
      text-transform: uppercase;
      margin: 10px 0;
    }

    .achievements .school .school-text {
      font-size: 15px;
      color: #585858;
      margin: 10px 0;
    }

    .about-us {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 40px 80px;
      border-top: 2px solid #eeeeee;
    }

    .about-us img {
      width: 250px;
      max-width: 100%;
      height: auto;
      border-radius: 10px;
    }

    .about-us-text h2 {
      font-size: 30px;
      color: #333333;
      text-transform: uppercase;
      margin: 0;
    }

    .about-us-text p {
      font-size: 15px;
      color: #585858;
      margin: 10px 0;
    }

    /* CSS for footer */
    .footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #0c0809;
      padding: 40px 80px;
    }

    .footer .copy {
      color: #fff;
    }

    .bottom-links {
      display: flex;
      justify-content: space-around;
      align-items: center;
      padding: 40px 0;
    }

    .bottom-links .links {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 0 40px;
    }

    .bottom-links .links span {
      font-size: 20px;
      color: #fff;
      text-transform: uppercase;
      margin: 10px 0;
    }

    .bottom-links .links a {
      text-decoration: none;
      color: #a1a1a1;
      padding: 10px 20px;
    }
  </style>
</head>

<body>
  <header class="header">
    <a href="#" class="logo">CIT</a>
    <nav class="nav-items">
      <a href="signup.php">Register</a>
      <!-- <a href="index.php">Login as user</a> -->
      <a href="index.php">Log in</a>
    </nav>
  </header>
  <main>
    <div class="intro">
      <h1>CIT BOOTCAMP</h1>
      <p>Course program offered by Canadian Institute Of Technology</p>
      <button onclick="location.href='https://www.cit.edu.al/';">Learn More</button>
      
    </div>
    <div class="achievements">
      <div class="school">
        <i class="fas fa-atom"></i>
        <p class="school-heading">Courses</p>
        <p class="school-text">We offer different courses depending on your interes , starting from database , web development, programming on java, python  etc</p>
      </div>
      <div class="school">
        <i class="fas fa-skiing"></i>
        <p class="school-heading">Skills</p>
        <p class="school-text">Our courses start with the basics ,so anyone can register.</p>
      </div>
      <div class="school">
        <i class="fas fa-ethernet"></i>
        <p class="school-heading">Certificate</p>
        <p class="school-text">On the end of the course you will get a cretificate of complition that is known anywhere</p>
      </div>
    </div>
    <div class="about-us">
      <div class="about-us-text">
        <h2>About US</h2>
        <p>CIT Bootcamp was open on Februrary 2023 to help it's students and other people who are interested to learn more when it comes to technology ,AI and programming</p>
      </div>
      <img src="leaf_cit.png" alt="cit">
    </div>
  </main>
  <footer class="footer">
    <div class="copy">&copy; 2023 Elvis Barjami</div>
    <div class="bottom-links">
      <div class="links">
        <span>More Info</span>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
      </div>
      
    </div>
  </footer>
</body>

</html>