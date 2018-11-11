<?php
  include 'really-simple-captcha.php';
  $foo = new ReallySimpleCaptcha;
  print $foo->generate_random_word;
?>
