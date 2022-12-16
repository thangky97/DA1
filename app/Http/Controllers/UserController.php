<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    private $v;
    public function __construct() //Khởi tạo một đối tượng; all đều o chay qua contruct
    {
        $this->v = [];
    }
    
    public function index(Request $request) {
        $users = new User();
        $this->v['extParams'] = $request->all();
        $this->v['users'] = $users->loadListWithPager($this->v['extParams']);
        return view('admin.user.list', $this->v);
    }

    public function add(UserRequest $request) {
        $method_route = "route_BackEnd_User_add";

        if ($request->isMethod('post')) {
            $params = [];
            $params['cols'] = $request->post();
            unset( $params['cols']['_token']);
         //   dd($params['cols']);
            if ($request->hasFile('cmt_mat_truoc') && $request->file('cmt_mat_truoc')->isValid())
            {
                $params['cols']['avatar'] = $this->uploadFile($request->file('cmt_mat_truoc'));
            }
            $modelTes = new User();
            $res = $modelTes->saveNew($params);
            if ($res == null) {
                return  redirect()->route($method_route);
            } elseif ($res > 0) {
                Session::flash('success','Thêm mới thành công BDS');
                return redirect()->route('route_BackEnd_User_index');
            } else {
                Session::flash('error','Lỗi thêm mới user ');
                return redirect()->route($method_route);
            }
        }
        return view('admin.user.add', $this->v);
    }

    public function edit($id, Request $request) {
        $modelNguoiDung = new User();
        $objItem = $modelNguoiDung->loadOne($id);
        $this->v['objItem'] = $objItem;
        return view('admin.user.edit', $this->v);
    }

    public function update($id, UserRequest $request) {

        $method_route = 'route_BackEnd_User_edit';
        $params = [];

        $params['cols'] = $request->post();

        if ($request->hasFile('cmt_mat_truoc') && $request->file('cmt_mat_truoc')->isValid())
            {
                $params['cols']['avatar'] = $this->uploadFile($request->file('cmt_mat_truoc'));
            }

        unset( $params['cols']['_token']);
        $params['cols']['id'] = $id;

        $modelNguoiDung = new User();
        $res = $modelNguoiDung->saveUpdate($params);
        if ($res == null) {
            return redirect()->route($method_route,['id'=>$id]);
        } elseif ($res == 1) {
            Session::flash('success','Cập nhât bản ghi' . $id .  "Thành công");
            return redirect()->route('route_BackEnd_User_index');
        } else {
            Session::flash('error','Lỗi cập nhât bản ghi'.$id);
            return redirect()->route($method_route,['id'=>$id]);
        }
    }

    public function uploadFile($file) {
        $fileName = time().'_'.$file->getClientOriginalName();
        return $file->storeAs('users',$fileName,'public');
    }

    public function delete($id)
    {
        $delete = User::destroy($id);
        if (!$delete) {
            return redirect()->back();
        }

        return redirect()->route('route_BackEnd_User_index')->with('success', 'Xóa thành công');
    }
}
