<?php 
    require 'date.php';
    Date::processInput();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Timestamp Microservice</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href= "assets/styles.css" >
</head>
<body>
    <div>
        <h1>Timestamp Microservice</h1>
        <p>
            Unix time is a standard for measuring time used in many operating systems. 
            It is defined as the number of seconds since the <time>1st January 1970</time>
            and can represent datetimes up until the <time>19th January 2038</time>.
        </p> 
        <p>You can enter either a unix timestamp or a date query such as '3 January 2000' or 'next week'.</p>
        
        <form id="form" action="index.php" method="GET">
            <input type="text" name="input" id="input" placeholder="Enter a date or unix timestamp"> 
            <input type="submit" id="submit" class="submit-btn" value="Convert"> 
        </form>

        <?php if (Date::$date != ''): ?>
            <p><strong>Date:</strong>
                <?php echo Date::$date ?>
            </p>
        <?php endif ?>

        <?php if (Date::$timestamp != ''): ?>
            <p><strong>Timestamp:</strong>
                <?php echo Date::$timestamp ?>
            </p>
        <?php endif ?>

        <?php if (Date::$message != ''): ?>
        <p class="error-msg">
            <?php echo Date::$message ?>
        </p>
        <?php endif ?>
    </div>
</body>
</html>