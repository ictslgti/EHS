
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hire Worker</title>
  <link rel="stylesheet" href="style1.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<php
$Connection = mysqli_connect("localhost", "root", "", "hire_workers");

if (!$Connection) {
    die("Connection failed: " . mysqli_connect_error());
}

?>

  <!----Navbar-->

  <nav class="navbar navbar-expand-lg navbar-drak" id="navbar">
    <div class="container-fluid">

      <a class="navbar-brand" href="#">

        <div class="img">
          <img src="img/logo.png" alt="Italian Trulli" width="60px" height="40px">
        </div>

      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-expanded="false">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link" href="#home">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Work</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Reviews</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Rating</a>
          </li>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success p-2 my-lg-0 my-2" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>


  <!----Home-->

  <section id="home">
    <h1 class="text-center">HIRE Worker</h1>
    <p> YOUR PERSONAL ASSISTENT </p>
    <div class="input-group m-4">
      <input type="text" class="form-control" placeholder="Email Address">
      <button class="btn signin">Get Started</button>
    </div>
    <br><br><br><br><br><br><br><br>
      <div class="container m-5">
        
          
              <button class="btn"> <img src="img/img2.jpg" alt="Snow" width="100px" height="90px"> <br>Contractors</button>        
              <button class="btn"> <img src="img/img3.jpeg" alt="Snow" width="100px" height="90px"> <br>Rent Tool </button>
              <button class="btn"> <img src="img/img4.jpg" alt="Snow"width="100px" height="90px"> <br>Plumbers</button>
              <button class="btn"> <img src="img/img5.jpg" alt="Snow"width="100px" height="90px"> <br>Electricians</button>
              <button class="btn"> <img src="img/img6.jpg" alt="Snow"width="100px" height="90px"> <br>A/C</button>
              <button class="btn"> <img src="img/img7.jpeg" alt="Snow"width="100px" height="90px"> <br>Carpenters</button>
              <button class="btn"> <img src="img/img8.jpeg" alt="Snow"width="100px" height="90px"> <br>Painters</button> <br> <br> <br>
              <button class="btn"> <img src="img/img9.jpeg" alt="Snow"width="100px" height="90px"> <br>Contractors</button>
              <button class="btn"> <img src="img/img11.jpeg" alt="Snow"width="100px" height="90px"> <br>Welding</button>
              <button class="btn"> <img src="img/img18.jpg" alt="Snow"width="100px" height="90px"> <br>Tile</button>
              <button class="btn"> <img src="img/img17.png" alt="Snow"width="100px" height="90px"> <br>Driver</button>
              <button class="btn"> <img src="img/img10.jpeg" alt="Snow"width="100px" height="90px"> <br>Professionals</button>
              <button class="btn"> <img src="img/img13.jpeg" alt="Snow"width="100px" height="90px"> <br>Masons</button>
              <button class="btn"> <img src="img/img14.jpeg" alt="Snow"width="100px" height="90px"> <br>CCTV</button> <br> <br> <br>
              <button class="btn"> <img src="img/img15.jpeg" alt="Snow"width="100px" height="90px"> <br>Vehicle Repairs</button>
              <button class="btn"> <img src="img/img16.jpeg" alt="Snow"width="100px" height="90px"> <br>Cleaners</button>
             
              

          </div>
        </div>
      </div>
  </section>

  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>

</html>