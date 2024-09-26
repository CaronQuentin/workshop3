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

/* Login/register.html.twig */
class __TwigTemplate_8c28e9013a125b3f5ae2e4348b59cbbc extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Login/register.html.twig"));

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
<body >
    <div class=\"container\" style=\"padding-top:150px; padding-bottom:120px; \">
    <div class=\"container\" style=\"padding-top:50px; padding-bottom:120px; position: absolute; top: 20px; left: 50px;\">
        <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logoepsi.png"), "html", null, true);
        echo "\" alt=\"EPSI Logo\" style=\"width: 100px; height: auto;\">
        <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logowizz.png"), "html", null, true);
        echo "\" alt=\"Wizz Logo\" style=\"width: 100px; height: auto; margin-left: 20px;\">
    </div>
    <div class=\"text-center\">
                <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" class=\"justify-content-center\" style=\"width: 200px; height: auto;\">
            </div>
        <p>
            <h1 class=\"text-center pb-5\" style=\"color:#020202; font-size:50px; font-family: 'Comic Sans MS', sans-serif; border-radius: 10px; font-weight: bold;\">Inscription</h1>
        </p>
        <div class=\"row justify-content-center\">
            <div class=\"col-md-7 pt-2 pb-3 rounded-3\">
                <form class=\"px-5 mx-5\" method=\"POST\" action=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">
                    <div>
                    <input type=\"text\" class=\"form-control mb-3\" id=\"nom\" name=\"pseudo\" placeholder=\"Nom\" required
                           style=\"border: 2px solid black;\">
                </div>

                <div>
                    <input type=\"email\" class=\"form-control mb-3\" id=\"adresse_mail\" name=\"adresse_mail\"
                           placeholder=\"Adresse mail\" required style=\"border: 2px solid black;\">
                </div>

                <div>
                    <input type=\"password\" class=\"form-control mb-3\" id=\"mot_de_passe\" name=\"mot_de_passe\"
                           placeholder=\"Mot de passe\" required style=\"border: 2px solid black;\">
                </div>

                <div class=\"text-center\">
                    <button type=\"submit\" class=\"btn btn-primary btn-lg rounded-pill\"
                            style=\"background-color: black;\">S'inscrire</button>
                </div>
                </form>
                
            </div>
        </div>
    </div>
</body>
















";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Login/register.html.twig";
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
        return array (  77 => 27,  67 => 20,  61 => 17,  57 => 16,  40 => 1,);
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
<body >
    <div class=\"container\" style=\"padding-top:150px; padding-bottom:120px; \">
    <div class=\"container\" style=\"padding-top:50px; padding-bottom:120px; position: absolute; top: 20px; left: 50px;\">
        <img src=\"{{ asset('images/logoepsi.png') }}\" alt=\"EPSI Logo\" style=\"width: 100px; height: auto;\">
        <img src=\"{{ asset('images/logowizz.png') }}\" alt=\"Wizz Logo\" style=\"width: 100px; height: auto; margin-left: 20px;\">
    </div>
    <div class=\"text-center\">
                <img src=\"{{ asset('images/logo.png') }}\" class=\"justify-content-center\" style=\"width: 200px; height: auto;\">
            </div>
        <p>
            <h1 class=\"text-center pb-5\" style=\"color:#020202; font-size:50px; font-family: 'Comic Sans MS', sans-serif; border-radius: 10px; font-weight: bold;\">Inscription</h1>
        </p>
        <div class=\"row justify-content-center\">
            <div class=\"col-md-7 pt-2 pb-3 rounded-3\">
                <form class=\"px-5 mx-5\" method=\"POST\" action=\"{{ path('app_register') }}\">
                    <div>
                    <input type=\"text\" class=\"form-control mb-3\" id=\"nom\" name=\"pseudo\" placeholder=\"Nom\" required
                           style=\"border: 2px solid black;\">
                </div>

                <div>
                    <input type=\"email\" class=\"form-control mb-3\" id=\"adresse_mail\" name=\"adresse_mail\"
                           placeholder=\"Adresse mail\" required style=\"border: 2px solid black;\">
                </div>

                <div>
                    <input type=\"password\" class=\"form-control mb-3\" id=\"mot_de_passe\" name=\"mot_de_passe\"
                           placeholder=\"Mot de passe\" required style=\"border: 2px solid black;\">
                </div>

                <div class=\"text-center\">
                    <button type=\"submit\" class=\"btn btn-primary btn-lg rounded-pill\"
                            style=\"background-color: black;\">S'inscrire</button>
                </div>
                </form>
                
            </div>
        </div>
    </div>
</body>
















", "Login/register.html.twig", "C:\\Users\\caron\\Desktop\\workshop b3\\workshop3\\templates\\Login\\register.html.twig");
    }
}
