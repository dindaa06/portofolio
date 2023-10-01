<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profile | Adinda Khusnul Khotimah</title>
  <!-- <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.css" /> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- My Css-->
  <link rel="stylesheet" href="./style.css" />

  <link rel="icon" href="./image/icon.png" type="image/x-icon" />

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  <title>My Profile | Adinda Khusnul Khotimah</title>
</head>

<body>
  <header class="header" id="navbar">
    <a href="#" class="logo">MyProfile</a>
    <!--Navbar-->
    <nav class="navbar">
      <a class="nav-link active" aria-current="page" href="#home">Home</a>
      <a class="nav-link active" href="#about">About</a>
      <a class="nav-link active" href="#contact">Let's Talk</a>
      <a class="nav-link active" href="http://[::1]/portofolio/halamanadmin">Admin</a>
    </nav>
    <!--Navbar-->
  </header>
  <section class="home" id="home">
    <div class="home-content">
      <h3>Hello, peeps!</h3>
      <h1>My name is Adinda</h1>
      <h5>
        I was born in Makassar and currently studying at Ujung Pandang State Polytechnic under the major of Computer and Network Engineering. I hold a strong dedication to self-development with the goal of becoming an AI Engineer in the
        future
      </h5>
      <div class="home-sci">
        <a href="https://www.instagram.com/dindaa.06/" class="fw-bold social-icon"><i class="bi bi-instagram text-light"></i></a>
        <a href="https://github.com/dindaa06" class="fw-bold social-icon"><i class="bi bi-github text-light"></i></a>
        <a href="https://www.linkedin.com/in/adinda-khusnul-khotimah/" class="fw-bold social-icon"><i class="bi bi-linkedin text-light"></i></a>
        <a href="https://wa.me/+62895342084839" class="fw-bold social-icon"><i class="bi bi-whatsapp text-light"></i></a>
      </div>
      <a href="#about" class="btn-box">More about me</a>
    </div>
    <span class="home-imgHover"></span>
  </section>

  <div class="about" id="about" style="margin-bottom: 100px;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="about-img d-flex mx-auto">
            <img src="image/avatar.png" />
          </div>
        </div>
        <div class="col-sm-12 col-md-8">
          <div class="data-dinda">
            <div>
              <h2 class="judul-data">BIODATA</h2>
            </div>
            <div class="row" style="margin-bottom: 80px">
              <div class="row justify-content-center text-divider">
                <div class="col-4 f-20">Name</div>
                <div class="col-8 f-20">Adinda Khusnul Khotimah</div>
              </div>
              <div class="row justify-content-center text-divider">
                <div class="col-4 f-20">Date of birth</div>
                <div class="col-8 f-20">06 April 2004</div>
              </div>
              <div class="row justify-content-center text-divider">
                <div class="col-4 f-20">Location</div>
                <div class="col-8 f-20">Makassar, Indonesia</div>
              </div>
              <div class="row justify-content-center text-divider">
                <div class="col-4 f-20">Hobby</div>
                <div class="col-8 f-20">Reading Fiction Books, Watching Movies, and Singing</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Form Message-->
  <section class="contact" id="contact">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>Send me a message, I will be touch with you shortly.</h2>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-8 p-5">
        <form>
          <div class="mb-3">
            <label for="name" class="form-label">Email Address</label>
            <input type="text" class="form-control form-control-sm" id="name" aria-describedby="name" />
          </div>
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control form-control-sm" id="name" aria-describedby="name" />
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control form-control-sm" id="message" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-primary c-button">Send!</button>
        </form>
      </div>
    </div>
  </section>


  <script src="bootstrap-5.0.2-dist/js/bootstrap.js"></script>
  <script src="./main.js"></script>
</body>

</html>