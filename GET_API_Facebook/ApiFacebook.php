<?php
$con = mysqli_connect('localhost', 'root', '', 'api');

// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v15.0/100768521709470?fields=id%2Cname%2Cposts%7Bmessage%2Cfull_picture%2Ccreated_time%7D%2Cpicture&access_token=EAAMI7RI2VW8BAL8yeo9ZAaV8GYaL7Ie12A97rXsKpz29cSv3sBjz3ON6FQMgfzTvBpZA1ikyq3qIZCnr2ZBzeRGsuemwEEx9HZCCOXRr7HT63UeeJjV1BpVPCQ4j0lZAkhTTihfhbpSF9RH3I5NjpiZA3ZAwW41NZAsOPjaY32HrVV3MLiMZA6qcQF');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);


$result = json_decode($result);
mysqli_query($con, "delete from faccebook_api_test");
/* echo '<pre>';
print_r($result);  */
foreach ($result->posts->data as $list) {
    $message = '';
    $full_picture = '';


    if (isset($list->message)) {
        $message = $list->message;
    }
    if (isset($list->full_picture)) {
        $full_picture = $list->full_picture;
    }
    $created_time = $list->created_time;
    $page_name = $result->name;
    $page_picture = $result->picture->data->url;


    $sql = mysqli_query($con, "INSERT INTO faccebook_api_test(message, full_picture, created_time, page_name, page_picture ) VALUES('$message', '$full_picture', '$created_time', '$page_name', '$page_picture')");
}
