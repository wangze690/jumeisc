<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DingdanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       $data['address'] = $request->address_id;
       $data['user_id'] = session('id');
       $data['created_at'] = date('Y-m-d H:i:s');
       $data['status'] = 1;
       $data['bm'] = time().rand(100000,999999);
       $id =DB::table('dingdans')->insertGetId($data);
       foreach($request->data as $k=>$v){
            $tmp = [
            'dingdan_id'=> $id,
            'goods_id'=> $v['id'],
            'goods_num'=> $v['num']
            ];
            $goods[] = $tmp;
       }
       if(DB::table('dingdan_goods')->insert($goods)){
            return redirect('/dingdan/pay?did='.$data['bm']);
       }else{
        return back()->with('msg','订单创建失败！！');
       }
    }

    public function conform(Request $request)
    {

        //显示订单确认页面
        //读取用户的收货地址
        $shouhuodz = DB::table('shouhuodz')->where('user_id', session('id'))->get();
        foreach ($shouhuodz as $key => &$value){
            $value->pname = DB::table('areas')->where('id',$value->province)->value('area_name');
            $value->cname = DB::table('areas')->where('id',$value->city)->value('area_name');
            $value->xname = DB::table('areas')->where('id',$value->xian)->value('area_name');

        }

        $data = $request->data;
        $goodsData = [];
        $tootle = 0;
        foreach ($data as $key => $value) {
            if(isset($value['id'])){
                //读取用户的商品信息
                $goods = DB::table('carts')->where('id',$value['id'])->first();
                $goods->num = $value['num'];
                $goodsData[] = $goods;
                $tootle += $goods->num * $goods->goods_xj;

            }

        }
        //解析模板 分配数据
        return view('admin.order.conform',compact('shouhuodz','goodsData','tootle'));
        
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function pay(Request $request)
    {
        $did = $request->did;
        $dingdan = DB::table('dingdans')->where('bm',$did)->first();
        $goods = DB::table('dingdan_goods')->where('dingdan_id',$dingdan->id)->get();
        $tootle = 0;
        foreach ($goods as $key => $value) {
            $price = DB::table('carts')->where('id',$value->goods_id)->value('goods_xj');
            $tootle += $price * $value->goods_num;
            # code...
        }
        //支付
        return view('admin.order.zhifu',['tootle'=>$tootle]);
    }
}
