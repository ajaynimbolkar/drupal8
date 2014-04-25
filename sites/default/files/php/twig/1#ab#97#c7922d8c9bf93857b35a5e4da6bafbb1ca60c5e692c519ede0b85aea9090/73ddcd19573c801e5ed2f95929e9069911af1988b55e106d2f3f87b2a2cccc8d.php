<?php

/* core/modules/views_ui/templates/views-ui-view-preview-section.html.twig */
class __TwigTemplate_ab97c7922d8c9bf93857b35a5e4da6bafbb1ca60c5e692c519ede0b85aea9090 extends Twig_Template
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
        // line 16
        echo "<h1 class=\"section-title\">";
        echo twig_render_var((isset($context["title"]) ? $context["title"] : null));
        echo "</h1>
";
        // line 17
        if ((isset($context["links"]) ? $context["links"] : null)) {
            // line 18
            echo "  <div class=\"contextual\">";
            echo twig_render_var((isset($context["links"]) ? $context["links"] : null));
            echo "</div>
";
        }
        // line 20
        echo "<div class=\"preview-section\">";
        echo twig_render_var((isset($context["content"]) ? $context["content"] : null));
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/views_ui/templates/views-ui-view-preview-section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 20,  26 => 18,  24 => 17,  19 => 16,);
    }
}
