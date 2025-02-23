<?php
if(file_exists("autoload.php")){
    require_once "autoload.php";
}else{
    echo "autoload.php not found";
}

$result ='';
if($_SERVER['REQUEST_METHOD']=="POST"){
    
    
    $amounts = $_POST['amount'];
    $selectp = $_POST['select'];
    
    $result = concase($selectp, $amounts);
    
}

?>

<!DOCTYPE html>
<html>
<title>Currency Converter</title>
<link rel="stylesheet" href="style.css">
<body>
<div class="main">
    
<div class="mid">
<h2>Currency Converter</h2>
<form method="POST" action="">
    
    <input type="number" name="amount" placeholder="Amount">
    
    <select name="select">
        <option>Select</option>
        <option>USD</option>
        <option>EURO</option>
        <option>GBP</option>
        
        
        
    </select>
    
    <button type="submit">Convert</button>
    
    
</form>

    <h2 style="color: green;"><?php echo  $result;?></h2>
</div>
</div>

<style>
    
    
</style>

</body>
</html>