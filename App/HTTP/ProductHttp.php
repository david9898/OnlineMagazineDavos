<?php

namespace app\http;


use app\repository\ColorRepositoryInterface;
use app\repository\ImageRepositoryInterface;
use app\repository\SecurityRepository;
use app\repository\TypeRepositoryInterface;
use app\services\ProductServiceInterface;
use app\wrapper\FileWrapper;
use app\wrapper\GetWrapper;
use app\wrapper\PostWrapper;
use app\wrapper\SessionWrapper;
use Couchbase\Exception;

class ProductHttp extends HttpAbstract
{
    private $productService;
    private $getArr;
    private $postArr;
    private $fileArr;
    private $sessionArr;

    public function __construct(ProductServiceInterface $productService,
                                GetWrapper $getArr,
                                PostWrapper $postArr,
                                FileWrapper $fileArr,
                                SessionWrapper $sessionArr)
    {
        $this->productService = $productService;
        $this->getArr = $getArr;
        $this->postArr = $postArr;
        $this->fileArr = $fileArr;
        $this->sessionArr = $sessionArr;
    }

    public function insertProduct(ColorRepositoryInterface $colorRepo, TypeRepositoryInterface $typeRepo)
    {
        if ( $this->sessionArr->getSessionElement('status') === 'admin' ) {
            try {
                if ( $this->postArr->checkIfExists('add_product_button') ) {
                    $this->productService->insertProduct($this->postArr->getArray(), $this->fileArr->getAllFiles());

                    $this->redirect('/home');
                }else {
                    $colors = $colorRepo->getAllColors();
                    $types = $typeRepo->getAllTypes();

                    $data = [];
                    $data['colors'] = $colors;
                    $data['types'] = $types;

                    $this->render('Products/addProduct', $data);
                }
            }catch (\Exception $e) {
                $data = [];
                $data['error'] = $e->getMessage();
                $this->render('Products/addProduct', $data);
            }
        }else {

        }
    }

    public function pageProducts()
    {
        try {
            $data = [];
            $data['pagination'] = $this->productService->getProductForPagination($this->getArr->getArr(), $this->postArr->getArray(), $this->sessionArr);

            $this->render('Products/pageView', $data);
        }catch (\Exception $e) {
            $data = [];
            $data['error'] = $e->getMessage();
            $this->render('Products/pageView', $data);
        }
    }

    public function productDetails(ImageRepositoryInterface $imageRepo)
    {
        try {
            $data = [];
            $productData = $this->productService->getProductById($this->getArr->getElement('id'));
            $productImages = $imageRepo->getImageForProduct($this->getArr->getElement('id'));
            $data['product'] = $productData;
            $data['images'] = $productImages;

            $this->render('Products/productDetails', $data);
        }catch (\Exception $e) {
            $data['error'] = $e->getMessage();
            $this->render('Products/productDetails', $data);
        }
    }

    public function buyProduct(\app\repository\SecurityRepositoryInterface $secRepo)
    {
        if ( $this->sessionArr->checkSessionExists('status') ) {

        }else {
            try {
                if ( $this->postArr->checkIfExists('buy_product_form_submit') ) {
                    if ($this->postArr->checkIfExists($this->sessionArr->getSessionElement('trueAnswer')) ) {
                        $this->productService->buyProduct($this->getArr->getElement('id'), $this->postArr->getArray());
                        echo '<script>document.location.href = "http://localhost:82/OnlineMagazine/home"</script>';
                    }else {
                        $data['error'] = 'Не сте отговорили правилно на въпроса!!!';
                        $data['answers'] = ProductHttp::generateSecurityImages($secRepo);
                        $data['dimentions'] = $this->productService->getProductDimentions($this->getArr->getElement('id'));
                        $this->render('Products/buyProductNoRegister', $data);
                    }
                }else {
                    $data['dimentions'] = $this->productService->getProductDimentions($this->getArr->getElement('id'));
                    $data['answers'] = ProductHttp::generateSecurityImages($secRepo);
                    $this->render('Products/buyProductNoRegister', $data);
                }
            } catch (\Exception $e) {
                $data['error'] = $e->getMessage();
                $data['dimentions'] = $this->productService->getProductDimentions($this->getArr->getElement('id'));
                $data['answers'] = ProductHttp::generateSecurityImages($secRepo);
                $this->render('Products/buyProductNoRegister', $data);
            }
        }
    }

    public static function generateSecurityImages(\app\repository\SecurityRepositoryInterface $secRepo): array
    {
        $firstNum  = $secRepo->getFirstId()->getId();
        $secondNum = $secRepo->getLastId()->getId();

        $rand1 = rand($firstNum, $secondNum);
        
        if ( (int)$rand1 === (int)$firstNum ) {
            $rand2 = $rand1 + 1;
            $rand3 = $rand1 + 2;
            $rand4 = $rand1 + 3;
        }else if ( (int)$rand1 === (int)$secondNum ) {
            $rand2 = $rand1 - 1;
            $rand3 = $rand1 - 2;
            $rand4 = $rand1 - 3;
        }else {
            $rand2 = $rand1 + 1;
            $rand3 = $rand1 - 1;
            if ( (int)$rand1 + 2 <= (int)$secondNum ) {
                $rand4 = $rand1 + 2;
            }else if ( (int)$rand1 - 2 >= (int)$firstNum ) {
                $rand4 = $rand1 - 2;
            }else {
                $rand4 = $rand1 + 2;
            }
        }

        $data = [];
        $data[] = $secRepo->getSecurityPicture($rand1);
        $data[] = $secRepo->getSecurityPicture($rand2);
        $data[] = $secRepo->getSecurityPicture($rand3);
        $data[] = $secRepo->getSecurityPicture($rand4);

        return $data;
    }
}