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
    </tr>
    </thead>
    <tbody>
    @foreach($cats as $cat)
        <tr>
            <td>{{$cat->name}}</td>
            <td>{{$cat->age}}</td>
            <td>{{$cat->race}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
