<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /Applications/MAMP/htdocs/choubebe/themes/demo/partials/site/header.htm */
class __TwigTemplate_d6eb362ba8fe632977e81691daed0c6af726c13fefc9fb3babe411553b124457 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"col-md-3 logo\">
    <a class=\"navbar-brand hidden-sm\" href=\"https://octobercms.com\"><img src=\"https://d2f5cg397c40hu.cloudfront.net/website-static-files/images/october-color-logo-v1.svg\" alt=\"OctoberCMS Logo\" width=\"211\" height=\"35\"></a>
</div>
<div class=\"col-md-6 search\">
    <div class=\"row\">
        <input type=\"text\" class=\"col-md-8 form-control\">
        <a href=\"\" class=\"co-md-4 btn btn-primary\">RECHERCHER</a>
    </div>
    
</div>
<div class=\"col-md-1 panier\">
    <a href=\"\" class=\"btn btn-primary\"><i class=\"fas fa-shopping-cart\"></i></a>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/choubebe/themes/demo/partials/site/header.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-md-3 logo\">
    <a class=\"navbar-brand hidden-sm\" href=\"https://octobercms.com\"><img src=\"https://d2f5cg397c40hu.cloudfront.net/website-static-files/images/october-color-logo-v1.svg\" alt=\"OctoberCMS Logo\" width=\"211\" height=\"35\"></a>
</div>
<div class=\"col-md-6 search\">
    <div class=\"row\">
        <input type=\"text\" class=\"col-md-8 form-control\">
        <a href=\"\" class=\"co-md-4 btn btn-primary\">RECHERCHER</a>
    </div>
    
</div>
<div class=\"col-md-1 panier\">
    <a href=\"\" class=\"btn btn-primary\"><i class=\"fas fa-shopping-cart\"></i></a>
</div>", "/Applications/MAMP/htdocs/choubebe/themes/demo/partials/site/header.htm", "");
    }
}
