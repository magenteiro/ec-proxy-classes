<?php

namespace Magenteiro\ComandoMagico\Console\Command;

use Magenteiro\ComandoMagico\Model\ClasseLenta;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ComandoMagico extends Command
{
    private ClasseLenta $classeLenta;
    private ?string $name;

    public function __construct(ClasseLenta $classeLenta, string $name = null)
    {
        $this->classeLenta = $classeLenta;
        parent::__construct($name);
        $this->name = $name;
    }

    /**
     * Initialization of the command.
     */
    protected function configure()
    {
        $this->setName('magenteiro:magico');
        $this->setDescription('Executa um comando mágico');
        parent::configure();
    }

    /**
     * CLI command description.
     *
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @return void
     */
    protected function execute(InputInterface $input, OutputInterface $output): void
    {
        $output->writeln('magico');
        $output->writeln($this->classeLenta->soma(2, 2));
        
    }
}
