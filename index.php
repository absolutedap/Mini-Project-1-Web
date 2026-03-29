<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "db.php";

$profile = fetchOneRow("SELECT * FROM profile LIMIT 1");
$experiences = fetchAllRows("SELECT * FROM experiences ORDER BY id ASC");
$skills = fetchAllRows("SELECT * FROM skills ORDER BY id ASC");
$certificates = fetchAllRows("SELECT * FROM certificates ORDER BY id ASC");

?>

<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Portfolio</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">

</head>

<body>

<section class="hero text-center">
<div class="container">

<img src="image/profile.jpeg" class="profile-img">

<h1 class="fw-bold">
Halo, Saya <?= htmlspecialchars($profile['name'] ?? 'Daffa') ?>
</h1>

<p class="text-light">
<?= htmlspecialchars($profile['description'] ?? 'Web Developer Enthusiast - Masih Belajar Bang') ?>
</p>

</div>
</section>

<section class="section">
<div class="container">

<h2 class="section-title">Experience</h2>

<div class="row">
<?php foreach($experiences as $exp): ?>

<div class="col-md-4 mb-4">
<div class="portfolio-card p-3">

<h5 class="fw-bold">
<?= htmlspecialchars($exp['text'] ?? 'Experience') ?>
</h5>

<p class="text-light">
<?= htmlspecialchars($exp['description'] ?? 'Belum ada deskripsi') ?>
</p>

</div>
</div>

<?php endforeach; ?>
</div>

</div>
</section>

<section style="padding: 80px 0; background: #0f0c29; border-top: 1px solid rgba(168,85,247,0.15); border-bottom: 1px solid rgba(168,85,247,0.15);">
<div class="container">

<h2 class="section-title">Skills</h2>

<div class="row">
<?php foreach($skills as $skill): ?>

<div class="col-md-4 mb-4">
<div class="skill-box">

<h5><?= htmlspecialchars($skill['name']) ?></h5>

<div class="progress">
<div class="progress-bar" style="width: <?= $skill['percent'] ?? 50 ?>%">
<?= $skill['percent'] ?? 50 ?>%
</div>
</div>

</div>
</div>

<?php endforeach; ?>
</div>

</div>
</section>

<section class="section">
<div class="container">

<h2 class="section-title">Certificates</h2>

<div class="row">
<?php foreach($certificates as $cert): ?>

<div class="col-md-4 mb-4">
<div class="portfolio-card">

<img src="<?= htmlspecialchars($cert['image_path']) ?>" class="card-img-top cert-img">

<div class="card-body text-center" style="background:transparent;">
<h5><?= htmlspecialchars($cert['title']) ?></h5>
</div>

</div>
</div>

<?php endforeach; ?>
</div>

</div>
</section>

</body>
</html>