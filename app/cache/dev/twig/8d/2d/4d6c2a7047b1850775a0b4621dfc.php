<?php

/* FrameworkBundle:Exception:exception.js.twig */
class __TwigTemplate_8d2d4d6c2a7047b1850775a0b4621dfc extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "/*
";
        // line 2
        $this->env->loadTemplate("FrameworkBundle:Exception:exception.txt.twig")->display(array_merge($context, array("exception" => $this->getContext($context, 'exception'))));
        // line 3
        echo "*/
";
    }

    public function getTemplateName()
    {
        return "FrameworkBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
