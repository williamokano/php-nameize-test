<?php declare(strict_types=1);

namespace Converters;

function everaldoReisConverter($name)
{
    return preg_replace_callback('/\b\w{1,30}\b/', function($matches) {
        return mb_convert_case($matches[0], MB_CASE_TITLE, "UTF-8");
    }, $name);
}
