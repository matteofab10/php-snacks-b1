<?php

$paragrafo = 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.';

$nuovoParagrafo = explode('.', $paragrafo);

echo $paragrafo;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack-5</title>
</head>
<body>
  
  <h3>Paragrafo</h3>
  <p><?php echo $paragrafo ?></p>

  <h3>Nuovo paragrafo</h3>
  <div>
    <?php 
      for ($i=0; $i < count($nuovoParagrafo); $i++){
        echo "<p>{$nuovoParagrafo[$i]}.</p>";
      }
    ?>
  </div>



</body>
</html>