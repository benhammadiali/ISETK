<?php

/* ISETKBundle:Enseignant:EmploiDuTemps.html.twig */
class __TwigTemplate_3ac39e99e37b3f80480f773489729390110048961bff8ffcdedbdbb3cae138cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ISETKBundle:Template:Template.html.twig", "ISETKBundle:Enseignant:EmploiDuTemps.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'main' => array($this, 'block_main'),
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
    public function block_titre($context, array $blocks = array())
    {
        // line 4
        echo "
    <title>Emploi du templs</title>

";
    }

    // line 12
    public function block_main($context, array $blocks = array())
    {
        // line 13
        echo "

    <div class=\"section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h1 class=\"text-center\">Emploi du temps</h1>
                    <div class=\"separator\"></div>
                    <p class=\"text-center\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()), "html", null, true);
        echo "</p>
                    <div class=\"row\">
                        <div class=\"col-sm-4\">
                            ";
        // line 29
        echo "                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"icon-box\">
                                <i class=\"fa fa-cloud-download object-non-visible\" data-animation-effect=\"fadeInUpSmall\" data-effect-delay=\"200\"></i>
                                <h2>Download</h2>
                                <p>Emploi du temps pour la 1er semestre 2016.</p>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            ";
        // line 43
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




";
    }

    public function getTemplateName()
    {
        return "ISETKBundle:Enseignant:EmploiDuTemps.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 43,  60 => 29,  52 => 21,  42 => 13,  39 => 12,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "ISETKBundle:Template:Template.html.twig" %}*/
/* */
/* {% block titre %}*/
/* */
/*     <title>Emploi du templs</title>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* {% block main %}*/
/* */
/* */
/*     <div class="section">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <h1 class="text-center">Emploi du temps</h1>*/
/*                     <div class="separator"></div>*/
/*                     <p class="text-center">{{ user.prenom }} {{ user.nom }}</p>*/
/*                     <div class="row">*/
/*                         <div class="col-sm-4">*/
/*                             {#<div class="icon-box">*/
/*                                 <i class="fa fa-arrows-alt object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="0"></i>*/
/*                                 <h2>Pellentesque fermentu.</h2>*/
/*                                 <p>Voluptatem ad provident non <a href="#">repudiandae</a> veritatis beatae cupiditate amet reiciendis.</p>*/
/*                             </div>#}*/
/*                         </div>*/
/*                         <div class="col-sm-4">*/
/*                             <div class="icon-box">*/
/*                                 <i class="fa fa-cloud-download object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200"></i>*/
/*                                 <h2>Download</h2>*/
/*                                 <p>Emploi du temps pour la 1er semestre 2016.</p>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-sm-4">*/
/*                             {#<div class="icon-box">*/
/*                                 <i class="fa fa-sitemap object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="400"></i>*/
/*                                 <h2>Pellentesque fermentu.</h2>*/
/*                                 <p>Inventore dolores aut laboriosam cum consequuntur delectus sequi! Eum est.</p>*/
/*                             </div>#}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
