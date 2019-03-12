<?php

/* C:\xampp\htdocs\octoberTutorial/plugins/offline/sitesearch/components/searchinput/content.htm */
class __TwigTemplate_8a0673ead3d05f60d9bbe1575b5748baef7d52ff538e144fc229eb498bad1c6d extends Twig_Template
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
        echo "<h4 class=\"ss-autocomplete-result__title\">
    <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "url", []), "html", null, true);
        echo "\">";
        echo twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "title", []);
        echo "</a>
    ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "showProviderBadge", [])) {
            // line 4
            echo "        <span class=\"ss-autocomplete-result__badge\">
            ";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "provider", []), "html", null, true);
            echo "
        </span>
    ";
        }
        // line 8
        echo "</h4>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octoberTutorial/plugins/offline/sitesearch/components/searchinput/content.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  37 => 5,  34 => 4,  32 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h4 class=\"ss-autocomplete-result__title\">
    <a href=\"{{ result.url }}\">{{ result.title | raw }}</a>
    {% if __SELF__.showProviderBadge %}
        <span class=\"ss-autocomplete-result__badge\">
            {{ result.provider }}
        </span>
    {% endif %}
</h4>", "C:\\xampp\\htdocs\\octoberTutorial/plugins/offline/sitesearch/components/searchinput/content.htm", "");
    }
}
