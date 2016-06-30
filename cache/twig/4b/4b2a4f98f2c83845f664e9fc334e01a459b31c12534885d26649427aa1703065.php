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
\t\t<div class=\"jobContent\">
\t\t\t<div class=\"textWrap bw33\">
\t\t\t\t";
            // line 20
            if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "displayTitle", array())) {
                // line 21
                echo "\t\t\t\t\t<h2>";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "displayTitle", array());
                echo "</h2>
\t\t\t\t";
            } else {
                // line 23
                echo "\t\t\t\t\t<h2>";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
                echo "</h2>
\t\t\t\t";
            }
            // line 25
            echo "\t\t\t\t";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "
\t\t\t\t<a class=\"cta\" target=\"_blank\" href=\"";
            // line 26
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "url", array());
            echo "\">See the Site</a>
\t\t\t</div>
\t\t\t<div class=\"devices bw66\">
\t\t\t\t";
            // line 29
            if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "desktop", array()) == 1)) {
                // line 30
                echo "\t\t\t\t<div class=\"device desktop\">
\t\t\t\t\t<img class=\"screen\" src=\"";
                // line 31
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                echo "/";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "desktopImage", array());
                echo "\" />
\t\t\t\t\t<img class=\"wrap\" src=\"";
                // line 32
                echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
                echo "/images/laptop.png\" />
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 35
            echo "\t\t\t\t";
            if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "tablet", array()) == 1)) {
                // line 36
                echo "\t\t\t\t<div class=\"device tablet\">
\t\t\t\t\t<img class=\"screen\" src=\"";
                // line 37
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                echo "/";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "tabletImage", array());
                echo "\" />
\t\t\t\t\t<img class=\"wrap\" src=\"";
                // line 38
                echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
                echo "/images/tablet.png\" />
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 41
            echo "\t\t\t\t";
            if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "mobile", array()) == 1)) {
                // line 42
                echo "\t\t\t\t<div class=\"device mobile\">
\t\t\t\t\t<img class=\"screen\" src=\"";
                // line 43
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                echo "/";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "mobileImage", array());
                echo "\" />
\t\t\t\t\t<img class=\"wrap\" src=\"";
                // line 44
                echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
                echo "/images/smartphone.png\" />
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 47
            echo "\t\t\t</div>
\t\t</div>
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
        return array (  141 => 47,  135 => 44,  129 => 43,  126 => 42,  123 => 41,  117 => 38,  111 => 37,  108 => 36,  105 => 35,  99 => 32,  93 => 31,  90 => 30,  88 => 29,  82 => 26,  77 => 25,  71 => 23,  65 => 21,  63 => 20,  58 => 17,  53 => 14,  47 => 12,  45 => 11,  39 => 9,  33 => 7,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
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
/* 		<div class="jobContent">*/
/* 			<div class="textWrap bw33">*/
/* 				{% if page.header.displayTitle %}*/
/* 					<h2>{{ page.header.displayTitle }}</h2>*/
/* 				{% else %}*/
/* 					<h2>{{ page.title }}</h2>*/
/* 				{% endif %}*/
/* 				{{ page.content }}*/
/* 				<a class="cta" target="_blank" href="{{ page.header.url }}">See the Site</a>*/
/* 			</div>*/
/* 			<div class="devices bw66">*/
/* 				{% if page.header.desktop == 1 %}*/
/* 				<div class="device desktop">*/
/* 					<img class="screen" src="{{ page.url }}/{{ page.header.desktopImage }}" />*/
/* 					<img class="wrap" src="{{ theme_url }}/images/laptop.png" />*/
/* 				</div>*/
/* 				{% endif %}*/
/* 				{% if page.header.tablet == 1 %}*/
/* 				<div class="device tablet">*/
/* 					<img class="screen" src="{{ page.url }}/{{ page.header.tabletImage }}" />*/
/* 					<img class="wrap" src="{{ theme_url }}/images/tablet.png" />*/
/* 				</div>*/
/* 				{% endif %}*/
/* 				{% if page.header.mobile == 1 %}*/
/* 				<div class="device mobile">*/
/* 					<img class="screen" src="{{ page.url }}/{{ page.header.mobileImage }}" />*/
/* 					<img class="wrap" src="{{ theme_url }}/images/smartphone.png" />*/
/* 				</div>*/
/* 				{% endif %}*/
/* 			</div>*/
/* 		</div>*/
/* 	</section>*/
/* {% endif %}*/
/* */
