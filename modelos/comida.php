<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comida extends Model
{
    //
    protected $table = 'comidas';

    protected $fillable = ['nombre', 'ingrediente', 'categoria','precio','celiaco','tiempo_coccion'];

    public function pedidos(){

    	return this->hasMany('App\pedido');
    }
}
