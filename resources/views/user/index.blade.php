<html>
<head></head>
<body>
<h1>Todos os usuarios</h1>
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
    @foreach($user as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->senha}}</td>
            <td>
                <a href="{{route("user.edit",$user->id)}}">Editar</a>
            </td>
            <td>
                <form method="post" action="{{route("user.destroy",$user->id)}}">
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
