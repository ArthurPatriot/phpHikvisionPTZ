<?php

$xml_data ='<PTZData version="2.0" xmlns="http://www.isapi.org/ver20/XMLSchema">'.
'<tilt> 20 </tilt>'.
'<Momentary>'.
'<duration> 1000 </duration>'.
'</Momentary>'.
'</PTZData>';

$url = 'http://login:password@ip:port/PTZCtrl/channels/1/momentary';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/xml'));
curl_setopt($ch, CURLOPT_POSTFIELDS, "$xml_data");
$response = curl_exec($ch);
curl_close($ch);