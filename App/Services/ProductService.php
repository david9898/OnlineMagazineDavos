<?php

namespace app\services;


use app\data\PaginationDTO;
use app\data\ProductDTO;
use app\repository\ProductRepositoryInterface;
use app\wrapper\SessionWrapper;
use mysql_xdevapi\Exception;
use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

class ProductService implements ProductServiceInterface
{
    private $productRepo;

    public function __construct(ProductRepositoryInterface $productRepo)
    {
        $this->productRepo = $productRepo;
    }

    public function insertProduct(array $postArr, array $fileArr): bool
    {
        if ( !isset($postArr['add_product_S']) || empty($postArr['add_product_S']) ) {
            $smallDim = 0;
        }else {
            $smallDim = $postArr['add_product_S'];
        }
        
        if ( !isset($postArr['add_product_M']) || empty($postArr['add_product_M']) ) {
            $mediumDim = 0;
        }else {
            $mediumDim = $postArr['add_product_M'];
        }
        
        if ( !isset($postArr['add_product_L']) || empty($postArr['add_product_L']) ) {
            $largeDim = 0;
        }else {
            $largeDim = $postArr['add_product_L'];
        }
        
        if ( !isset($postArr['add_product_XL']) || empty($postArr['add_product_XL']) ) {
            $extraLargeDim = 0;
        }else {
            $extraLargeDim = $postArr['add_product_XL'];
        }
        
        if ( !isset($postArr['add_product_34']) || empty($postArr['add_product_34']) ) {
            $dim34 = 0;
        }else {
            $dim34 = $postArr['add_product_34'];
        }
        
        if ( !isset($postArr['add_product_35']) || empty($postArr['add_product_35']) ) {
            $dim35 = 0;
        }else {
            $dim35 = $postArr['add_product_35'];
        }
        
        if ( !isset($postArr['add_product_36']) || empty($postArr['add_product_36']) ) {
            $dim36 = 0;
        }else {
            $dim36 = $postArr['add_product_36'];
        }
        
        if ( !isset($postArr['add_product_37']) || empty($postArr['add_product_37']) ) {
            $dim37 = 0;
        }else {
            $dim37 = $postArr['add_product_37'];
        }
        
        if ( !isset($postArr['add_product_38']) || empty($postArr['add_product_38']) ) {
            $dim38 = 0;
        }else {
            $dim38 = $postArr['add_product_38'];
        }
        
        if ( !isset($postArr['add_product_39']) || empty($postArr['add_product_39']) ) {
            $dim39 = 0;
        }else {
            $dim39 = $postArr['add_product_39'];
        }
        
        if ( !isset($postArr['add_product_40']) || empty($postArr['add_product_40']) ) {
            $dim40 = 0;
        }else {
            $dim40 = $postArr['add_product_40'];
        }
        
        if ( !isset($postArr['add_product_41']) || empty($postArr['add_product_41']) ) {
            $dim41 = 0;
        }else {
            $dim41 = $postArr['add_product_41'];
        }
        
        if ( !isset($postArr['add_product_42']) || empty($postArr['add_product_42']) ) {
            $dim42 = 0;
        }else {
            $dim42 = $postArr['add_product_42'];
        }
        
        if ( !isset($postArr['add_product_43']) || empty($postArr['add_product_43']) ) {
            $dim43 = 0;
        }else {
            $dim43 = $postArr['add_product_43'];
        }
        
        if ( !isset($postArr['add_product_44']) || empty($postArr['add_product_44']) ) {
            $dim44 = 0;
        }else {
            $dim44 = $postArr['add_product_44'];
        }
        
        if ( !isset($postArr['add_product_45']) || empty($postArr['add_product_45']) ) {
            $dim45 = 0;
        }else {
            $dim45 = $postArr['add_product_45'];
        }
        
        if ( !isset($postArr['add_product_46']) || empty($postArr['add_product_46']) ) {
            $dim46 = 0;
        }else {
            $dim46 = $postArr['add_product_46'];
        }
        
        $product = new ProductDTO();
        $product->setPrice($postArr['add_product_price']);
        $product->setColor($postArr['add_product_color']);
        $product->setType($postArr['add_product_type']);
        $product->setSmallDimention($smallDim);
        $product->setMediumDimention($mediumDim);
        $product->setLargeDimention($largeDim);
        $product->setExtraLargeDimention($extraLargeDim);
        $product->setDescription($postArr['add_product_description']);
        $product->setSex($postArr['add_product_sex']);
        $product->setPromotionPercent($postArr['add_product_promotion_percent']);
        $product->setPromotion($postArr['add_product_promotion']);
        $product->setDimention34($dim34);
        $product->setDimention35($dim35);
        $product->setDimention36($dim36);
        $product->setDimention37($dim37);
        $product->setDimention38($dim38);
        $product->setDimention39($dim39);
        $product->setDimention40($dim40);
        $product->setDimention41($dim41);
        $product->setDimention42($dim42);
        $product->setDimention43($dim43);
        $product->setDimention44($dim44);
        $product->setDimention45($dim45);
        $product->setDimention46($dim46);
        

        $countImages = count($fileArr['images']['name']);

        if ( $countImages > 4 ) {
            throw new \Exception('Максималния брой снимки е 4');
        }

        if ( $countImages < 2 ) {
            throw new Exception('Минималния брой снимки е 2');
        }

        for ($i = 0; $i < $countImages; $i++) {
            $fileName = $fileArr['images']['name'][$i];
            $fileTmpName = $fileArr['images']['tmp_name'][$i];
            $fileSize = $fileArr['images']['size'][$i];
            $fileError = $fileArr['images']['error'][$i];
            $fileType = $fileArr['images']['type'][$i];
            $validExt = ['jpg', 'jpeg', 'png', 'gif'];

            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));

            if ( !in_array($fileActualExt, $validExt) ) {
                throw new \Exception('Не може да изпращате файлове от този тип');
            }

            if ( $fileError !== 0 ) {
                throw new \Exception('Възникна грешка по време на изпращане');
            }

            if ( $fileSize > 10000000 ) {
                throw new \Exception('Размера на ' . $i . ' е твърде голям');
            }

            $rand1 = rand(100, 10000);
            $rand2 = rand(100, 10000);
            $rand3 = chr(rand(100, 120));
            $rand4 = chr(rand(100, 120));
            $rand5 = chr(rand(100, 120));

            $newName = md5($rand1 . $rand2 . $rand3 . $rand4 . $rand5);

            $newFileName = $newName . '.' . $fileActualExt;

            $image = imagecreatefromjpeg($fileTmpName);

            $scaled = imagescale($image, 1024, 768);

            imagejpeg($scaled, 'Images/' . $newFileName);

            if ( $i === 0 ) {
                $product->setFrontImage1($newFileName);
            }

            if ( $i === 1 ) {
                $product->setFrontImage2($newFileName);
            }

            if ( $i === 2 ) {
                $image3 = $newFileName;
            }

            if ( $i === 3 ) {
                $image4 = $newFileName;
            }
        }

        $this->productRepo->insertProduct($product, $image3, $image4);

        return true;
    }

    public function getProductForPagination(array $getArr, array $postArr): PaginationDTO
    {
        $page = $getArr['page'];

        if ( $getArr['sex'] === 'mens' ) {
            $sex = 'Male';
        }else if ( $getArr['sex'] === 'women' ) {
            $sex = 'Female';
        }

        if ( isset($_SESSION['search_params']['sex']) ) {
            if ( $sex != $_SESSION['search_params']['sex']) {
                unset($_SESSION['search_params']);
            }
        }

        switch ( $getArr['type'] ) {
            case 'pants':
                $type = 1;
                break;
            case 'shoes':
                $type = 2;
                break;
            case 'suits':
                $type = 3;
                break;
            case 't-shirts':
                $type = 4;
                break;
            case 'sunglasses':
                $type = 5;
                break;
        }

        if ( isset($_SESSION['search_params']['type']) ) {
            if ( $type != $_SESSION['search_params']['type'] ) {
                unset($_SESSION['search_params']);
            }
        }

        $_SESSION['search_params']['sex']  = $sex;
        $_SESSION['search_params']['type'] = $type;

        if ( isset($postArr['search_form']) ) {
            $colors = null;
            $dimentions = null;

            if (isset($postArr['small'])) {
                $dimentions[] = 'smallDimention';
            }
            if (isset($postArr['medium'])) {
                $dimentions[] = 'mediumDimention';
            }
            if (isset($postArr['large'])) {
                $dimentions[] = 'largeDimention';
            }
            if (isset($postArr['extra_large'])) {
                $dimentions[] = 'extraLargeDimention';
            }
            if (isset($postArr['dimention_34'])) {
                $dimentions[] = 'dimention34';
            }
            if (isset($postArr['dimention_35'])) {
                $dimentions[] = 'dimention35';
            }
            if (isset($postArr['dimention_36'])) {
                $dimentions[] = 'dimention36';
            }
            if (isset($postArr['dimention_37'])) {
                $dimentions[] = 'dimention37';
            }
            if (isset($postArr['dimention_38'])) {
                $dimentions[] = 'dimention38';
            }
            if (isset($postArr['dimention_39'])) {
                $dimentions[] = 'dimention39';
            }
            if (isset($postArr['dimention_40'])) {
                $dimentions[] = 'dimention40';
            }
            if (isset($postArr['dimention_41'])) {
                $dimentions[] = 'dimention41';
            }
            if (isset($postArr['dimention_42'])) {
                $dimentions[] = 'dimention42';
            }
            if (isset($postArr['dimention_43'])) {
                $dimentions[] = 'dimention43';
            }
            if (isset($postArr['dimention_44'])) {
                $dimentions[] = 'dimention44';
            }
            if (isset($postArr['dimention_45'])) {
                $dimentions[] = 'dimention45';
            }            
            if (isset($postArr['dimention_46'])) {
                $dimentions[] = 'dimention46';
            }
            
            if (isset($postArr['white'])) {
                $colors[] = 1;
            }
            if (isset($postArr['blue'])) {
                $colors[] = 2;
            }
            if (isset($postArr['red'])) {
                $colors[] = 3;
            }
            if (isset($postArr['grey'])) {
                $colors[] = 4;
            }
            if (isset($postArr['black'])) {
                $colors[] = 5;
            }
            if (isset($postArr['purple'])) {
                $colors[] = 6;
            }

            if (!empty($postArr['amount1']) && $postArr['amount1'] !== null) {
                $priceMin = $postArr['amount1'];
            } else {
                $priceMin = null;
            }
            if (!empty($postArr['amount2']) && $postArr['amount1'] !== null) {
                $priceMax = $postArr['amount2'];
            } else {
                $priceMax = null;
            }
            
            if ( $priceMin === null ) {
                if ( !empty($_SESSION['search_params']['priceMin']) ) {
                    $priceMin = $_SESSION['search_params']['priceMin'];
                }
            }
            if ( $priceMax === null ) {
                if ( !empty($_SESSION['search_params']['priceMax']) ) {
                    $priceMax = $_SESSION['search_params']['priceMax'];
                }
            }

            $_SESSION['search_params']['priceMin'] = $priceMin;
            $_SESSION['search_params']['priceMax'] = $priceMax;
            $_SESSION['search_params']['colors'] = $colors;
            $_SESSION['search_params']['dimentions'] = $dimentions;

            header("Location: " . 'http://localhost:82/OnlineMagazine/' . $_GET['sex'] . '/' . $_GET['type'] . '/' . 1 );
        }else {
            if ( !isset($_SESSION['search_params']['priceMin']) ) {
                $_SESSION['search_params']['priceMin'] = null;
            }
            if ( !isset($_SESSION['search_params']['priceMax']) ) {
                $_SESSION['search_params']['priceMax'] = null;
            }
            if ( !isset($_SESSION['search_params']['colors']) ) {
                $_SESSION['search_params']['colors'] = null;
            }
            if ( !isset($_SESSION['search_params']['dimentions']) ) {
                $_SESSION['search_params']['dimentions'] = null;
            }
        }


        $pageProducts = $this->productRepo->getProductsForPagination($page, $sex, $type, $_SESSION['search_params']['priceMin'], $_SESSION['search_params']['priceMax'],
                                                                    $_SESSION['search_params']['colors'], $_SESSION['search_params']['dimentions']);

        $pageAll = $this->productRepo->getCount($page, $sex, $type, $_SESSION['search_params']['priceMin'], $_SESSION['search_params']['priceMax'],
                                                $_SESSION['search_params']['colors'], $_SESSION['search_params']['dimentions']);
        $pagination = new PaginationDTO();
        $pagination->setAllPages($pageAll);
        $pagination->setProductArr($pageProducts);
        $pagination->setCurrentPage($getArr['page']);

        return $pagination;
    }

    public function getProductById(int $id): ProductDTO
    {
        $this->productRepo->addProductView($id);

        return $this->productRepo->getProductById($id);
    }

    public function addProductSale(int $id): bool
    {
        $this->productRepo->addProductSale($id);

        return true;
    }
    
    public function buyProduct(int $id, array $postArr): bool {
        
        $productData = $this->productRepo->getProductById($id);
        
        if ( !isset($postArr['buy_product_name']) || empty($postArr['buy_product_name']) ) {
            throw new \Exception('Трябва да попълните вашето име');
        }
        
        if ( !isset($postArr['buy_product_last_name']) || empty($postArr['buy_product_last_name']) ) {
            throw new \Exception('Трябва да попълните вашата фамилия');
        }
        
        if ( !isset($postArr['buy_product_phone']) || empty($postArr['buy_product_phone']) ) {
            throw new \Exception('Трябва да попълните вашия телефон');
        }
        
        if ( !isset($postArr['buy_product_town']) || empty($postArr['buy_product_town']) ) {
            throw new \Exception('Трябва да попълните вашия град');
        }
        
        if ( !isset($postArr['buy_product_address']) || empty($postArr['buy_product_address']) ) {
            throw new \Exception('Трябва да попълните вашия адрес');
        }
        
        if ( !isset($postArr['dimention']) || empty($postArr['dimention']) ) {
            throw new \Exception('Трябва да изберете размер');
        }
        
        $message = '<div><img src="http://localhost:82/OnlineMagazine/Images/' . $productData->getFrontImage1() . '" width=350 height=250></div>'
                . '<p>Име: ' . $postArr['buy_product_name'] . '</p>'
                . '<p>Фамилия: ' . $postArr['buy_product_last_name'] . '</p>'
                . '<p>Телефон: ' . $postArr['buy_product_phone'] . '</p>'
                . '<p>Град: ' . $postArr['buy_product_town'] . '</p>'
                . '<p>Адрес: ' . $postArr['buy_product_address'] . '</p>'
                . '<p>Куриерска фирма: ' . $postArr['delivery'] . '</p>'
                . '<p>Плащане: ' . $postArr['type_payment'] . '</p>'
                . '<p>Размер: ' . $postArr['dimention'] . '</p>';

        
        $this->addProductSale($id);
        
        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions

        try {
            //Server settings
            $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'postur5213@gmail.com';                 // SMTP username
            $mail->Password = '258444666';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to
            
            //Recipients
            $mail->setFrom('davosss@gmail.com', 'Davosss');
            $mail->addAddress('david_786@abv.bg', 'Davosss');     // Add a recipient

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Имате нова продажба!!!';
            $mail->Body    = $message;
            $mail->AltBody = 'Има грешка с поръчката!!!';

            $mail->CharSet = 'UTF-8';
            
            $mail->send();
            
            return true;
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    }
    
    public function getProductDimentions(int $id): ProductDTO {
        return $this->productRepo->getDimentions($id);
    }
}