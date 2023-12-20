<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aac</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
       
       
       
       .img{
            position: relative;
            max-height: 190px;
            max-width: 120px;
            border-radius: 5px;
            min-height: 75px;
            min-width: 75px;
            top:5px ;
        }
        .di{
            position: relative;
            top: 40px;
            max-width:700px;

        }
        .dh2{
            position: relative;
            max-height: 250px;
            border: 0;
        }
      
        .hea{
            font-size: 2.5vw;
        }
        
    </style>
</head>
<body >
     <!-- header-->
    
     <div class="container-fluid bg-primary mb-5">
      <div class="container-fluid dh2">
      <div class="card bg-primary dh2 ">
          <div class="row no-gutters  ">
              <div class="col-2">
                <div class="img bg-light py-2"><img src="aac1.png" alt="logo" class="card-img img"></div> 
              </div>
              <div class="col-7">
                <div class="card-body "> <center><h4 class="text-light my-4 hea" >ARUL ANANDAR COLLEGE (Autonomous)<br>Karumathur - 625 514 </h4></center></div>
              </div>
              <div class="col-3">
                
                 
              </div>

          </div>
      </div>
  </div>
       
  </div>
    
    <form action="index1.php" method="post">
        <div class=" container  di shadow py-3 px-5  rounded">
        <center><h3 class="mb-5" >Login Form</h1></center>
            <label for="" class="mb-4"><b>Faculty ID </b>[pls refer ID card]</label>
        <input type="text" name="uid" class="form-control mb-4" autofocus>
        <label for="" class="mb-4"><b>Moblie no </b></label>
        <input type="password" name="ups" class="form-control mb-5" >
        <button class="form-control bg-primary text-light my-4 bold "> <b>Login</b></button>
    </div>
    </form>
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>