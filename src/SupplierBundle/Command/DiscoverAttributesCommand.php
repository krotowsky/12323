<?php

namespace SupplierBundle\Command;

use SupplierBundle\Service\DiscoverAttributesService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DiscoverAttributesCommand extends Command
{
    private $importFeed;

    public function __construct(DiscoverAttributesService $importFeed)
    {
        $this->importFeed = $importFeed;

        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setName('supplier:discover-attributes')
            ->addArgument('supplier', InputArgument::REQUIRED, 'The username of the user.')
            ->setDescription('Supplier Sourcing')
            ->setHelp('paramter [supplier name] ex. Eastend')
        ;

    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln($this->importFeed->ProcessFeed($input->getArgument('supplier')));

    }
}