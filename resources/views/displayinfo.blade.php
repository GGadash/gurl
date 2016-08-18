<!-- resources/views/displayinfo.blade.php -->

<?php
//should this be in the controller? 
use App\UrlMapping;
$urlinfo = UrlMapping::where('id', $id)->first();
?>

@include('common.errors')

<DIV>ID: {{ $urlinfo->id }}</DIV>

<p><DIV>Short URL: </DIV>
<DIV><a target="_blank" href="{{ url('/').'/'.$urlinfo->id }}">{{ url('/').'/'.$urlinfo->id }}</a></DIV></p>

<p><DIV>Long URL: </DIV>
<DIV>{{ $urlinfo->longurl }}</DIV></p>
