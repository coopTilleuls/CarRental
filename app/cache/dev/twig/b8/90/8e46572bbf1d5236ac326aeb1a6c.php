<?php

/* FrameworkBundle:Exception:exception.xml.twig */
class __TwigTemplate_b8908e46572bbf1d5236ac326aeb1a6c extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html");
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getContext($context, 'status_code'), "html");
        echo "\" message=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, 'status_text'), "html");
        echo "\">
";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'exception'), "toarray", array(), "any", false));
        foreach ($context['_seq'] as $context['_key'] => $context['e']) {
            // line 5
            echo "    <exception class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'e'), "class", array(), "any", false), "html");
            echo "\" message=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'e'), "message", array(), "any", false), "html");
            echo "\">
";
            // line 6
            $this->env->loadTemplate("FrameworkBundle:Exception:traces.xml.twig")->display(array("exception" => $this->getContext($context, 'e')));
            // line 7
            echo "    </exception>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 9
        echo "</error>
";
    }

    public function getTemplateName()
    {
        return "FrameworkBundle:Exception:exception.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
