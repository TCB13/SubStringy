<?php

namespace SubStringy;

use Stringy\Stringy;

class StaticSubStringy extends StaticStringy
{

    /**
     * Gets the substring after the first occurrence of a separator.
     * If no match is found returns null.
     * 
     * @param string $str         The haystack to search through
     * @param string $separator   The separator to find
     * @param string $encoding    The character encoding
     * @return string
     */
    public static function substringAfterFirst($str, $separator, $encoding = null)
    {
        return SubStringy::create($str, $encoding)->substringAfterFirst($separator);
    }

    /**
     * Gets the substring after the last occurrence of a separator.
     * If no match is found returns null.
     * 
     * @param string $str         The haystack to search through
     * @param string $separator   The separator to find
     * @param string $encoding    The character encoding
     * @return string
     */
    public static function substringAfterLast($str, $separator, $encoding = null)
    {
         return SubStringy::create($str, $encoding)->substringAfterLast($separator);
    }

    /**
     * Gets the substring before the first occurrence of a separator.
     * If no match is found returns null.
     * 
     * @param string $str         The haystack to search through
     * @param string $separator   The separator to find
     * @param string $encoding    The character encoding
     * @return string
     */
    public static function substringBeforeFirst($str, $separator, $encoding = null)
    {
        return SubStringy::create($str, $encoding)->substringBeforeFirst($separator);
    }

    /**
     * Gets the substring before the last occurrence of a separator.
     * If no match is found returns null.
     * 
     * @param string $str         The haystack to search through
     * @param string $separator   The separator to find
     * @param string $encoding    The character encoding
     * @return string
     */
    public static function substringBeforeLast($str, $separator, $encoding = null)
    {
        return SubStringy::create($str, $encoding)->substringBeforeLast($separator);
    }

}
