<?php

namespace  Opstalent\OAuthServerBundle\Event;

use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @author Szyon Kunowski <szymon.kunowski@gmail.com>
 * @package Opstalent\ApiBundle
 */
class GrantAccessEvent extends Event
{
    /**
     * @var Request
     */
    protected $request;

    /**
     * @var Response
     */
    protected $response;

    /**
     * @param Request $request
     * @param FormInterface $form
     */
    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    /**
     * @return Request
     */
    public function getRequest() : Request
    {
        return $this->request;
    }

    /**
     * @return Response
     */
    public function getResponse() : Response
    {
        return $this->response;
    }


}

