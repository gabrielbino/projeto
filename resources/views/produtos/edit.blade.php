<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
</head>
<body>
    <div class="container">
        <h2>Editar Produto</h2>

        <form action="{{ route('produtos.update', $produto->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nome">Nome do Produto</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ $produto->nome }}" required>
            </div>
            
            <!-- Adicione os demais campos aqui, preenchendo com os valores do produto -->

            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>
</body>
</html>
