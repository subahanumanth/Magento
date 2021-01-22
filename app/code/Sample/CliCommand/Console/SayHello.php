<?php
namespace Sample\CliCommand\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class SayHello extends Command
{
    const NAME = 'name';
    protected function configure()
    {
        $this->setName('example:sayhello');
        $this->setDescription('Demo command line');
        $this->addOption(
            self::NAME,
            null,
            InputOption::VALUE_REQUIRED,
            'Name'
        );
        parent::configure();
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("Hello World");
        if ($name = $input->getOption(self::NAME)) {
            $output->writeln('Hi ' . $name);
        }
    }
}
