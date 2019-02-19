<?php
/**
 * 
 * [Visa datum, månad, tid etc]
 * 
 */
 // Citat av Dani Al Balhaa
 // Finns absolut ingen link till att spåra mig, tyvärr. 
 $alla_citat = array(
     "I never gave a rat damn about anybody.",
     "Yes, I am a good coder, but I am probably still better than you"
 );
 
 $random_key = array_rand($alla_citat);
 $citat      = $alla_citat[$random_key];

 date_default_timezone_set("Europe/Stockholm");
 setlocale(LC_ALL, "sv_SE", "Swedish");

 date_default_timezone_set("America/Los_Angeles");
 setlocale(LC_ALL, "en_US", "English");

 header("Content-type: text/html; charset=utf-8");
 ?>

 <!DOCTYPE html>
 <html lang="sv">
 <head>
     <meta charset="utf-8" />
     <title>[Ajshieeet] </title>
     <style>
         body {
             font-family: sans-serif;
             /* + tillägg du vill göra för att göra sidan lite snyggare. */
         }
     </style>
 </head>
 <body>
     <h1> The One And Only. </h1>
 <?php
 echo "<p>" . strftime("%c") . "</p>\n";
 echo "<p lang=\"en\"> {$citat} </p>\n";
 ?>
 </body>
 </html>
 

