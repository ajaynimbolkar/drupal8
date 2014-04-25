<?php

/* core/modules/views/templates/views-exposed-form.html.twig */
class __TwigTemplate_d70896864b567d12b37a82b4d0c7793bd54d54b061c960a2465498bb06ae67ff extends Twig_Template
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
        // line 14
        if ((!twig_test_empty((isset($context["q"]) ? $context["q"] : null)))) {
            // line 15
            echo "  ";
            // line 19
            echo twig_render_var((isset($context["q"]) ? $context["q"] : null));
            echo "
";
        }
        // line 21
        echo "<div class=\"views-exposed-form clearfix\">
  ";
        // line 22
        echo twig_render_var((isset($context["form"]) ? $context["form"] : null));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/views/templates/views-exposed-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 70,  134 => 68,  125 => 65,  120 => 64,  116 => 63,  111 => 62,  107 => 61,  104 => 60,  99 => 57,  90 => 54,  85 => 53,  81 => 52,  77 => 50,  74 => 49,  70 => 47,  66 => 45,  60 => 43,  57 => 42,  49 => 39,  46 => 38,  43 => 37,  31 => 22,  29 => 32,  26 => 31,  28 => 21,  24 => 30,  59 => 35,  56 => 33,  51 => 40,  41 => 29,  37 => 35,  32 => 27,  30 => 26,  25 => 24,  23 => 19,  21 => 15,  19 => 14,);
    }
}
