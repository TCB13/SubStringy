<?php

require __DIR__ . '/../src/Create.php';

use function SubStringy\create as s;

class CreateTestCase extends PHPUnit_Framework_TestCase
{
    public function testCreate()
    {
        $stringy = s('foo bar', 'UTF-8');
        $this->assertInstanceOf('SubStringy\SubStringy', $stringy);
        $this->assertEquals('foo bar', (string) $stringy);
        $this->assertEquals('UTF-8', $stringy->getEncoding());
    }
}
