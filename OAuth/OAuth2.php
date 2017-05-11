<?php

namespace Opstalent\OAuthServerBundle\OAuth;

use OAuth2\OAuth2 as BaseOAuth;
use OAuth2\OAuth2ServerException;
use Symfony\Component\HttpFoundation\Request;

/**
 * @package Opstalent\OAuthServerBundle
 * @author Patryk Grudniewski <patgrudniewski@gmail.com>
 */
class OAuth2 extends BaseOAuth
{
    /**
     * {@inheritdoc}
     */
    public function grantAccessToken(Request $request = null)
    {
        try {
            return parent::grantAccessToken($request);
        } catch (OAuth2ServerException $e) {
            throw new \Exception($e->getDescription(), 400, $e);
        }
    }
}
