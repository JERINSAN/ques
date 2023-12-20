<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aac</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
       
       
       
       
        .di{
            position: relative;
            top: 170px;
            max-width:600px;

        }
        .b{
            width: 170px;
            position: relative;
            top:40px;
        }
        .fs_c{
                font-size:14px;
        }
        
        
    </style>
</head>
<body>
<?php

$cod=$_POST['cd'];
if($cod==NULL)
{
        echo '<form  method="post">
        <div class=" container  di shadow-lg py-5 px-4 bg-body-tertiary rounded  -danger">
         <center>  <h1 class=" text-danger ">The Question  is Not Exist </h1></center> 
         
         </div>
        </div>
        </form>';
           
        die();    
}
include 'conn.php';
$con=con();
$sql="SELECT * FROM main where cod='$cod'";
$data=$con->query($sql);
$row1=$data->fetch_assoc();


if($row1==NULL)
{
    echo '<form  method="post">
    <div class=" container  di shadow-lg py-5 px-4 bg-body-tertiary rounded  -danger">
     <center>  <h1 class=" text-danger ">The Question &nbsp;'. $cod.'&nbsp; is Not Exist </h1></center> 
     
     </div>
    </div>
    </form>';
       
    die();
}
$sql="SELECT * FROM $cod";
$con->query($sql);

    $data=$con->query($sql);
    $sql1="SELECT * FROM `main` WHERE cod='$cod';";
    $data1=$con->query($sql1);

  //  $row1=$data->fetch_assoc();
   // echo "sno=".$row1["sno"] . "<br>";
   //$row=$data1->fetch_assoc();
   // echo "sno=".$row["sno"] . "<br>";
  

?>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <style>
       
    </style>
</head>
<body>
    <!-- Question  header-->
    <div class="container border border-1 border-dark ">
    <div class="container bg-primar p-2  ">
        <div class=" row border border-2 border-dark p-1"><center><h5>ARUL ANANDAR COLLEGE (Autonomous) ,Karumathur-625 514 </h5></center></div>
        <div class="row border border-dark">
            <div class="col-2 border p-1 border-top-0 border-dark "><h6> class</h6></div>
            <div class="col-4 border p-1 border-top-0 border-dark"> <h6> <?php $row=$data1->fetch_assoc();
    echo $row["cla"] . "<br>";?></h6></div>
            <div class="col-2 border p-1 border-top-0 border-dark"> <h6> Date</h6></div>
            <div class="col-4 border p-1 border-top-0 border-dark"> <h6> <?php 
    echo $row["dat"] . "<br>";?></h6></div>

        </div>
        <div class="row border border-dark">
            <div class="col-2 border p-1 border-top-0 border-dark"><h6> Semester</h6></div>
            <div class="col-4 border p-1 border-top-0 border-dark"> <h6> <?php 
    echo $row["sem"] . "<br>";?></h6></div>
            <div class="col-2 border p-1 border-top-0 border-dark"> <h6> Time</h6></div>
            <div class="col-4 border p-1 border-top-0 border-dark"> <h6> <?php 
    echo $row["tim"] . "<br>";?></h6></div>

        </div>
        <div class="row border border-dark">
            <div class="col-2 border p-1 border-top-0 border-dark"><h6> Subject</h6></div>
            <div class="col-4 border p-1 border-top-0 border-dark"> <h6> <?php 
    echo $row["sub"] . "<br>";?></h6></div>
            <div class="col-2 border p-1 border-top-0 border-dark"> <h6> Code</h6></div>
            <div class="col-4 border p-1 border-top-0 border-dark"> <h6> <?php 
    echo $row["cod"] . "<br>";?></h6></div>

        </div>
        <div class="row border border-dark">
            <div class="col-2 border p-1 border-top-0 border-dark"><h6> Test</h6></div>
            <div class="col-4 border p-1 border-top-0 border-dark"> <h6> <?php 
    echo $row["tes"] . "<br>";?></h6></div>
            <div class="col-2 border p-1 border-top-0 border-dark"> <h6> Mark</h6></div>
            <div class="col-4 border p-1 border-top-0 border-dark"> <h6> <?php 
    echo $row["mar"] . "<br>";?></h6></div>

        </div>
        
    </div>
   
    <!-- One mark -->
    <div class="container bg-primar p-2 ">
        <div class="row     p-0">
         <center> <h6> SECTION - A</h6></center>    
        </div>
        <div class="row    ">
            <div class="col-10  p-0   "> <h6 class="mx-2"> <center>Choose the correct answers &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; 10X1=10</h6></center> </div>
              
            <div class="col-1  p-1  "> </div>
            <div class="col-1  p-1  "> </div>
        </div>
        <!-- Q1-->
        <div class="row    ">
            <div class="col-10  p-1    fs_c">1.&nbsp; <?php $row1=$data->fetch_assoc();
    echo $row1["q"] . "<br>"; ?></div>
            <div class="col-1  p-1    fs_c"> <center><b> <?php 
    echo $row1["c1"] . "<br>"; ?> </b></center></div>
            <div class="col-1  p-1    fs_c"> <center><b> <?php 
    echo $row1["k"] . "<br>"; ?> </b> </center></div>
            
        </div>
        <div class="row    ">
            <div class="col-6  p-1    fs_c"><b>(a)</b>&nbsp; <?php 
    echo $row1["a"] . "<br>"; ?> </div>
            <div class="col-6  p-1    fs_c"><b>(b)</b>&nbsp; <?php 
    echo $row1["b"] . "<br>"; ?> </div>
            <div class="col-6  p-1    fs_c"><b>(c)</b>&nbsp; <?php 
    echo $row1["c"] . "<br>"; ?> </div>
            <div class="col-6  p-1    fs_c"><b>(d)</b>&nbsp; <?php 
    echo $row1["d"] . "<br>"; ?> </div>
            
            
        </div>
        <!-- Q2-->
        <div class="row    ">
            <div class="col-10  p-1    fs_c">2.&nbsp; <?php $row1=$data->fetch_assoc();
    echo $row1["q"] . "<br>"; ?></div>
            <div class="col-1  p-1    fs_c"> <center><b> <?php 
    echo $row1["c1"] . "<br>"; ?> </b></center></div>
            <div class="col-1  p-1    fs_c"> <center><b> <?php 
    echo $row1["k"] . "<br>"; ?> </b> </center></div>
            
        </div>
        <div class="row    ">
            <div class="col-6  p-1    fs_c"><b>(a)</b>&nbsp; <?php 
    echo $row1["a"] . "<br>"; ?> </div>
            <div class="col-6  p-1    fs_c"><b>(b)</b>&nbsp; <?php 
    echo $row1["b"] . "<br>"; ?> </div>
            <div class="col-6  p-1    fs_c"><b>(c)</b>&nbsp; <?php 
    echo $row1["c"] . "<br>"; ?> </div>
            <div class="col-6  p-1    fs_c"><b>(d)</b>&nbsp; <?php 
    echo $row1["d"] . "<br>"; ?> </div>
            
            
        </div>
        <!-- Q3-->
        <div class="row    ">
            <div class="col-10  p-1    fs_c">3.&nbsp; <?php $row1=$data->fetch_assoc();
    echo $row1["q"] . "<br>"; ?></div>
            <div class="col-1  p-1    fs_c"> <center><b> <?php 
    echo $row1["c1"] . "<br>"; ?> </b></center></div>
            <div class="col-1  p-1    fs_c"> <center><b> <?php 
    echo $row1["k"] . "<br>"; ?> </b> </center></div>
            
        </div>
        <div class="row    ">
            <div class="col-6  p-1    fs_c"><b>(a)</b>&nbsp; <?php 
    echo $row1["a"] . "<br>"; ?> </div>
            <div class="col-6  p-1    fs_c"><b>(b)</b>&nbsp; <?php 
    echo $row1["b"] . "<br>"; ?> </div>
            <div class="col-6  p-1    fs_c"><b>(c)</b>&nbsp; <?php 
    echo $row1["c"] . "<br>"; ?> </div>
            <div class="col-6  p-1    fs_c"><b>(d)</b>&nbsp; <?php 
    echo $row1["d"] . "<br>"; ?> </div>
            
            
        </div>
        <!-- Q4-->
        <div class="row    ">
            <div class="col-10  p-1    fs_c">4.&nbsp; <?php $row1=$data->fetch_assoc();
    echo $row1["q"] . "<br>"; ?></div>
            <div class="col-1  p-1    fs_c"> <center><b> <?php 
    echo $row1["c1"] . "<br>"; ?> </b></center></div>
            <div class="col-1  p-1    fs_c"> <center><b> <?php 
    echo $row1["k"] . "<br>"; ?> </b> </center></div>
            
        </div>
        <div class="row    ">
            <div class="col-6  p-1    fs_c"><b>(a)</b>&nbsp; <?php 
    echo $row1["a"] . "<br>"; ?> </div>
            <div class="col-6  p-1    fs_c"><b>(b)</b>&nbsp; <?php 
    echo $row1["b"] . "<br>"; ?> </div>
            <div class="col-6  p-1    fs_c"><b>(c)</b>&nbsp; <?php 
    echo $row1["c"] . "<br>"; ?> </div>
            <div class="col-6  p-1    fs_c"><b>(d)</b>&nbsp; <?php 
    echo $row1["d"] . "<br>"; ?> </div>
            
            
        </div>
        <!-- Q5-->
        <div class="row    ">
            <div class="col-10  p-1    fs_c">5.&nbsp; <?php $row1=$data->fetch_assoc();
    echo $row1["q"] . "<br>"; ?></div>
            <div class="col-1  p-1    fs_c"> <center><b> <?php 
    echo $row1["c1"] . "<br>"; ?> </b></center></div>
            <div class="col-1  p-1    fs_c"> <center><b> <?php 
    echo $row1["k"] . "<br>"; ?> </b> </center></div>
            
        </div>
        <div class="row    ">
            <div class="col-6  p-1    fs_c"><b>(a)</b>&nbsp; <?php 
    echo $row1["a"] . "<br>"; ?> </div>
            <div class="col-6  p-1    fs_c"><b>(b)</b>&nbsp; <?php 
    echo $row1["b"] . "<br>"; ?> </div>
            <div class="col-6  p-1    fs_c"><b>(c)</b>&nbsp; <?php 
    echo $row1["c"] . "<br>"; ?> </div>
            <div class="col-6  p-1    fs_c"><b>(d)</b>&nbsp; <?php 
    echo $row1["d"] . "<br>"; ?> </div>
            
            
        </div>
        <!-- Q6-->
        <div class="row    ">
            <div class="col-10  p-1    fs_c">6.&nbsp; <?php $row1=$data->fetch_assoc();
    echo $row1["q"] . "<br>"; ?></div>
            <div class="col-1  p-1    fs_c"> <center><b> <?php 
    echo $row1["c1"] . "<br>"; ?> </b></center></div>
            <div class="col-1  p-1    fs_c"> <center><b> <?php 
    echo $row1["k"] . "<br>"; ?> </b> </center></div>
            
        </div>
        <div class="row    ">
            <div class="col-6  p-1    fs_c"><b>(a)</b>&nbsp; <?php 
    echo $row1["a"] . "<br>"; ?> </div>
            <div class="col-6  p-1    fs_c"><b>(b)</b>&nbsp; <?php 
    echo $row1["b"] . "<br>"; ?> </div>
            <div class="col-6  p-1    fs_c"><b>(c)</b>&nbsp; <?php 
    echo $row1["c"] . "<br>"; ?> </div>
            <div class="col-6  p-1    fs_c"><b>(d)</b>&nbsp; <?php 
    echo $row1["d"] . "<br>"; ?> </div>
            
            
        </div>
        <!-- Q7-->
        <div class="row    ">
            <div class="col-10  p-1    fs_c">7.&nbsp; <?php $row1=$data->fetch_assoc();
    echo $row1["q"] . "<br>"; ?></div>
            <div class="col-1  p-1    fs_c"> <center><b> <?php 
    echo $row1["c1"] . "<br>"; ?> </b></center></div>
            <div class="col-1  p-1    fs_c"> <center><b> <?php 
    echo $row1["k"] . "<br>"; ?> </b> </center></div>
            
        </div>
        <div class="row    ">
            <div class="col-6  p-1    fs_c"><b>(a)</b>&nbsp; <?php 
    echo $row1["a"] . "<br>"; ?> </div>
            <div class="col-6  p-1    fs_c"><b>(b)</b>&nbsp; <?php 
    echo $row1["b"] . "<br>"; ?> </div>
            <div class="col-6  p-1    fs_c"><b>(c)</b>&nbsp; <?php 
    echo $row1["c"] . "<br>"; ?> </div>
            <div class="col-6  p-1    fs_c"><b>(d)</b>&nbsp; <?php 
    echo $row1["d"] . "<br>"; ?> </div>
            
            
        </div>
        <!-- Q8-->
        <div class="row    ">
            <div class="col-10  p-1    fs_c">8.&nbsp; <?php $row1=$data->fetch_assoc();
    echo $row1["q"] . "<br>"; ?></div>
            <div class="col-1  p-1    fs_c"> <center><b> <?php 
    echo $row1["c1"] . "<br>"; ?> </b></center></div>
            <div class="col-1  p-1    fs_c"> <center><b> <?php 
    echo $row1["k"] . "<br>"; ?> </b> </center></div>
            
        </div>
        <div class="row    ">
            <div class="col-6  p-1    fs_c"><b>(a)</b>&nbsp; <?php 
    echo $row1["a"] . "<br>"; ?> </div>
            <div class="col-6  p-1    fs_c"><b>(b)</b>&nbsp; <?php 
    echo $row1["b"] . "<br>"; ?> </div>
            <div class="col-6  p-1    fs_c"><b>(c)</b>&nbsp; <?php 
    echo $row1["c"] . "<br>"; ?> </div>
            <div class="col-6  p-1    fs_c"><b>(d)</b>&nbsp; <?php 
    echo $row1["d"] . "<br>"; ?> </div>
            
            
        </div>
        <!-- Q9-->
        <div class="row    ">
            <div class="col-10  p-1    fs_c">9.&nbsp; <?php $row1=$data->fetch_assoc();
    echo $row1["q"] . "<br>"; ?></div>
            <div class="col-1  p-1    fs_c"> <center><b> <?php 
    echo $row1["c1"] . "<br>"; ?> </b></center></div>
            <div class="col-1  p-1    fs_c"> <center><b> <?php 
    echo $row1["k"] . "<br>"; ?> </b> </center></div>
            
        </div>
        <div class="row    ">
            <div class="col-6  p-1    fs_c"><b>(a)</b>&nbsp; <?php 
    echo $row1["a"] . "<br>"; ?> </div>
            <div class="col-6  p-1    fs_c"><b>(b)</b>&nbsp; <?php 
    echo $row1["b"] . "<br>"; ?> </div>
            <div class="col-6  p-1    fs_c"><b>(c)</b>&nbsp; <?php 
    echo $row1["c"] . "<br>"; ?> </div>
            <div class="col-6  p-1    fs_c"><b>(d)</b>&nbsp; <?php 
    echo $row1["d"] . "<br>"; ?> </div>
            
            
        </div>
        <!-- Q10-->
        <div class="row    ">
            <div class="col-10  p-1    fs_c">10.&nbsp; <?php $row1=$data->fetch_assoc();
    echo $row1["q"] . "<br>"; ?></div>
            <div class="col-1  p-1    fs_c"> <center><b> <?php 
    echo $row1["c1"] . "<br>"; ?> </b></center></div>
            <div class="col-1  p-1    fs_c"> <center><b><?php 
    echo $row1["k"] . "<br>"; ?> </b> </center></div>
            
        </div>
        <div class="row    ">
            <div class="col-6  p-1    fs_c"><b>(a)</b>&nbsp; <?php 
    echo $row1["a"] . "<br>"; ?> </div>
            <div class="col-6  p-1    fs_c"><b>(b)</b>&nbsp; <?php 
    echo $row1["b"] . "<br>"; ?> </div>
            <div class="col-6  p-1    fs_c"><b>(c)</b>&nbsp; <?php 
    echo $row1["c"] . "<br>"; ?> </div>
            <div class="col-6  p-1    fs_c"><b>(d)</b>&nbsp; <?php 
    echo $row1["d"] . "<br>"; ?> </div>
            
            
        </div>
        


    </div>
    <!--5 mark -->
    <div class="container bg-primar p-2  ">
        <div class="row     p-1">
            <center> <h6> SECTION - B</h6></center>    
           </div>
           <div class="row    ">
               <div class="col-10  p-0   "> <center><h6 class="mx-2"> Answer ALL the questions &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; 2X5=10</h6></center></div>
                  
               <div class="col-1  p-1  "> </div>
               <div class="col-1  p-1  "> </div>
           </div>
        <div class="row    ">
            <div class="col-10  p-1    fs_c">11&nbsp;(a)&nbsp; <?php 
    $row1=$data->fetch_assoc();
    echo $row1["a"] . "<br>"; ?></div>
            <div class="col-1  p-1    fs_c"> <center><b> <?php 
    echo $row1["c1"] . "<br>"; ?> </b></center></div>
            <div class="col-1  p-1    fs_c"> <center><b> <?php 
    echo $row1["k"] . "<br>"; ?> </b> </center></div>
            
        </div>
        <div class="row     "><center><h6>OR</h6></center></div>
        <div class="row    ">
            <div class="col-10  p-1    fs_c">11&nbsp;(b)&nbsp; <?php 
    echo $row1["b"] . "<br>"; ?> </div>
            <div class="col-1  p-1    fs_c"> <center><b> <?php 
    echo $row1["c"] . "<br>"; ?> </b></center></div>
            <div class="col-1  p-1    fs_c"> <center><b> <?php 
    echo $row1["d"] . "<br>"; ?> </b> </center></div>
            
        </div>
        <div class="row    ">
            <div class="col-10  p-1    fs_c">12&nbsp;(a)&nbsp;<?php 
    $row1=$data->fetch_assoc();
    echo $row1["a"] . "<br>"; ?></div>
            <div class="col-1  p-1    fs_c"> <center><b> <?php 
    echo $row1["c1"] . "<br>"; ?> </b></center></div>
            <div class="col-1  p-1    fs_c"> <center><b> <?php 
    echo $row1["k"] . "<br>"; ?> </b> </center></div>
            
        </div>
        <div class="row     "><center><h6>OR</h6></center></div>
        <div class="row    ">
            <div class="col-10  p-1    fs_c">12&nbsp;(b)&nbsp; <?php 
    echo $row1["b"] . "<br>"; ?> </div>
            <div class="col-1  p-1    fs_c"> <center><b> <?php 
    echo $row1["c"] . "<br>"; ?> </b></center></div>
            <div class="col-1  p-1    fs_c"> <center><b> <?php 
    echo $row1["d"] . "<br>"; ?> </b> </center></div>
            
        </div>
        
    </div>

    <!-- 10 Mark -->
    <div class="container bg-primar p-2  ">
        <div class="row     p-1">
            <center> <h6> SECTION - C</h6></center>    
           </div>
           <div class="row    ">
               <div class="col-10  p-0   "> <center><h6 class="mx-2"> Answer ALL the questions &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; 2X10=20</h6></center></div>   
               <div class="col-1  p-1  "> </div>
               <div class="col-1  p-1  "> </div>
           </div>
        <div class="row    ">
            <div class="col-10  p-1    fs_c">13&nbsp;(a)&nbsp; <?php 
    $row1=$data->fetch_assoc();
    echo $row1["a"] . "<br>"; ?></div>
            <div class="col-1  p-1    fs_c"> <center><b> <?php 
    echo $row1["c1"] . "<br>"; ?> </b></center></div>
            <div class="col-1  p-1    fs_c"> <center><b> <?php 
    echo $row1["k"] . "<br>"; ?> </b> </center></div>
            
        </div>
        <div class="row     "><center><h6>OR</h6></center></div>
        <div class="row    ">
            <div class="col-10  p-1    fs_c">13&nbsp;(b)&nbsp; <?php 
    echo $row1["b"] . "<br>"; ?> </div>
            <div class="col-1  p-1    fs_c"> <center><b> <?php 
    echo $row1["c"] . "<br>"; ?> </b></center></div>
            <div class="col-1  p-1    fs_c"> <center><b> <?php 
    echo $row1["d"] . "<br>"; ?> </b> </center></div>
            
        </div>
        <div class="row    ">
            <div class="col-10  p-1    fs_c">14&nbsp;(a)&nbsp;<?php 
    $row1=$data->fetch_assoc();
    echo $row1["a"] . "<br>"; ?></div>
            <div class="col-1  p-1    fs_c"> <center><b> <?php 
    echo $row1["c1"] . "<br>"; ?> </b></center></div>
            <div class="col-1  p-1    fs_c"> <center><b> <?php 
    echo $row1["k"] . "<br>"; ?> </b> </center></div>
            
        </div>
        <div class="row     "><center><h6>OR</h6></center></div>
        <div class="row    ">
            <div class="col-10  p-1    fs_c">14&nbsp;(b)&nbsp; <?php 
    echo $row1["b"] . "<br>"; ?> </div>
            <div class="col-1  p-1    fs_c"> <center><b> <?php 
    echo $row1["c"] . "<br>"; ?> </b></center></div>
            <div class="col-1  p-1    fs_c"> <center><b> <?php 
    echo $row1["d"] . "<br>"; ?> </b> </center></div>
            
        </div>
        



    </div>
    </div>   
 <?php
 $con->close();
 ?>   
</body>
</html>