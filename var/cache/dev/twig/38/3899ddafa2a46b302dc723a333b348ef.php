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

/* _layout/footer.html.twig */
class __TwigTemplate_534cd883bc5cf73bd87105e99711a1ad extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_layout/footer.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">

\t\t<style>
\t\t\tfooter {
\t\t\t\tbackground-color: #2E1A47;
\t\t\t\tcolor: #FFFFFF;
\t\t\t\tfont-family: Arial, sans-serif;
\t\t\t}
\t\t\t.footer {
\t\t\t\tpadding: 20px 0;
\t\t\t}
\t\t\t.footer a {
\t\t\t\tcolor: #FFFFFF;
\t\t\t\ttext-decoration: none;
\t\t\t}
\t\t\t.footer a:hover {
\t\t\t\ttext-decoration: underline;
\t\t\t}
\t\t\t.footer .logo {
\t\t\t\tdisplay: flex;
\t\t\t\talign-items: center;
\t\t\t}
\t\t\t.footer .logo img {
\t\t\t\tmargin-right: 10px;
\t\t\t}
\t\t\t.footer .copyright {
\t\t\t\ttext-align: right;
\t\t\t}
\t\t\t.footer hr {
\t\t\t\tborder-top: 1px solid #FFFFFF;
\t\t\t\tmargin: 20px 0;
\t\t\t}
\t\t</style>
\t</head>
\t<footer>
\t\t<div class=\"container footer\" style=\"background-color:#2E1A47\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\tEPSI
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\tProgrammes
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\tAdmission
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\tInnovation Lab
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\tCampus
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\tFormation continue
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\tTravailler à l'EPSI
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\tMentions légales
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\tCharte données personnelles
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\tContact
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\tFormulaire de réclamation
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\tCGV
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 text-end\">
\t\t\t\t\t<img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/epsi.png"), "html", null, true);
        echo "\" alt=\"EPSI\" class=\"img-fluid\" style=\"max-width: 200px;\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<hr/>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12 text-end\">
\t\t\t\t\t<p class=\"copyright\">
\t\t\t\t\t\t@ Copyright 2021
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</footer>


\t<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"></script>
\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
</html></body></html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "_layout/footer.html.twig";
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
        return array (  161 => 120,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">

\t\t<style>
\t\t\tfooter {
\t\t\t\tbackground-color: #2E1A47;
\t\t\t\tcolor: #FFFFFF;
\t\t\t\tfont-family: Arial, sans-serif;
\t\t\t}
\t\t\t.footer {
\t\t\t\tpadding: 20px 0;
\t\t\t}
\t\t\t.footer a {
\t\t\t\tcolor: #FFFFFF;
\t\t\t\ttext-decoration: none;
\t\t\t}
\t\t\t.footer a:hover {
\t\t\t\ttext-decoration: underline;
\t\t\t}
\t\t\t.footer .logo {
\t\t\t\tdisplay: flex;
\t\t\t\talign-items: center;
\t\t\t}
\t\t\t.footer .logo img {
\t\t\t\tmargin-right: 10px;
\t\t\t}
\t\t\t.footer .copyright {
\t\t\t\ttext-align: right;
\t\t\t}
\t\t\t.footer hr {
\t\t\t\tborder-top: 1px solid #FFFFFF;
\t\t\t\tmargin: 20px 0;
\t\t\t}
\t\t</style>
\t</head>
\t<footer>
\t\t<div class=\"container footer\" style=\"background-color:#2E1A47\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\tEPSI
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\tProgrammes
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\tAdmission
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\tInnovation Lab
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\tCampus
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\tFormation continue
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\tTravailler à l'EPSI
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\tMentions légales
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\tCharte données personnelles
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\tContact
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\tFormulaire de réclamation
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\tCGV
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 text-end\">
\t\t\t\t\t<img src=\"{{ asset('images/epsi.png') }}\" alt=\"EPSI\" class=\"img-fluid\" style=\"max-width: 200px;\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<hr/>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12 text-end\">
\t\t\t\t\t<p class=\"copyright\">
\t\t\t\t\t\t@ Copyright 2021
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</footer>


\t<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"></script>
\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
</html></body></html>
", "_layout/footer.html.twig", "C:\\Users\\caron\\Desktop\\workshop b3\\workshop3\\templates\\_layout\\footer.html.twig");
    }
}
