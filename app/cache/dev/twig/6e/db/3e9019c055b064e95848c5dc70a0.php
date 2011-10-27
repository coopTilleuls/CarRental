<?php

/* SonataAdminBundle::ajax_layout.html.twig */
class __TwigTemplate_6edb3e9019c055b064e95848c5dc70a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
            'list' => array($this, 'block_list'),
            'list_table' => array($this, 'block_list_table'),
            'list_filters' => array($this, 'block_list_filters'),
            'content' => array($this, 'block_content'),
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
";
        // line 12
        $this->displayBlock('content', $context, $blocks);
    }

    // line 13
    public function block_preview($context, array $blocks = array())
    {
    }

    // line 14
    public function block_form($context, array $blocks = array())
    {
    }

    // line 15
    public function block_list($context, array $blocks = array())
    {
    }

    // line 19
    public function block_list_table($context, array $blocks = array())
    {
    }

    // line 22
    public function block_list_filters($context, array $blocks = array())
    {
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->displayBlock('preview', $context, $blocks);
        // line 14
        echo "    ";
        $this->displayBlock('form', $context, $blocks);
        // line 15
        echo "    ";
        $this->displayBlock('list', $context, $blocks);
        // line 16
        echo "
    <div class=\"sonata-ba-list\">
        <div class=\"span-18\">
            ";
        // line 19
        $this->displayBlock('list_table', $context, $blocks);
        // line 20
        echo "        </div>
        <div class=\"span-6 last\">
            ";
        // line 22
        $this->displayBlock('list_filters', $context, $blocks);
        // line 23
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::ajax_layout.html.twig";
    }

    public function isTraitable()
    {
        return true;
    }
}
