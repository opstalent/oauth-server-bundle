<?php
namespace Opstalent\OAuthServerBundle\Storage;

use FOS\OAuthServerBundle\Storage\OAuthStorage as BaseStorage;
use OAuth2\Model\IOAuth2Client;
use Symfony\Component\Security\Core\Exception\BadCredentialsException;

/**
 * @package AppBundle\Auth
 * @author Patryk Grudniewski <patgrudniewski@gmail.com>
 */
class OAuthStorage extends BaseStorage
{
    /**
     * {@inheritdoc}
     * @throws BadCredentialsException
     */
    public function checkUserCredentials(IOAuth2Client $client, $username, $password)
    {
        $user = parent::checkUserCredentials($client, $username, $password);
        if (false === $user) {
            throw new BadCredentialsException('Invalid credentials', 401);
        }

        return $user;
    }
}
