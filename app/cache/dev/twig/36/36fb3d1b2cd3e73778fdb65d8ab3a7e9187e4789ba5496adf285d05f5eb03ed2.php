<?php

/* base.html.twig */
class __TwigTemplate_a255d1b689445620de118bd23a73e573e551c2ebab0c633fb3975ba9f751a5bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce75027607b946885d65585db06bf1bc7787077c86e184100c30b465cdea23ee = $this->env->getExtension("native_profiler");
        $__internal_ce75027607b946885d65585db06bf1bc7787077c86e184100c30b465cdea23ee->enter($__internal_ce75027607b946885d65585db06bf1bc7787077c86e184100c30b465cdea23ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_ce75027607b946885d65585db06bf1bc7787077c86e184100c30b465cdea23ee->leave($__internal_ce75027607b946885d65585db06bf1bc7787077c86e184100c30b465cdea23ee_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a7475323710abb799b3504416f483b7aa38d58c99b5226989eb6cb0da6a03ae = $this->env->getExtension("native_profiler");
        $__internal_2a7475323710abb799b3504416f483b7aa38d58c99b5226989eb6cb0da6a03ae->enter($__internal_2a7475323710abb799b3504416f483b7aa38d58c99b5226989eb6cb0da6a03ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2a7475323710abb799b3504416f483b7aa38d58c99b5226989eb6cb0da6a03ae->leave($__internal_2a7475323710abb799b3504416f483b7aa38d58c99b5226989eb6cb0da6a03ae_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_940905ac35b6555e098691f50ddb7708f248c92cab39f668fd9f87cc3cf4bb6d = $this->env->getExtension("native_profiler");
        $__internal_940905ac35b6555e098691f50ddb7708f248c92cab39f668fd9f87cc3cf4bb6d->enter($__internal_940905ac35b6555e098691f50ddb7708f248c92cab39f668fd9f87cc3cf4bb6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_940905ac35b6555e098691f50ddb7708f248c92cab39f668fd9f87cc3cf4bb6d->leave($__internal_940905ac35b6555e098691f50ddb7708f248c92cab39f668fd9f87cc3cf4bb6d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_47a7e6b3c01081941dd2d8dfbb6370fa0d9e9b138168d2619cd46dc9ff309230 = $this->env->getExtension("native_profiler");
        $__internal_47a7e6b3c01081941dd2d8dfbb6370fa0d9e9b138168d2619cd46dc9ff309230->enter($__internal_47a7e6b3c01081941dd2d8dfbb6370fa0d9e9b138168d2619cd46dc9ff309230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_47a7e6b3c01081941dd2d8dfbb6370fa0d9e9b138168d2619cd46dc9ff309230->leave($__internal_47a7e6b3c01081941dd2d8dfbb6370fa0d9e9b138168d2619cd46dc9ff309230_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3339b1f8cbfd2a1e2ad284d03e2039134df61b9eeb9edd205f5cc3caa9004169 = $this->env->getExtension("native_profiler");
        $__internal_3339b1f8cbfd2a1e2ad284d03e2039134df61b9eeb9edd205f5cc3caa9004169->enter($__internal_3339b1f8cbfd2a1e2ad284d03e2039134df61b9eeb9edd205f5cc3caa9004169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3339b1f8cbfd2a1e2ad284d03e2039134df61b9eeb9edd205f5cc3caa9004169->leave($__internal_3339b1f8cbfd2a1e2ad284d03e2039134df61b9eeb9edd205f5cc3caa9004169_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
