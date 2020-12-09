<html>
<head></head>
<body>
<h1>Todas aves</h1>
<a href="{{route("user.create")}}">CRIAR NOVO USUARIO</a>

<table>
    <tread>
        <tr>
            <td>nome</td>
            <td>email</td>
            <td>senha</td>

            <td></td>
        </tr>
    </tread>
    <tbody>
    @foreach($aves as $ave)
        <tr>
            <td>{{$ave->name}}</td>
            <td>{{$ave->email}}</td>
            <td>{{$ave->senha}}</td>
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
