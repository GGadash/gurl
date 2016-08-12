<!-- resources/views/displayinfo.php -->

<?php

use Illuminate\Http\Request;
use App\Http\Requests;
use App\UrlMapping;


$urlinfo = DB::table('url_mappings')->where('id', $id)->first();

echo 'ID: ' . $urlinfo->id;

echo '<br /><br /> Short URL: <br /> <a target="_blank" href="'.url('/').'/'.$urlinfo->id.'">'.url('/').'/'.$urlinfo->id.'</a>';

echo '<br /><br /> Long URL: <br /> ' . $urlinfo->longurl;

