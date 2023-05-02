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

/* cart/index.html.twig */
class __TwigTemplate_534ab2f5e717ba3449beaebaa643e7a00ec6632a57182e1e0445391f5c8a34c8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
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

        echo "Panier";
        
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
        echo "    <div class=\"container mt-4\">
        <h1>Votre panier</h1>
        ";
        // line 8
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 8, $this->source); })()), "idProduit", [], "any", false, false, false, 8), "count", [], "any", false, false, false, 8), 0))) {
            // line 9
            echo "            <div class=\"row mt-4\">
                <!-- List of idProduit -->
                <div class=\"col-md-8\"></div>
                <!-- Summary -->
                <div class=\"col-md-4\"></div>
            </div>
        ";
        } else {
            // line 16
            echo "            <div class=\"alert alert-info\">
                Votre panier est vide. Rendez vous à la <a href=\"";
            // line 17
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
            echo "\">liste de produit</a>.
            </div>
        ";
        }
        // line 20
        echo "    </div>

    <div class=\"col-md-8\">
        ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_start');
        echo "
        <div class=\"card\">
            <div class=\"card-header bg-dark text-white d-flex\">
                <h5>idProduit</h5>
                <div class=\"ml-auto\">
                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "save", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "btn btn-warning"]]);
        echo "
                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "clear", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "btn btn-light"]]);
        echo "
                </div>
            </div>
            <ul class=\"list-group list-group-flush\">
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "idProduit", [], "any", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 34
            echo "                    <li class=\"list-group-produit d-flex\">
                        <div class=\"flex-fill mr-2\">
                            <img src=\"https://via.placeholder.com/200x150\" width=\"64\" alt=\"Product image\">
                        </div>
                        <div class=\"flex-fill mr-2\">
                            <h5 class=\"mt-0 mb-0\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "vars", [], "any", false, false, false, 39), "data", [], "any", false, false, false, 39), "product", [], "any", false, false, false, 39), "nom", [], "any", false, false, false, 39), "html", null, true);
            echo "</h5>
                            <small>";
            // line 40
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "vars", [], "any", false, false, false, 40), "data", [], "any", false, false, false, 40), "product", [], "any", false, false, false, 40), "description", [], "any", false, false, false, 40), 0, 50), "html", null, true);
            echo "...</small>
                            <div class=\"form-inline mt-2\">
                                <div class=\"form-group mb-0 mr-2\">
                                    ";
            // line 43
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["produit"], "quantite", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => ("form-control form-control-sm " . ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 45
$context["produit"], "quantite", [], "any", false, false, false, 45), "vars", [], "any", false, false, false, 45), "valid", [], "any", false, false, false, 45)) ? ("") : ("is-invalid")))]]);
            // line 47
            echo "
                                    <div class=\"invalid-feedback\">
                                        ";
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["produit"], "quantite", [], "any", false, false, false, 49), 'errors');
            echo "
                                    </div>
                                </div>
                                ";
            // line 52
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["produit"], "remove", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "btn btn-dark btn-sm"]]);
            echo "
                            </div>
                        </div>
                        <div class=\"flex-fill mr-2 text-right\">
                            <b>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "vars", [], "any", false, false, false, 56), "data", [], "any", false, false, false, 56), "product", [], "any", false, false, false, 56), "price", [], "any", false, false, false, 56), "html", null, true);
            echo " €</b>
                        </div>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "            </ul>
        </div>
        ";
        // line 62
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), 'form_end', ["render_rest" => false]);
        echo "
    </div>

    <div class=\"col-md-4\">
        <div class=\"card mt-4 mt-md-0\">
            <h5 class=\"card-header bg-dark text-white\">Résumé</h5>
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-produit d-flex justify-content-between\">
                    <div><b>Total</b></div>
                    <span><b>";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 71, $this->source); })()), "total", [], "any", false, false, false, 71), "html", null, true);
        echo " €</b></span>
                </li>
            </ul>
            <div class=\"card-body\">
                <a href=\"#\" class=\"btn btn-warning w-100\">Payer</a>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 71,  191 => 62,  187 => 60,  177 => 56,  170 => 52,  164 => 49,  160 => 47,  158 => 45,  157 => 43,  151 => 40,  147 => 39,  140 => 34,  136 => 33,  129 => 29,  125 => 28,  117 => 23,  112 => 20,  106 => 17,  103 => 16,  94 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Panier{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <h1>Votre panier</h1>
        {% if cart.idProduit.count > 0 %}
            <div class=\"row mt-4\">
                <!-- List of idProduit -->
                <div class=\"col-md-8\"></div>
                <!-- Summary -->
                <div class=\"col-md-4\"></div>
            </div>
        {% else %}
            <div class=\"alert alert-info\">
                Votre panier est vide. Rendez vous à la <a href=\"{{ path('accueil') }}\">liste de produit</a>.
            </div>
        {% endif %}
    </div>

    <div class=\"col-md-8\">
        {{ form_start(form) }}
        <div class=\"card\">
            <div class=\"card-header bg-dark text-white d-flex\">
                <h5>idProduit</h5>
                <div class=\"ml-auto\">
                    {{ form_widget(form.save, {'attr': {'class': 'btn btn-warning'}}) }}
                    {{ form_widget(form.clear, {'attr': {'class': 'btn btn-light'}}) }}
                </div>
            </div>
            <ul class=\"list-group list-group-flush\">
                {% for produit in form.idProduit %}
                    <li class=\"list-group-produit d-flex\">
                        <div class=\"flex-fill mr-2\">
                            <img src=\"https://via.placeholder.com/200x150\" width=\"64\" alt=\"Product image\">
                        </div>
                        <div class=\"flex-fill mr-2\">
                            <h5 class=\"mt-0 mb-0\">{{ produit.vars.data.product.nom }}</h5>
                            <small>{{ produit.vars.data.product.description[:50] }}...</small>
                            <div class=\"form-inline mt-2\">
                                <div class=\"form-group mb-0 mr-2\">
                                    {{ form_widget(produit.quantite, {
                                        'attr': {
                                            'class': 'form-control form-control-sm ' ~ (produit.quantite.vars.valid ? '' : 'is-invalid')
                                        }
                                    }) }}
                                    <div class=\"invalid-feedback\">
                                        {{ form_errors(produit.quantite) }}
                                    </div>
                                </div>
                                {{ form_widget(produit.remove, {'attr': {'class': 'btn btn-dark btn-sm'}}) }}
                            </div>
                        </div>
                        <div class=\"flex-fill mr-2 text-right\">
                            <b>{{ produit.vars.data.product.price }} €</b>
                        </div>
                    </li>
                {% endfor %}
            </ul>
        </div>
        {{ form_end(form, {'render_rest': false}) }}
    </div>

    <div class=\"col-md-4\">
        <div class=\"card mt-4 mt-md-0\">
            <h5 class=\"card-header bg-dark text-white\">Résumé</h5>
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-produit d-flex justify-content-between\">
                    <div><b>Total</b></div>
                    <span><b>{{ cart.total }} €</b></span>
                </li>
            </ul>
            <div class=\"card-body\">
                <a href=\"#\" class=\"btn btn-warning w-100\">Payer</a>
            </div>
        </div>
    </div>
{% endblock %}
", "cart/index.html.twig", "/var/www/clientleger-groupe-4/templates/cart/index.html.twig");
    }
}
