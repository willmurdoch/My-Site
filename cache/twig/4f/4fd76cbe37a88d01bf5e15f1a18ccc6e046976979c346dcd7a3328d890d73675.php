<?php

/* partials/users-details.html.twig */
class __TwigTemplate_7e0bf83524ec897414381bc104fbbe061d81d275f35a3e35930d55cb415d287f extends Twig_Template
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
        echo "<div class=\"user-details\">
    <h2>";
        // line 2
        echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "fullname", array());
        echo "</h2>
    ";
        // line 3
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "title", array())) {
            echo "<h5>";
            echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "title", array());
            echo "</h5>";
        }
        // line 4
        echo "</div>

";
        // line 6
        $this->loadTemplate("partials/blueprints.html.twig", "partials/users-details.html.twig", 6)->display(array_merge($context, array("data" => (isset($context["user"]) ? $context["user"] : null), "blueprints" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "blueprints", array()))));
    }

    public function getTemplateName()
    {
        return "partials/users-details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  32 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="user-details">*/
/*     <h2>{{ user.fullname }}</h2>*/
/*     {% if user.title %}<h5>{{ user.title }}</h5>{% endif %}*/
/* </div>*/
/* */
/* {% include 'partials/blueprints.html.twig' with { data: user, blueprints: user.blueprints } %}*/
/* */
