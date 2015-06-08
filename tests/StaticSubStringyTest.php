<?php

require_once __DIR__ . "/../vendor/autoload.php";
require __DIR__ . '/../src/StaticSubStringy.php';

use SubStringy\StaticSubStringy as S;

class StaticSubStringyTestCase extends CommonTest
{
   
    /**
     * @dataProvider substringAfterFirstProvider()
     */
    public function testSubstringAfterFirst($expected, $str, $separator, $encoding = null)
    {
        $result = S::substringAfterFirst($str, $separator, $encoding);
        $this->assertInternalType('string', $result);
        $this->assertEquals($expected, $result);
    }

    /**
     * @dataProvider substringAfterLastProvider()
     */
    public function testSubstringAfterLast($expected, $str, $separator, $encoding = null)
    {
        $result = S::substringAfterLast($str, $separator, $encoding);
        $this->assertInternalType('string', $result);
        $this->assertEquals($expected, $result);
    }

    /**
     * @dataProvider substringBeforeFirstProvider()
     */
    public function testSubstringBeforeFirst($expected, $str, $separator, $encoding = null)
    {
        $result = S::substringBeforeFirst($str, $separator, $encoding);
        $this->assertInternalType('string', $result);
        $this->assertEquals($expected, $result);
    }

    /**
     * @dataProvider substringBeforeLastProvider()
     */
    public function testSubstringBeforeLast($expected, $str, $separator, $encoding = null)
    {
        $result = S::substringBeforeLast($str, $separator, $encoding);
        $this->assertInternalType('string', $result);
        $this->assertEquals($expected, $result);
    }

     /**
     * @dataProvider substringBetweenProvider()
     */
    public function testSubstringBetween($expected, $str, $start, $end, $encoding = null)
    {
        $result = S::substringBetween($str, $start, $end, $encoding);
        $this->assertInternalType('string', $result);
        $this->assertEquals($expected, $result);
    }

}
