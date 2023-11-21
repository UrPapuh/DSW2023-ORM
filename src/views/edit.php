<form action="index.php?id=<?=$id?>&action=update" method="post">
<fieldset>
    <legend>Persona</legend>
    <p>
      <label for="id">Id</label>
      <input type="text" name="id" value="<?=$id?>" disabled>
    </p>
    <p>
      <label for="name">Name</label>
      <input type="text" name="name" value="<?=$person->name?>">
    </p>
    <p>
      <input type="submit" value="Actualizar">
    </p>
  </fieldset>
</form>
<p>
  <a href="index.php"><--</a>
</p>