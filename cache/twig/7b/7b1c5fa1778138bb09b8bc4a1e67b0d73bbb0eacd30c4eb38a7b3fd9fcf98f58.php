<?php

/* modular.html.twig */
class __TwigTemplate_b0c71c44cf42e4bf6a17ed71187af856447ebde6241bc82009f72ad65929a5fe extends Twig_Template
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
        $this->loadTemplate("modular.html.twig", "modular.html.twig", 1, "108908304")->display($context);
    }

    public function getTemplateName()
    {
        return "modular.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}


/* modular.html.twig */
class __TwigTemplate_b0c71c44cf42e4bf6a17ed71187af856447ebde6241bc82009f72ad65929a5fe_108908304 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "modular.html.twig", 1);
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
        // line 3
        $context["collection"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t\t<!--<section class=\"top\">
\t\t\t";
        // line 7
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t\t</section>-->
\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 10
            echo "\t\t\t\t";
            $this->loadTemplate("partials/modules.html.twig", "modular.html.twig", 10)->display(array_merge($context, array("modular" => (isset($context["page"]) ? $context["page"] : null), "page" => $context["child"], "truncate" => false)));
            // line 11
            echo "\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t";
    }

    public function getTemplateName()
    {
        return "modular.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 12,  92 => 11,  89 => 10,  72 => 9,  67 => 7,  64 => 6,  61 => 5,  57 => 1,  55 => 3,  19 => 1,);
    }
}
/* {% embed 'partials/base.html.twig' %}*/
/* */
/* 	{% set collection = page.collection() %}*/
/* */
/* 	{% block content %}*/
/* 		<!--<section class="top">*/
/* 			{{ page.content }}*/
/* 		</section>-->*/
/* 		{% for child in collection %}*/
/* 				{% include 'partials/modules.html.twig' with {'modular':page, 'page':child, 'truncate':false} %}*/
/* 		{% endfor %}*/
/* 	{% endblock %}*/
/* */
/* {% endembed %}*/
/* */
