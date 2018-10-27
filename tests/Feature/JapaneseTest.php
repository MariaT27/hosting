<?php namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class JapaneseTest extends TestCase
{
    use DatabaseTransactions;

    public function testIndex()
    {
        $this->get(action('Japanese@index'))
            ->assertStatus(200);
    }
}
