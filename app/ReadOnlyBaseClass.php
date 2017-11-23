<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReadOnlyBaseClass extends Model
{
    protected $majors = [];
    public function getAll(){
        return $this->majors;
    }

    public function get($id){
        return $this->major[$id];
    }
}
