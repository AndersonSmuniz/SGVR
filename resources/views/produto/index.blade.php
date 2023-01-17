<table>
    <tr>
        <th>Nome:</th>
        <th>Status:</th>
        <th>Data de Criação:</th>
        <th>Categoria:</th>
    </tr>

    <tbody>
        @foreach($produtos as $produto)
            <tr>
                <td>
                    {{$produto->nome}}
                </td>
                <td>
                    {{$produto->status}}
                </td>
                <td>
                    {{date_format($produto->created_at,"d/m/Y H:i:s")}}
                </td>
                <td>
                    {{$produto->categoria->nome}}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a href="{{route('categoria.index')}}" target="_blank">Categorias</a>
