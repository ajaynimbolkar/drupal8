<?php

/* core/themes/seven/templates/page.html.twig */
class __TwigTemplate_fc0c81c99c40fc86aea1b3c728a7cf8cccbb5683b7d73bbe52fd93fef4f300cd extends Twig_Template
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
        // line 66
        echo "  <header id=\"branding\" class=\"clearfix\">
    <div class=\"branding__inner\">
      ";
        // line 68
        echo twig_render_var((isset($context["title_prefix"]) ? $context["title_prefix"] : null));
        echo "
      ";
        // line 69
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 70
            echo "        <h1 class=\"page-title\">";
            echo twig_render_var((isset($context["title"]) ? $context["title"] : null));
            echo "</h1>
      ";
        }
        // line 72
        echo "      ";
        echo twig_render_var((isset($context["title_suffix"]) ? $context["title_suffix"] : null));
        echo "
      ";
        // line 73
        if ((isset($context["primary_local_tasks"]) ? $context["primary_local_tasks"] : null)) {
            // line 74
            echo "        ";
            echo twig_render_var((isset($context["primary_local_tasks"]) ? $context["primary_local_tasks"] : null));
            echo "
      ";
        }
        // line 76
        echo "    </div>
  </header>

  <div id=\"page\">
    ";
        // line 80
        if ((isset($context["secondary_local_tasks"]) ? $context["secondary_local_tasks"] : null)) {
            // line 81
            echo "      <div class=\"tabs-secondary clearfix\" role=\"navigation\">";
            echo twig_render_var((isset($context["secondary_local_tasks"]) ? $context["secondary_local_tasks"] : null));
            echo "</div>
    ";
        }
        // line 83
        echo "
    ";
        // line 84
        echo twig_render_var((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null));
        echo "

    <main id=\"content\" class=\"clearfix\" role=\"main\">
      <div class=\"visually-hidden\"><a id=\"main-content\"></a></div>
      ";
        // line 88
        if ((isset($context["messages"]) ? $context["messages"] : null)) {
            // line 89
            echo "        <div id=\"console\" class=\"clearfix\">";
            echo twig_render_var((isset($context["messages"]) ? $context["messages"] : null));
            echo "</div>
      ";
        }
        // line 91
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help")) {
            // line 92
            echo "        <div id=\"help\">
          ";
            // line 93
            echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help"));
            echo "
        </div>
      ";
        }
        // line 96
        echo "      ";
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 97
            echo "        <ul class=\"action-links\">
          ";
            // line 98
            echo twig_render_var((isset($context["action_links"]) ? $context["action_links"] : null));
            echo "
        </ul>
      ";
        }
        // line 101
        echo "      ";
        echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content"));
        echo "
    </main>

    <footer id=\"footer\" role=\"contentinfo\">
      ";
        // line 105
        echo twig_render_var((isset($context["feed_icons"]) ? $context["feed_icons"] : null));
        echo "
    </footer>

  </div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 105,  104 => 101,  98 => 98,  95 => 97,  92 => 96,  86 => 93,  83 => 92,  80 => 91,  74 => 89,  72 => 88,  65 => 84,  62 => 83,  56 => 81,  54 => 80,  42 => 74,  40 => 73,  29 => 70,  27 => 69,  23 => 68,  45 => 26,  33 => 22,  24 => 19,  55 => 26,  48 => 76,  39 => 24,  35 => 72,  30 => 21,  26 => 19,  22 => 18,  19 => 66,);
    }
}
