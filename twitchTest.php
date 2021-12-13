<?php
/* file_get_contents replaced with curl function - Add this function and replace any use of file_get_contents with file_get_contents_curl */

// function file_get_contents_curl($url)
// {
//     $curlHeader = array(
//         "Client-ID: 352ei7jf3jq2mu6jvvovjy4qwv6huc", /* SET CLIENT ID HERE */
//         "Accept: application/vnd.twitchtv.v5+json"
//     );
//     $ch = curl_init();
//     curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
//     curl_setopt($ch, CURLOPT_HEADER, 0);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//     curl_setopt($ch, CURLOPT_URL, $url);
//     curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
//     curl_setopt($ch, CURLOPT_HTTPHEADER, $curlHeader);
//     $data = curl_exec($ch);
//     curl_close($ch);
//     return $data;
// }
