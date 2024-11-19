<?php

use Breakdance\Lib\Vendor\Twig\Environment;
use Breakdance\Lib\Vendor\Twig\Error\LoaderError;
use Breakdance\Lib\Vendor\Twig\Error\RuntimeError;
use Breakdance\Lib\Vendor\Twig\Extension\SandboxExtension;
use Breakdance\Lib\Vendor\Twig\Markup;
use Breakdance\Lib\Vendor\Twig\Sandbox\SecurityError;
use Breakdance\Lib\Vendor\Twig\Sandbox\SecurityNotAllowedTagError;
use Breakdance\Lib\Vendor\Twig\Sandbox\SecurityNotAllowedFilterError;
use Breakdance\Lib\Vendor\Twig\Sandbox\SecurityNotAllowedFunctionError;
use Breakdance\Lib\Vendor\Twig\Source;
use Breakdance\Lib\Vendor\Twig\Template;

/* a677ec4e47af067882a933eadd45bb53566e6eea */
class __TwigTemplate_f6e09ab146114c07ff778d51f427aa9839f0d8d3973a76bb70a4c7817989a8ce extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
          ";
        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "a677ec4e47af067882a933eadd45bb53566e6eea", 2)->unwrap();
        // line 3
        echo "
          <ul";
        // line 4
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 4), "horizontal", [], "any", false, false, false, 4)) {
            echo " class=\"horizontal-layout\"";
        }
        echo ">
  ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 5), "list", [], "any", false, false, false, 5));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 6
            echo "
    ";
            // line 7
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 7), "positive_icon", [], "any", false, false, false, 7), "svgCode", [], "any", false, false, false, 7))) {
                // line 8
                echo "      ";
                $context["yesicon"] = "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><path d=\"M18.71,7.21a1,1,0,0,0-1.42,0L9.84,14.67,6.71,11.53A1,1,0,1,0,5.29,13l3.84,3.84a1,1,0,0,0,1.42,0l8.16-8.16A1,1,0,0,0,18.71,7.21Z\"/></svg>";
                // line 9
                echo "    ";
            } else {
                // line 10
                echo "      ";
                $context["yesicon"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 10), "positive_icon", [], "any", false, false, false, 10), "svgCode", [], "any", false, false, false, 10);
                // line 11
                echo "    ";
            }
            // line 12
            echo "
    ";
            // line 13
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 13), "negative_icon", [], "any", false, false, false, 13), "svgCode", [], "any", false, false, false, 13))) {
                // line 14
                echo "      ";
                $context["noicon"] = "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><path d=\"M13.41,12l4.3-4.29a1,1,0,1,0-1.42-1.42L12,10.59,7.71,6.29A1,1,0,0,0,6.29,7.71L10.59,12l-4.3,4.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l4.29,4.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z\"/></svg>";
                // line 15
                echo "    ";
            } else {
                // line 16
                echo "      ";
                $context["noicon"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 16), "negative_icon", [], "any", false, false, false, 16), "svgCode", [], "any", false, false, false, 16);
                // line 17
                echo "    ";
            }
            // line 18
            echo "
    <li>
      <span class='bde-checkmark-list__icon bde-checkmark-list__icon_";
            // line 20
            echo ((twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", true, true, false, 20)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 20), "yes")) : ("yes"));
            echo " ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, false, false, 20), "background", [], "any", false, false, false, 20)) {
                echo " bg-yes";
            }
            echo "'>
        ";
            // line 21
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 21), "no"))) {
                // line 22
                echo "          ";
                echo ($context["noicon"] ?? null);
                echo "
        ";
            } else {
                // line 24
                echo "          ";
                echo ($context["yesicon"] ?? null);
                echo "
        ";
            }
            // line 26
            echo "      </span>
      <div ";
            // line 27
            echo Breakdance\PluginsAPI\content_editable_php((("content.content.list[" . twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 27)) . "].text"));
            echo ">
        ";
            // line 28
            echo ((twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", true, true, false, 28)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, false, 28), "Lorem Ipsum")) : ("Lorem Ipsum"));
            echo "
      </div>

    </li>

  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</ul>

         ";
    }

    public function getTemplateName()
    {
        return "a677ec4e47af067882a933eadd45bb53566e6eea";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 34,  135 => 28,  131 => 27,  128 => 26,  122 => 24,  116 => 22,  114 => 21,  106 => 20,  102 => 18,  99 => 17,  96 => 16,  93 => 15,  90 => 14,  88 => 13,  85 => 12,  82 => 11,  79 => 10,  76 => 9,  73 => 8,  71 => 7,  68 => 6,  51 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "a677ec4e47af067882a933eadd45bb53566e6eea", "");
    }
}
