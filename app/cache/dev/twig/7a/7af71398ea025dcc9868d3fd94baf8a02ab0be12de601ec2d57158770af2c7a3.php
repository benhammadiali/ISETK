<?php

/* ISETKBundle:Template:Menu.html.twig */
class __TwigTemplate_2b6c5edc9ba64b49972717ead6ef6e69ed6146e7ab3eb369e9683a16ed4894f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"main-navigation fixed\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">

                <!-- navbar start -->
                <nav class=\"navbar navbar-default\" role=\"navigation\">

                    <!-- Toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse-1\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                    </div>    
                        
                    <div class=\"collapse navbar-collapse\" id=\"navbar-collapse-1\">
                        
                        
                    ";
        // line 22
        if ($this->env->getExtension('security')->isGranted("ROLE_CHEF")) {
            echo "    
                        
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    
                        <ul class=\"nav navbar-nav navbar-main-menu\">
                            <li class=\"dropdown\">
                                <a href=\"index-2.html\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Accueil</a>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("isetk_profilChef");
            echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Profil</a>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"";
            // line 34
            echo $this->env->getExtension('routing')->getPath("isetk_EmploiChef");
            echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Emploi du temps</a>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"";
            // line 37
            echo $this->env->getExtension('routing')->getPath("isetk_AbsenceChef");
            echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Absences</a>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"";
            // line 40
            echo $this->env->getExtension('routing')->getPath("isetk_NoteChef");
            echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Resultat Exam</a>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"https://isetk.moodlecloud.com\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Cours</a>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"";
            // line 46
            echo $this->env->getExtension('routing')->getPath("isetk_CompteChef");
            echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Compte</a>
                            </li>
                        </ul>
                        
                    ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_ENSEIGNANT")) {
            // line 51
            echo "                           
                        
                        <ul class=\"nav navbar-nav navbar-main-menu\">
                            <li class=\"dropdown\">
                                <a href=\"";
            // line 55
            echo $this->env->getExtension('routing')->getPath("isetk_homeEnseignant");
            echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Accueil</a>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"";
            // line 58
            echo $this->env->getExtension('routing')->getPath("isetk_profilEnseignant");
            echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Profil</a>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"";
            // line 61
            echo $this->env->getExtension('routing')->getPath("isetk_EmploiEnseignant");
            echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Emploi du temps</a>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"";
            // line 64
            echo $this->env->getExtension('routing')->getPath("isetk_AbsenceEnseignant");
            echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Absence Etudiants</a>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"";
            // line 67
            echo $this->env->getExtension('routing')->getPath("isetk_NoteEnseignant");
            echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Resultat Exam</a>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"https://isetk.moodlecloud.com\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Cours</a>
                            </li>
                        </ul>
                        
                        
                    ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_ETUDIANT")) {
            // line 76
            echo "
                        
                        <ul class=\"nav navbar-nav navbar-main-menu\">
                            <li class=\"dropdown\">
                                <a href=\"";
            // line 80
            echo $this->env->getExtension('routing')->getPath("isetk_homeEtudiant");
            echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Accueil</a>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"";
            // line 83
            echo $this->env->getExtension('routing')->getPath("isetk_EmploiEtudiant");
            echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Emploi du temps</a>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"";
            // line 86
            echo $this->env->getExtension('routing')->getPath("isetk_AbsenceEtudiant");
            echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Absence</a>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"";
            // line 89
            echo $this->env->getExtension('routing')->getPath("isetk_ResultatEtudiant");
            echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Resultat</a>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"https://isetk.moodlecloud.com\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Cours</a>
                            </li>
                        </ul>    
                            
                            
                        ";
        }
        // line 98
        echo "                        
                        
                        <ul class=\"nav navbar-nav navbar-right navbar-symbols\">
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-search\"></i></a>
                                <ul class=\"dropdown-menu animated fadeInDownSmall\">
                                    <li>
                                        <form role=\"search\">
                                            <div class=\"form-group search\">
                                                <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                                <div class=\"vertical-div hidden-xs\"></div>
                            </li>
                            <li class=\"dropdown\">
                                
                                ";
        // line 116
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 117
            echo "                                    Hello ,";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            // line 118
            echo "                                    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" ><i class=\"fa fa-lock\"></i></a>
                                    
                                ";
        } else {
            // line 121
            echo "                                    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\" ><i class=\"fa fa-lock\"></i></a>
                                ";
        }
        // line 123
        echo "                                    
                                ";
        // line 147
        echo "                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- navbar end -->

            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "ISETKBundle:Template:Menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 147,  205 => 123,  199 => 121,  192 => 118,  189 => 117,  187 => 116,  167 => 98,  155 => 89,  149 => 86,  143 => 83,  137 => 80,  131 => 76,  119 => 67,  113 => 64,  107 => 61,  101 => 58,  95 => 55,  89 => 51,  81 => 46,  72 => 40,  66 => 37,  60 => 34,  54 => 31,  42 => 22,  19 => 1,);
    }
}
/* <div class="main-navigation fixed">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/* */
/*                 <!-- navbar start -->*/
/*                 <nav class="navbar navbar-default" role="navigation">*/
/* */
/*                     <!-- Toggle get grouped for better mobile display -->*/
/*                     <div class="navbar-header">*/
/*                         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">*/
/*                             <span class="sr-only">Toggle navigation</span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                         </button>*/
/*                     </div>    */
/*                         */
/*                     <div class="collapse navbar-collapse" id="navbar-collapse-1">*/
/*                         */
/*                         */
/*                     {% if is_granted('ROLE_CHEF') %}    */
/*                         */
/*                     <!-- Collect the nav links, forms, and other content for toggling -->*/
/*                     */
/*                         <ul class="nav navbar-nav navbar-main-menu">*/
/*                             <li class="dropdown">*/
/*                                 <a href="index-2.html" class="dropdown-toggle" data-toggle="dropdown">Accueil</a>*/
/*                             </li>*/
/*                             <li class="dropdown">*/
/*                                 <a href="{{ path('isetk_profilChef') }}" class="dropdown-toggle" data-toggle="dropdown">Profil</a>*/
/*                             </li>*/
/*                             <li class="dropdown">*/
/*                                 <a href="{{ path('isetk_EmploiChef') }}" class="dropdown-toggle" data-toggle="dropdown">Emploi du temps</a>*/
/*                             </li>*/
/*                             <li class="dropdown">*/
/*                                 <a href="{{ path('isetk_AbsenceChef') }}" class="dropdown-toggle" data-toggle="dropdown">Absences</a>*/
/*                             </li>*/
/*                             <li class="dropdown">*/
/*                                 <a href="{{ path('isetk_NoteChef') }}" class="dropdown-toggle" data-toggle="dropdown">Resultat Exam</a>*/
/*                             </li>*/
/*                             <li class="dropdown">*/
/*                                 <a href="https://isetk.moodlecloud.com" class="dropdown-toggle" data-toggle="dropdown">Cours</a>*/
/*                             </li>*/
/*                             <li class="dropdown">*/
/*                                 <a href="{{ path('isetk_CompteChef') }}" class="dropdown-toggle" data-toggle="dropdown">Compte</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                         */
/*                     {% elseif is_granted('ROLE_ENSEIGNANT') %}*/
/*                            */
/*                         */
/*                         <ul class="nav navbar-nav navbar-main-menu">*/
/*                             <li class="dropdown">*/
/*                                 <a href="{{ path('isetk_homeEnseignant') }}" class="dropdown-toggle" data-toggle="dropdown">Accueil</a>*/
/*                             </li>*/
/*                             <li class="dropdown">*/
/*                                 <a href="{{ path('isetk_profilEnseignant') }}" class="dropdown-toggle" data-toggle="dropdown">Profil</a>*/
/*                             </li>*/
/*                             <li class="dropdown">*/
/*                                 <a href="{{ path('isetk_EmploiEnseignant') }}" class="dropdown-toggle" data-toggle="dropdown">Emploi du temps</a>*/
/*                             </li>*/
/*                             <li class="dropdown">*/
/*                                 <a href="{{ path('isetk_AbsenceEnseignant') }}" class="dropdown-toggle" data-toggle="dropdown">Absence Etudiants</a>*/
/*                             </li>*/
/*                             <li class="dropdown">*/
/*                                 <a href="{{ path('isetk_NoteEnseignant') }}" class="dropdown-toggle" data-toggle="dropdown">Resultat Exam</a>*/
/*                             </li>*/
/*                             <li class="dropdown">*/
/*                                 <a href="https://isetk.moodlecloud.com" class="dropdown-toggle" data-toggle="dropdown">Cours</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                         */
/*                         */
/*                     {% elseif is_granted('ROLE_ETUDIANT') %}*/
/* */
/*                         */
/*                         <ul class="nav navbar-nav navbar-main-menu">*/
/*                             <li class="dropdown">*/
/*                                 <a href="{{ path('isetk_homeEtudiant') }}" class="dropdown-toggle" data-toggle="dropdown">Accueil</a>*/
/*                             </li>*/
/*                             <li class="dropdown">*/
/*                                 <a href="{{ path('isetk_EmploiEtudiant') }}" class="dropdown-toggle" data-toggle="dropdown">Emploi du temps</a>*/
/*                             </li>*/
/*                             <li class="dropdown">*/
/*                                 <a href="{{ path('isetk_AbsenceEtudiant') }}" class="dropdown-toggle" data-toggle="dropdown">Absence</a>*/
/*                             </li>*/
/*                             <li class="dropdown">*/
/*                                 <a href="{{ path('isetk_ResultatEtudiant') }}" class="dropdown-toggle" data-toggle="dropdown">Resultat</a>*/
/*                             </li>*/
/*                             <li class="dropdown">*/
/*                                 <a href="https://isetk.moodlecloud.com" class="dropdown-toggle" data-toggle="dropdown">Cours</a>*/
/*                             </li>*/
/*                         </ul>    */
/*                             */
/*                             */
/*                         {% endif %}*/
/*                         */
/*                         */
/*                         <ul class="nav navbar-nav navbar-right navbar-symbols">*/
/*                             <li class="dropdown">*/
/*                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search"></i></a>*/
/*                                 <ul class="dropdown-menu animated fadeInDownSmall">*/
/*                                     <li>*/
/*                                         <form role="search">*/
/*                                             <div class="form-group search">*/
/*                                                 <input type="text" class="form-control" placeholder="Search">*/
/*                                             </div>*/
/*                                         </form>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                                 <div class="vertical-div hidden-xs"></div>*/
/*                             </li>*/
/*                             <li class="dropdown">*/
/*                                 */
/*                                 {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                                     Hello ,{{ app.user.username }}{#{{ 'Hello'|trans({'%username%': app.user.username}, 'FOSUserBundle') }}#}*/
/*                                     <a href="{{ path('fos_user_security_logout') }}" ><i class="fa fa-lock"></i></a>*/
/*                                     */
/*                                 {% else %}*/
/*                                     <a href="{{ path('fos_user_security_login') }}" ><i class="fa fa-lock"></i></a>*/
/*                                 {% endif %}*/
/*                                     */
/*                                 {#<ul class="dropdown-menu animated fadeInDownSmall">*/
/*                                     <li>*/
/*                                         <form class="login-form">*/
/*                                             <div class="form-group name">*/
/*                                                 <input type="text" class="form-control" placeholder="username">*/
/*                                             </div>*/
/*                                             <div class="form-group password">*/
/*                                                 <input type="text" class="form-control" placeholder="password">*/
/*                                             </div>*/
/*                                             <button type="submit" class="btn btn-gray">Log In</button>*/
/*                                             <span>or</span>*/
/*                                             <button type="submit" class="btn btn-gray btn-default">Sing Up</button>*/
/*                                             <ul>*/
/*                                                 <li><a href="#">Forgot your password?</a></li>*/
/*                                             </ul>*/
/*                                             <div class="divider"></div>*/
/*                                             <span class="text-center">Login with</span>*/
/*                                             <a href="#" class="btn btn-symb btn-facebook"> <i class="fa fa-facebook"></i></a>*/
/*                                             <a href="#" class="btn btn-symb btn-twitter"> <i class="fa fa-twitter"></i></a>*/
/*                                             <a href="#" class="btn btn-symb btn-googleplus"> <i class="fa fa-google-plus"></i></a>*/
/*                                         </form>*/
/*                                     </li>*/
/*                                 </ul>#}*/
/*                             </li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </nav>*/
/*                 <!-- navbar end -->*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
