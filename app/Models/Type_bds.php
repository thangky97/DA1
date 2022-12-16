<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bds;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Type_bds extends Model
{
    use HasFactory;

    protected $table = 'type_bds';
    protected $fillable = ['id', 'name', 'status'];

    public function loadListWithPager($param = [])
    {
        $query = DB::table($this->table)->select($this->fillable);

        $type_bds = $query->paginate(5);

        return $type_bds;
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

    //load ra chi tiết người dùng
    public function loadOne($id, $params = [])
    {
        $query = DB::table($this->table)->where('id', '=', $id);
        $obj = $query->first();
        return $obj;
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
