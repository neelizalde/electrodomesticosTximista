<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Eloquent
{
    /**
     * The database connection used by the model.
     *
     * @var string
     */
    protected $connection = 'mysql';

    protected $table = 'Clientes';
    protected $primaryKey ='telefono1';
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    // public $timestamps = false;
    // o
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
    
    use HasFactory;

    public function getClientes():array
    {
        return array(DB::table('Clientes')->get());
    }
}
