<?php

/* SonataAdminBundle:CRUD:list__action_edit.html.twig */
class __TwigTemplate_4c7d5cfeb24bcf39ef852b5d1572e08c extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (($this->getAttribute($this->getContext($context, "admin"), "isGranted", array("EDIT", ), "method") && $this->getAttribute($this->getContext($context, "admin"), "hasRoute", array("edit", ), "method"))) {
            // line 2
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateObjectUrl", array("edit", $this->getContext($context, "object"), ), "method"), "html", null, true);
            echo "\" class=\"edit_link\" title=\"";
            echo $this->env->getExtension('translator')->getTranslator()->trans("action_edit", array(), "SonataAdminBundle");
            echo "\">
        <img src=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/page_white_edit.png"), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('translator')->getTranslator()->trans("action_edit", array(), "SonataAdminBundle");
            echo "\" />
    </a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__action_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
