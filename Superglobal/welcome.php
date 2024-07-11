<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
</head>

<body>
    <div class="loti" style="text-align: center;">
        <div class="lot" style="position: absolute; left:35% ; top:300px">
            <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
            <dotlottie-player src="https://lottie.host/9f599ed3-4aa0-4903-b046-b7a6f66ebf11/OaWaw4fQYe.json" background="#FFFFFF" speed="1" style="width: 600px; height: 600px" direction="1" playMode="normal" loop autoplay></dotlottie-player>
        </div>
        <br>
        <br>
        <br>
        <br>
        <h1>Welcome</h1>

        <h2>
            MyEmail :- <?php echo $_REQUEST["email"]      ?>
            <br>
            <br>

            Mypassword : - <?php echo $_REQUEST["password"]      ?>


        </h2>


    </div>






</body>

</html>