<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_18fcaf9ed89a14867354bb29b9279f59002af00789a1fcf0b0919a0f49d98a93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_150f0572c8706878f0772c34d0942f1b0631af1fd53d727d67aeae12b239aa0a = $this->env->getExtension("native_profiler");
        $__internal_150f0572c8706878f0772c34d0942f1b0631af1fd53d727d67aeae12b239aa0a->enter($__internal_150f0572c8706878f0772c34d0942f1b0631af1fd53d727d67aeae12b239aa0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_150f0572c8706878f0772c34d0942f1b0631af1fd53d727d67aeae12b239aa0a->leave($__internal_150f0572c8706878f0772c34d0942f1b0631af1fd53d727d67aeae12b239aa0a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_77a7f3597a0b3357218d4ed9e13c964937365ae2545a2a1d10a5787de29906b2 = $this->env->getExtension("native_profiler");
        $__internal_77a7f3597a0b3357218d4ed9e13c964937365ae2545a2a1d10a5787de29906b2->enter($__internal_77a7f3597a0b3357218d4ed9e13c964937365ae2545a2a1d10a5787de29906b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_77a7f3597a0b3357218d4ed9e13c964937365ae2545a2a1d10a5787de29906b2->leave($__internal_77a7f3597a0b3357218d4ed9e13c964937365ae2545a2a1d10a5787de29906b2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2a578741fe5e060e703e53144e9fff60f53b75c511cc00c95bd1b15fb155b5f1 = $this->env->getExtension("native_profiler");
        $__internal_2a578741fe5e060e703e53144e9fff60f53b75c511cc00c95bd1b15fb155b5f1->enter($__internal_2a578741fe5e060e703e53144e9fff60f53b75c511cc00c95bd1b15fb155b5f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2a578741fe5e060e703e53144e9fff60f53b75c511cc00c95bd1b15fb155b5f1->leave($__internal_2a578741fe5e060e703e53144e9fff60f53b75c511cc00c95bd1b15fb155b5f1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1c4a185c7f488ea89c2081eb3743ac3a10ef824b88c0d64b41857b62ad1de818 = $this->env->getExtension("native_profiler");
        $__internal_1c4a185c7f488ea89c2081eb3743ac3a10ef824b88c0d64b41857b62ad1de818->enter($__internal_1c4a185c7f488ea89c2081eb3743ac3a10ef824b88c0d64b41857b62ad1de818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1c4a185c7f488ea89c2081eb3743ac3a10ef824b88c0d64b41857b62ad1de818->leave($__internal_1c4a185c7f488ea89c2081eb3743ac3a10ef824b88c0d64b41857b62ad1de818_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
