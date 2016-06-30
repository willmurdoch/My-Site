<?php

/* partials/base.html.twig */
class __TwigTemplate_77f62fc32f474a14251de455662c39fe3e47e392205d22a9a5937fdab4239493 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 42
        echo "    </head>

  <body>
    <div id=\"popup\">
      <div id=\"popupCenter\">
        <div id=\"popupWrap\">
          <div id=\"popupConstraint\">
            <div class=\"closeBtn\">x</div>
          </div>
        </div>
      </div>
    </div>
    ";
        // line 54
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 54)->display($context);
        // line 55
        echo "    ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 55)->display($context);
        // line 56
        echo "
    <div class=\"wrapper\">
      ";
        // line 58
        $this->displayBlock('content', $context, $blocks);
        // line 61
        echo "
      <footer>
        <p>&copy; ";
        // line 63
        echo twig_date_format_filter($this->env, "now", "Y");
        echo " Will Murdoch. Proprietary code is licensed under <a href=\"http://opensource.org/licenses/mit-license.php\" target=\"_blank\">MIT</a>.</p>
      </footer>
    </div>
    <div class=\"stars\">
  \t\t<div id=\"stars1\"></div>
  \t\t<div id=\"stars2\"></div>
  \t\t<div id=\"stars3\"></div>
  \t\t<div id=\"stars4\"></div>
  \t</div>
  </body>
  ";
        // line 73
        $this->displayBlock('bottom', $context, $blocks);
        // line 74
        echo "</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        ";
        // line 8
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array())) {
            // line 9
            echo "        <meta name=\"description\" content=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array());
            echo "\">
        ";
        } else {
            // line 11
            echo "        <meta name=\"description\" content=\"";
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "description", array());
            echo "\">
        ";
        }
        // line 13
        echo "        ";
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", array())) {
            // line 14
            echo "        <meta name=\"robots\" content=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", array());
            echo "\">
        ";
        }
        // line 16
        echo "        <!--<link rel=\"icon\" type=\"image/png\" href=\"";
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/favicon.png\">-->

        <title>";
        // line 18
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,200,300,100,500,500italic,700,800,900' rel='stylesheet' type='text/css'>
        ";
        // line 20
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('javascripts', $context, $blocks);
        // line 40
        echo "
        ";
    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 21
        echo "
        ";
        // line 23
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/main.css", 1 => 100), "method");
        // line 24
        echo "
            ";
        // line 25
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "
        ";
    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        // line 29
        echo "          ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js", 1 => 101), "method");
        // line 30
        echo "          ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/bootstrap.min.js"), "method");
        // line 31
        echo "          ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/main.min.js"), "method");
        // line 32
        echo "
          ";
        // line 33
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 34
            echo "              ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"), "method");
            // line 35
            echo "              ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"), "method");
            // line 36
            echo "          ";
        }
        // line 37
        echo "
          ";
        // line 38
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
        ";
    }

    // line 58
    public function block_content($context, array $blocks = array())
    {
        // line 59
        echo "        <!--Page content gets output here-->
      ";
    }

    // line 73
    public function block_bottom($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 73,  194 => 59,  191 => 58,  185 => 38,  182 => 37,  179 => 36,  176 => 35,  173 => 34,  171 => 33,  168 => 32,  165 => 31,  162 => 30,  159 => 29,  156 => 28,  150 => 25,  147 => 24,  144 => 23,  141 => 21,  138 => 20,  133 => 40,  131 => 28,  128 => 27,  126 => 20,  117 => 18,  111 => 16,  105 => 14,  102 => 13,  96 => 11,  90 => 9,  88 => 8,  83 => 5,  80 => 4,  75 => 74,  73 => 73,  60 => 63,  56 => 61,  54 => 58,  50 => 56,  47 => 55,  45 => 54,  31 => 42,  29 => 4,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*         {% block head %}*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         {% if header.description %}*/
/*         <meta name="description" content="{{ header.description }}">*/
/*         {% else %}*/
/*         <meta name="description" content="{{ site.description }}">*/
/*         {% endif %}*/
/*         {% if header.robots %}*/
/*         <meta name="robots" content="{{ header.robots }}">*/
/*         {% endif %}*/
/*         <!--<link rel="icon" type="image/png" href="{{ theme_url }}/images/favicon.png">-->*/
/* */
/*         <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>*/
/*         <link href='https://fonts.googleapis.com/css?family=Raleway:400,200,300,100,500,500italic,700,800,900' rel='stylesheet' type='text/css'>*/
/*         {% block stylesheets %}*/
/* */
/*         {# Custom styles for this theme #}*/
/*             {% do assets.add('theme://css/main.css',100) %}*/
/* */
/*             {{ assets.css() }}*/
/*         {% endblock %}*/
/* */
/*         {% block javascripts %}*/
/*           {% do assets.add('https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', 101) %}*/
/*           {% do assets.add('theme://js/bootstrap.min.js') %}*/
/*           {% do assets.add('theme://js/main.min.js') %}*/
/* */
/*           {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}*/
/*               {% do assets.add('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') %}*/
/*               {% do assets.add('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') %}*/
/*           {% endif %}*/
/* */
/*           {{ assets.js() }}*/
/*         {% endblock %}*/
/* */
/*         {% endblock head %}*/
/*     </head>*/
/* */
/*   <body>*/
/*     <div id="popup">*/
/*       <div id="popupCenter">*/
/*         <div id="popupWrap">*/
/*           <div id="popupConstraint">*/
/*             <div class="closeBtn">x</div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     {% include 'partials/navigation.html.twig' %}*/
/*     {% include 'partials/header.html.twig' %}*/
/* */
/*     <div class="wrapper">*/
/*       {% block content %}*/
/*         <!--Page content gets output here-->*/
/*       {% endblock %}*/
/* */
/*       <footer>*/
/*         <p>&copy; {{ "now"|date("Y") }} Will Murdoch. Proprietary code is licensed under <a href="http://opensource.org/licenses/mit-license.php" target="_blank">MIT</a>.</p>*/
/*       </footer>*/
/*     </div>*/
/*     <div class="stars">*/
/*   		<div id="stars1"></div>*/
/*   		<div id="stars2"></div>*/
/*   		<div id="stars3"></div>*/
/*   		<div id="stars4"></div>*/
/*   	</div>*/
/*   </body>*/
/*   {% block bottom %}{% endblock %}*/
/* </html>*/
/* */
