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

/* home.html.twig */
class __TwigTemplate_eccdac2fd747a041253ac4507510a94e212ba123f91d841537800e69e26dbf49 extends Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        echo "
        <div class=\"featuredProducts\">
            <h2>Produits phares</h2>
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
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "photo", [], "any", false, false, false, 14), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "nom", [], "any", false, false, false, 14), "html", null, true);
            echo "\" class=\"card-img-top\" width=\"200px\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "nom", [], "any", false, false, false, 16), "html", null, true);
            echo "</h5>

                                    <div class=\"d-flex justify-content-between align-item-center\">

                                        <span class=\"h5 mt-auto\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "prixht", [], "any", false, false, false, 20), "html", null, true);
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
        // line 29
        echo "
            </div>

        </div>

        <div class=\"showcase\">
            <h2>Découvrez les délices de la cuisine japonaise</h2>
            <div class=\"photoSC\">
                <div class=\"photoBcase\">
                    <div class=\"photoCase\">
                        <img src=\"images/sushi1.jpg\" width=\"100\" height=\"100\" class=\"footer-image\">
                    </div>

                </div>
                <div class=\"photoAcase\">
                    <div class=\"fline\" style=\"margin-bottom: 4%;\">
                        <div class=\"photoCcase\">
                            <div class=\"photoCase\">
                                <img src=\"images/sushi2.jpg\" width=\"100\" height=\"100\" class=\"footer-image\">
                            </div>
                        </div>
                        <div class=\"photoCcase\">
                            <div class=\"photoCase\">
                                <img src=\"images/sushi3.jpg\" style=\"margin-left: 5%;\" width=\"100\" height=\"100\" class=\"footer-image\">
                            </div>
                        </div>
                    </div>

                    <div class=\"fline\">
                        <div class=\"photoCcase\">
                            <div class=\"photoCase\">
                                <img src=\"images/standard (2).jpg\" width=\"100\" height=\"100\" class=\"footer-image\">
                            </div>
                        </div>
                        <div class=\"photoCcase\">
                            <div class=\"photoCase\">
                                <img src=\"images/standard (4).jpg\"  style=\"margin-left: 5%;\" width=\"100\" height=\"100\" class=\"footer-image\">
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"photoBcase\">
                    <div class=\"photoCase\">
                        <img src=\"images/standard (3).jpg\" width=\"100\" height=\"100\" class=\"footer-image\">
                    </div>

                </div>
            </div>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 29,  100 => 20,  93 => 16,  86 => 14,  81 => 12,  78 => 11,  74 => 10,  68 => 6,  58 => 5,  35 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/home.html.twig #}

{% extends 'base.html.twig' %}

    {% block body %}

        <div class=\"featuredProducts\">
            <h2>Produits phares</h2>
            <div class=\"productsDisp\">
                {% for product in products %}
                    <div class=\"productWrap col-md-4\">
                        <a href=\"{{ path('produit.detail', {id: product.idProduit}) }}\" class=\"btn btn-dark productLink\">
                            <div class=\"card mb-4\">
                                <img src=\"{{ product.photo }}\" alt=\"{{ product.nom }}\" class=\"card-img-top\" width=\"200px\">
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

        <div class=\"showcase\">
            <h2>Découvrez les délices de la cuisine japonaise</h2>
            <div class=\"photoSC\">
                <div class=\"photoBcase\">
                    <div class=\"photoCase\">
                        <img src=\"images/sushi1.jpg\" width=\"100\" height=\"100\" class=\"footer-image\">
                    </div>

                </div>
                <div class=\"photoAcase\">
                    <div class=\"fline\" style=\"margin-bottom: 4%;\">
                        <div class=\"photoCcase\">
                            <div class=\"photoCase\">
                                <img src=\"images/sushi2.jpg\" width=\"100\" height=\"100\" class=\"footer-image\">
                            </div>
                        </div>
                        <div class=\"photoCcase\">
                            <div class=\"photoCase\">
                                <img src=\"images/sushi3.jpg\" style=\"margin-left: 5%;\" width=\"100\" height=\"100\" class=\"footer-image\">
                            </div>
                        </div>
                    </div>

                    <div class=\"fline\">
                        <div class=\"photoCcase\">
                            <div class=\"photoCase\">
                                <img src=\"images/standard (2).jpg\" width=\"100\" height=\"100\" class=\"footer-image\">
                            </div>
                        </div>
                        <div class=\"photoCcase\">
                            <div class=\"photoCase\">
                                <img src=\"images/standard (4).jpg\"  style=\"margin-left: 5%;\" width=\"100\" height=\"100\" class=\"footer-image\">
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"photoBcase\">
                    <div class=\"photoCase\">
                        <img src=\"images/standard (3).jpg\" width=\"100\" height=\"100\" class=\"footer-image\">
                    </div>

                </div>
            </div>
        </div>
    {% endblock %}
", "home.html.twig", "/var/www/clientleger-groupe-4/templates/home.html.twig");
    }
}
