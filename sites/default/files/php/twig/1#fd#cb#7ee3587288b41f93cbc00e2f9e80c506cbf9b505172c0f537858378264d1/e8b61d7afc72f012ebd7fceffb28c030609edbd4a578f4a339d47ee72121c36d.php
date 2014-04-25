<?php

/* core/modules/system/templates/image.html.twig */
class __TwigTemplate_fdcb7ee3587288b41f93cbc00e2f9e80c506cbf9b505172c0f537858378264d1 extends Twig_Template
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
        echo "<img";
        echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
        echo " />
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 14,);
    }
}
