<?php

/* FrameworkBundle:Exception:exception.rdf.twig */
class __TwigTemplate_96ee0bb380f969db791b4e0da3c7230a extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        $this->env->loadTemplate("FrameworkBundle:Exception:exception.xml.twig")->display(array_merge($context, array("exception" => $this->getContext($context, 'exception'))));
    }

    public function getTemplateName()
    {
        return "FrameworkBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
