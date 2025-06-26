<?php

return [
    'max_attempts' => env('LOGIN_THROTTLE_MAX', 5),
    'decay_minutes' => env('LOGIN_THROTTLE_DECAY', 15),
];