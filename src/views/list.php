<p>
  <a href="index.php?action=create">[+] Crear</a>
</p>
<h1>Listado de Personas</h1>
<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>NAME</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($people as $person) { ?>
      <tr>
        <td><a href="index.php?id=<?=$person->id?>&action=show"><?=$person->id?></a></td>
        <td><?=$person->name?></td>
        <td>
          <a href="index.php?id=<?=$person->id?>&action=delete">&#128465;</a>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>