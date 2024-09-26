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

/* proj_dispo/index.html.twig */
class __TwigTemplate_974ff8c769a2d72632c8c315ab85d707 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proj_dispo/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "proj_dispo/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<style>
\t\tbody {
\t\t\tbackground-color: #f5f5f5;
\t\t\tfont-family: Arial, sans-serif;
\t\t\tmargin-left: }
\t\t.sidebar {
\t\t\tbackground-color: #ffffff;
\t\t\tpadding: 20px;
\t\t\tborder-radius: 15px;
\t\t\theight: 100vh;

\t\t}
\t\t.sidebar h1 {
\t\t\tfont-size: 24px;
\t\t\tfont-weight: bold;
\t\t}
\t\t.sidebar img {
\t\t\twidth: 100px;
\t\t\tmargin: 20px 0;
\t\t}
\t\t.sidebar .btn {
\t\t\twidth: 55%;
\t\t\theight: 50px;
\t\t\tmargin-bottom: 5%;
\t\t\tmargin-left: auto;
\t\t\tmargin-right: auto;
\t\t\tborder-radius: 20px;
\t\t\tbackground: linear-gradient(90deg, #004aad, #cb6ce6);
\t\t\tcolor: white;
\t\t\tfont-weight: bold;
\t\t\tdisplay: block;

\t\t}
\t\t.content {
\t\t\tpadding: 20px;
\t\t}
\t\t.project-card {
\t\t\tbackground: linear-gradient(90deg, #004aad, #cb6ce6);
\t\t\tcolor: white;
\t\t\tborder-radius: 15px;
\t\t\tpadding: 4%;
\t\t\tmargin-bottom: 2%;
\t\t\tmargin-right: 15%;
\t\t}
\t\t.project-card h2 {
\t\t\tfont-size: 20px;
\t\t\tfont-weight: bold;
\t\t}
\t\t.project-card p {
\t\t\tfont-size: 14px;
\t\t}
\t\t.project-card img {
\t\t\twidth: 100px;
\t\t\tmargin-right: 3%;
\t\t}
\t</style>
</head>
<body>
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3 sidebar \">
\t\t\t\t<h1>
\t\t\t\t\tDashboard
\t\t\t\t</h1>
\t\t\t\t<div class=\"d-flex align-items-center justify-content-center\">
\t\t\t\t\t<img alt=\"EPSI Xperience logo\" height=\"auto\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" width=\"300\"/>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_project");
        echo "\" class=\"btn\">
\t\t\t\t\tMes Projets
\t\t\t\t</a>
\t\t\t\t<a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_new_project");
        echo "\" class=\"btn\">
\t\t\t\t\tCréer un Projet
\t\t\t\t</a>
\t\t\t\t<button class=\"btn\">
\t\t\t\t\tMessagerie
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"col-md-9 content\">
\t\t\t\t<h1 class=\"pb-2\">
\t\t\t\t\tProjets Disponibles
\t\t\t\t</h1>
\t\t\t\t";
        // line 86
        if (twig_test_empty((isset($context["projets"]) || array_key_exists("projets", $context) ? $context["projets"] : (function () { throw new RuntimeError('Variable "projets" does not exist.', 86, $this->source); })()))) {
            // line 87
            echo "\t\t\t\t\t<p>Page vide</p>
\t\t\t\t";
        } else {
            // line 89
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) || array_key_exists("projets", $context) ? $context["projets"] : (function () { throw new RuntimeError('Variable "projets" does not exist.', 89, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
                // line 90
                echo "\t\t\t\t\t\t<div class=\"project-card d-flex align-items-center\">
\t\t\t\t\t\t\t<img alt=\"EPSI Xperience logo\" height=\"auto\" src=\"";
                // line 91
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("images/" . twig_get_attribute($this->env, $this->source, $context["projet"], "nomimage", [], "any", false, false, false, 91)) . ".png")), "html", null, true);
                echo "\" width=\"300\"/>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t\t\t";
                // line 94
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "titre", [], "any", false, false, false, 94), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t";
                // line 97
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "description", [], "any", false, false, false, 97), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div style=\"padding-top:15% ; text-align: end;\">
\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
                // line 101
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_join_project", ["id_projet" => twig_get_attribute($this->env, $this->source, $context["projet"], "id", [], "any", false, false, false, 101), "id_personne" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 101, $this->source); })())]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"id_projet\" value=\"";
                // line 102
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "id", [], "any", false, false, false, 102), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"id_personne\" value=\"";
                // line 103
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 103, $this->source); })()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\" style=\"align-iten:end\">
\t\t\t\t\t\t\t\t\t\tAjouter au panier
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "\t\t\t\t";
        }
        // line 113
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</body>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "proj_dispo/index.html.twig";
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
        return array (  211 => 113,  208 => 112,  193 => 103,  189 => 102,  185 => 101,  178 => 97,  172 => 94,  166 => 91,  163 => 90,  158 => 89,  154 => 87,  152 => 86,  138 => 75,  132 => 72,  126 => 69,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
\t<style>
\t\tbody {
\t\t\tbackground-color: #f5f5f5;
\t\t\tfont-family: Arial, sans-serif;
\t\t\tmargin-left: }
\t\t.sidebar {
\t\t\tbackground-color: #ffffff;
\t\t\tpadding: 20px;
\t\t\tborder-radius: 15px;
\t\t\theight: 100vh;

\t\t}
\t\t.sidebar h1 {
\t\t\tfont-size: 24px;
\t\t\tfont-weight: bold;
\t\t}
\t\t.sidebar img {
\t\t\twidth: 100px;
\t\t\tmargin: 20px 0;
\t\t}
\t\t.sidebar .btn {
\t\t\twidth: 55%;
\t\t\theight: 50px;
\t\t\tmargin-bottom: 5%;
\t\t\tmargin-left: auto;
\t\t\tmargin-right: auto;
\t\t\tborder-radius: 20px;
\t\t\tbackground: linear-gradient(90deg, #004aad, #cb6ce6);
\t\t\tcolor: white;
\t\t\tfont-weight: bold;
\t\t\tdisplay: block;

\t\t}
\t\t.content {
\t\t\tpadding: 20px;
\t\t}
\t\t.project-card {
\t\t\tbackground: linear-gradient(90deg, #004aad, #cb6ce6);
\t\t\tcolor: white;
\t\t\tborder-radius: 15px;
\t\t\tpadding: 4%;
\t\t\tmargin-bottom: 2%;
\t\t\tmargin-right: 15%;
\t\t}
\t\t.project-card h2 {
\t\t\tfont-size: 20px;
\t\t\tfont-weight: bold;
\t\t}
\t\t.project-card p {
\t\t\tfont-size: 14px;
\t\t}
\t\t.project-card img {
\t\t\twidth: 100px;
\t\t\tmargin-right: 3%;
\t\t}
\t</style>
</head>
<body>
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3 sidebar \">
\t\t\t\t<h1>
\t\t\t\t\tDashboard
\t\t\t\t</h1>
\t\t\t\t<div class=\"d-flex align-items-center justify-content-center\">
\t\t\t\t\t<img alt=\"EPSI Xperience logo\" height=\"auto\" src=\"{{ asset('images/logo.png') }}\" width=\"300\"/>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<a href=\"{{ path('app_my_project') }}\" class=\"btn\">
\t\t\t\t\tMes Projets
\t\t\t\t</a>
\t\t\t\t<a href=\"{{ path('app_new_project') }}\" class=\"btn\">
\t\t\t\t\tCréer un Projet
\t\t\t\t</a>
\t\t\t\t<button class=\"btn\">
\t\t\t\t\tMessagerie
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"col-md-9 content\">
\t\t\t\t<h1 class=\"pb-2\">
\t\t\t\t\tProjets Disponibles
\t\t\t\t</h1>
\t\t\t\t{% if projets is empty %}
\t\t\t\t\t<p>Page vide</p>
\t\t\t\t{% else %}
\t\t\t\t\t{% for projet in projets %}
\t\t\t\t\t\t<div class=\"project-card d-flex align-items-center\">
\t\t\t\t\t\t\t<img alt=\"EPSI Xperience logo\" height=\"auto\" src=\"{{ asset('images/' ~ projet.nomimage ~ '.png') }}\" width=\"300\"/>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t\t\t{{ projet.titre }}
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t{{ projet.description }}
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div style=\"padding-top:15% ; text-align: end;\">
\t\t\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_join_project', {'id_projet': projet.id, 'id_personne': id}) }}\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"id_projet\" value=\"{{ projet.id }}\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"id_personne\" value=\"{{ id }}\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\" style=\"align-iten:end\">
\t\t\t\t\t\t\t\t\t\tAjouter au panier
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t</div>
</body>{% endblock %}
", "proj_dispo/index.html.twig", "C:\\Users\\caron\\Desktop\\Cours\\php\\ProjetBts\\PhpSymfo\\Workshop\\templates\\proj_dispo\\index.html.twig");
    }
}
