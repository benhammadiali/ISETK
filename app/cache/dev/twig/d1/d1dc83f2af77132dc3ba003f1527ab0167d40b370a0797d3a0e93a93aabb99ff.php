<?php

/* ISETKBundle:Chef:Home.html.twig */
class __TwigTemplate_df509efc6b1a26936f56e229b33f3293194aaafeb26cc1401458b0e0ddef48bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ISETKBundle:Template:Template.html.twig", "ISETKBundle:Chef:Home.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "ISETKBundle:Template:Template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "ISETKBundle:Chef:Home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends "ISETKBundle:Template:Template.html.twig" %}*/
/* */
