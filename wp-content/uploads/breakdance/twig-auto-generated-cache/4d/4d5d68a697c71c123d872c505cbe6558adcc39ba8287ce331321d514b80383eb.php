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

/* 9b98529e549df3a9e28f8412c333d86d2dfa2fca */
class __TwigTemplate_56627a414d440794bc7f840cb040b0b00f4d8ccc32a7135cc9c38bf4d9fabcea extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "9b98529e549df3a9e28f8412c333d86d2dfa2fca", 2)->unwrap();
        // line 3
        echo "
          %%SELECTOR%% {
  width: ";
        // line 5
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 5), "width", [], "any", false, false, false, 5), "style", [], "any", false, false, false, 5);
        echo ";
  ";
        // line 6
        echo twig_call_macro($macros["macros"], "macro_spacing_margin_y", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 6)], 6, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% ul {
  gap: ";
        // line 10
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 10), "space_between_items", [], "any", false, false, false, 10), "style", [], "any", false, false, false, 10);
        echo ";
";
        // line 11
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 11), "alignment_when_vertical", [], "any", false, false, false, 11), "center"))) {
            // line 12
            echo "  align-items: center;
";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 13
($context["design"] ?? null), "layout", [], "any", false, false, false, 13), "alignment_when_vertical", [], "any", false, false, false, 13), "right"))) {
            // line 14
            echo "  align-items: flex-end;
";
        }
        // line 16
        echo "}

%%SELECTOR%% .horizontal-layout {
";
        // line 19
        if ((0 === twig_compare(($context["breakpoint"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 19), "force_vertical_stacking", [], "any", false, false, false, 19)))) {
            // line 20
            echo "  flex-direction: column;
";
        }
        // line 22
        echo "  justify-content: ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 22), "alignment", [], "any", false, false, false, 22);
        echo ";
}

/* icons */
%%SELECTOR%% li .bde-checkmark-list__icon {
  font-size: ";
        // line 27
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, false, false, 27), "size", [], "any", false, false, false, 27), "style", [], "any", false, false, false, 27);
        echo ";
}

%%SELECTOR%% li .bde-checkmark-list__icon_yes > svg {
  ";
        // line 31
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, false, false, 31), "advanced", [], "any", false, false, false, 31), "positive_nudge", [], "any", false, false, false, 31), "style", [], "any", false, false, false, 31)) {
            // line 32
            echo "    transform: translate(0px, ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, false, false, 32), "advanced", [], "any", false, false, false, 32), "positive_nudge", [], "any", false, false, false, 32), "style", [], "any", false, false, false, 32);
            echo ");
  ";
        }
        // line 34
        echo "}

%%SELECTOR%% li .bde-checkmark-list__icon_no > svg {
  ";
        // line 37
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, false, false, 37), "advanced", [], "any", false, false, false, 37), "negative_nudge", [], "any", false, false, false, 37), "style", [], "any", false, false, false, 37)) {
            // line 38
            echo "  \ttransform: translate(0px, ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, false, false, 38), "advanced", [], "any", false, false, false, 38), "negative_nudge", [], "any", false, false, false, 38), "style", [], "any", false, false, false, 38);
            echo ");
  ";
        }
        // line 40
        echo "}

";
        // line 42
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, false, false, 42), "background", [], "any", false, false, false, 42)) {
            // line 43
            echo "  %%SELECTOR%% li .bde-checkmark-list__icon.bg-yes {
    padding: ";
            // line 44
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, false, false, 44), "padding", [], "any", false, false, false, 44), "style", [], "any", false, false, false, 44);
            echo ";
    border-radius: ";
            // line 45
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, false, false, 45), "radius", [], "any", false, false, false, 45), "style", [], "any", false, false, false, 45);
            echo ";
    color: ";
            // line 46
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, false, false, 46), "icon_color", [], "any", false, false, false, 46);
            echo ";
  }

  %%SELECTOR%% li .bde-checkmark-list__icon_yes.bg-yes {
    background-color: ";
            // line 50
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, false, false, 50), "positive_color", [], "any", false, false, false, 50);
            echo ";
  }

  %%SELECTOR%% li .bde-checkmark-list__icon_no.bg-yes {
    background-color: ";
            // line 54
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, false, false, 54), "negative_color", [], "any", false, false, false, 54);
            echo ";
  }
";
        } else {
            // line 57
            echo "  %%SELECTOR%% li .bde-checkmark-list__icon_yes {
    color: ";
            // line 58
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, false, false, 58), "positive_color", [], "any", false, false, false, 58);
            echo "
  }

  %%SELECTOR%% li .bde-checkmark-list__icon_no {
    color: ";
            // line 62
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, false, false, 62), "negative_color", [], "any", false, false, false, 62);
            echo "
  }
";
        }
        // line 65
        echo "
%%SELECTOR%% li div {
  ";
        // line 67
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 67), ($context["globalSettings"] ?? null)], 67, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% ul span {
  margin-right: ";
        // line 71
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 71), "text_indent", [], "any", false, false, false, 71), "style", [], "any", false, false, false, 71);
        echo ";
}

";
        // line 75
        echo "

    %%SELECTOR%% {
        ";
        // line 78
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 79
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 79), "wrapper", [], "any", false, false, false, 79), "background", [], "any", false, false, false, 79), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 80
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 80), "wrapper", [], "any", false, false, false, 80), "layout", [], "any", false, false, false, 80), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 81
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 81), "wrapper", [], "any", false, false, false, 81), "size", [], "any", false, false, false, 81), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 82
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 82), "wrapper", [], "any", false, false, false, 82), "typography", [], "any", false, false, false, 82),         // line 83
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 84
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 84), "wrapper", [], "any", false, false, false, 84), "spacing", [], "any", false, false, false, 84), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 85
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 85), "wrapper", [], "any", false, false, false, 85), "borders", [], "any", false, false, false, 85), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 86
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 86), "wrapper", [], "any", false, false, false, 86), "effects", [], "any", false, false, false, 86)], 78, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 90
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 91
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 91), "wrapper_hover", [], "any", false, false, false, 91), "background", [], "any", false, false, false, 91), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 92
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 92), "wrapper_hover", [], "any", false, false, false, 92), "layout", [], "any", false, false, false, 92), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 93
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 93), "wrapper_hover", [], "any", false, false, false, 93), "size", [], "any", false, false, false, 93), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 94
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 94), "wrapper_hover", [], "any", false, false, false, 94), "typography", [], "any", false, false, false, 94),         // line 95
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 96
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 96), "wrapper_hover", [], "any", false, false, false, 96), "spacing", [], "any", false, false, false, 96), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 97
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 97), "wrapper_hover", [], "any", false, false, false, 97), "borders", [], "any", false, false, false, 97), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 98
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 98), "wrapper_hover", [], "any", false, false, false, 98), "effects", [], "any", false, false, false, 98)], 90, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 102
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 102), "css", [], "any", false, false, false, 102);
        echo "


";
        // line 105
        if ((($context["isBaseBreakpoint"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 105), "hide", [], "any", false, false, false, 105)))) {
            // line 106
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 107
                echo "        ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 107), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 107), "hide", [], "any", false, false, false, 107))) {
                    // line 108
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 110
                    if (($context["isBuilder"] ?? null)) {
                        // line 111
                        echo "                        opacity: 0.5;
                        filter: grayscale(100%);
                    ";
                    } else {
                        // line 114
                        echo "                        display: none;
                    ";
                    }
                    // line 116
                    echo "                }
            }
        ";
                }
                // line 119
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 121
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "9b98529e549df3a9e28f8412c333d86d2dfa2fca";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 121,  263 => 119,  258 => 116,  254 => 114,  249 => 111,  247 => 110,  241 => 108,  238 => 107,  233 => 106,  231 => 105,  225 => 102,  218 => 98,  217 => 97,  216 => 96,  215 => 95,  214 => 94,  213 => 93,  212 => 92,  211 => 91,  210 => 90,  203 => 86,  202 => 85,  201 => 84,  200 => 83,  199 => 82,  198 => 81,  197 => 80,  196 => 79,  195 => 78,  190 => 75,  184 => 71,  177 => 67,  173 => 65,  167 => 62,  160 => 58,  157 => 57,  151 => 54,  144 => 50,  137 => 46,  133 => 45,  129 => 44,  126 => 43,  124 => 42,  120 => 40,  114 => 38,  112 => 37,  107 => 34,  101 => 32,  99 => 31,  92 => 27,  83 => 22,  79 => 20,  77 => 19,  72 => 16,  68 => 14,  66 => 13,  63 => 12,  61 => 11,  57 => 10,  50 => 6,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "9b98529e549df3a9e28f8412c333d86d2dfa2fca", "");
    }
}
