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

/* /Applications/MAMP/htdocs/choubebe/themes/demo/layouts/default.htm */
class __TwigTemplate_c81eebcbc25f586256a8fe1c7665bb73741e8f5bc90bbd46d487e17f1b5985a6 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <title>October CMS - ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "meta_description", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
    <meta name=\"title\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 8), "meta_title", [], "any", false, false, false, 8), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"OctoberCMS\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"generator\" content=\"OctoberCMS\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/october.png");
        echo "\">
    <link href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/vendor.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/home.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/theme.css");
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/node_modules/bootstrap/dist/css/bootstrap.min.css");
        echo "\">
    <script src=\"https://kit.fontawesome.com/a076d05399.js\"></script>
    ";
        // line 18
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 19
        echo "
    <style>
        #layout-footer{
            margin-top: 100px;
            margin-bottom: 30px;
        }

        #layout-content{
            background: #fff;
            box-shadow: 0 3px 18px rgba(0,0,0,0.08);
            padding: 26px 20px 0;
            padding-bottom: 20px;
        }
    </style>
</head>

<body style=\"padding-top: 15px;background-color: #f5f5f5;\">

    <!-- Header -->
    <header id=\"layout-header\" class=\"container\">
        ";
        // line 39
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 40
        echo "    </header>

    <!-- Content -->
    <section id=\"layout-content\" class=\"container\">
        ";
        // line 44
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 45
        echo "    </section>

    <!-- Footer -->
    <footer id=\"layout-footer\" class=\"container-fluid\">
        ";
        // line 49
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 50
        echo "    </footer>

    <!-- Scripts -->
    <script src=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
    <script src=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script>
    <script src=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/app.js");
        echo "\"></script>
    ";
        // line 56
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 57
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 58
        echo "
    <script>
        \$(document).ready(function (e) {
            \$(\"input[name='typeuser']\").click(function (e) {
                if (e.target.value == 1) {
                    \$(\"#agence_first_login\").css('display', 'block');
                    \$(\"#demarcheur_first_login\").css('display', 'none');
                } else {
                    \$(\"#agence_first_login\").css('display', 'none');
                    \$(\"#demarcheur_first_login\").css('display', 'block');
                }
            });

            // afficher les informations (mail, tel) du demarcheur ou de l'agence
            let contact = 0;
            \$(\"a[href='#contactPhone'\").click(function () {
                \$(\".text-area\").css('display', 'block');
                \$(\"#contactPhone\").css('display', 'flex');
                contact += 1;
                displayTextArea(2);
            });
            \$(\".contactForm\").click(function () {
                \$(\".text-area\").css('display', 'block');
                \$(\"#contactForm\").css('display', 'flex');
                contact += 1;
                displayTextArea(1);
            });

            let displayTextArea = function (form) {
                if (contact > 1) {
                    \$(\".text-area\").removeClass('warning-small').addClass('warning-large');
                } else {
                    if (form == 2) {
                        \$(\"#contactPhone\").css('float', 'left');
                    }
                    \$(\".text-area\").addClass('warning-small');
                }
            }

            // chargement des images
            \$(\".imageminia\").click(function (e) {
                e.preventDefault();
                // alert(\"chargement d'image\");
                // console.log(e.target.attr('imgptf'));
                let indeximg = \$(this).data('imgptf');
                // console.log(\$(this).data('imgptf'));
                // console.log(\$(\".imggf-\"+indeximg).attr('src'));
                // \$(\".slide.active img\").attr('src', \$(\".imggf-\"+indeximg).attr('src'));
                // console.log();
                \$(\".slide.active\").removeClass(\"active\").css(\"opacity\", 0);
                \$(\".imggf-\" + indeximg).parent().addClass(\"active\").css(\"opacity\", '');
                \$(\".img-miniature li.active\").removeClass(\"active\");
                \$(this).parent().addClass('active');
            });

            \$(\"#addShopping\").click(function(){
                \$(\"#addShopping\").attr(\"disabled\", \"disabled\");
                \$.ajax({
                    url : \"http://localhost:8888/choubebe/register-commande/\"+\$(this).data('id'),
                    success: function(data){
                        \$(\"#myModal\").modal('toggle');
                        \$(\"#addShopping\").removeAttr(\"disabled\");
                    },
                    error: function(error){
                        \$(\"#addShopping\").removeAttr(\"disabled\");
                    }
                })
            });

        });
    </script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/choubebe/themes/demo/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 58,  155 => 57,  144 => 56,  140 => 55,  136 => 54,  132 => 53,  127 => 50,  123 => 49,  117 => 45,  115 => 44,  109 => 40,  105 => 39,  83 => 19,  80 => 18,  75 => 16,  71 => 15,  67 => 14,  63 => 13,  59 => 12,  52 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <title>October CMS - {{ this.page.title }}</title>
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
    <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
    <meta name=\"author\" content=\"OctoberCMS\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"generator\" content=\"OctoberCMS\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\">
    <link href=\"{{ 'assets/css/vendor.css'|theme }}\" rel=\"stylesheet\">
    <link href=\"{{ 'assets/css/home.css'|theme }}\" rel=\"stylesheet\">
    <link href=\"{{ 'assets/css/theme.css'|theme }}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/node_modules/bootstrap/dist/css/bootstrap.min.css'|theme }}\">
    <script src=\"https://kit.fontawesome.com/a076d05399.js\"></script>
    {% styles %}

    <style>
        #layout-footer{
            margin-top: 100px;
            margin-bottom: 30px;
        }

        #layout-content{
            background: #fff;
            box-shadow: 0 3px 18px rgba(0,0,0,0.08);
            padding: 26px 20px 0;
            padding-bottom: 20px;
        }
    </style>
</head>

<body style=\"padding-top: 15px;background-color: #f5f5f5;\">

    <!-- Header -->
    <header id=\"layout-header\" class=\"container\">
        {% partial 'site/header' %}
    </header>

    <!-- Content -->
    <section id=\"layout-content\" class=\"container\">
        {% page %}
    </section>

    <!-- Footer -->
    <footer id=\"layout-footer\" class=\"container-fluid\">
        {% partial 'site/footer' %}
    </footer>

    <!-- Scripts -->
    <script src=\"{{ 'assets/vendor/jquery.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendor/bootstrap.js'|theme }}\"></script>
    <script src=\"{{ 'assets/javascript/app.js'|theme }}\"></script>
    {% framework extras %}
    {% scripts %}

    <script>
        \$(document).ready(function (e) {
            \$(\"input[name='typeuser']\").click(function (e) {
                if (e.target.value == 1) {
                    \$(\"#agence_first_login\").css('display', 'block');
                    \$(\"#demarcheur_first_login\").css('display', 'none');
                } else {
                    \$(\"#agence_first_login\").css('display', 'none');
                    \$(\"#demarcheur_first_login\").css('display', 'block');
                }
            });

            // afficher les informations (mail, tel) du demarcheur ou de l'agence
            let contact = 0;
            \$(\"a[href='#contactPhone'\").click(function () {
                \$(\".text-area\").css('display', 'block');
                \$(\"#contactPhone\").css('display', 'flex');
                contact += 1;
                displayTextArea(2);
            });
            \$(\".contactForm\").click(function () {
                \$(\".text-area\").css('display', 'block');
                \$(\"#contactForm\").css('display', 'flex');
                contact += 1;
                displayTextArea(1);
            });

            let displayTextArea = function (form) {
                if (contact > 1) {
                    \$(\".text-area\").removeClass('warning-small').addClass('warning-large');
                } else {
                    if (form == 2) {
                        \$(\"#contactPhone\").css('float', 'left');
                    }
                    \$(\".text-area\").addClass('warning-small');
                }
            }

            // chargement des images
            \$(\".imageminia\").click(function (e) {
                e.preventDefault();
                // alert(\"chargement d'image\");
                // console.log(e.target.attr('imgptf'));
                let indeximg = \$(this).data('imgptf');
                // console.log(\$(this).data('imgptf'));
                // console.log(\$(\".imggf-\"+indeximg).attr('src'));
                // \$(\".slide.active img\").attr('src', \$(\".imggf-\"+indeximg).attr('src'));
                // console.log();
                \$(\".slide.active\").removeClass(\"active\").css(\"opacity\", 0);
                \$(\".imggf-\" + indeximg).parent().addClass(\"active\").css(\"opacity\", '');
                \$(\".img-miniature li.active\").removeClass(\"active\");
                \$(this).parent().addClass('active');
            });

            \$(\"#addShopping\").click(function(){
                \$(\"#addShopping\").attr(\"disabled\", \"disabled\");
                \$.ajax({
                    url : \"http://localhost:8888/choubebe/register-commande/\"+\$(this).data('id'),
                    success: function(data){
                        \$(\"#myModal\").modal('toggle');
                        \$(\"#addShopping\").removeAttr(\"disabled\");
                    },
                    error: function(error){
                        \$(\"#addShopping\").removeAttr(\"disabled\");
                    }
                })
            });

        });
    </script>
</body>

</html>", "/Applications/MAMP/htdocs/choubebe/themes/demo/layouts/default.htm", "");
    }
}
