<?php

namespace App\Http\Controllers\New;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryNewRequest;
use App\Models\Category_new;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryNewController extends Controller
{
    private $v;
    public function __construct() //Khởi tạo một đối tượng; all đều o chay qua contruct
    {
        $this->v = [];
    }
    
    public function index(Request $request) {
        $cate_new = new Category_new();
        $this->v['extParams'] = $request->all();
        $this->v['cate_new'] = $cate_new->loadListWithPager($this->v['extParams']);
        return view('admin.cate_new.list', $this->v);
    }

    //Thêm 
    public function add(CategoryNewRequest $request) {
        $method_route = "route_BackEnd_Cate_New_add";
        if ($request->isMethod('post')) {
            $params = [];
            $params['cols'] = $request->post();
            unset( $params['cols']['_token']);
         
            $modelTes = new Category_new();
            $res = $modelTes->saveNew($params);
            if ($res == null) {
                return  redirect()->route($method_route);
            } elseif ($res > 0) {
                Session::flash('success','Thêm mới thành công danh mục bài viết');
                return  redirect()->route('route_BackEnd_Cate_New_index');
            } else {
                Session::flash('error','Lỗi thêm mới danh mục bài viết');
                return  redirect()->route($method_route);
            }
        }
        return view('admin.cate_new.add',$this->v);
    }

    public function edit($id, Request $request) {
        $modelNguoiDung = new Category_new();
        $objItem = $modelNguoiDung->loadOne($id);
        $this->v['objItem'] = $objItem;
        return view('admin.cate_new.edit', $this->v);
    }

    public function update($id, CategoryNewRequest $request) {

        $method_route = "route_BackEnd_Cate_New_update";
        $params = [];

        $params['cols'] = $request->post();

        unset( $params['cols']['_token']);
        $params['cols']['id'] = $id;

        $modelNguoiDung = new Category_new();
        $res = $modelNguoiDung->saveUpdate($params);
        if ($res == null) {
            return redirect()->route($method_route,['id'=>$id]);
        } elseif ($res == 1) {
            Session::flash('success','Cập nhât bản ghi' . $id .  "Thành công");
            return redirect()->route('route_BackEnd_Cate_New_index');
        } else {
            Session::flash('error','Lỗi cập nhât bản ghi'.$id);
            return redirect()->route($method_route,['id'=>$id]);
        }
    }

    public function delete($id)
    {
        $delete = Category_new::destroy($id);
        if (!$delete) {
            return redirect()->back();
        }

        return redirect()->route('route_BackEnd_Cate_New_index')->with('success', 'Xóa thành công');
    }
}
