

<?php session_start();
    date_default_timezone_set('Asia/Dhaka');?>

<?php
include "connection/connection.php";
include "functions/user_login_process.php";
include "functions/utilities.php";

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="AjvDzo9guXMXJWBVx1m6T83Wnr7MTgRfVFd0pi0f">
  <title>BD Job War</title>
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">


  <script src="https://kit.fontawesome.com/10ec6aaa98.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://bdjobwar.com/frontEnd-assets/css/style.css" rel="stylesheet">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;1,200;1,300;1,400;1,600&display=swap" rel="stylesheet">
  <link href="https://fonts.maateen.me/adorsho-lipi/font.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/venobox/2.0.4/venobox.css" integrity="sha512-FklhNXzHcdzrbf6AqtmZo3hOse+bIr/ofmEpzZmNWftOTsj8qWasNgJN6Y8d71grmcZZZa1bbHbXFbTTPCa3pA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    {
      font-family: 'AdorshoLipi', Arial, sans-serif !important;
      font-weight: 600;
    }

    .videos {
      list-style: none;
    }

    .videos li {
      border: 2px solid #161E31;
      color: #161E31;

      padding: 5px;
      margin: 10px 0px;
      transition: .2s ease-in;

    }

    .videos li a {
      font-size: 14px;
    }

    .videos li:hover {
      background-color: #161E31;
      color: #fff;
    }

    /* Extra small devices (phones, 600px and down) */
    @media only screen and (max-width: 600px) {
      .video {
        width: 250px;
      }
    }

    /* Small devices (portrait tablets and large phones, 600px and up) */
    @media only screen and (min-width: 600px) {
      .video {
        width: 700px;
        height: 315px;
      }
    }
  </style>
</head>

<body>