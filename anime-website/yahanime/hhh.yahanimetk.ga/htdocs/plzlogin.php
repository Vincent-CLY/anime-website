<?php
    header("refresh: 2.85; url=nowredirecting.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-image: url('https://i.pinimg.com/originals/05/96/30/05963033e22f4e6cc4532400a565ca8d.gif');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
           
        }

        div {
            width: 100%;
            overflow: hidden;
            max-width: 5000px;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            left: 0;
        }

        h1 {
            color: purple;
            background-color: coral;
            border-radius: 8px;
            border: 5px;
            left: 0;
            display: flex;
            padding: 10px;
            text-align: center;
            font-size: 8vh;
            animation: animate 3s ease-out; 
        }

        @keyframes animate {
            from {
                margin-left: -2000px;
            }
            to {
                margin-left: 0%;
            }
        }
    </style>
</head>
<body>
    <div>
        <h1>Please Login!</h1>
    </div>
</body>
</html>