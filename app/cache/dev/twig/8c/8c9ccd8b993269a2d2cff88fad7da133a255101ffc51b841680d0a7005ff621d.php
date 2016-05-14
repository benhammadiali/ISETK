<?php

/* ISETKBundle:Chef:Absence.html.twig */
class __TwigTemplate_2bdc058e8ecc83981ccdf0472c78efd5d75afe83e38765b8e69f1aec81fc82dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ISETKBundle:Template:Template.html.twig", "ISETKBundle:Chef:Absence.html.twig", 1);
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
                    <p class=\"text-center\"></p>
                    <div class=\"row\">
                        <div class=\"col-sm-4\">
                            ";
        // line 30
        echo "                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"icon-box\">
                                <form action=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("isetk_AbsenceChef");
        echo "\">
                                    <select id=\"cla\" name=\"cla\">
                                        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 36
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "niveau", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "filiere", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "classes", array()), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                                    </select>
                                    <input type=\"submit\" value=\"Submit\">
                                </form>


                                </br></br>

                                ";
        // line 45
        if (((isset($context["etudiants"]) ? $context["etudiants"] : $this->getContext($context, "etudiants")) != null)) {
            // line 46
            echo "                                    
                                    <table class=\"table table-hover\">
                                        <TR> 
                                            <TH> Prenom </TH> 
                                            <TH> Nom </TH> 
                                            <TH> Action </TH> 

                                        </TR> 

                                        ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["etudiants"]) ? $context["etudiants"] : $this->getContext($context, "etudiants")));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 56
                echo "                                            <form action=\"";
                echo $this->env->getExtension('routing')->getPath("isetk_doAbsenceChef");
                echo "\">
                                            <TR> 
                                                <TD> ";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "prenom", array()), "html", null, true);
                echo " </TD> 
                                                <TD> ";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "nom", array()), "html", null, true);
                echo " </TD> 
                                                <TD> 
                                                    <input type=\"text\" id=\"cl\" name=\"cl\" value=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", array()), "html", null, true);
                echo "\" style=\"width: 0px;\">    
                                                    <input type=\"submit\" value=\"Absence\">
                                                    
                                                </TD> 
                                            </TR> 
                                            </form>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "
                                    </table>

                                ";
        }
        // line 72
        echo "                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            ";
        // line 80
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
        return "ISETKBundle:Chef:Absence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 80,  150 => 72,  144 => 68,  131 => 61,  126 => 59,  122 => 58,  116 => 56,  112 => 55,  101 => 46,  99 => 45,  90 => 38,  75 => 36,  71 => 35,  66 => 33,  61 => 30,  52 => 21,  42 => 13,  39 => 12,  32 => 4,  29 => 3,  11 => 1,);
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
/*                                 <form action="{{ path('isetk_AbsenceChef') }}">*/
/*                                     <select id="cla" name="cla">*/
/*                                         {% for c in classes %}*/
/*                                             <option value="{{ c.id }}">{{ c.niveau }} {{ c.filiere }} {{ c.classes }}</option>*/
/*                                         {% endfor %}*/
/*                                     </select>*/
/*                                     <input type="submit" value="Submit">*/
/*                                 </form>*/
/* */
/* */
/*                                 </br></br>*/
/* */
/*                                 {% if etudiants != null %}*/
/*                                     */
/*                                     <table class="table table-hover">*/
/*                                         <TR> */
/*                                             <TH> Prenom </TH> */
/*                                             <TH> Nom </TH> */
/*                                             <TH> Action </TH> */
/* */
/*                                         </TR> */
/* */
/*                                         {% for e in etudiants %}*/
/*                                             <form action="{{ path('isetk_doAbsenceChef') }}">*/
/*                                             <TR> */
/*                                                 <TD> {{ e.prenom }} </TD> */
/*                                                 <TD> {{ e.nom }} </TD> */
/*                                                 <TD> */
/*                                                     <input type="text" id="cl" name="cl" value="{{ e.id }}" style="width: 0px;">    */
/*                                                     <input type="submit" value="Absence">*/
/*                                                     */
/*                                                 </TD> */
/*                                             </TR> */
/*                                             </form>*/
/*                                         {% endfor %}*/
/* */
/*                                     </table>*/
/* */
/*                                 {% endif %}*/
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
