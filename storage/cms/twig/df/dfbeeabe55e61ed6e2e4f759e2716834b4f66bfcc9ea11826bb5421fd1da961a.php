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

/* /Applications/MAMP/htdocs/choubebe/themes/demo/pages/detail_article.htm */
class __TwigTemplate_d693d3c57ff95b341ce3a43877f21a86f0331214c0aed96d3fc9ec40ee28c980 extends \Twig\Template
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
    .slide {
        position: absolute;
        z-index: 1; 
        left: 0;
        top: 0;
        right: 0;
        min-height: 420px;
        text-align: center;
        white-space: nowrap;
        line-height: 415px;
    }

    .slideset {
        position: relative;
        background: #fff;
        border: 0px solid #dddddd;
    }

    .slideshow {
        position: relative;
        margin: 0 0 20px;
    }

    .responsive {
        height: 160px;
    }

    .slide img {
        margin: auto;
        display: inline;
        vertical-align: middle;
        line-height: normal;
    }

    .slide img {
        width: 100%;
    }

    .specification span{
        font-weight: 500;font-size: 16px;
    }

    #addShopping{
        width: 100%;
        height: 7%;
        font-size: 14px;
    }

    .pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus{
        background-color: unset;
    }
</style>

<div class=\"row\">
    <div class=\"col-md-6\">
        <div class=\"slideshow gallery-js-ready autorotation-disabled\">
            <div class=\"mask\">
                <div class=\"slideset\" style=\"height: 420px;\">
                    ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "photos", [], "any", false, false, false, 60));
        foreach ($context['_seq'] as $context["key"] => $context["photo"]) {
            // line 61
            echo "                    ";
            if (($context["key"] == 0)) {
                // line 62
                echo "                    <div class=\"slide active\" style=\"display: block;\"><img itemprop=\"image\" class=\"imggf-1\"
                            src=\"";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "photos", [], "any", false, false, false, 63)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "getPath", [], "any", false, false, false, 63), "html", null, true);
                echo "\"
                            alt=\"";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "libelle", [], "any", false, false, false, 64), "html", null, true);
                echo "\"></div>
                    ";
            } else {
                // line 66
                echo "                    <div class=\"slide\" style=\"display: block; opacity: 0;\">
                        <img itemprop=\"image\" class=\"imggf-";
                // line 67
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "getPath", [], "any", false, false, false, 67), "html", null, true);
                echo "\"
                            alt=\"";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "libelle", [], "any", false, false, false, 68), "html", null, true);
                echo "\"></div>
                    ";
            }
            // line 70
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                </div>
                <span class=\"loader\" style=\"display: none;\"></span>
            </div>
            <ul class=\"pagination img-miniature\" style=\"display: inline-block;\">

                ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "photos", [], "any", false, false, false, 76));
        foreach ($context['_seq'] as $context["key"] => $context["photo"]) {
            // line 77
            echo "                    ";
            if (($context["key"] == 0)) {
                // line 78
                echo "                        <li class=\"active\">
                            <a href=\"javascript:void(0)\" class=\"imageminia\" data-imgptf=\"1\"><img
                                    style=\"width: 100px;height: 66px;\" src=\"";
                // line 80
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["photo"], "getPath", [], "any", false, false, false, 80), 100, 100]);
                echo "\"
                                    alt=\"";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "libelle", [], "any", false, false, false, 81), "html", null, true);
                echo "\">
                            </a>
                        </li>
                    ";
            } else {
                // line 85
                echo "                        <li><a href=\"javascript:void(0)\" class=\"imageminia\" data-imgptf=\"";
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "\"><img
                                    style=\"width: 100px;height: 66px;\" src=\"";
                // line 86
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["photo"], "getPath", [], "any", false, false, false, 86), 100, 100]);
                echo "\"
                                    alt=\"";
                // line 87
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "libelle", [], "any", false, false, false, 87), "html", null, true);
                echo "\"></a></li>
                    ";
            }
            // line 89
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "            </ul>
        </div>
    </div>
    <div class=\"col-md-6\">
        <h4 style=\"font-size: 22px;font-weight: bold;\"> ";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "libelle", [], "any", false, false, false, 94), "html", null, true);
        echo " </h4>
        <span style=\"font-size: 14px;display: block;\"> Marque : ";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "marque", [], "any", false, false, false, 95), "libelle", [], "any", false, false, false, 95), "html", null, true);
        echo "</span>
        <span style=\"font-size: 14px;display: block\"> Sexe : ";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "sexe", [], "any", false, false, false, 96), "html", null, true);
        echo "</span>
        <span style=\"font-size: 14px;display: block\"> Age : ";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "age", [], "any", false, false, false, 97), "libelle", [], "any", false, false, false, 97), "html", null, true);
        echo " </span>
        <span style=\"font-size: 2.25rem;display: block;margin-top: 14px;\"> Prix : ";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "prix", [], "any", false, false, false, 98), "html", null, true);
        echo " FCFA</span>
        <button type=\"button\" style=\"margin-top: 27px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);\"id=\"addShopping\" data-id=\"";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 99), "html", null, true);
        echo "\" class=\"btn btn-primary\">
            <i class=\"fas fa-shopping-cart\"></i> Je commande
        </a>
    </div>
</div>


<div class=\"row\">
    <div class=\"col-md-12\">
        <span><h4 style=\"font-size: 2.25rem;\">Description</h4></span>
        <p style=\"font-size: 14px\">
            ";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "description", [], "any", false, false, false, 110), "html", null, true);
        echo "
        </p>
    </div>
</div>

<div class=\"row\" style=\"padding-top: 20px;\">
    <h4 class=\"col-md-12\" style=\"font-size: 2.25rem;margin-bottom: 12px;\">Les articles similaires </h4>
    ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 118
            echo "    <a href=\"";
            echo url("articles");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 118), "html", null, true);
            echo "\" class=\"col-md-3\" style=\"margin-bottom: 15px;
    text-decoration: none;color: #000\">
        ";
            // line 120
            if ((twig_get_attribute($this->env, $this->source, $context["article"], "cover", [], "any", false, false, false, 120) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "cover", [], "any", false, false, false, 120), "getPath", [], "any", false, false, false, 120))) {
                // line 121
                echo "            <div style=\"width: 260px;height: 250px;\">
                <img src=\"";
                // line 122
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "cover", [], "any", false, false, false, 122), "getPath", [], "any", false, false, false, 122), "html", null, true);
                echo "\" style=\"width: 100%;height: 250px;\" alt=\"\">
            </div>
        ";
            } else {
                // line 125
                echo "        <svg class=\"bd-placeholder-img bd-placeholder-img-lg img-fluid\" width=\"100%\" height=\"250\"
        xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\"
        aria-label=\"Placeholder: Responsive image\">
        <title>Placeholder</title>
        <rect width=\"100%\" height=\"100%\" fill=\"#868e96\"></rect><text x=\"50%\" y=\"50%\" fill=\"#dee2e6\"
            dy=\".3em\">Responsive image</text>
    </svg>
        ";
            }
            // line 133
            echo "        <div class=\"product-brand pl-brand text-ellipsis \" data-cerberus=\"lnk_plpProduit_brand1\"
            style=\"text-align:center; font-size: 14px;font-weight: 600;overflow: hidden;white-space: nowrap;\">
            ";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "libelle", [], "any", false, false, false, 135), "html", null, true);
            echo "
        </div>
        <div class=\"pl-price-line\" style=\"visibility: visible;\">
            <div class=\"product-price-container pl-price\" data-cerberus=\"txt_plp_nonDiscountedPrice\"
                style=\"visibility: visible;font-weight: 600;font-size: 18px;font-weight: 600;font-size: 18px;text-align: center\">
                <span class=\"product-price\">
                    ";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "prix", [], "any", false, false, false, 141), "html", null, true);
            echo " FCFA
                </span>
            </div>
        </div>
    </a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "</div>

<div class=\"modal\" tabindex=\"-1\" role=\"dialog\" id=\"myModal\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\" style=\"border-bottom: 0px;\">
          <h5 class=\"modal-title\" style=\"font-size: 2.25rem;\">Ajouté au panier !</h5>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <div class=\"modal-body row\">
            <p style=\"font-size: 2rem;\" class=\"col-md-12\">";
        // line 159
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "libelle", [], "any", false, false, false, 159), "html", null, true);
        echo " a été ajouté à votre panier </p>
          <div class=\"col-md-12\">
            <div class=\"row\" style=\"margin-top: 20px;margin-bottom: 20px;\">
                <div class=\"col-md-6\">
                    <button type=\"button\" class=\"btn btn-primary col-md-12\" data-dismiss=\"modal\" style=\"font-size: 14px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);height: 35px;\">POURSUIVRE VOTRE ACHAT</button>
                </div>
                <div class=\"col-md-6\">
                    <a href=\"";
        // line 166
        echo url("cart");
        echo "\" class=\"btn btn-success col-md-12\" style=\"font-size: 14px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);height: 35px;\">FINALISER LA COMMANDE </a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/choubebe/themes/demo/pages/detail_article.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 166,  308 => 159,  294 => 147,  282 => 141,  273 => 135,  269 => 133,  259 => 125,  253 => 122,  250 => 121,  248 => 120,  240 => 118,  236 => 117,  226 => 110,  212 => 99,  208 => 98,  204 => 97,  200 => 96,  196 => 95,  192 => 94,  186 => 90,  180 => 89,  175 => 87,  171 => 86,  166 => 85,  159 => 81,  155 => 80,  151 => 78,  148 => 77,  144 => 76,  137 => 71,  131 => 70,  126 => 68,  120 => 67,  117 => 66,  112 => 64,  108 => 63,  105 => 62,  102 => 61,  98 => 60,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    .slide {
        position: absolute;
        z-index: 1; 
        left: 0;
        top: 0;
        right: 0;
        min-height: 420px;
        text-align: center;
        white-space: nowrap;
        line-height: 415px;
    }

    .slideset {
        position: relative;
        background: #fff;
        border: 0px solid #dddddd;
    }

    .slideshow {
        position: relative;
        margin: 0 0 20px;
    }

    .responsive {
        height: 160px;
    }

    .slide img {
        margin: auto;
        display: inline;
        vertical-align: middle;
        line-height: normal;
    }

    .slide img {
        width: 100%;
    }

    .specification span{
        font-weight: 500;font-size: 16px;
    }

    #addShopping{
        width: 100%;
        height: 7%;
        font-size: 14px;
    }

    .pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus{
        background-color: unset;
    }
</style>

<div class=\"row\">
    <div class=\"col-md-6\">
        <div class=\"slideshow gallery-js-ready autorotation-disabled\">
            <div class=\"mask\">
                <div class=\"slideset\" style=\"height: 420px;\">
                    {% for key,photo in article.photos %}
                    {% if key == 0 %}
                    <div class=\"slide active\" style=\"display: block;\"><img itemprop=\"image\" class=\"imggf-1\"
                            src=\"{{ article.photos[0].getPath }}\"
                            alt=\"{{ article.libelle }}\"></div>
                    {% else %}
                    <div class=\"slide\" style=\"display: block; opacity: 0;\">
                        <img itemprop=\"image\" class=\"imggf-{{ key+1 }}\" src=\"{{ photo.getPath }}\"
                            alt=\"{{ article.libelle }}\"></div>
                    {% endif %}
                    {% endfor %}
                </div>
                <span class=\"loader\" style=\"display: none;\"></span>
            </div>
            <ul class=\"pagination img-miniature\" style=\"display: inline-block;\">

                {% for key,photo in article.photos %}
                    {% if key == 0 %}
                        <li class=\"active\">
                            <a href=\"javascript:void(0)\" class=\"imageminia\" data-imgptf=\"1\"><img
                                    style=\"width: 100px;height: 66px;\" src=\"{{ photo.getPath | resize(100,100)}}\"
                                    alt=\"{{ article.libelle }}\">
                            </a>
                        </li>
                    {% else %}
                        <li><a href=\"javascript:void(0)\" class=\"imageminia\" data-imgptf=\"{{ key +1}}\"><img
                                    style=\"width: 100px;height: 66px;\" src=\"{{ photo.getPath| resize(100,100) }}\"
                                    alt=\"{{ article.libelle }}\"></a></li>
                    {% endif %}
                {% endfor %}
            </ul>
        </div>
    </div>
    <div class=\"col-md-6\">
        <h4 style=\"font-size: 22px;font-weight: bold;\"> {{ article.libelle }} </h4>
        <span style=\"font-size: 14px;display: block;\"> Marque : {{ article.marque.libelle }}</span>
        <span style=\"font-size: 14px;display: block\"> Sexe : {{ article.sexe }}</span>
        <span style=\"font-size: 14px;display: block\"> Age : {{ article.age.libelle }} </span>
        <span style=\"font-size: 2.25rem;display: block;margin-top: 14px;\"> Prix : {{ article.prix }} FCFA</span>
        <button type=\"button\" style=\"margin-top: 27px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);\"id=\"addShopping\" data-id=\"{{ article.id }}\" class=\"btn btn-primary\">
            <i class=\"fas fa-shopping-cart\"></i> Je commande
        </a>
    </div>
</div>


<div class=\"row\">
    <div class=\"col-md-12\">
        <span><h4 style=\"font-size: 2.25rem;\">Description</h4></span>
        <p style=\"font-size: 14px\">
            {{ article.description }}
        </p>
    </div>
</div>

<div class=\"row\" style=\"padding-top: 20px;\">
    <h4 class=\"col-md-12\" style=\"font-size: 2.25rem;margin-bottom: 12px;\">Les articles similaires </h4>
    {% for article in articles %}
    <a href=\"{{ url('articles') }}/{{ article.id }}\" class=\"col-md-3\" style=\"margin-bottom: 15px;
    text-decoration: none;color: #000\">
        {% if article.cover and article.cover.getPath %}
            <div style=\"width: 260px;height: 250px;\">
                <img src=\"{{ article.cover.getPath }}\" style=\"width: 100%;height: 250px;\" alt=\"\">
            </div>
        {% else %}
        <svg class=\"bd-placeholder-img bd-placeholder-img-lg img-fluid\" width=\"100%\" height=\"250\"
        xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\"
        aria-label=\"Placeholder: Responsive image\">
        <title>Placeholder</title>
        <rect width=\"100%\" height=\"100%\" fill=\"#868e96\"></rect><text x=\"50%\" y=\"50%\" fill=\"#dee2e6\"
            dy=\".3em\">Responsive image</text>
    </svg>
        {% endif %}
        <div class=\"product-brand pl-brand text-ellipsis \" data-cerberus=\"lnk_plpProduit_brand1\"
            style=\"text-align:center; font-size: 14px;font-weight: 600;overflow: hidden;white-space: nowrap;\">
            {{ article.libelle }}
        </div>
        <div class=\"pl-price-line\" style=\"visibility: visible;\">
            <div class=\"product-price-container pl-price\" data-cerberus=\"txt_plp_nonDiscountedPrice\"
                style=\"visibility: visible;font-weight: 600;font-size: 18px;font-weight: 600;font-size: 18px;text-align: center\">
                <span class=\"product-price\">
                    {{ article.prix }} FCFA
                </span>
            </div>
        </div>
    </a>
{% endfor %}
</div>

<div class=\"modal\" tabindex=\"-1\" role=\"dialog\" id=\"myModal\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\" style=\"border-bottom: 0px;\">
          <h5 class=\"modal-title\" style=\"font-size: 2.25rem;\">Ajouté au panier !</h5>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <div class=\"modal-body row\">
            <p style=\"font-size: 2rem;\" class=\"col-md-12\">{{ article.libelle }} a été ajouté à votre panier </p>
          <div class=\"col-md-12\">
            <div class=\"row\" style=\"margin-top: 20px;margin-bottom: 20px;\">
                <div class=\"col-md-6\">
                    <button type=\"button\" class=\"btn btn-primary col-md-12\" data-dismiss=\"modal\" style=\"font-size: 14px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);height: 35px;\">POURSUIVRE VOTRE ACHAT</button>
                </div>
                <div class=\"col-md-6\">
                    <a href=\"{{ url('cart') }}\" class=\"btn btn-success col-md-12\" style=\"font-size: 14px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);height: 35px;\">FINALISER LA COMMANDE </a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>", "/Applications/MAMP/htdocs/choubebe/themes/demo/pages/detail_article.htm", "");
    }
}
