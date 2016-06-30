<?php

/* partials/nav.html.twig */
class __TwigTemplate_89e302f239c98de6682be9f4b094933c708887f99b22a11df0990216136b19d0 extends Twig_Template
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
        echo "<nav id=\"admin-sidebar\">
    <div id=\"admin-logo\">
        ";
        // line 3
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin-pro", array(), "array"), "custom_logo_top_left", array())) {
            // line 4
            echo "            <a target=\"_blank\" href=\"";
            echo (isset($context["base_url_relative_frontend"]) ? $context["base_url_relative_frontend"] : null);
            echo "\"><img src=\"";
            echo ((((isset($context["base_url_relative_frontend"]) ? $context["base_url_relative_frontend"] : null) == "/")) ? ("/") : (((isset($context["base_url_relative_frontend"]) ? $context["base_url_relative_frontend"] : null) . "/")));
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin-pro", array(), "array"), "custom_logo_top_left", array());
            echo "\" /></a>
        ";
        } else {
            // line 6
            echo "            <h3><a href=\"";
            echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
            echo "\">";
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
            echo " Admin</a> <a target=\"_blank\" href=\"";
            echo (isset($context["base_url_relative_frontend"]) ? $context["base_url_relative_frontend"] : null);
            echo "\"> <i class=\"fa fa-fw fa-arrow-circle-right\"></i></a></h3>
        ";
        }
        // line 8
        echo "    </div>

    ";
        // line 11
        echo "    <div id=\"admin-user-details\">
        <a href=\"";
        // line 12
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "/users/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "user", array()), "username", array()));
        echo "\">
            <div class=\"admin-user-names\">
                <h4>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "user", array()), "fullname", array()));
        echo "</h4>
                <h5>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "user", array()), "title", array()));
        echo "</h5>
            </div>
        </a>
    </div>
    ";
        // line 20
        echo "
    <ul id=\"admin-menu\">
        <li class=\"";
        // line 22
        echo ((((isset($context["location"]) ? $context["location"] : null) == "dashboard")) ? ("selected") : (""));
        echo "\">
            <a href=\"";
        // line 23
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "\"><i class=\"fa fa-fw fa-th\"></i> ";
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DASHBOARD");
        echo "</a>
        </li>
        ";
        // line 25
        if ($this->env->getExtension('GravTwigExtension')->authorize(array(0 => "admin.configuration", 1 => "admin.super"))) {
            // line 26
            echo "            <li class=\"";
            echo ((((((isset($context["location"]) ? $context["location"] : null) == "system") || ((isset($context["location"]) ? $context["location"] : null) == "site")) || ((isset($context["location"]) ? $context["location"] : null) == "config"))) ? ("selected") : (""));
            echo "\">
                <a href=\"";
            // line 27
            echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
            echo "/config/system\"><i class=\"fa fa-fw fa-wrench\"></i> ";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONFIGURATION");
            echo "</a>
            </li>
        ";
        }
        // line 30
        echo "        ";
        if ($this->env->getExtension('GravTwigExtension')->authorize(array(0 => "admin.pages", 1 => "admin.super"))) {
            // line 31
            echo "            <li class=\"";
            echo ((((isset($context["location"]) ? $context["location"] : null) == "pages")) ? ("selected") : (""));
            echo "\">
                <a href=\"";
            // line 32
            echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
            echo "/pages\">
                    <i class=\"fa fa-fw fa-file-text-o\"></i> ";
            // line 33
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGES");
            echo "
                    <span class=\"badges\">
                        <span class=\"badge count\">";
            // line 35
            echo $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "pagesCount", array());
            echo "</span>
                    </span>
                </a>
            </li>
        ";
        }
        // line 40
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array()), "plugins_hooked_nav", array())) {
            // line 41
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array()), "plugins_hooked_nav", array()));
            foreach ($context['_seq'] as $context["label"] => $context["item"]) {
                // line 42
                echo "                ";
                if ($this->env->getExtension('GravTwigExtension')->authorize(array(0 => ("admin." . $this->getAttribute($context["item"], "route", array())), 1 => "admin.super"))) {
                    // line 43
                    echo "                    <li class=\"";
                    echo ((((isset($context["location"]) ? $context["location"] : null) == $this->getAttribute($context["item"], "route", array()))) ? ("selected") : (""));
                    echo "\">
                        <a href=\"";
                    // line 44
                    echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
                    echo "/";
                    echo $this->getAttribute($context["item"], "route", array());
                    echo "\">
                            <i class=\"fa fa-fw ";
                    // line 45
                    echo $this->getAttribute($context["item"], "icon", array());
                    echo "\"></i> ";
                    echo $this->env->getExtension('AdminTwigExtension')->tuFilter($context["label"]);
                    echo "
                        </a>
                    </li>
                ";
                }
                // line 49
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "        ";
        }
        // line 51
        echo "        ";
        if ($this->env->getExtension('GravTwigExtension')->authorize(array(0 => "admin.plugins", 1 => "admin.super"))) {
            // line 52
            echo "            <li class=\"";
            echo ((((isset($context["location"]) ? $context["location"] : null) == "plugins")) ? ("selected") : (""));
            echo "\">
                <a href=\"";
            // line 53
            echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
            echo "/plugins\">
                    <i class=\"fa fa-fw fa-plug\"></i> ";
            // line 54
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PLUGINS");
            echo "
                    <span class=\"badges\">
                        <span class=\"badge updates\"></span>
                        <span class=\"badge count\">";
            // line 57
            echo twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "plugins", array()));
            echo "</span>

                    </span>
                </a>
            </li>
        ";
        }
        // line 63
        echo "        ";
        if ($this->env->getExtension('GravTwigExtension')->authorize(array(0 => "admin.themes", 1 => "admin.super"))) {
            // line 64
            echo "            <li class=\"";
            echo ((((isset($context["location"]) ? $context["location"] : null) == "themes")) ? ("selected") : (""));
            echo "\">
                <a href=\"";
            // line 65
            echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
            echo "/themes\">
                    <i class=\"fa fa-fw fa-tint\"></i> ";
            // line 66
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.THEMES");
            echo "
                    <span class=\"badges\">
                        <span class=\"badge updates\"></span>
                        <span class=\"badge count\">";
            // line 69
            echo twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "themes", array()));
            echo "</span>
                    </span>
                </a>
            </li>
        ";
        }
        // line 74
        echo "
        ";
        // line 75
        try {
            $this->loadTemplate("nav-pro.html.twig", "partials/nav.html.twig", 75)->display($context);
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 76
        echo "
        <li>
            <a href=\"";
        // line 78
        echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((isset($context["base_url_relative"]) ? $context["base_url_relative"] : null) . "/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "logout"), 1 => "logout-form", 2 => "logout-nonce"), "method");
        echo "\"><i class=\"fa fa-fw fa-sign-out\"></i> ";
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.LOGOUT");
        echo "</a>
        </li>
    </ul>
</nav>
";
    }

    public function getTemplateName()
    {
        return "partials/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 78,  227 => 76,  220 => 75,  217 => 74,  209 => 69,  203 => 66,  199 => 65,  194 => 64,  191 => 63,  182 => 57,  176 => 54,  172 => 53,  167 => 52,  164 => 51,  161 => 50,  155 => 49,  146 => 45,  140 => 44,  135 => 43,  132 => 42,  127 => 41,  124 => 40,  116 => 35,  111 => 33,  107 => 32,  102 => 31,  99 => 30,  91 => 27,  86 => 26,  84 => 25,  77 => 23,  73 => 22,  69 => 20,  62 => 15,  58 => 14,  51 => 12,  48 => 11,  44 => 8,  34 => 6,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <nav id="admin-sidebar">*/
/*     <div id="admin-logo">*/
/*         {% if config.plugins["admin-pro"].custom_logo_top_left %}*/
/*             <a target="_blank" href="{{ base_url_relative_frontend }}"><img src="{{ base_url_relative_frontend == '/' ? '/' : base_url_relative_frontend ~ '/'}}{{ config.plugins["admin-pro"].custom_logo_top_left }}" /></a>*/
/*         {% else %}*/
/*             <h3><a href="{{ base_url_relative }}">{{ site.title }} Admin</a> <a target="_blank" href="{{ base_url_relative_frontend }}"> <i class="fa fa-fw fa-arrow-circle-right"></i></a></h3>*/
/*         {% endif %}*/
/*     </div>*/
/* */
/*     {#{% if admin.authorize %}#}*/
/*     <div id="admin-user-details">*/
/*         <a href="{{ base_url_relative }}/users/{{ admin.user.username|e }}">*/
/*             <div class="admin-user-names">*/
/*                 <h4>{{ admin.user.fullname|e }}</h4>*/
/*                 <h5>{{ admin.user.title|e }}</h5>*/
/*             </div>*/
/*         </a>*/
/*     </div>*/
/*     {#{% endif %}#}*/
/* */
/*     <ul id="admin-menu">*/
/*         <li class="{{ (location == 'dashboard') ? 'selected' : '' }}">*/
/*             <a href="{{ base_url_relative }}"><i class="fa fa-fw fa-th"></i> {{ "PLUGIN_ADMIN.DASHBOARD"|tu }}</a>*/
/*         </li>*/
/*         {% if authorize(['admin.configuration', 'admin.super']) %}*/
/*             <li class="{{ (location == 'system' or location == 'site' or location == 'config') ? 'selected' : '' }}">*/
/*                 <a href="{{ base_url_relative }}/config/system"><i class="fa fa-fw fa-wrench"></i> {{ "PLUGIN_ADMIN.CONFIGURATION"|tu }}</a>*/
/*             </li>*/
/*         {% endif %}*/
/*         {% if authorize(['admin.pages', 'admin.super']) %}*/
/*             <li class="{{ (location == 'pages') ? 'selected' : '' }}">*/
/*                 <a href="{{ base_url_relative }}/pages">*/
/*                     <i class="fa fa-fw fa-file-text-o"></i> {{ "PLUGIN_ADMIN.PAGES"|tu }}*/
/*                     <span class="badges">*/
/*                         <span class="badge count">{{ admin.pagesCount }}</span>*/
/*                     </span>*/
/*                 </a>*/
/*             </li>*/
/*         {% endif %}*/
/*         {% if grav.twig.plugins_hooked_nav %}*/
/*             {% for label, item in grav.twig.plugins_hooked_nav %}*/
/*                 {% if authorize(['admin.' ~ item.route, 'admin.super']) %}*/
/*                     <li class="{{ (location == item.route) ? 'selected' : '' }}">*/
/*                         <a href="{{ base_url_relative }}/{{ item.route }}">*/
/*                             <i class="fa fa-fw {{ item.icon }}"></i> {{ label|tu }}*/
/*                         </a>*/
/*                     </li>*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*         {% endif %}*/
/*         {% if authorize(['admin.plugins', 'admin.super']) %}*/
/*             <li class="{{ (location == 'plugins') ? 'selected' : '' }}">*/
/*                 <a href="{{ base_url_relative }}/plugins">*/
/*                     <i class="fa fa-fw fa-plug"></i> {{ "PLUGIN_ADMIN.PLUGINS"|tu }}*/
/*                     <span class="badges">*/
/*                         <span class="badge updates"></span>*/
/*                         <span class="badge count">{{ admin.plugins|length }}</span>*/
/* */
/*                     </span>*/
/*                 </a>*/
/*             </li>*/
/*         {% endif %}*/
/*         {% if authorize(['admin.themes', 'admin.super']) %}*/
/*             <li class="{{ (location == 'themes') ? 'selected' : '' }}">*/
/*                 <a href="{{ base_url_relative }}/themes">*/
/*                     <i class="fa fa-fw fa-tint"></i> {{ "PLUGIN_ADMIN.THEMES"|tu }}*/
/*                     <span class="badges">*/
/*                         <span class="badge updates"></span>*/
/*                         <span class="badge count">{{ admin.themes|length }}</span>*/
/*                     </span>*/
/*                 </a>*/
/*             </li>*/
/*         {% endif %}*/
/* */
/*         {% include 'nav-pro.html.twig' ignore missing %}*/
/* */
/*         <li>*/
/*             <a href="{{ uri.addNonce(base_url_relative ~ '/task' ~ config.system.param_sep ~ 'logout', 'logout-form', 'logout-nonce') }}"><i class="fa fa-fw fa-sign-out"></i> {{ "PLUGIN_ADMIN.LOGOUT"|tu }}</a>*/
/*         </li>*/
/*     </ul>*/
/* </nav>*/
/* */
