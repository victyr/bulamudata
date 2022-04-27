
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
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
                    <h4 class="text-primary"></i>Data entry S.I</h4>
                </a>
                
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Surgery Intensive</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="surgery.php" class="dropdown-item">data entry</a>
                            <a href="surgerypts.php" class="dropdown-item">All patients</a>  
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>HCE program</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="ess.php" class="dropdown-item">Ess program</a>
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


            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">SI Patient Information</h6>
                            <form action="post.php" method="post">
                            <label for="start">Date of Surgery:</label>
                                <input class="form-control mb-3" type="date" id="start" name="date_s" value="2022-04-20">
                                <input class="form-control mb-3" type="text" name="fac_s" placeholder="Facility of Surgery"
                                aria-label="default input example"required>
                                <input class="form-control mb-3" type="text" name="dist_s" placeholder="District"
                                aria-label="default input example"required>
                                
                                <input class="form-control mb-3" type="text" name="lname_s" placeholder="Surname"
                                aria-label="default input example"required>
                            <input class="form-control mb-3" type="text" name="sname_s" placeholder="Given name"
                                aria-label="default input example"required>
                                <fieldset class="row mb-3">
                                    <legend class="col-form-label col-sm-2 pt-0" >Sex</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                id="gridRadios1" value="Male" required>
                                            <label class="form-check-label" for="gridRadios1">
                                                Male
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                id="gridRadios2" value="Female">
                                            <label class="form-check-label" for="gridRadios2">
                                                Female
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
              
                                <label for="age">Age:</label>
                                <input name="age_i" for="age" type="number" style="width:50px" min="0" max="100" required/>
                                   <select for="age" name= "age_s">
                                    <option value="Years" >Years</option>
                                    <option value="Months" >Months</option>
                                    <option value="Weeks" >Weeks</option>
                                    <option value="Days" >Days</option>
                                    </select>
                                    <select for="age" name="ag_c">
                                    <option  value="Adult">Adult</option>
                                    <option  value="Child">Child</option>
                                    </select><br></br>
                                <label for="phone">phone number1:</label>
                                <input class="form-control mb-3" type="tel" id="phone" name="phone_s1"required>
                                <label for="phone">phone number2:</label>
                                <input class="form-control mb-3" type="tel" id="phone" name="phone_s2"required>
                                
              
                            
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Treatment</h6>
                    
                            <div class="mb-3">
                                 <label for="start">Diagnosis 1:</label>
                                    <?php
                                 $con = mysqli_connect("localhost", "root", "", "bulamudb");
                                 $sql="SELECT diag FROM diagnosis";
                                 $res=mysqli_query($con,$sql);
                                 ?>
                               
                                 <select class="form-select mb-3" aria-label="Default select example" name="dia_s1" required>
                                   <?php
                                   while($rows=mysqli_fetch_array($res)){
                                    
                                       ?>
                                       
                                       
                                       <option value="<?php echo $rows['diag']; ?>"> <?php echo $rows['diag']; ?></option>
                                 <?php
                                   }
                                   ?>

                                 </select>
                                </div>
                                <div class="mb-3">
                                <label for="start">Diagnosis 2:</label>
                                    <?php
                                $con = mysqli_connect("localhost", "root", "", "bulamudb");
                                $sql="SELECT diag FROM diagnosis";
                                $res=mysqli_query($con,$sql);
                               ?>
                               
                               <select class="form-select mb-3" aria-label="Default select example" name="dia_s2">
                               <option value=""></option>
                                   <?php
                                   while($rows=mysqli_fetch_array($res)){
                                       ?>
                                       <option value="<?php echo $rows['diag']; ?>"> <?php echo $rows['diag']; ?></option>
                                 <?php
                                   }
                                   ?>

                               </select>
                                </div>
                               
                                <div class="mb-3">
                                <label for="start">Surgery done:</label>
                                    <?php
                                $con = mysqli_connect("localhost", "root", "", "bulamudb");
                                $sql="SELECT sur FROM surgery_d";
                                $res=mysqli_query($con,$sql);
                               ?>
                               
                               <select class="form-select mb-3" aria-label="Default select example" name="sur_1">
                               <option value=""></option>
                                   <?php
                                   while($rows=mysqli_fetch_array($res)){
                                       ?>
                                       <option value="<?php echo $rows['sur']; ?>"> <?php echo $rows['sur']; ?></option>
                                 <?php
                                   }
                                   ?>

                               </select>
                               
                                
                                </div>
                                <div class="mb-3">
                                <label for="start">Surgery done:</label>
                                    <?php
                                $con = mysqli_connect("localhost", "root", "", "bulamudb");
                                $sql="SELECT sur FROM surgery_d";
                                $res=mysqli_query($con,$sql);
                               ?>
                               
                               <select class="form-select mb-3" aria-label="Default select example" name="sur_2">
                               <option value=""></option>
                                   <?php
                                   while($rows=mysqli_fetch_array($res)){
                                       ?>
                                       <option value="<?php echo $rows['sur']; ?>"> <?php echo $rows['sur']; ?></option>
                                 <?php
                                   }
                                   ?>

                               </select>
                               
                                
                                </div>
                                <div class="mb-3">
                                <label for="start">Surgeon Name:</label>
                                    <?php
                                $con = mysqli_connect("localhost", "root", "", "bulamudb");
                                $sql="SELECT surgname FROM surgery_d";
                                $res=mysqli_query($con,$sql);
                               ?>
                               
                               <select class="form-select mb-3" aria-label="Default select example" name="nam_s">
                               <option value=""></option>
                                   <?php
                                   while($rows=mysqli_fetch_array($res)){
                                       ?>
                                       <option value="<?php echo $rows['surgname']; ?>"> <?php echo $rows['surgname']; ?></option>
                                 <?php
                                   }
                                   ?>

                               </select>
                               
                                
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">Final status</label>
                                 <select class="form-select mb-3" aria-label="Default select example" name="final">
                                    <option value="Alive">Alive</option>
                                    <option value="Dead">Dead</option>
                                    <option value="Referred">Referred</option>
                                    </select>
                                </div>  
                            <button type="submit"class="btn btn-primary" name="save">Save</button>
                            </form>
                        </div>
                    </div>

                    
                </div>
            </div>
            <!-- Form End -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
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