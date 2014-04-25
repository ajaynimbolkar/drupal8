<?php

/* core/modules/views_ui/templates/views-ui-view-info.html.twig */
class __TwigTemplate_a07d840548b58ef3c4541501ef86e48f91e48e8dc348cbbb945f9b2db8e11852 extends Twig_Template
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
        // line 15
        echo "<h3 class=\"views-ui-view-title views-table-filter-text-source\">";
        echo twig_render_var((isset($context["title"]) ? $context["title"] : null));
        echo "</h3>
<div class=\"views-ui-view-displays\">";
        // line 16
        echo twig_render_var((isset($context["displays"]) ? $context["displays"] : null));
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/views_ui/templates/views-ui-view-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 16,  19 => 15,);
    }
}
