<html>
<head></head>
<body>
<h1>Todas aves</h1>
<a href="{{route("ave.create")}}">CRIAR NOVA AVE</a>

<table>
    <tread>
        <tr>
            <td>nome</td>
            <td>idade</td>
            <td>raça</td>
            <td>cor</td>
            <td>preço</td>
            <td>vendido</td>
            <td></td>
        </tr>
    </tread>
    <tbody>
    @foreach($aves as $ave)
        <tr>
            <td>{{$ave->name}}</td>
            <td>{{$ave->age}}</td>
            <td>{{$ave->race}}</td>
            <td>{{$ave->color}}</td>
            <td>{{$ave->price}}</td>
            <td>{{$ave->sold}}</td>
            <td>
                <a href="{{route("ave.edit",$ave->id)}}">Editar</a>
            </td>
            <td>
                <form method="post" action="{{route("ave.destroy",$ave->id)}}">
                    @csrf
                    @method('delete')
                    <button type="submit">Deletar</button>
                </form>
            </td>
        </tr>
        </tr>
    @endforeach
    </tbody>
</table>
</body>

</html>
