<?php
 $date = new DateTime('2020-12-01');
 $date -> modify('-10 months');
 echo $date -> format('d/m/Y')
 ?>
