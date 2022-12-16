<?php

namespace App\Http\Controllers\Bds;

use App\Http\Controllers\Controller;
use App\Http\Requests\BdsRequest;
use App\Models\Bds;
use App\Models\Type_bds;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BdsController extends Controller
{
    private $v;
    public function __construct() 
    {
        $this->v = [];
    }
    //Danh sách người dùng
    public function index(Request $request) {
        $test = new Bds();
        $this->v['extParams'] = $request->all();
        $this->v['bds'] = $test->loadListWithPager($this->v['extParams']);

        return view('admin.bds.list', $this->v);

    }

    public function changeStatus(Request $request)
    {
        $bds = Bds::find($request->id);
        $bds->status = $request->status;
        $bds->save();
        return response()->json(['success' => 'Status change successfully.']);
    }

    //Thêm 
    public function add(BdsRequest $request) {
        $method_route = "route_BackEnd_Bds_add";

        $typeBds = new Type_bds();
        $this->v['list_type_bds'] = $typeBds->loadListWithPager();

        if ($request->isMethod('post')) {
            $params = [];
            $params['cols'] = $request->post();
            unset( $params['cols']['_token']);
         
            if ($request->hasFile('cmt_mat_truoc') && $request->file('cmt_mat_truoc')->isValid())
            {
                $params['cols']['images'] = $this->uploadFile($request->file('cmt_mat_truoc'));
            }
            $modelTes = new Bds();
            $res = $modelTes->saveNew($params);
            if ($res == null) {
                return  redirect()->route($method_route);
            } elseif ($res > 0) {
                Session::flash('success','Thêm mới thành công BDS');
                return redirect()->route('route_BackEnd_Bds_index');
            } else {
                Session::flash('error','Lỗi thêm mới BDS ');
                return redirect()->route($method_route);
            }
        }
        return view('admin.bds.add', $this->v);
    }

    public function edit($id, Request $request) {
        $modelNguoiDung = new Bds();
        $objItem = $modelNguoiDung->loadOne($id);
        $this->v['objItem'] = $objItem;
        return view('admin.bds.edit', $this->v);
    }

    public function update($id, BdsRequest $request) {

        $method_route = 'route_BackEnd_Bds_edit';
        $params = [];

        $params['cols'] = $request->post();

        if ($request->hasFile('cmt_mat_truoc') && $request->file('cmt_mat_truoc')->isValid())
        {
            $params['cols']['images'] = $this->uploadFile($request->file('cmt_mat_truoc'));
        }

        unset( $params['cols']['_token']);
        $params['cols']['id'] = $id;

        $modelNguoiDung = new Bds();
        $res = $modelNguoiDung->saveUpdate($params);
        if ($res == null) {
            return redirect()->route($method_route,['id'=>$id]);
        } elseif ($res == 1) {
            Session::flash('success','Cập nhât bản ghi' . $id .  "Thành công");
            return redirect()->route('route_BackEnd_Bds_index');
        } else {
            Session::flash('error','Lỗi cập nhât bản ghi'.$id);
            return redirect()->route($method_route,['id'=>$id]);
        }
    }

    public function uploadFile($file) {
        $fileName = time().'_'.$file->getClientOriginalName();
        return $file->storeAs('Bds',$fileName,'public');
    }

    public function delete($id)
    {
        $delete = Bds::destroy($id);
        if (!$delete) {
            return redirect()->back();
        }

        return redirect()->route('route_BackEnd_Bds_delete')->with('success', 'Xóa thành công');
    }
}
