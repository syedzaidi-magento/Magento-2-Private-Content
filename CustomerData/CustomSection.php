<?php
/**
 * Created by PhpStorm.
 * User: syedzaidi
 * Date: 8/4/19
 * Time: 12:20 AM
 */

namespace Syedzaidi\PrivateContent\CustomerData;


use Magento\Customer\CustomerData\SectionSourceInterface;

class CustomSection implements SectionSourceInterface
{
    /**
     * {@inheritdoc}
     */
    public function getSectionData()
    {
        return ['name' => 'Private section my name update'];
    }
}