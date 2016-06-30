<?php

/* partials/job.html.twig */
class __TwigTemplate_f3c27e865af1cf142d28729330d425449199875f560f66fffa5c4b5de7f08fcb extends Twig_Template
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
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "active", array())) {
            // line 2
            echo "\t<section class=\"split\">
\t\t<div class=\"textWrap\">
\t\t\t";
            // line 4
            if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "displayTitle", array())) {
                // line 5
                echo "\t\t\t\t<h2>";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "displayTitle", array());
                echo "</h2>
\t\t\t";
            } else {
                // line 7
                echo "\t\t\t\t<h2>";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
                echo "</h2>
\t\t\t";
            }
            // line 9
            echo "\t\t\t";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "
\t\t</div>
\t\t";
            // line 11
            if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())) {
                // line 12
                echo "\t\t\t<img src=\"";
                echo $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "url", array());
                echo "\" />
\t\t";
            }
            // line 14
            echo "\t</section>

";
        } else {
            // line 17
            echo "\t<section class=\"job\">
\t\t<div class=\"textWrap\">
\t\t\t";
            // line 19
            if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "displayTitle", array())) {
                // line 20
                echo "\t\t\t\t<h2>";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "displayTitle", array());
                echo "</h2>
\t\t\t";
            } else {
                // line 22
                echo "\t\t\t\t<h2>";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
                echo "</h2>
\t\t\t";
            }
            // line 24
            echo "\t\t\t";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "
\t\t\t<a class=\"cta\" href=\"";
            // line 25
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">Learn More</a>
\t\t</div>
\t\t<div class=\"devices\">
\t\t\t";
            // line 28
            if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "desktop", array()) == 1)) {
                // line 29
                echo "\t\t\t<div class=\"device desktop\">
\t\t\t\t<img src=\"";
                // line 30
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                echo "/";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "desktopImage", array());
                echo "\" />
\t\t\t</div>
\t\t\t";
            }
            // line 33
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "tablet", array()) == 1)) {
                // line 34
                echo "\t\t\t<div class=\"device tablet\">
\t\t\t\t<img src=\"";
                // line 35
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                echo "/";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "tabletImage", array());
                echo "\" />
\t\t\t</div>
\t\t\t";
            }
            // line 38
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "mobile", array()) == 1)) {
                // line 39
                echo "\t\t\t<div class=\"device mobile\">
\t\t\t\t<img src=\"";
                // line 40
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                echo "/";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "mobileImage", array());
                echo "\" />
\t\t\t</div>
\t\t\t";
            }
            // line 43
            echo "\t\t</div>
\t</section>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/job.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 43,  120 => 40,  117 => 39,  114 => 38,  106 => 35,  103 => 34,  100 => 33,  92 => 30,  89 => 29,  87 => 28,  81 => 25,  76 => 24,  70 => 22,  64 => 20,  62 => 19,  58 => 17,  53 => 14,  47 => 12,  45 => 11,  39 => 9,  33 => 7,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if page.active %}*/
/* 	<section class="split">*/
/* 		<div class="textWrap">*/
/* 			{% if page.header.displayTitle %}*/
/* 				<h2>{{ page.header.displayTitle }}</h2>*/
/* 			{% else %}*/
/* 				<h2>{{ page.title }}</h2>*/
/* 			{% endif %}*/
/* 			{{ page.content }}*/
/* 		</div>*/
/* 		{% if page.media.images %}*/
/* 			<img src="{{ page.media.images|first.url }}" />*/
/* 		{% endif %}*/
/* 	</section>*/
/* */
/* {% else %}*/
/* 	<section class="job">*/
/* 		<div class="textWrap">*/
/* 			{% if page.header.displayTitle %}*/
/* 				<h2>{{ page.header.displayTitle }}</h2>*/
/* 			{% else %}*/
/* 				<h2>{{ page.title }}</h2>*/
/* 			{% endif %}*/
/* 			{{ page.content }}*/
/* 			<a class="cta" href="{{ page.url }}">Learn More</a>*/
/* 		</div>*/
/* 		<div class="devices">*/
/* 			{% if page.header.desktop == 1 %}*/
/* 			<div class="device desktop">*/
/* 				<img src="{{ page.url }}/{{ page.header.desktopImage }}" />*/
/* 			</div>*/
/* 			{% endif %}*/
/* 			{% if page.header.tablet == 1 %}*/
/* 			<div class="device tablet">*/
/* 				<img src="{{ page.url }}/{{ page.header.tabletImage }}" />*/
/* 			</div>*/
/* 			{% endif %}*/
/* 			{% if page.header.mobile == 1 %}*/
/* 			<div class="device mobile">*/
/* 				<img src="{{ page.url }}/{{ page.header.mobileImage }}" />*/
/* 			</div>*/
/* 			{% endif %}*/
/* 		</div>*/
/* 	</section>*/
/* {% endif %}*/
/* */
