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
            max-width:600px;

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
<?php
$una=$_POST['uid'];
$ups=$_POST['ups'];

?>


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
                <nav class="navbar navbar-expand-md  navbar-dark">
                  <div class="container-fluid">
                    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 my-4 ">
                        
                         
                              
                        <li class="nav-item">
                        <button class="nav-link" onclick="jj1()">  <b>Create</b>   </button>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active" ><b>View</b></a>
                        </li>
                        <li class="nav-item">
                        <button class="nav-link" onclick="jj2()">  <b>Edit</b>   </button>
                        </li>
                        
                        
                      </ul>
                      
                    </div>
                  </div>
                </nav>  
                 
              </div>

          </div>
      </div>
  </div>
       
  </div>
    
    <form action="question.php" method="post">
        <div class=" container  di shadow-lg py-5 px-4 bg-body-tertiary rounded">
            <label for="" class="mb-4">Enter the Subject code:</label>
        <input type="text" name="cd" class="form-control mb-4" autofocus>
        <input type="submit" value="View" class="form-control bg-primary text-light" >
    </div>
    </form>
    <form method="post" action="index1.php" id="zz1" >
        <input type="text" value="<?php echo $una?>" name="uid" hidden>
        <input type="text" value="<?php echo $ups?>" name="ups" hidden>
        
    </form>
    <form method="post" action="sedit.php" id="zz2" >
        <input type="text" value="<?php echo $una?>" name="uid" hidden>
        <input type="text" value="<?php echo $ups?>" name="ups" hidden>
        
    </form>
    <script src="js/bootstrap.bundle.js"></script>
    <script> 
    function jj1()
    {
        
    
        document.getElementById("zz1").submit();
    }
    function jj2()
    {
        
    
        document.getElementById("zz2").submit();
    }
    </script>
</body>
</html>