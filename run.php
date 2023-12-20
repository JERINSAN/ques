
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
        
        
    </style>
</head>
<?php $una=$_POST['uid'];
$ups=$_POST['ups'];  ?>
<body >
<form method="post" action="sedit.php" id="zz2" >
        <input type="text" value="<?php echo $una?>" name="uid" hidden>
        <input type="text" value="<?php echo $ups?>" name="ups" hidden>
        
    </form>
    <form method="post" action="search.php" id="zz1" >
        <input type="text" value="<?php echo $una?>" name="uid" hidden>
        <input type="text" value="<?php echo $ups?>" name="ups" hidden>
        
    </form>
<?php
//connection
include 'conn.php';
$con=con();


$s='q';
$s1='c';
$s2='k';
$s3='qoa';
$s4='qob';
$s5='qoc';
$s6='qod';
//get details
$a1=$_POST['cl'];
$a2=$_POST['sem'];
$a3=$_POST['sub'];
$a4=$_POST['te'];
$a5=$_POST['da'];
$a6=$_POST['ti'];
$a7=$_POST['cod'];
$a8=$_POST['mar'];

$sql="select cod from main where cod='$a7'";
$data=$con->query($sql);
$row1=$data->fetch_assoc();


if(!$row1==NULL)
{
    echo '
    <div class=" container  di shadow-lg py-5 px-4 bg-body-tertiary rounded">
     <center>  <h1 class=" text-danger">The Question &nbsp;'. $a7.'&nbsp; is Already Uploaded</h1></center> 
     <div class="row my-2">
        <div class="col-4"> <input type="button" class="btn btn-primary b" value="View" onclick="view1()"> </div>
        <div class="col-4"> <input type="button" class="btn btn-primary b" value="Edit" onclick="edit1()"> </div>
        
        <script>
           
            function edit1()
            {
                document.getElementById("zz2").submit();
            }
            function view1()
            {
                document.getElementById("zz1").submit();
            }
        </script>
     </div>
</div>'
;
for($i=1;$i<15;$i++)
{
if($i<11)
{
    $c=$s.$i;
    $c1=$s1.$i;
    $c2=$s2.$i;
    $c3=$s3.$i;
    $c4=$s4.$i;
    $c5=$s5.$i;
    $c6=$s6.$i;
    $n=$_POST[$c];
    $n1=$_POST[$c1];
    $n2=$_POST[$c2];
    $n3=$_POST[$c3];
    $n4=$_POST[$c4];
    $n5=$_POST[$c5];
    $n6=$_POST[$c6];
    

$sql2="INSERT INTO rst (sno, q, c1, k, a, b, c, d, sc) VALUES ('$i', '$n', '$n1', '$n2', '$n3', '$n4', '$n5', '$n6', '$a7')";
$con->query($sql2);

} 
else
{
    $c1=$s1.$i;
    $c2=$s2.$i;
    $c3=$s3.$i;
    $c4=$s4.$i;
    $c5=$s5.$i;
    $c6=$s6.$i;
    $n1=$_POST[$c1];
    $n2=$_POST[$c2];
    $n3=$_POST[$c3];
    $n4=$_POST[$c4];
    $n5=$_POST[$c5];
    $n6=$_POST[$c6];
    
    $sql2="INSERT INTO rst (sno, q, c1, k, a, b, c, d, sc) VALUES ('$i', 'NULL', '$n1', '$n2', '$n3', '$n4', '$n5', '$n6', '$a7')";
    $con->query($sql2);
}
}
    die();
}

//sql Query for create a table
$sql1="create table $a7 (sno int(10),q mediumtext,c1 text,k text,a mediumtext,b mediumtext,c mediumtext,d mediumtext,sc varchar(20),PRIMARY KEY(sno))";
//execute the Query

if($con->query($sql1)===FALSE)

{
    
    echo '<form  method="post">
    <div class=" container  di shadow-lg py-5 px-4 bg-body-tertiary rounded">
     <center>  <h1 class=" text-danger">The Question &nbsp;'. $a7.'&nbsp; is Already Uploaded</h1></center> 
     <div class="row my-2">
        <div class="col-4"> <input type="button" class="btn btn-primary b" value="View" onclick="view1()"> </div>
        <div class="col-4"> <input type="button" class="btn btn-primary b" value="Edit" onclick="edit1()"> </div>
        
        <script>
           
            function edit1()
            {
                document.getElementById("zz2").submit();
            }
            function view1()
            {
                document.getElementById("zz1").submit();
            }
        </script>
     </div>
</div>
</form>';

}

else
{

    $sql3="DELETE FROM `rst` WHERE sc='$a7'";
    $con->query($sql3);

}


//declaration part



//loop for inserting a questions
for($i=1;$i<15;$i++)
{


    if($i<11){
//string function part    
    $c=$s.$i;
    $c1=$s1.$i;
    $c2=$s2.$i;
    $c3=$s3.$i;
    $c4=$s4.$i;
    $c5=$s5.$i;
    $c6=$s6.$i;
    $n=$_POST[$c];
    $n1=$_POST[$c1];
    $n2=$_POST[$c2];
    $n3=$_POST[$c3];
    $n4=$_POST[$c4];
    $n5=$_POST[$c5];
    $n6=$_POST[$c6];


//Query for inserting a questions`

   

    $sql="INSERT INTO $a7 (sno, q, c1, k, a, b, c, d, sc) VALUES ('$i', '$n', '$n1', '$n2', '$n3', '$n4', '$n5', '$n6', '$a7')";

//Query execution
    $con->query($sql);
    
     
}
else
{
    
    $c1=$s1.$i;
    $c2=$s2.$i;
    $c3=$s3.$i;
    $c4=$s4.$i;
    $c5=$s5.$i;
    $c6=$s6.$i;
    $n1=$_POST[$c1];
    $n2=$_POST[$c2];
    $n3=$_POST[$c3];
    $n4=$_POST[$c4];
    $n5=$_POST[$c5];
    $n6=$_POST[$c6];
   
    
    $sql="INSERT INTO $a7 (sno, q, c1, k, a, b, c, d, sc) VALUES ('$i', 'NULL', '$n1', '$n2', '$n3', '$n4', '$n5', '$n6', '$a7')";

    //Query execution
        if($con->query($sql)===FALSE)
        {   
             $sql2="INSERT INTO rst (sno, q, c1, k, a, b, c, d, sc) VALUES ('$i', 'NULL', '$n1', '$n2', '$n3', '$n', '$n5', '$n6', '$a7')";
        $con->query($sql2);
       
            
        }
       
           
}

}
//Query for inserting a main details

$arr1=str_split($a5,4);
$d=$arr1[2].$arr1[1].$arr1[0];

$sql1="INSERT INTO `main` (`cla`, `sem`, `sub`, `tes`, `dat`, `tim`, `cod`, `mar`) VALUES ('$a1', '$a2', '$a3', '$a4', '$d', '$a6', '$a7', '$a8')";


//Query execution
if($con->query($sql1)===TRUE)
    {
        
   
echo '<form  method="post">
<div class=" container  di shadow-lg py-5 px-4 bg-body-tertiary rounded">
 <center>  <h1 class=" text-primary">The Question &nbsp;'. $a7.'&nbsp; Uploaded Successfuly</h1></center> 
 <div class="row my-2">
    <div class="col-4"> <input type="button" class="btn btn-primary b" value="View" onclick="view1()"> </div>
    <script>
       
        function view1()
        {
            document.getElementById("zz1").submit();
        }
    </script>
 </div>
</div>
</form>';
    }
 
$con->close();

?>
<script src="js/bootstrap.min.js"></script>
</body>
</html>