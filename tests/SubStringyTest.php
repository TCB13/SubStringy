<?php

require_once __DIR__ . "/../vendor/autoload.php";
require __DIR__ . '/../src/SubStringy.php';

use SubStringy\SubStringy as S;

class SubStringyTestCase extends CommonTest
{
    public function testConstruct()
    {
        $stringy = new S('foo bar', 'UTF-8');
        $this->assertSubStringy($stringy);
        $this->assertEquals('foo bar', (string) $stringy);
        $this->assertEquals('UTF-8', $stringy->getEncoding());
    }

    /**
     * @dataProvider substringAfterFirstProvider()
     */
    public function testSubstringAfterFirst($expected, $str, $separator, $encoding = null)
    {
        $result = S::create($str, $encoding)->substringAfterFirst($separator);
        $this->assertInternalType('string', (string)$result);
        $this->assertEquals($expected, $result);
    }

    /**
     * @dataProvider substringAfterLastProvider()
     */
    public function testSubstringAfterLast($expected, $str, $separator, $encoding = null)
    {
        $result = S::create($str, $encoding)->substringAfterLast($separator);
        $this->assertInternalType('string', (string)$result);
        $this->assertEquals($expected, $result);
    }

    /**
     * @dataProvider substringBeforeFirstProvider()
     */
    public function testSubstringBeforeFirst($expected, $str, $separator, $encoding = null)
    {
        $result = S::create($str, $encoding)->substringBeforeFirst($separator);
        $this->assertInternalType('string', (string)$result);
        $this->assertEquals($expected, $result);
    }

    /**
     * @dataProvider substringBeforeLastProvider()
     */
    public function testSubstringBeforeLast($expected, $str, $separator, $encoding = null)
    {
        $result = S::create($str, $encoding)->substringBeforeLast($separator);
        $this->assertInternalType('string', (string)$result);
        $this->assertEquals($expected, $result);
    }

    /**
     * @dataProvider substringBetweenProvider()
     */
    public function testSubstringBetween($expected, $str, $start, $end, $encoding = null)
    {
        $result = S::create($str, $encoding)->substringBetween($start, $end);
        $this->assertInternalType('string', (string)$result);
        $this->assertEquals($expected, $result);
    }

     /**
     * @dataProvider substringCountProvider()
     */
    public function testSubstringCount($expected, $str, $substr, $encoding = null)
    {
        $result = S::create($str, $encoding)->substringCount($substr);
        $this->assertInternalType('int', $result);
        $this->assertEquals($expected, $result);
    }


}
