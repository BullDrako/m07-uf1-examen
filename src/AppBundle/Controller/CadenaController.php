<?php
/**
 * Created by PhpStorm.
 * User: edgar
 * Date: 19/11/15
 * Time: 19:43
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Services\CadenaService;

class CadenaController extends Controller
{
    /**
     * @Route(
     *          path = "/cadena/mayusculas/",
     *          name = "app_default_mayusculas")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function mayusculas()
    {
        $conexion = "app_default_domayusculas";
        return $this->render(':default:formulario.html.twig', array('conexion'=>$conexion));
    }

    /**
     * @Route(
     *      path = "/cadena/domayusculas/",
     *      name = "app_default_domayusculas"
     * )
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function doMayusculasAction(Request $request)
    {
        $cadena1 = $request->request->get('cadena1');
        $cadena2 = $request->request->get('cadena2');



        $m = $this->container->get('cadena');
        $m->setCadena1($cadena1);
        $m->setCadena2($cadena2);

        $m->mayusculas();

        $result = $m->getResult();


        return $this->render(':default:result.html.twig', array(
                'result' => $result,
            )
        );
    }

    /**
     * @Route(
     *          path = "/cadena/minusculas/",
     *          name = "app_default_minusculas")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function minusculas()
    {
        $conexion = "app_default_dominusculas";
        return $this->render(':default:formulario.html.twig', array('conexion'=>$conexion));
    }

    /**
     * @Route(
     *      path = "/cadena/dominusculas/",
     *      name = "app_default_dominusculas"
     * )
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function doMinusculasAction(Request $request)
    {
        $cadena1 = $request->request->get('cadena1');
        $cadena2 = $request->request->get('cadena2');



        $m = $this->container->get('cadena');
        $m->setCadena1($cadena1);
        $m->setCadena2($cadena2);

        $m->minusculas();

        $result = $m->getResult();


        return $this->render(':default:result.html.twig', array(
                'result' => $result,
            )
        );
    }

    /**
     * @Route(
     *          path = "/cadena/longitud/",
     *          name = "app_default_longitud")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function longitud()
    {
        $conexion = "app_default_dolongitud";
        return $this->render(':default:formulario.html.twig', array('conexion'=>$conexion));
    }

    /**
     * @Route(
     *      path = "/cadena/dolongitud/",
     *      name = "app_default_dolongitud"
     * )
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function doLongitudAction(Request $request)
    {
        $cadena1 = $request->request->get('cadena1');
        $cadena2 = $request->request->get('cadena2');



        $l = $this->container->get('cadena');
        $l->setCadena1($cadena1);
        $l->setCadena2($cadena2);

        $l->longitud();

        $result = $l->getResult();


        return $this->render(':default:result.html.twig', array(
                'result' => $result,
            )
        );
    }


    /**
     * @Route(
     *          path="/cadena/concatenar",
     *          name="app_default_concatenar")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function concatenarAction()
    {
        $conexion = "app_default_doconcatenar";
        return $this->render(':default:formulario.html.twig', array('conexion'=>$conexion));
    }


    /**
     *@Route(
     *      path = "/cadena/doconcatenar/",
     *      name = "app_default_doconcatenar")
     *
     */
    public function doConcatenarAction(Request $request)
    {
        $cadena1 = $request->request->get('cadena1');
        $cadena2 = $request->request->get('cadena2');


        $c = $this->container->get('cadena');
        $c->setCadena1($cadena1);
        $c->setCadena2($cadena2);

        $c->concatenar();

        $result = $c->getResult();


        return $this->render(':default:result.html.twig', array(
                'result' => $result,
            )
        );
    }


    /**
     * @Route(
     *      path = "/cadena/charat/",
     *      name = "app_default_charat")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function charatAction()
    {
        $conexion = "app_default_docharat";
        return $this->render(':default:formulario.html.twig', array('conexion'=>$conexion));
    }

    /**
     *
     * @Route(
     *      path = "/cadena/docharat/",
     *      name = "app_default_docharat")
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function doCharatAction(Request $request)
    {
        $cadena1 = $request->request->get('cadena1');
        $cadena2 = $request->request->get('cadena2');


        $c = $this->container->get('cadena');
        $c->setCadena1($cadena1);
        $c->setCadena2($cadena2);

        $c->charat();

        $result = $c->getResult();


        return $this->render(':default:result.html.twig', array(
                'result' => $result,
            )
        );
    }
}