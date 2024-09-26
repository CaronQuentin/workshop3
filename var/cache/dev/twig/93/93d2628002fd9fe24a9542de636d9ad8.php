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

/* _layout/navbar.html.twig */
class __TwigTemplate_908f7c5d25c90daba1fa9f473bfa02db extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_layout/navbar.html.twig"));

        // line 1
        echo "<html lang=\"fr\">

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\">
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
\t\t<style>
\t\t\tbody {
\t\t\t\tbackground-color: white;
\t\t\t}
\t\t\t.navbar {
\t\t\t\tdisplay: flex;
\t\t\t\tjustify-content: center;
\t\t\t\talign-items: center;
\t\t\t\tpadding: 10px 50px;
\t\t\t}
\t\t\t
\t\t\t.navbar img {
\t\t\t\theight: 100px;
\t\t\t}
\t\t\t.navbar .nav-buttons {
\t\t\t\tdisplay: flex;
\t\t\t\tgap: 20px;
\t\t\t}
\t\t\t.nav-buttons .btn {
\t\t\t\tbackground: linear-gradient(90deg, #000000, #434343);
\t\t\t\tcolor: white;
\t\t\t\tborder-radius: 50px;
\t\t\t\tpadding: 10px 20px;
\t\t\t\tfont-weight: bold;
\t\t\t}
\t\t\t.profile {
\t\t\t\ttext-align: center;
\t\t\t}
\t\t\t.profile i {
\t\t\t\tfont-size: 40px;
\t\t\t\tcolor: black;
\t\t\t}
\t\t\t.profile p {
\t\t\t\tmargin: 0;
\t\t\t\tfont-weight: bold;
\t\t\t}
\t\t</style>
\t</head>
\t<body>
\t\t<div class=\"navbar\">
\t\t\t<div class=\"logos\">
\t\t\t\t<img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logoepsi.png"), "html", null, true);
        echo "\" alt=\"EPSI Logo\" style=\"height: 80px;\">
\t\t\t\t<img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logowizz.png"), "html", null, true);
        echo "\" alt=\"Wizz Logo\" style=\"height: 40px;\">
\t\t\t</div>
\t\t\t<div class=\"nav-buttons\">
\t\t\t\t<button class=\"btn\">
\t\t\t\t\t<a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
        echo "\">Accueil</a>
\t\t\t\t</button>
\t\t\t\t<button class=\"btn\">
\t\t\t\t\t<a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proj_dispo");
        echo "\">DashBoard</a>
\t\t\t\t</button>
\t\t\t\t<button class=\"btn\">
\t\t\t\t\tSupport
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"nav-buttons\">
\t\t\t<button class=\"btn\">
\t\t\t\t<a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Déconnexion</a>
\t\t\t\t</button>
\t\t\t</div>
\t\t</div>
\t</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "_layout/navbar.html.twig";
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
        return array (  117 => 64,  106 => 56,  100 => 53,  93 => 49,  89 => 48,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"fr\">

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\">
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
\t\t<style>
\t\t\tbody {
\t\t\t\tbackground-color: white;
\t\t\t}
\t\t\t.navbar {
\t\t\t\tdisplay: flex;
\t\t\t\tjustify-content: center;
\t\t\t\talign-items: center;
\t\t\t\tpadding: 10px 50px;
\t\t\t}
\t\t\t
\t\t\t.navbar img {
\t\t\t\theight: 100px;
\t\t\t}
\t\t\t.navbar .nav-buttons {
\t\t\t\tdisplay: flex;
\t\t\t\tgap: 20px;
\t\t\t}
\t\t\t.nav-buttons .btn {
\t\t\t\tbackground: linear-gradient(90deg, #000000, #434343);
\t\t\t\tcolor: white;
\t\t\t\tborder-radius: 50px;
\t\t\t\tpadding: 10px 20px;
\t\t\t\tfont-weight: bold;
\t\t\t}
\t\t\t.profile {
\t\t\t\ttext-align: center;
\t\t\t}
\t\t\t.profile i {
\t\t\t\tfont-size: 40px;
\t\t\t\tcolor: black;
\t\t\t}
\t\t\t.profile p {
\t\t\t\tmargin: 0;
\t\t\t\tfont-weight: bold;
\t\t\t}
\t\t</style>
\t</head>
\t<body>
\t\t<div class=\"navbar\">
\t\t\t<div class=\"logos\">
\t\t\t\t<img src=\"{{ asset('images/logoepsi.png') }}\" alt=\"EPSI Logo\" style=\"height: 80px;\">
\t\t\t\t<img src=\"{{ asset('images/logowizz.png') }}\" alt=\"Wizz Logo\" style=\"height: 40px;\">
\t\t\t</div>
\t\t\t<div class=\"nav-buttons\">
\t\t\t\t<button class=\"btn\">
\t\t\t\t\t<a href=\"{{ path('app_accueil') }}\">Accueil</a>
\t\t\t\t</button>
\t\t\t\t<button class=\"btn\">
\t\t\t\t\t<a href=\"{{ path('app_proj_dispo') }}\">DashBoard</a>
\t\t\t\t</button>
\t\t\t\t<button class=\"btn\">
\t\t\t\t\tSupport
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"nav-buttons\">
\t\t\t<button class=\"btn\">
\t\t\t\t<a href=\"{{ path('app_logout') }}\">Déconnexion</a>
\t\t\t\t</button>
\t\t\t</div>
\t\t</div>
\t</body>
</html>
", "_layout/navbar.html.twig", "C:\\Users\\caron\\Desktop\\Cours\\php\\ProjetBts\\PhpSymfo\\Workshop\\templates\\_layout\\navbar.html.twig");
    }
}
