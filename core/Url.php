<?php
class Url
{
    public static $baseUrl;

    /**
     * @param string $url  The current base url.
     */
    public static function setBaseUrl($url)
    {
        static::$baseUrl = $url;
    }

    /**
     * @return string
     */
    public static function toHome()
    {
        return static::$baseUrl;
    }

    /**
     * @return string
     */
    public static function toPage($path)
    {
        return static::$baseUrl . '/page.php?page=' . $path;
    }
}