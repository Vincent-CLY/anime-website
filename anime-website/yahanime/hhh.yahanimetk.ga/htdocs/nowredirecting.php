<?php
    header("refresh: 6.7; url=https://login.yahanimetk.ga");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: consolas;
               
            }

            ::-webkit-scrollbar {
                display: none;
                
            }
            

            body {
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                background: #e76f51;
            }

            div.container {
                position: relative;
                
                -webkit-box-reflect: below 1px linear-gradient(transparent, #8f3a01);
            }

            div.container::before {
                content: "";
                position: absolute;
                top: 0;
                right: 0;
                width: 2px;
                height: 100%;
                background: #0b132b;
                animation: blinkCursor 0.8s steps(3) infinite;
            }

            @keyframes blinkCursor {
                0%, 75% {
                    opacity: 1;
                }
                76%, 100% {
                    opacity: 0;
                }
                
            }

            div.container h1 {
                position: relative;
                color: #0b132b;
                letter-spacing: 5px;
                font-size: 4em;
                text-transform: uppercase;
                overflow: hidden;
                white-space: nowrap;
                animation: typing 8s steps(21) infinite;
                
            }

            @keyframes typing {
                0%, 90%, 100% {
                    width: 0;
                }
                30%, 60% {
                    width: 853.7px;
                }
            }
            

        </style>
    </head>
    <body>
        <div>
            <img src="https://i.imgur.com/ekPDbbK.gif" width="200px" height: auto>
        </div>

        <div class="container">
            <h1>Now Redirecting . . .</h1>   
        </div>

        <div>
            <img src="https://i.imgur.com/4yR2KiA.gif" width="200px" height: auto>
        </div>
    </body>
</html>