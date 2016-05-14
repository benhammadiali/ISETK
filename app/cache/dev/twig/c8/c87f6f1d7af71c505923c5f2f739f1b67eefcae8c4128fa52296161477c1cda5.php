<?php

/* ISETKBundle:Etudiant:Absence.html.twig */
class __TwigTemplate_ac289cf486196586e1580b5e895795faacdceaa20c62af1800da34ee8802853f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ISETKBundle:Template:Template.html.twig", "ISETKBundle:Etudiant:Absence.html.twig", 1);
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
    <title>Absence</title>

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
                    <h1 class=\"text-center\">Absence</h1>
                    <div class=\"separator\"></div>
                    <p class=\"text-center\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()), "html", null, true);
        echo "</p>
                    <p class=\"text-center\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "Classe", array()), "niveau", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "Classe", array()), "filiere", array()), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "Classe", array()), "classes", array()), "html", null, true);
        echo "</p>
                    <div class=\"row\">
                        <div class=\"col-sm-4\">
                            ";
        // line 30
        echo "                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"icon-box\">
                                <table class=\"table table-hover\">
                                    <TR> 
                                        <TH> NOM MODULES </TH> 
                                        <TH> NOM ENSEIGNANT </TH> 
                                        <TH> Date </TH> 

                                    </TR> 
                                    
                                    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["absences"]) ? $context["absences"] : $this->getContext($context, "absences")));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 42
            echo "                                    <TR> 
                                        <TD> ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["a"], "Enseignant", array()), "Matiere", array()), "nom", array()), "html", null, true);
            echo " </TD> 
                                        <TD> ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["a"], "Enseignant", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["a"], "Enseignant", array()), "prenom", array()), "html", null, true);
            echo " </TD> 
                                        <TD> ";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["a"], "date", array()), "m/d/Y"), "html", null, true);
            echo " </TD> 
                                    </TR> 
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                                    
                                </table>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                           ";
        // line 58
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
        return "ISETKBundle:Etudiant:Absence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 58,  107 => 48,  98 => 45,  92 => 44,  88 => 43,  85 => 42,  81 => 41,  68 => 30,  58 => 22,  52 => 21,  42 => 13,  39 => 12,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "ISETKBundle:Template:Template.html.twig" %}*/
/* */
/* {% block titre %}*/
/* */
/*     <title>Absence</title>*/
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
/*                     <h1 class="text-center">Absence</h1>*/
/*                     <div class="separator"></div>*/
/*                     <p class="text-center">{{ user.prenom }} {{ user.nom }}</p>*/
/*                     <p class="text-center">{{ user.Classe.niveau }} {{ user.Classe.filiere }}  {{ user.Classe.classes }}</p>*/
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
/*                                 <table class="table table-hover">*/
/*                                     <TR> */
/*                                         <TH> NOM MODULES </TH> */
/*                                         <TH> NOM ENSEIGNANT </TH> */
/*                                         <TH> Date </TH> */
/* */
/*                                     </TR> */
/*                                     */
/*                                     {% for a in absences %}*/
/*                                     <TR> */
/*                                         <TD> {{ a.Enseignant.Matiere.nom }} </TD> */
/*                                         <TD> {{ a.Enseignant.nom }} {{ a.Enseignant.prenom }} </TD> */
/*                                         <TD> {{ a.date|date("m/d/Y") }} </TD> */
/*                                     </TR> */
/*                                     {% endfor %}*/
/*                                     */
/*                                 </table>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-sm-4">*/
/*                            {# <div class="icon-box">*/
/*                                 <i class="fa fa-cloud-upload object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="400"></i>*/
/*                                 <h2>Upload Etudiant</h2>*/
/*                                 <p>Version actuelle : Emploi du temps pour la 1er semestre 2016.</p>*/
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
/* */
