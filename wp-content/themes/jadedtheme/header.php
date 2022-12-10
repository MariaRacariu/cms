

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title() ?></title>
  <?php wp_head(); ?>

</head>

<body>

  <div class="">
    <nav class="">


      <?php
      wp_nav_menu(
        array(
          'menu' => 'Main',
          'container' => '',
          'theme_location' => 'primary'
        )
      );
      ?>
    </nav>
  </div>