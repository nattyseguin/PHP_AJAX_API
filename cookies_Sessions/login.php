
    <?php

$cookie_name = "user_login";
 if (isset ($_REQUEST["remember"]) and isset($_REQUEST["usrname"])) {
     if ($_REQUEST["remember"]=="on") {
        $cookie_value = $_REQUEST["usrname"];
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
     }
 }
 ?>
 <html>
     <body>
         <?php
         echo var_dump($_REQUEST);// asi no hace falta ponerle metodo post o get
         ?>
     </body>
 </html>