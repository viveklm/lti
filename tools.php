<?php //print_r($_REQUEST);?>

<?php
header('P3P:CP="CAO IDC DSP COR ADM DEVi TAIi PSA PSD IVAi IVDi CONi HIS OUR IND CNT"');
session_start();
// Load up the Basic LTI Support code
require_once 'lti/lti_util.php';
error_reporting(1);
$context = new BLTI("Consumer123", false, false);

$sourcedid = $_REQUEST['lis_result_sourcedid'];

$_SESSION['lis_result_sourcedid'] =  $sourcedid;
$_SESSION['lis_outcome_service_url'] = $_REQUEST['lis_outcome_service_url'];

//For speccific canvas score
$_SESSION['custom_canvas_assignment_points_possible'] = $_REQUEST['custom_canvas_assignment_points_possible'];
//print_r($_SESSION);
if (get_magic_quotes_gpc()) $sourcedid = stripslashes($sourcedid);
$sourcedid = urlencode($sourcedid);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sample 1</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>

<body>


  <div id='container'>
    <div id='title'>
      <h1>Learning : Project #1 - Quiz</h1>
    </div>
    <div id='quiz'></div>
    <button type="button" class="btn btn-success" id='next'>Next</button>
    <button type="button" class="btn btn-success" id='prev'>Prev</button>
    <!--<div class='button' id='start'>
      <a href='#'>Start Over</a>
    </div>-->
  </div>
  <script>
  var lis_result_sourcedid="<?php echo $_REQUEST['lis_result_sourcedid'];?>";
  var lis_outcome_service_url="<?php echo $_REQUEST['lis_outcome_service_url'];?>";
  var custom_canvas_assignment_points_possible="<?php echo $_REQUEST['custom_canvas_assignment_points_possible'];?>";
  </script>

  <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
  <script type='text/javascript' src='jsquiz.js'></script>

  <!-- Footer -->
  <footer class="container-fluid bg-4 text-center">
    <p> Created By
      <a href="">LearningMate</a>
    </p>
  </footer>

</body>

</html>

