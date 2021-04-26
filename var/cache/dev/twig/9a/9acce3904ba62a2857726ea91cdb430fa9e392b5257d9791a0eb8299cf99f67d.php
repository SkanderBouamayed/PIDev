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

/* pack/front_index_myPacks.html.twig */
class __TwigTemplate_bccfb85aa514ae0cd7ad8fd731546fd8a8e7d5dafad9f417912be5d02b5eac52 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "front_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pack/front_index_myPacks.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pack/front_index_myPacks.html.twig"));

        $this->parent = $this->loadTemplate("front_base.html.twig", "pack/front_index_myPacks.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <div class=\"row row--grid\">
        <!-- title -->
        <div class=\"col-12\">
            <div class=\"main__title\">
                <h2> Your Plans</h2>
            </div>
        </div>
        <!-- end title -->


        <div class=\"row row--grid\">
            <div class=\"col-12\">
                <div class=\"main__filter\">
                    <form action=\"#\" class=\"main__filter-search\">
                        <input id=\"myInput\" onkeyup=\"myFunction()\" type=\"text\" placeholder=\"Date, place, etc.\">
                        <button type=\"button\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><path d=\"M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z\"/></svg></button>
                    </form>




                </div>

<div class=\"row row--grid\">
    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["packs"]) || array_key_exists("packs", $context) ? $context["packs"] : (function () { throw new RuntimeError('Variable "packs" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pack"]) {
            // line 29
            echo "                    <div class=\"col-12 col-md-6 col-xl-4\" id=\"cards\">
                        <div class=\"event plan--red\" data-bg=\"img/events/event1.jpg\">
                            <span class=\"event__ticket\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                    <path d=\"M9,10a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V11A1,1,0,0,0,9,10Zm12,1a1,1,0,0,0,1-1V6a1,1,0,0,0-1-1H3A1,1,0,0,0,2,6v4a1,1,0,0,0,1,1,1,1,0,0,1,0,2,1,1,0,0,0-1,1v4a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1,1,1,0,0,1,0-2ZM20,9.18a3,3,0,0,0,0,5.64V17H10a1,1,0,0,0-2,0H4V14.82A3,3,0,0,0,4,9.18V7H8a1,1,0,0,0,2,0H20Z\"/>
                                </svg>
";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pack"], "prix", [], "any", false, false, false, 35), "html", null, true);
            echo " \$     </span>


                            <h3 class=\"event__title\" id=\"namePack\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pack"], "nom", [], "any", false, false, false, 38), "html", null, true);
            echo "</h3>
                            <p class=\"event__address\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pack"], "description", [], "any", false, false, false, 39), "html", null, true);
            echo "</p>
                            <a class=\"plan__btn \" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("orders_remove_front", ["id" => twig_get_attribute($this->env, $this->source, $context["pack"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">Delete plan</a>
                        </div>

                    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pack'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "    <div class=\"col-12 col-md-6 col-xl-4\">
        <div class=\"event plan--red\" data-bg=\"img/events/event1.jpg\">
                            <span class=\"event__ticket\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                    <path d=\"M9,10a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V11A1,1,0,0,0,9,10Zm12,1a1,1,0,0,0,1-1V6a1,1,0,0,0-1-1H3A1,1,0,0,0,2,6v4a1,1,0,0,0,1,1,1,1,0,0,1,0,2,1,1,0,0,0-1,1v4a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1,1,1,0,0,1,0-2ZM20,9.18a3,3,0,0,0,0,5.64V17H10a1,1,0,0,0-2,0H4V14.82A3,3,0,0,0,4,9.18V7H8a1,1,0,0,0,2,0H20Z\"/>
                                </svg>
50 \$    </span>
            <h3 class=\"event__title\"><a href=\"event.html\">Sorry Babushka</a></h3>
            <p class=\"event__address\">1 East Plumb Branch St.Saint Petersburg, FL 33702</p>
            <button class=\"plan__btn\" type=\"button\">Delete plan</button>
        </div>

    </div>
                </div></div>

        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pack/front_index_myPacks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 45,  121 => 40,  117 => 39,  113 => 38,  107 => 35,  99 => 29,  95 => 28,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front_base.html.twig' %}
{% block body %}

    <div class=\"row row--grid\">
        <!-- title -->
        <div class=\"col-12\">
            <div class=\"main__title\">
                <h2> Your Plans</h2>
            </div>
        </div>
        <!-- end title -->


        <div class=\"row row--grid\">
            <div class=\"col-12\">
                <div class=\"main__filter\">
                    <form action=\"#\" class=\"main__filter-search\">
                        <input id=\"myInput\" onkeyup=\"myFunction()\" type=\"text\" placeholder=\"Date, place, etc.\">
                        <button type=\"button\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><path d=\"M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z\"/></svg></button>
                    </form>




                </div>

<div class=\"row row--grid\">
    {% for pack in packs %}
                    <div class=\"col-12 col-md-6 col-xl-4\" id=\"cards\">
                        <div class=\"event plan--red\" data-bg=\"img/events/event1.jpg\">
                            <span class=\"event__ticket\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                    <path d=\"M9,10a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V11A1,1,0,0,0,9,10Zm12,1a1,1,0,0,0,1-1V6a1,1,0,0,0-1-1H3A1,1,0,0,0,2,6v4a1,1,0,0,0,1,1,1,1,0,0,1,0,2,1,1,0,0,0-1,1v4a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1,1,1,0,0,1,0-2ZM20,9.18a3,3,0,0,0,0,5.64V17H10a1,1,0,0,0-2,0H4V14.82A3,3,0,0,0,4,9.18V7H8a1,1,0,0,0,2,0H20Z\"/>
                                </svg>
{{ pack.prix }} \$     </span>


                            <h3 class=\"event__title\" id=\"namePack\">{{ pack.nom }}</h3>
                            <p class=\"event__address\">{{ pack.description }}</p>
                            <a class=\"plan__btn \" href=\"{{ path('orders_remove_front', {'id': pack.id}) }}\">Delete plan</a>
                        </div>

                    </div>
    {% endfor %}
    <div class=\"col-12 col-md-6 col-xl-4\">
        <div class=\"event plan--red\" data-bg=\"img/events/event1.jpg\">
                            <span class=\"event__ticket\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                    <path d=\"M9,10a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V11A1,1,0,0,0,9,10Zm12,1a1,1,0,0,0,1-1V6a1,1,0,0,0-1-1H3A1,1,0,0,0,2,6v4a1,1,0,0,0,1,1,1,1,0,0,1,0,2,1,1,0,0,0-1,1v4a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1,1,1,0,0,1,0-2ZM20,9.18a3,3,0,0,0,0,5.64V17H10a1,1,0,0,0-2,0H4V14.82A3,3,0,0,0,4,9.18V7H8a1,1,0,0,0,2,0H20Z\"/>
                                </svg>
50 \$    </span>
            <h3 class=\"event__title\"><a href=\"event.html\">Sorry Babushka</a></h3>
            <p class=\"event__address\">1 East Plumb Branch St.Saint Petersburg, FL 33702</p>
            <button class=\"plan__btn\" type=\"button\">Delete plan</button>
        </div>

    </div>
                </div></div>

        </div>
    </div>
{% endblock %}", "pack/front_index_myPacks.html.twig", "/opt/lampp/htdocs/PIDEV/PIDev/templates/pack/front_index_myPacks.html.twig");
    }
}
