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
        echo "<section class=\"job\">
\t<div class=\"jobContent\">
\t\t<div class=\"textWrap bw33\">
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
\t\t\t<a class=\"cta\" target=\"_blank\" href=\"";
        // line 10
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "url", array());
        echo "\">See the Site</a>
\t\t</div>
\t\t<div class=\"devices bw66\">
\t\t\t";
        // line 13
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "desktop", array()) == 1)) {
            // line 14
            echo "\t\t\t<div class=\"device desktop\">
\t\t\t\t<img class=\"screen\" src=\"";
            // line 15
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "/";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "desktopImage", array());
            echo "\" />
\t\t\t\t<img class=\"wrap\" src=\"";
            // line 16
            echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
            echo "/images/laptop.png\" />
\t\t\t</div>
\t\t\t";
        }
        // line 19
        echo "\t\t\t";
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "tablet", array()) == 1)) {
            // line 20
            echo "\t\t\t<div class=\"device tablet\">
\t\t\t\t<img class=\"screen\" src=\"";
            // line 21
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "/";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "tabletImage", array());
            echo "\" />
\t\t\t\t<img class=\"wrap\" src=\"";
            // line 22
            echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
            echo "/images/tablet.png\" />
\t\t\t</div>
\t\t\t";
        }
        // line 25
        echo "\t\t\t";
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "mobile", array()) == 1)) {
            // line 26
            echo "\t\t\t<div class=\"device mobile\">
\t\t\t\t<img class=\"screen\" src=\"";
            // line 27
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "/";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "mobileImage", array());
            echo "\" />
\t\t\t\t<img class=\"wrap\" src=\"";
            // line 28
            echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
            echo "/images/smartphone.png\" />
\t\t\t</div>
\t\t\t";
        }
        // line 31
        echo "\t\t</div>
\t</div>
</section>
";
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
        return array (  102 => 31,  96 => 28,  90 => 27,  87 => 26,  84 => 25,  78 => 22,  72 => 21,  69 => 20,  66 => 19,  60 => 16,  54 => 15,  51 => 14,  49 => 13,  43 => 10,  38 => 9,  32 => 7,  26 => 5,  24 => 4,  19 => 1,);
    }
}
/* <section class="job">*/
/* 	<div class="jobContent">*/
/* 		<div class="textWrap bw33">*/
/* 			{% if page.header.displayTitle %}*/
/* 				<h2>{{ page.header.displayTitle }}</h2>*/
/* 			{% else %}*/
/* 				<h2>{{ page.title }}</h2>*/
/* 			{% endif %}*/
/* 			{{ page.content }}*/
/* 			<a class="cta" target="_blank" href="{{ page.header.url }}">See the Site</a>*/
/* 		</div>*/
/* 		<div class="devices bw66">*/
/* 			{% if page.header.desktop == 1 %}*/
/* 			<div class="device desktop">*/
/* 				<img class="screen" src="{{ page.url }}/{{ page.header.desktopImage }}" />*/
/* 				<img class="wrap" src="{{ theme_url }}/images/laptop.png" />*/
/* 			</div>*/
/* 			{% endif %}*/
/* 			{% if page.header.tablet == 1 %}*/
/* 			<div class="device tablet">*/
/* 				<img class="screen" src="{{ page.url }}/{{ page.header.tabletImage }}" />*/
/* 				<img class="wrap" src="{{ theme_url }}/images/tablet.png" />*/
/* 			</div>*/
/* 			{% endif %}*/
/* 			{% if page.header.mobile == 1 %}*/
/* 			<div class="device mobile">*/
/* 				<img class="screen" src="{{ page.url }}/{{ page.header.mobileImage }}" />*/
/* 				<img class="wrap" src="{{ theme_url }}/images/smartphone.png" />*/
/* 			</div>*/
/* 			{% endif %}*/
/* 		</div>*/
/* 	</div>*/
/* </section>*/
/* */
