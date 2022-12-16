<?php

namespace App\Http\Controllers\New;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewRequest;
use App\Models\Category_new;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class NewController extends Controller
{
    private $v;
    public function __construct() //Khởi tạo một đối tượng; all đều o chay qua contruct
    {
        $this->v = [];
    }
    //Danh sách người dùng
    public function index(Request $request) {
        $new = new News();
        $this->v['extParams'] = $request->all();
        $this->v['news'] = $new->loadListWithPager($this->v['extParams']);
        return view('admin.new.list', $this->v);
    }

    //Thêm 
    public function add(NewRequest $request) {
        $method_route = "route_BackEnd_New_add";

        $cateNew = new Category_new();
        $this->v['list_cate_new'] = $cateNew->loadListWithPager();

        if ($request->isMethod('post')) {
            $params = [];
            $params['cols'] = $request->post();
            unset( $params['cols']['_token']);
         //   dd($params['cols']);
            if ($request->hasFile('cmt_mat_truoc') && $request->file('cmt_mat_truoc')->isValid())
            {
                $params['cols']['thumbnail_url'] = $this->uploadFile($request->file('cmt_mat_truoc'));
            }
            $modelTes = new News();
            $res = $modelTes->saveNew($params);
            if ($res == null) {
                return  redirect()->route($method_route);
            } elseif ($res > 0) {
                Session::flash('success','Thêm mới thành công người dùng');
                return redirect()->route('route_BackEnd_New_index');
            } else {
                Session::flash('error','Lỗi thêm mới người dùng ');
            }
        }
        return view('admin.new.add',$this->v);
    }

    public function edit($id, Request $request) {
        $modelNguoiDung = new News();
        $objItem = $modelNguoiDung->loadOne($id);
        $this->v['objItem'] = $objItem;
        return view('admin.new.edit', $this->v);
    }

    public function update($id, NewRequest $request) {

        $method_route = 'route_BackEnd_New_edit';
        $method_route1 = 'route_BackEnd_New_index';
        $params = [];

        $params['cols'] = $request->post();

        if ($request->hasFile('cmt_mat_truoc') && $request->file('cmt_mat_truoc')->isValid())
            {
                $params['cols']['thumbnail_url'] = $this->uploadFile($request->file('cmt_mat_truoc'));
            }

        unset( $params['cols']['_token']);
        $params['cols']['id'] = $id;

        $modelNguoiDung = new News();
        $res = $modelNguoiDung->saveUpdate($params);
        if ($res == null) {
            return redirect()->route($method_route,['id'=>$id]);
        } elseif ($res == 1) {
            Session::flash('success','Cập nhât bản ghi' . $id .  "Thành công");
            return redirect()->route('route_BackEnd_New_index');
        } else {
            Session::flash('error','Lỗi cập nhât bản ghi'.$id);
            return redirect()->route($method_route,['id'=>$id]);
        }
    }

    public function uploadFile($file) {
        $fileName = time().'_'.$file->getClientOriginalName();
        return $file->storeAs('news',$fileName,'public');
    }

    public function delete($id)
    {
        $delete = News::destroy($id);
        if (!$delete) {
            return redirect()->back();
        }

        return redirect()->route('route_BackEnd_New_index')->with('success', 'Xóa thành công');
    }
}
