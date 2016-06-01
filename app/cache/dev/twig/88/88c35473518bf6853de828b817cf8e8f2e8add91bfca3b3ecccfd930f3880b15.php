<?php

/* ISETKBundle:Chef:ListEtudiant.html.twig */
class __TwigTemplate_33bb9955cdedf97330f3d4da9fa55b6128c4976294f674854deaa015bf68dff7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ISETKBundle:Template:Template.html.twig", "ISETKBundle:Chef:ListEtudiant.html.twig", 1);
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
                    <h1 class=\"text-center\">Liste Etudiant</h1>
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
                                            <TH> Prenom </TH> 
                                            <TH> UserName </TH>
                                            <TH> Classe </TH>
                                            <TH> Edite </TH>

                                        </TR> 

                                        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 46
            echo "                                            <TR> 
                                                <TD> ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "nom", array()), "html", null, true);
            echo " </TD> 
                                                <TD> ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "prenom", array()), "html", null, true);
            echo "  </TD>
                                                <TD> ";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "username", array()), "html", null, true);
            echo " </TD>

                                                <TD> ";
            // line 51
            if (($this->getAttribute($context["e"], "Classe", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["e"], "Classe", array()), "niveau", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["e"], "Classe", array()), "filiere", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["e"], "Classe", array()), "classes", array()), "html", null, true);
            } else {
                echo " - ";
            }
            echo " </TD>
                                                <TD>  </TD> 
                                            </TR> 
";
            // line 55
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
                                    </table>

                                
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            ";
        // line 68
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
        return "ISETKBundle:Chef:ListEtudiant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 68,  112 => 56,  106 => 55,  92 => 51,  87 => 49,  83 => 48,  79 => 47,  76 => 46,  72 => 44,  56 => 30,  42 => 13,  39 => 12,  32 => 4,  29 => 3,  11 => 1,);
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
/*                     <h1 class="text-center">Liste Etudiant</h1>*/
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
/*                                             <TH> Prenom </TH> */
/*                                             <TH> UserName </TH>*/
/*                                             <TH> Classe </TH>*/
/*                                             <TH> Edite </TH>*/
/* */
/*                                         </TR> */
/* */
/*                                         {% for e in etudiant %}*/
/* {#                                            <form action="{{ path('isetk_doNoteChef') }}">#}*/
/*                                             <TR> */
/*                                                 <TD> {{ e.nom }} </TD> */
/*                                                 <TD> {{ e.prenom }}  </TD>*/
/*                                                 <TD> {{ e.username }} </TD>*/
/* */
/*                                                 <TD> {% if e.Classe != null %}{{ e.Classe.niveau }} {{ e.Classe.filiere }} {{ e.Classe.classes }}{% else %} - {% endif %} </TD>*/
/*                                                 <TD>  </TD> */
/*                                             </TR> */
/* {#                                            </form>#}*/
/*                                         {% endfor %}*/
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
