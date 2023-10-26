<?php
use Slim\Http\Request;
use Slim\Http\Response;
use App\Models\Circuito;

$app->group('/api', function () {
    $this->get('/circuitos', function ($request, $response) {
        $circuitos = Circuito::get();
        return $response->withJson($circuitos);
    });   
    $this->put('/changeCircuitos', function ($request, $response) {        
       $dados = $request->getParsedBody();
       $id = $dados['id'];
       $estado = $dados['estado'];
        Circuito::where('id', $id)->update([
            'estado' => $estado
        ]);
    }); 
});
