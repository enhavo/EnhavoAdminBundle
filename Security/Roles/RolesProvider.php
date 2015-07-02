<?php
/**
 * RolesProvider.php
 *
 * @since 24/10/14
 * @author Gerhard Seidel <gseidel.message@googlemail.com>
 */

namespace enhavo\AdminBundle\Security\Roles;

interface RolesProvider
{
    public function getRoles();
}