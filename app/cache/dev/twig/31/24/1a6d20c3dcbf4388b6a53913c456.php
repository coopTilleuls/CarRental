<?php

/* TwigBundle:Exception:trace.html.twig */
class __TwigTemplate_31241a6d20c3dcbf4388b6a53913c456 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ($this->getAttribute($this->getContext($context, "trace"), "function")) {
            // line 2
            echo "    at
    <strong>
        <abbr title=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "trace"), "class"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "trace"), "short_class"), "html", null, true);
            echo "</abbr>
        ";
            // line 5
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getContext($context, "trace"), "type") . $this->getAttribute($this->getContext($context, "trace"), "function")), "html", null, true);
            echo "
    </strong>
    (";
            // line 7
            echo $this->env->getExtension('code')->formatArgs($this->getAttribute($this->getContext($context, "trace"), "args"));
            echo ")
    <br />
";
        }
        // line 10
        echo "
";
        // line 11
        if (($this->getAttribute(twig_default_filter($this->getContext($context, "trace")), "file", array(), "any", true) && $this->getAttribute(twig_default_filter($this->getContext($context, "trace")), "line", array(), "any", true))) {
            // line 12
            echo "    in ";
            echo $this->env->getExtension('code')->formatFile($this->getAttribute($this->getContext($context, "trace"), "file"), $this->getAttribute($this->getContext($context, "trace"), "line"));
            echo "&nbsp;
    ";
            // line 13
            ob_start();
            // line 14
            echo "    <a href=\"#\" onclick=\"toggle('trace_";
            echo twig_escape_filter($this->env, (($this->getContext($context, "prefix") . "_") . $this->getContext($context, "i")), "html", null, true);
            echo "'); switchIcons('icon_";
            echo twig_escape_filter($this->env, (($this->getContext($context, "prefix") . "_") . $this->getContext($context, "i")), "html", null, true);
            echo "_open', 'icon_";
            echo twig_escape_filter($this->env, (($this->getContext($context, "prefix") . "_") . $this->getContext($context, "i")), "html", null, true);
            echo "_close'); return false;\">
        <img class=\"toggle\" id=\"icon_";
            // line 15
            echo twig_escape_filter($this->env, (($this->getContext($context, "prefix") . "_") . $this->getContext($context, "i")), "html", null, true);
            echo "_close\" alt=\"-\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_less.gif"), "html", null, true);
            echo "\" style=\"visibility: ";
            echo (((0 == $this->getContext($context, "i"))) ? ("display") : ("hidden"));
            echo "\" />
        <img class=\"toggle\" id=\"icon_";
            // line 16
            echo twig_escape_filter($this->env, (($this->getContext($context, "prefix") . "_") . $this->getContext($context, "i")), "html", null, true);
            echo "_open\" alt=\"+\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_more.gif"), "html", null, true);
            echo "\" style=\"visibility: ";
            echo (((0 == $this->getContext($context, "i"))) ? ("hidden") : ("display"));
            echo "; margin-left: -18px\" />
    </a>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 19
            echo "    <div id=\"trace_";
            echo twig_escape_filter($this->env, (($this->getContext($context, "prefix") . "_") . $this->getContext($context, "i")), "html", null, true);
            echo "\" style=\"display: ";
            echo (((0 == $this->getContext($context, "i"))) ? ("block") : ("none"));
            echo "\" class=\"trace\">
        ";
            // line 20
            echo $this->env->getExtension('code')->fileExcerpt($this->getAttribute($this->getContext($context, "trace"), "file"), $this->getAttribute($this->getContext($context, "trace"), "line"));
            echo "
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
