<?php

namespace App\Http\Controllers;

use App\Models\Tu_van;
use Illuminate\Http\Request;

class TuVanController extends Controller
{
    private $v;
    public function __construct() //Khởi tạo một đối tượng; all đều o chay qua contruct
    {
        $this->v = [];
    }
    
    public function index(Request $request) {
        $tu_van = new Tu_van();
        $this->v['extParams'] = $request->all();
        $this->v['tu_van'] = $tu_van->loadListWithPager($this->v['extParams']);
        return view('admin.tu_van.list', $this->v);
    }
}
