<?php

/* FrameworkBundle:Exception:error.rdf.twig */
class __TwigTemplate_674a72203e390ada368c392ffb6ca4e4 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        $this->env->loadTemplate("FrameworkBundle:Exception:error.xml.twig")->display(array_merge($context, array("exception" => $this->getContext($context, 'exception'))));
    }

    public function getTemplateName()
    {
        return "FrameworkBundle:Exception:error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
