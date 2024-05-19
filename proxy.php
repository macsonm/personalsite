<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $url = 'https://mymap.icu/referal.php?ref=T3VU0L';

    $options = [
        'http' => [
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query(['referral' => 'T3VU0L']),
        ],
    ];

    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

    if ($result === FALSE) {
        http_response_code(500);
        echo 'Error submitting form';
    } else {
        echo 'Form submitted successfully';
    }
}
?>
