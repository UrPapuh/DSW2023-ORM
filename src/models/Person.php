<?php
namespace ORM\Models;

use Illuminate\Database\Eloquent\Model;
 
class Person extends Model {
  protected $table = 'people';

  public function create(string $name){
    $person = new Person;
    $person->name = $name;
    $person->save();
    echo $person->id;
  }

  public function read(int $id) {
    return Person::find($id);
  }

}
