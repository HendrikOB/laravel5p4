<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class WelcomeTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    function test_welcome_a_user()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/welcome')
                    ->type('name', 'Duilio')
                    ->assertSee('Bienvenido, Duilio');
        });
    }
}
