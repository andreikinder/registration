<?php
setcookie('user', serialize($result[0]), time() - 3600, "/");
header('Location:  / ');
