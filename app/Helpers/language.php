<?php

if (!function_exists('changeLanguage')) {
    /**
     * change language.
     *
     * @param  string $language
     * @return string
     */
    function changeLanguage(string $language)
    {
        return implode("/", array_replace(
            explode('/', request()->path()),
            [0 => $language]
        ));
    }
}
