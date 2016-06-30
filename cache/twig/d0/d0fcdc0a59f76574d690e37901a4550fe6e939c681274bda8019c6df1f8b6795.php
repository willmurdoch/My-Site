<?php

/* partials/modules.html.twig */
class __TwigTemplate_8915e0157f03122a69dd1adeec63642d079a7c6041b70106ea2f700ab3c4f76e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!--Markup for standalone module page-->
";
        // line 2
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "template", array()) == "grid")) {
            // line 3
            echo "\t";
            $this->loadTemplate("partials/grid.html.twig", "partials/modules.html.twig", 3)->display(array_merge($context, array("modular" => (isset($context["page"]) ? $context["page"] : null), "page" => (isset($context["child"]) ? $context["child"] : null), "truncate" => false)));
        } elseif (($this->getAttribute(        // line 4
(isset($context["page"]) ? $context["page"] : null), "template", array()) == "job")) {
            // line 5
            echo "\t";
            $this->loadTemplate("partials/job.html.twig", "partials/modules.html.twig", 5)->display(array_merge($context, array("modular" => (isset($context["page"]) ? $context["page"] : null), "page" => (isset($context["child"]) ? $context["child"] : null), "truncate" => false)));
        } else {
            // line 7
            echo "\t<p>AAA</p>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/modules.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  29 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <!--Markup for standalone module page-->*/
/* {% if page.template == 'grid' %}*/
/* 	{% include 'partials/grid.html.twig' with {'modular':page, 'page':child, 'truncate':false} %}*/
/* {% elseif page.template == 'job' %}*/
/* 	{% include 'partials/job.html.twig' with {'modular':page, 'page':child, 'truncate':false} %}*/
/* {% else %}*/
/* 	<p>AAA</p>*/
/* {% endif %}*/
/* */
