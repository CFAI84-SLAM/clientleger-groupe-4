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
        <h1 class=\"cartTitle centered\">Votre panier</h1>
        ";
        // line 8
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 8, $this->source); })()), "items", [], "any", false, false, false, 8), "count", [], "any", false, false, false, 8), 0))) {
            // line 9
            echo "            <div class=\"mainCart centered\">
                <!-- List of items -->
                <div class=\"cartLeft col-md-8\">
                    ";
            // line 12
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start');
            echo "
                    <div class=\"card\">
                        <div class=\"card-header bg-dark text-white d-flex\">

                            <div class=\"ml-auto\">
                                ";
            // line 17
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "enregistrer", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "btn btn-warning"]]);
            echo "
                                ";
            // line 18
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "vider", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "btn btn-light"]]);
            echo "
                            </div>
                        </div>
                        <ul class=\"list-group list-group-flush\">
                            ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "items", [], "any", false, false, false, 22));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 23
                echo "                                <li class=\"list-group-produit d-flex\">
                                    <div class=\"flex-fill mr-2\">
                                        <img src=\"";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "vars", [], "any", false, false, false, 25), "data", [], "any", false, false, false, 25), "produit", [], "any", false, false, false, 25), "photo", [], "any", false, false, false, 25), "html", null, true);
                echo "\" width=\"64\" alt=\"Product image\">
                                    </div>
                                    <div class=\"nameTag flex-fill mr-2\">
                                        <h5 class=\"mt-0 mb-0 cart-title\">";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "vars", [], "any", false, false, false, 28), "data", [], "any", false, false, false, 28), "produit", [], "any", false, false, false, 28), "nom", [], "any", false, false, false, 28), "html", null, true);
                echo "</h5>

                                        <div class=\"form-inline mt-2\">
                                            <div class=\"form-group mb-0 mr-2\">
                                                ";
                // line 32
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["item"], "quantite", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => ("form-control form-control-sm " . ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 34
$context["item"], "quantite", [], "any", false, false, false, 34), "vars", [], "any", false, false, false, 34), "valid", [], "any", false, false, false, 34)) ? ("") : ("is-invalid")))]]);
                // line 36
                echo "
                                                <div class=\"invalid-feedback\">
                                                    ";
                // line 38
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["item"], "quantite", [], "any", false, false, false, 38), 'errors');
                echo "
                                                </div>
                                            </div>
                                            ";
                // line 41
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["item"], "supprimer", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "btn btn-dark btn-sm"]]);
                echo "
                                        </div>
                                        <div class=\"flex-fill mr-2 text-right\">
                                            <b class=\"card-price\">";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "vars", [], "any", false, false, false, 44), "data", [], "any", false, false, false, 44), "produit", [], "any", false, false, false, 44), "prixHT", [], "any", false, false, false, 44), "html", null, true);
                echo " €</b>
                                        </div>
                                    </div>

                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                        </ul>
                    </div>
                    ";
            // line 52
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), 'rest');
            echo "
                    ";
            // line 53
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), 'form_end', ["render_rest" => false]);
            echo "
                </div>
                <!-- Summary -->
                <div class=\"col-md-5\">
                    <div class=\"card mt-4 mt-md-0\">
                        <h5 class=\"card-header bg-dark text-white\">Résumé</h5>
                        <ul class=\"priceTotal list-group list-group-flush\">
                            <li class=\"cart-total list-group-item d-flex justify-content-between\">
                                <div><b>TVA 20%</b></div>
                                <span><b>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 62, $this->source); })()), "tva", [], "any", false, false, false, 62), "html", null, true);
            echo " €</b></span>
                            </li>
                            <li class=\"cart-total list-group-item d-flex justify-content-between\">
                                <div><b>Total TTC</b></div>
                                <span><b>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 66, $this->source); })()), "total", [], "any", false, false, false, 66), "html", null, true);
            echo " €</b></span>
                            </li>
                        </ul>
                        <div class=\"card-body\">
                            <a href=\"";
            // line 70
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande");
            echo "\" class=\"btn btn-warning w-100\">
                                <div class=\"orderButton\">Commander</div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>




        ";
        } else {
            // line 83
            echo "            <div class=\"alert alert-info\">
                Votre panier est vide. Rendez vous à la <a href=\"";
            // line 84
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
            echo "\">liste de produit</a>.
            </div>
        ";
        }
        // line 87
        echo "    </div>


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
        return array (  229 => 87,  223 => 84,  220 => 83,  204 => 70,  197 => 66,  190 => 62,  178 => 53,  174 => 52,  170 => 50,  158 => 44,  152 => 41,  146 => 38,  142 => 36,  140 => 34,  139 => 32,  132 => 28,  126 => 25,  122 => 23,  118 => 22,  111 => 18,  107 => 17,  99 => 12,  94 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Panier{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <h1 class=\"cartTitle centered\">Votre panier</h1>
        {% if cart.items.count > 0 %}
            <div class=\"mainCart centered\">
                <!-- List of items -->
                <div class=\"cartLeft col-md-8\">
                    {{ form_start(form) }}
                    <div class=\"card\">
                        <div class=\"card-header bg-dark text-white d-flex\">

                            <div class=\"ml-auto\">
                                {{ form_widget(form.enregistrer, {'attr': {'class': 'btn btn-warning'}}) }}
                                {{ form_widget(form.vider, {'attr': {'class': 'btn btn-light'}}) }}
                            </div>
                        </div>
                        <ul class=\"list-group list-group-flush\">
                            {% for item in form.items %}
                                <li class=\"list-group-produit d-flex\">
                                    <div class=\"flex-fill mr-2\">
                                        <img src=\"{{ item.vars.data.produit.photo }}\" width=\"64\" alt=\"Product image\">
                                    </div>
                                    <div class=\"nameTag flex-fill mr-2\">
                                        <h5 class=\"mt-0 mb-0 cart-title\">{{ item.vars.data.produit.nom }}</h5>

                                        <div class=\"form-inline mt-2\">
                                            <div class=\"form-group mb-0 mr-2\">
                                                {{ form_widget(item.quantite, {
                                                    'attr': {
                                                        'class': 'form-control form-control-sm ' ~ (item.quantite.vars.valid ? '' : 'is-invalid')
                                                    }
                                                }) }}
                                                <div class=\"invalid-feedback\">
                                                    {{ form_errors(item.quantite) }}
                                                </div>
                                            </div>
                                            {{ form_widget(item.supprimer, {'attr': {'class': 'btn btn-dark btn-sm'}}) }}
                                        </div>
                                        <div class=\"flex-fill mr-2 text-right\">
                                            <b class=\"card-price\">{{ item.vars.data.produit.prixHT }} €</b>
                                        </div>
                                    </div>

                                </li>
                            {% endfor %}
                        </ul>
                    </div>
                    {{ form_rest(form) }}
                    {{ form_end(form, {'render_rest': false}) }}
                </div>
                <!-- Summary -->
                <div class=\"col-md-5\">
                    <div class=\"card mt-4 mt-md-0\">
                        <h5 class=\"card-header bg-dark text-white\">Résumé</h5>
                        <ul class=\"priceTotal list-group list-group-flush\">
                            <li class=\"cart-total list-group-item d-flex justify-content-between\">
                                <div><b>TVA 20%</b></div>
                                <span><b>{{ cart.tva }} €</b></span>
                            </li>
                            <li class=\"cart-total list-group-item d-flex justify-content-between\">
                                <div><b>Total TTC</b></div>
                                <span><b>{{ cart.total }} €</b></span>
                            </li>
                        </ul>
                        <div class=\"card-body\">
                            <a href=\"{{ path('commande') }}\" class=\"btn btn-warning w-100\">
                                <div class=\"orderButton\">Commander</div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>




        {% else %}
            <div class=\"alert alert-info\">
                Votre panier est vide. Rendez vous à la <a href=\"{{ path('accueil') }}\">liste de produit</a>.
            </div>
        {% endif %}
    </div>


{% endblock %}
", "cart/index.html.twig", "/var/www/clientleger-groupe-4/templates/cart/index.html.twig");
    }
}
