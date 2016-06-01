<?php

/* ISETKBundle:Chef:Profil.html.twig */
class __TwigTemplate_ed543fb90c00d9db3648084c41016c0a20f50d20b62fd138678e095aebb2be3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ISETKBundle:Template:Template.html.twig", "ISETKBundle:Chef:Profil.html.twig", 1);
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
    <title>Liste Etudiant</title>

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
                    <h1 class=\"text-center\">Profil</h1>
                    <div class=\"separator\"></div>
                    <p class=\"text-center\"></p>
                    <p class=\"text-center\"></p>
                    <div class=\"row\">
                        <div class=\"col-sm-4\">
                            ";
        // line 30
        echo "                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"icon-box\">
                                      
                                    <table class=\"table table-hover\">
                                        <TR> 
                                            <TH> Nom </TH> 
                                            <TD> ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " </TD>
                                        </TR>
                                        <TR>
                                            <TH> Prenom </TH>
                                            <TD> ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
        echo " </TD>
                                        </TR>
                                        <TR>
                                            <TH> Username </TH>
                                            <TD> ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " </TD>
                                        </TR>
                                        <TR>
                                            <TH> Matiere </TH>
                                            <TD> ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "Matiere", array()), "nom", array()), "html", null, true);
        echo " </TD>
                                        </TR>

                                    </table>

                                
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            ";
        // line 63
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
        return "ISETKBundle:Chef:Profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 63,  86 => 49,  79 => 45,  72 => 41,  65 => 37,  56 => 30,  42 => 13,  39 => 12,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "ISETKBundle:Template:Template.html.twig" %}*/
/* */
/* {% block titre %}*/
/* */
/*     <title>Liste Etudiant</title>*/
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
/*                     <h1 class="text-center">Profil</h1>*/
/*                     <div class="separator"></div>*/
/*                     <p class="text-center"></p>*/
/*                     <p class="text-center"></p>*/
/*                     <div class="row">*/
/*                         <div class="col-sm-4">*/
/*                             {#<div class="icon-box">*/
/*                                 <i class="fa fa-cloud-upload object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="0"></i>*/
/*                                 <h2>Upload Enseignant</h2>*/
/*                                 <p>Version actuelle : Emploi du temps pour la 1er semestre 2016.</p>*/
/*                             </div>#}*/
/*                         </div>*/
/*                         <div class="col-sm-4">*/
/*                             <div class="icon-box">*/
/*                                       */
/*                                     <table class="table table-hover">*/
/*                                         <TR> */
/*                                             <TH> Nom </TH> */
/*                                             <TD> {{ app.user.nom }} </TD>*/
/*                                         </TR>*/
/*                                         <TR>*/
/*                                             <TH> Prenom </TH>*/
/*                                             <TD> {{ app.user.prenom }} </TD>*/
/*                                         </TR>*/
/*                                         <TR>*/
/*                                             <TH> Username </TH>*/
/*                                             <TD> {{ app.user.username }} </TD>*/
/*                                         </TR>*/
/*                                         <TR>*/
/*                                             <TH> Matiere </TH>*/
/*                                             <TD> {{ app.user.Matiere.nom }} </TD>*/
/*                                         </TR>*/
/* */
/*                                     </table>*/
/* */
/*                                 */
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-sm-4">*/
/*                             {# <div class="icon-box">*/
/*                                  <i class="fa fa-cloud-upload object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="400"></i>*/
/*                                  <h2>Upload Etudiant</h2>*/
/*                                  <p>Version actuelle : Emploi du temps pour la 1er semestre 2016.</p>*/
/*                              </div>#}*/
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
/* */
