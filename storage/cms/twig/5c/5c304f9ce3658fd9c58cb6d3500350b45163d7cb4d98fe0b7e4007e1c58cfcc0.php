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
        echo "<div class=\"row\">

<div class=\"col-md-3 logo\">
    <a class=\"navbar-brand hidden-sm\" href=\"";
        // line 4
        echo url("/");
        echo "\"><img src=\"https://d2f5cg397c40hu.cloudfront.net/website-static-files/images/october-color-logo-v1.svg\" alt=\"OctoberCMS Logo\" width=\"211\" height=\"35\"></a>
</div>
<div class=\"col-md-6 search\">
    <div class=\"row\" style=\"padding-top: 3px;\">
        <input typxe=\"text\" class=\"col-md-8 form-control\" id=\"searh-navbar\">
        <button  class=\"btn btn-primary\" style=\"height: 36px; margin-left: 10px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);\">RECHERCHER</button>
    </div>
    
</div>
<div class=\"col-md-1 panier\">
    <a href=\"";
        // line 14
        echo url("cart/");
        echo "\"> <i class=\"fas fa-shopping-cart\"></i> Panier</a>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/choubebe/themes/demo/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 14,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">

<div class=\"col-md-3 logo\">
    <a class=\"navbar-brand hidden-sm\" href=\"{{ url('/') }}\"><img src=\"https://d2f5cg397c40hu.cloudfront.net/website-static-files/images/october-color-logo-v1.svg\" alt=\"OctoberCMS Logo\" width=\"211\" height=\"35\"></a>
</div>
<div class=\"col-md-6 search\">
    <div class=\"row\" style=\"padding-top: 3px;\">
        <input typxe=\"text\" class=\"col-md-8 form-control\" id=\"searh-navbar\">
        <button  class=\"btn btn-primary\" style=\"height: 36px; margin-left: 10px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);\">RECHERCHER</button>
    </div>
    
</div>
<div class=\"col-md-1 panier\">
    <a href=\"{{ url('cart/') }}\"> <i class=\"fas fa-shopping-cart\"></i> Panier</a>
</div>
</div>", "/Applications/MAMP/htdocs/choubebe/themes/demo/partials/site/header.htm", "");
    }
}
