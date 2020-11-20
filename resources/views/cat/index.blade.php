<html>
<head>

</head>
<body>
<h1>Todos os gatos</h1>
<a href="{{route('cat.create')}}">Criar novo gato</a>
<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Race</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach($cats as $cat)
        <tr>
            <td>{{$cat->name}}</td>
            <td>{{$cat->age}}</td>
            <td>{{$cat->race}}</td>
            <td>
                <a href="{{route('cat.edit', $cat->id)}}">Editar</a>
            </td>
            <td>
                <form method="post" action="{{route('cat.destroy', $cat->id)}}">
                    @csrf
                    @method('delete')
                    <button type="submit">Excluir</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
