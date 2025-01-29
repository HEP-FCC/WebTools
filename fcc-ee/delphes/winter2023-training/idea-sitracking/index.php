<?php
require('../../../../config.php');

$layer = 'table';
$acc = 'fcc-ee';
$evtType = 'delphes';
$fileType = 'edm4hep-root';
$campaign = 'winter2023-training';
$det = 'idea-sitracking';

$dataFilePath = BASE_PATH . '/data/FCCee/Delphesevents_winter2023_training_IDEA_SiTracking.txt';
$description = 'Delphes FCCee Physics events winter2023 training production (IDEA detector with silicone tracking).';
?>

<?php require(BASE_PATH . '/fcc-ee/page.php') ?>
