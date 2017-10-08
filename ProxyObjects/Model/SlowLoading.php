<?php
namespace Mage2\ProxyObjects\Model;

class SlowLoading
{
    /**
     * SlowLoading constructor.
     */
    public function __construct()
    {
        echo '<br /> .................... <br />';
        echo 'Calling Slow Loading Class';
        sleep(10);
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return 'Hello from slow loading class';
    }

}