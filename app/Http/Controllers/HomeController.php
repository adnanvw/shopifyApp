<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OhMyBrew\ShopifyApp\Models\Shop;
use OhMyBrew\ShopifyApp\Facades\ShopifyApp;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr=array('shopifyStores'=>"storefront-shoppify.myshopify.com",'product'=>array('productTitle'=>'xzxzxzx','productSku'=>544546,'productDescription'=>'gvxc cxhcxjh zxccxxz gvzxcj nb nzcx gv zxcvxzvn cx vz cxzxjv zx bczxvcz cgxv z cxgvb zxc z c',
      'productPrice'=>500,'productImage'=>'https://www.jqueryscript.net/images/jQuery-Plugin-To-Show-A-Popup-Only-Once-Per-Visitor-First-Visit-Popup.jpg'));
        $this->createShopifyProduct($arr);
        return view('/dashboard');
    }

    public function createShopifyProduct($pram=[])
    {
        $product_ar=$pram['product'];
        $products= [];
        if (isset($product_ar['productTitle'])) {
            $products['title']=$product_ar['productTitle'];
        }

        if (isset($product_ar['productSku'])) {
            $products['handle']=$product_ar['productSku'];
        }

        if (isset($product_ar['productDescription'])) {
            $products['body_html']=$product_ar['productDescription'];
        }


        if (isset($product_ar['productPrice'])) {
            $products['variants']= array(array('price'=>$product_ar['productPrice']));
        }
        if (isset($product_ar['productImage'])) {
            $products['images']= array(array('src'=>$product_ar['productImage']));
        }
        if ($products) {
            if ($pram['shopifyStores']) {
                $shop= ShopifyApp::shop_get($pram['shopifyStores']);
                $shopdata=$shop->api()->request('POST', '/admin/products.json', ['product'=>$products]);
                //  print_r($shopdata);
            }
        }
    }
}
