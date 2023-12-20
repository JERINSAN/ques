<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aac</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
       
       
       
       
        .di1{
            position: relative;
            top: 170px;
            max-width:600px;

        }
        .b{
            width: 170px;
            position: relative;
            top:40px;
        }
        
        
    </style>
</head>
<body >

<?php

$cod=$_POST['cd'];
if($cod==NULL)
{
    echo '<form  method="post">
    <div class=" container  di1 shadow-lg py-5 px-4 bg-body-tertiary rounded border border-danger">
     <center>  <h1 class=" text-danger ">The Question  is Not Exist</h1></center> 
     
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
    <div class=" container  di1 shadow-lg py-5 px-4 bg-body-tertiary rounded border border-danger">
     <center>  <h1 class=" text-danger ">The Question &nbsp;'. $cod.'&nbsp; is Not Exist</h1></center> 
     
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
 
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .lh{
            font-size:23px ;
            font-weight:600;
        }
        .lh1{
            font-size:18px ;
            font-weight:600;
    
        }
        .lh2{
            font-size:15px ;
            font-weight:600;
        }
        .di{
            border-radius:10px;
        }
        .k{
            position: relative;
            top:42px;
        }
        .k1
        {
            position: relative;
            top: 77px;
        }
        .dh2{
            position: relative;
            max-height: 250px;
            border: 0;
            
           
            
            
        }
        .img{
            position: relative;
            max-height: 190px;
            max-width: 120px;
            border-radius: 5px;
            min-height: 109px;
            min-width: 90px;
        }
        .te{
            font-weight:600;
        }
        
        .top1{
            top: -600px;
            transition: 0.3s ease;
        }
        .jer:focus ~ .top1{
            position: fixed;
            top:0px

        }
        .hp{
            font-size: 20px;
        }
        
        .cor{
            background-color: rgb(35, 65, 110);
        }

       
    </style>
</head>
<body>

<?php
$i=0;
$una=$_POST['uid'];
$ups=$_POST['ups'];

$sql="select * from secu where un='$una' AND ps='$ups'";
$data3=$con->query($sql);


$res3=$data3->fetch_assoc();
if($res3==NULL)
{
    echo '<form  method="post">
    <div class=" container  di1 shadow-lg py-5 px-4 bg-body-tertiary rounded border border-danger">
     <center>  <h1 class=" text-danger ">The ID  is Not Exist</h1></center> 
     
     </div>
    </div>
    </form>'; 
    die();  
}
if($ups!=$res3['ps']){
    echo '<form  method="post">
    <div class=" container  di1 shadow-lg py-5 px-4 bg-body-tertiary rounded border border-danger">
     <center>  <h1 class=" text-danger ">Password is Wrong</h1></center> 
     
     </div>
    </div>
    </form>'; 
    die(); 

}
?>
    <!-- header-->
    
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
                          <button class="nav-link" onclick="jj2()">  <b>View</b>   </button>
                          </li>
                          <li class="nav-item">
                           <a class="nav-link active" ><b>Edit</b></a>
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
    <form action="erun.php" method="post">
    <!-- Question details -->
    <div class="container bg-primary mt-4 di">
        <div class="card ">
            <div class="card-body bg-light ">
                <div class="row">
                    <?php
                    $row=$data1->fetch_assoc();
                    ?>
                    <div class="col-6">
                        <label class="p-1 lh" >Class </label>
                        <select name="cl" id="" class="form-control">
                         <option value="<?php echo $row["cla"];?>" selected disable hidden> <?php echo $row["cla"];?></option>   
                        <option value="I CSC">I CSC</option>
                            <option value="II CSC">II CSC</option>
                            <option value="III CSC">III CSC</option>
                            <option value="I BCA">I BCA</option>
                            <option value="I MCA">I MCA</option>
                            <option value="II MCA">II MCA </option>
                        </select>
                        
                    </div>
                        
                    <div class="col-6">
                        <label class="p-1 lh " >Date </label>
                       <input   type="date" class="form-control  mr-2 ml-2" required name="da" value="<?php 
    $arr=str_split($row1['dat'],1);
    $d=$arr[6].$arr[7].$arr[8].$arr[9].$arr[5].$arr[3].$arr[4].$arr[2].$arr[0].$arr[1];
    echo $d;?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label class="p-1 lh" >Semester </label><br>
                        <select name="sem" class="form-control">
                        <option value="<?php echo $row["sem"];?>" selected disable hidden> <?php echo $row["sem"];?></option>
                            <option value="I">I</option>
                            <option value="II"> II</option>
                            <option value="III">III</option>
                            <option value="IV"> IV</option>
                            <option value="V">V</option>
                            <option value="VI"> VI</option>
                        </select>
                       
                         </div>
            
                         <div class="col-6">
                            <label class="p-1 lh " >Time </label>
                            <select name="ti" class="form-control mr-2 ml-2">
                            <option value="<?php  echo $row["tim"];?>" selected disable hidden> <?php echo $row["tim"];?></option>
                                <option value="01:30 Hrs">01:30 Hrs</option>
                                <option value="02:00 Hrs">02:00 Hrs</option>
                            </select>
                             </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label class="p-1 lh" >Subject </label>
                       <input type="text" class="form-control  " required name="sub" id="ss2" value="<?php 
    echo $row["sub"];?>">
    <select  class="form-control" hidden  >
    <?php

        do
        {
            echo'     
            <option value="'.$res3['sna'].'"id="ia'.$i.'">'.$res3['sna'].'</option>';
            $i=$i+1;

        }while($res3=$data3->fetch_assoc());




?>
</select>
    
                
                         </div>
            
                         <div class="col-6">
                            <label class="p-1 lh " >Code </label>
                           
    <?php
                                $sql="select * from secu where un='$una' AND ps='$ups'";
                                $data4=$con->query($sql);
                                $j=0;
                            ?>
                            <select name="cod" class="form-control" id="ss1" onchange="jj()" >'; 
                            <option value="<?php echo $row["cod"] ;?>" selected disable hidden><?php echo $row["cod"] ;?> </option>
                            <?php
                                while($res4=$data4->fetch_assoc())
                                {
                                    echo'     
                                    <option value="'.$res4['co'].'"id="ib'.$j.'">'.$res4['co'].'</option>';
                                    $j=$j+1; 
                                }

                            ?>

                 </select>
                             </div>
                </div>
                <div class="row">
                    <div class="col-6">
                    <label class="p-1 lh" >Test </label>
                    <select name="te" class="form-control">
                    <option value="<?php echo $row["tes"];?>" selected disable hidden> <?php echo $row["tes"];?></option>
                            <option value="I-Internal">I-Internal</option>
                            <option value="II-Internal"> II-Internal</option>
                            
                        </select>
                        
                         </div>
            
                         <div class="col-6">
                            <label class="p-1 lh ">Mark </label>
                           <input   type="text" class="form-control mb-2 mr-2 ml-2" name="mar" value="40" readonly>
                             </div>
                </div>
                
            </div>
        </div>
       
        
    </div>

<input type="text" name="ccod" readonly value="<?php echo $cod;  ?>" style="border:0;" hidden>
    <!-- Question section A -->
    <div class="container bg-primary mt-4 di">
        <div class="card ">
            <div class="card-body bg-light ">
                <!-- section details -->
                <div class="row ">
                    <div class="col-8">
                    <center><label class="p-1 lh1 " >Section - A </label></center>
                        
                    </div>
            
                    <div class="col-2">
                        <label class="p-1 lh2 " >Course <br> Outcome </label>
                        
                    </div>
                    <div class="col-2">
                        <label class="p-1 lh2 " >Bloom's <br> K-Level </label>
                        
                    </div>
                </div>
                <!-- Question details -->
                <div class="row mt-4">
                    <div class="col-8">
                    <p>
                        <span class="lh2 mx-3"> Choose the Correct Answer</span><span class="lh2">10x1=10</span>
                    </p>
                        
                    </div>
            
                    <div class="col-2">
                       
                        
                    </div>
                    <div class="col-2">
                        
                        
                    </div>
                </div

            <!-- Question 1 -->
           <div class="row ">
                    <div class="col-8">
                        <label class="p-1 lh" >1. </label>
                        <div id="ta1" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'he1','qi1')"   onkeyup="jerin(this.innerHTML,'he1','qi1','ta1')" onkeydown="jerin(this.innerHTML,'he1','qi1','ta1')" ><?php $row1=$data->fetch_assoc();
                            echo $row1["q"]; ?></div>
                        <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="q1" onfocus="jerin(this.value,'he1')"  onkeyup="enter(event,'qi1');jerin(this.value,'he1')" id="qi1"><?php 
                            echo $row1["q"]; ?></textarea>
                        <div class="container-fluid cor fixed-top p-1 top1"  >
                            <div class="row">
                                <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-2">Qno:1</h5> <p class="text-light hp p-2 mx-4" id="he1"></p></div>
                            </div>
                        </div>
                       
                    </div>
            
                    <div class="col-2">
                    
                    
                      
    <select name="c1" id=""  class="form-control k  ml-2 register_form jer" >
                            <option value="<?php echo $row1["c1"] ; ?>" selected disable hidden><?php echo $row1["c1"] ; ?></option>
                            <option value="CO1">CO1</option>
                            <option value="CO2">CO2</option>
                            <option value="CO3">CO3</option>
                            <option value="CO4">CO4</option>
                            <option value="CO5">CO5</option>
                            <option value="CO6">CO6</option>
                        </select>
                       
                    
                   
                    </div>
                    <div class="col-2">
                    
    <select name="k1" id="" class="form-control k ml-2 register_form">
                            <option value="<?php echo $row1["k"] ; ?>"> <?php echo $row1["k"] ; ?></option>
                            <option value="K1">K1</option>
                            <option value="K2">K2</option>
                            <option value="K3">K3</option>
                            <option value="K4">K4</option>
                            <option value="K5">K5</option>
                            <option value="K6">K6</option>
                            
                        </select>
                        </div>
                </div>
                <!-- Option 1 -->
                <div class="row">
                    <div class="col-6">
                        <label class="p-1 lh1" >(a) </label>
                        <div id="ta2" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'o1','oi1')"   onkeyup="jerin(this.innerHTML,'o1','oi1','ta2')" onkeydown="jerin(this.innerHTML,'o1','oi1','ta2')" ><?php 
    echo $row1["a"] ; ?></div>
                        <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="qoa1" onfocus="jerin(this.value,'o1')" onkeyup="jerin(this.value,'o1');enter(event,'oi1')"  id="oi1"><?php 
    echo $row1["a"] ; ?></textarea>
                        <div class="container-fluid cor fixed-top p-1 top1"  >
                            <div class="row">
                                <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-1">Qno:1  option (a)</h5> <p class="text-light hp p-1 mx-4" id="o1"></p></div>
                            </div>
                        </div>
                    </div>
            
                    <div class="col-6">
                        <label class="p-1 lh1 " >(b) </label>
                        <div id="ta3" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'o2','oi2')"   onkeyup="jerin(this.innerHTML,'o2','oi2','ta3')" onkeydown="jerin(this.innerHTML,'o2','oi2','ta3')" ><?php 
    echo $row1["b"]; ?></div>
                        <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="qob1" onfocus="jerin(this.value,'o2')" onkeyup="jerin(this.value,'o2');enter(event,'oi2')"  id="oi2"><?php 
    echo $row1["b"]; ?></textarea>
                        <div class="container-fluid cor fixed-top p-1 top1"  >
                            <div class="row">
                            <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-1">Qno:1  option (b)</h5> <p class="text-light hp p-1 mx-4" id="o2"></p></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <label class="p-1 lh1" >(c) </label>
                        <div id="ta4" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'o3','oi3')"   onkeyup="jerin(this.innerHTML,'o3','oi3','ta4')" onkeydown="jerin(this.innerHTML,'o3','oi3','ta4')" ><?php 
    echo $row1["c"]; ?></div>
                        <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="qoc1" onfocus="jerin(this.value,'o3')" onkeyup="jerin(this.value,'o3');enter(event,'oi3')" id="oi3"><?php 
    echo $row1["c"]; ?></textarea>
                        <div class="container-fluid cor fixed-top p-1 top1"  >
                            <div class="row">
                            <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-1">Qno:1  option (c)</h5> <p class="text-light hp p-1 mx-4" id="o3"></p></div>
                            </div>
                        </div>
                    </div>
            
                    <div class="col-6">
                        <label class="p-1 lh1 " >(d)</label>
                        <div id="ta5"  contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'o4','oi4')"   onkeyup="jerin(this.innerHTML,'o4','oi4','ta5')" onkeydown="jerin(this.innerHTML,'o4','oi4','ta5')" ><?php 
    echo $row1["d"]; ?></div>
                        <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="qod1" onfocus="jerin(this.value,'o4')" onkeyup="jerin(this.value,'o4');enter(event,'oi4')"  id="oi4"><?php 
    
    echo $row1["d"]; ?></textarea>
                        <div class="container-fluid cor fixed-top p-1 top1"  >
                            <div class="row">
                            <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-1">Qno:1  option (d)</h5> <p class="text-light hp p-1 mx-4" id="o4"></p></div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- Question 2 -->
           <div class="row ">
            <div class="col-8">
                <label class="p-1 lh" >2. </label>
                <div id="ta6" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'he2','qi2')"   onkeyup="jerin(this.innerHTML,'he2','qi2','ta6')" onkeydown="jerin(this.innerHTML,'he2','qi2','ta6')" ><?php $row1=$data->fetch_assoc();
                            echo $row1["q"]; ?></div>
                <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="q2" onfocus="jerin(this.value,'he2')" onkeyup="jerin(this.value,'he2');enter(event,'qi2')" id="qi2"><?php 
                            echo $row1["q"]; ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-2">Qno:2</h5> <p class="text-light hp p-2 mx-4" id="he2"></p></div>
                    </div>
                </div>
            </div>
    
            <div class="col-2">
            
            
            <select name="c2" id=""  class="form-control k  ml-2 register_form jer" >
                            <option value="<?php echo $row1["c1"] ; ?>" selected disable hidden><?php echo $row1["c1"] ; ?></option>
                            <option value="CO1">CO1</option>
                            <option value="CO2">CO2</option>
                            <option value="CO3">CO3</option>
                            <option value="CO4">CO4</option>
                            <option value="CO5">CO5</option>
                            <option value="CO6">CO6</option>
                        </select>
            </div>
            <div class="col-2">
                
            <select name="k2" id="" class="form-control k ml-2 register_form">
                            <option value="<?php echo $row1["k"] ; ?>"> <?php echo $row1["k"] ; ?></option>
                            <option value="K1">K1</option>
                            <option value="K2">K2</option>
                            <option value="K3">K3</option>
                            <option value="K4">K4</option>
                            <option value="K5">K5</option>
                            <option value="K6">K6</option>
                            
                        </select>
                </div>
        </div>
        <!-- Option 2 -->
        <div class="row">
            <div class="col-6">
                <label class="p-1 lh1" >(a) </label>
                <div id="ta7" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'o5','oi5')"   onkeyup="jerin(this.innerHTML,'o5','oi5','ta7')" onkeydown="jerin(this.innerHTML,'o5','oi5','ta7')" ><?php 
    echo $row1["a"]; ?></div>
                <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="qoa2" onfocus="jerin(this.value,'o5')" onkeyup="jerin(this.value,'o5');enter(event,'oi5')"  id="oi5"><?php 
    echo $row1["a"]; ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-1">Qno:2  option (a)</h5> <p class="text-light hp p-1 mx-4" id="o5"></p></div>
                    </div>
                </div>
            </div>
    
            <div class="col-6">
                <label class="p-1 lh1 " >(b) </label>
                <div id="ta8"  contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'o6','oi6')"   onkeyup="jerin(this.innerHTML,'o6','oi6','ta8')" onkeydown="jerin(this.innerHTML,'o6','oi6','ta8')" ><?php 
    echo $row1["b"]; ?></div>
                <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="qob2" onfocus="jerin(this.value,'o6')" onkeyup="jerin(this.value,'o6');enter(event,'oi6')"  id="oi6"><?php           
    echo $row1["b"]; ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-1">Qno:2  option (b)</h5> <p class="text-light hp p-1 mx-4" id="o6"></p></div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <label class="p-1 lh1" >(c) </label>
                <div id="ta9" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'o7','oi7')"   onkeyup="jerin(this.innerHTML,'o7','oi7','ta9')" onkeydown="jerin(this.innerHTML,'o7','oi7','ta9')" ><?php 
    echo $row1["c"]; ?></div>
                <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="qoc2" onfocus="jerin(this.value,'o7')" onkeyup="jerin(this.value,'o7');enter(event,'oi7')"  id="oi7"><?php 
    echo $row1["c"]; ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-1">Qno:2  option (c)</h5> <p class="text-light hp p-1 mx-4" id="o7"></p></div>
                    </div>
                </div>
            </div>
    
            <div class="col-6">
                <label class="p-1 lh1 " >(d)</label>
                <div id="ta10" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'o8','oi8')"   onkeyup="jerin(this.innerHTML,'o8','oi8','ta10')" onkeydown="jerin(this.innerHTML,'o8','oi8','ta10')" ><?php 
    echo $row1["d"]; ?></div>
                <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="qod2" onfocus="jerin(this.value,'o8')" onkeyup="jerin(this.value,'o8');enter(event,'oi8')"  id="oi8"> <?php 
    echo $row1["d"]; ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-1">Qno:2  option (d)</h5> <p class="text-light hp p-1 mx-4" id="o8"></p></div>
                    </div>
                </div>
            </div>
        </div>
         <!-- Question 3 -->
         <div class="row ">
            <div class="col-8">
                <label class="p-1 lh" >3. </label>
                <div id="ta11" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'he3','qi3')"   onkeyup="jerin(this.innerHTML,'he3','qi3','ta11')" onkeydown="jerin(this.innerHTML,'he3','qi3','ta11')" ><?php $row1=$data->fetch_assoc();
                            echo $row1["q"]; ?></div>
                <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="q3" onfocus="jerin(this.value,'he3')" onkeyup="jerin(this.value,'he3');enter(event,'qi3')"  id="qi3"><?php 
                            echo $row1["q"]; ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-2">Qno:3</h5> <p class="text-light hp p-2 mx-4" id="he3"></p></div>
                    </div>
                </div>
            </div>
    
            <div class="col-2">
            
            <select name="c3" id=""  class="form-control k  ml-2 register_form jer" >
                            <option value="<?php echo $row1["c1"] ; ?>" selected disable hidden><?php echo $row1["c1"] ; ?></option>
                            <option value="CO1">CO1</option>
                            <option value="CO2">CO2</option>
                            <option value="CO3">CO3</option>
                            <option value="CO4">CO4</option>
                            <option value="CO5">CO5</option>
                            <option value="CO6">CO6</option>
                        </select>
            </div>
            <div class="col-2">
                
            <select name="k3" id="" class="form-control k ml-2 register_form">
                            <option value="<?php echo $row1["k"] ; ?>"> <?php echo $row1["k"] ; ?></option>
                            <option value="K1">K1</option>
                            <option value="K2">K2</option>
                            <option value="K3">K3</option>
                            <option value="K4">K4</option>
                            <option value="K5">K5</option>
                            <option value="K6">K6</option>
                            
                        </select>
                </div>
        </div>
        <!-- Option 3 -->
        <div class="row">
            <div class="col-6">
                <label class="p-1 lh1" >(a) </label>
                <div id="ta12" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'o9','oi9')"   onkeyup="jerin(this.innerHTML,'o9','oi9','ta12')" onkeydown="jerin(this.innerHTML,'o9','oi9','ta12')" ><?php 
    echo $row1["a"] ; ?></div>
                <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="qoa3" onfocus="jerin(this.value,'o9')" onkeyup="jerin(this.value,'o9');enter(event,'oi9')"  id="oi9"><?php 
    echo $row1["a"] ; ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-1">Qno:3  option (a)</h5> <p class="text-light hp p-1 mx-4" id="o9"></p></div>
                    </div>
                </div>
            </div>
    
            <div class="col-6">
                <label class="p-1 lh1 " >(b) </label>
                <div id="ta13" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'o10','oi10')"   onkeyup="jerin(this.innerHTML,'o10','oi10','ta13')" onkeydown="jerin(this.innerHTML,'o10','oi10','ta13')" ><?php 
    echo $row1["b"] ; ?></div>
                <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="qob3" onfocus="jerin(this.value,'o10')" onkeyup="jerin(this.value,'o10');enter(event,'oi10')"  id="oi10"><?php 

    echo $row1["b"]; ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-1">Qno:3  option (b)</h5> <p class="text-light hp p-1 mx-4" id="o10"></p></div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <label class="p-1 lh1" >(c) </label>
                <div id="ta14" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'o11','oi11')"   onkeyup="jerin(this.innerHTML,'o11','oi11','ta14')" onkeydown="jerin(this.innerHTML,'o11','oi11','ta14')" ><?php 
    echo $row1["c"] ; ?></div>
                <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="qoc3" onfocus="jerin(this.value,'o11')" onkeyup="jerin(this.value,'o11');enter(event,'oi11')"  id="oi11"><?php 
    echo $row1["c"]; ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-1">Qno:3  option (c)</h5> <p class="text-light hp p-1 mx-4" id="o11"></p></div>
                    </div>
                </div>
            </div>
    
            <div class="col-6">
                <label class="p-1 lh1 " >(d)</label>
                <div id="ta15" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'o12','oi12')"   onkeyup="jerin(this.innerHTML,'o12','oi12','ta15')" onkeydown="jerin(this.innerHTML,'o12','oi12','ta15')" ><?php 
    echo $row1["d"] ; ?></div>
                <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="qod3" onfocus="jerin(this.value,'o12')" onkeyup="jerin(this.value,'o12');enter(event,'oi12')"  id="oi12"> <?php 
    echo $row1["d"]; ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-1">Qno:3  option (d)</h5> <p class="text-light hp p-1 mx-4" id="o12"></p></div>
                    </div>
                </div>
            </div>
        </div>
         <!-- Question 4 -->
         <div class="row ">
            <div class="col-8">
                <label class="p-1 lh" >4. </label>
                <div id="ta16" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'he4','qi4')"   onkeyup="jerin(this.innerHTML,'he4','qi4','ta16')" onkeydown="jerin(this.innerHTML,'he4','qi4','ta16')" ><?php $row1=$data->fetch_assoc();
                        
                        echo $row1["q"]; ?></div>
                <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="q4" onfocus="jerin(this.value,'he4')" onkeyup="jerin(this.value'he4');enter(event,'qi4')"  id="qi4"><?php
                        
                            echo $row1["q"]; ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-2">Qno:4</h5> <p class="text-light hp p-2 mx-4" id="he4"></p></div>
                    </div>
                </div>
            </div>
    
            <div class="col-2">
        
            <select name="c4" id=""  class="form-control k  ml-2 register_form jer" >
                            <option value="<?php echo $row1["c1"] ; ?>" selected disable hidden><?php echo $row1["c1"] ; ?></option>
                            <option value="CO1">CO1</option>
                            <option value="CO2">CO2</option>
                            <option value="CO3">CO3</option>
                            <option value="CO4">CO4</option>
                            <option value="CO5">CO5</option>
                            <option value="CO6">CO6</option>
                        </select>
            </div>
            <div class="col-2">
                
            <select name="k4" id="" class="form-control k ml-2 register_form">
                            <option value="<?php echo $row1["k"] ; ?>"> <?php echo $row1["k"] ; ?></option>
                            <option value="K1">K1</option>
                            <option value="K2">K2</option>
                            <option value="K3">K3</option>
                            <option value="K4">K4</option>
                            <option value="K5">K5</option>
                            <option value="K6">K6</option>
                            
                        </select>
                </div>
        </div>
        <!-- Option 4 -->
        <div class="row">
            <div class="col-6">
                <label class="p-1 lh1" >(a) </label>
                <div id="ta17" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'o13','oi13')"   onkeyup="jerin(this.innerHTML,'o13','oi13','ta17')" onkeydown="jerin(this.innerHTML,'o13','oi13','ta17')" ><?php 
    echo $row1["a"] ; ?></div>
                <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="qoa4" onfocus="jerin(this.value,'o13')" onkeyup="jerin(this.value,'o13');enter(event,'oi13')"  id="oi13"><?php 

    echo $row1["a"]  ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-1">Qno:4  option (a)</h5> <p class="text-light hp p-1 mx-4" id="o13"></p></div>
                    </div>
                </div>
            </div>
    
            <div class="col-6">
                <label class="p-1 lh1 " >(b) </label>
                <div id="ta18" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'o14','oi14','ta18')"   onkeyup="jerin(this.innerHTML,'o14','oi14','ta18')" onkeydown="jerin(this.innerHTML,'o14','oi14','ta18')" ><?php 
    echo $row1["b"] ; ?></div>
                <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="qob4" onfocus="jerin(this.value,'o14')" onkeyup="jerin(this.value,'o14');enter(event,'oi14')"  id="oi14"><?php 
    
    echo $row1["b"]; ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-1">Qno:4  option (b)</h5> <p class="text-light hp p-1 mx-4" id="o14"></p></div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <label class="p-1 lh1" >(c) </label>
                <div id="ta19" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'o15','oi15','ta19')"   onkeyup="jerin(this.innerHTML,'o15','oi15','ta19')" onkeydown="jerin(this.innerHTML,'o15','oi15','ta19')" ><?php 
    echo $row1["c"] ; ?></div>
                <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="qoc4" onfocus="jerin(this.value,'o15')" onkeyup="jerin(this.value,'o15');enter(event,'oi15')" id="oi15"><?php 
    
    echo $row1["c"]; ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-1">Qno:4  option (c)</h5> <p class="text-light hp p-1 mx-4" id="o15"></p></div>
                    </div>
                </div>
            </div>
    
            <div class="col-6">
                <label class="p-1 lh1 " >(d)</label>
                <div id="ta20" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'o16','oi16')"   onkeyup="jerin(this.innerHTML,'o16','oi16','ta20')" onkeydown="jerin(this.innerHTML,'o16','oi16','ta20')" ><?php 
    echo $row1["d"] ; ?></div>
                <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="qod4" onfocus="jerin(this.value,'o16')" onkeyup="jerin(this.value,'o16');enter(event,'oi16')"  id="oi16"> <?php 

    echo $row1["d"]; ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-1">Qno:4  option (d)</h5> <p class="text-light hp p-1 mx-4" id="o16"></p></div>
                    </div>
                </div>
            </div>
        </div>
         <!-- Question 5 -->
         <div class="row ">
            <div class="col-8">
                <label class="p-1 lh" >5. </label>
                <div id="ta21" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'he5','qi5')"   onkeyup="jerin(this.innerHTML,'he5','qi5','ta21')" onkeydown="jerin(this.innerHTML,'he5','qi5','ta21')" ><?php $row1=$data->fetch_assoc();
                        
                        echo $row1["q"]; ?></div>
                <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="q5" onfocus="jerin(this.value,'he5')" onkeyup="jerin(this.value,'he5');enter(event,'qi5')"  id="qi5"> <?php
                            echo $row1["q"]; ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-2">Qno:5</h5> <p class="text-light hp p-2 mx-4" id="he5"></p></div>
                    </div>
                </div>
            </div>
    
            <div class="col-2">
            
            <select name="c5" id=""  class="form-control k  ml-2 register_form jer" >
                            <option value="<?php echo $row1["c1"] ; ?>" selected disable hidden><?php echo $row1["c1"] ; ?></option>
                            <option value="CO1">CO1</option>
                            <option value="CO2">CO2</option>
                            <option value="CO3">CO3</option>
                            <option value="CO4">CO4</option>
                            <option value="CO5">CO5</option>
                            <option value="CO6">CO6</option>
                        </select>
            </div>
            <div class="col-2">
                
            <select name="k5" id="" class="form-control k ml-2 register_form">
                            <option value="<?php echo $row1["k"] ; ?>"> <?php echo $row1["k"] ; ?></option>
                            <option value="K1">K1</option>
                            <option value="K2">K2</option>
                            <option value="K3">K3</option>
                            <option value="K4">K4</option>
                            <option value="K5">K5</option>
                            <option value="K6">K6</option>
                            
                        </select>
                </div>
        </div>
        <!-- Option 5 -->
        <div class="row">
            <div class="col-6">
                <label class="p-1 lh1" >(a) </label>
                <div id="ta22" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'o17','oi17','ta22')"   onkeyup="jerin(this.innerHTML,'o17','oi17','ta22')" onkeydown="jerin(this.innerHTML,'o17','oi17','ta22')" ><?php 
    echo $row1["a"] ; ?></div>
                <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="qoa5" onfocus="jerin(this.value,'o17')" onkeyup="jerin(this.value,'o17');enter(event,'oi17')"  id="oi17"><?php 

    echo $row1["a"]  ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-1">Qno:5  option (a)</h5> <p class="text-light hp p-1 mx-4" id="o17"></p></div>
                    </div>
                </div>
            </div>
    
            <div class="col-6">
                <label class="p-1 lh1 " >(b) </label>
                <div id="ta23" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'o18','oi18')"   onkeyup="jerin(this.innerHTML,'o18','oi18','ta23')" onkeydown="jerin(this.innerHTML,'o18','oi18','ta23')" ><?php 
    echo $row1["b"] ; ?></div>
                <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="qob5" onfocus="jerin(this.value,'o18')" onkeyup="jerin(this.value,'o18');enter(event,'oi18')"  id="oi18"><?php 
    echo $row1["b"]; ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-1">Qno:5  option (b)</h5> <p class="text-light hp p-1 mx-4" id="o18"></p></div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <label class="p-1 lh1" >(c) </label>
                <div id="ta24" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'o19','oi19')"   onkeyup="jerin(this.innerHTML,'o19','oi19','ta24')" onkeydown="jerin(this.innerHTML,'o19','oi19','ta24')" ><?php 
    echo $row1["c"] ; ?></div>
                <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="qoc5" onfocus="jerin(this.value,'o19')" onkeyup="jerin(this.value,'o19');enter(event,'oi19')"  id="oi19"><?php 
    
    echo $row1["c"]; ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-1">Qno:5  option (c)</h5> <p class="text-light hp p-1 mx-4" id="o19"></p></div>
                    </div>
                </div>
            </div>
    
            <div class="col-6">
                <label class="p-1 lh1 " >(d)</label>
                <div id="ta25" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'o20','oi20')"   onkeyup="jerin(this.innerHTML,'o20','oi20','ta25')" onkeydown="jerin(this.innerHTML,'o20','oi20','ta25')" ><?php 
    echo $row1["d"] ; ?></div>
                <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="qod5" onfocus="jerin(this.value,'o20')" onkeyup="jerin(this.value,'o20');enter(event,'oi20')"  id="oi20"> <?php 
     
    echo $row1["d"]; ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-1">Qno:5  option (d)</h5> <p class="text-light hp p-1 mx-4" id="o20"></p></div>
                    </div>
                </div>
            </div>
        </div>
         <!-- Question 6 -->
         <div class="row ">
            <div class="col-8">
                <label class="p-1 lh" >6. </label>
                <div id="ta26" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'he6','qi6')"   onkeyup="jerin(this.innerHTML,'he6','qi6','ta26')" onkeydown="jerin(this.innerHTML,'he6','qi6','ta26')" ><?php $row1=$data->fetch_assoc();
                        
                        echo $row1["q"]; ?></div>
                <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="q6" onfocus="jerin(this.value,'he6')" onkeyup="jerin(this.value,'he6');enter(event,'qi6')"  id="qi6"> <?php
                           echo $row1["q"]; ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-2">Qno:6</h5> <p class="text-light hp p-2 mx-4" id="he6"></p></div>
                    </div>
                </div>
            </div>
    
            <div class="col-2">
            
            <select name="c6" id=""  class="form-control k  ml-2 register_form jer" >
                            <option value="<?php echo $row1["c1"] ; ?>" selected disable hidden><?php echo $row1["c1"] ; ?></option>
                            <option value="CO1">CO1</option>
                            <option value="CO2">CO2</option>
                            <option value="CO3">CO3</option>
                            <option value="CO4">CO4</option>
                            <option value="CO5">CO5</option>
                            <option value="CO6">CO6</option>
                        </select>
            </div>
            <div class="col-2">
                
            <select name="k6" id="" class="form-control k ml-2 register_form">
                            <option value="<?php echo $row1["k"] ; ?>"> <?php echo $row1["k"] ; ?></option>
                            <option value="K1">K1</option>
                            <option value="K2">K2</option>
                            <option value="K3">K3</option>
                            <option value="K4">K4</option>
                            <option value="K5">K5</option>
                            <option value="K6">K6</option>
                            
                        </select>
                </div>
        </div>
        <!-- Option 6 -->
        <div class="row">
            <div class="col-6">
                <label class="p-1 lh1" >(a) </label>
                <div id="ta27" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'o21','oi21')"   onkeyup="jerin(this.innerHTML,'o21','oi21','ta27')" onkeydown="jerin(this.innerHTML,'o21','oi21','ta27')" ><?php 
    echo $row1["a"] ; ?></div>
                <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="qoa6" onfocus="jerin(this.value,'o21')" onkeyup="jerin(this.value,'o21');enter(event,'oi21')"  id="oi21"><?php 
    
    echo $row1["a"]  ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-1">Qno:6  option (a)</h5> <p class="text-light hp p-1 mx-4" id="o21"></p></div>
                    </div>
                </div>
            </div>
    
            <div class="col-6">
                <label class="p-1 lh1 " >(b) </label>
                <div id="ta28" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'o22','oi22')"   onkeyup="jerin(this.innerHTML,'o22','oi22','ta28')" onkeydown="jerin(this.innerHTML,'o22','oi22','ta28')" ><?php 
    echo $row1["b"] ; ?></div>
                <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="qob6" onfocus="jerin(this.value,'o22')" onkeyup="jerin(this.value,'o22');enter(event,'oi22')"  id="oi22"><?php 
    
    echo $row1["b"]; ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-1">Qno:6  option (b)</h5> <p class="text-light hp p-1 mx-4" id="o22"></p></div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <label class="p-1 lh1" >(c) </label>
                <div id="ta29" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'o23','oi23')"   onkeyup="jerin(this.innerHTML,'o23','oi23','ta29')" onkeydown="jerin(this.innerHTML,'o23','oi23','ta29')" ><?php 
    echo $row1["c"] ; ?></div>
                <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="qoc6" onfocus="jerin(this.value,'o23')" onkeyup="jerin(this.value,'o23');enter(event,'oi23')"  id="oi23"><?php 
    echo $row1["c"]; ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-1">Qno:6  option (c)</h5> <p class="text-light hp p-1 mx-4" id="o23"></p></div>
                    </div>
                </div>
            </div>
    
            <div class="col-6">
                <label class="p-1 lh1 " >(d)</label>
                <div id="ta30" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'o24','oi24')"   onkeyup="jerin(this.innerHTML,'o24','oi24','ta30')" onkeydown="jerin(this.innerHTML,'o24','oi24','ta30')" ><?php 
    echo $row1["d"] ; ?></div>
                <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="qod6" onfocus="jerin(this.value,'o24')" onkeyup="jerin(this.value,'o24');enter(event,'oi24')"  id="oi24"> <?php 
    echo $row1["d"]; ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-1">Qno:6  option (d)</h5> <p class="text-light hp p-1 mx-4" id="o24"></p></div>
                    </div>
                </div>
            </div>
        </div>
         <!-- Question 7 -->
         <div class="row ">
            <div class="col-8">
                <label class="p-1 lh" >7. </label>
                <div id="ta31" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'he7','qi7')"   onkeyup="jerin(this.innerHTML,'he7','qi7','ta31')" onkeydown="jerin(this.innerHTML,'he7','qi7','ta31')" ><?php $row1=$data->fetch_assoc();
                        
                        echo $row1["q"]; ?></div>
                <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="q7" onfocus="jerin(this.value,'he7')" onkeyup="jerin(this.value,'he7');enter(event,'qi7')"  id="qi7"> <?php
                            echo $row1["q"]; ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-2">Qno:7</h5> <p class="text-light hp p-2 mx-4" id="he7"></p></div>
                    </div>
                </div>
            </div>
    
            <div class="col-2">
            
            <select name="c7" id=""  class="form-control k  ml-2 register_form jer" >
                            <option value="<?php echo $row1["c1"] ; ?>" selected disable hidden><?php echo $row1["c1"] ; ?></option>
                            <option value="CO1">CO1</option>
                            <option value="CO2">CO2</option>
                            <option value="CO3">CO3</option>
                            <option value="CO4">CO4</option>
                            <option value="CO5">CO5</option>
                            <option value="CO6">CO6</option>
                        </select>
            </div>
            <div class="col-2">
                
            <select name="k7" id="" class="form-control k ml-2 register_form">
                            <option value="<?php echo $row1["k"] ; ?>"> <?php echo $row1["k"] ; ?></option>
                            <option value="K1">K1</option>
                            <option value="K2">K2</option>
                            <option value="K3">K3</option>
                            <option value="K4">K4</option>
                            <option value="K5">K5</option>
                            <option value="K6">K6</option>
                            
                        </select>
                </div>
        </div>
        <!-- Option 7 -->
        <div class="row">
            <div class="col-6">
                <label class="p-1 lh1" >(a) </label>
                <div id="ta32" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'o25','oi25')"   onkeyup="jerin(this.innerHTML,'o25','oi25','ta32')" onkeydown="jerin(this.innerHTML,'o25','oi25','ta32')" ><?php 
    echo $row1["a"] ; ?></div>
                <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="qoa7" onfocus="jerin(this.value,'o25')" onkeyup="jerin(this.value,'o25');enter(event,'oi25')"  id="oi25"><?php 
    
    echo $row1["a"]  ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-1">Qno:7  option (a)</h5> <p class="text-light hp p-1 mx-4" id="o25"></p></div>
                    </div>
                </div>
            </div>
    
            <div class="col-6">
                <label class="p-1 lh1 " >(b) </label>
                <div id="ta33" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'o266','oi26')"   onkeyup="jerin(this.innerHTML,'o266','oi26','ta33')" onkeydown="jerin(this.innerHTML,'o266','oi26','ta33')" ><?php 
    echo $row1["b"] ; ?></div>
                <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="qob7" onfocus="jerin(this.value,'o266')" onkeyup="jerin(this.value,'o266');enter(event,'oi26')"  id="oi26"><?php 
    
    echo $row1["b"]; ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-1">Qno:7  option (b)</h5> <p class="text-light hp p-1 mx-4" id="o266"></p></div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <label class="p-1 lh1" >(c) </label>
                <div id="ta34" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'o27','oi27')"   onkeyup="jerin(this.innerHTML,'o27','oi27','ta34')" onkeydown="jerin(this.innerHTML,'o27','oi27','ta34')" ><?php 
    echo $row1["c"] ; ?></div>
                <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="qoc7" onfocus="jerin(this.value,'o27')" onkeyup="jerin(this.value,'o27');enter(event,'oi27')"  id="oi27"><?php 
    
    echo $row1["c"]; ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-1">Qno:7  option (c)</h5> <p class="text-light hp p-1 mx-4" id="o27"></p></div>
                    </div>
                </div>
            </div>
    
            <div class="col-6">
                <label class="p-1 lh1 " >(d)</label>
                <div id="ta35" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'o28','oi28')"   onkeyup="jerin(this.innerHTML,'o28','oi28','ta35')" onkeydown="jerin(this.innerHTML,'o28','oi28','ta35')" ><?php 
    echo $row1["d"] ; ?></div>
                <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="qod7" onfocus="jerin(this.value,'o28')" onkeyup="jerin(this.value,'o28');enter(event,'oi28')"  id="oi28"> <?php 
     
    echo $row1["d"]; ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-1">Qno:7  option (d)</h5> <p class="text-light hp p-1 mx-4" id="o28"></p></div>
                    </div>
                </div>
            </div>
        </div>
         <!-- Question 8 -->
         <div class="row ">
            <div class="col-8">
                <label class="p-1 lh" >8. </label>
                <div id="ta36" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'he8','qi8')"   onkeyup="jerin(this.innerHTML,'he8','qi8','ta36')" onkeydown="jerin(this.innerHTML,'he8','qi8','ta36')" ><?php $row1=$data->fetch_assoc();
                        
                        echo $row1["q"]; ?></div>
                <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="q8" onfocus="jerin(this.value,'he8')" onkeyup="jerin(this.value,'he8');enter(event,'qi8')"  id="qi8"> <?php
                            echo $row1["q"]; ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-2">Qno:8</h5> <p class="text-light hp p-2 mx-4" id="he8"></p></div>
                    </div>
                </div>
            </div>
    
            <div class="col-2">
            
            <select name="c8" id=""  class="form-control k  ml-2 register_form jer" >
                            <option value="<?php echo $row1["c1"] ; ?>" selected disable hidden><?php echo $row1["c1"] ; ?></option>
                            <option value="CO1">CO1</option>
                            <option value="CO2">CO2</option>
                            <option value="CO3">CO3</option>
                            <option value="CO4">CO4</option>
                            <option value="CO5">CO5</option>
                            <option value="CO6">CO6</option>
                        </select>
            </div>
            <div class="col-2">
                
            <select name="k8" id="" class="form-control k ml-2 register_form">
                            <option value="<?php echo $row1["k"] ; ?>"> <?php echo $row1["k"] ; ?></option>
                            <option value="K1">K1</option>
                            <option value="K2">K2</option>
                            <option value="K3">K3</option>
                            <option value="K4">K4</option>
                            <option value="K5">K5</option>
                            <option value="K6">K6</option>
                            
                        </select>
                </div>
        </div>
        <!-- Option 8 -->
        <div class="row">
            <div class="col-6">
                <label class="p-1 lh1" >(a) </label>
                <div id="ta37" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'o29','oi29')"   onkeyup="jerin(this.innerHTML,'o29','oi29')" onkeydown="jerin(this.innerHTML,'o29','oi29')" ><?php 
    echo $row1["a"] ; ?></div>
                <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="qoa8" onfocus="jerin(this.value,'o29')" onkeyup="jerin(this.value,'o29');enter(event,'oi29')"  id="oi29"><?php 
    
    echo $row1["a"]  ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-1">Qno:8  option (a)</h5> <p class="text-light hp p-1 mx-4" id="o29"></p></div>
                    </div>
                </div>
            </div>
    
            <div class="col-6">
                <label class="p-1 lh1 " >(b) </label>
                <div id="ta38" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'o30','oi30')"   onkeyup="jerin(this.innerHTML,'o30','oi30','ta38')" onkeydown="jerin(this.innerHTML,'o30','oi30','ta38')" ><?php 
    echo $row1["b"] ; ?></div>
                <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="qob8" onfocus="jerin(this.value,'o30')" onkeyup="jerin(this.value,'o30');enter(event,'oi30')"  id="oi30"><?php 
    
    echo $row1["b"]; ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-1">Qno:8  option (b)</h5> <p class="text-light hp p-1 mx-4" id="o30"></p></div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <label class="p-1 lh1" >(c) </label>
                <div id="ta39" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'o31','oi31')"   onkeyup="jerin(this.innerHTML,'o31','oi31','ta39')" onkeydown="jerin(this.innerHTML,'o31','oi31','ta39')" ><?php 
    echo $row1["c"] ; ?></div>
                <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="qoc8" onfocus="jerin(this.value,'o31')" onkeyup="jerin(this.value,'o31');enter(event,'oi31')"  id="oi31"><?php 
    
    echo $row1["c"]; ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-1">Qno:8  option (c)</h5> <p class="text-light hp p-1 mx-4" id="o31"></p></div>
                    </div>
                </div>
            </div>
    
            <div class="col-6">
                <label class="p-1 lh1 " >(d)</label>
                <div id="ta40" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'o32','oi32')"   onkeyup="jerin(this.innerHTML,'o32','oi32','ta40')" onkeydown="jerin(this.innerHTML,'o32','oi32','ta40')" ><?php 
    echo $row1["d"] ; ?></div>
                <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="qod8" onfocus="jerin(this.value,'o32')" onkeyup="jerin(this.value,'o32');enter(event,'oi32')"  id="oi32"> <?php 
     
    echo $row1["d"]; ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-1">Qno:8  option (d)</h5> <p class="text-light hp p-1 mx-4" id="o32"></p></div>
                    </div>
                </div>
            </div>
        </div>
         <!-- Question 9 -->
         <div class="row ">
            <div class="col-8">
                <label class="p-1 lh" >9. </label>
                <div id="ta41" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'he9','qi9')"   onkeyup="jerin(this.innerHTML,'he9','qi9','ta41')" onkeydown="jerin(this.innerHTML,'he9','qi9','ta41')" ><?php $row1=$data->fetch_assoc();
                        
                        echo $row1["q"]; ?></div>
                <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="q9" onfocus="jerin(this.value,'he9')" onkeyup="jerin(this.value,'he9');enter(event,'qi9')"  id="qi9"> <?php
                            echo $row1["q"]; ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-2">Qno:9</h5> <p class="text-light hp p-2 mx-4" id="he9"></p></div>
                    </div>
                </div>
            </div>
    
            <div class="col-2">
            
            <select name="c9" id=""  class="form-control k  ml-2 register_form jer" >
                            <option value="<?php echo $row1["c1"] ; ?>" selected disable hidden><?php echo $row1["c1"] ; ?></option>
                            <option value="CO1">CO1</option>
                            <option value="CO2">CO2</option>
                            <option value="CO3">CO3</option>
                            <option value="CO4">CO4</option>
                            <option value="CO5">CO5</option>
                            <option value="CO6">CO6</option>
                        </select>
            </div>
            <div class="col-2">
                
            <select name="k9" id="" class="form-control k ml-2 register_form">
                            <option value="<?php echo $row1["k"] ; ?>"> <?php echo $row1["k"] ; ?></option>
                            <option value="K1">K1</option>
                            <option value="K2">K2</option>
                            <option value="K3">K3</option>
                            <option value="K4">K4</option>
                            <option value="K5">K5</option>
                            <option value="K6">K6</option>
                            
                        </select>
                </div>
        </div>
        <!-- Option 9 -->
        <div class="row">
            <div class="col-6">
                <label class="p-1 lh1" >(a) </label>
                <div id="ta42" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'o33','oi33')"   onkeyup="jerin(this.innerHTML,'o33','oi33','ta42')" onkeydown="jerin(this.innerHTML,'o33','oi33','ta42')" ><?php 
    echo $row1["a"] ; ?></div>
                <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="qoa9" onfocus="jerin(this.value,'o33')" onkeyup="jerin(this.value,'o33');enter(event,'oi33')"  id="oi33"><?php 
    
    echo $row1["a"]  ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-1">Qno:9  option (a)</h5> <p class="text-light hp p-1 mx-4" id="o33"></p></div>
                    </div>
                </div>
            </div>
    
            <div class="col-6">
                <label class="p-1 lh1 " >(b) </label>
                <div id="ta43" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'o34','oi34')"   onkeyup="jerin(this.innerHTML,'o34','oi34','ta43')" onkeydown="jerin(this.innerHTML,'o34','oi34','ta43')" ><?php 
    echo $row1["b"] ; ?></div>
                <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="qob9" onfocus="jerin(this.value,'o34')" onkeyup="jerin(this.value,'o34');enter(event,'oi34')"  id="oi34"><?php 
    
    echo $row1["b"]; ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-1">Qno:9  option (b)</h5> <p class="text-light hp p-1 mx-4" id="o34"></p></div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <label class="p-1 lh1" >(c) </label>
                <div id="ta44"  contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'o35','oi35')"   onkeyup="jerin(this.innerHTML,'o35','oi35','ta44')" onkeydown="jerin(this.innerHTML,'o35','oi35','ta44')" ><?php 
    echo $row1["c"] ; ?></div>
                <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="qoc9" onfocus="jerin(this.value,'o35')" onkeyup="jerin(this.value,'o35');enter(event,'oi35')"  id="oi35"><?php 
    
    echo $row1["c"]; ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-1">Qno:9  option (c)</h5> <p class="text-light hp p-1 mx-4" id="o35"></p></div>
                    </div>
                </div>
            </div>
    
            <div class="col-6">
                <label class="p-1 lh1 " >(d)</label>
                <div id="ta45" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'o36','oi36')"   onkeyup="jerin(this.innerHTML,'o36','oi36','ta45')" onkeydown="jerin(this.innerHTML,'o36','oi36','ta45')" ><?php 
    echo $row1["d"] ; ?></div>
                <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="qod9" onfocus="jerin(this.value,'o36')" onkeyup="jerin(this.value,'o36');enter(event,'oi36')"  id="oi36"> <?php 
     
    echo $row1["d"]; ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-1">Qno:9  option (d)</h5> <p class="text-light hp p-1 mx-4" id="o36"></p></div>
                    </div>
                </div>
            </div>
        </div>
         <!-- Question 10 -->
         <div class="row ">
            <div class="col-8">
                <label class="p-1 lh" >10. </label>
                <div id="ta46" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'he10','qi10','ta46')"   onkeyup="jerin(this.innerHTML,'he10','qi10','ta46')" onkeydown="jerin(this.innerHTML,'he10','qi10','ta46')" ><?php $row1=$data->fetch_assoc();
                        
                        echo $row1["q"]; ?></div>
                <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="q10" onfocus="jerin(this.value,'he10')" onkeyup="jerin(this.value,'he10');enter(event,'qi10')"  id="qi10"> <?php 
                           echo $row1["q"]; ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-2">Qno:10</h5> <p class="text-light hp p-2 mx-4" id="he10"></p></div>
                    </div>
                </div>
            </div>
    
            <div class="col-2">
            
            <select name="c10" id=""  class="form-control k  ml-2 register_form jer" >
                            <option value="<?php echo $row1["c1"] ; ?>" selected disable hidden><?php echo $row1["c1"] ; ?></option>
                            <option value="CO1">CO1</option>
                            <option value="CO2">CO2</option>
                            <option value="CO3">CO3</option>
                            <option value="CO4">CO4</option>
                            <option value="CO5">CO5</option>
                            <option value="CO6">CO6</option>
                        </select>
            </div>
            <div class="col-2">
                
            <select name="k10" id="" class="form-control k ml-2 register_form">
                            <option value="<?php echo $row1["k"] ; ?>"> <?php echo $row1["k"] ; ?></option>
                            <option value="K1">K1</option>
                            <option value="K2">K2</option>
                            <option value="K3">K3</option>
                            <option value="K4">K4</option>
                            <option value="K5">K5</option>
                            <option value="K6">K6</option>
                            
                        </select>
                </div>
        </div>
        <!-- Option 10 -->
        <div class="row">
            <div class="col-6">
                <label class="p-1 lh1" >(a) </label>
                <div id="ta47" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'o37','oi37')"   onkeyup="jerin(this.innerHTML,'o37','oi37','ta47')" onkeydown="jerin(this.innerHTML,'o37','oi37','ta47')" ><?php 
    echo $row1["a"] ; ?></div>
                <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="qoa10" onfocus="jerin(this.value,'o37')" onkeyup="jerin(this.value,'o37');enter(event,'oi37')"  id="oi37"><?php 
    
    echo $row1["a"]  ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-1">Qno:10  option (a)</h5> <p class="text-light hp p-1 mx-4" id="o37"></p></div>
                    </div>
                </div>
            </div>
    
            <div class="col-6">
                <label class="p-1 lh1 " >(b) </label>
                <div id="ta48" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'o38','oi38','ta48')"   onkeyup="jerin(this.innerHTML,'o38','oi38','ta48')" onkeydown="jerin(this.innerHTML,'o38','oi38','ta48')" ><?php 
    echo $row1["b"] ; ?></div>
                <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="qob10" onfocus="jerin(this.value,'o38')" onkeyup="jerin(this.value,'o38');enter(event,'oi38')"  id="oi38"><?php 
    
    echo $row1["b"]; ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-1">Qno:10  option (b)</h5> <p class="text-light hp p-1 mx-4" id="o38"></p></div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <label class="p-1 lh1" >(c) </label>
                <div id="ta49" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'o39','oi39')"   onkeyup="jerin(this.innerHTML,'o39','oi39','ta49')" onkeydown="jerin(this.innerHTML,'o39','oi39','ta49')" ><?php 
    echo $row1["c"] ; ?></div>
                <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="qoc10" onfocus="jerin(this.value,'o39')" onkeyup="jerin(this.value,'o39');enter(event,'oi39')"  id="oi39"><?php 
    
    echo $row1["c"]; ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-1">Qno:10  option (c)</h5> <p class="text-light hp p-1 mx-4" id="o39"></p></div>
                    </div>
                </div>
            </div>
    
            <div class="col-6">
                <label class="p-1 lh1 " >(d)</label>
                <div id="ta50" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'o40','oi40')"   onkeyup="jerin(this.innerHTML,'o40','oi40','ta50')" onkeydown="jerin(this.innerHTML,'o40','oi40','ta50')" ><?php 
    echo $row1["d"] ; ?></div>
                <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="qod10" onfocus="jerin(this.value,'o40')" onkeyup="jerin(this.value,'o40');enter(event,'oi40')"  id="oi40"> <?php 
     
    echo $row1["d"]; ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-1">Qno:10  option (d)</h5> <p class="text-light hp p-1 mx-4" id="o40"></p></div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Question section B -->
      <div class="container bg-primary mt-4 di">
        <div class="card ">
            <div class="card-body bg-light ">
                <!-- section details -->
                <div class="row ">
                    <div class="col-8">
                    <center><label class="p-1 lh1 " >Section - B </label></center>
                        
                    </div>
            
                    <div class="col-2">
                        <label class="p-1 lh2 " >Course <br> Outcome </label>
                        
                    </div>
                    <div class="col-2">
                        <label class="p-1 lh2 " >Bloom's <br> K-Level </label>
                        
                    </div>
                </div>
    <!-- Question details -->
    <div class="row mt-4">
        <div class="col-8">
        <p>
            <span class="lh2 mx-3"> Answer All The Questions   </span><span class="lh2">2x5=10</span>
        </p>
            
        </div>

        <div class="col-2">
          
            
        </div>
        <div class="col-2">
           
            
        </div>
    </div>  
    <!-- Question 11 -->
    <!-- 11(a) -->
        <div class="row ">
            <div class="col-8">
                <label class="p-1 lh" >11.<br><small>&nbsp; &nbsp;(a) </small></label>
                <div id="ta51" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'he11','qi11')"   onkeyup="jerin(this.innerHTML,'he11','qi11','ta51')" onkeydown="jerin(this.innerHTML,'he11','qi11','ta51')" ><?php 
    $row1=$data->fetch_assoc();
    
    
    echo $row1["a"] ; ?></div>
                <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="qoa11" onfocus="jerin(this.value,'he11')" onkeyup="jerin(this.value,'he11');enter(event,'qi11')"  id="qi11"><?php 
    echo $row1["a"] ; ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-2">Qno:11(a)</h5> <p class="text-light hp p-2 mx-4" id="he11"></p></div>
                    </div>
                </div>
            </div>
    
            <div class="col-2">
            
           
            <select name="c11" id=""  class="form-control k1  ml-2 register_form jer" >
                            <option value="<?php echo $row1["c1"] ; ?>" selected disable hidden><?php echo $row1["c1"] ; ?></option>
                            <option value="CO1">CO1</option>
                            <option value="CO2">CO2</option>
                            <option value="CO3">CO3</option>
                            <option value="CO4">CO4</option>
                            <option value="CO5">CO5</option>
                            <option value="CO6">CO6</option>
                        </select>
            </div>
            <div class="col-2">
                
            <select name="k11" id="" class="form-control k1 ml-2 register_form">
                            <option value="<?php echo $row1["k"] ; ?>"> <?php echo $row1["k"] ; ?></option>
                            <option value="K1">K1</option>
                            <option value="K2">K2</option>
                            <option value="K3">K3</option>
                            <option value="K4">K4</option>
                            <option value="K5">K5</option>
                            <option value="K6">K6</option>
                            
                        </select>
                </div>
        </div>  
    <!-- or --> 
        <div class="row ">
            <div class="col-12">
                <center><label class="p-1 lh" >OR</label></center>
                
            </div>
    
            
        </div> 
    <!-- 11(b) -->  
        <div class="row ">
            <div class="col-8">
                <label class="p-1 lh" ><small>&nbsp; &nbsp;(b) </small></label>
                <div id="ta52" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'he11b','qi12')"   onkeyup="jerin(this.innerHTML,'he11b','qi12','ta52')" onkeydown="jerin(this.innerHTML,'he11b','qi12','ta52')" ><?php 
    echo $row1["b"] ; ?></div>
                <textarea  hidden rows="1" class="form-control  mx-2 register_form jer" name="qob11" onfocus="jerin(this.value,'he11b')" onkeyup="jerin(this.value,'he11b');enter(event,'qi12') "  id="qi12"><?php 
    echo $row1["b"] ; ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-2">Qno:11(b)</h5> <p class="text-light hp p-2 mx-4" id="he11b"></p></div>
                    </div>
                </div>
            </div>
    
            <div class="col-2">
            
            <select name="qoc11" id=""  class="form-control k  ml-2 register_form jer" >
                            <option value="<?php echo $row1["c"] ; ?>" selected disable hidden><?php echo $row1["c"] ; ?></option>
                            <option value="CO1">CO1</option>
                            <option value="CO2">CO2</option>
                            <option value="CO3">CO3</option>
                            <option value="CO4">CO4</option>
                            <option value="CO5">CO5</option>
                            <option value="CO6">CO6</option>
                        </select>
            
            </div>
            <div class="col-2">
                
            <select name="qod11" id="" class="form-control k ml-2 register_form">
                            <option value="<?php echo $row1["d"] ; ?>"> <?php echo $row1["d"] ; ?></option>
                            <option value="K1">K1</option>
                            <option value="K2">K2</option>
                            <option value="K3">K3</option>
                            <option value="K4">K4</option>
                            <option value="K5">K5</option>
                            <option value="K6">K6</option>
                            
                        </select>
                </div>
        </div> 
    <!-- Question 12 -->
    <!-- 12(a) -->
    <div class="row ">
        <div class="col-8">
            <label class="p-1 lh" >12.<br><small>&nbsp; &nbsp;(a) </small></label>
            <div id="ta53" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'he12','qi13')"   onkeyup="jerin(this.innerHTML,'he12','qi13','ta53')" onkeydown="jerin(this.innerHTML,'he12','qi13','ta53')" ><?php 
    $row1=$data->fetch_assoc();
    
    
    echo $row1["a"] ; ?></div>
            <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="qoa12" onfocus="jerin(this.value,'he12')" onkeyup="jerin(this.value,'he12');enter(event,'qi13')"  id="qi13"><?php 
    echo $row1["a"] ; ?></textarea>
            <div class="container-fluid cor fixed-top p-1 top1"  >
                <div class="row">
                <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-2">Qno:12(a)</h5> <p class="text-light hp p-2 mx-4" id="he12"></p></div>
                </div>
            </div>
        </div>

        <div class="col-2">
        
        <select name="c12" id=""  class="form-control k1  ml-2 register_form jer" >
                            <option value="<?php echo $row1["c1"] ; ?>" selected disable hidden><?php echo $row1["c1"] ; ?></option>
                            <option value="CO1">CO1</option>
                            <option value="CO2">CO2</option>
                            <option value="CO3">CO3</option>
                            <option value="CO4">CO4</option>
                            <option value="CO5">CO5</option>
                            <option value="CO6">CO6</option>
                        </select>
        </div>
        <div class="col-2">
            
        <select name="k12" id="" class="form-control k1 ml-2 register_form">
                            <option value="<?php echo $row1["k"] ; ?>"> <?php echo $row1["k"] ; ?></option>
                            <option value="K1">K1</option>
                            <option value="K2">K2</option>
                            <option value="K3">K3</option>
                            <option value="K4">K4</option>
                            <option value="K5">K5</option>
                            <option value="K6">K6</option>
                            
                        </select>
            </div>
    </div>  
<!-- or --> 
    <div class="row ">
        <div class="col-12">
            <center><label class="p-1 lh" >OR</label></center>
            
        </div>

        
    </div> 
<!-- 12(b) -->  
    <div class="row ">
        <div class="col-8">
            <label class="p-1 lh" ><small>&nbsp; &nbsp;(b) </small></label>
            <div id="ta54" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'he12b','qi14')"   onkeyup="jerin(this.innerHTML,'he12b','qi14','ta54')" onkeydown="jerin(this.innerHTML,'he12b','qi14','ta54')" ><?php 
    echo $row1["b"] ; ?></div>
            <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="qob12" onfocus="jerin(this.value,'he12b')" onkeyup="jerin(this.value,'he12b' );enter(event,'qi14')"  id="qi14"><?php 
    echo $row1["b"] ; ?></textarea>
            <div class="container-fluid cor fixed-top p-1 top1"  >
                <div class="row">
                <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-2">Qno:12(b)</h5> <p class="text-light hp p-2 mx-4" id="he12b"></p></div>
                </div>
            </div>
        </div>

        <div class="col-2">
        
       
        <select name="qoc12" id=""  class="form-control k  ml-2 register_form jer" >
                            <option value="<?php echo $row1["c"] ; ?>" selected disable hidden><?php echo $row1["c"] ; ?></option>
                            <option value="CO1">CO1</option>
                            <option value="CO2">CO2</option>
                            <option value="CO3">CO3</option>
                            <option value="CO4">CO4</option>
                            <option value="CO5">CO5</option>
                            <option value="CO6">CO6</option>
                        </select>
        </div>
        <div class="col-2">
            
            
        <select name="qod12" id="" class="form-control k ml-2 register_form">
                            <option value="<?php echo $row1["d"] ; ?>"> <?php echo $row1["d"] ; ?></option>
                            <option value="K1">K1</option>
                            <option value="K2">K2</option>
                            <option value="K3">K3</option>
                            <option value="K4">K4</option>
                            <option value="K5">K5</option>
                            <option value="K6">K6</option>
                            
                        </select>
            </div>
    </div>              
               
                
            </div>
        </div>
       
        
    </div>
     <!-- Question section C -->
     <div class="container bg-primary mt-4 di">
        <div class="card ">
            <div class="card-body bg-light ">
                <!-- section details -->
                <div class="row ">
                    <div class="col-8">
                    <center><label class="p-1 lh1 " >Section - C </label></center>
                        
                    </div>
            
                    <div class="col-2">
                        <label class="p-1 lh2 " >Course <br> Outcome </label>
                        
                    </div>
                    <div class="col-2">
                        <label class="p-1 lh2 " >Bloom's <br> K-Level </label>
                        
                    </div>
                </div>  
    <!-- Question details -->
    <div class="row mt-4">
        <div class="col-8">
        <p>
            <span class="lh2 mx-3"> Answer All The Questions    </span><span class="lh2">2x10=20</span>
        </p>
            
        </div>

        <div class="col-2">
            
            
        </div>
        <div class="col-2">
           
            
        </div>
    </div
    <!-- Question 13 -->
    <!-- 13(a) -->
        <div class="row ">
            <div class="col-8">
                <label class="p-1 lh" >13.<br><small>&nbsp; &nbsp;(a) </small></label>
                <div id="ta55" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'he13','qi15')"   onkeyup="jerin(this.innerHTML,'he13','qi15','ta55')" onkeydown="jerin(this.innerHTML,'he13','qi15','ta55')" ><?php 
    $row1=$data->fetch_assoc();
    
    
    echo $row1["a"] ; ?></div>
                <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="qoa13" onfocus="jerin(this.value,'he13')" onkeyup="jerin(this.value,'he13');enter(event,'qi15')" id="qi15"><?php 
    
    echo $row1["a"] ; ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-2">Qno:13(a)</h5> <p class="text-light hp p-2 mx-4" id="he13"></p></div>
                    </div>
                </div>
            </div>
    
            <div class="col-2">
            
            <select name="c13" id=""  class="form-control k1  ml-2 register_form jer" >
                            <option value="<?php echo $row1["c1"] ; ?>" selected disable hidden><?php echo $row1["c1"] ; ?></option>
                            <option value="CO1">CO1</option>
                            <option value="CO2">CO2</option>
                            <option value="CO3">CO3</option>
                            <option value="CO4">CO4</option>
                            <option value="CO5">CO5</option>
                            <option value="CO6">CO6</option>
                        </select>
            </div>
            <div class="col-2">
                
            <select name="k13" id="" class="form-control k1 ml-2 register_form">
                            <option value="<?php echo $row1["k"] ; ?>"> <?php echo $row1["k"] ; ?></option>
                            <option value="K1">K1</option>
                            <option value="K2">K2</option>
                            <option value="K3">K3</option>
                            <option value="K4">K4</option>
                            <option value="K5">K5</option>
                            <option value="K6">K6</option>
                            
                        </select>
                </div>
        </div>  
    <!-- or --> 
        <div class="row ">
            <div class="col-12">
                <center><label class="p-1 lh" >OR</label></center>
                
            </div>
    
            
        </div> 
    <!-- 13(b) -->  
        <div class="row ">
            <div class="col-8">
                <label class="p-1 lh" ><small>&nbsp; &nbsp;(b) </small></label>
                <div id="ta56" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'he13b','qi16')"   onkeyup="jerin(this.innerHTML,'he13b','qi16','ta56')" onkeydown="jerin(this.innerHTML,'he13b','qi16','ta56')" ><?php 
    echo $row1["b"] ; ?></div>
                <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="qob13" onfocus="jerin(this.value,'he13b')" onkeyup="jerin(this.value,'he13b');enter(event,'qi16')"  id="qi16"><?php 
    echo $row1["b"] ; ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-2">Qno:13(b)</h5> <p class="text-light hp p-2 mx-4" id="he13b"></p></div>
                    </div>
                </div>
            </div>
    
            <div class="col-2">
            
            
            <select name="qoc13" id=""  class="form-control k  ml-2 register_form jer" >
                            <option value="<?php echo $row1["c"] ; ?>" selected disable hidden><?php echo $row1["c"] ; ?></option>
                            <option value="CO1">CO1</option>
                            <option value="CO2">CO2</option>
                            <option value="CO3">CO3</option>
                            <option value="CO4">CO4</option>
                            <option value="CO5">CO5</option>
                            <option value="CO6">CO6</option>
                        </select>
            </div>
            <div class="col-2">
                
                
            <select name="qod13" id="" class="form-control k ml-2 register_form">
                            <option value="<?php echo $row1["d"] ; ?>"> <?php echo $row1["d"] ; ?></option>
                            <option value="K1">K1</option>
                            <option value="K2">K2</option>
                            <option value="K3">K3</option>
                            <option value="K4">K4</option>
                            <option value="K5">K5</option>
                            <option value="K6">K6</option>
                            
                        </select>
                </div>
        </div> 
    <!-- Question 14 -->
    <!-- 14(a) -->
    <div class="row ">
        <div class="col-8">
            <label class="p-1 lh" >14.<br><small>&nbsp; &nbsp;(a) </small></label>
            <div id="ta57" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'he14','qi17')"   onkeyup="jerin(this.innerHTML,'he14','qi17','ta57')" onkeydown="jerin(this.innerHTML,'he14','qi17','ta57')" ><?php 
    $row1=$data->fetch_assoc();
    
    
    echo $row1["a"] ; ?></div>
            <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="qoa14" onfocus="jerin(this.value,'he14')" onkeyup="jerin(this.value,'he14');enter(event,'qi17')"  id="qi17"><?php 
    
    echo $row1["a"] ; ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-2">Qno:14(a)</h5> <p class="text-light hp p-2 mx-4" id="he14"></p></div>
                    </div>
                </div>
        </div>

        <div class="col-2">
        
        <select name="c14" id=""  class="form-control k1  ml-2 register_form jer" >
                            <option value="<?php echo $row1["c1"] ; ?>" selected disable hidden><?php echo $row1["c1"] ; ?></option>
                            <option value="CO1">CO1</option>
                            <option value="CO2">CO2</option>
                            <option value="CO3">CO3</option>
                            <option value="CO4">CO4</option>
                            <option value="CO5">CO5</option>
                            <option value="CO6">CO6</option>
                        </select>
        </div>
        <div class="col-2">
            
        <select name="k14" id="" class="form-control k1 ml-2 register_form">
                            <option value="<?php echo $row1["k"] ; ?>"> <?php echo $row1["k"] ; ?></option>
                            <option value="K1">K1</option>
                            <option value="K2">K2</option>
                            <option value="K3">K3</option>
                            <option value="K4">K4</option>
                            <option value="K5">K5</option>
                            <option value="K6">K6</option>
                            
                        </select>
            </div>
    </div>  
<!-- or --> 
    <div class="row ">
        <div class="col-12">
            <center><label class="p-1 lh" >OR</label></center>
            
        </div>

        
    </div> 
<!-- 14(b) -->  
    <div class="row ">
        <div class="col-8">
            <label class="p-1 lh" ><small>&nbsp; &nbsp;(b) </small></label>
            <div id="ta58" contenteditable="true" class="form-control ta mx-2 jer"  onfocus="jerin(this.innerHTML,'he14b','qi18')"   onkeyup="jerin(this.innerHTML,'he14b','qi18','ta58')" onkeydown="jerin(this.innerHTML,'he14b','qi18','ta58')" ><?php 
    echo $row1["b"] ; ?></div>
            <textarea hidden  rows="1" class="form-control  mx-2 register_form jer" name="qob14" onfocus="jerin(this.value,'he14b')" onkeyup="jerin(this.value,'he14b');enter(event,'qi18')"  id="qi18"><?php 
     
    echo $row1["b"] ; ?></textarea>
                <div class="container-fluid cor fixed-top p-1 top1"  >
                    <div class="row">
                    <div class="col-2"> <div class="img bg-light"><img src="aac1.png" alt="logo" class="card-img img"></div></div>
                                <div class="col-10"><h5 class="text-light mx-2">Qno:14(b)</h5> <p class="text-light hp p-2 mx-4" id="he14b"></p></div>
                    </div>
                </div>
        </div>

        <div class="col-2">
        
        
    <select name="qoc14" id=""  class="form-control k  ml-2 register_form jer" >
                            <option value="<?php echo $row1["c"] ; ?>" selected disable hidden><?php echo $row1["c"] ; ?></option>
                            <option value="CO1">CO1</option>
                            <option value="CO2">CO2</option>
                            <option value="CO3">CO3</option>
                            <option value="CO4">CO4</option>
                            <option value="CO5">CO5</option>
                            <option value="CO6">CO6</option>
                        </select>
        </div>
        <div class="col-2">
            
           
        
     <select name="qod14" id="" class="form-control k ml-2 register_form">
                            <option value="<?php echo $row1["d"] ; ?>"> <?php echo $row1["d"] ; ?></option>
                            <option value="K1">K1</option>
                            <option value="K2">K2</option>
                            <option value="K3">K3</option>
                            <option value="K4">K4</option>
                            <option value="K5">K5</option>
                            <option value="K6">K6</option>
                            
                        </select>
            </div>
    </div>              
               
                
            </div>
        </div>
       
      
    </div>
    <div class="container"><center><input  type="submit" class="form-control my-5 bg-primary text-light te" value="Submit" ></center></div> 
   <?php
   $con->close();
   ?> 
   <input type="text" value="<?php echo $una?>" name="uid" hidden>
        <input type="text" value="<?php echo $ups?>" name="ups" hidden>
</form>
<form method="post" action="index1.php" id="zz1" >
        <input type="text" value="<?php echo $una?>" name="uid" hidden>
        <input type="text" value="<?php echo $ups?>" name="ups" hidden>
        
    </form>
    <form method="post" action="search.php" id="zz2" >
        <input type="text" value="<?php echo $una?>" name="uid" hidden>
        <input type="text" value="<?php echo $ups?>" name="ups" hidden>
        
    </form>
    <script src="js/bootstrap.bundle.js"></script>
    <script>
          function jerin(number,te,qi,ev)
        {
            je1=number;
           document.getElementById(te).innerHTML=je1;
           document.getElementById(qi).value=je1;
        
          
    let a=document.getElementById(ev).innerHTML;
    let k=a.match('font-size:');   
    
    if(k.length>0) {
    a=a.replaceAll("<div>","<br>");
        a=a.replaceAll("</div>","");
        a=a.replaceAll("<o:p>","");
        a=a.replaceAll("</o:p>",""); 
        a=a.replaceAll('background-color:',"background - color:");
        a=a.replaceAll('"color:','color:"block;"');
        a=a.replaceAll('font-size:',"font - size");
        a=a.replaceAll('font-family:',"font - family:");
        a=a.replaceAll('rgb',"`rgb");


        
        
       
        document.getElementById(ev).innerHTML=a;
       }

    
           
        }
        
        function jj()
    {
       
       let a=0,b=0;
       let i=<?php echo $i; ?>;
       let j=<?php echo $i; ?>;
       const arr=[];
       const arr1=[]; 
       var x=document.getElementById("ss1").value;
       while(a<i)
       {
        let j1="ia"+a;
        arr[a]=document.getElementById(j1).innerHTML;
        
       a=a+1;

       }
       while(b<j)
       {
        let j1="ib"+b;
        arr1[b]=document.getElementById(j1).innerHTML;
        
       b=b+1;

       }
       
       let h=arr1.indexOf(x)
       let z=0;
       
        document.getElementById('ss2').value=arr[h];
       
       
       
       
    
    }
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
