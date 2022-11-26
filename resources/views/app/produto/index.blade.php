@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Listagem de produtos</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="#">Novo</a></li>
                <li><a href="#">Consulta</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div style="width: 90%; margin-left: auto; margin-right: auto; margin-top: 60px;">
                <table border="1" width=100%>
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>peso</th>
                            <th>Unidade ID</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($produtos as $produto)
                        <tr>
                           <td>{{ $produto->nome }}</td>
                           <td>{{ $produto->descricao }}</td>
                           <td>{{ $produto->peso }}</td>
                           <td>{{ $produto->unidade_id }}</td>
                           <td><a href="#">Excluir</a></td>
                           <td><a href="#">Editar</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                    <br>

                        {{$produtos->appends($request)->links()}}
            <br>
           Exibindo {{$produtos->count()}} produtos de {{$produtos->total()}} (de {{$produtos->firstItem()}} a {{$produtos->lastItem()}})

            </div>
        </div>
    </div>

@endsection