<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">

            <h1 class="page-header">Inserção de Atores</h1>

            <div class="col-md-6">
                <form action="/atores/store" method="post">

                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input id="name" class="form-control" type="text" name="name" placeholder="Nome">
                    </div>
                    <div class= "form-group">    
                        <label for="anonasc">Ano de Nascimento</label>
                        <input id="anonasc" class="form-control" type="text" name="anonasc" placeholder="Ano de Nascimento">
                    </div>

                   
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>