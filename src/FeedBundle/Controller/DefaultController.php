<?php

namespace FeedBundle\Controller;

use FeedBundle\Service\ProductImporter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/index")
     */
    public function action()
    {

        $data = file_get_contents('0/home/pawel/php/systemerp/Publikacje_19741.xml');

        $productImporter = $this->get(ProductImporter::class);
        $product = $productImporter->getXmlFeed($data);
        $offer = $product->offer;


        return $this->render('default/main.html.twig', [
            'json' => $product

        ]);
    }
}
