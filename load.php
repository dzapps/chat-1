<?php
//   $file = fopen("history/index.html", "r");
//   $contents = fread($file, filesize("history/index.html"));
//   fclose($file);
//   $pos = strrpos($contents, ".html"); // Find the last occurrence
//   $filename = "unknown";
//   if ($pos !== FALSE)
//   {
      $filename = $_POST["filename"]; //substr($contents, $pos - 13, 18);
      if (file_exists("history/" . $filename))
      {
         $file = fopen("history/" . $filename, "r");
         $contents = fread($file, filesize("history/" . $filename));
         $contents = substr($contents, strpos($contents, "<body>") + 6);
         $contents = substr($contents, 0, strpos($contents, "</body>"));
         //$contents = $filename . $contents;
         fclose($file);
      }
      else
      {
         $contents = "";
      }
//   }
//   else
//   {
//      $contents = "";
//   }
   echo $contents;
?>
