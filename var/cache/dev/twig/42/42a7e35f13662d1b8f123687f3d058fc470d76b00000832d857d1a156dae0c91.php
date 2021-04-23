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

/* orders/index.html.twig */
class __TwigTemplate_a92e1f15c726d3bde48eb0a92c7fa77a33e83916c0b9399a0745cd8c498ac3c5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "orders/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "orders/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "orders/index.html.twig", 1);
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

        echo "Orders index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        // line 6
        echo "        <input id=\"myInput\" onkeyup=\"myFunction()\" class=\"au-input au-input--xl\" type=\"text\" name=\"search\" placeholder=\"Search for datas &amp; reports...\" />

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <h1>Orders index</h1>
    <div class=\"table-data__tool\">

        <div class=\"table-data__tool-right\">
            <button class=\"au-btn au-btn-icon au-btn--green au-btn--small\">
                <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_index_pack");
        echo "\"> <i class=\"zmdi zmdi-plus\"></i>Sort by pack</a></button>
            <button class=\"au-btn au-btn-icon au-btn--green au-btn--small\">
                <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_index_status");
        echo "\"> <i class=\"zmdi zmdi-plus\"></i>Sort by status</a></button>

        </div>

    </div><div class=\"table-responsive table-responsive-data2\">
    <table id= \"myTable\" class=\"table table-data2\">
        <thead>
            <tr>

                <th>#</th>
                <th>Id User</th>
                <th>Id Pack</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 34, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 35
            echo "            <tr class=\"tr-shadow\">

                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "iduser", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "idpack", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                <td>
                    <span class=\"block-email\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 41), "html", null, true);
            echo " </span></td>
                <td>
                    <div class=\"table-data-feature\">
                        <button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Show\"> <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("orders_show", ["id" => twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\"><i class=\"fa  fa-tasks\"></i></a></button>
                        <button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Accept\"> <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("orders_accepted", ["id" => twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\"><i class=\"fa fa-thumbs-up\"></i></a>                    </button>
                        <button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Decline\"> <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("orders_declined", ["id" => twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\"><i class=\"fa fa-thumbs-down\"></i></a>                    </button>
                    </div>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 51
            echo "            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </tbody>
    </table>
    <div id=\"bottom\">
        <div class=\"navigation\">
            ";
        // line 59
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 59, $this->source); })()));
        echo "
        </div>
        <div class=\"table-data__tool-right\">
            <button class=\"au-btn au-btn-icon au-btn--green au-btn--small\">
                <a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_pdf");
        echo "\"> <i class=\"zmdi zmdi-plus\"></i>Generate PDF</a></button>
        </div>
    </div>
</div>
    <div class=\"col-lg-6\">
        <div class=\"au-card m-b-30\">
            <div class=\"au-card-inner\">
                <h3 class=\"title-2 m-b-40\">All Orders</h3>
                <canvas id=\"doughutChart\"></canvas>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 77
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 78
        echo "    <script> try {

            //doughut chart
            var ctx = document.getElementById(\"doughutChart\");
            if (ctx) {
                ctx.height = 175;
                var myChart = new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        datasets: [{
                            data: [
                                ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 89, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["count"]) {
            // line 90
            echo "                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["count"], "nombre", [], "any", false, false, false, 90), "html", null, true);
            echo ",
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['count'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo " 0],
                            backgroundColor: [
                                \"rgb(60, 179, 113,0.9)\",
                                \"rgb(255, 80, 82,0.9)\",
                                \"rgb(255, 165, 0,0.9)\"

                            ],
                            hoverBackgroundColor: [
                                \"rgb(60, 179, 113,1)\",
                                \"rgb(255, 80, 82,1)\",
                                \"rgb(255, 165, 0,1)\"
                            ]

                        }],
                        labels: [
                            ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 106, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["count"]) {
            // line 107
            echo "                            \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["count"], "status", [], "any", false, false, false, 107), "html", null, true);
            echo "\",
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['count'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "                        ]
                    },
                    options: {
                        legend: {
                            position: 'top',
                            labels: {
                                fontFamily: 'Poppins'
                            }

                        },
                        responsive: true
                    }
                });
            }


        } catch (error) {
            console.log(error);
        }

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "orders/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 109,  293 => 107,  289 => 106,  272 => 91,  263 => 90,  259 => 89,  246 => 78,  236 => 77,  212 => 63,  205 => 59,  199 => 55,  190 => 51,  180 => 46,  176 => 45,  172 => 44,  166 => 41,  161 => 39,  157 => 38,  153 => 37,  149 => 35,  144 => 34,  124 => 17,  119 => 15,  112 => 10,  102 => 9,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Orders index{% endblock %}

    {% block search %}
        <input id=\"myInput\" onkeyup=\"myFunction()\" class=\"au-input au-input--xl\" type=\"text\" name=\"search\" placeholder=\"Search for datas &amp; reports...\" />

{% endblock %}
{% block body %}
    <h1>Orders index</h1>
    <div class=\"table-data__tool\">

        <div class=\"table-data__tool-right\">
            <button class=\"au-btn au-btn-icon au-btn--green au-btn--small\">
                <a href=\"{{ path('order_index_pack') }}\"> <i class=\"zmdi zmdi-plus\"></i>Sort by pack</a></button>
            <button class=\"au-btn au-btn-icon au-btn--green au-btn--small\">
                <a href=\"{{ path('order_index_status') }}\"> <i class=\"zmdi zmdi-plus\"></i>Sort by status</a></button>

        </div>

    </div><div class=\"table-responsive table-responsive-data2\">
    <table id= \"myTable\" class=\"table table-data2\">
        <thead>
            <tr>

                <th>#</th>
                <th>Id User</th>
                <th>Id Pack</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for order in orders %}
            <tr class=\"tr-shadow\">

                <td>{{ order.id }}</td>
                <td>{{ order.iduser }}</td>
                <td>{{ order.idpack }}</td>
                <td>
                    <span class=\"block-email\">{{ order.status }} </span></td>
                <td>
                    <div class=\"table-data-feature\">
                        <button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Show\"> <a href=\"{{ path('orders_show', {'id': order.id}) }}\"><i class=\"fa  fa-tasks\"></i></a></button>
                        <button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Accept\"> <a href=\"{{ path('orders_accepted', {'id': order.id}) }}\"><i class=\"fa fa-thumbs-up\"></i></a>                    </button>
                        <button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Decline\"> <a href=\"{{ path('orders_declined', {'id': order.id}) }}\"><i class=\"fa fa-thumbs-down\"></i></a>                    </button>
                    </div>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <div id=\"bottom\">
        <div class=\"navigation\">
            {{ knp_pagination_render(orders) }}
        </div>
        <div class=\"table-data__tool-right\">
            <button class=\"au-btn au-btn-icon au-btn--green au-btn--small\">
                <a href=\"{{ path('order_pdf') }}\"> <i class=\"zmdi zmdi-plus\"></i>Generate PDF</a></button>
        </div>
    </div>
</div>
    <div class=\"col-lg-6\">
        <div class=\"au-card m-b-30\">
            <div class=\"au-card-inner\">
                <h3 class=\"title-2 m-b-40\">All Orders</h3>
                <canvas id=\"doughutChart\"></canvas>
            </div>
        </div>
    </div>

{% endblock %}
{% block scripts %}
    <script> try {

            //doughut chart
            var ctx = document.getElementById(\"doughutChart\");
            if (ctx) {
                ctx.height = 175;
                var myChart = new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        datasets: [{
                            data: [
                                {% for count in counts %}
                                {{count.nombre}},
                                {% endfor %} 0],
                            backgroundColor: [
                                \"rgb(60, 179, 113,0.9)\",
                                \"rgb(255, 80, 82,0.9)\",
                                \"rgb(255, 165, 0,0.9)\"

                            ],
                            hoverBackgroundColor: [
                                \"rgb(60, 179, 113,1)\",
                                \"rgb(255, 80, 82,1)\",
                                \"rgb(255, 165, 0,1)\"
                            ]

                        }],
                        labels: [
                            {% for count in counts %}
                            \"{{count.status}}\",
                            {% endfor %}
                        ]
                    },
                    options: {
                        legend: {
                            position: 'top',
                            labels: {
                                fontFamily: 'Poppins'
                            }

                        },
                        responsive: true
                    }
                });
            }


        } catch (error) {
            console.log(error);
        }

    </script>
{% endblock %}
", "orders/index.html.twig", "/opt/lampp/htdocs/PIDEV/PIDev/templates/orders/index.html.twig");
    }
}
