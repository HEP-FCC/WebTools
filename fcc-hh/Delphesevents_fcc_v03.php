<?php
require('../config.php');

$layer = 'table';
$acc = 'fcc-hh';
$evtType = 'delphes';
$campaign = 'v03';
?>

<?php
$txt_file = file_get_contents(BASE_PATH . '/data/FCChh/Delphesevents_fcc_v03.txt');

$lname = array('No', 'Name', 'Nevents', 'Nweights', 'Nfiles', 'Nbad', 'Neos',
               'Size [GB]', 'Output Path', 'Main Process', 'Final States',
               'Cross Section [pb]', 'K-factor', 'Matching Eff.');

$description = 'Delphes FCC-hh Physics events v0.3.';
?>

<?php require(BASE_PATH . '/fcc-hh/page.php') ?>
