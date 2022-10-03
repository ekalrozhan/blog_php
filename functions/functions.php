<?php
function uploadImage()
{
    $imagename = $_FILES['image']['name'];
    $imagetmp = $_FILES['image']['tmp_name'];

    $allowed = array('jpeg', 'png', 'jpg');

    $ext = pathinfo($imagename, PATHINFO_EXTENSION);

    if (in_array($ext, $allowed)) {
        move_uploaded_file($imagename, "images/" . $imagename);
    } else {
        echo "Only png, jpg, and jpeg image format are allowed!";
    }

    return $imagename;
}
