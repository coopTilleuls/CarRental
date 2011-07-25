<?php

/* FrameworkBundle:Exception:exception.json.twig */
class __TwigTemplate_550c813bf506f758c1ae08ca1651cca3 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo twig_jsonencode_filter($this->getAttribute($this->getContext($context, 'exception'), "toarray", array(), "any", false));
        echo "
";
    }

    public function getTemplateName()
    {
        return "FrameworkBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
