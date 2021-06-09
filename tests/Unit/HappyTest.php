<?php

namespace Tests\Unit;

use Tests\TestCase;

class HappyTest extends TestCase
{
    /** @test
     * @group unit
     * @group models
     */
    public function assert_true()
    {
        $this->assertTrue(true);
    }
}
