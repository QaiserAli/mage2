<?php
namespace Mage2\ProxyObjects\Model;

class FastLoading
{
    /**
     * FastLoading constructor.
     */
    public function __construct()
    {
        echo "Calling Fast Loading class";
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return 'Hello from fast loading';
    }
}