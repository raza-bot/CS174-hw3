<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  include_once($path.'/CS174-hw3/src/models/storedb.php');
  include_once($path.'/CS174-hw3/src/views/landingView.php');
  
  $genre = $_REQUEST['genre'];

  $call_view = new landingView();
  $call_db = new manageDB();
  $call_db->insertGenre($genre);
  $gArray = $call_db->fetchGenres();
  $call_view ->  render($gArray, $gArray);
