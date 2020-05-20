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
        background: #ebebeb;
        border: 1px solid #dddddd;
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
        width: 43%;
    }

    .specification span{
        font-weight: 500;font-size: 16px;
    }
</style>

<div class=\"row\">
    <div class=\"col-md-4\">
        <div class=\"slideshow gallery-js-ready autorotation-disabled\">
            <div class=\"mask\">
                <div class=\"slideset\" style=\"height: 420px;\">
                    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "photos", [], "any", false, false, false, 50));
        foreach ($context['_seq'] as $context["key"] => $context["photo"]) {
            // line 51
            echo "                    ";
            if (($context["key"] == 0)) {
                // line 52
                echo "                    <div class=\"slide active\" style=\"display: block;\"><img itemprop=\"image\" class=\"imggf-1\"
                            src=\"";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "photos", [], "any", false, false, false, 53)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "getPath", [], "any", false, false, false, 53), "html", null, true);
                echo "\"
                            alt=\"";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "libelle", [], "any", false, false, false, 54), "html", null, true);
                echo "\"></div>
                    ";
            } else {
                // line 56
                echo "                    <div class=\"slide\" style=\"display: block; opacity: 0;\">
                        <img itemprop=\"image\" class=\"imggf-";
                // line 57
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "getPath", [], "any", false, false, false, 57), "html", null, true);
                echo "\"
                            alt=\"";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "libelle", [], "any", false, false, false, 58), "html", null, true);
                echo "\"></div>
                    ";
            }
            // line 60
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                </div>
                <span class=\"loader\" style=\"display: none;\"></span>
            </div>
            <ul class=\"pagination img-miniature\">

                ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "photos", [], "any", false, false, false, 66));
        foreach ($context['_seq'] as $context["key"] => $context["photo"]) {
            // line 67
            echo "                    ";
            if (($context["key"] == 0)) {
                // line 68
                echo "                        <li class=\"active\">
                            <a href=\"javascript:void(0)\" class=\"imageminia\" data-imgptf=\"1\"><img
                                    style=\"width: 100px;height: 66px;\" src=\"";
                // line 70
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["photo"], "getPath", [], "any", false, false, false, 70), 100, 100]);
                echo "\"
                                    alt=\"";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "libelle", [], "any", false, false, false, 71), "html", null, true);
                echo "\">
                            </a>
                        </li>
                    ";
            } else {
                // line 75
                echo "                        <li><a href=\"javascript:void(0)\" class=\"imageminia\" data-imgptf=\"";
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "\"><img
                                    style=\"width: 100px;height: 66px;\" src=\"";
                // line 76
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["photo"], "getPath", [], "any", false, false, false, 76), 100, 100]);
                echo "\"
                                    alt=\"";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "libelle", [], "any", false, false, false, 77), "html", null, true);
                echo "\"></a></li>
                    ";
            }
            // line 79
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "            </ul>
        </div>
    </div>
    <div class=\"col-md-8\">
        <h4> ";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "libelle", [], "any", false, false, false, 84), "html", null, true);
        echo " </h4>
        <span> Marque : ";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "marque", [], "any", false, false, false, 85), "libelle", [], "any", false, false, false, 85), "html", null, true);
        echo "</span> <br>
        <span> Prix : ";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "prix", [], "any", false, false, false, 86), "html", null, true);
        echo " FCFA</span> <br>
        <span> Sexe : ";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "sexe", [], "any", false, false, false, 87), "html", null, true);
        echo " FCFA</span> <br>
        <span> Age : ";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "age", [], "any", false, false, false, 88), "libelle", [], "any", false, false, false, 88), "html", null, true);
        echo " FCFA</span> <br>
        <button type=\"button\" id=\"addShopping\" data-id=\"";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 89), "html", null, true);
        echo "\" class=\"btn btn-primary\">
            <i class=\"fas fa-shopping-cart\"></i>
            Je commande
        </a>
    </div>
</div>

<div class=\"row\">
    <div class=\"col-md-12\">
        <span><h4>Description</h4></span>
        <p>
            ";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "description", [], "any", false, false, false, 100), "html", null, true);
        echo "
        </p>
    </div>
</div>

<div class=\"modal\" tabindex=\"-1\" role=\"dialog\" id=\"myModal\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\">Ajouté au panier !</h5>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <div class=\"modal-body\">
          <p>";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "libelle", [], "any", false, false, false, 115), "html", null, true);
        echo " a été ajouté à votre panier </p>
          <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">POURSUIVRE VOTRE ACHAT</button>
          <a href=\"";
        // line 117
        echo url("cart");
        echo "\" class=\"btn btn-primary\">FINALISER LA COMMANDE </a>
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
        return array (  239 => 117,  234 => 115,  216 => 100,  202 => 89,  198 => 88,  194 => 87,  190 => 86,  186 => 85,  182 => 84,  176 => 80,  170 => 79,  165 => 77,  161 => 76,  156 => 75,  149 => 71,  145 => 70,  141 => 68,  138 => 67,  134 => 66,  127 => 61,  121 => 60,  116 => 58,  110 => 57,  107 => 56,  102 => 54,  98 => 53,  95 => 52,  92 => 51,  88 => 50,  37 => 1,);
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
        background: #ebebeb;
        border: 1px solid #dddddd;
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
        width: 43%;
    }

    .specification span{
        font-weight: 500;font-size: 16px;
    }
</style>

<div class=\"row\">
    <div class=\"col-md-4\">
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
            <ul class=\"pagination img-miniature\">

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
    <div class=\"col-md-8\">
        <h4> {{ article.libelle }} </h4>
        <span> Marque : {{ article.marque.libelle }}</span> <br>
        <span> Prix : {{ article.prix }} FCFA</span> <br>
        <span> Sexe : {{ article.sexe }} FCFA</span> <br>
        <span> Age : {{ article.age.libelle }} FCFA</span> <br>
        <button type=\"button\" id=\"addShopping\" data-id=\"{{ article.id }}\" class=\"btn btn-primary\">
            <i class=\"fas fa-shopping-cart\"></i>
            Je commande
        </a>
    </div>
</div>

<div class=\"row\">
    <div class=\"col-md-12\">
        <span><h4>Description</h4></span>
        <p>
            {{ article.description }}
        </p>
    </div>
</div>

<div class=\"modal\" tabindex=\"-1\" role=\"dialog\" id=\"myModal\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\">Ajouté au panier !</h5>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <div class=\"modal-body\">
          <p>{{ article.libelle }} a été ajouté à votre panier </p>
          <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">POURSUIVRE VOTRE ACHAT</button>
          <a href=\"{{ url('cart') }}\" class=\"btn btn-primary\">FINALISER LA COMMANDE </a>
        </div>
      </div>
    </div>
  </div>", "/Applications/MAMP/htdocs/choubebe/themes/demo/pages/detail_article.htm", "");
    }
}
