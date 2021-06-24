<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group login
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Welcome')
                    ->type('email', 'admin@gmail.com')
                    ->type('password', '123')
                    ->press('Login')
                    ;
            $browser->visit('/datasupplier')
                    ->press('LOGOUT')
                    ;
                    
        });
    }
}
