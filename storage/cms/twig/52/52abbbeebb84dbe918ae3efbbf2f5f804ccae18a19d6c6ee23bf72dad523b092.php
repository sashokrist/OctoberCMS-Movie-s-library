<?php

/* C:\xampp\htdocs\octoberTutorial/plugins/offline/sitesearch/components/searchresults/content.htm */
class __TwigTemplate_091f14edf99f2cebb664739b3d28dfe3de3d2fd07e7f0606a8f8c38249bc645c extends Twig_Template
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
        echo "<h4 class=\"ss-result__title\">
    <a href=\"";
        // line 2
        echo $this->extensions['System\Twig\Extension']->appFilter(twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "url", []));
        echo "\">";
        echo twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "title", []);
        echo "</a>
    ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "showProviderBadge", [])) {
            // line 4
            echo "        <span class=\"ss-result__badge\">
            ";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "provider", []), "html", null, true);
            echo "
        </span>
    ";
        }
        // line 8
        echo "
    ";
        // line 10
        echo "    ";
        // line 11
        echo "    ";
        // line 12
        echo "    ";
        // line 13
        echo "    ";
        // line 14
        echo "    ";
        // line 15
        echo "</h4>

<p class=\"ss-result__text\">
    ";
        // line 18
        echo twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "excerpt", []);
        echo "
</p>

<p class=\"ss-result__url\">
    <a href=\"";
        // line 22
        echo $this->extensions['System\Twig\Extension']->appFilter(twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "url", []));
        echo "\" class=\"ss-result__link\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "visitPageMessage", []), "html", null, true);
        echo " &rarr;</a>
</p>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octoberTutorial/plugins/offline/sitesearch/components/searchresults/content.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 22,  61 => 18,  56 => 15,  54 => 14,  52 => 13,  50 => 12,  48 => 11,  46 => 10,  43 => 8,  37 => 5,  34 => 4,  32 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h4 class=\"ss-result__title\">
    <a href=\"{{ result.url | app }}\">{{ result.title | raw }}</a>
    {% if __SELF__.showProviderBadge %}
        <span class=\"ss-result__badge\">
            {{ result.provider }}
        </span>
    {% endif %}

    {# Some results contain meta information.     #}
    {# You can access it using result.meta.       #}
    {# To find out from which plugin the result   #}
    {# was returned you can use result.identifier #}
    {# Some results contain the original model.   #}
    {# You can access it using result.model       #}
</h4>

<p class=\"ss-result__text\">
    {{ result.excerpt | raw }}
</p>

<p class=\"ss-result__url\">
    <a href=\"{{ result.url | app }}\" class=\"ss-result__link\">{{ __SELF__.visitPageMessage }} &rarr;</a>
</p>
", "C:\\xampp\\htdocs\\octoberTutorial/plugins/offline/sitesearch/components/searchresults/content.htm", "");
    }
}
