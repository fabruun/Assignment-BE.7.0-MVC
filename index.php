<?php
/*
 * This is the application
 */
session_start();
require_once './includes/TelevisionI.inc.php';
require_once './includes/Television.inc.php';   // the model
require_once './includes/TelevisionV1.inc.php'; // a view
require_once './includes/TelevisionRC.inc.php'; // a controller
?>
<!doctype html>
<html>
<head>
    <meta charset='utf-8'/>
    <title>Television</title>
    <link rel="stylesheet" href="./css/styles.css"/>
</head>
<body>
<?php
$model = new Television();          // init the model
$rc = new TelevisionRC($model);     // init a controller
$view1 = new TelevisionV1($model);  // init a view
if (isset($_POST)) {                // did we receive data?
    $rc->action($_POST);            // the controller deals with it
}
printf("%s\n", $view1->osd());      // use the view, display state
printf("%s\n", $view1->remote());   // use the view, display form
?>
</body>
</html>