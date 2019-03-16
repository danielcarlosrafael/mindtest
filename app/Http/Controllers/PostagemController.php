<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\PostagemModel;
use Illuminate\Support\Facades\DB;
class PostagemController extends Controller
{
    //'titulo', 'descricao'

    private $postagem;

    public function __construct(PostagemModel $postagem) 
    {
        $this->postagem = $postagem;
    }
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->session()->regenerate();
        $postagens = $this->postagem->select('id', 'titulo', DB::raw('SUBSTRING(descricao, 1, 25) AS descricao'))->get();
        return view('postagem/lista_postagens', compact('postagens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->session()->regenerate();
        $cdtaltr = "Cadastrar";
        $cdtalt = "Cadastro";

        return view('postagem/cadastro_postagens', compact('cdtaltr', 'cdtalt'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados = $request->except(['_token']);
        $insert = $this->postagem->create($dados);
        if (isset($insert)) {
			$request->session()->flash( 'exibeMensagem', [
				'tipo' => 'success',
				'mensagem' => "Postagem cadastrada com sucesso",
			] );
			return redirect('/postagem/');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        
        $request->session()->regenerate();
        $postagem = $this->postagem->where(['id' => $id])
                        ->select('id', 'titulo', 'descricao')->get();
        $titulo = $postagem[0]['titulo'];
        $descricao = $postagem[0]['descricao'];
        $cdtaltr = "Alterar";
        $cdtalt = 'Alteração';
        return view('postagem/cadastro_postagens', compact('cdtaltr', 'cdtalt', 'postagem', 'id', 'titulo', 'descricao'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->session()->regenerate();
        $dados = $request->except(['_token']);
        $update = $this->postagem->where(['id' => $id])->update($dados);
        if (isset($update)) {
			$request->session()->flash( 'exibeMensagem', [
				'tipo' => 'success',
				'mensagem' => "Postagem alterada com sucesso",
			] );
			return redirect('/postagem/');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $request->session()->regenerate();
        $delete = $this->postagem->where(['id' => $id])->delete();
        if (isset($delete)) {
			$request->session()->flash( 'exibeMensagem', [
				'tipo' => 'success',
				'mensagem' => "Postagem deletada com sucesso",
			] );
			return redirect('/postagem/');
        }
    }
}
