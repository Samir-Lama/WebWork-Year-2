<?php
    error_reporting( E_ALL );
    ini_set( "display_errors", 1 );
    require_once( "2.php" );
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      function p($val){
        echo '<p>'.$val.'</p>';
      }

      function html($entity, $val){
        echo '<'.$entity.'>'.$val.'</'.$entity.'>';
      }

      function html_maker($val){
        echo '<'.$val.'>';
      }

      function html_class($tag, $class, $val){
        echo '<'.$tag.'class ='.$class'>'.$val.'</'.$tag.'>';
      }
      p('Paragraph 1');
      html('h1', 'Hello');
      html_maker('ul');
      html('li', 'List item 1');
      html('li', 'List item 2');
      html_maker('/ul');
      html('p', "Paragraph 1");
      html_class('p', 'red', 'Halo');


     ?>
  </body>
</html>
