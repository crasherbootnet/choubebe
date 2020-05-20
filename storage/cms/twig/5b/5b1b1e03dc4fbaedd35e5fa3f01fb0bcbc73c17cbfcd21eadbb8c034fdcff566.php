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

/* /Applications/MAMP/htdocs/choubebe/themes/demo/pages/home.htm */
class __TwigTemplate_3b2840b806c0223932b91d388966ca5389f3be7fe42fd60ebb6484124f13b6a5 extends \Twig\Template
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
    * {
        box-sizing: border-box
    }

    body {
        font-family: Verdana, sans-serif;
        margin: 0
    }

    .mySlides {
        display: none
    }

    img {
        vertical-align: middle;
    }

    /* Slideshow container */
    .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
    }

    /* Next & previous buttons */
    .prev,
    .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -22px;
        color: white;
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
    }

    /* Position the \"next button\" to the right */
    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }

    /* Caption text */
    .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }

    .active,
    .dot:hover {
        background-color: #717171;
    }

    /* Fading animation */
    .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
    }

    @-webkit-keyframes fade {
        from {
            opacity: .4
        }

        to {
            opacity: 1
        }
    }

    @keyframes fade {
        from {
            opacity: .4
        }

        to {
            opacity: 1
        }
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {

        .prev,
        .next,
        .text {
            font-size: 11px
        }
    }
</style>

<div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"col-md-3\">
            <ul>
                <li>
                    <a href=\"\">Marque</a>
                    <ul>
                        ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["marques"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["marque"]) {
            // line 139
            echo "                        <li><a href=\"\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["marque"], "libelle", [], "any", false, false, false, 139), "html", null, true);
            echo "</a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['marque'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "                    </ul>
                </li>
                <li>
                    <a href=\"\">Mois</a>
                    <ul>
                        ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["age"]) {
            // line 147
            echo "                        <li><a href=\"\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["age"], "libelle", [], "any", false, false, false, 147), "html", null, true);
            echo "</a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['age'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "                    </ul>
                </li>
                <li>
                    <a href=\"\">Sexe</a>
                    <ul>
                        <li><a href=\"\">Femme</a></li>
                        <li><a href=\"\">Homme</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class=\"col-md-9\">
            <div class=\"slideshow-container\">

                ";
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bannieres"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banniere"]) {
            // line 164
            echo "                <div class=\"mySlides fade\" style=\"opacity: 1;\">
                    <!--<div class=\"numbertext\">1 / 3</div>-->
                    <img src=\"";
            // line 166
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banniere"], "cover", [], "any", false, false, false, 166), "getPath", [], "any", false, false, false, 166), "html", null, true);
            echo "\" style=\"width:100%\">
                    <!--<div class=\"text\">Caption Text</div>-->
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banniere'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "
                <a class=\"prev\" onclick=\"plusSlides(-1)\" style=\"display: none;\">&#10094;</a>
                <a class=\"next\" onclick=\"plusSlides(1)\" style=\"display: none;\">&#10095;</a>

            </div>

            <div style=\"text-align:center;position: relative;top: -25px;\">
                <span class=\"dot\" onclick=\"currentSlide(1)\"></span>
                <span class=\"dot\" onclick=\"currentSlide(2)\"></span>
                <span class=\"dot\" onclick=\"currentSlide(3)\"></span>
            </div>
        </div>
    </div>
</div>

<div class=\"row\">
    ";
        // line 186
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 187
            echo "    <a href=\"";
            echo url("articles");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 187), "html", null, true);
            echo "\" class=\"col-md-3\" style=\"margin-bottom: 15px;\">
        ";
            // line 188
            if ((twig_get_attribute($this->env, $this->source, $context["article"], "cover", [], "any", false, false, false, 188) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "cover", [], "any", false, false, false, 188), "getPath", [], "any", false, false, false, 188))) {
                // line 189
                echo "            <div style=\"width: 260px;height: 250px;\">
                <img src=\"";
                // line 190
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "cover", [], "any", false, false, false, 190), "getPath", [], "any", false, false, false, 190), "html", null, true);
                echo "\" style=\"width: 100%;height: 250px;\" alt=\"\">
            </div>
        ";
            } else {
                // line 193
                echo "        <svg class=\"bd-placeholder-img bd-placeholder-img-lg img-fluid\" width=\"100%\" height=\"250\"
        xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\"
        aria-label=\"Placeholder: Responsive image\">
        <title>Placeholder</title>
        <rect width=\"100%\" height=\"100%\" fill=\"#868e96\"></rect><text x=\"50%\" y=\"50%\" fill=\"#dee2e6\"
            dy=\".3em\">Responsive image</text>
    </svg>
        ";
            }
            // line 201
            echo "        <div class=\"product-brand pl-brand text-ellipsis \" data-cerberus=\"lnk_plpProduit_brand1\"
            style=\"text-align:center; font-size: 14px;font-weight: 600;overflow: hidden;white-space: nowrap;\">
            ";
            // line 203
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "libelle", [], "any", false, false, false, 203), "html", null, true);
            echo "
        </div>
        <div class=\"pl-price-line\" style=\"visibility: visible;\">
            <div class=\"product-price-container pl-price\" data-cerberus=\"txt_plp_nonDiscountedPrice\"
                style=\"visibility: visible;font-weight: 600;font-size: 18px;font-weight: 600;font-size: 18px;text-align: center\">
                <span class=\"product-price\">
                    ";
            // line 209
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "prix", [], "any", false, false, false, 209), "html", null, true);
            echo "
                </span>
            </div>
        </div>
    </a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 215
        echo "</div>

<script>
    var slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName(\"mySlides\");
      var dots = document.getElementsByClassName(\"dot\");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = \"none\";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(\" active\", \"\");
      }
      slides[slideIndex-1].style.display = \"block\";  
      dots[slideIndex-1].className += \" active\";
    }
</script>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/choubebe/themes/demo/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 215,  306 => 209,  297 => 203,  293 => 201,  283 => 193,  277 => 190,  274 => 189,  272 => 188,  265 => 187,  261 => 186,  243 => 170,  233 => 166,  229 => 164,  225 => 163,  209 => 149,  200 => 147,  196 => 146,  189 => 141,  180 => 139,  176 => 138,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    * {
        box-sizing: border-box
    }

    body {
        font-family: Verdana, sans-serif;
        margin: 0
    }

    .mySlides {
        display: none
    }

    img {
        vertical-align: middle;
    }

    /* Slideshow container */
    .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
    }

    /* Next & previous buttons */
    .prev,
    .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -22px;
        color: white;
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
    }

    /* Position the \"next button\" to the right */
    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }

    /* Caption text */
    .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }

    .active,
    .dot:hover {
        background-color: #717171;
    }

    /* Fading animation */
    .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
    }

    @-webkit-keyframes fade {
        from {
            opacity: .4
        }

        to {
            opacity: 1
        }
    }

    @keyframes fade {
        from {
            opacity: .4
        }

        to {
            opacity: 1
        }
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {

        .prev,
        .next,
        .text {
            font-size: 11px
        }
    }
</style>

<div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"col-md-3\">
            <ul>
                <li>
                    <a href=\"\">Marque</a>
                    <ul>
                        {% for marque in marques %}
                        <li><a href=\"\">{{ marque.libelle }}</a></li>
                        {% endfor %}
                    </ul>
                </li>
                <li>
                    <a href=\"\">Mois</a>
                    <ul>
                        {% for age in ages %}
                        <li><a href=\"\">{{ age.libelle }}</a></li>
                        {% endfor %}
                    </ul>
                </li>
                <li>
                    <a href=\"\">Sexe</a>
                    <ul>
                        <li><a href=\"\">Femme</a></li>
                        <li><a href=\"\">Homme</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class=\"col-md-9\">
            <div class=\"slideshow-container\">

                {% for banniere in bannieres %}
                <div class=\"mySlides fade\" style=\"opacity: 1;\">
                    <!--<div class=\"numbertext\">1 / 3</div>-->
                    <img src=\"{{ banniere.cover.getPath }}\" style=\"width:100%\">
                    <!--<div class=\"text\">Caption Text</div>-->
                </div>
                {% endfor %}

                <a class=\"prev\" onclick=\"plusSlides(-1)\" style=\"display: none;\">&#10094;</a>
                <a class=\"next\" onclick=\"plusSlides(1)\" style=\"display: none;\">&#10095;</a>

            </div>

            <div style=\"text-align:center;position: relative;top: -25px;\">
                <span class=\"dot\" onclick=\"currentSlide(1)\"></span>
                <span class=\"dot\" onclick=\"currentSlide(2)\"></span>
                <span class=\"dot\" onclick=\"currentSlide(3)\"></span>
            </div>
        </div>
    </div>
</div>

<div class=\"row\">
    {% for article in articles %}
    <a href=\"{{ url('articles') }}/{{ article.id }}\" class=\"col-md-3\" style=\"margin-bottom: 15px;\">
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
                    {{ article.prix }}
                </span>
            </div>
        </div>
    </a>
{% endfor %}
</div>

<script>
    var slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName(\"mySlides\");
      var dots = document.getElementsByClassName(\"dot\");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = \"none\";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(\" active\", \"\");
      }
      slides[slideIndex-1].style.display = \"block\";  
      dots[slideIndex-1].className += \" active\";
    }
</script>", "/Applications/MAMP/htdocs/choubebe/themes/demo/pages/home.htm", "");
    }
}
