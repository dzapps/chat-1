<?php
   $file = fopen("history/" . $_POST["filename"], "w");
   fwrite($file, "<html><head><link href='style.css' rel='stylesheet'/></head><body>" . urldecode($_POST["index"]) . urldecode($_POST["hidden"]) . "<br>" . urldecode($_POST["chat"]) . "</body></html>");
   fclose($file);

   $file = fopen("history/index.html", "r");
   $contents = fread($file, filesize("history/index.html"));
   fclose($file);
   if (strpos($contents, $_POST["filename"]) === FALSE)
   {
      $file = fopen("history/index.html", "a");
      fwrite($file, "<a href='" . $_POST["filename"] . "' target='_blank'>" . $_POST["filename"] . "</a><br>");
      fclose($file);
   }
   echo "OK";
?>
