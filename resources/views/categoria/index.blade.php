<table>
    <tr>
        <th>Nome:</th>
        <th>Data de Criação:</th>
    </tr>

    <tbody>
    @foreach($categorias as $categoria)
        <tr>
            <td>
                {{$categoria->nome}}
            </td>
            <td>
                {{date_format($categoria->created_at,"d/m/Y H:i:s")}}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
