<?php
namespace Mage2\HelloMagento2Cmd\Command;

use Mage2\HelloMagento2Cmd\Model\Message;
use Magento\Framework\ObjectManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Index extends Command
{
    /**
     * @var Message
     */
    protected $message;

    /**
     * @var ObjectManagerInterface
     */
    protected $objectManager;

    /**
     * Index constructor.
     * @param Message $message
     * @param ObjectManagerInterface $objectManager
     */
    public function __construct(Message $message, ObjectManagerInterface $objectManager)
    {
        $this->message = $message;
        $this->objectManager =$objectManager;
        parent::__construct();
    }

    /**
     * Configuration method
     *
     * @return $this
     */
    protected function configure()
    {
        $this->setName('mage2:hello-magento2');
        $this->setDescription('Hello Magento 2 test description');
        parent::configure(); // TODO: Change the autogenerated stub
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     *
     * @return string
     */
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln($this->message->getHelloMessage());
        $output->writeln($this->getObjectDetails());
    }

    /**
     * @return string
     */
    public function getObjectDetails()
    {
        $object = $this->objectManager->create('Mage2\HelloMagento2Cmd\Model\HelloMessage');
        return get_class($object);

    }
}