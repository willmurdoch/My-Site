<?php

/* job.html.twig */
class __TwigTemplate_5eae6cb2ad6740e86480b9724a8b1922e8f6d933111d17563ee491e8fc21c903 extends Twig_Template
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
        $this->loadTemplate("job.html.twig", "job.html.twig", 1, "102844112")->display($context);
    }

    public function getTemplateName()
    {
        return "job.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}


/* job.html.twig */
class __TwigTemplate_5eae6cb2ad6740e86480b9724a8b1922e8f6d933111d17563ee491e8fc21c903_102844112 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "job.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t\t";
        $this->loadTemplate("partials/split.html.twig", "job.html.twig", 4)->display(array_merge($context, array("modular" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()), "truncate" => false)));
        // line 5
        echo "\t";
    }

    public function getTemplateName()
    {
        return "job.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 5,  61 => 4,  58 => 3,  19 => 1,);
    }
}
/* {% embed 'partials/base.html.twig' %}*/
/* */
/* 	{% block content %}*/
/* 		{% include 'partials/split.html.twig' with {'modular':page.parent, 'truncate':false} %}*/
/* 	{% endblock %}*/
/* */
/* {% endembed %}*/
/* */
