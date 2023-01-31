
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@1&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <title>Document</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Travel Around World</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php"
              >Home <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="service.php">Services</a>
          </li
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact Us</a>
          </li>
      
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input
            class="form-control mr-sm-2"
            type="search"
            placeholder="Search"
            aria-label="Search"
          />
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
            Search
          </button>
        </form>
      </div>
    </nav>

    <div id="demo" class="carousel slide" data-ride="carousel">
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
      </ul>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="img/img1.webp"
            alt="Los Angeles"
            width="1100"
            height="500"
          />
          <div class="carousel-caption">
            <h3>Los Angeles</h3>
            <p>We had such a great time in LA!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/img2.webp" alt="Chicago" width="1100" height="500" />
          <div class="carousel-caption">
            <h3>Chicago</h3>
            <p>Thank you, Chicago!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/img3.webp" alt="New York" width="1100" height="500" />
          <div class="carousel-caption">
            <h3>New York</h3>
            <p>We love the Big Apple!</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">About Us</h2>
        </div>
    <div class="container-fluid  ">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <img src="img/img4.webp" class="img-fluid aboutimg">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <h2 class="display4">We Provide Cheapest Travelling Aroung The World</h2>
            <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et similique voluptatem ipsam voluptate culpa, voluptates libero magni, illo, amet obcaecati doloribus modi officia deleniti labore ab aliquam. Nisi, quibusdam amet.</p>
            <a href="abpoit.php" class="btn btn-success">Wanna know more</a>
        </div>
         <div>
        </div>
</div>
    </section>

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center"> Our Services</h2>
        </div>
        <div class="container-fluid  ">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card" >
                        <img class="card-img-top" src="img/img5.webp" alt="Card image">
                        <div class="card-body">
                          <h4 class="card-title">John Doe</h4>
                          <p class="card-text">Some example text.</p>
                          <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                      </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card" >
                        <img class="card-img-top" src="img/img11.webp" alt="Card image">
                        <div class="card-body">
                          <h4 class="card-title">John Doe</h4>
                          <p class="card-text">Some example text.</p>
                          <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                      </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card" >
                        <img class="card-img-top" src="img/img9.webp" alt="Card image">
                        <div class="card-body">
                          <h4 class="card-title">John Doe</h4>
                          <p class="card-text">Some example text.</p>
                          <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                      </div>
                </div>
            </div>

    </section>

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center"> Gallery</h2>
        </div>
        <div class="container-fluid  ">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="img/img6.webp" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="img/img7.webp" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="img/img8.webp" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="img/img9.webp" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="img/img10.webp" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="img/img11.webp" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="img/img12.webp" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="img/img13.webp" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="img/img5.webp" class="img-fluid pb-4">
                </div>
            </div>
        </div>
        </section>
        <section class="my-5">
            <div class="py-5">
                <h2 class="text-center"> Contact US</h2>
                <div class="w-50 m-auto">
                    <form action="userinfo.php " method="post">
                        <div class="form-group">
                            <label >Username</label>
                 <input type="text " name="user" autocomplete="off" class="form-control">
                 <label >Email Id</label>
                 <input type="text " name="email" autocomplete="off" class="form-control">
                 <label >Mobile</label>
                 <input type="text " name="mobile" autocomplete="off" class="form-control">
                 <label class="-2">Comments</label>
                 <textarea  class="form-control" name="comments" ></textarea>
                </div>
                 <button type="submit " class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
          </section 


       <!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center  bg-dark text-white py-3">© 2020 Copyright:
    <a href="/">@subodhsalve14</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
  </body>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</html>

