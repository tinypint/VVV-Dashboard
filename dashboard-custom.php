<?php 

function redirect($url, $statusCode = 301)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}

redirect('/dashboard/index.php');

// include_once 'dashboard/index.php'; ?>
