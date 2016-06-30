<?php

/* partials/grid.html.twig */
class __TwigTemplate_9703398d55b44822de5b423c6a899d8a6c8335072bf93558385ad6490a31c8fb extends Twig_Template
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
            echo "
";
        } else {
            // line 4
            echo "
";
        }
        // line 6
        echo "
<section>
\t<div class=\"textWrap\">
\t\t";
        // line 9
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "displayTitle", array())) {
            // line 10
            echo "\t\t\t<h2>";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "displayTitle", array());
            echo "</h2>
\t\t";
        } else {
            // line 12
            echo "\t\t\t<h2>";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</h2>
\t\t";
        }
        // line 14
        echo "\t\t";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t</div>
\t<div class=\"grid\">
\t\t<div class=\"scaler\">
\t\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "tiles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tile"]) {
            // line 19
            echo "\t\t\t\t<div class=\"tile bw100\">
\t\t\t\t\t<div class=\"imgWrap\">
\t\t\t\t\t\t<a href=\"";
            // line 21
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo $this->getAttribute($context["tile"], "url", array());
            echo "\"><img src=\"";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "/";
            echo $this->getAttribute($context["tile"], "image", array());
            echo "\" /></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"textWrap\">
\t\t\t\t\t\t<h3>";
            // line 24
            echo $this->getAttribute($context["tile"], "title", array());
            echo "</h3>
\t\t\t\t\t\t<p>";
            // line 25
            echo $this->getAttribute($context["tile"], "blurb", array());
            echo "</p>
\t\t\t\t\t\t<a href=\"";
            // line 26
            echo $this->getAttribute($context["tile"], "url", array());
            echo "\" target=\"_blank\">Learn More</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t\t</div>
\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "partials/grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 30,  83 => 26,  79 => 25,  75 => 24,  64 => 21,  60 => 19,  56 => 18,  48 => 14,  42 => 12,  36 => 10,  34 => 9,  29 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if page.active %}*/
/* */
/* {% else %}*/
/* */
/* {% endif %}*/
/* */
/* <section>*/
/* 	<div class="textWrap">*/
/* 		{% if page.header.displayTitle %}*/
/* 			<h2>{{ page.header.displayTitle }}</h2>*/
/* 		{% else %}*/
/* 			<h2>{{ page.title }}</h2>*/
/* 		{% endif %}*/
/* 		{{ page.content }}*/
/* 	</div>*/
/* 	<div class="grid">*/
/* 		<div class="scaler">*/
/* 			{% for tile in page.header.tiles %}*/
/* 				<div class="tile bw100">*/
/* 					<div class="imgWrap">*/
/* 						<a href="{{ base_url }}{{ tile.url }}"><img src="{{ page.url }}/{{ tile.image }}" /></a>*/
/* 					</div>*/
/* 					<div class="textWrap">*/
/* 						<h3>{{ tile.title }}</h3>*/
/* 						<p>{{ tile.blurb }}</p>*/
/* 						<a href="{{ tile.url }}" target="_blank">Learn More</a>*/
/* 					</div>*/
/* 				</div>*/
/* 			{% endfor %}*/
/* 		</div>*/
/* 	</div>*/
/* </section>*/
/* */
