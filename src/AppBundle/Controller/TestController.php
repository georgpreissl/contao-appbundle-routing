<?php

namespace AppBundle\Controller; 


use Contao\CoreBundle\Exception\PageNotFoundException;
use Contao\CoreBundle\Framework\ContaoFramework;
use Contao\FilesModel;
use Contao\StringUtil;
use Contao\Validator;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;




class TestController extends Controller
{

    /**
     * @Route("/test/")
     */
    public function loadAction($height, $width)
    {
        $strBuffer = '<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="utf-8">
  <title>Frontend Route - Contao Open Source CMS</title>
</head>
<body>
       <h1>Frontend Route</h2>
	        <p>Parameter: '.$height.' '.$width.'</p>
</body>
</html>';
        $objResponse = new Response($strBuffer);
        $objResponse->headers->set('Content-Type', 'text/html; charset=UTF-8');
        return $objResponse;

    }
}
