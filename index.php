<?php 

require 'date.php';
    
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Timestamp Microservice</title>
    <link rel="stylesheet" type="text/css" href= "assets/styles.css" >
</head>
<body>
    <div>
        <h1>Timestamp Microservice</h1>
        <p>Unix time is standard for measuring time used in many operating systems. It is defined as a number of seconds since <time>Thursday 1 January, 1970</time>.</p> 
        <p>Enter a unix timestamp or a date in the format 'December 30 2001'.</p>
        

        <form id="form" action="index.php" method="GET">
            <input type="text" name="input" id="input" placeholder="Enter a date or unix timestamp"> 
            <input type="submit" id="submit" value="Convert"> 
        </form>

        <p>date:
        <?php echo $date ?>
        </p>
        <p>timestamp:
            <?php echo $timestamp ?>
        </p>
        <p>error:
            <?php echo $message ?>
        </p>
        <p>ts:
            <?php echo $ts ?>
        </p>
        <p>isNum:
            <?php echo $isNum ?>
        </p>
    </div>
</body>
</html>