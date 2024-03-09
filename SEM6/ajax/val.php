<html>
    <head>
        <script type="text/javascript">
            var xmlHttp = false;
            function validate(name){
                if(window.XMLHttpRequest)
                    xmlHttp = new XMLHttpRequest();
                else if(window.ActiveXObject)
                    xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
                if(xmlHttp==null){
                    alert("Browser does not support http request");
                    return;
                }
                //xmlHttp.abort(); // alert(name);
                xmlHttp.open("GET","validate.php?name="+name, true);
                xmlHttp.onreadystatechange = stateChanged;
                xmlHttp.send(null);
            }
            function stateChanged(){
                // alert(xmlHttp.readyState);
                if(xmlHttp.readyState==4)
                    document.getElementById("res").innerHTML= xmlHttp.responseText;
            }
        </script>
    </head>
    <body>
        <form>
            Username: <input type="text" name="name" onkeyup="validate(this.value)" />
            <div id="res">div</div>
        </form>
    </body>
</html>