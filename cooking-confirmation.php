<?php
$page_title = 'Yoko\'s Kitchen';

$nav_home_class = '';
$nav_citations_class = '';
$nav_cooking_class = 'active_page';

$vegetarian = $_POST["vegetarian"];
$sauces = $_POST["sauces"];
$email = $_POST["post"];
?>
<!DOCTYPE html>
<html lang="en">

<?php include 'includes/meta.php' ?>

<body>
  <?php include 'includes/header.php' ?>

  <main class="courses">

    <h2><?php echo $page_title; ?></h2>

    <p>You signed up for: </p>

    <p><?php echo $vegetarian; ?></p>
    <p><?php echo $sauces; ?></p>

    <h2> See you soon! </h2>

    <section>


    </section>

    <section>

    </section>

    <cite>&copy; 2011 Yoko's Kitchen (<a href="http://www.htmlandcssbook.com/code-samples/chapter-17/example-with-links.html">Source</a>)</cite>
  </main>

  <?php include "includes/footer.php" ?>
</body>

</html>
