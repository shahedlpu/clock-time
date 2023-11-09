<!DOCTYPE html>
<html>
<body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 
<div align="center" id="runningTime">Dhaka Time<br><?php
  date_default_timezone_set('Asia/Dhaka');
  echo'Current Time is: '.$runningTime = date('h:i:s');
?></div>
 




<script type="text/javascript">
$(document).ready(function() {
 setInterval(runningTime, 1000);
});
function runningTime() {
  $.ajax({
    url: 'timeScript.php',
    success: function(data) {
       $('#runningTime').html(data);
     },
  });
}
</script>


</body>
</html>
