<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto</title>
</head>
<body>
    <div class="container">
        <h2>Cadastrar Produto</h2>

        <form action="{{ route('produtos.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="nome">Nome do Produto</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            
            <!-- Adicione os demais campos aqui, como descricao, quantidade_estoque, valor, categoria, estado_origem -->

            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
</body>
</html>
