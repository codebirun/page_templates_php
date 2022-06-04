<?php
//$URL "http://".$_SERVER['HTTP_HOST']."/"."CodeRepo"
//$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
//echo $actual_link;
$URL = "http://$_SERVER[HTTP_HOST]/CodeRepo/page_template_php/";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Basic Template 1</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

  <div class="container mt-3">
    <h2>Navigation Tabs</h2>
    <p>Turn the nav menu into navigation tabs with the .nav nav-tabs class. Add the active class to the active/current link. If you want the tabs to be togglable, see the last example on the tutorial page.</p>
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link  <?php if (basename($_SERVER['PHP_SELF']) == 'main.php') echo "active"; ?>" href="<?php echo $URL; ?>main.php">Active</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'g1page.php') echo "active"; ?>" href="<?php echo $URL; ?>group1/g1page.php">Group 1 page</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'g2page.php') echo "active"; ?>" href="<?php echo $URL; ?>group2/g2page.php">Group 2 page</a>

      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Dropdown</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Link</a></li>
            <li><a class="dropdown-item" href="#">Another link</a></li>
            <li><a class="dropdown-item" href="#">A third link</a></li>
          </ul>
        </li>
    </ul>