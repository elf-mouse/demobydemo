<?php
include 'HelloDemo.php';
$demo = new HelloDemo($unit);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Demo <?php echo $demo->now; ?></title>
  <link rel="stylesheet" href="<?php echo $demo->mainCss; ?>">
  <link rel="stylesheet" href="<?php echo $demo->css; ?>">
  <script src="js/jquery/jquery-1.8.3.min.js"></script>
</head>
<body>
  <?php if ($demo->html): ?>
  <?php include $demo->html; ?>
  <?php else: ?>
  <?php echo 'File does not exist :('; ?>
  <?php endif; ?>
  <script src="<?php echo $demo->mainJs; ?>"></script>
  <script src="<?php echo $demo->js; ?>"></script>
</body>
</html>
