<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?=$title?></title> <!-- 各ページのtitleを反映させる -->
  <meta name="description" content="<?=$description?>"> <!-- 各ページのdescriptionを反映させる -->
  <link rel="stylesheet" href="../css/header_style.css">
  <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css">
</head>

<body>
     <div class="wrapper">

      <header>
      <!--pc用ヘッダーリスト-->
        <a href="../top/"><img class="icon" src="../images/icon.png"></a>
        <li class="header_nav"><a href="../Gallery/">Gallery</a></li>
        <li class="header_nav"><a href="../Access/">Access</a></li>
        <li class="header_nav"><a href="../program/">Program</a></li>
        <li class="header_nav"><a href="../top/">Home</a></li>
    <!--グローバルナビ--->
        <nav class="hamnav">
          <ul class="hamnav_list">
            <li class="hamnav_item"><a href="../construction/">Gallery</a></li>
            <li class="hamnav_item"><a href="../Access/">Access</a></li>
            <li class="hamnav_item"><a href="../program/">Program</a></li>
            <li class="hamnav_item"><a href="../top/">Home</a></li>
            <li class="hamnav_item"><a href="https://twitter.com/rokkoinitium"><img src="../images/twitter_icon.png"></a></li>
            <li class="hamnav_item"><a href="https://twitter.com/rokkoinitium"><img src="../images/insta_icon.png"></a></li>
          </ul>
        </nav>

        <div class="hamburger" id="js-hamburger">
          <span class="nav_line nav-line-1"></span>
          <span class="nav_line nav-line-2"></span>
          <span class="nav_line nav-line-3"></span>
        </div>

      </div>

        <div class="black-bg" id="js-black-bg"></div>

        <script src="../js/header_js/open.js"></script>

      </header>
