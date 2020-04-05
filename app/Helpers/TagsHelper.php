<?php


namespace App\Helpers;


use Illuminate\Database\Eloquent\Collection;

class TagsHelper
{
    /**
     * Список тегов через разделитель
     * @param Collection $tags
     * @param string $glue
     * @param string $column
     * @return string
     */
    public static function asString(Collection $tags, string $glue = ",", string $column = 'name'): string
    {
        $result = [];
        foreach ($tags as $tag) {
            $result[] = $tag->$column;
        }
        return implode($glue, $result);
    }

    /**
     * Список тегов в виде массива вместо значения поля
     * @param string $string
     * @param string $delimiter
     * @return array
     */
    public static function asArray(?string $string, string $delimiter = ","): ?array
    {
        if ($string === null) {
            return null;
        }
        return explode($delimiter, $string);
    }

    public static function getTags(Collection $collection):array
    {
        $tags = [];
        foreach ($collection as $item) {
            foreach ($item->tags as $tag) {
                $tags[] = $tag->name;
            }
        }
        return array_unique($tags);
    }
}
