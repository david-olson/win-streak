<?php

it ('responds to the health check', function() {
    $this->getJson('/api/health')
        ->assertOk()
        ->assertExactJson(['status' => 'ok']);
});