<?php

use Inertia\Testing\AssertableInertia;

test('the home page renders the coming soon inertia page', function () {
    $response = $this->get(route('home'));

    $response
        ->assertOk()
        ->assertInertia(fn (AssertableInertia $page) => $page->component('ComingSoon'));
});
