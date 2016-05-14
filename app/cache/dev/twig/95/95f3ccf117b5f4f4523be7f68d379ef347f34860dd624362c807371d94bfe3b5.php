<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_a57de1bf48995bc98b3b5038217fbd926176a23db547919242964e04690a53f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <head>
        <meta charset=\"UTF-8\" />
        <title>Material Design Login Form</title>
    
    
    
    
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    </head>
    
    ";
    }

    // line 17
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 18
        echo "
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://fonts.googleapis.com/css?family=Work+Sans:400,300,700"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css'>
    <link rel=\"import\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://www.polymer-project.org/0.5/components/paper-ripple/paper-ripple.html"), "html", null, true);
        echo "\">


    ";
        // line 23
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 24
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
    ";
        }
        // line 26
        echo "
    <div class=\"container\">
        <div class=\"profile\">
            <button class=\"profile__avatar\" id=\"toggleProfile\">
                <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/iset_kasserine.png"), "html", null, true);
        echo "\" alt=\"Avatar\" /> 
            </button>

            <div class=\"profile__form\">
                <div class=\"profile__fields\">



                    <form action=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                        <div class=\"field\">
                            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" class=\"input\" />
                            <label for=\"username\" class=\"label\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                        </div>
                        <div class=\"field\">
                            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"input\"/>
                            <label for=\"password\" class=\"label\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                        </div>
                        ";
        // line 53
        echo "                        <div class=\"profile__footer\">
                            <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Login", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                            ";
        // line 60
        echo "                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
                                
                                <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/index.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 68,  123 => 60,  119 => 54,  116 => 53,  111 => 47,  104 => 43,  100 => 42,  94 => 39,  90 => 38,  79 => 30,  73 => 26,  67 => 24,  65 => 23,  59 => 20,  55 => 19,  52 => 18,  49 => 17,  41 => 11,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>Material Design Login Form</title>*/
/*     */
/*     */
/*     */
/*     */
/*         <link rel="stylesheet" href="{{asset('css/style.css')}}">*/
/*     </head>*/
/*     */
/*     {% endblock %}*/
/* */
/* */
/* {% block fos_user_content %}*/
/* */
/*     <link href="{{asset('https://fonts.googleapis.com/css?family=Work+Sans:400,300,700')}}" rel='stylesheet' type='text/css'>*/
/*     <link rel="import" href="{{asset('https://www.polymer-project.org/0.5/components/paper-ripple/paper-ripple.html')}}">*/
/* */
/* */
/*     {% if error %}*/
/*         <div>{{ error|trans({}, 'FOSUserBundle') }}</div>*/
/*     {% endif %}*/
/* */
/*     <div class="container">*/
/*         <div class="profile">*/
/*             <button class="profile__avatar" id="toggleProfile">*/
/*                 <img src="{{asset('images/iset_kasserine.png')}}" alt="Avatar" /> */
/*             </button>*/
/* */
/*             <div class="profile__form">*/
/*                 <div class="profile__fields">*/
/* */
/* */
/* */
/*                     <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*                         <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*                         <div class="field">*/
/*                             <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" class="input" />*/
/*                             <label for="username" class="label">{{ 'username'|trans({}, 'FOSUserBundle') }}</label>*/
/*                         </div>*/
/*                         <div class="field">*/
/*                             <input type="password" id="password" name="_password" required="required" class="input"/>*/
/*                             <label for="password" class="label">{{ 'password'|trans({}, 'FOSUserBundle') }}</label>*/
/*                         </div>*/
/*                         {#<div class="field">*/
/*                             <input type="checkbox" id="remember_me" name="_remember_me" value="on" class="input"/>*/
/*                             <label for="remember_me" class="label">{{ 'Remember me'|trans({}, 'FOSUserBundle') }}</label>*/
/*                         </div>#}*/
/*                         <div class="profile__footer">*/
/*                             <input type="submit" id="_submit" name="_submit" value="{{ 'Login'|trans({}, 'FOSUserBundle') }}" />*/
/*                             {#<div class="button raised blue">*/
/*                                 */
/*                                 <div class="center" fit></div>*/
/*                                 <paper-ripple fit></paper-ripple>*/
/*                             </div>#}*/
/*                         </div>*/
/* */
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*                                 */
/*                                 <script src="{{asset('js/index.js')}}"></script>*/
/* {% endblock fos_user_content %}*/
/* */
