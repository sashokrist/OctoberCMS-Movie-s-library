<?php

/* C:\xampp\htdocs\octoberTutorial/plugins/offline/sitesearch/components/searchinput/thumbnail.htm */
class __TwigTemplate_08e83470f3dc9b9a0af2da562532583d84096f71287e7fa5a6a144e104e90582 extends Twig_Template
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
        echo "<div class=\"ss-autocomplete-result__aside\">
    <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "url", []), "html", null, true);
        echo "\">
        <img class=\"ss-autocomplete-result__image\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "thumb", []), "getThumb", [0 => 120, 1 => ($context["auto"] ?? null)], "method"), "html", null, true);
        echo "\" alt=\"\"/>
    </a>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octoberTutorial/plugins/offline/sitesearch/components/searchinput/thumbnail.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ss-autocomplete-result__aside\">
    <a href=\"{{ result.url }}\">
        <img class=\"ss-autocomplete-result__image\" src=\"{{ result.thumb.getThumb(120, auto) }}\" alt=\"\"/>
    </a>
</div>", "C:\\xampp\\htdocs\\octoberTutorial/plugins/offline/sitesearch/components/searchinput/thumbnail.htm", "");
    }
}
