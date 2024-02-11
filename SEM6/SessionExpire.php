<?php
session_start();
if (isset($_POST['ok']) ) {
                echo time() ."   ". $_SESSION["tm"] + 10;
                if(time() > $_SESSION["tm"] + 10){
                    echo " Session expired <br>";
                    echo time() ."   ". $_SESSION["tm"] + 10;
                    unset($_SESSION['counter']);
                }
            }