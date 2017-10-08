<?php
namespace Mage2\VirtualTypes\Model;

class Apple
{
    /**
     * @var AppleList
     */
    protected $appleList;

    /**
     * Apple constructor.
     * @param AppleList $appleList
     */
    public function __construct(AppleList $appleList)
    {
        $this->appleList = $appleList;
    }

    /**
     * @return $this
     */
    public function getList()
    {
        return $this->appleList->getList();
    }
}