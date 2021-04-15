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

/* pack/index.html.twig */
class __TwigTemplate_587c8fecd95e8e15a26eb225686f2096cc04915d7e4478c10fc6da7214e518cd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pack/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pack/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pack/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Packs";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Packs</h1>
    <!-- DATA TABLE -->
    <div class=\"table-data__tool\">
        <div class=\"table-data__tool-left\">
            <div class=\"rs-select2--light rs-select2--md\">
                <select class=\"js-select2\" name=\"property\">
                    <option selected=\"selected\">All Properties</option>
                    <option value=\"\">Option 1</option>
                    <option value=\"\">Option 2</option>
                </select>
                <div class=\"dropDownSelect2\"></div>
            </div>
            <div class=\"rs-select2--light rs-select2--sm\">
                <select class=\"js-select2\" name=\"time\">
                    <option selected=\"selected\">Today</option>
                    <option value=\"\">3 Days</option>
                    <option value=\"\">1 Week</option>
                </select>
                <div class=\"dropDownSelect2\"></div>
            </div>        </div>
        <div class=\"table-data__tool-right\">
            <button class=\"au-btn au-btn-icon au-btn--green au-btn--small\">
                <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pack_new");
        echo "\"> <i class=\"zmdi zmdi-plus\"></i>add item</a></button>
        </div>

    </div>
    <div class=\"table-responsive table-responsive-data2\">
        <table class=\"table table-data2\">
            <thead>
            <tr>
                <th>
                    <label class=\"au-checkbox\">
                        <input type=\"checkbox\">
                        <span class=\"au-checkmark\"></span>
                    </label>
                </th>
                <th>id</th>
                <th>name</th>
                <th>description</th>
                <th>price</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["packs"]) || array_key_exists("packs", $context) ? $context["packs"] : (function () { throw new RuntimeError('Variable "packs" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pack"]) {
            // line 51
            echo "            <tr class=\"tr-shadow\">
                <td>
                    <label class=\"au-checkbox\">
                        <input type=\"checkbox\">
                        <span class=\"au-checkmark\"></span>
                    </label>
                </td>
                <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pack"], "id", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                <td>
                    <span class=\"block-email\">";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pack"], "nom", [], "any", false, false, false, 60), "html", null, true);
            echo "</span>
                </td>
                <td class=\"desc\">";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pack"], "description", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pack"], "prix", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                <td>
                    <div class=\"table-data-feature\">
                        <button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Show\">
                            <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pack_show", ["id" => twig_get_attribute($this->env, $this->source, $context["pack"], "id", [], "any", false, false, false, 67)]), "html", null, true);
            echo "\"><i class=\"zmdi zmdi-mail-send\"></i></a>
                        </button>
                        <button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Edit\">
                            <a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pack_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["pack"], "id", [], "any", false, false, false, 70)]), "html", null, true);
            echo "\"><i class=\"zmdi zmdi-edit\"></i></a>
                        </button>
                        <!--button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Delete\">
                            <i class=\"zmdi zmdi-delete\"></i>
                        </button-->

                    </div>
                </td>
            </tr>
            <tr class=\"spacer\"></tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pack'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "            </tbody>
        </table>
    </div>
    <!-- END DATA TABLE -->


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pack/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 81,  177 => 70,  171 => 67,  164 => 63,  160 => 62,  155 => 60,  150 => 58,  141 => 51,  137 => 50,  112 => 28,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Packs{% endblock %}

{% block body %}
    <h1>Packs</h1>
    <!-- DATA TABLE -->
    <div class=\"table-data__tool\">
        <div class=\"table-data__tool-left\">
            <div class=\"rs-select2--light rs-select2--md\">
                <select class=\"js-select2\" name=\"property\">
                    <option selected=\"selected\">All Properties</option>
                    <option value=\"\">Option 1</option>
                    <option value=\"\">Option 2</option>
                </select>
                <div class=\"dropDownSelect2\"></div>
            </div>
            <div class=\"rs-select2--light rs-select2--sm\">
                <select class=\"js-select2\" name=\"time\">
                    <option selected=\"selected\">Today</option>
                    <option value=\"\">3 Days</option>
                    <option value=\"\">1 Week</option>
                </select>
                <div class=\"dropDownSelect2\"></div>
            </div>        </div>
        <div class=\"table-data__tool-right\">
            <button class=\"au-btn au-btn-icon au-btn--green au-btn--small\">
                <a href=\"{{ path('pack_new') }}\"> <i class=\"zmdi zmdi-plus\"></i>add item</a></button>
        </div>

    </div>
    <div class=\"table-responsive table-responsive-data2\">
        <table class=\"table table-data2\">
            <thead>
            <tr>
                <th>
                    <label class=\"au-checkbox\">
                        <input type=\"checkbox\">
                        <span class=\"au-checkmark\"></span>
                    </label>
                </th>
                <th>id</th>
                <th>name</th>
                <th>description</th>
                <th>price</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            {% for pack in packs %}
            <tr class=\"tr-shadow\">
                <td>
                    <label class=\"au-checkbox\">
                        <input type=\"checkbox\">
                        <span class=\"au-checkmark\"></span>
                    </label>
                </td>
                <td>{{ pack.id }}</td>
                <td>
                    <span class=\"block-email\">{{ pack.nom }}</span>
                </td>
                <td class=\"desc\">{{ pack.description }}</td>
                <td>{{ pack.prix }}</td>
                <td>
                    <div class=\"table-data-feature\">
                        <button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Show\">
                            <a href=\"{{ path('pack_show', {'id': pack.id}) }}\"><i class=\"zmdi zmdi-mail-send\"></i></a>
                        </button>
                        <button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Edit\">
                            <a href=\"{{ path('pack_edit', {'id': pack.id}) }}\"><i class=\"zmdi zmdi-edit\"></i></a>
                        </button>
                        <!--button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Delete\">
                            <i class=\"zmdi zmdi-delete\"></i>
                        </button-->

                    </div>
                </td>
            </tr>
            <tr class=\"spacer\"></tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
    <!-- END DATA TABLE -->


{% endblock %}
", "pack/index.html.twig", "/opt/lampp/htdocs/PIDEV/PIDev/templates/pack/index.html.twig");
    }
}
