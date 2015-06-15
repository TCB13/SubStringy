<?php

namespace SubStringy;

use Stringy\StaticStringy;

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

     /**
     * Extracts a string from between two substrings present on the current string
     * @param string $str         The haystack to search through
     * @param  string $start 
     * @param  staing $end 
     * @return string
     */
    public static function substringBetween($str, $start, $end, $encoding = null)
    {
    	return SubStringy::create($str, $encoding)->substringBetween($start, $end);
    }

    /**
     * Count the number of substring occurrences on the current string 
     * @param  string $substr 
     * @return int
     */
    public static function substringCount($str, $substr, $encoding = null)
    {
    	return SubStringy::create($str, $encoding)->substringCount($substr);
    }

}
