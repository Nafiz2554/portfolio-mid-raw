<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <div id="clock">

          <div id="time">
            <div>
              <span id="hours">00</span>
              <span>H</span>
            </div>
            <div>
              <span id="minutes">00</span>
              <span>M</span>
            </div>
            <div>
              <span id="seconds">00</span>
              <span>S</span>
            </div>
            <div>
              <span id="phase">AM</span>
            </div>
          </div>
        </div>
        <script>
          function clock() {
            var hours = document.getElementById("hours");
            var minutes = document.getElementById("minutes");
            var seconds = document.getElementById("seconds");
            var phase = document.getElementById("phase");

            var h = new Date().getHours();
            var m = new Date().getMinutes();
            var s = new Date().getSeconds();
            var am = "AM";

            if (h > 12) {
              h = h - 12;
              var am = "PM";
            }

            h = h < 10 ? "0" + h : h;
            m = m < 10 ? "0" + m : m;
            s = s < 10 ? "0" + s : s;

            hours.innerHTML = h;
            minutes.innerHTML = m;
            seconds.innerHTML = s;
            phase.innerHTML = am;
          }

          var interval = setInterval(clock, 1000);
        </script>

      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="https://nafis54.herokuapp.com/#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#skills">Skills</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#projects">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#pricing">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>

        </ul>

      </div>
    </div>
  </nav>

  <!--Home-->

  <section id="home">
    <div class="wrapper">
      <h2>I'm a <span></span></h2>
      <p>WELCOME TO MY WEBSITE</p>
      <a href="#contact">Contact Me</a>
    </div>

    <a class="icon1" href="https://github.com/Nafiz2554?fbclid=IwAR0_ClGeFcki5jQ_bNOvqdM5-HSSPX1B8QlhU6z73o85BT3lihclvwL84K4" target="_blank"><img src="https://img.icons8.com/color/50/000000/github--v1.png" /></a>
    <a class="icon2" href="https://facebook.com/fuadon.fuad" target="_blank"><img src="https://img.icons8.com/color/48/000000/facebook-circled--v1.png" /></a>
    <a class="icon3" href="https://www.linkedin.com/in/nafiz-fuad-957297205" target="_blank"><img src="https://img.icons8.com/cute-clipart/64/000000/linkedin.png" /></a>
    <div class="car">
      <img src="./img/car2.png">
    </div>
  </section>

  <!--About-->

  <section id="about">
    <div class="circle">
      <img src="./img/nobag.png">
    </div>

    <div class="content">
      <h2>About Me</h2>
      <p>A young mind with excellent analytical and observation skills. Enthusiastic in learning and
        discovering new things and to give the best version of myself from those learning things. Want to
        pursue my career with increasing experience and responsibilities.
      </p>
    </div>

  </section>

  <!--Skills-->

  <section id="skills">
    <h1 class="text-center"><b>My Skills</b></h1>
    <div class="container">
      <div class="row p-lg-3 p-0 mb-lg-3 mb-0">
        <div class="col-lg-6 col-12 pt-lg-0 pt-3">
          <label>HTML</label>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 65%;">65%</div>
          </div>
        </div>
        <div class="col-lg-6 col-12 pt-lg-0 pt-3">
          <label>CSS</label>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 55%;">55%</div>
          </div>
        </div>
      </div>

      <div class="row p-lg-3 p-0 mb-lg-3 mb-0">
        <div class="col-lg-6 col-12 pt-lg-0 pt-3">
          <label>Javascript</label>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 55%;">55%</div>
          </div>
        </div>
        <div class="col-lg-6 col-12 pt-lg-0 pt-3">
          <label>Bootstraps</label>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 70%;">70%</div>
          </div>
        </div>
      </div>

      <div class="row p-lg-3 p-0 mb-lg-3 mb-0">
        <div class="col-lg-6 col-12 pt-lg-0 pt-3">
          <label>Adobe XD</label>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 75%;">75%</div>
          </div>
        </div>
        <div class="col-lg-6 col-12 pt-lg-0 pt-3 ">
          <label>PHP</label>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 30%;">30%</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Projects-->

  <section id="projects">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <iframe src="https://www.youtube.com/embed/am_wkEACtvA" allowfullscreen></iframe>
        </div>
        <div class="carousel-item">
          <iframe src="https://www.youtube.com/embed/qdr_PjzuZrQ" allowfullscreen></iframe>
        </div>
        <div class="carousel-item">
          <iframe src="https://www.youtube.com/embed/MJUssi2c6Ls" allowfullscreen></iframe>
        </div>
        <div class="carousel-item">
          <iframe src="https://www.youtube.com/embed/lCCN_lkl3Xw" allowfullscreen></iframe>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

  </section>

  <!--Pricing-->

  <section id="pricing">
    <div class="container text-center">
      <h1 class="display-4">Pricing</h1>
      <div class="row row-cols-1 row-cols-md-3">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>SILVER</h4>
            </div>
            <div class="card-body">
              <h1>$5/<span class="text-muted">Month</span></h1>
              <ul class="list-unstyled">
                <li>Responsive Designs</li>
                <li>Free Source Code</li>
                <li>Including 5 Pages</li>
                <li>Delivery In 3 Days</li>
              </ul>
              <button class="btn btn-primary px-5">Contact</button>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>GOLD</h4>
            </div>
            <div class="card-body">
              <h1>$14/<span class="text-muted">Month</span></h1>
              <ul class="list-unstyled">
                <li>Responsive Designs</li>
                <li>Free Source Code</li>
                <li>Including 10 Pages</li>
                <li>Delivery In 5 Days</li>
              </ul>
              <button class="btn btn-primary px-5">Contact</button>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>DIAMOND</h4>
            </div>
            <div class="card-body">
              <h1>$19/<span class="text-muted">Month</span></h1>
              <ul class="list-unstyled">
                <li>Responsive Designs</li>
                <li>Free Source Code</li>
                <li>Including 15 Pages</li>
                <li>Delivery In 5 Days</li>
              </ul>
              <button class="btn btn-primary px-5">Contact</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!--Contact-->
  <section id="contact">
    <div class="container mb-5">
      <div class="row">
        <div class="col-lg-7 col-12">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30226.333470853122!2d90.43684583224596!3d23.819582471766076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c62fce7d991f%3A0xacfaf1ac8e944c05!2sBasundhara%20Residential%20Area%2C%20Dhaka!5e1!3m2!1sen!2sbd!4v1636223457492!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        </div>
        <div class="col-lg-5 col-12">
          <form action="index.php" method="post">
            <div class="mb-3">
              <label class="form-label"><b>First Name</b></label>
              <input type="text" class="form-control" name="firstName">
            </div>
            <div class="mb-3">
              <label class="form-label"><b>Last Name</b></label>
              <input type="text" class="form-control" name="lastName">
            </div>
            <div class="mb-3">
              <label class="form-label"><b>Your Address</b></label>
              <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
            </div>
            <div class="mb-3">
              <label class="form-label"><b>Email Address</b></label>
              <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
              <label class="form-label"><b>Enter Your Message</b></label>
              <textarea class="form-control" rows="7" name="message"></textarea>
            </div>
            <button type="submit" class="btn btn-dark">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <?php
$db = pg_connect("host=ec2-54-172-219-6.compute-1.amazonaws.com port=5432 dbname=djrpbbfue4mcl user=uclnuilyeqylxn password=0f8b2131e48996660465a9f87e6c95e4e17e1d7933d4cf626b287d61b3cde4c6");
 $sql = "INSERT INTO `public.portfolios`(firstname, lastname, address, email, message) VALUES ('$_POST[firstName]', '$_POST[lastName]', '$_POST[address]','$_POST[email]' , '$_POST[message]')";
$result = pg_query($sql); 

if ($result === TRUE) {

        echo "<h2 style='color:#ff002f;text-shadow:3px 0px 2px darkslategrey;font-weight: bold;padding-bottom:15px;text-align:center;'>Message sent successsfully</h2>";
      } else {
        echo "Error: " . $sql . "<br>" . $result->error;
      }
    }
?>



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>