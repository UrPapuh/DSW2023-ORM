<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>NAME</th>
    </tr>
  </thead>
  <tbody>
      <tr>
        <td><?=$person->id?></td>
        <td><?=$person->name?></td>
        <td>
          <a href="index.php?id=<?=$person->id?>&action=edit">&#128393;</a>
        </td>
        <td>
          <a href="index.php?id=<?=$person->id?>&action=delete">&#128465;</a>
        </td>
      </tr>
  </tbody>
</table>
<p>
  <a href="index.php"><--</a>
</p>