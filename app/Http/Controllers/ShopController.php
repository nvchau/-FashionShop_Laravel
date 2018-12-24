<?php

namespace App\Http\Controllers;

use App\Bill;
use App\BillDetails;
use App\Cart;
use App\Customer;
use App\productModel;
use App\slideModel;
use App\typeProduct;
use App\typeproductModel;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Session;

class ShopController extends Controller
{
     public function getHome(){
         $product = productModel::select('*')
                                ->where('id', '<=', '4')
                                ->get();
         $slide   = slideModel::select('*')->get();
         return view('page.home',compact('product', 'slide'));
     }
//    page. là tên thư mục chưa file home
    public function getProduct(){
        $product = productModel::select('*')->get();
        $typeproduct = typeproductModel::select('*')->get();
        return view('page.shop', compact('product', 'typeproduct'));
    }
    public function getProductsByID($id_type)
    {
        //Fillter product by id
        $product = productModel::where('id_type', $id_type)->paginate(6);
        $typeproduct = typeproductModel::all();
        return view('page.shop', compact('product', 'typeproduct'));
    }
    public function getProductsDetails(Request $req) {
        //Receive request and query sql
        $productDetails = productModel::where('id', $req->id)->first();
//        $productFeature = productModel::where('feature_id', 1)->get();
        return view('page.product-detail', compact('productDetails', 'productFeature'));
    }

//    public function getProductDetail($id){
//        $product = productModel::find($id);
//        return view('page.product-detail', compact('product'));
//    }

    public function getOrderComplete(){
        return view('page.order-complete');
    }
    public function getWishlist(){
        return view('page.wishlist');
    }

    public function getBlog(){
        return view('page.blog');
    }

    public function getAbout(){
        return view('page.about');
    }

    public function getContact(){
        return view('page.contact');
    }

//    public function getCart(){
//        $cart = cartModel::select('*')->get();
//        $product = productModel::select('*')
//            ->where('id', '<=', '4')
//            ->get();
//        return view('page.cart', compact('cart', 'product'));
//    }
    public function cart() {
        if (!Session::has('cart')) {return view('page.cart');
        }

        $oldCart = Session::get('cart');
        $cart    = new Cart($oldCart);
        return view('page.cart', ['cart' => Session::get('cart'), 'products_cart' => $cart->items, 'totalPrice' => $cart->totalPrice, 'totalQty' => $cart->totalQty]);
    }
    public function getAddtoCart(Request $req, $id) {
        $product = productModel::find($id);
        //Check cart Session
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        //Call contructor
        $cart = new Cart($oldCart);
        $cart->add($product, $id);
        //Put cart into session
        $req->session()->put('cart', $cart);
        return redirect()->route('cart');
    }
    public function reduceOne($id) {
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart    = new Cart($oldCart);
        $cart->reduceByOne($id);
        Session::put('cart', $cart);
        return redirect()->back();
    }
    public function increaseOne($id) {
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart    = new Cart($oldCart);
        $cart->increaseByOne($id);
        Session::put('cart', $cart);
        return redirect()->back();
    }
    public function removeItem($id) {
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart    = new Cart($oldCart);
        $cart->removeItem($id);
        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart', $id);
        }
        return redirect()->back();
    }

    public function getCheckout(){
        $cart = Session::get('cart');
        return view('page.checkout', ['cart' => Session::get('cart'), 'products_cart' => $cart->items]);
    }
    public function postCheckOut(Request $req) {
        $cart = Session::get('cart');

        $customer               = new Customer();
        $customer->name         = $req->c_fname;
        $customer->email        = $req->c_email_address;
        $customer->address      = $req->c_address;
        $customer->phone_number = $req->c_phone;
        $customer->note         = $req->c_order_notes;
        $customer->save();

        $bill              = new Bill();
        $bill->id_customer = $customer->id;
        $bill->date_order  = date('Y-m-d');
        $bill->total       = $cart->totalPrice;
        $bill->note        = $customer->note;
        $bill->save();

        foreach ($cart->items as $key => $value) {
            $bill_details             = new BillDetails();
            $bill_details->id_bill    = $bill->id;
            $bill_details->id_product = $key;
            $bill_details->quantity   = $value['qty'];
            $bill_details->unit_price = ($value['price']/$value['qty']);
            $bill_details->total      = $bill->total;
            $bill_details->save();
        }
        Session::forget('cart');
        return redirect('ordercomplete');

    }
//ajax thay đổi số tiền theo số lượng sản phẩm
    public function updateCart() {

        if (request()->ajax()) {
            $id = Request::get('id');
            $qty = Request::get('qty');
            Cart::update($id,$qty);
            echo "hihi";
        }
//        dd(request()->ajax());
    }
}
