<?php

return [
    'driver' => env('FCM_PROTOCOL', 'http'),
    'log_enabled' => true,

    'http' => [
        'server_key' => env('FCM_SERVER_KEY','AAAA1iDfwC0:APA91bFNlTv7pwku03AFwSclI4xMQbLAfj1Z8AuxSw_ptsFGqFylrrRw7KxZp7GLTXd7Yhz4Qk0Qbo-q5EFzY99YR6m7ILX-vkd3ADMLbPeauv0fKGWQT4IlH3KiCpwDqAUUCUqTbtRZdD3Ikqm7ufvOZV6lhbiHKw'),
        'sender_id' => env('FCM_SENDER_ID', '919674535981'),
        'server_send_url' => 'https://fcm.googleapis.com/fcm/send',
        'server_group_url' => 'https://android.googleapis.com/gcm/notification',
        'timeout' => 30.0, // in second
    ],
];
