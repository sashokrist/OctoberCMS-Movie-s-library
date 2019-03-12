<?php

/* C:\xampp\htdocs\octoberTutorial/themes/weed/layouts/static-layout.htm */
class __TwigTemplate_f3481ab12b573f3bb98b747d571a20f0992b85b4eaf9aaa035de25714ff8bc8a extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>October CMS - ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "title", []), "html", null, true);
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "meta_description", []), "html", null, true);
        echo "\">
    <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "meta_title", []), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"OctoberCMS\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"generator\" content=\"OctoberCMS\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/october.png");
        echo "\">
    <link href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/vendor.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/theme.css");
        echo "\" rel=\"stylesheet\">
    ";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 15
        echo "</head>
    <body>
       
        <header class=\"main-header\">
            <div class=\"container clearfix\">
                <h1 class=\"logo\">October Movies</h1>
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
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Home</a>
                        </div>
                        <div class=\"collapse navbar-collapse navbar-main-collapse\">
                            <ul class=\"nav navbar-nav\">
                                <li class=\"separator hidden-xs\"></li>
                                <li class=\"";
        // line 35
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "id", []) == "movies")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("movies");
        echo "\">Movies</a></li>
                                <li class=\"";
        // line 36
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "id", []) == "plugins")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("plugins");
        echo "\">Plugin components</a></li>
                                <li class=\"";
        // line 37
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "id", []) == "contact-form")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact-form");
        echo "\">Contact Form</a></li>
                                <li class=\"";
        // line 38
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "id", []) == "add-actors")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("add-actors");
        echo "\">Add Actors</a></li>
                                <li class=\"";
        // line 39
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "id", []) == "about")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("staticMenu"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "</li>
                                ";
        // line 40
        if (($context["user"] ?? null)) {
            // line 41
            echo "                                    <li class=\"";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "id", []) == "login")) {
                echo " active ";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("login");
            echo "\">Profile</a></li>
                                    <a class=\"";
            // line 42
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "id", []) == "login")) {
                echo " active ";
            }
            echo "\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Sign out</a>
                                ";
        } else {
            // line 44
            echo "                                    <li class=\"";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "id", []) == "login")) {
                echo " active ";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("login");
            echo "\">Login or Register</a></li>
                                ";
        }
        // line 46
        echo "
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>

        </header>


        <!-- Content -->
        <section id=\"layout-content\" class=\"container clearfix\">
            <h1>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "title", []), "html", null, true);
        echo "</h1>  
            ";
        // line 59
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 60
        echo "        </section>

        <footer class=\"main-footer\">
            <div class=\"container\">
            <nav id=\"layout-nav\" class=\"navbar navbar-inverse  navbar-autohide\" role=\"navigation\">
";
        // line 65
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("staticMenu2"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 66
        echo "            </nav>

            </div>
        </footer>

        <!-- Scripts -->
        <script src=\"";
        // line 72
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/compiled/js/all.js");
        echo "\"></script>

        ";
        // line 74
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 75
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 76
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octoberTutorial/themes/weed/layouts/static-layout.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 76,  215 => 75,  200 => 74,  195 => 72,  187 => 66,  183 => 65,  176 => 60,  174 => 59,  170 => 58,  156 => 46,  146 => 44,  139 => 42,  130 => 41,  128 => 40,  116 => 39,  108 => 38,  100 => 37,  92 => 36,  84 => 35,  76 => 30,  59 => 15,  56 => 14,  52 => 13,  48 => 12,  44 => 11,  37 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>October CMS - {{ this.page.title }}</title>
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
    <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
    <meta name=\"author\" content=\"OctoberCMS\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"generator\" content=\"OctoberCMS\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\">
    <link href=\"{{ 'assets/css/vendor.css'|theme }}\" rel=\"stylesheet\">
    <link href=\"{{ 'assets/css/theme.css'|theme }}\" rel=\"stylesheet\">
    {% styles %}
</head>
    <body>
       
        <header class=\"main-header\">
            <div class=\"container clearfix\">
                <h1 class=\"logo\">October Movies</h1>
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
                                <li class=\"{% if this.page.id == 'about' %}active{% endif %}\"><a href=\"{{ 'about'|page }}\">{% component 'staticMenu' %}</li>
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
            </div>

        </header>


        <!-- Content -->
        <section id=\"layout-content\" class=\"container clearfix\">
            <h1>{{this.page.title}}</h1>  
            {% page %}
        </section>

        <footer class=\"main-footer\">
            <div class=\"container\">
            <nav id=\"layout-nav\" class=\"navbar navbar-inverse  navbar-autohide\" role=\"navigation\">
{% component 'staticMenu2' %}
            </nav>

            </div>
        </footer>

        <!-- Scripts -->
        <script src=\"{{ 'assets/compiled/js/all.js'|theme }}\"></script>

        {% framework extras %}
        {% scripts %}

    </body>
</html>", "C:\\xampp\\htdocs\\octoberTutorial/themes/weed/layouts/static-layout.htm", "");
    }
}
