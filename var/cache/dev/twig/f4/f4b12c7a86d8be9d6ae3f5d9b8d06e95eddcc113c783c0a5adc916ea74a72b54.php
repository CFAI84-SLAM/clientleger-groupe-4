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

/* base.html.twig */
class __TwigTemplate_383558da4214830cdbeb49ca619e147950667c3e3d8b7e7f0a395401fe09003f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "
    </head>
    <body>
    <div id=\"page\">
        <header>
            ";
        // line 13
        $this->displayBlock('header', $context, $blocks);
        // line 53
        echo "        </header>


            ";
        // line 56
        $this->displayBlock('body', $context, $blocks);
        // line 59
        echo "

        <footer>
            ";
        // line 62
        $this->displayBlock('footer', $context, $blocks);
        // line 81
        echo "        </footer>
    </div>
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "            <link rel=\"stylesheet\" href=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Views/test.css"), "html", null, true);
        echo ">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 14
        echo "                <div class=\"header\">
                    <div class=\"login\">
                        <a class=\"menuLink\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Connexion</a>
                    </div>
                    <div class=\"headerwrap\">
                        <a class=\"menuLink\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">
                            <h1 class=\"main-title centered\">Fast Sushi</h1>
                        </a>

                        <div class=\"logo\">
                            <a class=\"menuLink\" href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier");
        echo "\">
                               <img id=\"shoppingCart\" src=";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shopping-cart.png"), "html", null, true);
        echo " width='35' heigth=\"35\">
                            </a>
                        </div>
                    </div>
                </div>

                <nav class=\"menu\">
                    <div class=\"menuButton\">
                        <a class=\"menuLink\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("entrees");
        echo "\">
                            <div class=\"categories\">Entrées</div>
                        </a>

                    </div>
                    <div class=\"menuButton\">
                        <a class=\"menuLink\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plats");
        echo "\">
                           <div class=\"categories\">Plats</div>
                        </a>
                    </div>
                    <div class=\"menuButton\">
                        <a class=\"menuLink\" href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("desserts");
        echo "\">
                          <div class=\"categories\">Desserts</div>
                        </a>
                    </div>



                </nav>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 57
        echo "
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 62
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 63
        echo "                <div class=\"footer-main\">
                    <div class=\"footer-columns\">
                        <div class=\"fcol fdesc\">
                            <h5 class=\"col-title\">Fast Sushi</h5>
                            <p class=\"desc-text\">Fast Sushi est un restaurant de cuisine japonaise spécialisé dans les sushi.</p>
                        </div>
                        <div class=\"fcol address\">
                            <h5 class=\"col-title\">Adresses</h5>
                            <p>Nos restaurants se situent dans une multitude de ville de France : </br>Lyon, Paris, Bordeaux, Marseille, Avignon, Strasbourg</p>
                        </div>
                        <div class=\"fcol horaires\">
                            <h5 class=\"col-title\">Horaires d'ouverture</h5>
                            <p>Mardi - Samedi</p>
                            <p>11h - 22h</p>
                        </div>
                    </div>
                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  225 => 63,  215 => 62,  204 => 57,  194 => 56,  175 => 44,  167 => 39,  158 => 33,  147 => 25,  143 => 24,  135 => 19,  129 => 16,  125 => 14,  115 => 13,  102 => 6,  92 => 5,  78 => 81,  76 => 62,  71 => 59,  69 => 56,  64 => 53,  62 => 13,  55 => 8,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        {% block stylesheets %}
            <link rel=\"stylesheet\" href={{ asset('Views/test.css') }}>
        {% endblock %}

    </head>
    <body>
    <div id=\"page\">
        <header>
            {% block header %}
                <div class=\"header\">
                    <div class=\"login\">
                        <a class=\"menuLink\" href=\"{{ path('app_login') }}\">Connexion</a>
                    </div>
                    <div class=\"headerwrap\">
                        <a class=\"menuLink\" href=\"{{ path('accueil') }}\">
                            <h1 class=\"main-title centered\">Fast Sushi</h1>
                        </a>

                        <div class=\"logo\">
                            <a class=\"menuLink\" href=\"{{ path('panier') }}\">
                               <img id=\"shoppingCart\" src={{ asset('images/shopping-cart.png') }} width='35' heigth=\"35\">
                            </a>
                        </div>
                    </div>
                </div>

                <nav class=\"menu\">
                    <div class=\"menuButton\">
                        <a class=\"menuLink\" href=\"{{ path('entrees') }}\">
                            <div class=\"categories\">Entrées</div>
                        </a>

                    </div>
                    <div class=\"menuButton\">
                        <a class=\"menuLink\" href=\"{{ path('plats') }}\">
                           <div class=\"categories\">Plats</div>
                        </a>
                    </div>
                    <div class=\"menuButton\">
                        <a class=\"menuLink\" href=\"{{ path('desserts') }}\">
                          <div class=\"categories\">Desserts</div>
                        </a>
                    </div>



                </nav>
            {% endblock %}
        </header>


            {% block body %}

            {% endblock %}


        <footer>
            {% block footer %}
                <div class=\"footer-main\">
                    <div class=\"footer-columns\">
                        <div class=\"fcol fdesc\">
                            <h5 class=\"col-title\">Fast Sushi</h5>
                            <p class=\"desc-text\">Fast Sushi est un restaurant de cuisine japonaise spécialisé dans les sushi.</p>
                        </div>
                        <div class=\"fcol address\">
                            <h5 class=\"col-title\">Adresses</h5>
                            <p>Nos restaurants se situent dans une multitude de ville de France : </br>Lyon, Paris, Bordeaux, Marseille, Avignon, Strasbourg</p>
                        </div>
                        <div class=\"fcol horaires\">
                            <h5 class=\"col-title\">Horaires d'ouverture</h5>
                            <p>Mardi - Samedi</p>
                            <p>11h - 22h</p>
                        </div>
                    </div>
                </div>
            {% endblock %}
        </footer>
    </div>
    </body>
</html>
", "base.html.twig", "/var/www/clientleger-groupe-4/templates/base.html.twig");
    }
}
