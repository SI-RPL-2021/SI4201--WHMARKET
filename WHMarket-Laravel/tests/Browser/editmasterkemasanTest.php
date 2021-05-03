<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class Tambaheditmasterkemasan extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group editmasterkemasan
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/home')
                    ->assertSee('WHMARKET')
                    ;
                    $browser->visit('/masterkemasan')
                    ->assertSee('Master Kemasan')                
                    ;
                    $browser->visit('/edit_masterkemasan/1')
                    ->assertSee('Edit Master Kemasan')
                    ->type('nama_kemasan', 'plastik organik hadina')
                    ->press('Save')
                    ->assertSee('plastik organik hadina')
                    ;
        });
    }
}
