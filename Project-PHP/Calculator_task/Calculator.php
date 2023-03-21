<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    
    <script src='main.js'></script>
</head>
<body>
    <?php  
        //add() function with two parameter  
        function add($x,$y)    
        {  
            $sum=$x+$y;  
            echo "<h1>Sum = $sum <br><br></h1>";  
        }  
        //sub() function with two parameter  
        function sub($x,$y)    
        {  
        $sub=$x-$y;  
        echo "<h1>Diff = $sub <br><br></h1>";  
        }  

         //multi() function with two parameter  
         function multi($x,$y)    
         {  
         $multi=$x*$y;  
         echo "<h1>Multiplcation = $multi <br><br></h1>";  
         }  
         
         
         //multi() function with two parameter  
         function divi($x,$y)    
         {  
         $divi=$x/$y;  
         echo "<h1>DIVISION = $divi <br><br></h1>                   ";  
         }  

        //call function, get  two argument through input box and click on add or sub button  
        if(isset($_POST['add']))  
        {  
            //call add() function  
            add($_POST['first'],$_POST['second']);  
        } 

        if(isset($_POST['sub']))  
        {  
            //call sub() function  
            sub($_POST['first'],$_POST['second']);  
        }  

        if(isset($_POST['multi']))  
        {  
            //call multi() function  
            multi($_POST['first'],$_POST['second']);  
        }  
        if(isset($_POST['divi']))  
        {  
            //call divi() function  
            divi($_POST['first'],$_POST['second']);  
        }  
     
?>  
<div class="mb-3">
    <form method="post">
        <br>  
    <label for="fnam">Enter first value: </label>
    <input type="number"  class="form-control" name="first" placeholder="First value"><br><br>

    <label for="lnum">Enter Second value: </label>
    <input type="number" class="form-control"  name="second" placeholder="Second Value"><br> 
    
        <input type="submit" class="btn btn-primary btn-sm" name="add" id="country" value="ADDITION"/>  
        <input type="submit"  class="btn btn-primary btn-sm"  name="sub" id="country" value="SUBTRACTION"/> 
        <input type="submit"  class="btn btn-primary btn-sm"  name="multi" id="country" value="MULTIPLICATION"/> 
        <input type="submit"  class="btn btn-primary btn-sm"  name="divi" id="country" value="DIVISION"/> 
        
        </form> 
    </div>  
        
</body>
</html>