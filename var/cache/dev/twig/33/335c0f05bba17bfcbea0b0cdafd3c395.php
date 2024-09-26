<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Login/error.html.twig */
class __TwigTemplate_a1ea61e066a1420aa91f5a96b6244141 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Login/error.html.twig"));

        // line 1
        echo "<html lang=\"en\">

<head>
    <meta charset=\"utf-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
    <meta name=\"description\" content=\"\"/>
    <meta name=\"author\" content=\"\"/>
    <title>Fédération National des Mangeurs </title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
          integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
    
</head >
<body>
\t<div class=\"container\" style=\"padding-top:150px; padding-bottom:120px;\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-md-7 pt-5 pb-3 rounded-3\" >
\t\t\t\t";
        // line 17
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 17, $this->source); })())) {
            // line 18
            echo "\t\t\t\t\t<div class=\"alert\" style=\"text-center;\">
\t\t\t\t\t\t<p class=\"text-center fs-5 fw-bold\" style=\"margin-top:-30px;\">Identifiants incorrects</p>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 22
        echo "\t\t\t\t<form class=\"px-5 mx-5\" method=\"POST\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_verification");
        echo "\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"email\" class=\"form-control mb-3\" id=\"email\" name=\"email\" placeholder=\"Adresse Email\" required style=\"border: 2px solid black;\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"password\" class=\"form-control mb-3\" id=\"password\" name=\"password\" placeholder=\"Mot de passe\" required style=\"border: 2px solid black;\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn px-5\" style=\"color:#ffffff; background-color:#020202;\">Se connecter</button>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t<div class=\"mt-3 mb-5 d-flex justify-content-around\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_enregistrement");
        echo "\" class=\"text-white\">S'inscrire ?</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a href=\"#\" class=\"text-white\">Mot de passe oublié ?</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Login/error.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  83 => 35,  66 => 22,  60 => 18,  58 => 17,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"en\">

<head>
    <meta charset=\"utf-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
    <meta name=\"description\" content=\"\"/>
    <meta name=\"author\" content=\"\"/>
    <title>Fédération National des Mangeurs </title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
          integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
    
</head >
<body>
\t<div class=\"container\" style=\"padding-top:150px; padding-bottom:120px;\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-md-7 pt-5 pb-3 rounded-3\" >
\t\t\t\t{% if error %}
\t\t\t\t\t<div class=\"alert\" style=\"text-center;\">
\t\t\t\t\t\t<p class=\"text-center fs-5 fw-bold\" style=\"margin-top:-30px;\">Identifiants incorrects</p>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t\t<form class=\"px-5 mx-5\" method=\"POST\" action=\"{{ path('app_verification') }}\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"email\" class=\"form-control mb-3\" id=\"email\" name=\"email\" placeholder=\"Adresse Email\" required style=\"border: 2px solid black;\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"password\" class=\"form-control mb-3\" id=\"password\" name=\"password\" placeholder=\"Mot de passe\" required style=\"border: 2px solid black;\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn px-5\" style=\"color:#ffffff; background-color:#020202;\">Se connecter</button>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t<div class=\"mt-3 mb-5 d-flex justify-content-around\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<a href=\"{{ path('app_enregistrement') }}\" class=\"text-white\">S'inscrire ?</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a href=\"#\" class=\"text-white\">Mot de passe oublié ?</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</body>
", "Login/error.html.twig", "C:\\Users\\caron\\Desktop\\Cours\\php\\ProjetBts\\PhpSymfo\\Workshop\\templates\\Login\\error.html.twig");
    }
}
