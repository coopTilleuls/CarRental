<?php

/* FrameworkBundle:Exception:error.atom.twig */
class __TwigTemplate_752f5f2dec62f4670e4cf068061b87dd extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        $this->env->loadTemplate("FrameworkBundle:Exception:error.xml.twig")->display(array_merge($context, array("exception" => $this->getContext($context, 'exception'))));
    }

    public function getTemplateName()
    {
        return "FrameworkBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
