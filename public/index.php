<?php
  require_once('../vendor/autoload.php');
  require_once('../src/utils/Connection.php');
  use ORM\Controllers\PersonController;
  use ORM\Models\Person;
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Practica ORM</title>
  <style>
    #encabezado {
      text-align: center;
    }
    table,tr,td,th{
      border: 1px solid black;
      border-collapse: collapse;
      padding: 5px;
    }
  </style>
</head>
<body>
  <h1 id="encabezado">Personas</h1>
<?php
  $table = isset($_GET['table']) ? $_GET['table']:'people';
  $action = isset($_GET['action']) ? $_GET['action']:'list';
  $id = isset($_GET['id']) ? $_GET['id']:null;

  $controller = null;
  switch ($table) {
    case 'people':
      $controller = new PersonController();
      break;
  }

  switch ($action) {
    case 'list':
      $controller->list();
      break;
    case 'show':
      $controller->show($id);
      break;
    case 'delete':
      $controller->delete($id);
      break;
    case 'create':
      $controller->create();
      break;
    case 'post':
      $controller->post($_POST);
      break;
    case 'edit':
      $controller->edit($id);
      break;
    case 'update':
      $controller->update($id, $_POST);
      break;
  }
?>
</body>
</html>