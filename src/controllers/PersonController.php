<?php
namespace ORM\Controllers;
use ORM\Models\Person;

class PersonController {

  public function __construct() {
  }

  public function list(): void {
    $people = Person::all();
    require('../src/views/list.php');
  }

  public function show(string $id): void {
    $person = Person::find($id);
    if ($person) {
      require('../src/views/show.php');
    } else {
      echo 'Person is not found!';
    }
  }

  public function delete(string $id): void {
    $person = Person::find($id);
    $person->delete();
    $this->list();
  }

  public function create(): void {
    require('../src/views/create.php');
  }

  public function post($data): void {
    $person = new Person();
    $person->name = $data['name'];
    $person->save();
    $this->list();
  }

  public function edit(string $id): void {
    $person = Person::find($id);
    require('../src/views/edit.php');
  }

  public function update(string $id, array $data): void {
    $person = Person::find($id);
    $person->name = $data['name'];
    $person->save();
    $this->list();
  }
}