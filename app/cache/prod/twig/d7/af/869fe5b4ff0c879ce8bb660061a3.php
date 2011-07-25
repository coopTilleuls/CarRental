<?php

/* FrameworkBundle:Exception:error.html.twig */
class __TwigTemplate_d7af869fe5b4ff0c879ce8bb660061a3 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>An Error Occurred: ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context['status_text']) ? $context['status_text'] : null), "html");
        echo "</title>
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a \"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context['status_code']) ? $context['status_code'] : null), "html");
        echo " ";
        echo twig_escape_filter($this->env, (isset($context['status_text']) ? $context['status_text'] : null), "html");
        echo "\".</h2>

        <div>
            Something is broken. Please e-mail us at [email] and let us know
            what you were doing when this error occurred. We will fix it as soon
            as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "FrameworkBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
