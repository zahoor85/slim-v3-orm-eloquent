<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model as Model;

class User extends Model{
   protected $table = 'users';
   protected $fillable = ['name','email','password'];
}
?>