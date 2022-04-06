<html>
<head>
    <title>Title</title>
    <style type="text/css">
        body{align:center};
    </style>

</head>
<body>
<h2 align="center">
<form name="form1" action="CL.php" method="get" >
    الرجاء إدخال الرقم الأول: <input type = "text" name = "v1"> <br>
         الرجاء إدخال الرقم الثاني: <input type = "text" name = "v2"> <br>
    <select name="select1">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
         <input name = "sub" type = "submit" value = "إرسال">

</form>
</h2>


<!-- 

<button class="col-1 btn btn-warning rounded-circle" name="add" value="+">+</button>   
                            <button class="col-1 btn btn-dark rounded-circle" name="sub" value="-">-</button>   
                            <button class="col-1 btn btn-warning rounded-circle" name="mult" value="*">x</button>   
                            <button class="col-1 btn btn-dark rounded-circle" name="div" value="/">/</button>   
                            <button class="col-1 btn btn-warning rounded-circle" name="pow" value="**">^</button>   
                            <button class="col-1 btn btn-dark rounded-circle" name="per" value="%">%</button>    -->

                            
<?php
if(isset($_GET["sub"]))
{
    $v1 = $_GET["v1"];
    $v2 = $_GET["v2"];
    $con = 0;
    switch ($_GET["select1"]) {
        case "+":
            $con = $v1 + $v2;
            break;
        case "-":
            $con = $v1 - $v2;
            break;
        case "*":
            $con = $v1 * $v2;
            break;
        case "/":
            $con = $v1 / $v2;
            break;
    }
    echo <<<STR
<script>
alert($con);
</script>
STR;
}
?>
</body>
</html>