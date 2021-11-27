<?php
  switch ( $_GET["page"] ) {

  case "seite1":
    $include_page = "pages/seite1.php";
    //SEO-Daten für Seite 1
    $title = "Titel für Seite 1";
    $meta_description = "Erklärungstext für Seite 1";
    $meta_keywords = "Keywords,für,seite1";
    $meta_robots = "index,follow";
    break;

  case "seite2":
    $include_page = "pages/seite2.php";
    //SEO-Daten für Seite 2
    $title = "Titel für Seite 2";
    $meta_description = "Erklärungstext für Seite 2";
    $meta_keywords = "Kewords,für,seite2";
    $meta_robots = "index,follow";
    break;

  case "seite3":
    $include_page = "pages/seite3.php";
    //SEO-Daten für Seite 3
    $title = "Titel für Seite 3";
    $meta_description = "Erklärungstext für Seite 3";
    $meta_keywords = "Kewords,für,seite3";
    $meta_robots = "index,follow";
    break;

  case "seite4":
    $include_page = "pages/seite4.php";
    //SEO-Daten für Seite 4
    $title = "Titel für Seite 4";
    $meta_description = "Erklärungstext für Seite 4";
    $meta_keywords = "Kewords,für,seite4";
    $meta_robots = "index,follow";
    break;

  case "seite5":
    $include_page = "pages/seite5.php";
    //SEO-Daten für Seite 5
    $title = "Titel für Seite 5";
    $meta_description = "Erklärungstext für Seite 5";
    $meta_keywords = "Kewords,für,seite5";
    $meta_robots = "index,follow";
    break;

  case "impressum":
    $include_page = "pages/impressum.php";
    //SEO-Daten für diese Seite
    $title = "Impressum";
    $meta_description = "";
    $meta_keywords = "";
    $meta_robots = "noindex,nofollow";
    break;

  case "datenschutz":
    $include_page = "pages/datenschutz.php";
    //SEO-Daten für diese Seite
    $title = "Datenschutz";
    $meta_description = "";
    $meta_keywords = "";
    $meta_robots = "noindex,nofollow";
    break;

  case "baustelle":
    $include_page = "pages/baustelle.php";
    //SEO-Daten für diese Seite
    $title = "Baustelle";
    $meta_description = "";
    $meta_keywords = "";
    $meta_robots = "noindex,nofollow";
    break;

 //Homepage
  default:
    $include_page = "pages/homepage.php";
    //SEO-Daten für diese Seite
    $title = "Titel für Homepage";
    $meta_description = "Erklärungstext für Homepage";
    $meta_keywords = "Keywords,für,Homepage";
    $meta_robots = "index,follow";
    break;
}
?>

<!DOCTYPE html>
<html lang="de">
  <head>
    <title><?php echo "$title"; ?></title>
    <meta charset="UTF-8">
    <meta name="description" content="<?php echo "$meta_description"; ?>" />
    <meta name="keywords" content="<?php echo "$meta_keywords"; ?>" />
    <meta name="robots" content="<?php echo "$meta_robots"; ?>" />
    <meta name="revisit-after" content="3 days" />
    <meta name="content-language" content="de" />
    <meta name="language" content="deutsch, de" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="template/responsive.css" />
  </head>
  <body>

    <!--Website logo start-->
    <div id="logo">
      <a href="index.php?page=default" title="Homepage-Title"><img src="template/img/website-name.webp" alt="Website-Name" /></a>
    <div>
    <!--Website Logo end-->

    <!--Website Menue start-->
    <div id="menuebox">
    <div id="tabs">
        <ul>
          <li><a href="index.php?page=default" title="Menu-Titel Homepage"><span>Homepage</span></a></li>
          <li><a href="index.php?page=seite1" title="Menu-Titel Seite 1"><span>Seite 1</span></a></li>
          <li><a href="index.php?page=seite2" title="Menu-Titel Seite 2"><span>Seite 2</span></a></li>
          <li><a href="index.php?page=seite3" title="Menu-Titel Seite 3"><span>Seite 3</span></a></li>
          <li><a href="index.php?page=seite4" title="Menu-Titel Seite 4"><span>Seite 4</span></a></li>
        </ul>
    </div>
    </div>
    <!--Website Menue end-->

    <!--Website content start-->
    <div id="mainbox">
    <?php
      require_once "$include_page";
     ?>
    </div>
    <!--Website content end-->

    <!--Footer Menue start-->
    <div id="footer">
      <a href="index.php?page=impressum">Impressum</a> |
      <a href="index.php?page=datenschutz">Datenschutz</a> |
      <a href="index.php?page=seite5">Seite 5</a>
    </div>
    <!--Footer Menue end-->

    </body>
</html>
