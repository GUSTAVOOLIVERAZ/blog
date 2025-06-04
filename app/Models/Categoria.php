<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;
use OwenIt\Auditing\Traits\Auditable;

class Categoria extends Model implements AuditableContract
{
    use Auditable;

    protected $table = 'categorias';
}
