<?php
$img = rand(1000, 100000) . "-" . $_FILES['img']['name'];
$img_loc = $_FILES['img']['tmp_name'];
$folder = "uploads/";
if (move_uploaded_file($img_loc, $folder . $img)) {
    echo "<script>alert('Upload Sukses!!!');</script>";
} else {
    echo "<script>alert('Upload Gagal');</script>";
}
?>