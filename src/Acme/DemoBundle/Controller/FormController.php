<?php

namespace Acme\DemoBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Acme\DemoBundle\Model\A;
use Acme\DemoBundle\Model\B;
use Acme\DemoBundle\Model\C;
use Acme\DemoBundle\Form\AType;

/**
 * Class: FormController
 *
 * @see Controller
 */
class FormController extends Controller
{
    /**
     * @Route("/nested-forms", name="nested_forms")
     * @Template()
     */
    public function nestedFormsAction(Request $request)
    {

        $a = new A();

        $b = new B();
        $b->getCs()->add(new C());
        $b->getCs()->add(new C());
        $b->getCs()->add(new C());
        $a->getBs()->add($b);

        $b = new B();
        $b->getCs()->add(new C());
        $b->getCs()->add(new C());
        $a->getBs()->add($b);

        $b = new B();
        $b->getCs()->add(new C());
        $b->getCs()->add(new C());
        $b->getCs()->add(new C());
        $a->getBs()->add($b);

        $form = $this->createForm(new AType(), $a);
        $form->handleRequest($request);

        return array(
            'form' => $form->createView(),
        );
    }
}
