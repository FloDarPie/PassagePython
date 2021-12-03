<!-- API -->
<script src="https://code.jquery.com/jquery-3.6.0.js" charset="utf-8"></script>
<script src="http://semantic-ui.com/dist/semantic.min.js" charset="utf-8"></script>
<script src="https://kit.fontawesome.com/da84674338.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="http://semantic-ui.com/dist/semantic.min.css">
<!-- Fichiers locaux -->
<link rel="stylesheet" href="/css/master.css">
<link rel="stylesheet" href="/css/header.css">
<link rel="stylesheet" href="/css/ui.css">
<link rel="stylesheet" href="/css/handicap.css">
<script src="/js/search.js" charset="utf-8" defer></script>
<script src="/js/handicap.js" defer></script>
<?php
  if(isset($_GET['dys']))
    echo '<link rel="stylesheet" href="/css/dys.css">';
  if(isset($_GET['park']))
    echo '<link rel="stylesheet" href="/css/park.css">';
  if(isset($_GET['dalt']))
    echo '<link rel="stylesheet" href="/css/dalt.css">';
?>
