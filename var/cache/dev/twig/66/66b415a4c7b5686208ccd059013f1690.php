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

/* @TwigComponent/Collector/icon.svg */
class __TwigTemplate_8a174a4aa92e9e4f225e76931bba381b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@TwigComponent/Collector/icon.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
     stroke-width=\"1.5\" viewBox=\"0 0 24 24\">
    <path d=\"M12 8.29c0-1.37-.55-2.68-1.54-3.64a5.3 5.3 0 0 0-3.71-1.5H4.12v1.7a5.1 5.1 0 0 0 1.54 3.64A5.3 5.3 0 0 0 9.37 10H12m0 1.47c0-1.3.55-2.55 1.54-3.46a5.45 5.45 0 0 1 3.71-1.44h2.63v.82c0 1.3-.56 2.54-1.54 3.46a5.45 5.45 0 0 1-3.71 1.44H12m0 4.57V7.7M7.11 15 4 18l3.11 3M17 15l3.11 3L17 21\"/>
</svg>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@TwigComponent/Collector/icon.svg";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
     stroke-width=\"1.5\" viewBox=\"0 0 24 24\">
    <path d=\"M12 8.29c0-1.37-.55-2.68-1.54-3.64a5.3 5.3 0 0 0-3.71-1.5H4.12v1.7a5.1 5.1 0 0 0 1.54 3.64A5.3 5.3 0 0 0 9.37 10H12m0 1.47c0-1.3.55-2.55 1.54-3.46a5.45 5.45 0 0 1 3.71-1.44h2.63v.82c0 1.3-.56 2.54-1.54 3.46a5.45 5.45 0 0 1-3.71 1.44H12m0 4.57V7.7M7.11 15 4 18l3.11 3M17 15l3.11 3L17 21\"/>
</svg>
", "@TwigComponent/Collector/icon.svg", "C:\\Users\\caron\\Desktop\\Cours\\php\\ProjetBts\\PhpSymfo\\Workshop\\vendor\\symfony\\ux-twig-component\\templates\\Collector\\icon.svg");
    }
}
