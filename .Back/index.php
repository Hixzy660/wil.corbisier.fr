<?php
 header('Location: https://wil.corbisier.fr/global/PHP/home.php');
  exit();



 $request = $_SERVER;
 // afficherLeContenuDeLaVariable($request);
$baseUrl = '/';
$url = $_SERVER['REQUEST_URI'];
// afficherLeContenuDeLaVariable($url, '$url');

if($url === $baseUrl . 'concert')
{
   $html = file_get_contents(__DIR__ .'/html/concertInfo.html');
}
elseif ($url === $baseUrl . 'paris') 
{
    $html = file_get_contents(__DIR__ .'/html/ParsiConcert.html');
}
elseif ($url === $baseUrl . 'Hubert-Felix')
{
    $html = file_get_contents(__DIR__ .'/html/Hubert-Felix.html');
}

elseif ($url === $baseUrl . 'maneskin') 
{
    $html = file_get_contents(__DIR__ .'/html/Maneskin.html');
}
elseif ($url === $baseUrl . 'commentaire')
{
 $html = file_get_contents(__DIR__ .'/PHP/formulaire.php');
    header('Location: ../html/formulaire.php');
}
else
{
    $html = file_get_contents(__DIR__ .'/PHP/home.php');
}
echo $html;
