<?php
use Slim\Http\Request;
use Slim\Http\Response;
use App\Models\Circuito;

$app->group('/api', function () {
    $this->get('/circuitos', function ($resquest, $response) {        
        $circuitos = Circuito::get();
        return $response->withJson($circuitos);
    });   
    $this->put('/dispositivo/changePrimeiroAcesso', function ($request, $response) {        
       $dados = $request->getParsedBody();
       $id = $dados['id'];
        Dispositivo::where('id', $id)->update([
            'primeiro_acesso' => 'false'
        ]);
    }); 
});
