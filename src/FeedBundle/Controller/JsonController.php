<?php

namespace FeedBundle\Controller;

use FeedBundle\Entity\Eastend;
use FeedBundle\Model\Product;
use FeedBundle\Service\ProductImporter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Serializer\Encoder\CsvEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class JsonController extends Controller
{
    /**
     * @Route("/json", name="json")
     *
     */
    public function Action()
    {

        $productList = file_get_contents('http://services.eastend.pl/feed/merlin/json');
        $json = json_decode($productList, true);


        $entityManager = $this->getDoctrine()->getManager();

        foreach ($json as $key => $value) {
            $product = new Eastend();
            $product->setBrand($value['brand']);
            $product->setName($value['name']);
            $product->setDescription($value['description']);
            $product->setCategories(json_encode($value['categories'],true));
            $product->setNetPrice($value['netPrice']);
            $product->setType($value['type']);
            $product->setProperties(json_encode($value['properties'],true));
            $product->setVaraints(json_encode($value['variants'],true));
            $product->setImages(json_encode($value['images'],true));
            $entityManager->persist($product);
            $entityManager->flush();
        }


        return $this->render('default/main.html.twig', [
        'json' => $product
//        'json' => $json,
//        'posterList' => $productList,

    ]);
    }
}
