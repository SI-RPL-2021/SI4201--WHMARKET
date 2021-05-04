<?php

namespace Tests\Unit;

<<<<<<< HEAD
use App\Http\Controllers\PertamabahanController;

=======
use App\Http\Controllers\PertambahanController;
>>>>>>> e1a04d11b325de3b730d1fcc8000c995f6906dfc
use PHPUnit\Framework\TestCase;

class PertambahanTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
<<<<<<< HEAD
    {
        $pertambahanController = new PertamabahanController();
    $this->assertEquals(45, $pertambahanController->pertambahan(34, 11));
=======
    {   
        $pertambahanController = new PertambahanController();
        $this->assertEquals(45, $pertambahanController->pertambahan(34, 11));
>>>>>>> e1a04d11b325de3b730d1fcc8000c995f6906dfc
    }
}
