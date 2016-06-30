<?php

/* partials/modules.html.twig */
class __TwigTemplate_2bd62012e35f0b27345f026a04b0cdac11e0d55f1cd35a6ab9c7b968052ddc5b extends Twig_Template
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
(isset($context["page"]) ? $context["page"] : null), "template", array()) == "backgrounder")) {
            // line 5
            echo "\t";
            $this->loadTemplate("partials/backgrounder.html.twig", "partials/modules.html.twig", 5)->display(array_merge($context, array("modular" => (isset($context["page"]) ? $context["page"] : null), "page" => (isset($context["child"]) ? $context["child"] : null), "truncate" => false)));
        } elseif (($this->getAttribute(        // line 6
(isset($context["page"]) ? $context["page"] : null), "template", array()) == "split")) {
            // line 7
            echo "\t";
            $this->loadTemplate("partials/split.html.twig", "partials/modules.html.twig", 7)->display(array_merge($context, array("modular" => (isset($context["page"]) ? $context["page"] : null), "page" => (isset($context["child"]) ? $context["child"] : null), "truncate" => false)));
        } elseif (($this->getAttribute(        // line 8
(isset($context["page"]) ? $context["page"] : null), "template", array()) == "vidbg")) {
            // line 9
            echo "\t\t";
            $this->loadTemplate("partials/vidbg.html.twig", "partials/modules.html.twig", 9)->display(array_merge($context, array("modular" => (isset($context["page"]) ? $context["page"] : null), "page" => (isset($context["child"]) ? $context["child"] : null), "truncate" => false)));
        } elseif (($this->getAttribute(        // line 10
(isset($context["page"]) ? $context["page"] : null), "template", array()) == "vidpopup")) {
            // line 11
            echo "\t\t";
            $this->loadTemplate("partials/vidpopup.html.twig", "partials/modules.html.twig", 11)->display(array_merge($context, array("modular" => (isset($context["page"]) ? $context["page"] : null), "page" => (isset($context["child"]) ? $context["child"] : null), "truncate" => false)));
        } else {
            // line 13
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
        return array (  48 => 13,  44 => 11,  42 => 10,  39 => 9,  37 => 8,  34 => 7,  32 => 6,  29 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <!--Markup for standalone module page-->*/
/* {% if page.template == 'grid' %}*/
/* 	{% include 'partials/grid.html.twig' with {'modular':page, 'page':child, 'truncate':false} %}*/
/* {% elseif page.template == 'backgrounder' %}*/
/* 	{% include 'partials/backgrounder.html.twig' with {'modular':page, 'page':child, 'truncate':false} %}*/
/* {% elseif page.template == 'split' %}*/
/* 	{% include 'partials/split.html.twig' with {'modular':page, 'page':child, 'truncate':false} %}*/
/* {% elseif page.template == 'vidbg' %}*/
/* 		{% include 'partials/vidbg.html.twig' with {'modular':page, 'page':child, 'truncate':false} %}*/
/* {% elseif page.template == 'vidpopup' %}*/
/* 		{% include 'partials/vidpopup.html.twig' with {'modular':page, 'page':child, 'truncate':false} %}*/
/* {% else %}*/
/* 	<p>AAA</p>*/
/* {% endif %}*/
/* */
