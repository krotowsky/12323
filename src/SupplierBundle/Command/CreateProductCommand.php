<?php

namespace SupplierBundle\Command;

use SupplierBundle\Service\CreateProductService;
use SupplierBundle\Service\ImportFeedService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateProductCommand extends Command
{
    private $createProduct;

    public function __construct(CreateProductService $createProduct)
    {
        $this->createProduct = $createProduct;

        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setName('supplier:create-product')
            ->addArgument('supplier', InputArgument::REQUIRED, 'The username of the user.')
            ->setDescription('Supplier Sourcing')
            ->setHelp('paramter [supplier name] ex. Eastend')
        ;

    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln($this->createProduct->Start($input->getArgument('supplier')));

    }
}