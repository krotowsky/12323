<?php

namespace FeedBundle\Controller;

use FeedBundle\Entity\Ean;
use FeedBundle\Entity\Eastend;
use FeedBundle\Model\Product;
use FeedBundle\Service\ProductImporter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Serializer\Encoder\CsvEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class EanController extends Controller
{
    /**
     * @Route("/ean", name="ean")
     *
     */
    public function Action()
    {

//        $productList = file_get_contents('http://services.eastend.pl/feed/merlin/json');
//        $json = json_decode($productList, true);

        $entityManager = $this->getDoctrine()->getManager();
        ini_set('max_execution_time', -1);
        $product = $this->getDoctrine()
            ->getRepository(Eastend::class)
            ->findAll();

        foreach ($product as $key => $value){
            $ean_arr = json_decode($value->getVaraints(),true);
            var_dump($ean_arr);
            if($ean_arr !== NULL) {
                foreach ($ean_arr as $item) {
                    $ean = new Ean();
                    $ean->setEan($item['ean']);
                    $ean->setEastendId($value->getId());
                    $ean->setSize($item['value']);
                    $entityManager->persist($ean);
                    $entityManager->flush();
                }
            }
        }


        return $this->render('default/main.html.twig', [
        'json' => $ean_arr
//        'json' => $json,
//        'posterList' => $productList,

    ]);
    }
}
