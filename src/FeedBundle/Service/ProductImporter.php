<?php
/**
 * Created by PhpStorm.
 * User: pawel
 * Date: 6/1/18
 * Time: 1:42 PM
 */

namespace FeedBundle\Service;


use FeedBundle\Model\StockLine;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class ProductImporter
{
    public function getXmlFeed($data)
    {
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());

        $serializer = new Serializer($normalizers, $encoders);
        $product = $serializer->deserialize($data, StockLine::class, 'xml');

        return $product;
    }

}