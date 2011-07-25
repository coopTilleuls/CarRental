<?php

/* FrameworkBundle:Exception:traces.xml.twig */
class __TwigTemplate_f40114564148c69ebcf56209f822e0a3 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'exception'), "trace", array(), "any", false));
        foreach ($context['_seq'] as $context['_key'] => $context['trace']) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->env->loadTemplate("FrameworkBundle:Exception:trace.txt.twig")->display(array("trace" => $this->getContext($context, 'trace')));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 8
        echo "        </traces>
";
    }

    public function getTemplateName()
    {
        return "FrameworkBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
