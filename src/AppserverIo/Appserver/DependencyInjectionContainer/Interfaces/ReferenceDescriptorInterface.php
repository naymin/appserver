<?php

/**
 * AppserverIo\Appserver\DependencyInjectionContainer\Interfaces\ReferenceDescriptorInterface
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @category   Server
 * @package    Appserver
 * @subpackage DependencyInjectionContainer
 * @author     Tim Wagner <tw@appserver.io>
 * @copyright  2014 TechDivision GmbH <info@appserver.io>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       http://www.appserver.io
 */

namespace AppserverIo\Appserver\DependencyInjectionContainer\Interfaces;

/**
 * Inferface for utility classes that stores a reference configuration.
 *
 * @category   Server
 * @package    Appserver
 * @subpackage DependencyInjectionContainer
 * @author     Tim Wagner <tw@appserver.io>
 * @copyright  2014 TechDivision GmbH <info@appserver.io>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       http://www.appserver.io
 */
interface ReferenceDescriptorInterface extends DescriptorInterface
{

    /**
     * Returns the reference name.
     *
     * @return string The reference name
     */
    public function getName();

    /**
     * Returns the beans description.
     *
     * @return string The beans description
     */
    public function getDescription();

    /**
     * Returns the injection target specification.
     *
     * @return \AppserverIo\Appserver\DependencyInjectionContainer\Interfaces\InjectionTargetDescriptorInterface The injection target specification
     */
    public function getInjectionTarget();
}
