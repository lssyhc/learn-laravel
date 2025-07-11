<?php

$mb_string = "こんにちは世界";
var_dump(mb_strlen($mb_string));

$url = "https://example.com/path?key=value&special=@#$%";
var_dump(urlencode($url));
var_dump(urldecode(urlencode($url)));

$html = "<html><head><title>Example</title></head><body><h1>Hello, World!</h1></body></html>";
var_dump(htmlentities($html));

$encoded = base64_encode("Hello, World!");
var_dump($encoded, base64_decode($encoded));
