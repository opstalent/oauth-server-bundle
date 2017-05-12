<?php

namespace Opstalent\OAuthServerBundle\OAuth;

use OAuth2\OAuth2 as BaseOAuth;
use OAuth2\OAuth2ServerException;
use Opstalent\OAuthServerBundle\Event\GrantAccessEvent;
use Opstalent\OAuthServerBundle\Event\GrantAccessEvents;
use Symfony\Component\HttpFoundation\Request;
use OAuth2\IOAuth2Storage;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
/**
 * @package Opstalent\OAuthServerBundle
 * @author Patryk Grudniewski <patgrudniewski@gmail.com>
 */
class OAuth2 extends BaseOAuth
{
    protected $dispatcher;

    /**
     * OAuth2 constructor.
     */
    public function __construct(IOAuth2Storage $storage, $config = array(), EventDispatcherInterface $dispatcher)
    {
        parent::__construct($storage,$config);
        $this->dispatcher = $dispatcher;
    }


    /**
     * {@inheritdoc}
     */
    public function grantAccessToken(Request $request = null)
    {
        try {
            $response = parent::grantAccessToken($request);
            $this->dispatcher->dispatch(GrantAccessEvents::POST_ACCESS_TOKEN_GRANTED, new GrantAccessEvent($request,$response));
            return $response;
        } catch (OAuth2ServerException $e) {
            throw new \Exception($e->getDescription(), 400, $e);
        }
    }
}
