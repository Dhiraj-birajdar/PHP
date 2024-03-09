<?php
function validate($name){
    if($name=="")
        return "please enter username";
    if(strlen($name)<3)
        return 'username is to short';
    if(strlen($name)>10)
        return 'username is to long';
    return 'user name is valid';
}
echo validate($_GET["name"]);