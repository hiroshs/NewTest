<?php
echo "REMOTE_ADDR = ";
echo $_SERVER["REMOTE_ADDR"];
echo "<BR>";

if( $_SERVER["HTTP_REFERER"] ){
echo "HTTP_REFERER = ";
echo $_SERVER["HTTP_REFERER"];
} else {
echo "*** No REFERER ***";
}
exit;
?>
