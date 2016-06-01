<?php

/* UserBundle:Registration:register_content.html.twig */
class __TwigTemplate_848ad25650c06ee244fc5f671d2a23599447e041c62799d31bef8cabc86b7487 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ISETKBundle:Template:Template.html.twig", "UserBundle:Registration:register_content.html.twig", 1);
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

    // line 2
    public function block_titre($context, array $blocks = array())
    {
        // line 3
        echo "
    <title>Enregistrement</title>

";
    }

    // line 11
    public function block_main($context, array $blocks = array())
    {
        // line 12
        echo "
    <div class=\"section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h1 class=\"text-center\">Enregistrement</h1>
                    <div class=\"separator\"></div>
                    <p class=\"text-center\"></p>
                    <p class=\"text-center\"></p>
                    <div class=\"row\">



                        <div class=\"col-sm-4\">

                        </div>
                        <div class=\"col-sm-4\">
                            ";
        // line 35
        echo "

                            ";
        // line 38
        echo "
                            ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "

                            <table>
                                <tr>
                                    <td>En tant que :</td>
                                    <td>";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles", array()), 'widget');
        echo "</td>
                                </tr>
                                <tr>
                                    <td>Nom :</td>
                                    <td>";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "</td>
                                </tr>
                                <tr>
                                    <td>Prenom :</td>
                                    <td>";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget');
        echo "</td>
                                </tr>
                                <tr>
                                    <td>E-mail :</td>
                                    <td>";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "</td>
                                </tr>
                                <td>Username :</td>
                                <td>";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "</td>
                                </tr>
                                <tr>
                                    <td>Mot de passe :</td>
                                    <td>";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget');
        echo "</td>
                                </tr>
                                <tr>
                                    <td>Vérification :</td>
                                    <td>";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget');
        echo "</td>
                                </tr>

                            </table><br>

                            <div class=\"send-button\">
                                <input type=\"submit\" value=\"S'inscrire\" onclick=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\"/>
                            </div>
                            ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                            ";
        // line 76
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                        </div>
                        <div class=\"col-sm-4\">

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
        return "UserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 76,  131 => 75,  126 => 73,  117 => 67,  110 => 63,  103 => 59,  97 => 56,  90 => 52,  83 => 48,  76 => 44,  68 => 39,  65 => 38,  61 => 35,  42 => 12,  39 => 11,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "ISETKBundle:Template:Template.html.twig" %}*/
/* {% block titre %}*/
/* */
/*     <title>Enregistrement</title>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* {% block main %}*/
/* */
/*     <div class="section">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <h1 class="text-center">Enregistrement</h1>*/
/*                     <div class="separator"></div>*/
/*                     <p class="text-center"></p>*/
/*                     <p class="text-center"></p>*/
/*                     <div class="row">*/
/* */
/* */
/* */
/*                         <div class="col-sm-4">*/
/* */
/*                         </div>*/
/*                         <div class="col-sm-4">*/
/*                             {# <form action="{{ path('fos_user_registration_register') }}" {{ form_enctype(form) }} method="POST" class="fos_user_registration_register">*/
/*                                  {{ form_widget(form) }}*/
/*                                  <div>*/
/*                                      <input type="submit" value="{{ 'registration.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*                                  </div>*/
/*                              </form>#}*/
/* */
/* */
/*                             {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/*                             {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/* */
/*                             <table>*/
/*                                 <tr>*/
/*                                     <td>En tant que :</td>*/
/*                                     <td>{{ form_widget(form.roles) }}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <td>Nom :</td>*/
/*                                     <td>{{ form_widget(form.nom) }}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <td>Prenom :</td>*/
/*                                     <td>{{ form_widget(form.prenom) }}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <td>E-mail :</td>*/
/*                                     <td>{{ form_widget(form.email) }}</td>*/
/*                                 </tr>*/
/*                                 <td>Username :</td>*/
/*                                 <td>{{ form_widget(form.username) }}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <td>Mot de passe :</td>*/
/*                                     <td>{{ form_widget(form.plainPassword.first) }}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <td>Vérification :</td>*/
/*                                     <td>{{ form_widget(form.plainPassword.second) }}</td>*/
/*                                 </tr>*/
/* */
/*                             </table><br>*/
/* */
/*                             <div class="send-button">*/
/*                                 <input type="submit" value="S'inscrire" onclick="{{ path ("fos_user_profile_show") }}"/>*/
/*                             </div>*/
/*                             {{form_rest(form)}}*/
/*                             {{form_end(form) }}*/
/*                         </div>*/
/*                         <div class="col-sm-4">*/
/* */
/*                         </div>*/
/* */
/* */
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {#<!DOCTYPE HTML>*/
/* <html>*/
/*     <head>*/
/*         <script language="Javascript">*/
/*             function bascule(elem)*/
/*             {*/
/* // Quel est l'état actuel ? */
/*                 etat = document.getElementById(elem).style.visibility;*/
/*                 if (etat == "hidden") {*/
/*                     document.getElementById(elem).style.visibility = "visible";*/
/*                 }*/
/*                 else {*/
/*                     document.getElementById(elem).style.visibility = "hidden";*/
/*                 }*/
/*             }*/
/*         </script>*/
/*         <title>Signer Register Form Flat Responsive Widget Template | Home :: w3layouts</title>*/
/*         <!-- Custom Theme files -->*/
/*         <link href="{{asset('css/inscri.css')}}" rel="stylesheet" type="text/css" media="all"/>*/
/*         <!-- Custom Theme files -->*/
/*         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">*/
/*         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> */
/*         <meta name="keywords" content="Signer Register Form Responsive,Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />*/
/*         <!--Google Fonts-->*/
/*         <link href="{{asset('//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800')}}" rel='stylesheet' type='text/css'>*/
/*         <!--Google Fonts-->*/
/*     </head>*/
/*     <body>*/
/*         <!--sign up form start here-->*/
/* */
/*         <div class="singup">*/
/*             <h3>Inscription</h3>*/
/*             <div class="signup-main">*/
/*                 {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/*                 {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/* */
/*                 <table>*/
/*                     */
/*                     <tr>*/
/*                         <td>En tant que :</td>*/
/*                         <td><div>{{ form_widget(form.roles) }}</div></td>*/
/*                     </tr>*/
/* */
/*                 </table><br>*/
/*                 <input type="button" onClick="bascule('boite');" value="Ok"> */
/* */
/*                 <div class="send-button">*/
/*                     <input type="submit" value="S'inscrire" onclick="{{ path ("fos_user_profile_show") }}"/>*/
/*                 </div>*/
/*                 <p>Already have an account?  <a href="/sweet4u/Sweet4U_Symfony/web/app_dev.php/login">Login Here</a></p>*/
/*                 {{form_end(form) }}*/
/*             </div>*/
/*         </div>	*/
/*         <div class="copyright">*/
/*             <p>&copy; 2015 Sweet4u </a></p>*/
/*         </div>*/
/*         <!--sign up form end here-->*/
/*     </body>*/
/* </html>#}*/
