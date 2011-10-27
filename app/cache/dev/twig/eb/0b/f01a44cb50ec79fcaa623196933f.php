<?php

/* SonataAdminBundle:CRUD:list_integer.html.twig */
class __TwigTemplate_eb0bf01a44cb50ec79fcaa623196933f extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_integer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
