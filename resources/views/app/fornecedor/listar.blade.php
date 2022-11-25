@extends('app.layouts.basico')

@section('titulo', 'Fornecedor')

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Listagem de fornecedores</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('app.fornecedor.adicionar') }}">Novo</a></li>
                <li><a href="{{ route('app.fornecedor') }}">Consulta</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div style="width: 90%; margin-left: auto; margin-right: auto; margin-top: 60px;">
                <table border="1" width=100%>
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nome</th>
                            <th>Site</th>
                            <th>UF</th>
                            <th>Email</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($fornecedores as $fornecedor)
                        <tr>
                           <td>{{ $fornecedor->id }}</td>
                           <td>{{ $fornecedor->nome }}</td>
                           <td>{{ $fornecedor->site }}</td>
                           <td>{{ $fornecedor->uf }}</td>
                           <td>{{ $fornecedor->email }}</td>
                           <td>Excluir</td>
                           <td><a href="{{route('app.fornecedor.editar' , $fornecedor->id)}}">Editar</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection