<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EntregaControllerTest extends TestCase
{
    /**
     * A basic get test.
     *
     * @return void
     */
    public function testGetEntrega()
    {
        $response = $this->get('/api/v1/entregas/12');

        $response->assertStatus(200)->assertJsonStructure([
                'id',
                'nome',
                'data_entrega',
                'ponto_partida',
                'ponto_destino',
                'created_at',
                'updated_at'
        ]);
    }

}
