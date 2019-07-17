<?php

namespace App\Http\Controllers;

use App\Entrega;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class entregaController extends Controller
{
    /**
     * Exibir registros
    *
    * @return Response
    */
    public function index($id = null) {
        if ($id == null) {
            return Entrega::orderBy('id', 'asc')->get();
        } else {
            return $this->show($id);
        }
    }


    /**
     * Salva um registro recém-criado.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) {
        $post = new Entrega;

        $post->nome = $request->input('nome');
        $post->data_entrega = $request->input('data_entrega');
        $post->ponto_partida = $request->input('ponto_partida');
        $post->ponto_destino = $request->input('ponto_destino');
        $post->save();

        return 'Entrega criado com sucesso com o id ' . $post->id;
    }


    /**
     * Exibir um registo.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        return Entrega::find($id);
    }


    /**
     * Editar um registro.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id) {
        $Entrega = Entrega::find($id);

        $Entrega->nome = $request->input('nome');
        $Entrega->data_entrega = $request->input('data_entrega');
        $Entrega->ponto_partida = $request->input('ponto_partida');
        $Entrega->ponto_destino = $request->input('ponto_destino');
        $Entrega->save();

        return "Entrega #" . $Entrega->id . " editado com sucesso.";
    }


    /**
     * Remover um registro.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request, $id) {

        $Entrega = Entrega::find($id);
        $Entrega->delete();

        return "Entrega #" . $id. " excluído com sucesso.";
    }

}
