<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterUserTest extends DuskTestCase
{
    /** @test */
    public function check_if_login_function_is_working() {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->type('email', 'admin@admin.com')
                    ->type('password', '123456')
                    ->press('ENTRAR')
                    ->assertPathIs('/admin');
        });
    }
}
