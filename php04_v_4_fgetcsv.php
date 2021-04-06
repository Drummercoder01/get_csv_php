<?php
$_pointer = fopen("test5.csv","rb");

  echo '<pre>';
  print_r (fgetcsv($_pointer));
  echo '</pre>';

 fclose($_pointer);
?>
