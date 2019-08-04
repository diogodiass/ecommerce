<?php 

use Hcode\Page;
use Hcode\Model\Product;	
use Hcode\Model\Category;
<<<<<<< HEAD
use Hcode\Model\Cart;
=======
>>>>>>> 290e9c4f3df2887f0e7e104fbc9890def8c891b8

$app->get("/", function(){

	$products = Product::listAll();
	
	$page = new Page();

	$page->setTpl("index",[
		'products'=>Product::checkList($products)
	]);
});


<<<<<<< HEAD
$app->get("/categories/:idcategory", function($idcategory)
{
=======
$app->get("/categories/:idcategory", function($idcategory){
>>>>>>> 290e9c4f3df2887f0e7e104fbc9890def8c891b8
	
	$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;

	$category = new Category();

	$category->get((int)$idcategory);

	$pagination = $category->getProductsPage($page);

	$pages = [];

	for ($i=1; $i <= $pagination['pages']; $i++) { 
<<<<<<< HEAD

=======
>>>>>>> 290e9c4f3df2887f0e7e104fbc9890def8c891b8
		array_push($pages, [
			'link'=>'/categories/'.$category->getidcategory().'?page='.$i,
			'page'=>$i
		]);
<<<<<<< HEAD

	}
	$page = new Page();

=======
	}
	$page = new Page();
	
>>>>>>> 290e9c4f3df2887f0e7e104fbc9890def8c891b8
	$page->setTpl("category", [
		'category'=>$category->getValues(),
		'products'=>$pagination["data"],
		'pages'=>$pages
	]);
});

<<<<<<< HEAD

$app->get("/products/:desurl", function($desurl){

	$product = new Product();

	$product->getFromUrl($desurl);

	$page = new Page();

	$page->setTpl("product-detail",[
		'product'=>$product->getValues(),
		'categories'=>$product->getCategories()
	]);

});

$app->get("/cart", function(){
	
	$cart = Cart::getFromSession();

	$page = new Page();
	
	$page->setTpl("cart");


}); 

=======
>>>>>>> 290e9c4f3df2887f0e7e104fbc9890def8c891b8
?>