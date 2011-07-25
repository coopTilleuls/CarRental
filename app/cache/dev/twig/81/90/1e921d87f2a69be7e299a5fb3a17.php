<?php

/* FrameworkBundle:Exception:error.css.twig */
class __TwigTemplate_81901e921d87f2a69be7e299a5fb3a17 extends Twig_Template
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
        return "FrameworkBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
