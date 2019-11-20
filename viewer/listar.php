<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar</title>

    <link href="../static/css/fonts.css" rel="stylesheet">
    <link href="../static/css/materialize.css" type="text/css" rel="stylesheet"/>
    <link href="../static/css/style.css" rel="stylesheet">
    <link href="../static/css/bootstrap-table.min.css" rel="stylesheet">
    <link href="../static/css/bootstrap-table-materialize.min.css" rel="stylesheet">
</head>
<body>
<table id="tableCategoria" 
      class="responsive-table"
      data-url="/Projeto-Integrador-2019/control/todos.php"
      data-search="true"
      data-show-refresh="true"
      data-pagination="true"
      data-page-list="[10, 25, 50, 100, all]"
      data-show-footer="true">

        <thead>
          <tr>
              <th data-field="id">ID</th>
              <th data-field="descricaoP">Descrição Pessoal</th>
              <th data-field="descricaoC">Descrição Curso</th>
              <th data-field="tituloC">Título do curso</th>
              <th data-field="tituloCP">Título do Capítulo</th>
              
              <th data-field="id" data-formatter="editarCategoriaFmt">Editar</th>
              <th data-field="id" data-formatter="excluirCategoriaFmt">Excluir</th>
          </tr>
        </thead>

        <tbody>
         
        </tbody>
 </table>


<script src="../static/js/jquery-3.4.1.min.js"></script>
    <script src="../static/js/materialize.js"></script>
    <script src="../static/js/bootstrap-table.min.js"></script>
    <script src="../static/js/bootstrap-table-materialize.min.js"></script>
    <script src="../static/js/bootstrap-table-pt-BR.min.js"></script>
    <script src="../static/js/init.js"></script>
    <script src="../static/js/cadastro.js"></script>
    <script src="../static/js/categoria.js"></script>

</body>
</html>    