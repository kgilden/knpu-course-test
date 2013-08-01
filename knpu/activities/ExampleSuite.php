<?php

use KnpU\ActivityRunner\Assert\AssertSuite;

class ExampleSuite extends AssertSuite
{
    public function testOutputSaysFoo()
    {
        $output = $this->getOutput();

        $this->assertEquals('foo', $output, 'Did not see a "foo"');
    }
}
