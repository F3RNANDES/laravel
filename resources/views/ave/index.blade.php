<html>
<head></head>
<body>
<h1>Todas aves</h1>
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
        </tr>
    @endforeach
    </tbody>
</table>
</body>

</html>
