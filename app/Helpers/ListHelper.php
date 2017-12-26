<?php
namespace App\Helpers;

class ListHelper
{
    public static function getColours ()
    {
        return ['blue', 'dark', 'green', 'orange', 'purple', 'red'];
    }

    public static function getIcons ()
    {
        return [
            'mobile', 'tools', 'bars', 'photo', 'info', 'calendar-dark', 'auction',
            'swap', 'suitcase', 'desktop', 'home', 'building', 'search', 'folder',
            'star', 'heart', 'power', 'graphic', 'maths', 'chat', 'typing', 'check',
            'bookmark', 'wallet', 'page', 'funds', 'cart', 'pencil', 'car',
            'drive', 'speedometer', 'songs'
        ];
    }

    public static function getDocumentTypes () {
        return [
            'ID', 'Birth Certificate', 'Certificate', 'Diploma', 'Driver Licence', 'Passport', 'Other'
        ];
    }
}
