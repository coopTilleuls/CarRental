<?php

/* DunglasCarRentalBundle:Default:index.html.twig */
class __TwigTemplate_15f5fd6eed4e984ed2f97fc2e9180ad9 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, 'name'), "html");
        echo "!
";
    }

    public function getTemplateName()
    {
        return "DunglasCarRentalBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
