<?php
/**
 * DISCLAIMER
 * Do not edit or add to this file if you wish to upgrade the modules in the
 * Darkstar suite to newer versions in the future.
 *
 * @category  Darkstar
 * @package   Darkstar\Customer
 * @author    Rye Miller <rye@drkstr.dev>
 * @copyright Copyright (c) 2021, Rye Miller (http://ryemiller.io)
 * @license   MIT (https://en.wikipedia.org/wiki/MIT_License)
 */

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'Darkstar_Customer',
    __DIR__
);
