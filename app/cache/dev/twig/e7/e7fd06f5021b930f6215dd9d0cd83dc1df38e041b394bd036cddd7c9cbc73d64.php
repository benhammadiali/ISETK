<?php

/* ISETKBundle:Enseignant:Home.html.twig */
class __TwigTemplate_e7d6564585f22de240bf055f32eaaddb472f54e31222cb9e464c272c4d50c3ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ISETKBundle:Template:Template.html.twig", "ISETKBundle:Enseignant:Home.html.twig", 1);
        $this->blocks = array(
            'banner' => array($this, 'block_banner'),
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

    // line 3
    public function block_banner($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ISETKBundle:Default:banner"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "ISETKBundle:Enseignant:Home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "ISETKBundle:Template:Template.html.twig" %}*/
/* */
/* {% block banner %}*/
/*     {{ render(controller("ISETKBundle:Default:banner")) }}*/
/* {% endblock %}*/
