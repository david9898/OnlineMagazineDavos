<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 7.1.2019 г.
 * Time: 13:21 ч.
 */

namespace app\services;


use app\data\SecurityPictureDTO;
use app\repository\SecurityRepositoryInterface;
use mysql_xdevapi\Exception;

class SecurityService implements SecurityServiceInterface
{

    private $securityRepo;

    public function __construct(SecurityRepositoryInterface $securityRepo)
    {
        $this->securityRepo = $securityRepo;
    }

    public function insertPicture(array $postArr, array $fileArr): bool
    {
        $imageName = $fileArr['security_image']['name'];
        $imageTMP = $fileArr['security_image']['tmp_name'];
        $imageSize = $fileArr['security_image']['size'];
        $imageErr = $fileArr['security_image']['error'];
        $validExt = ['jpg', 'jpeg', 'png', 'gif'];

        if ( $imageErr !== 0 ) {
            throw new \Exception('Възникна грешка моля опитайте отново!!!');
        }

        $imageExp = explode('.', $imageName);
        $imageActualExt = strtolower(end($imageExp));

        if ( !in_array($imageActualExt, $validExt) ) {
            throw new \Exception('Този тип файл не е позволен!!!');
        }

        if ( $imageSize > 10000000 ) {
            throw new \Exception('Размера на файла е твърде голям!!!');
        }

        $rand1 = rand(100, 10000);
        $rand2 = rand(100, 10000);
        $rand3 = chr(rand(100, 120));
        $rand4 = chr(rand(100, 120));
        $rand5 = chr(rand(100, 120));

        $newName = md5($rand1 . $rand2 . $rand3 . $rand4 . $rand5);

        $newFileName = $newName . '.' . $imageActualExt;

        $image = imagecreatefromjpeg($imageTMP);

        $scaled = imagescale($image, 1024, 768);

        imagejpeg($scaled, 'Images/' . $newFileName);

        $imageDTO = new SecurityPictureDTO();
        $imageDTO->setImageName($newFileName);
        $imageDTO->setCode($postArr['security_picture_code']);
        $imageDTO->setQuestion($postArr['security_picture_question']);

        $this->securityRepo->insertSecurityPicture($imageDTO);

        return true;

    }

    public function getImage(int $id): SecurityPictureDTO
    {
        return $this->securityRepo->getSecurityPicture($id);
    }

}