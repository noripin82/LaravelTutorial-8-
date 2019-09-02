<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
  public function tasks()
  {
    // フォルダテーブルとタスクテーブルの一対多の関連性を利用するよう指示
    return $this->hasMany('App\Task');
  }
}
