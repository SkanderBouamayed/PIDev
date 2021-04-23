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
class __TwigTemplate_2439e04b641a9f9094c8eb757f67337009b1ae8a13008cce289667ddc0117c01 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'search' => [$this, 'block_search'],
            'body' => [$this, 'block_body'],
            'scripts' => [$this, 'block_scripts'],
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

    // line 4
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        // line 5
        echo "    <input id=\"myInput\" class=\"au-input au-input--xl\" type=\"text\" name=\"search\" placeholder=\"Search for datas &amp; reports...\" />
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Packs</h1>
    <!-- DATA TABLE -->
    <div class=\"table-data__tool\">
        <div class=\"table-data__tool-left\">

            <button class=\"au-btn au-btn-icon au-btn--green au-btn--small\">
                <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pack_index_prix");
        echo "\"> <i class=\"zmdi zmdi-plus\"></i>Sort by price</a></button>
                <button class=\"au-btn au-btn-icon au-btn--green au-btn--small\">
                    <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pack_index_name");
        echo "\"> <i class=\"zmdi zmdi-plus\"></i>Sort by name</a></button>
                 </div>
        <div class=\"table-data__tool-right\">
            <button class=\"au-btn au-btn-icon au-btn--green au-btn--small\">
                <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pack_new");
        echo "\"> <i class=\"zmdi zmdi-plus\"></i>add item</a></button>

        </div>

    </div>
    <div class=\"table-responsive table-responsive-data2\">
        <table id=\"myTable\" class=\"table table-data2\">
            <thead>
            <tr>

                <th>#</th>
                <th>name</th>
                <th>description</th>
                <th>price</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["packs"]) || array_key_exists("packs", $context) ? $context["packs"] : (function () { throw new RuntimeError('Variable "packs" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pack"]) {
            // line 39
            echo "            <tr class=\"tr-shadow\">
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pack"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                <td>
                    <span class=\"block-email\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pack"], "nom", [], "any", false, false, false, 42), "html", null, true);
            echo "</span>
                </td>
                <td class=\"desc\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pack"], "description", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pack"], "prix", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                <td>
                    <div id=\"myTable\" class=\"table-data-feature\">
                        <button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Show\">
                            <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pack_show", ["id" => twig_get_attribute($this->env, $this->source, $context["pack"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\"><i class=\"fa  fa-tasks\"></i></a>
                        </button>
                        <button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Edit\">
                            <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pack_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["pack"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\"><i class=\"zmdi zmdi-edit\"></i></a>
                        </button>

                    </div>
                </td>
            </tr>
            <tr class=\"spacer\"></tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pack'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "            </tbody>
        </table>
        <div id=\"bottom\">
        <div class=\"navigation\">
            ";
        // line 64
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["packs"]) || array_key_exists("packs", $context) ? $context["packs"] : (function () { throw new RuntimeError('Variable "packs" does not exist.', 64, $this->source); })()));
        echo "
        </div>
        <div class=\"table-data__tool-right\">
            <button class=\"au-btn au-btn-icon au-btn--green au-btn--small\">
                <a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pack_pdf");
        echo "\"> <i class=\"zmdi zmdi-plus\"></i>Generate PDF</a></button>
        </div>
    </div>
    </div>
    <!-- END DATA TABLE -->


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 76
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 77
        echo "    <script>
        function myFunction() {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById(\"myInput\");
            filter = input.value.toUpperCase();
            table = document.getElementById(\"myTable\");
            tr = table.getElementsByTagName(\"tr\");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName(\"td\")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = \"\";
                    } else {
                        tr[i].style.display = \"none\";
                    }
                }
            }
        }
    </script>
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
        return array (  241 => 77,  231 => 76,  213 => 68,  206 => 64,  200 => 60,  186 => 52,  180 => 49,  173 => 45,  169 => 44,  164 => 42,  159 => 40,  156 => 39,  152 => 38,  131 => 20,  124 => 16,  119 => 14,  111 => 8,  101 => 7,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Packs{% endblock %}
{% block search %}
    <input id=\"myInput\" class=\"au-input au-input--xl\" type=\"text\" name=\"search\" placeholder=\"Search for datas &amp; reports...\" />
    {% endblock %}
{% block body %}
    <h1>Packs</h1>
    <!-- DATA TABLE -->
    <div class=\"table-data__tool\">
        <div class=\"table-data__tool-left\">

            <button class=\"au-btn au-btn-icon au-btn--green au-btn--small\">
                <a href=\"{{ path('pack_index_prix') }}\"> <i class=\"zmdi zmdi-plus\"></i>Sort by price</a></button>
                <button class=\"au-btn au-btn-icon au-btn--green au-btn--small\">
                    <a href=\"{{ path('pack_index_name') }}\"> <i class=\"zmdi zmdi-plus\"></i>Sort by name</a></button>
                 </div>
        <div class=\"table-data__tool-right\">
            <button class=\"au-btn au-btn-icon au-btn--green au-btn--small\">
                <a href=\"{{ path('pack_new') }}\"> <i class=\"zmdi zmdi-plus\"></i>add item</a></button>

        </div>

    </div>
    <div class=\"table-responsive table-responsive-data2\">
        <table id=\"myTable\" class=\"table table-data2\">
            <thead>
            <tr>

                <th>#</th>
                <th>name</th>
                <th>description</th>
                <th>price</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            {% for pack in packs %}
            <tr class=\"tr-shadow\">
                <td>{{ pack.id }}</td>
                <td>
                    <span class=\"block-email\">{{ pack.nom }}</span>
                </td>
                <td class=\"desc\">{{ pack.description }}</td>
                <td>{{ pack.prix }}</td>
                <td>
                    <div id=\"myTable\" class=\"table-data-feature\">
                        <button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Show\">
                            <a href=\"{{ path('pack_show', {'id': pack.id}) }}\"><i class=\"fa  fa-tasks\"></i></a>
                        </button>
                        <button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Edit\">
                            <a href=\"{{ path('pack_edit', {'id': pack.id}) }}\"><i class=\"zmdi zmdi-edit\"></i></a>
                        </button>

                    </div>
                </td>
            </tr>
            <tr class=\"spacer\"></tr>
            {% endfor %}
            </tbody>
        </table>
        <div id=\"bottom\">
        <div class=\"navigation\">
            {{ knp_pagination_render(packs) }}
        </div>
        <div class=\"table-data__tool-right\">
            <button class=\"au-btn au-btn-icon au-btn--green au-btn--small\">
                <a href=\"{{ path('pack_pdf') }}\"> <i class=\"zmdi zmdi-plus\"></i>Generate PDF</a></button>
        </div>
    </div>
    </div>
    <!-- END DATA TABLE -->


{% endblock %}
{% block scripts %}
    <script>
        function myFunction() {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById(\"myInput\");
            filter = input.value.toUpperCase();
            table = document.getElementById(\"myTable\");
            tr = table.getElementsByTagName(\"tr\");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName(\"td\")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = \"\";
                    } else {
                        tr[i].style.display = \"none\";
                    }
                }
            }
        }
    </script>
{% endblock %}", "pack/index.html.twig", "/opt/lampp/htdocs/PIDEV/PIDev/templates/pack/index.html.twig");
    }
}
