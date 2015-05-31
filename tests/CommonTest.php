<?php

use SubStringy\SubStringy;

abstract class CommonTest extends PHPUnit_Framework_TestCase
{
    /**
     * Asserts that a variable is of a SubStringy instance.
     *
     * @param mixed $actual
     */
    public function assertSubStringy($actual)
    {
        $this->assertInstanceOf('SubStringy\SubStringy', $actual);
    }

    public function substringAfterFirstProvider()
    {
        return array(
            array(' now', 'find me now', 'me', 'UTF-8'),
            array(' now, me is also here', 'find me now, me is also here', 'me', 'UTF-8'),
        );
    }
    
    public function substringAfterLastProvider()
    {
        return array(
            array(' now', 'find me now', 'me', 'UTF-8'),
            array(' is also here', 'find me now, me is also here', 'me', 'UTF-8'),
        );
    }

    public function substringBeforeFirstProvider()
    {
        return array(
            array('find ', 'find me now', 'me', 'UTF-8'),
            array('find ', 'find me now, me is also here', 'me', 'UTF-8'),
        );
    }

    public function substringBeforeLastProvider()
    {
        return array(
            array('find ', 'find me now', 'me', 'UTF-8'),
            array('find me now, ', 'find me now, me is also here', 'me', 'UTF-8'),
        );
    }

}
