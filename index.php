<?php

include ('detect.php');
include ('init.php');


if ($country !== "US") {
    header("location: $redLink");
    exit();
}
else {
    header("location: $myLink");
    exit();
}
