<?php
/**
 * Created by PhpStorm.
 * User: webonise
 * Date: 22/11/17
 * Time: 3:46 PM
 */

namespace AppBundle\Controller;

use FOS\UserBundle\Controller\SecurityController as BaseController;

class SecurityController extends BaseController
{
    /**
     * {@inheritdoc}
     */
    protected function renderLogin(array $data)
    {
        if (!empty($data['error'])) {
            $this->container->get('session')->getFlashBag()->add('error', "Wrong username or password.");
        }

        return parent::renderLogin($data);
    }
}
