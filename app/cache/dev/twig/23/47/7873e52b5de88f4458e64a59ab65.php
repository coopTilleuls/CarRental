<?php

/* ::base.html.twig */
class __TwigTemplate_23477873e52b5de88f4458e64a59ab65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dunglascarrental/css/style.css"), "html");
        echo "\" type=\"text/css\" media=\"all\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"shortcut icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html");
        echo "\" />
        <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dunglascarrental/js/modernizr-1.7.min.js"), "html");
        echo "\" type=\"text/javascript\"></script>
    </head>
    <body>
        <div id=\"symfony-wrapper\">
            <header id=\"symfony-header\">
                <h1>Car Rental</h1>

                <nav>
                    <ul>
                        <li><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("customer"), "html");
        echo "\">Customers</a></li>
                        <li><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vehicle"), "html");
        echo "\">Vehicles</a></li>
                        <li><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("manufacturer"), "html");
        echo "\">Manufacturers</a></li>
                        <li><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("model"), "html");
        echo "\">Models</a></li>
                        <li><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("model"), "html");
        echo "\">Fuels</a></li>
                    </ul>
                </nav>
            </header>

            ";
        // line 26
        if ($this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "session", array(), "any", false), "flash", array("notice", ), "method", false)) {
            // line 27
            echo "                <div class=\"flash-message\">
                    <em>Notice</em>: ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "session", array(), "any", false), "flash", array("notice", ), "method", false), "html");
            echo "
                </div>
            ";
        }
        // line 31
        echo "
            <div id=\"main\" role=\"main\" class=\"symfony-content\">
                ";
        // line 33
        $this->displayBlock('content', $context, $blocks);
        // line 35
        echo "            </div>

            <footer>
            Powered by Car Rental.
            </footer>
        </div>
        <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js\" type=\"text/javascript\"></script>
        <script type=\"text/javascript\">window.jQuery || document.write(\"<script src='";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dunglascarrental/js/jquery-1.5.1.min.js"), "html");
        echo "'>\\x3C/script>\")</script>
    </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Car Rental";
    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        // line 34
        echo "                ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
