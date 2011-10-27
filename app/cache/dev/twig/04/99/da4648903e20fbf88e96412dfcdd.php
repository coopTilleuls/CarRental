<?php

/* DunglasCarRentalBundle::layout.html.twig */
class __TwigTemplate_0499da4648903e20fbf88e96412dfcdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Car Rental</h1>

    ";
        // line 6
        $this->displayBlock('content', $context, $blocks);
    }

    public function getTemplateName()
    {
        return "DunglasCarRentalBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
