
<!DOCTYPE html>
<html lang="en">

<head>
<script src="fun.js"></script>
    <meta charset="utf-8">
    <title>Angel Patient registration and Update</title>
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
                    <h4 class="text-primary"></i>Register a patient</h4>
                </a>
                
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Angel program</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="angelpts.php" class="dropdown-item">add variables</a>
                            <a href="formpts.php" class="dropdown-item">register angel patient</a>
                            <a href="angelpts.php" class="dropdown-item">update patient</a>  
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>HCE program</a>
                        <div class="dropdown-menu bg-transparent border-0">
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
    <form action="" method="post">
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Patient Details</h6>
                            <?php
                                 $con = mysqli_connect("localhost", "root", "", "bulamudb");
                                 $result = mysqli_query($con,"SELECT * FROM angel WHERE id_ang='" . $_GET['id'] . "'");
                                 $row= mysqli_fetch_array($result);
                                 ?>
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th scope="row">Registered on</th>
                                        <td><?php echo $row['dater']; ?></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Name</th>
                                        <td><?php echo $row['snam']; ?></td>
                                        <td><?php echo $row['fnam']; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Sex</th>
                                        <td><?php echo $row['angs']; ?></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Age</th>
                                        <td><?php echo $row['ageang']; ?></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">District</th>
                                        <td><?php echo $row['disang']; ?></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Diagnosized</th>
                                        <td><?php echo $row['diang']; ?></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><?php echo $row['diange']; ?></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><?php echo $row['diangel']; ?></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                                <div class="mb-3">
                                    <label class="form-label">A.P Category</label>
                                    <select class="form-select mb-3" name="ap_ang" aria-label="Default select example">
                                    <option value=""></option>
                                    <option value="Attached">Attached</option>
                                    <option value="Waitlist">Wailist</option>
                                    <option value="Completed">Completed</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Funding Category</label>
                                    <select class="form-select mb-3"name="fund_ang" aria-label="Default select example">
                                    <option value=""></option>
                                    <option value="Fully">Fully</option>
                                    <option value="Partial">Partial</option>
                                    <option value="Advocacy">Advocacy</option>
                                    </select>
                                </div>
                            <div class="mb-3">
                                 <label for="start">Referral facility:</label>
                                    <?php
                                     $con = mysqli_connect("localhost", "root", "", "bulamudb");
                                     $sql="SELECT fcname FROM facilities";
                                     $res=mysqli_query($con,$sql);
                                     ?>
                               
                                 <select class="form-select mb-3" name="ref_ang" aria-label="Default select example">
                                   <option value=""></option>
                                      <?php
                                     while($rows=mysqli_fetch_array($res)){
                                       ?>
                                   <option value=""> <?php echo $rows['fcname']; ?></option>
                                 <?php
                                   }
                                   ?>
                                 </select>
                                </div>
                                <div class="mb-3">
                                 <label for="start">Referral facility:</label>
                                    <?php
                                     $con = mysqli_connect("localhost", "root", "", "bulamudb");
                                     $sql="SELECT fcname FROM facilities";
                                     $res=mysqli_query($con,$sql);
                                     ?>
                               
                                 <select class="form-select mb-3" name="ref_ang" aria-label="Default select example">
                                   <option value=""></option>
                                      <?php
                                     while($rows=mysqli_fetch_array($res)){
                                       ?>
                                   <option value=""> <?php echo $rows['fcname']; ?></option>
                                 <?php
                                   }
                                   ?>
                                 </select>
                                </div>
                                <div class="mb-3">
                                 <label for="start">Referral facility:</label>
                                    <?php
                                     $con = mysqli_connect("localhost", "root", "", "bulamudb");
                                     $sql="SELECT fcname FROM facilities";
                                     $res=mysqli_query($con,$sql);
                                     ?>
                               
                                 <select class="form-select mb-3" name="ref_ang" aria-label="Default select example">
                                   <option value=""></option>
                                      <?php
                                     while($rows=mysqli_fetch_array($res)){
                                       ?>
                                   <option value=""> <?php echo $rows['fcname']; ?></option>
                                 <?php
                                   }
                                   ?>
                                 </select>
                                </div>
                                <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Other Sections</h6>
                          
                                <div class="mb-3">
                                    <label class="form-label">Surgery status</label>
                                    <select class="form-select mb-3" name="sur_ang" aria-label="Default select example">
                                    <option value=""></option>
                                    <option value="Done">Done</option>
                                    <option value="Waiting">waiting</option>
                                    <option value="Not needed">Not needed</option>
                                    <option value="Treatment">Treatment</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                <input class="form-control mb-3" type="date" id="start" name="date_st" value="">
                                </div>
                            </div>
                        </div>`
                        <h6 class="mb-4">Final Section</h6>
                                <label for="start">Admission date:</label>
                                <input class="form-control mb-3" name ="date_adm" type="date" id="start" name="trip-start" value="">
                                <label for="start">Discharge date:</label>
                                <input class="form-control mb-3" name="date_dis" type="date" id="start" name="trip-start" value="">

                                <div class="mb-3">
                                    <label class="form-label">Final status</label>
                                    <select class="form-select mb-3" name="final_ang" aria-label="Default select example">
                                    <option value=""></option>
                                    <option value="Alive">Alive</option>
                                    <option value="Dead">Dead</option>
                                    <option value="Advocacy">Advocacy</option>
                                    </select>
                                </div>
 
                                   <div class="m-n2">
                                
                                <button class="btn btn-primary w-100 m-2" type="submit" name="angel">Update</button>
                                <button class="btn btn-outline-primary w-100 m-2" type="button">Delete</button>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
         </form>
            <!-- Form End -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author???s credit link/attribution link/backlink. If you'd like to use the template without the footer author???s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
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