<?php

namespace App\Http\Controllers;

use App\Models\Bds;
use App\Models\News;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    private $v;
    public function __construct() //Khởi tạo một đối tượng; all đều o chay qua contruct
    {
        $this->v = [];
    }
    //home
    public function show(Request $request) {
        $bds = new Bds();
        $new = new News();
        $this->v['extParams'] = $request->all();
        $this->v['bds'] = $bds->loadListWithPager($this->v['extParams']);
        $this->v['news'] = $new->loadListWithPager($this->v['extParams']);
        return view('client.layouts.home', $this->v);
    }

    public function list(Request $request) {
        $shop = new Bds();
        $this->v['extParams'] = $request->all();
        $this->v['list'] = $shop->loadList($this->v['extParams']);
        return view('client.layouts.list', $this->v);
    }

    public function detail($id, Request $request) {
        $detail = new Bds();
        $objItem = $detail->loadOne($id);
        $this->v['objItem'] = $objItem;
        return view('client.layouts.detail', $this->v);
    }

    // public function new(Request $request) {
    //     $new = new News();
    //     $this->v['extParams'] = $request->all();
    //     $this->v['news'] = $new->loadListWithPager($this->v['extParams']);
    //     return view('client.layouts.home', $this->v);
    // }

    public function contact(Request $request) {
        // $shop = new Bds();
        // $this->v['extParams'] = $request->all();
        // $this->v['shop'] = $shop->loadListWithPager($this->v['extParams']);
        return view('client.layouts.contact', $this->v);
    }

    public function new(Request $request) {
        $new = new News();
        $this->v['extParams'] = $request->all();
        $this->v['news'] = $new->loadListWithPager($this->v['extParams']);
        return view('client.layouts.new', $this->v);
    }

    public function detail_new($id, Request $request) {
        $detail = new News();
        $objItem = $detail->loadOne($id);
        $this->v['objItem'] = $objItem;
        return view('client.layouts.detailNew', $this->v);
    }

}
