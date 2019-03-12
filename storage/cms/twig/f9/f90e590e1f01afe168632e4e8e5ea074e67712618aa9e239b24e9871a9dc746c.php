<?php

/* C:\xampp\htdocs\octoberTutorial/plugins/offline/sitesearch/components/searchinput/searchresult.htm */
class __TwigTemplate_7738f9466676a300a9a9cf86c52fbb8fe9428974f1cd2710efac558a852aa25d extends Twig_Template
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
        echo "<div class=\"ss-autocomplete-result\">
    ";
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "thumb", [])) {
            // line 3
            echo "        ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['result'] = ($context["result"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::thumbnail")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 4
            echo "    ";
        }
        // line 5
        echo "    <div class=\"ss-autocomplete-result__content\">
        ";
        // line 6
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['result'] = ($context["result"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::content")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "    </div>
    <hr/>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octoberTutorial/plugins/offline/sitesearch/components/searchinput/searchresult.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  40 => 6,  37 => 5,  34 => 4,  28 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ss-autocomplete-result\">
    {% if result.thumb %}
        {% partial __SELF__ ~ '::thumbnail' result = result %}
    {% endif %}
    <div class=\"ss-autocomplete-result__content\">
        {% partial __SELF__ ~ '::content' result = result %}
    </div>
    <hr/>
</div>", "C:\\xampp\\htdocs\\octoberTutorial/plugins/offline/sitesearch/components/searchinput/searchresult.htm", "");
    }
}
