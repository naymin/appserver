<?php

/**
 * AppserverIo\Appserver\DependencyInjectionContainer\Interfaces\BeanDescriptorInterface
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
 * Interface for a bean descriptor.
 *
 * @category   Server
 * @package    Appserver
 * @subpackage DependencyInjectionContainer
 * @author     Tim Wagner <tw@appserver.io>
 * @copyright  2014 TechDivision GmbH <info@appserver.io>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       http://www.appserver.io
 */
interface BeanDescriptorInterface extends DescriptorInterface
{

    /**
     * Returns the bean name.
     *
     * @return string The bean name
     */
    public function getName();

    /**
     * Returns the beans class name.
     *
     * @return string The beans class name
     */
    public function getClassName();

    /**
     * The array with the EPB references.
     *
     * @return array The EPB references
     */
    public function getEpbReferences();

    /**
     * The array with the resource references.
     *
     * @return array The resource references
     */
    public function getResReferences();

    /**
     * Returns an array with the merge EBP and resource references.
     *
     * @return array The array with the merge all bean references
     */
    public function getReferences();

    /**
     * Merges the passed configuration into this one. Configuration values
     * of the passed configuration will overwrite the this one.
     *
     * @param \AppserverIo\Appserver\DependencyInjectionContainer\Interfaces\BeanDescriptorInterface $beanDescriptor The configuration to merge
     *
     * @return void
     */
    public function merge(BeanDescriptorInterface $beanDescriptor);
}
