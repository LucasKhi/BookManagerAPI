<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivroController extends Controller
{
    // Listar todos os livros
    public function index()
    {
        $livros = Livro::all();
        return view('livros.index', ['livros' => $livros]);
    }

    // Exibir o formulário de criação de um novo livro
    public function create()
    {
        return view('livros.create');
    }

    // Salvar o novo livro no banco de dados
    public function store(Request $request)
    {
        $livro = new Livro();
        $livro->titulo = $request->input('titulo');
        $livro->autor = $request->input('autor');
        $livro->ano_publicacao = $request->input('ano_publicacao');
        $livro->descricao = $request->input('descricao');

        // Se uma imagem foi enviada, faça o upload e salve o nome no banco de dados
        if ($request->hasFile('imagem')) {
            $imagem = $request->file('imagem');
            $nomeImagem = time() . '.' . $imagem->getClientOriginalExtension();
            $imagem->storeAs('public/capas', $nomeImagem);
            $livro->imagem = $nomeImagem;
        }

        $livro->save();

        return redirect()->route('livros.index')->with('success', 'Livro cadastrado com sucesso!');
    }

    // Exibir o formulário de edição de um livro específico
    public function edit($id)
    {
        $livro = Livro::findOrFail($id);
        return view('livros.edit', ['livro' => $livro]);
    }

    // Atualizar o livro no banco de dados
    public function update(Request $request, $id)
    {
        $livro = Livro::findOrFail($id);
        $livro->titulo = $request->input('titulo');
        $livro->autor = $request->input('autor');
        $livro->ano_publicacao = $request->input('ano_publicacao');
        $livro->descricao = $request->input('descricao');

        // Se uma imagem foi enviada, faça o upload e atualize o nome no banco de dados
        if ($request->hasFile('imagem')) {
            $imagem = $request->file('imagem');
            $nomeImagem = time() . '.' . $imagem->getClientOriginalExtension();
            $imagem->storeAs('public/capas', $nomeImagem);
            $livro->imagem = $nomeImagem;
        }

        $livro->save();

        return redirect()->route('livros.index')->with('success', 'Livro atualizado com sucesso!');
    }

    // Excluir um livro do banco de dados
    public function destroy($id)
    {
        $livro = Livro::findOrFail($id);
        $livro->delete();

        return redirect()->route('livros.index')->with('success', 'Livro excluído com sucesso!');
    }
}
