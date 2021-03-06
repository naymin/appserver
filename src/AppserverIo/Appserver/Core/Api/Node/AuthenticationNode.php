<?php
/**
 * AppserverIo\Appserver\Core\Api\Node\AuthenticationNode
 *
 * PHP version 5
 *
 * @category   Server
 * @package    Appserver
 * @subpackage Application
 * @author     Johann Zelger <jz@appserver.io>
 * @copyright  2014 TechDivision GmbH <info@appserver.io>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       http://www.appserver.io
 */

namespace AppserverIo\Appserver\Core\Api\Node;

/**
 * DTO to transfer authentication information.
 *
 * @category   Server
 * @package    Appserver
 * @subpackage Application
 * @author     Johann Zelger <jz@appserver.io>
 * @copyright  2014 TechDivision GmbH <info@appserver.io>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       http://www.appserver.io
 */
class AuthenticationNode extends AbstractNode
{
    // We use several traits which give us the possibility to have collections of the child nodes mentioned in the
    // corresponding trait name
    use ParamsNodeTrait;

    /**
     * The authentication uri to match for
     *
     * @var string
     * @AS\Mapping(nodeType="string")
     */
    protected $uri;

    /**
     * Returns the authentication type
     *
     * @return string The authentication type
     */
    public function getUri()
    {
        return $this->uri;
    }
}
