<?php

/* FrameworkBundle:Exception:error.js.twig */
class __TwigTemplate_049a248a171647d326740bd6a625f2d9 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, $this->getContext($context, 'status_code'), "html");
        echo " ";
        echo twig_escape_filter($this->env, $this->getContext($context, 'status_text'), "html");
        echo "

*/
";
    }

    public function getTemplateName()
    {
        return "FrameworkBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
