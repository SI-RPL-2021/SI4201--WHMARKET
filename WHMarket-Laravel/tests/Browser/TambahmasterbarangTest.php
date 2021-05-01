<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class Tambahmasterbarangtest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group tambahmasterbarang
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/home')
                    ->assertSee('WHMARKET')
                    ;
                    $browser->visit('/masterbarang')
                    ->assertSee('Master Barang')
                    ->clickLink('Tambah Master Barang')
                    ->assertSee('Tambah Master Barang')
                    ->type('nama_barang','Cola')
                    ->select('kategori', 'Minuman')
                    ->select('satuan', 'Pieces (pcs)')
                    ->select('kemasan', 'Botol')
                    ->type('harga', '10000')
                    ->press('submit')
                    ->assertSee('Cola')
                    ;
        });
    }
}
