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
<body >

<?php $una=$_POST['uid'];
$ups=$_POST['ups']; 
 ?>
</form>
    <form method="post" action="search.php" id="zz1" >
        <input type="text" value="<?php echo $una?>" name="uid" hidden>
        <input type="text" value="<?php echo $ups?>" name="ups" hidden>
        
    </form>

<?php
//connection
include 'conn.php';
$con=con();



//get details
$a1=$_POST['cl'];
$a2=$_POST['sem'];
$a3=$_POST['sub'];
$a4=$_POST['te'];
$a5=$_POST['da'];
$a6=$_POST['ti'];
$a7=$_POST['cod'];
$a8=$_POST['mar'];
$id=$_POST['ccod'];



$sql3="alter table $id rename $a7";
$sql4="update main set cod='$a7' where cod='$id'";
$con->query($sql4);
if($con->query($sql3)===FALSE)
{
echo "error".$con->error;
}

//sql Query for create a table



//execute the Query

//declaration part
$s='q';
$s1='c';
$s2='k';
$s3='qoa';
$s4='qob';
$s5='qoc';
$s6='qod';


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
   


   

    
    
    

    


//Query for inserting a questions

    
    $sql="UPDATE $a7 SET `sno`='$i',`q`='$n',`c1`='$n1',`k`='$n2',`a`='$n3',`b`='$n4',`c`='$n5',`d`='$n6',`sc`='$a7' WHERE sno='$i'";

//Query execution
    if($con->query($sql)===FALSE)
    {
        die("Error".$sql."br".$con->error);
    }
     
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

    
    
    $sql="UPDATE $a7 SET `sno`='$i',`q`='NULL',`c1`='$n1',`k`='$n2',`a`='$n3',`b`='$n4',`c`='$n5',`d`='$n6',`sc`='$a7' WHERE sno='$i'";
    //Query execution
        if($con->query($sql)===FALSE)
        {
            die("Error".$sql."br".$con->error);
        }
       
           
}

}
//Query for inserting a main details 
$arr1=str_split($a5,4);
$d=$arr1[2].$arr1[1].$arr1[0];
$sql1="UPDATE `main` SET `cla`='$a1',`sem`='$a2',`sub`='$a3',`tes`='$a4',`dat`='$d',`tim`='$a6',`cod`='$a7',`mar`='$a8' WHERE cod='$a7'";

//Query execution
if($con->query($sql1)===FALSE)
    {
        die("Error".$sql."br".$con->error);
    }
    echo '<form  method="post">
    <div class=" container  di shadow-lg py-5 px-4 bg-body-tertiary rounded">
     <center>  <h1 class=" text-primary">The Question &nbsp;'. $a7.'&nbsp; Edited Successfuly</h1></center> 
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
    
$con->close();

?>
<script src="js/bootstrap.min.js"></script>
</body>
</html>