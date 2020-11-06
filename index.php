<?php

include ('detect.php');
include ('init.php');


if ($country !== "MA") {
    header("location: $redLink");
    exit();
}
else {
    header("location: $myLink");
    exit();
}
