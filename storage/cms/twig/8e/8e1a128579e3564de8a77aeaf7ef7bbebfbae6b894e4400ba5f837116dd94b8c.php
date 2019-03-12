<?php

/* C:\xampp\htdocs\octoberTutorial/plugins/offline/sitesearch/components/searchresults/pagination.htm */
class __TwigTemplate_bf3b4fb218ab384bff70e1b73ebbcdd41283e615eddd6b465bb0f8340ef8bbf0 extends Twig_Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["results"] ?? null), "hasPages", [])) {
            // line 2
            echo "    ";
            echo ($context["results"] ?? null);
            echo "
";
        }
        // line 4
        echo "
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octoberTutorial/plugins/offline/sitesearch/components/searchresults/pagination.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if results.hasPages %}
    {{ results | raw }}
{% endif %}

", "C:\\xampp\\htdocs\\octoberTutorial/plugins/offline/sitesearch/components/searchresults/pagination.htm", "");
    }
}
