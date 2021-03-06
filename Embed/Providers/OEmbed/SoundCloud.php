<?php
namespace Embed\Providers\OEmbed;

class SoundCloud extends \Embed\Providers\OEmbedImplementationAbstract
{
    public static function getEndPoint()
    {
        return 'http://soundcloud.com/oembed';
    }
    public static function getPatterns()
    {
        return array('https?://soundcloud.com/*');
    }
}
