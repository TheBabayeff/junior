<?php

namespace App\Helpers;

use Parsedown;

class MarkdownHelper
{
    public static function toHtml($markdown)
    {
        $parsedown = new Parsedown();
        return $parsedown->text($markdown);
    }
}
