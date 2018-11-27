<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testCreate()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->clickLink("Product")
                ->clickLink("Create")
                ->value('#name', 'ProductMadeByTesting')
                ->click('input[type="submit"]');
        });
    }

    public function testEdit()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->clickLink("Product")
                ->clickLink("Edit")
                ->value('#name', 'ProductEditedByTesting')
                ->click('input[type="submit"]');
        });
    }
}
