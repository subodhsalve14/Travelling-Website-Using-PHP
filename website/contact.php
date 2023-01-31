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
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact Us</a>
          </li>
        
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

  
</div>
    </section>
    <div class="jumbotron">
  <h1>Explore the World</h1>
  <p>“The journey of a thousand miles begins with a single step.”</p>
</div>
 
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

  
</section>
 <!-- Footer -->
 <footer class="page-footer font-small blue">

<!-- Copyright -->
<div class="footer-copyright text-center  bg-dark text-white py-3">© 2020 Copyright:
  <a href="https://www.linkedin.com/in/subodhsalve14/"> @subodhsalve14</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
    </body>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</html>

