<?php

namespace Project\Controllers;

class ProductController extends \Core\Controller
{


    private array $products = [
 1 => [
'name'     => 'product1',
'price'    => 100,
'quantity' => 5,
'category' => 'category1',
],
2 => [
'name'     => 'product2',
'price'    => 200,
'quantity' => 6,
'category' => 'category2',
],
3 => [
'name'     => 'product3',
'price'    => 300,
'quantity' => 7,
'category' => 'category2',
],
4 => [
'name'     => 'product4',
'price'    => 400,
'quantity' => 8,
'category' => 'category3',
],
5 => [
'name'     => 'product5',
'price'    => 500,
'quantity' => 9,
'category' => 'category3',
],
];

//    public function show($params)
//    {
//        $arr = $this->products[$params['n']];
//        return $this->render('product/show',$arr);
//    }

    public function all()
    {
        $this->title =  'Product';
        return $this->render('product/all',['arrs' =>  $this->products]);
    }


}