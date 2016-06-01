<?php

/* ISETKBundle:Template:msg.html.twig */
class __TwigTemplate_bc9b284338f60c0692650fc04bf83b991fde2f06b3f63c75d18c7fe29b672f02 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>OpenTok TextChat demo</title>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/opentok-textchat.css"), "html", null, true);
        echo "\" />
        <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://static.opentok.com/v2/js/opentok.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/opentok-text-chat.js"), "html", null, true);
        echo "\"></script>
        <style>
            html {
                font-size: 14pt;
            }

            #chat {
                position: absolute;
                top: 0;
                bottom: 0;
                right: 0;
                width: 50%;
                overflow: hidden;
                font-size: 12pt;
            }
        </style>
    </head>
    <body>
        <section id=\"connected-as\">
            <button onclick=\"connect(tokenAlice);\">Connect</button>
            <div id=\"videos\">
                <div id=\"subscriber\"></div>
                <div id=\"publisher\"></div>
            </div>
        </section>

        <section id=\"chat\"></section>
        <script>
            // Use your OpenTok dashboard [1] to generate projects a sessionId and
            // a couple of tokens for Alice and Bob. Don't forget to include data with
            // the names for Alice and Bob.
            //
            // [1] https://dashboard.tokbox.com/
            var sessionId = '";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["sessionId"]) ? $context["sessionId"] : $this->getContext($context, "sessionId")), "html", null, true);
        echo "';
            var tokenAlice = '";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "';
            var tokenBob = 'T1==cGFydG5lcl9pZD00NTU5NTgyMiZzaWc9OTM3ZjA3MGU3Yjg5NmUyMDRkOWE4ZTkzNGZiY2M2NTQyZDBhNmM0ODpzZXNzaW9uX2lkPTFfTVg0ME5UVTVOVGd5TW41LU1UUTJOREUzTVRJNU16RTBNWDVwU0Zaa09WUklOVFp5TWxob1ZWWTBTRTFGYlVZM1EycC1mZyZjcmVhdGVfdGltZT0xNDY0MTczNzQwJm5vbmNlPTAuNjg0MTUwOTI5MzI5OTE2OCZyb2xlPXB1Ymxpc2hlciZleHBpcmVfdGltZT0xNDY0MTc3MzQx';

            // Add here your API key
            var apiKey = '";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["api_key"]) ? $context["api_key"] : $this->getContext($context, "api_key")), "html", null, true);
        echo "';

            // Although you need a initialized session, the ChatWidget does not need
            // this session to be connected. It will connect the chat to the session
            // automatically once the session connects.
            var session = OT.initSession(apiKey, sessionId);
            var chatWidget = new OTSolution.TextChat.ChatWidget({
                session: session,
                container: '#chat'
            });

            var subscriber = session.subscribe(stream,
                    'subscriber-element-id', // Replace with the replacement element ID
                    {
                        style: {buttonDisplayMode: 'on'}
                    }
            );

            function connect(token) {
                disableButtons();
                session.connect(token, function (err) {
                    if (!err) {
                        showConnection();
                        var publisher = OT.initPublisher();
                        session.publish(publisher);
                    }
                    else {
                        console.error(err);
                        enableButtons();
                    }
                    session.on('streamCreated', function (event) {
                        session.subscribe(event.stream);
                    })
                });
            }

            function connecter(token, sid) {
                session.disconnect();
                disableButtons();
                session = OT.initSession(apiKey, sid);
                session.connect(token, function (error) {
                    if (error) {
                        console.log(\"Error connecting: \", error.code, error.message);
                    } else {
                        console.log(\"Connected to the session.\");

                    }

                });
            }

            function showConnection() {
                var connectedAs = document.getElementById('connected-as');

                connectedAs.textContent = 'Connected as ";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " ' + session.connection.data;
            }

            function disableButtons() {
                setButtons(false);
            }

            function enableButtons() {
                setButtons(true);
            }

            function setButtons(isEnabled) {
                var connectedAs = document.getElementById('connected-as');
                var buttons = connectedAs.querySelectorAll('button');
                buttons = Array.prototype.slice.call(buttons);
                buttons.forEach(function (button) {
                    button.disabled = !isEnabled;
                });
            }

        </script>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "ISETKBundle:Template:msg.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 100,  81 => 46,  74 => 42,  70 => 41,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>OpenTok TextChat demo</title>*/
/*         <link rel="stylesheet" href="{{asset('css/opentok-textchat.css')}}" />*/
/*         <script src="{{asset('https://static.opentok.com/v2/js/opentok.min.js')}}"></script>*/
/*         <script src="{{asset('dist/opentok-text-chat.js')}}"></script>*/
/*         <style>*/
/*             html {*/
/*                 font-size: 14pt;*/
/*             }*/
/* */
/*             #chat {*/
/*                 position: absolute;*/
/*                 top: 0;*/
/*                 bottom: 0;*/
/*                 right: 0;*/
/*                 width: 50%;*/
/*                 overflow: hidden;*/
/*                 font-size: 12pt;*/
/*             }*/
/*         </style>*/
/*     </head>*/
/*     <body>*/
/*         <section id="connected-as">*/
/*             <button onclick="connect(tokenAlice);">Connect</button>*/
/*             <div id="videos">*/
/*                 <div id="subscriber"></div>*/
/*                 <div id="publisher"></div>*/
/*             </div>*/
/*         </section>*/
/* */
/*         <section id="chat"></section>*/
/*         <script>*/
/*             // Use your OpenTok dashboard [1] to generate projects a sessionId and*/
/*             // a couple of tokens for Alice and Bob. Don't forget to include data with*/
/*             // the names for Alice and Bob.*/
/*             //*/
/*             // [1] https://dashboard.tokbox.com/*/
/*             var sessionId = '{{ sessionId }}';*/
/*             var tokenAlice = '{{ token }}';*/
/*             var tokenBob = 'T1==cGFydG5lcl9pZD00NTU5NTgyMiZzaWc9OTM3ZjA3MGU3Yjg5NmUyMDRkOWE4ZTkzNGZiY2M2NTQyZDBhNmM0ODpzZXNzaW9uX2lkPTFfTVg0ME5UVTVOVGd5TW41LU1UUTJOREUzTVRJNU16RTBNWDVwU0Zaa09WUklOVFp5TWxob1ZWWTBTRTFGYlVZM1EycC1mZyZjcmVhdGVfdGltZT0xNDY0MTczNzQwJm5vbmNlPTAuNjg0MTUwOTI5MzI5OTE2OCZyb2xlPXB1Ymxpc2hlciZleHBpcmVfdGltZT0xNDY0MTc3MzQx';*/
/* */
/*             // Add here your API key*/
/*             var apiKey = '{{ api_key }}';*/
/* */
/*             // Although you need a initialized session, the ChatWidget does not need*/
/*             // this session to be connected. It will connect the chat to the session*/
/*             // automatically once the session connects.*/
/*             var session = OT.initSession(apiKey, sessionId);*/
/*             var chatWidget = new OTSolution.TextChat.ChatWidget({*/
/*                 session: session,*/
/*                 container: '#chat'*/
/*             });*/
/* */
/*             var subscriber = session.subscribe(stream,*/
/*                     'subscriber-element-id', // Replace with the replacement element ID*/
/*                     {*/
/*                         style: {buttonDisplayMode: 'on'}*/
/*                     }*/
/*             );*/
/* */
/*             function connect(token) {*/
/*                 disableButtons();*/
/*                 session.connect(token, function (err) {*/
/*                     if (!err) {*/
/*                         showConnection();*/
/*                         var publisher = OT.initPublisher();*/
/*                         session.publish(publisher);*/
/*                     }*/
/*                     else {*/
/*                         console.error(err);*/
/*                         enableButtons();*/
/*                     }*/
/*                     session.on('streamCreated', function (event) {*/
/*                         session.subscribe(event.stream);*/
/*                     })*/
/*                 });*/
/*             }*/
/* */
/*             function connecter(token, sid) {*/
/*                 session.disconnect();*/
/*                 disableButtons();*/
/*                 session = OT.initSession(apiKey, sid);*/
/*                 session.connect(token, function (error) {*/
/*                     if (error) {*/
/*                         console.log("Error connecting: ", error.code, error.message);*/
/*                     } else {*/
/*                         console.log("Connected to the session.");*/
/* */
/*                     }*/
/* */
/*                 });*/
/*             }*/
/* */
/*             function showConnection() {*/
/*                 var connectedAs = document.getElementById('connected-as');*/
/* */
/*                 connectedAs.textContent = 'Connected as {{ app.user.username }} ' + session.connection.data;*/
/*             }*/
/* */
/*             function disableButtons() {*/
/*                 setButtons(false);*/
/*             }*/
/* */
/*             function enableButtons() {*/
/*                 setButtons(true);*/
/*             }*/
/* */
/*             function setButtons(isEnabled) {*/
/*                 var connectedAs = document.getElementById('connected-as');*/
/*                 var buttons = connectedAs.querySelectorAll('button');*/
/*                 buttons = Array.prototype.slice.call(buttons);*/
/*                 buttons.forEach(function (button) {*/
/*                     button.disabled = !isEnabled;*/
/*                 });*/
/*             }*/
/* */
/*         </script>*/
/*     </body>*/
/* </html>*/
/* */
