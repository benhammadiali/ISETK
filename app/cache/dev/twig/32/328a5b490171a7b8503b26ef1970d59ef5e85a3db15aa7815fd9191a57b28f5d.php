<?php

/* ISETKBundle:Template:joinroom.html.twig */
class __TwigTemplate_f672736d76551e1c77e7ccadf3699c49aa7c10eb695c98236334ec2907a7b32c extends Twig_Template
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
        echo "<html>
    <head>
        <title>msg|room</title>
        
        <meta property=\"og:url\"           content=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://localhost/my-site/UserAplication/web/app_dev.php/room"), "html", null, true);
        echo "\" />
        <meta property=\"og:type\"          content=\"article\" />
        <meta property=\"og:title\"         content=\"When Great Minds Don’t Think Alike\" />
        <meta property=\"og:description\"   content=\"How much does culture influence creative thinking?\" />
        <meta property=\"og:image\"         content=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://static01.nyt.com/images/2015/02/19/arts/international/19iht-btnumbers19A/19iht-btnumbers19A-facebookJumbo-v2.jpg"), "html", null, true);
        echo "\" />
    </head>
    <body>
        
        <!-- Placez cette balise dans l'en-tête ou juste avant la balise de fermeture du corps de texte. -->
<script src=\"https://apis.google.com/js/platform.js\" async defer>
  {lang: 'fr'}
</script>

<!-- Placez cette balise où vous souhaitez faire apparaître le gadget bouton \"Partager\". -->
<div class=\"g-plus\" data-action=\"share\"></div>

<br>
<a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-via=\"neotaichisama\">Tweet</a>
<script>
    !function(d,s,id){
        var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
        if(!d.getElementById(id)){
            js=d.createElement(s);
            js.id=id;
            js.src=p+'://platform.twitter.com/widgets.js';
            fjs.parentNode.insertBefore(js,fjs);
        }
    }
    (document, 'script', 'twitter-wjs');
</script>
<br>

<div id=\"fb-root\"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = \"//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.6&appId=658212697587492\";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class=\"fb-share-button\" data-href=\"http://localhost/my-site/UserAplication/web/app_dev.php/room\" data-layout=\"button\" data-mobile-iframe=\"true\"></div>
  


<image src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://static01.nyt.com/images/2015/02/19/arts/international/19iht-btnumbers19A/19iht-btnumbers19A-facebookJumbo-v2.jpg"), "html", null, true);
        echo "\">






        <form action=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("isetk_msg", array("id" => 0));
        echo "\">

            <input type=\"submit\" value=\"crée\"></form>
    </form>

    ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["connecter"]) ? $context["connecter"] : $this->getContext($context, "connecter")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 63
            echo "        <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("isetk_msg", array("id" => $this->getAttribute($context["u"], "session", array()))), "html", null, true);
            echo "\">

            <input type=\"submit\" value=\"Join ";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "prenom", array()), "html", null, true);
            echo "\"></form>
    </form>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "ISETKBundle:Template:joinroom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 68,  104 => 65,  98 => 63,  94 => 62,  86 => 57,  76 => 50,  32 => 9,  25 => 5,  19 => 1,);
    }
}
/* <html>*/
/*     <head>*/
/*         <title>msg|room</title>*/
/*         */
/*         <meta property="og:url"           content="{{asset('http://localhost/my-site/UserAplication/web/app_dev.php/room')}}" />*/
/*         <meta property="og:type"          content="article" />*/
/*         <meta property="og:title"         content="When Great Minds Don’t Think Alike" />*/
/*         <meta property="og:description"   content="How much does culture influence creative thinking?" />*/
/*         <meta property="og:image"         content="{{asset('http://static01.nyt.com/images/2015/02/19/arts/international/19iht-btnumbers19A/19iht-btnumbers19A-facebookJumbo-v2.jpg')}}" />*/
/*     </head>*/
/*     <body>*/
/*         */
/*         <!-- Placez cette balise dans l'en-tête ou juste avant la balise de fermeture du corps de texte. -->*/
/* <script src="https://apis.google.com/js/platform.js" async defer>*/
/*   {lang: 'fr'}*/
/* </script>*/
/* */
/* <!-- Placez cette balise où vous souhaitez faire apparaître le gadget bouton "Partager". -->*/
/* <div class="g-plus" data-action="share"></div>*/
/* */
/* <br>*/
/* <a href="https://twitter.com/share" class="twitter-share-button" data-via="neotaichisama">Tweet</a>*/
/* <script>*/
/*     !function(d,s,id){*/
/*         var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';*/
/*         if(!d.getElementById(id)){*/
/*             js=d.createElement(s);*/
/*             js.id=id;*/
/*             js.src=p+'://platform.twitter.com/widgets.js';*/
/*             fjs.parentNode.insertBefore(js,fjs);*/
/*         }*/
/*     }*/
/*     (document, 'script', 'twitter-wjs');*/
/* </script>*/
/* <br>*/
/* */
/* <div id="fb-root"></div>*/
/* <script>(function(d, s, id) {*/
/*   var js, fjs = d.getElementsByTagName(s)[0];*/
/*   if (d.getElementById(id)) return;*/
/*   js = d.createElement(s); js.id = id;*/
/*   js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.6&appId=658212697587492";*/
/*   fjs.parentNode.insertBefore(js, fjs);*/
/* }(document, 'script', 'facebook-jssdk'));</script>*/
/* */
/* <div class="fb-share-button" data-href="http://localhost/my-site/UserAplication/web/app_dev.php/room" data-layout="button" data-mobile-iframe="true"></div>*/
/*   */
/* */
/* */
/* <image src="{{asset('http://static01.nyt.com/images/2015/02/19/arts/international/19iht-btnumbers19A/19iht-btnumbers19A-facebookJumbo-v2.jpg')}}">*/
/* */
/* */
/* */
/* */
/* */
/* */
/*         <form action="{{ path('isetk_msg',{'id':0}) }}">*/
/* */
/*             <input type="submit" value="crée"></form>*/
/*     </form>*/
/* */
/*     {% for u in connecter %}*/
/*         <form action="{{ path('isetk_msg',{'id':u.session}) }}">*/
/* */
/*             <input type="submit" value="Join {{ u.prenom }}"></form>*/
/*     </form>*/
/* {% endfor %}*/
/* </body>*/
/* </html>*/
