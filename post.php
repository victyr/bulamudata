<?php
  
  include('connection.php'); 
  //sugery posting
 

  $con = mysqli_connect("localhost", "root", "", "bulamudb");
  if(isset($_POST['save'])){
  
     $facs = $_POST['fac_s'];
     $dates= $_POST['date_s'];
     $dists = $_POST['dist_s'];
     $lnames = $_POST['lname_s'];
     $snames = $_POST['sname_s'];
     $aged=$_POST['age_i'];
     $agef= $_POST['age_s'];
     $ages = $aged.$agef;
     $agc = $_POST['ag_c'];
     $gridRadios = $_POST['gridRadios'];
     $dias1 = $_POST['dia_s1'];
     $dias2 = $_POST['dia_s2'];
     $sur1 = $_POST['sur_1'];
     $sur2 = $_POST['sur_2'];
     $nams = $_POST['nam_s'];
     $phones = $_POST['phone_s1'];
     $phonez = $_POST['phone_s2'];
     $fstat=$_POST['final'];

    $facs = mysqli_real_escape_string($con, $facs);  
    $dates = mysqli_real_escape_string($con, $dates);
    $dists = mysqli_real_escape_string($con, $dists);  
    $lnames = mysqli_real_escape_string($con, $lnames);
    $snames = mysqli_real_escape_string($con, $snames); 
    $password = mysqli_real_escape_string($con, $password);
    $ages = mysqli_real_escape_string($con, $ages);  
    $agc = mysqli_real_escape_string($con, $agc);
    $gridRadios = mysqli_real_escape_string($con, $gridRadios);  
    $dias1 = mysqli_real_escape_string($con, $dias1);
    $dias2 = mysqli_real_escape_string($con, $dias2);
    $sur1 = mysqli_real_escape_string($con, $sur1);
    $sur2 = mysqli_real_escape_string($con, $sur2);
    $nams = mysqli_real_escape_string($con, $nams);
    $phones = mysqli_real_escape_string($con, $phones);
    $phonez = mysqli_real_escape_string($con, $phonez);
    $fstat = mysqli_real_escape_string($con, $fstat);


     $sql = "INSERT
                     INTO   
                        intensive (
                          facilitys,datedb,address,sname,fname,age,agec,gender, diagn,diagc, surd,surc,surn,cont,contt,fstatus
                          ) 
                          VALUES (
                           '$facs', '$dates','$dists','$lnames','$snames','$ages','$agc','$gridRadios','$dias1','$dias2','$sur1','$sur2','$nams',$phones,$phonez,'$fstat')";
     if (mysqli_query($con, $sql)) {
      echo "Patient added, add another?";

      header("Location: surgery.php?"); 

     } else {
      echo "Error: " . $sql . "" . mysqli_error($con);
     }
     mysqli_close($con);
    
    }

    if(isset($_POST['insertd'])){

      $dise = $_POST['dise'];
      $hcee1= $_POST['hce1'];

     
    $dise = mysqli_real_escape_string($con, $dise);  
    $hcee1 = mysqli_real_escape_string($con, $hcee1);

    $sql1 = "INSERT INTO hcefac (district,facility) VALUES('$dise','$hcee1')";
   
    if (mysqli_query($con, $sql1)) {

      header("Location: hcedis.php?"); 

     } else {
      echo "Error: " . $sql1 . "" . mysqli_error($con);
     }
     mysqli_close($con);
    

    }
    if(isset($_POST['angel'])){
  
      $datereg = $_POST['date_reg'];
      $firstn= $_POST['fnam_ang'];
      $secn = $_POST['snam_ang'];
      $ptsex = $_POST['sex_ang'];
      $distpt = $_POST['dist_ang'];
      $agpt=$_POST['age_a'];
      $agpts= $_POST['age_ang'];
      $agepat = $agpt.$agpts;
      $phonz = $_POST['phon_ang'];
      $phons = $_POST['phone_ang'];
      $d1 = $_POST['dia_ang1'];
      $d2 = $_POST['dia_ang2'];
      $d3 = $_POST['dia_ang3'];
      $datdm = $_POST['date_adm'];
      $datdis = $_POST['date_dis'];
      $fin = $_POST['final_ang'];
      $surang = $_POST['sur_ang'];
      $datest=$_POST['date_st'];
      $fund=$_POST['fund_ang'];
      $apang=$_POST['ap_ang'];
      $ref=$_POST['ref_ang'];
 
     $datereg = mysqli_real_escape_string($con, $datereg);  
     $firstn = mysqli_real_escape_string($con, $firstn);
     $secn = mysqli_real_escape_string($con, $secn);  
     $ptsex = mysqli_real_escape_string($con, $ptsex);
     $agepat = mysqli_real_escape_string($con, $agepat); 
     $distpt = mysqli_real_escape_string($con, $distpt); 
     $phonz = mysqli_real_escape_string($con, $phonz);
     $phons = mysqli_real_escape_string($con, $phons);  
     $d1 = mysqli_real_escape_string($con, $d1);
     $d2 = mysqli_real_escape_string($con, $d2);  
     $d3 = mysqli_real_escape_string($con, $d3);
     $datdm = mysqli_real_escape_string($con, $datdm);
     $datdis = mysqli_real_escape_string($con, $datdis);
     $fin = mysqli_real_escape_string($con, $fin);
     $surang = mysqli_real_escape_string($con, $surang);
     $datest = mysqli_real_escape_string($con, $datest);
     $fund = mysqli_real_escape_string($con, $fund);
     $apang = mysqli_real_escape_string($con, $apang);
     $ref = mysqli_real_escape_string($con, $ref);
 
 
      $sql = "INSERT
                      INTO   
                         angel (
                           dater,fnam,snam,angs,disang,ageang,contan,contang,surst,datest,fund,apcat,reffac,diang,diange,diangel,dateadm,datedis,finalst
                           ) 
                           VALUES (
                            '$datereg','$firstn','$secn','$ptsex','$distpt','$agepat','$phonz','$phons','$surang','$datest','$fund','$apang','$ref','$d1','$d2','$d3','$datdm','$datdis','$fin')";
      if (mysqli_query($con, $sql)) {
       echo "Patient added, add another?";
 
       header("Location: formpts.php?"); 
 
      } else {
       echo "Error: " . $sql . "" . mysqli_error($con);
      }
      mysqli_close($con);
     
     }
   









?>