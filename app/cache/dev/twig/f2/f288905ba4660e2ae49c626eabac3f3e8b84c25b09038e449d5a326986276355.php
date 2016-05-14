<?php

/* ISETKBundle:Etudiant:Resultat.html.twig */
class __TwigTemplate_ed69a9b01308a6ed64607241502dc580929b6a9c222349a225503e497ac29db7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ISETKBundle:Template:Template.html.twig", "ISETKBundle:Etudiant:Resultat.html.twig", 1);
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
    <title>Resultat</title>

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
                    <h1 class=\"text-center\">Resultat</h1>
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
                        ";
        // line 32
        echo "                            <div class=\"icon-box\">
                                <table class=\"table table-hover\">
                                    <TR> 
                                        <TH> NOM MODULES </TH> 
                                        <TH> NOM ENSEIGNANT </TH> 
                                        <TH> COEF </TH> 
                                        <TH> NOTE TP </TH>
                                        <TH> NOTE DS </TH>
                                        <TH> NOTE EXAM </TH>
                                    </TR> 
                                    
                                    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notes"]) ? $context["notes"] : $this->getContext($context, "notes")));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 44
            echo "                                    <TR> 
                                        <TD> ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["n"], "Eseignant", array()), "Matiere", array()), "nom", array()), "html", null, true);
            echo " </TD> 
                                        <TD> ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["n"], "Eseignant", array()), "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["n"], "Eseignant", array()), "nom", array()), "html", null, true);
            echo " </TD> 
                                        <TD> 5 </TD> 
                                        <TD> ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "TP", array()), "html", null, true);
            echo " </TD> 
                                        <TD> ";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "DS", array()), "html", null, true);
            echo " </TD> 
                                        <TD> ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "Exam", array()), "html", null, true);
            echo " </TD> 
                                    </TR> 
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                                    
                                </table>
                            </div>
";
        // line 57
        echo "                        ";
        // line 64
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>




";
    }

    public function getTemplateName()
    {
        return "ISETKBundle:Etudiant:Resultat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 64,  120 => 57,  115 => 53,  106 => 50,  102 => 49,  98 => 48,  91 => 46,  87 => 45,  84 => 44,  80 => 43,  67 => 32,  58 => 22,  52 => 21,  42 => 13,  39 => 12,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "ISETKBundle:Template:Template.html.twig" %}*/
/* */
/* {% block titre %}*/
/* */
/*     <title>Resultat</title>*/
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
/*                     <h1 class="text-center">Resultat</h1>*/
/*                     <div class="separator"></div>*/
/*                     <p class="text-center">{{ user.prenom }} {{ user.nom }}</p>*/
/*                     <p class="text-center">{{ user.Classe.niveau }} {{ user.Classe.filiere }}  {{ user.Classe.classes }}</p>*/
/*                     <div class="row">*/
/*                         {#<div class="col-sm-4">*/
/*                             <div class="icon-box">*/
/*                                 <i class="fa fa-cloud-upload object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="0"></i>*/
/*                                 <h2>Upload Enseignant</h2>*/
/*                                 <p>Version actuelle : Emploi du temps pour la 1er semestre 2016.</p>*/
/*                             </div>*/
/*                         </div>#}*/
/* {#                        <div class="col-sm-4">#}*/
/*                             <div class="icon-box">*/
/*                                 <table class="table table-hover">*/
/*                                     <TR> */
/*                                         <TH> NOM MODULES </TH> */
/*                                         <TH> NOM ENSEIGNANT </TH> */
/*                                         <TH> COEF </TH> */
/*                                         <TH> NOTE TP </TH>*/
/*                                         <TH> NOTE DS </TH>*/
/*                                         <TH> NOTE EXAM </TH>*/
/*                                     </TR> */
/*                                     */
/*                                     {% for n in notes %}*/
/*                                     <TR> */
/*                                         <TD> {{ n.Eseignant.Matiere.nom }} </TD> */
/*                                         <TD> {{ n.Eseignant.prenom }} {{ n.Eseignant.nom }} </TD> */
/*                                         <TD> 5 </TD> */
/*                                         <TD> {{ n.TP }} </TD> */
/*                                         <TD> {{ n.DS }} </TD> */
/*                                         <TD> {{ n.Exam }} </TD> */
/*                                     </TR> */
/*                                     {% endfor %}*/
/*                                     */
/*                                 </table>*/
/*                             </div>*/
/* {#                        </div>#}*/
/*                         {#<div class="col-sm-4">*/
/*                             <div class="icon-box">*/
/*                                 <i class="fa fa-cloud-upload object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="400"></i>*/
/*                                 <h2>Upload Etudiant</h2>*/
/*                                 <p>Version actuelle : Emploi du temps pour la 1er semestre 2016.</p>*/
/*                             </div>*/
/*                         </div>#}*/
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
