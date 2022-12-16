<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Tu_van extends Model
{
    use HasFactory;

    protected $table = 'tu_van';
    protected $fillable = [
        'id', 
        'name', 
        'content', 
        'time', 
        'phone', 
        'bds_id',
        'nv_id',
        'status'];

    public function loadListWithPager($param = [])
    {
        $query = DB::table($this->table)->select($this->fillable);
                
        $tu_van = $query->paginate(5);

        return $tu_van;
    }
}
