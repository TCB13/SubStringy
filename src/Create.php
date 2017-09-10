<?php

namespace SubStringy;

if (!function_exists('SubStringy\create')) {
    /**
     * Creates a SubStringy object and returns it on success.
     *
     * @param  mixed $str Value to modify, after being cast to string
     * @param  string $encoding The character encoding
     *
     * @return SubStringy A SubStringy object
     * @throws \InvalidArgumentException if an array or object without a
     *         __toString method is passed as the first argument
     */
    function create($str, $encoding = null)
    {
        return new SubStringy($str, $encoding);
    }
}
