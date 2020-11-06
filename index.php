<?php

include ('detect.php');
include ('init.php');


if ($country !== "ES") {
    header("location: $redLink");
    exit();
}
else {
    header("location: $myLink");
    exit();
}
