

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Bulamu Programs</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"></i>All programs</h3>
                </a>
                
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Acute care</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="angel.php" class="dropdown-item">Angel Program</a>
                            <a href="surgerypts.php" class="dropdown-item">Surgical Intensive</a>  
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>HCE program</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="hcedis.php" class="dropdown-item">District and facilities</a>
                            <a href="et.php" class="dropdown-item">ET program</a>
                        </div>
                    </div>
                    <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>CST program</a>

                </div>
            </nav>
        </div>
        <!-- Sidebar End -->



        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                
                
            </nav>
            <!-- Navbar End -->

       <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">ESS and ESS submission form</h6>
                            <form>
                                    <label for="district" class="col-sm-3 col-form-label">District</label>
                                    <select for="district" name= "district">
                                    <option value="Years" >Bunyangabu</option>
                                    <option value="Months" >Kyegegwa</option>
                                    <option value="Weeks" >Budaka</option>
                                    <option value="Days" >Namutumba</option>
                                    </select><br></br>
                                    
                                    <label for ="district" class="col-sm-3 col-form-label">Period</label>
                                    <select for="district" name="period">
                                    <option  value="jan">January</option>
                                    <option  value="feb">February</option>
                                    <option  value="mar">March</option>
                                    <option  value="april">April</option>
                                    <option  value="may">May</option>
                                    <option  value="jun">June</option>
                                    <option  value="july">July</option>
                                    <option  value="aug">August</option>
                                    <option  value="sept">September</option>
                                    <option  value="oct">October</option>
                                    <option  value="nov">November</option>
                                    <option  value="dec">December</option>
                                    </select>
                                    <select for="district" name="period">
                                    <option  value="jan">2021</option>
                                    <option  value="feb">2022</option>
                                    <option  value="mar">2023</option>
                                    <option  value="april">2024</option>
                                    <option  value="may">2025</option>
                                    </select><br></br>
                                  <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label" for ="secs">C-section</label>
                                    <div class="col-sm-3">
                                        <input  name="csec" style="width:50px">
                                    </div>
                                    <label class="col-sm-4 col-form-label">Other surgeries</label>
                                    <div class="col-sm-2">
                                        <input  name="csec" style="width:50px">
                                    </div>
                                    <label class="col-sm-3 col-form-label" for ="secs">Referral in</label>
                                    <div class="col-sm-3">
                                        <input  name="csec" style="width:50px">
                                    </div>
                                    <label class="col-sm-4 col-form-label">Referrals out</label>
                                    <div class="col-sm-2">
                                        <input  name="csec" style="width:50px">
                                    </div>
                                    <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here"
                                    id="floatingTextarea" style="height: 150px;"></textarea>
                                <label for="floatingTextarea">Comments</label>
                            </div>
                               <div class="m-n2">
                                <button class="btn btn-primary w-100 m-2" type="button">Button</button>
                               </div>
                               
                        
                            </form>
                        </div>
                    </div>
               </div>
            </div>   

            


            <!-- Widgets Start -->
            


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Bulamu healthcare</a>, All Right Reserved. 
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>