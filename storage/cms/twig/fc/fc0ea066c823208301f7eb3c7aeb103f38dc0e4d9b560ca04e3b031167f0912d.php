<?php

/* C:\xampp\htdocs\octoberTutorial/plugins/sasho/movies/components/actorform/default.htm */
class __TwigTemplate_7e7e5b9588fe47beab08e4fa154e60d2433b1102165e46854372efc6ccffb7e5 extends Twig_Template
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
        echo "<form method=\"POST\" action=\"";
        echo url("add-actors");
        echo "\" accept-charset=\"UTF8\" enctype=\"multipart/form-data\" class=\"contact-form\">

    <input type=\"hidden\" name=\"_handler\" value=\"onSave\" class=\"contact-form\">
    ";
        // line 4
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "
    ";
        // line 5
        echo call_user_func_array($this->env->getFunction('form_sessionKey')->getCallable(), ["sessionKey"]);
        echo "
    <div class=\"form-group\">
    <label>Actor name</label>
    <input type=\"text\" name=\"name\" class=\"contact-form\">
    </div>
    <div class=\"form-group\">
    <label>Actor last name</label>
    <input type=\"text\" name=\"lastname\" class=\"contact-form\">
    </div>
    <div class=\"form-group\">
    <label>Actor image</label>
    <input type=\"file\" name=\"actorimage\">
    </div>
    <button type=\"submit\" class=\"contact-form btn btn-primary\">Save actor</button>

    ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 20
        $context["type"] = "success"        ;        foreach (Flash::success        () as $message) {
            $context["message"] = $message;            // line 21
            echo "        <p>";
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</p>
    ";
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 23
        echo "</form>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octoberTutorial/plugins/sasho/movies/components/actorform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 23,  54 => 21,  52 => 20,  34 => 5,  30 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form method=\"POST\" action=\"{{ url('add-actors') }}\" accept-charset=\"UTF8\" enctype=\"multipart/form-data\" class=\"contact-form\">

    <input type=\"hidden\" name=\"_handler\" value=\"onSave\" class=\"contact-form\">
    {{ form_token() }}
    {{ form_sessionKey() }}
    <div class=\"form-group\">
    <label>Actor name</label>
    <input type=\"text\" name=\"name\" class=\"contact-form\">
    </div>
    <div class=\"form-group\">
    <label>Actor last name</label>
    <input type=\"text\" name=\"lastname\" class=\"contact-form\">
    </div>
    <div class=\"form-group\">
    <label>Actor image</label>
    <input type=\"file\" name=\"actorimage\">
    </div>
    <button type=\"submit\" class=\"contact-form btn btn-primary\">Save actor</button>

    {% flash success %}
        <p>{{ message }}</p>
    {% endflash %}
</form>
", "C:\\xampp\\htdocs\\octoberTutorial/plugins/sasho/movies/components/actorform/default.htm", "");
    }
}
