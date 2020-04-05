<?php


namespace App\Traits;


trait ThumbnailTrait
{
    /**
     * Миниатюра картинки
     *
     * @return string
     */
    public function getThumb()
    {
        if (!$this->image) {
            return $this->image;
        }
        // check for absolute path
        if ($this->isAbsolute($this->image)){
            return $this->image;
        }

        $path = pathinfo($this->image);
        return implode('', [
            $path['dirname'],
            '/',
            config('lfm.thumb_folder_name'),
            '/',
            $path['basename'],
        ]);
    }

    private function isAbsolute($url){
        $pattern = "/^(?:ftp|https?|feed):\/\/(?:(?:(?:[\w\.\-\+!$&'\(\)*\+,;=]|%[0-9a-f]{2})+:)*
    (?:[\w\.\-\+%!$&'\(\)*\+,;=]|%[0-9a-f]{2})+@)?(?:
    (?:[a-z0-9\-\.]|%[0-9a-f]{2})+|(?:\[(?:[0-9a-f]{0,4}:)*(?:[0-9a-f]{0,4})\]))(?::[0-9]+)?(?:[\/|\?]
    (?:[\w#!:\.\?\+=&@$'~*,;\/\(\)\[\]\-]|%[0-9a-f]{2})*)?$/xi";

        return (bool)preg_match($pattern, $url);
    }
}
