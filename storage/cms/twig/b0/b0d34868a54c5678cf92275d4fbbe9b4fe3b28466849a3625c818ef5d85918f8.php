<?php

/* C:\xampp\htdocs\octoberTutorial/plugins/sasho/contact/components/contactform/default.htm */
class __TwigTemplate_b379a541113303067d1c41809cd38f30329b20f08d4301443a21ff7be832c33b extends Twig_Template
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
        // line 20
        echo "
<form data-request=\"contactform::onSend\" class=\"contact-form\" data-request-validate data-request-flash>
    <div class=\"form-group\">
        <label for=\"exampleInputPassword1\">Name</label>
        <input type=\"text\" name=\"name\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Name\">
        <span data-validate-for=\"name\">Enter your name.</span>
    </div>
    <div class=\"form-group\">
        <label for=\"exampleInputEmail1\">Email address</label>
        <input type=\"email\" name=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\">
        <span data-validate-for=\"email\"></span>
    </div>
    <div class=\"form-group\">
        <label for=\"exampleInputEmail1\">Message</label>
        <textarea class=\"form-control\" name=\"content\" cols=\"10\" rows=\"5\"></textarea>
        <span data-validate-for=\"content\">Enter your email</span>
    </div>
    <button type=\"submit\" class=\"btn btn-primary\" data-attach-loading>Send</button>
    <div class=\"alert alert-danger\" data-validate-error>
        <p data-message></p>
    </div>
    <div class=\"flash error\" style=\"padding: 20px; background: red; color: white; display: none\">Something went wrong!</div>
    <div class=\"flash success\" style=\"padding: 20px; background: green; color: white; display: none\">Your message has been sent.</div>
</form>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octoberTutorial/plugins/sasho/contact/components/contactform/default.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 20,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#<form data-request=\"contactform::onSend\" class=\"contact-form\" data-request-validate data-request-flash>
    <label>Your name</label>
    <input type=\"text\" name=\"name\">
    <span data-validate-for=\"name\">Hey! How about inputting your name.</span>

    <label>Your email</label>
    <input type=\"email\" name=\"email\">
    <span data-validate-for=\"email\"></span>


    <label>Your message</label>
    <textarea name=\"content\"></textarea>

    <button type=\"submit\" data-attach-loading>Send</button>

    <div class=\"alert alert-danger\" data-validate-error>
        <p data-message></p>
    </div>
</form>#}

<form data-request=\"contactform::onSend\" class=\"contact-form\" data-request-validate data-request-flash>
    <div class=\"form-group\">
        <label for=\"exampleInputPassword1\">Name</label>
        <input type=\"text\" name=\"name\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Name\">
        <span data-validate-for=\"name\">Enter your name.</span>
    </div>
    <div class=\"form-group\">
        <label for=\"exampleInputEmail1\">Email address</label>
        <input type=\"email\" name=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\">
        <span data-validate-for=\"email\"></span>
    </div>
    <div class=\"form-group\">
        <label for=\"exampleInputEmail1\">Message</label>
        <textarea class=\"form-control\" name=\"content\" cols=\"10\" rows=\"5\"></textarea>
        <span data-validate-for=\"content\">Enter your email</span>
    </div>
    <button type=\"submit\" class=\"btn btn-primary\" data-attach-loading>Send</button>
    <div class=\"alert alert-danger\" data-validate-error>
        <p data-message></p>
    </div>
    <div class=\"flash error\" style=\"padding: 20px; background: red; color: white; display: none\">Something went wrong!</div>
    <div class=\"flash success\" style=\"padding: 20px; background: green; color: white; display: none\">Your message has been sent.</div>
</form>", "C:\\xampp\\htdocs\\octoberTutorial/plugins/sasho/contact/components/contactform/default.htm", "");
    }
}
