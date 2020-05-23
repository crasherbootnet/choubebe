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

/* /Applications/MAMP/htdocs/choubebe/themes/demo/pages/commande_success.htm */
class __TwigTemplate_cc4ce3bda095fbff9f64a6f2c7f152f15867a837fea761e27d5729db82966073 extends \Twig\Template
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
        echo "<!-- Content
  ============================================= -->
  <div id=\"content\" class=\"py-4\">
    <div class=\"container\">
        <h2 class=\"font-weight-400 text-center mt-3 mb-4\">Retrait d'argent</h2>
        <div class=\"row\">
            <div class=\"col-md-8 col-lg-6 col-xl-5 mx-auto\">
                <!-- Withdraw Money Success ============================================= -->
                <div class=\"bg-light shadow-sm rounded p-3 p-sm-4 mb-4\" style=\"font-size: 14px;\">
                    <div class=\"text-center my-5\">
                        <p class=\"text-center text-success text-20 line-height-07\"><i
                                class=\"fas fa-check-circle\"></i></p>
                        <p class=\"text-center text-success text-8 line-height-07\">Success!</p>
                        <p class=\"text-center text-4\">Votre demande a été enregistré avec succès !</p>
                    </div>
                    <a class=\"btn btn-primary btn-block\" href=\"";
        // line 16
        echo url("/");
        echo "\">Faire une autre demande</a>
                </div>
                <!-- Withdraw Money Success end -->
            </div>
        </div>
    </div>
</div>
<!-- Content end -->";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/choubebe/themes/demo/pages/commande_success.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Content
  ============================================= -->
  <div id=\"content\" class=\"py-4\">
    <div class=\"container\">
        <h2 class=\"font-weight-400 text-center mt-3 mb-4\">Retrait d'argent</h2>
        <div class=\"row\">
            <div class=\"col-md-8 col-lg-6 col-xl-5 mx-auto\">
                <!-- Withdraw Money Success ============================================= -->
                <div class=\"bg-light shadow-sm rounded p-3 p-sm-4 mb-4\" style=\"font-size: 14px;\">
                    <div class=\"text-center my-5\">
                        <p class=\"text-center text-success text-20 line-height-07\"><i
                                class=\"fas fa-check-circle\"></i></p>
                        <p class=\"text-center text-success text-8 line-height-07\">Success!</p>
                        <p class=\"text-center text-4\">Votre demande a été enregistré avec succès !</p>
                    </div>
                    <a class=\"btn btn-primary btn-block\" href=\"{{ url('/') }}\">Faire une autre demande</a>
                </div>
                <!-- Withdraw Money Success end -->
            </div>
        </div>
    </div>
</div>
<!-- Content end -->", "/Applications/MAMP/htdocs/choubebe/themes/demo/pages/commande_success.htm", "");
    }
}
