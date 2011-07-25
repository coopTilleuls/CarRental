<?php

/* WebProfilerBundle:Profiler:notfound.html.twig */
class __TwigTemplate_d3bb08c4af6a817d403744cad8b9bbc1 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
            'body' => array($this, 'block_body'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:base.html.twig");
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_panel($context, array $blocks = array())
    {
        // line 18
        echo "                            <h2>Token not found</h2>
                            <p>
                                <em>No request matching the token \"";
        // line 20
        echo twig_escape_filter($this->env, $this->getContext($context, 'token'), "html");
        echo "\".</em>
                            </p>
                        ";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"content\">
        ";
        // line 5
        $this->env->loadTemplate("WebProfilerBundle:Profiler:header.html.twig")->display(array());
        // line 6
        echo "
        <div id=\"resume\">
            <p>
                <strong>No request matching the token \"";
        // line 9
        echo twig_escape_filter($this->env, $this->getContext($context, 'token'), "html");
        echo "\".</strong>
            </p>
        </div>

        <div id=\"main\">
            <div class=\"clear_fix\">
                <div id=\"collector_wrapper\">
                    <div id=\"collector_content\">
                        ";
        // line 17
        $this->displayBlock('panel', $context, $blocks);
        // line 23
        echo "                    </div>
                </div>
                <div id=\"navigation\">
                    ";
        // line 26
        echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Profiler:searchBar", array("token" => $this->getContext($context, 'token')), array());
        // line 27
        echo "                    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:admin.html.twig")->display(array("token" => $this->getContext($context, 'token')));
        // line 28
        echo "                </div>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:notfound.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
