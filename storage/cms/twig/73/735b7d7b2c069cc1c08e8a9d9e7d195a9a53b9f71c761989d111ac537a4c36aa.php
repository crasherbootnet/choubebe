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

/* /Applications/MAMP/htdocs/choubebe/themes/demo/pages/cart.htm */
class __TwigTemplate_26550d723f3fef1c3e2b6f81b19379c38196e3bc4b1105567678bab68b18f4b1 extends \Twig\Template
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
        echo "<div class=\"row\" style=\"margin-left: 10%;margin-right: 10%;\">

<h2>Paniers  </h2>

<style>
    span {
        font-size: 14px;
        
    }

    .pd-span{
        padding-top: 15px;
    }
</style>

";
        // line 16
        if ((twig_length_filter($this->env, ($context["articles"] ?? null)) > 0)) {
            // line 17
            echo "    <div class=\"col-md-12\" style=\"margin-top: 25px;\">
        <div class=\"col-md-6 pd-span\">
            ARTICLE
        </div>
        <div class=\"col-md-2 pd-span\">QUANTITÉ</div>
        <div class=\"col-md-2 pd-span\"><span>PRIX UNITAIRE</span></div>
        <div class=\"col-md-2 pd-span\"><span>SOUS TOTAL</span></div>
    </div>
    ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 26
                echo "        <div class=\"col-md-12\" style=\"margin-top: 25px;\">
            <div class=\"col-md-2\">
                <img src=\"";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "article", [], "any", false, false, false, 28), "cover", [], "any", false, false, false, 28), "getpath", [], "any", false, false, false, 28), "html", null, true);
                echo "\" style=\"width: 100%\" alt=\"\">
            </div>
            <div class=\"col-md-4 pd-span\">
                <span>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "article", [], "any", false, false, false, 31), "libelle", [], "any", false, false, false, 31), "html", null, true);
                echo "</span>
            </div>
            <div class=\"col-md-2 pd-span\"><span>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nbre", [], "any", false, false, false, 33), "html", null, true);
                echo "</span></div>
            <div class=\"col-md-2 pd-span\"><span style=\"font-weight: bold;\">";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "article", [], "any", false, false, false, 34), "prix", [], "any", false, false, false, 34), "html", null, true);
                echo " FCFA</span></div>
            <div class=\"col-md-2 pd-span\"><span style=\"font-weight: bold;\">";
                // line 35
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "article", [], "any", false, false, false, 35), "prix", [], "any", false, false, false, 35) * twig_get_attribute($this->env, $this->source, $context["article"], "nbre", [], "any", false, false, false, 35)), "html", null, true);
                echo " FCFA</span></div>
            ";
                // line 36
                $context["total"] = (($context["total"] ?? null) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "article", [], "any", false, false, false, 36), "prix", [], "any", false, false, false, 36) * twig_get_attribute($this->env, $this->source, $context["article"], "nbre", [], "any", false, false, false, 36)));
                // line 37
                echo "        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "    <div class=\"col-md-12\" style=\"margin-top: 25px;\">
        <a href=\"";
            // line 40
            echo url("/");
            echo "\" class=\"btn btn-primary\">Poursuivre votre achat</a>
        <a href=\"";
            // line 41
            echo url("/finaliser-commande");
            echo "\" class=\"btn btn-primary\">Finaliser votre commande </a>
    </div>
";
        } else {
            // line 44
            echo "       
<p>Aucun article commandés</p>
    <a href=\"";
            // line 46
            echo url("/");
            echo "\">Passer une commande</a>
";
        }
        // line 48
        echo "
<!--";
        // line 49
        if ((twig_length_filter($this->env, ($context["articles"] ?? null)) > 0)) {
            // line 50
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 51
                echo "    <ul>
        <li><img src=\"";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "article", [], "any", false, false, false, 52), "cover", [], "any", false, false, false, 52), "getpath", [], "any", false, false, false, 52), "html", null, true);
                echo "\" alt=\"\"></li>
        <li>libelle : ";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "article", [], "any", false, false, false, 53), "libelle", [], "any", false, false, false, 53), "html", null, true);
                echo "</li>
        <li>Quatité :  ";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nbre", [], "any", false, false, false, 54), "html", null, true);
                echo "</li>
        <li>Prix unitaire :  ";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "article", [], "any", false, false, false, 55), "prix", [], "any", false, false, false, 55), "html", null, true);
                echo "</li>
        <li>Sous total :  ";
                // line 56
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "article", [], "any", false, false, false, 56), "prix", [], "any", false, false, false, 56) * twig_get_attribute($this->env, $this->source, $context["article"], "nbre", [], "any", false, false, false, 56)), "html", null, true);
                echo "</li>
        ";
                // line 57
                $context["total"] = (($context["total"] ?? null) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "article", [], "any", false, false, false, 57), "prix", [], "any", false, false, false, 57) * twig_get_attribute($this->env, $this->source, $context["article"], "nbre", [], "any", false, false, false, 57)));
                // line 58
                echo "    </ul>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "

    total :  ";
            // line 62
            echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
            echo " FCFA

    <a href=\"";
            // line 64
            echo url("/");
            echo "\" class=\"btn btn-primary\">Poursuivre votre achat</a>
    <a href=\"";
            // line 65
            echo url("/finaliser-commande");
            echo "\" class=\"btn btn-primary\">Finaliser votre commande </a>
";
        } else {
            // line 67
            echo "    <p>Aucun article commandés</p>
    <a href=\"";
            // line 68
            echo url("/");
            echo "\">Passer une commande</a>
";
        }
        // line 69
        echo "-->
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/choubebe/themes/demo/pages/cart.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 69,  191 => 68,  188 => 67,  183 => 65,  179 => 64,  174 => 62,  170 => 60,  163 => 58,  161 => 57,  157 => 56,  153 => 55,  149 => 54,  145 => 53,  141 => 52,  138 => 51,  133 => 50,  131 => 49,  128 => 48,  123 => 46,  119 => 44,  113 => 41,  109 => 40,  106 => 39,  99 => 37,  97 => 36,  93 => 35,  89 => 34,  85 => 33,  80 => 31,  74 => 28,  70 => 26,  66 => 25,  56 => 17,  54 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\" style=\"margin-left: 10%;margin-right: 10%;\">

<h2>Paniers  </h2>

<style>
    span {
        font-size: 14px;
        
    }

    .pd-span{
        padding-top: 15px;
    }
</style>

{% if articles|length > 0 %}
    <div class=\"col-md-12\" style=\"margin-top: 25px;\">
        <div class=\"col-md-6 pd-span\">
            ARTICLE
        </div>
        <div class=\"col-md-2 pd-span\">QUANTITÉ</div>
        <div class=\"col-md-2 pd-span\"><span>PRIX UNITAIRE</span></div>
        <div class=\"col-md-2 pd-span\"><span>SOUS TOTAL</span></div>
    </div>
    {% for article in articles %}
        <div class=\"col-md-12\" style=\"margin-top: 25px;\">
            <div class=\"col-md-2\">
                <img src=\"{{ article.article.cover.getpath }}\" style=\"width: 100%\" alt=\"\">
            </div>
            <div class=\"col-md-4 pd-span\">
                <span>{{ article.article.libelle }}</span>
            </div>
            <div class=\"col-md-2 pd-span\"><span>{{ article.nbre }}</span></div>
            <div class=\"col-md-2 pd-span\"><span style=\"font-weight: bold;\">{{ article.article.prix }} FCFA</span></div>
            <div class=\"col-md-2 pd-span\"><span style=\"font-weight: bold;\">{{ article.article.prix * article.nbre }} FCFA</span></div>
            {% set total = total + article.article.prix * article.nbre %}
        </div>
    {% endfor %}
    <div class=\"col-md-12\" style=\"margin-top: 25px;\">
        <a href=\"{{ url('/') }}\" class=\"btn btn-primary\">Poursuivre votre achat</a>
        <a href=\"{{ url('/finaliser-commande') }}\" class=\"btn btn-primary\">Finaliser votre commande </a>
    </div>
{% else %}
       
<p>Aucun article commandés</p>
    <a href=\"{{ url('/') }}\">Passer une commande</a>
{% endif %}

<!--{% if articles|length > 0 %}
    {% for article in articles %}
    <ul>
        <li><img src=\"{{ article.article.cover.getpath }}\" alt=\"\"></li>
        <li>libelle : {{ article.article.libelle }}</li>
        <li>Quatité :  {{ article.nbre }}</li>
        <li>Prix unitaire :  {{ article.article.prix }}</li>
        <li>Sous total :  {{ article.article.prix * article.nbre }}</li>
        {% set total = total + article.article.prix * article.nbre %}
    </ul>
    {% endfor %}


    total :  {{ total }} FCFA

    <a href=\"{{ url('/') }}\" class=\"btn btn-primary\">Poursuivre votre achat</a>
    <a href=\"{{ url('/finaliser-commande') }}\" class=\"btn btn-primary\">Finaliser votre commande </a>
{% else %}
    <p>Aucun article commandés</p>
    <a href=\"{{ url('/') }}\">Passer une commande</a>
{% endif %}-->
</div>", "/Applications/MAMP/htdocs/choubebe/themes/demo/pages/cart.htm", "");
    }
}
