<?php
// Connect to the database server
$dbcnx = mysql_connect("localhost", "michael", "mike1996");
if (!$dbcnx) {
echo("Unable to connect to the " . "database server at this time (this is a host connect problem).");
exit();
}
// Select the database
if (! mysql_select_db("jobseekers", $dbcnx) ) {
echo("Unable to locate the " ."database at this time(this is a dbconnect problem).");
exit();
}
?>
