<?php
setcookie('user', $result[0]['name'], time() - 3600, "/");
header('Location:  / ');
