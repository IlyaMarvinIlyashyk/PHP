<?php

$fruit = ['apple', 'banana', 'orange', 'mango'];

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Fruit</title>
    </head>
    <body>

      <!-- example of a foreach print loop -->
      <!-- video 39 -->

    <h1>Fruit</h1>

    <ol>
      <?php foreach($fruit as $item) {
        echo '<li>' . $item . '</li>';
      }
      ?>

    </ol>
  </body>
  </html>
