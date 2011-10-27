<?php

/* SonataAdminBundle:CRUD:base_list_field.html.twig */
class __TwigTemplate_4a43354a200ec77c8154ea824de1547a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<td class=\"sonata-ba-list-field sonata-ba-list-field-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "field_description"), "type"), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "id", array($this->getContext($context, "object"), ), "method"), "html", null, true);
        echo "\">
    ";
        // line 13
        if (($this->getAttribute(twig_default_filter($this->getAttribute($this->getContext($context, "field_description"), "options")), "identifier", array(), "any", true) && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(array(0 => "EDIT", 1 => "SHOW"), ), "method"))) {
            // line 14
            echo "
        ";
            // line 15
            if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array("edit", ), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array("EDIT", ), "method"))) {
                // line 16
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateObjectUrl", array("edit", $this->getContext($context, "object"), ), "method"), "html", null, true);
                echo "\">
        ";
            } elseif ($this->getAttribute($this->getContext($context, "admin"), "hasroute", array("show", ), "method")) {
                // line 18
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateObjectUrl", array("show", $this->getContext($context, "object"), ), "method"), "html", null, true);
                echo "\">
        ";
            }
            // line 20
            echo "
            ";
            // line 21
            $this->displayBlock('field', $context, $blocks);
            // line 22
            echo "        </a>

    ";
        } else {
            // line 25
            echo "        ";
            $this->displayBlock("field", $context, $blocks);
            echo "
    ";
        }
        // line 27
        echo "</td>";
    }

    // line 21
    public function block_field($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
