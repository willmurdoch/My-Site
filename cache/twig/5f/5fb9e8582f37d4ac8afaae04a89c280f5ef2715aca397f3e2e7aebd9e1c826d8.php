<?php

/* forms/fields/blueprint/blueprint.html.twig */
class __TwigTemplate_8fce1369c5245b73e0d9fa8e09ef3c20c7726f770606d488d86bc4b6e014a679 extends Twig_Template
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
        echo "<input data-grav-field=\"hidden\" data-grav-disabled=\"false\" type=\"hidden\" class=\"input\" name=\"";
        echo $this->env->getExtension('GravTwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())));
        echo "\" value=\"";
        echo $this->getAttribute((isset($context["blueprints"]) ? $context["blueprints"] : null), "name", array());
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "forms/fields/blueprint/blueprint.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <input data-grav-field="hidden" data-grav-disabled="false" type="hidden" class="input" name="{{ (scope ~ field.name)|fieldName }}" value="{{ blueprints.name }}" />*/
/* */