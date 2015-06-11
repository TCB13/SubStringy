<?php

namespace SubStringy;

use Stringy\Stringy;

class SubStringy extends Stringy implements \Countable, \IteratorAggregate, \ArrayAccess 
{

    /**
     * Gets the substring after the first occurrence of a separator.
     * If no match is found returns false.
     * 
     * @param string $separator
     * @return string|bool
     */
    public function substringAfterFirst($separator)
    {
        if (($offset = $this->indexOf($separator)) === false)
            return false;
        return static::create(mb_substr($this->str, $offset + mb_strlen($separator, $this->encoding), null, $this->encoding), $this->encoding); 
    }

    /**
     * Gets the substring after the last occurrence of a separator.
     * If no match is found returns false.
     * 
     * @param string $separator
     * @return string|bool
     */
    public function substringAfterLast($separator)
    {
        if (($offset = $this->indexOfLast($separator)) === false)
            return false;
        return static::create(mb_substr($this->str, $offset + mb_strlen($separator, $this->encoding), null, $this->encoding), $this->encoding);
    }

    /**
     * Gets the substring before the first occurrence of a separator.
     * If no match is found returns false.
     * 
     * @param string $separator
     * @return string|bool
     */
    public function substringBeforeFirst($separator)
    {
        if (($offset = $this->indexOf($separator)) === false)
            return false;
        return static::create(mb_substr($this->str, 0, $offset, $this->encoding), $this->encoding);
    }

    /**
     * Gets the substring before the last occurrence of a separator.
     * If no match is found returns false.
     * 
     * @param string $separator
     * @return string|bool
     */
    public function substringBeforeLast($separator)
    {
        if (($offset = $this->indexOfLast($separator)) === false)
            return false;
        return static::create(mb_substr($this->str, 0, $offset, $this->encoding), $this->encoding);
    }

    /**
     * Extracts a string from between two substrings present on the current string
     * @param  string $start 
     * @param  staing $end 
     * @return string
     */
    public function substringBetween($start, $end)
    {
        //$this->str = " " . $this->str;
        $ini = mb_stripos($this->str, $start, 0, $this->encoding);
        
        if ($ini == 0)
            return "";
        
        $ini += mb_strlen($start, $this->encoding);
        $len = mb_stripos($this->str, $end, $ini, $this->encoding) - $ini;
        return static::create(mb_substr($this->str, $ini, $len, $this->encoding), $this->encoding);
    }

}
