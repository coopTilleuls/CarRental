<?php

/* FrameworkBundle:Exception:trace.txt.twig */
class __TwigTemplate_69df4d2812744fe03ff09394243fae61 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        if ($this->getAttribute($this->getContext($context, 'trace'), "function", array(), "any", false)) {
            // line 2
            echo "                at ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, 'trace'), "class", array(), "any", false) . $this->getAttribute($this->getContext($context, 'trace'), "type", array(), "any", false)) . $this->getAttribute($this->getContext($context, 'trace'), "function", array(), "any", false)), "html");
            echo "(";
            echo twig_escape_filter($this->env, $this->env->getExtension('code')->formatArgsAsText($this->getAttribute($this->getContext($context, 'trace'), "args", array(), "any", false)), "html");
            echo ")
";
        } else {
            // line 4
            echo "                at n/a
";
        }
        // line 6
        if (($this->getAttribute(((array_key_exists("trace", $context)) ? (twig_default_filter($this->getContext($context, 'trace'))) : ("")), "file", array(), "any", true) && $this->getAttribute(((array_key_exists("trace", $context)) ? (twig_default_filter($this->getContext($context, 'trace'))) : ("")), "line", array(), "any", true))) {
            // line 7
            echo "                    in ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'trace'), "file", array(), "any", false), "html");
            echo " line ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'trace'), "line", array(), "any", false), "html");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "FrameworkBundle:Exception:trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
