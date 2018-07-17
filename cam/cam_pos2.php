<?php

$url = 'http://login:password@ip:port/PTZCtrl/channels/1/presets/2/goto';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
$response = curl_exec($ch);
curl_close($ch);