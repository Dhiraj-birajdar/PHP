<?php

$mail = "<p>1abc@gmail.com";
if(filter_var($mail, FILTER_VALIDATE_EMAIL))
    echo "email is valid";
else
    echo "email is invalid";