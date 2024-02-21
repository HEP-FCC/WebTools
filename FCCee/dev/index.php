<?php
require('../../config.php');

$layer = 'det';
$acc = 'fcc-ee';
$det = 'none';
$evtType = 'delphes';
$prodTag = 'dev';
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Delphes | Dev | FCC-ee | FCC Physics Events</title>

    <link rel="icon" type="image/x-icon" href="<?= BASE_URL ?>/images/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
          crossorigin="anonymous">
    <link rel="stylesheet" href="<?= BASE_URL ?>/style/fcc.css">
  </head>

  <body>
    <?php include '../../header.php'; ?>

    <article id="sample-article" class="container-lg">
      <h1 class="mt-5">FCC-ee | Dev | Delphes Samples</h1>

      <div class="list-group mt-5">
        <a class="list-group-item list-group-item-action" href="<?= BASE_URL ?>/FCCee/dev/Delphesevents_IDEA.php">IDEA</a>
      </div>

      <p class="mt-5">
	<a href="https://cern.ch/key4hep/">Key4hep</a> stack used during the generation of the
        <code>dev</code> samples was:
	<pre><code><?= $key4hepStacks['dev'] ?></code></pre>
      </p>
    </article>

    <?php include '../../footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
	    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
  </body>
</html>