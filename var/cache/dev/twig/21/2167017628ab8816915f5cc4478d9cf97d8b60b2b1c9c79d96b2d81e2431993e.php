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

/* entree.html.twig */
class __TwigTemplate_006808191b30563f34df40fc803d85772a5bdd1e5dd2be433045fc8e461d6a94 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entree.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entree.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "entree.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "

        <div class=\"featuredProducts\">
            <h2>Entrées</h2>
            <div class=\"productsDisp\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 11
            echo "                    <div class=\"productWrap col-md-4\">
                        <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit.detail", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "idProduit", [], "any", false, false, false, 12)]), "html", null, true);
            echo "\" class=\"btn btn-dark productLink\">
                            <div class=\"card mb-4\">

                                    <img src=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "photo", [], "any", false, false, false, 15), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "nom", [], "any", false, false, false, 15), "html", null, true);
            echo "\" class=\"card-img-top\" widht=\"200px\" height=\"200px\">


                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "nom", [], "any", false, false, false, 19), "html", null, true);
            echo "</h5>

                                    <div class=\"d-flex justify-content-between align-item-center\">

                                        <span class=\"h5 mt-auto\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "prixht", [], "any", false, false, false, 23), "html", null, true);
            echo " €</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            </div>
        </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "entree.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 30,  104 => 23,  97 => 19,  88 => 15,  82 => 12,  79 => 11,  75 => 10,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}


        <div class=\"featuredProducts\">
            <h2>Entrées</h2>
            <div class=\"productsDisp\">
                {% for product in products %}
                    <div class=\"productWrap col-md-4\">
                        <a href=\"{{ path('produit.detail', {id: product.idProduit}) }}\" class=\"btn btn-dark productLink\">
                            <div class=\"card mb-4\">

                                    <img src=\"{{ product.photo }}\" alt=\"{{ product.nom }}\" class=\"card-img-top\" widht=\"200px\" height=\"200px\">


                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">{{ product.nom }}</h5>

                                    <div class=\"d-flex justify-content-between align-item-center\">

                                        <span class=\"h5 mt-auto\">{{ product.prixht }} €</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                {% endfor %}
            </div>
        </div>

{% endblock %}
", "entree.html.twig", "/var/www/clientleger-groupe-4/templates/entree.html.twig");
    }
}
