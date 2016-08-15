<!-- resources/views/urlredir.php -->


<?php

use Illuminate\Http\Request;
use App\Http\Requests;
use App\UrlMapping;

$urlredir = UrlMapping::where('id', $id)->first();

//return Redirect::away($urlredir->longurl);

echo 'Redirecting to <br />' . $urlredir->longurl . '<br /> in 4 seconds :)';

echo '<META http-equiv="refresh" content="4;URL='.$urlredir->longurl.'">';

