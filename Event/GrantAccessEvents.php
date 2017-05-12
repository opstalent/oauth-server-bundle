<?php

namespace  Opstalent\OAuthServerBundle\Event;

/**
 * @author Szymon Kunowski <szymon.kunowski@gmail.com>
 * @package Opstalent\ApiBundle
 */
final class GrantAccessEvents
{
    /**
     * @Event("Opstalent\OAuthServerBundle\Event\GrantAccessEvent")
     */
    const POST_ACCESS_TOKEN_GRANTED = 'opstalent.oauth.post_access_token_granted';
}
