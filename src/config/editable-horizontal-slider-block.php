<?php

return [
    "availableTypes" => [
        "horizontalSlides" => [
            "title" => env("EDITABLE_HORIZONTAL_SLIDER_TITLE", "Слайдер"),
            "admin" => "ehsb-slides",
            "render" => "ehsb::types.slides",
        ],
    ],

    // Components
    "customSlidesComponent" => null,

    // Templates
    "templates" => [],
];
