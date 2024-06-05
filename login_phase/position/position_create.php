<?php
    require_once('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="position_create.css">
    <script src="https://kit.fontawesome.com/256a0a77a7.js" crossorigin="anonymous"></script>
    <title>ADD POSITION| CMI</title>
</head>

<style>
    input{
        padding-left:10px;
    }

    i{
        font-size:15px;
        
    }

    a{
        text-decoration:none;
    }
    .pindutan{
        display:flex;
    }


</style>

<body>
    <div class="registration--form"> 
        <h1 class="title">ADD POSITION</h1>
        <form action="config.php" method="post">
            <div class="mainuser-info">
                <div class="userinput-box">
                    <label class="details">POSITION TITLE</label>
                    <input class="input" type="text" name="position_title" maxlength="50"  placeholder="Enter Position" >
                </div>
                <div class="userinput-box">
                    <label class="details">RATES PER HOUR</label>
                    <input class="input" type="text" name="position_rate" maxlength="50"   placeholder="Price per Hour" >
                </div>
        </form>
        <a href="../position/position.php"><button class="balik"><i class="fa-solid fa-chevron-left"></i>
 Back</button></a>

        <div class="pindutan">
        <a><button type='submit' method='post'>
                    SUBMIT
                    <div class="arrow-wrapper">
                        <div class="arrow"></div>
                    </div>
                </button></a>
            </div>
        </div>
    </div>
</div>


     
</body>
</html>