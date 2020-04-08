<?php
/**
 * Created by PhpStorm.
 * User: syedzaidi
 * Date: 8/4/19
 * Time: 12:00 AM
 */

namespace Syedzaidi\PrivateContent\Block;


use Magento\Framework\View\Element\Template;

class MyContent extends Template
{
    public function myData()
    {
        echo "public block data";
    }
}