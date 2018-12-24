<?php

namespace App\Http\Controllers;

use App\accountModel;
use App\cartModel;
use App\productModel;
use App\slideModel;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Validator;
use WindowsAzure\Common\Internal\Validate;//thư viện đăng nhập

class AdminController extends Controller
{
    //Đăng nhập
    public function getLoginAdmin() {
        return view('admin.login');
    }
//    public function postLoginAdmin(Request $request) {
//        $this->validate($request, [
//            'email'=>'required',
//            'passwork'=>'required|min:3|max:32'
//            ],[
//                'email.required'=>'Bạn chưa nhập Username',
//                'password.required'=>'Bạn chưa nhập Password',
//                'password.min'=>'Password không được nhỏ hơn 3 ký tự',
//                'password.max'=>'Password không được lớn hơn 32 ký tự'
//            ]
//        );
//
//        if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
//            return redirect('admin/index');
//        } else {
//            return redirect('admin/login')->with('thongbao','Đăng nhập không thành công!');
//        }
//    }
    //đăng xuất
//    public function getLogoutAdmin() {
//        Auth::logout();
//        return view('admin.login');
//    }

    public function getAdmin(){
        $product = productModel::select('*')->get();
        return view('admin.admin', compact('product'));
    }

    public function getProduct(){
        $product = productModel::select('*')->get();
        return view('admin.product-list', compact('product'));
    }
    //xóa sản phẩm
    public function postDeleteProduct($id)
    {
        $product = productModel::find($id);

        $product->delete();
        return redirect('admin/product-list');
    }
    //sửa sản phẩm
    public function getEditproduct($id)
    {
        $edit_product = productModel::find($id);
        return view('admin.editproduct',compact('edit_product'));
    }
    public function postEditproduct(Request $Request,$id)
    {
        $edit_product = productModel::find($id);
        $edit_product->id_type = $Request->id_type;
        $edit_product->ten = $Request->ten;
        $edit_product->gia = $Request->gia;
        $edit_product->moTa = $Request->moTa;
//        $edit_product->linkAnh = $Request->linkAnh;

        if ($Request->hasFile('anh')) {
            $anh = $Request->anh;
            $anh -> move(public_path('/shop/images/'), $anh->getClientOriginalName());
            $link = 'shop/images/'.$anh->getClientOriginalName();
            $edit_product->linkAnh = $link;
        } else {
            $edit_product->linkAnh = $edit_product->linkAnh;
        }

        $edit_product->save();
        return redirect()->route('product-list')-> with(['flash_level'=>'success','flash_message'=>'Sửa sản phẩm thành công!']);
    }

    public function getProfile(){
        return view('admin.influencer-profile');
    }

    public function getAddProduct(){
        return view('admin.addproduct');
    }
    //thêm sản phẩm
    public function postAddproduct(Request $Request)
    {
        $product = new productModel();
        $product->id_type = $Request->id_type;
        $product->ten = $Request->ten;
        $product->gia = $Request->gia;
        $product->moTa = $Request->moTa;
//        $product->linkAnh = $Request->linkAnh;

//      Procces upload file
        if ($Request->hasFile('anh')) {
            $anh = $Request->anh;
//            kiểm tra xem file cừa up lên có phải file jpg(png) hay không
//            if ($anh->getClientOriginalExtension('anh') == 'JPG')
//            {
//                //đoạn code thực thi
//            }
            $anh -> move(public_path('/shop/images/'), $anh->getClientOriginalName());
            $link = 'shop/images/'.$anh->getClientOriginalName();
            $product->linkAnh = $link;
        } else {
            $product->linkAnh = $product->linkAnh;
        }

        $product->save();
        return redirect()->route('addproduct')-> with(['flash_level'=>'success','flash_message'=>'Thêm sản phẩm thành công!']);
    }
}
