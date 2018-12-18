<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $data['judul']; ?></title>
	<link rel="stylesheet" href="<?php echo BASEURL; ?>/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
  <a class="navbar-brand" href="<?php echo BASEURL; ?>">PHP MVC</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">

      <a class="nav-item nav-link <?php if($data['aktif']=='home') echo 'active'  ?>" href="<?php echo BASEURL; ?>">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link <?php if($data['aktif']=='mahasiswa') echo 'active'  ?>" href="<?php echo BASEURL ?>/mahasiswa">Mahasiswa</a>
      <a class="nav-item nav-link <?php if($data['aktif']=='about') echo 'active'  ?>" href="<?php echo BASEURL ?>/about">About</a>
    </div>
  </div>

  </div>
</nav>