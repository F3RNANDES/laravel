<html>
<head></head>
<body>
<h1>Todos os cachorros</h1>
<a href="{{route("dog.create")}}">CRIAR NOVO CÃO</a>
<table>
    <tread>
        <tr>
            <td>nome</td>
            <td>idade</td>
            <td>raça</td>
            <td>cor</td>
            <td>preço</td>
            <td>vendido</td>
        </tr>

    </tread>

    <tbody>
    @foreach($dogs as $dog)
        <tr>
            <td>{{$dog->name}}</td>
            <td> {{$dog->age}}</td>
            <td>  {{$dog->race}}</td>
            <td> {{$dog->color}}</td>
            <td> {{$dog->price}}</td>
            <td> {{$dog->sold}}</td>

        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>
