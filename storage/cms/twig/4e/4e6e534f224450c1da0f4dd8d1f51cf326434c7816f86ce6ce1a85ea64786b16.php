<?php

/* C:\xampp\htdocs\octoberTutorial/themes/weed/partials/site/header.htm */
class __TwigTemplate_4aee02a22db22982a2288d10ab640e22f5ba94dc0cac9f2f6e1303fe7edc4446 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!-- Nav -->
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top navbar-autohide\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Home</a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"separator hidden-xs\"></li>
                <li class=\"";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "id", []) == "movies")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("movies");
        echo "\">Movies</a></li>
                <li class=\"";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "id", []) == "plugins")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("plugins");
        echo "\">Plugin components</a></li>
                <li class=\"";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "id", []) == "contact-form")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact-form");
        echo "\">Contact Form</a></li>
                <li class=\"";
        // line 19
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "id", []) == "add-actors")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("add-actors");
        echo "\">Add Actors</a></li>
                ";
        // line 20
        if (($context["user"] ?? null)) {
            // line 21
            echo "                    <li class=\"";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "id", []) == "login")) {
                echo " active ";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("login");
            echo "\">Profile</a></li>
                    <a class=\"";
            // line 22
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "id", []) == "login")) {
                echo " active ";
            }
            echo "\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Sign out</a>
                ";
        } else {
            // line 24
            echo "                    <li class=\"";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "id", []) == "login")) {
                echo " active ";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("login");
            echo "\">Login or Register</a></li>
                ";
        }
        // line 26
        echo "            </ul>
        </div>
    </div>
</nav>
<div class=\"container clearfix text-center\">
    <h1 class=\"logo\">Movies Library</h1>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octoberTutorial/themes/weed/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 26,  93 => 24,  86 => 22,  77 => 21,  75 => 20,  67 => 19,  59 => 18,  51 => 17,  43 => 16,  35 => 11,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Nav -->
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top navbar-autohide\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"{{ 'home'|page }}\">Home</a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"separator hidden-xs\"></li>
                <li class=\"{% if this.page.id == 'movies' %}active{% endif %}\"><a href=\"{{ 'movies'|page }}\">Movies</a></li>
                <li class=\"{% if this.page.id == 'plugins' %}active{% endif %}\"><a href=\"{{ 'plugins'|page }}\">Plugin components</a></li>
                <li class=\"{% if this.page.id == 'contact-form' %}active{% endif %}\"><a href=\"{{ 'contact-form'|page }}\">Contact Form</a></li>
                <li class=\"{% if this.page.id == 'add-actors' %}active{% endif %}\"><a href=\"{{ 'add-actors'|page }}\">Add Actors</a></li>
                {% if user %}
                    <li class=\"{% if this.page.id == 'login' %} active {% endif %}\"><a href=\"{{ 'login'|page }}\">Profile</a></li>
                    <a class=\"{% if this.page.id == 'login' %} active {% endif %}\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Sign out</a>
                {% else %}
                    <li class=\"{% if this.page.id == 'login' %} active {% endif %}\"><a href=\"{{ 'login'|page }}\">Login or Register</a></li>
                {% endif %}
            </ul>
        </div>
    </div>
</nav>
<div class=\"container clearfix text-center\">
    <h1 class=\"logo\">Movies Library</h1>
</div>", "C:\\xampp\\htdocs\\octoberTutorial/themes/weed/partials/site/header.htm", "");
    }
}
