<?php
  header("Content-Type: audio/x-mpegurl");
  echo 'http://' . $_SERVER["HTTP_HOST"] .  substr($PHP_SELF, 0, strrpos($PHP_SELF, '/')) . '/free_culture.mp3';
?>
