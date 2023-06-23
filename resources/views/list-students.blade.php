<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <!-- <div class="card-header">
                </div> -->
            <div class="card-body border p-3">
                <div class="d-flex justify-content-end">
                    <input type="text">
                    <button class="btn btn-primary">Pesquisar</button>
                </div>
                
                <h1>Listagem de alunos</h1>
                <table class="table table-striped border">
                    <thead>
                        <tr>
                            <th>
                                {{$alunos}}
                            </th>
                            <th>
                                Nota
                            </th>
                            <th>
                                Curso
                            </th> 
                        </tr>
                    </thead>
                    <tbody>
                        <td>
                            fdvfvfdv
                        </td>
                        <td>
                            dcdscd
                        </td>
                        <td>
                            dcsdcds
                        </td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
