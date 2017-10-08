<?php
namespace Mage2\VirtualTypes\Model;

class AndroidList extends AppleList
{
    /**
     * @return array
     */
    public function getList()
    {
        return [
            'Samsung Glaxy S5',
            'Samsung Glaxy S7',
            'Samsug Glaxy S8',
            'LG V30',
            'U Play'
        ];
    }
}