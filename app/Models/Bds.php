<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Type_bds;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Bds extends Model
{
    use HasFactory;

    protected $table = 'bds';
    protected $fillable = [
        'bds.id', 
        'bds.name', 
        'bds.address', 
        'bds.price', 
        'bds.images', 
        'bds.so_tang', 
        'bds.so_phong', 
        'bds.so_tollet', 
        'bds.tinh_trang_bds', 
        'bds.huong_nha', 
        'bds.spread', 
        'bds.title', 
        'bds.content', 
        'type_bds.name as cateName', 
        'bds.status'
    ];

    //client list
    public function loadList($param = [])
    {
        
        $query = DB::table($this->table)->select($this->fillable)
        ->join('type_bds', 'type_bds.id', '=', 'bds.type_bds_id');

        $list = $query->get();

        return $list;
    }

    //load ra chi tiết người dùng
    public function loadOne($id, $params = [])
    {
        $query = DB::table($this->table)->where('id', '=', $id);
        $obj = $query->first();
        return $obj;
    }

    //admin
    public function loadListWithPager($param = [])
    {
        $query = DB::table($this->table)->select($this->fillable)
                ->join('type_bds', 'type_bds.id', '=', 'bds.type_bds_id');
                //->where('name', 'like', '%' . $name . '%');

        $bds = $query->paginate(5);

        return $bds;
    }

    //Thêm mới
    public function saveNew($params)
    {
        $data = array_merge(
            $params['cols']
        );

        $res = DB::table($this->table)->insertGetId($data);
        return $res;
    }
    //Sửa
    public function saveUpdate($params)
    {
        if (empty($params['cols']['id'])) {
            Session::push('errors', 'không xác định bản ghi cập nhập');
        }

        $dataUpdate = [];
        foreach ($params['cols'] as $colName => $val) {
            if ($colName == 'id') continue;
            $dataUpdate[$colName] = (strlen($val) == 0) ? null : $val;
        }
        $res = DB::table($this->table)
            ->where('id', $params['cols']['id'])
            ->update($dataUpdate);
        return $res;
    }

    
    
}
