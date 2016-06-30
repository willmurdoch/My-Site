<?php

/* forms/fields/markdown/markdown.html.twig */
class __TwigTemplate_7225010e8cb48efa08c0e0e0e12536e8582454283b4f8c38851433a98a438244 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["value"] = (((null === (isset($context["value"]) ? $context["value"] : null))) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 2
        echo "<style>
  .trumbowyg-editor p{
    padding: 0;
  }
</style>
";
        // line 7
        $this->displayBlock('label', $context, $blocks);
        // line 13
        $this->displayBlock('field', $context, $blocks);
    }

    // line 7
    public function block_label($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array())) {
            // line 9
            echo "        ";
            $context["hint"] = (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "help", array())) ? ((("data-hint=\"" . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "help", array())) . "\"")) : (""));
            // line 10
            echo "        <div class=\"form-label form-field hint--bottom\" ";
            echo (isset($context["hint"]) ? $context["hint"] : null);
            echo ">";
            echo $this->env->getExtension('GravTwigExtension')->translate($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()));
            echo "</div>
    ";
        }
    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        // line 14
        echo "    <div class=\"form-field\">
        <div class=\"form-data form-markdown-wrapper cm-s-paper\">

\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "/user/plugins/admin/themes/grav/js/editor/ui/trumbowyg.css\">
      <textarea name=\"";
        // line 18
        echo $this->env->getExtension('GravTwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())));
        echo "\" data-grav-urlpreview=\"";
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/media/";
        echo trim($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), "/");
        echo ".json\" id=\"editor\">";
        echo twig_join_filter((isset($context["value"]) ? $context["value"] : null), "
");
        echo "</textarea>

\t\t\t<script src=\"";
        // line 20
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "/user/plugins/admin/themes/grav/js/editor/trumbowyg.min.js\"></script>
\t\t\t<script src=\"";
        // line 21
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "/user/plugins/admin/themes/grav/js/editor/langs/pl.min.js\"></script>

\t\t\t<script src=\"";
        // line 23
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "/user/plugins/admin/themes/grav/js/editor/plugins/base64/trumbowyg.base64.min.js\"></script>
\t\t\t<script src=\"";
        // line 24
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "/user/plugins/admin/themes/grav/js/editor/plugins/noembed/trumbowyg.noembed.min.js\"></script>
\t\t\t<script src=\"";
        // line 25
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "/user/plugins/admin/themes/grav/js/editor/plugins/pasteimage/trumbowyg.pasteimage.min.js\"></script>
\t\t\t<script src=\"";
        // line 26
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "/user/plugins/admin/themes/grav/js/editor/plugins/preformatted/trumbowyg.preformatted.min.js\"></script>

\t\t\t<script>
\t\t\t\$(\"#editor\").trumbowyg({
\t\t\t\tlang: 'en',
\t\t\t\tsemantic: true,
\t\t\t\tremoveformatPasted: true,
\t\t\t\tresetCss: true,
                btnsDef: {
                    // Customizables dropdowns
                    image: {
                        dropdown: ['insertImage', 'base64', 'noEmbed'],
                        ico: 'insertImage'
                    }
                },
                btns: [
                    ['viewHTML'],
                    ['undo', 'redo'],
                    ['formatting'],
                    'btnGrp-design',
                    ['link'],
                    ['image'],
                    'btnGrp-justify',
                    'btnGrp-lists',
                    ['preformatted'],
                    ['horizontalRule'],
                    ['fullscreen']
                ]
\t\t\t});
\t\t\t</script>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/markdown/markdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 26,  96 => 25,  92 => 24,  88 => 23,  83 => 21,  79 => 20,  67 => 18,  63 => 17,  58 => 14,  55 => 13,  45 => 10,  42 => 9,  39 => 8,  36 => 7,  32 => 13,  30 => 7,  23 => 2,  21 => 1,);
    }
}
/* {% set value = (value is null ? field.default : value) %}*/
/* <style>*/
/*   .trumbowyg-editor p{*/
/*     padding: 0;*/
/*   }*/
/* </style>*/
/* {% block label %}*/
/*     {% if field.label %}*/
/*         {% set hint = field.help ? 'data-hint="' ~ field.help ~ '"': '' %}*/
/*         <div class="form-label form-field hint--bottom" {{ hint }}>{{ field.label|t }}</div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* {% block field %}*/
/*     <div class="form-field">*/
/*         <div class="form-data form-markdown-wrapper cm-s-paper">*/
/* */
/* 			<link rel="stylesheet" href="{{ base_url_absolute }}/user/plugins/admin/themes/grav/js/editor/ui/trumbowyg.css">*/
/*       <textarea name="{{ (scope ~ field.name)|fieldName }}" data-grav-urlpreview="{{ base_url }}/media/{{ admin.route|trim('/') }}.json" id="editor">{{ value|join("\n") }}</textarea>*/
/* */
/* 			<script src="{{ base_url_absolute }}/user/plugins/admin/themes/grav/js/editor/trumbowyg.min.js"></script>*/
/* 			<script src="{{ base_url_absolute }}/user/plugins/admin/themes/grav/js/editor/langs/pl.min.js"></script>*/
/* */
/* 			<script src="{{ base_url_absolute }}/user/plugins/admin/themes/grav/js/editor/plugins/base64/trumbowyg.base64.min.js"></script>*/
/* 			<script src="{{ base_url_absolute }}/user/plugins/admin/themes/grav/js/editor/plugins/noembed/trumbowyg.noembed.min.js"></script>*/
/* 			<script src="{{ base_url_absolute }}/user/plugins/admin/themes/grav/js/editor/plugins/pasteimage/trumbowyg.pasteimage.min.js"></script>*/
/* 			<script src="{{ base_url_absolute }}/user/plugins/admin/themes/grav/js/editor/plugins/preformatted/trumbowyg.preformatted.min.js"></script>*/
/* */
/* 			<script>*/
/* 			$("#editor").trumbowyg({*/
/* 				lang: 'en',*/
/* 				semantic: true,*/
/* 				removeformatPasted: true,*/
/* 				resetCss: true,*/
/*                 btnsDef: {*/
/*                     // Customizables dropdowns*/
/*                     image: {*/
/*                         dropdown: ['insertImage', 'base64', 'noEmbed'],*/
/*                         ico: 'insertImage'*/
/*                     }*/
/*                 },*/
/*                 btns: [*/
/*                     ['viewHTML'],*/
/*                     ['undo', 'redo'],*/
/*                     ['formatting'],*/
/*                     'btnGrp-design',*/
/*                     ['link'],*/
/*                     ['image'],*/
/*                     'btnGrp-justify',*/
/*                     'btnGrp-lists',*/
/*                     ['preformatted'],*/
/*                     ['horizontalRule'],*/
/*                     ['fullscreen']*/
/*                 ]*/
/* 			});*/
/* 			</script>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
