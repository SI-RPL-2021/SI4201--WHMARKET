<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditMasterBarangtest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group editmasterbarang
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/home')
                    ->assertSee('WHMARKET');
                    ;
                    $browser->visit('/masterbarang')
                    ->assertSee('Master Barang')
                    ;
                    $browser->visit('/edit_masterbarang/3')
                    ->assertSee('Edit Master Barang')
                    ->type('nama_barang', 'Susu Ultra UHT Cokelat 250ml')
                    ->press('Save')
                    ->assertSee('Susu Ultra UHT Cokelat 250ml')
                    ;
        });
    }
}
