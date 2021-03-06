<?php
namespace Embed\Providers\OEmbed;

class SmugMug extends \Embed\Providers\OEmbedImplementationAbstract
{
    public static function getEndPoint()
    {
        return 'http://api.smugmug.com/services/oembed/';
    }
    public static function getPatterns()
    {
        return array('http://www.smugmug.com/*');
    }
}
