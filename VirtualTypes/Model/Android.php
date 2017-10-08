<?php
namespace Mage2\VirtualTypes\Model;

class Android
{
    /**
     * @var AndroidList
     */
    protected $androidList;

    /**
     * Android constructor.
     * @param AndroidList $androidList
     */
    public function __construct(AndroidList $androidList)
    {
        $this->androidList = $androidList;
    }

    /**
     * @return $this
     */
    public function getList()
    {
        return $this->androidList->getList();
    }
}