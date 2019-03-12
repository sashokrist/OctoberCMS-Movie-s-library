<?php

/* C:\xampp\htdocs\octoberTutorial/themes/weed/pages/add-actors.htm */
class __TwigTemplate_828b2d25d75a5390624e5a5105d0f0113d0867f352b2c0a4230f6434c62c298a extends Twig_Template
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
        echo "<h2>Add actor</h2>
";
        // line 2
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("actorform"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octoberTutorial/themes/weed/pages/add-actors.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h2>Add actor</h2>
{% component 'actorform' %}", "C:\\xampp\\htdocs\\octoberTutorial/themes/weed/pages/add-actors.htm", "");
    }
}
