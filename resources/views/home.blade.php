<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mkulima Pro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{asset('images/logo.jpg')}}" alt="" width="100" height="80" class="d-inline-block align-text-top" />
                    <h5>Mkulima Pro</h5>
                </a>
            </div>
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarSupportedContent ">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page " href="/">Home</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#core">Core Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#team">Team</a>
                        </li>
                    </ul>
                    <!-- <form class="d-flex">
                        <input class="form-control me-2" type="search " placeholder="Search " aria-label="Search " />
                        <button class="btn btn-primary" type="submit ">
                Search
              </button>
                    </form> -->
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row align-content-center bg-success">
                <div class="col">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-6 col-sm-6 col-xs-12 about-column bg-dark">
                                <div class="card-body bg-dark text-white text-center">
                                    <h1 class="card-title">Mkulima Pro</h1>
                                    <p class="card-text">
                                        <small class="text-">Get App Today!</small>
                                    </p>
                                    <a href="https://play.google.com/store/apps/details?id=com.mkulimapro.mkulimapro" class="btn btn-light text-dark">Download App</a>
    
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 about-column bg-secondary-subtle">
                                <div class="card-body">
                                    <h3 class="card-title" id="about" style="color:rgb(13, 103, 64) ">About Mkulima Pro</h3>
                                    <p class="card-text">
                                        The app aims to empower farmers by providing access to essential services and resources, including market information and agricultural advice. Leveraging mobile technology, the app democratizes access to agricultural information and services, particularly
                                        among smallholder farmers with limited access to traditional extension services. By equipping farmers with timely and relevant information, the app helps them become more resilient and adaptive in the face of challenges
                                        such as disease infestation and market fluctuations. The app fosters collaboration and knowledge-sharing among farmers through community forums and discussion groups, strengthening the social fabric of rural communities.
                                        The app embodies innovation in agriculture, leveraging digital connectivity to transform farming practices and enhance the productivity and sustainability of maize farming in Kenya.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container-fluid bg-success">
            <div class="row align-content-center">
                <div class="col">
                    <div class="bg-success text-center">
                        <h1 id="core" style="color:rgb(13, 14, 14) ">CORE FEATURES</h1>
                    </div>
                </div>
            </div>
            <div class="card-group">
                <div class="card bg-light">
                    <!-- <img src="#" class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <h5 class="card-title"><span style="color: rgb(17, 17, 17)">Machine learning
                            model to detect
                            diseases</span></h5>
                        <p class="card-text"><span style="color: rgb(17, 17, 17)">The Machine learning model is for detecting maize diseases, like common rust, gray leaf spot, and blight, analyze plant images and data. They utilize algorithms to detect visual patterns indicative of each disease, aiding farmers in early identification and targeted treatment, ultimately enhancing crop yield and agricultural sustainability.                        </small></p>
                    </div>
                </div>
                <div class="card bg-light">
                    <!-- <img src="#" class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <h4 class="card-title"><span style="color: rgb(17, 17, 17)">Recommending
                            herbicides to farmers</span></h4>
                            <p class="card-text"><span style="color: rgb(17, 17, 17)">The app also recommend herbicide for farmers suggesting optimal herbicides based on crop type, weed species, and location. It utilizes machine learning algorithms trained on agronomic data to provide tailored solutions, maximizing effectiveness and minimizing environmental impact. This tool streamlines decision-making, enhancing crop yield and sustainable farming practices.</small></p>
                    </div>
                </div>
                <div class="card bg-light">
                    <!-- <img src="#" class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <h5 class="card-title"><span style="color: rgb(17, 17, 17)">Getting herbicides
                            ready for the farmer to
                            order</span></h5>
                                <p class="card-text"><span style="color: rgb(17, 17, 17)">To prepare herbicides for farmer orders, suppliers stock products based on demand and seasonal requirements. They ensure availability through inventory management systems, tracking usage trends and market needs. Farmers can conveniently place orders through online platforms or directly with suppliers, ensuring timely delivery for crop protection.
                                </span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-success">
            <div class="row align-content-center">
                <div class="col">
                    <div class="bg-success text-center">
                        <h1 style="color:rgb(13, 14, 14) " id="team">OUR TEAM</h1>
                    </div>
                </div>
            </div>
            <div class="card-group">
                <div class="card bg-light">


                <div id="carouselExampleFade" class="carousel slide carousel-fade">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/nick1.jpeg" class="d-block w-100 card-img-top" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/nick2.jpeg" class="d-block w-100 card-img-top" alt="...">
    </div>
    <!-- <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div> -->
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



                    <!-- <img src="images/nick1.jpeg" class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <h5 class="card-title"><span style="color: rgb(17, 17, 17)">Nicholas Ngaruiya</span></h5>
                        <p class="card-text"><span style="color: rgb(17, 17, 17)">App Developer and ML Expert</span></p>
                    </div>
                </div>
                <div class="card bg-light">
                    <img src="images/alice3.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><span style="color: rgb(17, 17, 17)">Alice Njonjo</span></h5>
                        <p class="card-text"><span style="color: rgb(17, 17, 17)">FullStack Developer</span></p>
                    </div>
                </div>           
                <div class="card bg-light">
                    <img src="images/havi.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><span style="color: rgb(17, 17, 17)">Elvis Havi</span></h5>
                        <p class="card-text"><span style="color: rgb(17, 17, 17)">Graphical designer and Developer</span></p>
                    </div>
                </div>
                <div class="card bg-light">
                    <img src="images/frank.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><span style="color: rgb(17, 17, 17)">Francis Mosoti</span></h5>
                        <p class="card-text"><span style="color: rgb(17, 17, 17)">Software Developer</span></p>
                    </div>
                </div>
                <div class="card bg-light">
                <div id="carouselFade" class="carousel slide carousel-fade">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="images/habz.jpeg" class="card-img-top d-block w-100" alt="...">
                        <!-- <img src="" class="d-block w-100" alt="..."> -->
                        </div>
                        
                        <div class="carousel-item">
                        <img src="images/habz1.jpeg" class="card-img-top d-block w-100" alt="...">
                        <!-- <img src="" class="d-block w-100" alt="..."> -->
                        </div>
                        
                        
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselFade" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselFade" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>






                    
                    <div class="card-body">
                        <h5 class="card-title"><span style="color: rgb(17, 17, 17)">Habiba Halkano</span></h5>
                        <p class="card-text"> <span style="color: rgb(17, 17, 17)">Software Developer</span></p>
                    </div>
                </div>
                <div class="card bg-light">
                    <img src="images/marvin.jpeg" height class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><span style="color: rgb(17, 17, 17)">Marvin Ogutu</span></h5>
                        <p class="card-text"><span style="color: rgb(17, 17, 17)">App Developer and Engineer</span></p>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- <div class="container-fluid py-4 bg-success">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 newsletter-column">
                    <div class="text-dark text-center text-capitalize">
                        <H2>Sign up for Newsletter</H2>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 newsletter-column">
                    <div class="subscribe-form text-end">
                        <form>
                            <input type="email" placeholder="Enter your email" />
                            <button type="submit" class="btn btn-primary">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> -->
    </main>

    <footer class="page-footer font-small blue bg-dark">
        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">
            <!-- Grid row -->
            <div class="row">
                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">
                    <!-- Content -->
                    <h5 class="text-uppercase">MKULIMA PRO</h5>
                    <div class="col-md-3 col-sm-6 col-xs-12 footer-column">
                        <div class="logo-wideget footer-wideget">
                            <div class="footer-logo">
                                <img src="images/logo.jpg" alt="logo" width="100" height="80" />
                            </div>
                            <div class="text-white">
                                <p>
                                    Get the latest version of Mkulima Pro App <a href="https://play.google.com/store/apps/details?id=com.mkulimapro.mkulimapro">here</a>!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none pb-3" />

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">
                    <!-- Links -->
                    <h5 class="text-uppercase text-white">Follow Us On</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#"><i class="bi bi-facebook"></i>Facebook</a>
                        </li>
                        <li>
                            <a href="#"><i class="bi bi-twitter"></i>Twitter</a>
                        </li>
                        <li>
                            <a href="#"><i class="bi bi-instagram"></i>Instagram</a>
                        </li>
                        <li>
                            <a href="#"><i class="bi bi-linkedin"></i>Linked In</a>
                        </li>
                    </ul>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">
                    <!-- Links -->
                    <h5 class="text-uppercase text-white">Contact Us</h5>
                    <ul class="list-group">
                        <li class="list-group-item">Call: 0712345678</li>
                        <li class="list-group-item">Email: mkulimapro@gmail.com</li>
                    </ul>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
        <div class="container-fluid py-3 bg-light">
            <div class="text-muted text-center text-dark">
                Copyright © <a href="#">MKULIMA PRO</a> 2024. All Rights Reserved
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js " integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js " integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13 " crossorigin="anonymous "></script>
</body>

</html>