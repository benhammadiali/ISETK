<?php

/* ISETKBundle:Template:Template.html.twig */
class __TwigTemplate_3cf392c9f734d2b43fe10577fe6b985bc0cba60a3cf492a62122be04bce8d062 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'menu' => array($this, 'block_menu'),
            'banner' => array($this, 'block_banner'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t
<!-- Mirrored from htmlcoder.me/preview/ivega/v.1.1/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 May 2016 21:35:06 GMT -->
<head>
\t\t<meta charset=\"utf-8\">
                
                ";
        // line 8
        $this->displayBlock('titre', $context, $blocks);
        // line 9
        echo "\t\t<meta name=\"description\" content=\"iVega a Bootstrap-based, Responsive HTML5 Template\">
\t\t<meta name=\"author\" content=\"htmlcoder.html\">

\t\t<!-- Mobile Meta -->
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

\t\t<!-- Web Fonts -->
\t\t<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css'>
\t\t<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css'>
\t\t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=PT+Serif"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css'>

\t\t<!-- Bootstrap core CSS -->
\t\t<link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t\t<!-- Font Awesome CSS -->
\t\t<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("fonts/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t\t<!-- Plugins -->
\t\t<link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/flexslider/flexslider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/animations.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/owl-carousel/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t\t<!-- iVega core CSS file -->
\t\t<link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t\t<!-- Style Switcher Styles (Remove these two lines) -->
\t\t<link href=\"#\" data-style=\"styles\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("style-switcher/style-switcher.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t\t<!-- Custom css --> 
\t\t<link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t</head>

\t<body class=\"front preload\">

\t\t<!-- page wrapper start (Add \"boxed\" class to page-wrapper in order to enable boxed layout mode) -->
\t\t<div class=\"page-wrapper\">
\t\t
\t\t\t<!-- scrollToTop start -->
\t\t\t<div class=\"scrollToTop\"><i class=\"fa fa-angle-up\"></i></div>
\t\t\t<!-- scrollToTop end -->

\t\t\t<!-- preheader start -->
\t\t\t
                            ";
        // line 53
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ISETKBundle:Default:mailHead"));
        echo "
                        
                        <!-- preheader end -->

\t\t\t<!-- header top start -->
\t\t\t
                            ";
        // line 59
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ISETKBundle:Default:head"));
        echo "
                        
                        <!-- header top end -->

\t\t\t<!-- header start -->
\t\t\t<header class=\"header text-center\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t\t\t<a href=\"#\"><img id=\"\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo1.png"), "html", null, true);
        echo "\" alt=\"ISETK\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"site-slogan\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</header>
\t\t\t<!-- header end -->

\t\t\t<!-- main-navigation start (remove fixed class from main-navigation in order to disable fixed navigation mode)-->
\t\t\t";
        // line 81
        $this->displayBlock('menu', $context, $blocks);
        // line 84
        echo "                        <!-- main-navigation end -->

\t\t\t<!-- banner start -->
\t\t\t";
        // line 87
        $this->displayBlock('banner', $context, $blocks);
        // line 90
        echo "                        <!-- banner end -->

\t\t\t<!-- main start -->
                        ";
        // line 93
        $this->displayBlock('main', $context, $blocks);
        // line 96
        echo "\t\t\t<!-- main end -->

\t\t\t<!-- footer start -->
\t\t\t
                            ";
        // line 100
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ISETKBundle:Default:footer"));
        echo "
                        
                        <!-- footer end -->

\t\t</div>
\t\t<!-- page wrapper end -->

\t\t<!-- JavaScript files placed at the end of the document so the pages load faster
\t\t================================================== -->
\t\t<!-- Jquery and Bootstap core js files -->
\t\t<script type=\"text/javascript\" src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- Modernizr javascript -->
\t\t<script type=\"text/javascript\" src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/modernizr.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- Flexslider javascript -->
\t\t<script type=\"text/javascript\" src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/flexslider/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- Owl carousel javascript -->
\t\t<script type=\"text/javascript\" src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/owl-carousel/owl.carousel.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- Magnific Popup javascript -->
\t\t<script type=\"text/javascript\" src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/magnific-popup/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- Appear javascript -->
\t\t<script type=\"text/javascript\" src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jquery.appear.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- Count To javascript -->
\t\t<script type=\"text/javascript\" src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jquery.countTo.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- Flowtype javascript -->
\t\t<script type=\"text/javascript\" src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/flowtype.js"), "html", null, true);
        echo "\"></script>   

\t\t<!-- Parallax javascript -->
\t\t<script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jquery.parallax-1.1.3.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- Contact form -->
\t\t<script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jquery.validate.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- Initialization of Plugins -->
\t\t<script type=\"text/javascript\" src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/template.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- Color Switcher (Remove these lines) -->
\t\t<script type=\"text/javascript\" src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("style-switcher/style-switcher.js"), "html", null, true);
        echo "\"></script>
\t\t";
        // line 170
        echo "\t\t<!-- Color Switcher End -->

\t</body>

<!-- Mirrored from htmlcoder.me/preview/ivega/v.1.1/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 May 2016 21:36:35 GMT -->
</html>
";
    }

    // line 8
    public function block_titre($context, array $blocks = array())
    {
        echo "<title>ISET Kasserine | Home</title>";
    }

    // line 81
    public function block_menu($context, array $blocks = array())
    {
        // line 82
        echo "                            ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ISETKBundle:Default:menu"));
        echo "
                        ";
    }

    // line 87
    public function block_banner($context, array $blocks = array())
    {
        // line 88
        echo "                            
                        ";
    }

    // line 93
    public function block_main($context, array $blocks = array())
    {
        // line 94
        echo "                            ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ISETKBundle:Default:main"));
        echo "
                        ";
    }

    public function getTemplateName()
    {
        return "ISETKBundle:Template:Template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 94,  293 => 93,  288 => 88,  285 => 87,  278 => 82,  275 => 81,  269 => 8,  259 => 170,  255 => 144,  249 => 141,  243 => 138,  237 => 135,  231 => 132,  225 => 129,  219 => 126,  213 => 123,  207 => 120,  201 => 117,  195 => 114,  189 => 111,  185 => 110,  172 => 100,  166 => 96,  164 => 93,  159 => 90,  157 => 87,  152 => 84,  150 => 81,  135 => 69,  122 => 59,  113 => 53,  96 => 39,  90 => 36,  83 => 32,  77 => 29,  73 => 28,  69 => 27,  63 => 24,  57 => 21,  51 => 18,  47 => 17,  43 => 16,  34 => 9,  32 => 8,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* 	*/
/* <!-- Mirrored from htmlcoder.me/preview/ivega/v.1.1/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 May 2016 21:35:06 GMT -->*/
/* <head>*/
/* 		<meta charset="utf-8">*/
/*                 */
/*                 {% block titre %}<title>ISET Kasserine | Home</title>{% endblock %}*/
/* 		<meta name="description" content="iVega a Bootstrap-based, Responsive HTML5 Template">*/
/* 		<meta name="author" content="htmlcoder.html">*/
/* */
/* 		<!-- Mobile Meta -->*/
/* 		<meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* */
/* 		<!-- Web Fonts -->*/
/* 		<link href="{{asset('http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic')}}" rel='stylesheet' type='text/css'>*/
/* 		<link href="{{asset('http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext')}}" rel='stylesheet' type='text/css'>*/
/* 		<link href="{{asset('http://fonts.googleapis.com/css?family=PT+Serif')}}" rel='stylesheet' type='text/css'>*/
/* */
/* 		<!-- Bootstrap core CSS -->*/
/* 		<link href="{{asset('bootstrap/css/bootstrap.css')}}" rel="stylesheet">*/
/* */
/* 		<!-- Font Awesome CSS -->*/
/* 		<link href="{{asset('fonts/font-awesome/css/font-awesome.css')}}" rel="stylesheet">*/
/* */
/* 		<!-- Plugins -->*/
/* 		<link href="{{asset('plugins/flexslider/flexslider.css')}}" rel="stylesheet">*/
/* 		<link href="{{asset('css/animations.css')}}" rel="stylesheet">*/
/* 		<link href="{{asset('plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet">*/
/* */
/* 		<!-- iVega core CSS file -->*/
/* 		<link href="{{asset('css/style2.css')}}" rel="stylesheet">*/
/* */
/* 		<!-- Style Switcher Styles (Remove these two lines) -->*/
/* 		<link href="#" data-style="styles" rel="stylesheet">*/
/* 		<link href="{{asset('style-switcher/style-switcher.css')}}" rel="stylesheet">*/
/* */
/* 		<!-- Custom css --> */
/* 		<link href="{{asset('css/custom.css')}}" rel="stylesheet">*/
/* 	</head>*/
/* */
/* 	<body class="front preload">*/
/* */
/* 		<!-- page wrapper start (Add "boxed" class to page-wrapper in order to enable boxed layout mode) -->*/
/* 		<div class="page-wrapper">*/
/* 		*/
/* 			<!-- scrollToTop start -->*/
/* 			<div class="scrollToTop"><i class="fa fa-angle-up"></i></div>*/
/* 			<!-- scrollToTop end -->*/
/* */
/* 			<!-- preheader start -->*/
/* 			*/
/*                             {{ render(controller("ISETKBundle:Default:mailHead")) }}*/
/*                         */
/*                         <!-- preheader end -->*/
/* */
/* 			<!-- header top start -->*/
/* 			*/
/*                             {{ render(controller("ISETKBundle:Default:head")) }}*/
/*                         */
/*                         <!-- header top end -->*/
/* */
/* 			<!-- header start -->*/
/* 			<header class="header text-center">*/
/* 				<div class="container">*/
/* 					<div class="row">*/
/* 						<div class="col-md-12">*/
/* 							<div class="logo">*/
/* 								<a href="#"><img id="" src="{{asset('images/logo1.png')}}" alt="ISETK"></a>*/
/* 							</div>*/
/* 							<div class="site-slogan">*/
/* 								*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</header>*/
/* 			<!-- header end -->*/
/* */
/* 			<!-- main-navigation start (remove fixed class from main-navigation in order to disable fixed navigation mode)-->*/
/* 			{% block menu %}*/
/*                             {{ render(controller("ISETKBundle:Default:menu")) }}*/
/*                         {% endblock %}*/
/*                         <!-- main-navigation end -->*/
/* */
/* 			<!-- banner start -->*/
/* 			{% block banner %}*/
/*                             */
/*                         {% endblock %}*/
/*                         <!-- banner end -->*/
/* */
/* 			<!-- main start -->*/
/*                         {% block main %}*/
/*                             {{ render(controller("ISETKBundle:Default:main")) }}*/
/*                         {% endblock %}*/
/* 			<!-- main end -->*/
/* */
/* 			<!-- footer start -->*/
/* 			*/
/*                             {{ render(controller("ISETKBundle:Default:footer")) }}*/
/*                         */
/*                         <!-- footer end -->*/
/* */
/* 		</div>*/
/* 		<!-- page wrapper end -->*/
/* */
/* 		<!-- JavaScript files placed at the end of the document so the pages load faster*/
/* 		================================================== -->*/
/* 		<!-- Jquery and Bootstap core js files -->*/
/* 		<script type="text/javascript" src="{{asset('plugins/jquery.min.js')}}"></script>*/
/* 		<script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>*/
/* */
/* 		<!-- Modernizr javascript -->*/
/* 		<script type="text/javascript" src="{{asset('plugins/modernizr.js')}}"></script>*/
/* */
/* 		<!-- Flexslider javascript -->*/
/* 		<script type="text/javascript" src="{{asset('plugins/flexslider/jquery.flexslider.js')}}"></script>*/
/* */
/* 		<!-- Owl carousel javascript -->*/
/* 		<script type="text/javascript" src="{{asset('plugins/owl-carousel/owl.carousel.js')}}"></script>*/
/* */
/* 		<!-- Magnific Popup javascript -->*/
/* 		<script type="text/javascript" src="{{asset('plugins/magnific-popup/jquery.magnific-popup.min.js')}}"></script>*/
/* */
/* 		<!-- Appear javascript -->*/
/* 		<script type="text/javascript" src="{{asset('plugins/jquery.appear.js')}}"></script>*/
/* */
/* 		<!-- Count To javascript -->*/
/* 		<script type="text/javascript" src="{{asset('plugins/jquery.countTo.js')}}"></script>*/
/* */
/* 		<!-- Flowtype javascript -->*/
/* 		<script type="text/javascript" src="{{asset('plugins/flowtype.js')}}"></script>   */
/* */
/* 		<!-- Parallax javascript -->*/
/* 		<script src="{{asset('plugins/jquery.parallax-1.1.3.js')}}"></script>*/
/* */
/* 		<!-- Contact form -->*/
/* 		<script src="{{asset('plugins/jquery.validate.js')}}"></script>*/
/* */
/* 		<!-- Initialization of Plugins -->*/
/* 		<script type="text/javascript" src="{{asset('js/template.js')}}"></script>*/
/* */
/* 		<!-- Color Switcher (Remove these lines) -->*/
/* 		<script type="text/javascript" src="{{asset('style-switcher/style-switcher.js')}}"></script>*/
/* 		{#<div class="style-switcher closed">*/
/* 			<div class="header">*/
/* 				<a class="trigger" href="#"><i class="fa fa-cog"></i></a>*/
/* 				<h2>Style Switcher</h2>*/
/* 			</div>*/
/* 			<div class="clearfix body">*/
/* 				<h3>Predifined Colors</h3>*/
/* 				<ul class="styleChange">*/
/* 					<li class="blue selected" data-style="blue"></li>*/
/* 					<li class="green" data-style="green"></li>*/
/* 					<li class="orange" data-style="orange"></li>*/
/* 					<li class="red" data-style="red"></li>*/
/* 					<li class="gray" data-style="gray"></li>*/
/* 					<li class="pink" data-style="pink"></li>*/
/* 					<li class="purple" data-style="purple"></li>*/
/* 					<li class="cyan" data-style="cyan"></li>*/
/* 				</ul>*/
/* 				<hr>*/
/* 				<h3>Layout Mode</h3>*/
/* 				<select name="layout-mode">*/
/* 					<option value="wide">Wide</option>*/
/* 					<option value="boxed">Boxed</option>*/
/* 				</select>				*/
/* 			</div>*/
/* 		</div>#}*/
/* 		<!-- Color Switcher End -->*/
/* */
/* 	</body>*/
/* */
/* <!-- Mirrored from htmlcoder.me/preview/ivega/v.1.1/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 May 2016 21:36:35 GMT -->*/
/* </html>*/
/* */
