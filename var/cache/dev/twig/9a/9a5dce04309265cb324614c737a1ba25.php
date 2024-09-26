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

/* new_project/index.html.twig */
class __TwigTemplate_f19a60cc58c09086a425ccc251e5e0ab extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "new_project/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "new_project/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello NewProjectController!
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<body>

        <div class=\"row justify-content-center mb-5\" style=\"\">
           <div class=\"col-md-7 pt-2 pb-3 \" style=\"background: linear-gradient(90deg, #004aad, #cb6ce6); border-radius: 40px;\"> 
                <form class=\"px-5 mx-5 py-5 my-5\" method=\"POST\" action=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_addnew_project");
        echo "\">
                    <div>
                        <input type=\"Titre\" class=\"form-control mb-3\" id=\"Titre\" name=\"titre\" placeholder=\"tire\" required style=\"border: 2px solid black;\">
                    </div>

                    <div>
                        <textarea class=\"form-control mb-3 pb-3\" id=\"description\" name=\"description\" placeholder=\"Description\" required style=\"border: 2px solid black;\"></textarea>
                    </div>

                    <div>
                        <input type=\"text\" class=\"form-control mb-3\" id=\"image\" name=\"image\" placeholder=\"Nom de l'image\" required style=\"border: 2px solid black;\">
                    </div>

                    <div class=\"text-center\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg rounded-pill\" style=\"background-color: black;\">Creer</button>
                    </div>
                </form>
            </div>
        </div>
\t\t</div>
\t</body>
</div></body>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "new_project/index.html.twig";
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
        return array (  80 => 11,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello NewProjectController!
{% endblock %}

{% block body %}
\t<body>

        <div class=\"row justify-content-center mb-5\" style=\"\">
           <div class=\"col-md-7 pt-2 pb-3 \" style=\"background: linear-gradient(90deg, #004aad, #cb6ce6); border-radius: 40px;\"> 
                <form class=\"px-5 mx-5 py-5 my-5\" method=\"POST\" action=\"{{ path('app_addnew_project') }}\">
                    <div>
                        <input type=\"Titre\" class=\"form-control mb-3\" id=\"Titre\" name=\"titre\" placeholder=\"tire\" required style=\"border: 2px solid black;\">
                    </div>

                    <div>
                        <textarea class=\"form-control mb-3 pb-3\" id=\"description\" name=\"description\" placeholder=\"Description\" required style=\"border: 2px solid black;\"></textarea>
                    </div>

                    <div>
                        <input type=\"text\" class=\"form-control mb-3\" id=\"image\" name=\"image\" placeholder=\"Nom de l'image\" required style=\"border: 2px solid black;\">
                    </div>

                    <div class=\"text-center\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg rounded-pill\" style=\"background-color: black;\">Creer</button>
                    </div>
                </form>
            </div>
        </div>
\t\t</div>
\t</body>
</div></body>{% endblock %}
", "new_project/index.html.twig", "C:\\Users\\caron\\Desktop\\Cours\\php\\ProjetBts\\PhpSymfo\\Workshop\\templates\\new_project\\index.html.twig");
    }
}
