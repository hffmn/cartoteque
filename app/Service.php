<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
  protected $fillable = [
    'name', 'price', 'description',
  ];

  public $timestamps = false;

  public static function addingNewService($request) {
    return self::create([
      'name' => $request->name,
      'price' => $request->price,
      'description' => $request->description
    ]);
  }

  public static function getAllServices() {
    return self::all();
  }
}
