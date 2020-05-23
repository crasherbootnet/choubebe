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

/* /Applications/MAMP/htdocs/choubebe/themes/demo/pages/finaliser_commandes.htm */
class __TwigTemplate_b349a09ed9784e526f3428d65d43cda01fb32d50e2325db3195223bc8bc8ac40 extends \Twig\Template
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
        echo "<style>
    .form-control {
        height: 35px;
        font-size: 14px;
    }

    label {
        font-size: 14px;
    }

    #commander{
        height: 34px;
        font-size: 14px;
        padding-left: 22px;
        padding-right: 22px;
    }
</style>
<div class=\"row\">
    <h4 class=\"offset-md-6 col-md-3\">Finalisation de la commande </h4>
    <form class=\"offset-md-4 col-md-6\" method=\"post\" data-request-flash data-request=\"onCommande\" style=\"margin-top: 30px\">
    <div class=\"form-group\">
        <label>Nom et prénoms</label>
        <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Nom et prénoms\">
    </div>
    <div class=\"form-group\">
        <label>Téléphone</label>
        <input type=\"text\" name=\"tel\" class=\"form-control\" placeholder=\"Téléphone\">
    </div>
    <div class=\"form-group\">
        <label>Lieu de livraison</label>
        <input type=\"text\" name=\"commune\" class=\"form-control\" placeholder=\"Ou souhaitez vous être livré ?\">
    </div>
    <button type=\"submit\" class=\"btn btn-primary\" id=\"commander\">Commander</button>
    </form>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/choubebe/themes/demo/pages/finaliser_commandes.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    .form-control {
        height: 35px;
        font-size: 14px;
    }

    label {
        font-size: 14px;
    }

    #commander{
        height: 34px;
        font-size: 14px;
        padding-left: 22px;
        padding-right: 22px;
    }
</style>
<div class=\"row\">
    <h4 class=\"offset-md-6 col-md-3\">Finalisation de la commande </h4>
    <form class=\"offset-md-4 col-md-6\" method=\"post\" data-request-flash data-request=\"onCommande\" style=\"margin-top: 30px\">
    <div class=\"form-group\">
        <label>Nom et prénoms</label>
        <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Nom et prénoms\">
    </div>
    <div class=\"form-group\">
        <label>Téléphone</label>
        <input type=\"text\" name=\"tel\" class=\"form-control\" placeholder=\"Téléphone\">
    </div>
    <div class=\"form-group\">
        <label>Lieu de livraison</label>
        <input type=\"text\" name=\"commune\" class=\"form-control\" placeholder=\"Ou souhaitez vous être livré ?\">
    </div>
    <button type=\"submit\" class=\"btn btn-primary\" id=\"commander\">Commander</button>
    </form>
</div>", "/Applications/MAMP/htdocs/choubebe/themes/demo/pages/finaliser_commandes.htm", "");
    }
}
