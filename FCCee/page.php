<?php
$rows = explode("\n", $txt_file);

$NbrCol = count($lname); // $NbrCol : le nombre de colonnes

foreach($rows as $row => $data)
  {
    //get row data
    $row_data = explode(',,', $data);

    for ($i=0; $i<$NbrCol-1; $i++)
      {
        $info[$row][$lname[$i+1]] = $row_data[$i]; 
      }
  }

$NbrLigne = count($info);  // $NbrLigne : le nombre de lignes
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php
      $title = '';
      if ($det === 'idea') {
        $title .= 'IDEA | ';
      }
      if ($det === 'idea-3t') {
        $title .= 'IDEA 3T | ';
      }
      if ($det === 'idea-fullsilicon') {
        $title .= 'IDEA FullSilicon | ';
      }

      if ($evtType === 'delphes') {
        $title .= 'Delphes | ';
      }
      if ($evtType === 'stdhep') {
        $title .= 'STDHEP | ';
      }
      if ($evtType === 'lhe') {
        $title .= 'Les Houches | ';
      }

      if ($campaign === 'dev') {
        $title .= 'Dev | ';
      }
      if ($campaign === 'spring2021') {
        $title .= 'Spring 2021 | ';
      }
      if ($campaign === 'spring2021-training') {
        $title .= 'Spring 2021 &ndash; training | ';
      }
      if ($campaign === 'prefall2022') {
        $title .= 'Pre-fall 2022 | ';
      }
      if ($campaign === 'prefall2022-training') {
        $title .= 'Pre-fall 2022 &ndash; training | ';
      }
      if ($campaign === 'winter2023') {
        $title .= 'Winter 2023 | ';
      }
      if ($campaign === 'winter2023-training') {
        $title .= 'Winter 2023 &ndash; training | ';
      }

      $title .= 'FCC-ee | FCC Physics Events';

      echo $title;
    ?></title>

    <link rel="icon" type="image/x-icon" href="<?= BASE_URL ?>/images/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
          crossorigin="anonymous">
    <link rel="stylesheet" href="<?= BASE_URL ?>/style/fcc.css">
  </head>

  <body>
    <?php include BASE_PATH . '/header.php'; ?>

    <article id="sample-article" class="container-lg">
      <h1 class="mt-5"><?php
        $title = 'FCC-ee';

        if ($campaign === 'dev') {
          $title .= ' | Dev';
        }
        if ($campaign === 'spring2021') {
          $title .= ' | Spring 2021';
        }
        if ($campaign === 'spring2021-training') {
          $title .= ' | Spring 2021 &ndash; training';
        }
        if ($campaign === 'prefall2022') {
          $title .= ' | Pre-fall 2022';
        }
        if ($campaign === 'prefall2022-training') {
          $title .= ' | Pre-fall 2022 &ndash; training';
        }
        if ($campaign === 'winter2023') {
          $title .= ' | Winter 2023';
        }
        if ($campaign === 'winter2023-training') {
          $title .= ' | Winter 2023 &ndash; training';
        }

        if ($evtType === 'delphes') {
          $title .= ' | Delphes';
        }
        if ($evtType === 'stdhep') {
          $title .= ' | STDHEP';
        }
        if ($evtType === 'lhe') {
          $title .= ' | Les Houches';
        }

        if ($det === 'idea') {
          $title .= ' | IDEA';
        }
        if ($det === 'idea-3t') {
          $title .= ' | IDEA 3T';
        }
        if ($det === 'idea-fullsilicon') {
          $title .= ' | IDEA FullSilicon';
        }

        $title .= ' Samples';

        echo $title;
      ?></h1>

      <p class="mt-3">
        <em><?= $description ?></em>
      </p>

      <?php if ($evtType === 'delphes' || $evtType === 'stdhep'): ?>
      <p class="mt-5">
        <a href="https://cern.ch/key4hep/">Key4hep</a> stack used during the generation of the
        <?php
          $campaignName = '';
          if ($campaign === 'dev') {
            $campaignName = 'dev';
          }
          if ($campaign === 'spring2021') {
            $campaignName = 'spring2021';
          }
          if ($campaign === 'spring2021-training') {
            $campaignName = 'spring2021_training';
          }
          if ($campaign === 'prefall2022') {
            $campaignName = 'pre_fall2022';
          }
          if ($campaign === 'prefall2022-training') {
            $campaignName = 'pre_fall2022_training';
          }
          if ($campaign === 'winter2023') {
            $campaignName = 'winter2023';
          }
          if ($campaign === 'winter2023-training') {
            $campaignName = 'winter2023_training';
          }
        ?>
        <code><?= $campaignName ?></code> samples was:
        <pre><code><?= $key4hepStacks[$campaign] ?></code></pre>
      </p>
      <?php endif ?>

      <p class="mt-3">
        <?php
          $statUrl = BASE_URL.'/data/FCCee/stat';

          if ($evtType === 'stdhep') {
            $statUrl .= '_stdhep_';
          }
          if ($evtType === 'delphes') {
            $statUrl .= 'delphes';
          }

          $statUrl .= $campaignName;

          if ($det === 'idea') {
            $statUrl .= '_IDEA';
          }
          if ($det === 'idea-3t') {
            $statUrl .= '_IDEA_3T';
          }
          if ($det === 'idea-fullsilicon') {
            $statUrl .= '_IDEA_FullSilicon';
          }

          $statUrl .= '.html';
        ?>
        Additional stats about the production can be found <a href="<?= $statUrl ?>">here</a>.
      </p>

      <?php include BASE_PATH . '/table.php'; ?>
    </article>

    <?php include BASE_PATH . '/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
  </body>
</html>
