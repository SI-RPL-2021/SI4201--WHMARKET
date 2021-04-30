<?php

namespace Tests\Unit;

use App\Http\Controllers\PertambahanController;
use PHPUnit\Framework\TestCase;

class PertambahanTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {   
        $pertambahanController = new PertambahanController();
        $this->assertEquals(45, $pertambahanController->pertambahan(34, 11));
    }
}
