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

/* Accueil/index.html.twig */
class __TwigTemplate_c23821d5131a3de102a80771a08c273a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Accueil/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Accueil/index.html.twig", 1);
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
\t\t\tfont-family: Arial, sans-serif;
\t\t\tbackground-color: #ffffff;

\t\t\ttext-align: center;
\t\t}

\t\th1 {
\t\t\tfont-size: 3em;
\t\t\tmargin-bottom: 1em;
\t\t}

\t\tp {
\t\t\tfont-size: 1.2em;
\t\t\tmargin-bottom: 2em;
\t\t}

\t\t.container {
\t\t\tdisplay: flex;
\t\t\tjustify-content: space-around;
\t\t}

\t\t.card {
\t\t\tbackground-color: #8C4EFF;
\t\t\tborder-radius: 10px;
\t\t\tpadding: 2em;
\t\t\twidth: 200px;
\t\t\tmargin-bottom: 1em;
\t\t\ttransition: transform 0.3s ease;
\t\t}

\t\t.card:hover {
\t\t\ttransform: scale(1.20);
\t\t}
        

\t\t.number {
\t\t\tfont-size: 2.5em;
\t\t\tfont-weight: bold;
\t\t}

\t\t.label {
\t\t\tfont-size: 1em;
\t\t}
\t</style>

\t<div class=\"container\" style=\"display: flex; justify-content: center; align-items: center; padding : 12% 0\">
\t\t<div class=\"texte\">
\t\t\t<p style=\"font-size: 3em; color: black;\">Connectez-vous aux projets réels et démarrez votre carrière dès aujourd’hui !</p>
\t\t</div>
\t\t<img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/ordinateur.png"), "html", null, true);
        echo "\" style=\"flex: 1; max-width: 600px;\">
\t</div>

\t<div style=\"background-color: #14172B; color: white; text-align: center;\">
\t\t<div style=\"padding: 10% 0 ;\">
\t\t\t<h1 style=\"font-size: 3em;\">Comment fonctionne la<br/>plateforme ?</h1>
\t\t\t<ul style=\"text-align: left; display: inline-block;\">
\t\t\t\t<li style=\"font-size: 1.5em;\">Parcourez les projets proposés par les entreprises et les étudiants, postulez à ceux qui<br/>
\t\t\t\t\tvous intéressent. Sélectionnez un projet qui correspond à vos compétences et vos
\t\t\t\t\t<br/>aspirations.</li>
\t\t\t\t<li style=\"font-size: 1.5em;\">Une fois votre candidature acceptée ou votre projet en ligne, collaborez via la<br/>
\t\t\t\t\tplateforme, suivez la progression, et obtenez des retours à chaque étape du projet.</li>
\t\t\t\t<li style=\"font-size: 1.5em;\">Pour les entreprises, publiez vos projets et trouvez des talents parmi les étudiants<br/>
\t\t\t\t\tqualifiés pour vous aider à les réaliser.</li>
\t\t\t</ul>

\t\t</div>
        
\t\t<h1 style=\"font-size: 3em; color: #9340FF\">Chiffres Clés</h1>
        <p style=\"padding-top:5% ;font-size: 2em;\">Découvrez pourquoi <span class=\"highlight\">EPSIXperience</span> devient la plateforme incontournable pour <br/>connecter les étudiants et les entreprises autour de projets innovants.</p>

        <div class=\"container\" style=\"padding: 10% 0 ;\">
            <div class=\"card\" style=\"background-color: #9340FF;\">
                <div class=\"number\" id=\"studentCount\">+250</div>
                <div class=\"label\">Étudiants actifs</div>
            </div>


            <div class=\"card\" style=\"background-color: #9340FF;\">
                <div class=\"number\">120</div>
                <div class=\"label\">Projets réalisés</div>
            </div>

            <div class=\"card\" style=\"background-color: #9340FF;\">
                <div class=\"number\">95%</div>
                <div class=\"label\">De satisfaction</div>
            </div>

\t\t\t<div class=\"card\" style=\"background-color: #9340FF;\">
\t\t\t\t<div class=\"number\">30</div>
\t\t\t\t<div class=\"label\">Domaines de compétences</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<script>
\t\t// Animation pour le compteur d'étudiants (exemple)
let targetCount = 250;
let currentCount = 0;
let increment = 1;
let speed = 0.5; // Vitesse d'incrémentation (ms)

const studentCounter = setInterval(() => {
currentCount += increment;
document.getElementById(\"studentCount\").textContent = \"+\" + currentCount;

if (currentCount >= targetCount) {
clearInterval(studentCounter);
}
}, speed);
\t</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Accueil/index.html.twig";
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
        return array (  112 => 55,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
\t<style>
\t\tbody {
\t\t\tfont-family: Arial, sans-serif;
\t\t\tbackground-color: #ffffff;

\t\t\ttext-align: center;
\t\t}

\t\th1 {
\t\t\tfont-size: 3em;
\t\t\tmargin-bottom: 1em;
\t\t}

\t\tp {
\t\t\tfont-size: 1.2em;
\t\t\tmargin-bottom: 2em;
\t\t}

\t\t.container {
\t\t\tdisplay: flex;
\t\t\tjustify-content: space-around;
\t\t}

\t\t.card {
\t\t\tbackground-color: #8C4EFF;
\t\t\tborder-radius: 10px;
\t\t\tpadding: 2em;
\t\t\twidth: 200px;
\t\t\tmargin-bottom: 1em;
\t\t\ttransition: transform 0.3s ease;
\t\t}

\t\t.card:hover {
\t\t\ttransform: scale(1.20);
\t\t}
        

\t\t.number {
\t\t\tfont-size: 2.5em;
\t\t\tfont-weight: bold;
\t\t}

\t\t.label {
\t\t\tfont-size: 1em;
\t\t}
\t</style>

\t<div class=\"container\" style=\"display: flex; justify-content: center; align-items: center; padding : 12% 0\">
\t\t<div class=\"texte\">
\t\t\t<p style=\"font-size: 3em; color: black;\">Connectez-vous aux projets réels et démarrez votre carrière dès aujourd’hui !</p>
\t\t</div>
\t\t<img src=\"{{ asset('images/ordinateur.png') }}\" style=\"flex: 1; max-width: 600px;\">
\t</div>

\t<div style=\"background-color: #14172B; color: white; text-align: center;\">
\t\t<div style=\"padding: 10% 0 ;\">
\t\t\t<h1 style=\"font-size: 3em;\">Comment fonctionne la<br/>plateforme ?</h1>
\t\t\t<ul style=\"text-align: left; display: inline-block;\">
\t\t\t\t<li style=\"font-size: 1.5em;\">Parcourez les projets proposés par les entreprises et les étudiants, postulez à ceux qui<br/>
\t\t\t\t\tvous intéressent. Sélectionnez un projet qui correspond à vos compétences et vos
\t\t\t\t\t<br/>aspirations.</li>
\t\t\t\t<li style=\"font-size: 1.5em;\">Une fois votre candidature acceptée ou votre projet en ligne, collaborez via la<br/>
\t\t\t\t\tplateforme, suivez la progression, et obtenez des retours à chaque étape du projet.</li>
\t\t\t\t<li style=\"font-size: 1.5em;\">Pour les entreprises, publiez vos projets et trouvez des talents parmi les étudiants<br/>
\t\t\t\t\tqualifiés pour vous aider à les réaliser.</li>
\t\t\t</ul>

\t\t</div>
        
\t\t<h1 style=\"font-size: 3em; color: #9340FF\">Chiffres Clés</h1>
        <p style=\"padding-top:5% ;font-size: 2em;\">Découvrez pourquoi <span class=\"highlight\">EPSIXperience</span> devient la plateforme incontournable pour <br/>connecter les étudiants et les entreprises autour de projets innovants.</p>

        <div class=\"container\" style=\"padding: 10% 0 ;\">
            <div class=\"card\" style=\"background-color: #9340FF;\">
                <div class=\"number\" id=\"studentCount\">+250</div>
                <div class=\"label\">Étudiants actifs</div>
            </div>


            <div class=\"card\" style=\"background-color: #9340FF;\">
                <div class=\"number\">120</div>
                <div class=\"label\">Projets réalisés</div>
            </div>

            <div class=\"card\" style=\"background-color: #9340FF;\">
                <div class=\"number\">95%</div>
                <div class=\"label\">De satisfaction</div>
            </div>

\t\t\t<div class=\"card\" style=\"background-color: #9340FF;\">
\t\t\t\t<div class=\"number\">30</div>
\t\t\t\t<div class=\"label\">Domaines de compétences</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<script>
\t\t// Animation pour le compteur d'étudiants (exemple)
let targetCount = 250;
let currentCount = 0;
let increment = 1;
let speed = 0.5; // Vitesse d'incrémentation (ms)

const studentCounter = setInterval(() => {
currentCount += increment;
document.getElementById(\"studentCount\").textContent = \"+\" + currentCount;

if (currentCount >= targetCount) {
clearInterval(studentCounter);
}
}, speed);
\t</script>
{% endblock %}
", "Accueil/index.html.twig", "C:\\Users\\caron\\Desktop\\Cours\\php\\ProjetBts\\PhpSymfo\\Workshop\\templates\\Accueil\\index.html.twig");
    }
}
