<?php

/* FrameworkBundle:Exception:exception.atom.twig */
class __TwigTemplate_e4cc0d9023246042d7c631601c3c49f2 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        $this->env->loadTemplate("FrameworkBundle:Exception:exception.xml.twig")->display(array_merge($context, array("exception" => $this->getContext($context, 'exception'))));
    }

    public function getTemplateName()
    {
        return "FrameworkBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
