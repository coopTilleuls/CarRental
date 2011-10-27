<?php

/* SonataAdminBundle:Form:filter_admin_fields.html.twig */
class __TwigTemplate_81f9d393d4697a059e4b4c969040296c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'field_row' => array($this, 'block_field_row'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 20
    public function block_field($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
    }

    // line 14
    public function block_field_row($context, array $blocks = array())
    {
        // line 15
        echo "    <div>
        ";
        // line 16
        echo $this->env->getExtension('form')->renderLabel($this->getContext($context, "form"));
        echo "
        <br />

        <div class=\"sonata-ba-field\">
            ";
        // line 20
        $this->displayBlock('field', $context, $blocks);
        // line 21
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:filter_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
