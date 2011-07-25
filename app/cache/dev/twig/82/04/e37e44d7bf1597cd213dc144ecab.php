<?php

/* FrameworkBundle:Exception:traces.txt.twig */
class __TwigTemplate_8204e37e44d7bf1597cd213dc144ecab extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, 'exception'), "trace", array(), "any", false))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'exception'), "trace", array(), "any", false));
            foreach ($context['_seq'] as $context['_key'] => $context['trace']) {
                // line 3
                $this->env->loadTemplate("FrameworkBundle:Exception:trace.txt.twig")->display(array("trace" => $this->getContext($context, 'trace')));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        }
    }

    public function getTemplateName()
    {
        return "FrameworkBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
