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
        return mb_substr($this->str, $offset + mb_strlen($separator, $this->encoding), null, $this->encoding); 
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
        return mb_substr($this->str, $offset + mb_strlen($separator, $this->encoding), null, $this->encoding); 
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
        return mb_substr($this->str, 0, $offset, $this->encoding); 
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
        return mb_substr($this->str, 0, $offset, $this->encoding); 
    }

}
