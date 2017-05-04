<?php

namespace Opstalent\OAuthServerBundle\Controller;

use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\HttpFoundation\{
    Request, Response
};

/**
 * Class AuthorizeController
 * @package OAuthServerBundle\Controller
 * @author Rafał Lorenz <vardius@gmail.com>
 */
class AuthorizeController extends \FOS\OAuthServerBundle\Controller\AuthorizeController
{
    /**
     * @ApiDoc(
     *  resource=false,
     *  section="Authorization",
     *  description="Authorize end customers",
     *  views = {"default"},
     *  parameters={
     *      {"name"="client_id", "dataType"="string", "required"=true, "description"="CLIENT_ID"},
     *      {"name"="response_type", "dataType"="string", "required"=true, "description"="Response type, pattern=(code|token)"},
     *      {"name"="redirect_uri", "dataType"="string", "required"=true, "description"="CLIENT_HOST"}
     *  }
     * )
     *
     * @param Request $request
     * @return Response|\Symfony\Component\HttpFoundation\Response
     * @throws \OAuth2\OAuth2RedirectException
     */
    public function authorizeAction(Request $request)
    {
        return parent::authorizeAction($request);
    }
}
