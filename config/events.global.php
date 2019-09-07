<?php
use Onion\Framework\Http\Events\RequestEvent;
use Onion\Framework\Server\Events\StartEvent;
use Project\Listeners\RequestListener;
use Project\Listeners\StartListener;

return [
    'events' => [
        'listeners' => [
            StartEvent::class => [
                StartListener::class,
            ],
            RequestEvent::class => [
                RequestListener::class,
            ]
        ],
    ]
];
