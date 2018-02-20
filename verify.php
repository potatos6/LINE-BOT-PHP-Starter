<?php
$access_token = 'OAALRJUIo5jReioaNAWdmISVk9CWuu/kIIETggZL/Z0eEJ6opbumrSxYG1/lwgqKmwnMVdm4otoCu4EXfrjUvtSzjenSCGtfdUFDcdWxM8T0qzxqmJNWok+DWGhURivQuvEjEtZS+HnSWSiiVoZzDgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
