<?php

namespace FeedBundle\Controller;

use FeedBundle\Entity\Ean;
use FeedBundle\Entity\Eastend;
use FeedBundle\Entity\Images;
use FeedBundle\Model\Product;
use FeedBundle\Service\ProductImporter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Serializer\Encoder\CsvEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Validator\Constraints\Image;

class ImageController extends Controller
{
    /**
     * @Route("/image", name="image")
     *
     */
    public function Action()
    {

//        $productList = file_get_contents('http://services.eastend.pl/feed/merlin/json');
//        $json = json_decode($productList, true);

        $entityManager = $this->getDoctrine()->getManager();

        $product = $this->getDoctrine()
            ->getRepository(Eastend::class)
            ->findAll();
        ini_set('max_execution_time', -1);
        foreach ($product as $key => $value){
            $image_arr = json_decode($value->getImages(),true);
            var_dump($image_arr);
            if($image_arr !== NULL) {
                foreach ($image_arr as $item) {
                    $image = new Images();
                    $image->setUrl($item['medium']);
                    $image->setEastendId($value->getId());
//                    $ean->setSize($item['value']);
                    $entityManager->persist($image);
                    $entityManager->flush();
                }
            }
        }


        return $this->render('default/main.html.twig', [
        'json' => $image_arr
//        'json' => $json,
//        'posterList' => $productList,

    ]);
    }
}
