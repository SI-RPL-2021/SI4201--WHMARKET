<?php

namespace Tests\Unit;

use App\Http\Controllers\PertamabahanController;

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
        $pertambahanController = new PertamabahanController();
    $this->assertEquals(45, $pertambahanController->pertambahan(34, 11));
    }
}
