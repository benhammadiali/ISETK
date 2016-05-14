<?php

/* ISETKBundle:Chef:Compte.html.twig */
class __TwigTemplate_b897b3be062d7aa8cd83bb78710c80fdece198e7748349d62f330e03e3f4a876 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ISETKBundle:Template:Template.html.twig", "ISETKBundle:Chef:Compte.html.twig", 1);
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
    <title>Compte</title>

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
                    <h1 class=\"text-center\">Gestion des comptes</h1>
                    <div class=\"separator\"></div>
                    <p class=\"text-center\"></p>
                    <div class=\"row\">
                        <div class=\"col-sm-4\">
                            <div class=\"icon-box\">
                                <i class=\"fa fa-user object-non-visible\" data-animation-effect=\"fadeInUpSmall\" data-effect-delay=\"0\"></i>
                                <h2>Liste Enseignant</h2>
                                <p></p>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"icon-box\">
";
        // line 33
        echo "                                <a href=\"#\" ><i class=\"fa fa-user-plus object-non-visible\" data-animation-effect=\"fadeInUpSmall\" data-effect-delay=\"200\"></i></a>
                                <h2>Ajouter un compte</h2>
                                <p></p>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"icon-box\">
                                <i class=\"fa fa-users object-non-visible\" data-animation-effect=\"fadeInUpSmall\" data-effect-delay=\"400\"></i>
                                <h2>Liste Etudiant</h2>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




";
    }

    public function getTemplateName()
    {
        return "ISETKBundle:Chef:Compte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 33,  42 => 13,  39 => 12,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "ISETKBundle:Template:Template.html.twig" %}*/
/* */
/* {% block titre %}*/
/* */
/*     <title>Compte</title>*/
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
/*                     <h1 class="text-center">Gestion des comptes</h1>*/
/*                     <div class="separator"></div>*/
/*                     <p class="text-center"></p>*/
/*                     <div class="row">*/
/*                         <div class="col-sm-4">*/
/*                             <div class="icon-box">*/
/*                                 <i class="fa fa-user object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="0"></i>*/
/*                                 <h2>Liste Enseignant</h2>*/
/*                                 <p></p>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-sm-4">*/
/*                             <div class="icon-box">*/
/* {#                                {{ path('fos_user_register') }}#}*/
/*                                 <a href="#" ><i class="fa fa-user-plus object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200"></i></a>*/
/*                                 <h2>Ajouter un compte</h2>*/
/*                                 <p></p>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-sm-4">*/
/*                             <div class="icon-box">*/
/*                                 <i class="fa fa-users object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="400"></i>*/
/*                                 <h2>Liste Etudiant</h2>*/
/*                                 <p></p>*/
/*                             </div>*/
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
