<?php

namespace App\Http\Controllers\Bds;

use App\Http\Controllers\Controller;
use App\Http\Requests\TypeBdsRequest;
use App\Models\Bds;
use App\Models\Type_bds;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TypeBdsController extends Controller
{
    private $v;
    public function __construct() //Khởi tạo một đối tượng; all đều o chay qua contruct
    {
        $this->v = [];
    }
    
    public function index(Request $request) {
        $type_bds = new Type_bds();
        $this->v['extParams'] = $request->all();
        $this->v['type_bds'] = $type_bds->loadListWithPager($this->v['extParams']);
        return view('admin.type_bds.list', $this->v);
    }

    //Thêm 
    public function add(TypeBdsRequest $request) {
        $method_route = "route_BackEnd_Tye_Bds_add";
        if ($request->isMethod('post')) {
            $params = [];
            $params['cols'] = $request->post();
            unset( $params['cols']['_token']);
         
            $modelTes = new Type_bds();
            $res = $modelTes->saveNew($params);
            if ($res == null) {
                return  redirect()->route($method_route);
            } elseif ($res > 0) {
                Session::flash('success','Thêm mới thành công loại BDS');
                return  redirect()->route('route_BackEnd_Type_Bds_index');
            } else {
                Session::flash('error','Lỗi thêm mới loại BDS ');
                return  redirect()->route($method_route);
            }
        }
        return view('admin.type_bds.add',$this->v);
    }

    public function edit($id, Request $request) {
        $modelNguoiDung = new Type_bds();
        $objItem = $modelNguoiDung->loadOne($id);
        $this->v['objItem'] = $objItem;
        return view('admin.type_bds.edit', $this->v);
    }

    public function update($id, TypeBdsRequest $request) {

        $method_route = "route_BackEnd_Tye_Bds_update";
        $params = [];

        $params['cols'] = $request->post();

        unset( $params['cols']['_token']);
        $params['cols']['id'] = $id;

        $modelNguoiDung = new Type_bds();
        $res = $modelNguoiDung->saveUpdate($params);
        if ($res == null) {
            return redirect()->route($method_route,['id'=>$id]);
        } elseif ($res == 1) {
            Session::flash('success','Cập nhât bản ghi' . $id .  "Thành công");
            return redirect()->route('route_BackEnd_Type_Bds_index');
        } else {
            Session::flash('error','Lỗi cập nhât bản ghi'.$id);
            return redirect()->route($method_route,['id'=>$id]);
        }
    }

    public function delete($id)
    {
        $delete = Type_bds::destroy($id);
        if (!$delete) {
            return redirect()->back();
        }

        return redirect()->route('route_BackEnd_Type_Bds_index')->with('success', 'Xóa thành công');
    }
}
