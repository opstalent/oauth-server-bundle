<?php

namespace Opstalent\OAuthServerBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class OpstalentOAuthServerBundle
 * @package OpstalentOAuthServerBundle
 */
class OpstalentOAuthServerBundle extends Bundle
{
    /**
     * @return string
     */
    public function getParent()
    {
        return 'FOSOAuthServerBundle';
    }
}
