<table>
    <body>
        
        @foreach ($produtos as $produto)
        
        <table border="5">
            <tr>
                <td>ID</td>
                <td>NOME</td>
                <td>CUSTO</td>
                <td>PRECO</td>
                <td>QUANTIDADE</td>
                <td>FORNECEDOR</td>
                <td>MARCA</td>
                <td>DATA DE VENCIMENTO</td>
            </tr>
            <tr>
                
                <td>{{ $produto->id }}</td>                
                <td>{{ $produto->nome }}</td>
                <td>{{ $produto->custo}}</td>
                <td>{{ $produto->preco}}</td>
                <td>{{ $produto->quantidade}}</td>            
                <td>{{ $produto->fornecedor}}</td>
                <td>{{ $produto->marca}}</td>
                <td>{{ $produto->datadevencimento}}</td>
            </tr>
        </table>  
         
        @endforeach



    </body>
</table>
