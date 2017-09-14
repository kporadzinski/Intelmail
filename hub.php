<?php

include 'functions.php';

purgatory();
mail('acmeloveacme@yahoo.pl','hej człowieku','no witam');
print_r(error_get_last());


echo '<a href="http://localhost/Intelmail/">klikaj</a>' ;




show_array($_POST['departament']);
$r = $_POST['departament'];
echo ('liczebnosc is  '.count($r));
for($i=0;$i<=count($r);$i++) {

  echo('<br>'.'a terez wynosi '.$r[$i].'<br>');
}



 ?>
