<?php
header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Hotel Woodz</title>
</head>

<body>
    <?php include 'header/topnav.php' ?>
    <?php include 'header/navigation.php' ?>
    <?php include 'Banner/carousel.php' ?>
    <?php include 'About/aboutus.php' ?>
    <?php include 'Facility/facility.php' ?>
    <?php include 'Facility/FacilityDesc.php' ?>
    <?php include 'Room-Section/rooms.php' ?>
    <?php include 'reviews.php' ?>
    <?php include 'Footer/footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>