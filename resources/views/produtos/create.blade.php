<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, initial-scale=1.0">
    <meta https-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar um novo produto</title>
</head>
<body>
    <form action="{{ route('registra_produto')}}" method="POST">
    @csrf
        <label for="">Nome</label> <br />
        <input type="text" name="nome"> <br />
        <label for="">Custo</label> <br />
        <input type="text" name="custo"> <br />
        <label for="">preco</label> <br />
        <input type="text" name="preco"> <br />
        <label for="">Quantidade</label> <br />
        <input type="text" name="quantidade"> <br />
        <label for="">Fornecedor</label> <br />
        <input type="text" name="fornecedor"> <br />
        <label for="">Marca</label> <br />
        <input type="text" name="marca"> <br />
        <label for="">Data de Vencimento</label> <br />
        <input type="text" name="datadevencimento"> <br />
        <button>Salvar</button>
    </form>
</body>
</html>