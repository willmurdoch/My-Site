<?php

/* partials/header.html.twig */
class __TwigTemplate_9ed1ea53e4afac874e569055147a0c078e05d70290899c75224d3bbaa84f4934 extends Twig_Template
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
        echo "<header class=\"hero\">
\t<div class=\"centerer\">
\t\t<div class=\"textWrap\">
\t\t\t";
        // line 4
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "displayTitle", array())) {
            // line 5
            echo "\t\t\t\t<h1>";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "displayTitle", array());
            echo "</h1>
\t\t\t";
        } else {
            // line 7
            echo "\t\t\t\t<h1>";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</h1>
\t\t\t";
        }
        // line 9
        echo "\t\t\t";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "subhead", array())) {
            // line 10
            echo "\t\t\t\t<h2>";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "subhead", array());
            echo "</h2>
\t\t\t";
        }
        // line 12
        echo "\t\t</div>
\t</div>
\t";
        // line 14
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "template", array()) == "vidbg")) {
            // line 15
            echo "\t  ";
            if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "videos", array())) {
                // line 16
                echo "\t    <video preload autoplay muted>
\t      <source src=\"";
                // line 17
                echo $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "videos", array())), "url", array());
                echo "\" type=\"video/mp4\">
\t    </video>
\t  ";
            }
            // line 20
            echo "\t";
        }
        // line 21
        echo "</header>
";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 21,  65 => 20,  59 => 17,  56 => 16,  53 => 15,  51 => 14,  47 => 12,  41 => 10,  38 => 9,  32 => 7,  26 => 5,  24 => 4,  19 => 1,);
    }
}
/* <header class="hero">*/
/* 	<div class="centerer">*/
/* 		<div class="textWrap">*/
/* 			{% if page.header.displayTitle %}*/
/* 				<h1>{{ page.header.displayTitle }}</h1>*/
/* 			{% else %}*/
/* 				<h1>{{ page.title }}</h1>*/
/* 			{% endif %}*/
/* 			{% if page.header.subhead %}*/
/* 				<h2>{{ page.header.subhead }}</h2>*/
/* 			{% endif %}*/
/* 		</div>*/
/* 	</div>*/
/* 	{% if page.template == 'vidbg' %}*/
/* 	  {% if page.media.videos %}*/
/* 	    <video preload autoplay muted>*/
/* 	      <source src="{{ page.media.videos|first.url }}" type="video/mp4">*/
/* 	    </video>*/
/* 	  {% endif %}*/
/* 	{% endif %}*/
/* </header>*/
/* */
