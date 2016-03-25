<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7ff1a7547806582372d9345687e774df4ee44cd0c02da3560acd6036acb7f44f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38d413ce416591064b160b2d7ce30f531e19030cd2eede5a5df7b871fabb4f93 = $this->env->getExtension("native_profiler");
        $__internal_38d413ce416591064b160b2d7ce30f531e19030cd2eede5a5df7b871fabb4f93->enter($__internal_38d413ce416591064b160b2d7ce30f531e19030cd2eede5a5df7b871fabb4f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38d413ce416591064b160b2d7ce30f531e19030cd2eede5a5df7b871fabb4f93->leave($__internal_38d413ce416591064b160b2d7ce30f531e19030cd2eede5a5df7b871fabb4f93_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a0f48309f2c745ab4cc07dde6465e89611b27f502268bf3eaf69d05e8317e647 = $this->env->getExtension("native_profiler");
        $__internal_a0f48309f2c745ab4cc07dde6465e89611b27f502268bf3eaf69d05e8317e647->enter($__internal_a0f48309f2c745ab4cc07dde6465e89611b27f502268bf3eaf69d05e8317e647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a0f48309f2c745ab4cc07dde6465e89611b27f502268bf3eaf69d05e8317e647->leave($__internal_a0f48309f2c745ab4cc07dde6465e89611b27f502268bf3eaf69d05e8317e647_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_df75d8caaac978d484aa4c49281be39b3a6d0f2a60d5d0b8950f930ffcf561e7 = $this->env->getExtension("native_profiler");
        $__internal_df75d8caaac978d484aa4c49281be39b3a6d0f2a60d5d0b8950f930ffcf561e7->enter($__internal_df75d8caaac978d484aa4c49281be39b3a6d0f2a60d5d0b8950f930ffcf561e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_df75d8caaac978d484aa4c49281be39b3a6d0f2a60d5d0b8950f930ffcf561e7->leave($__internal_df75d8caaac978d484aa4c49281be39b3a6d0f2a60d5d0b8950f930ffcf561e7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e22bfa183026fc6916e641bbeeab0575d6ebc40ada4a4e65999b75590d6892b8 = $this->env->getExtension("native_profiler");
        $__internal_e22bfa183026fc6916e641bbeeab0575d6ebc40ada4a4e65999b75590d6892b8->enter($__internal_e22bfa183026fc6916e641bbeeab0575d6ebc40ada4a4e65999b75590d6892b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e22bfa183026fc6916e641bbeeab0575d6ebc40ada4a4e65999b75590d6892b8->leave($__internal_e22bfa183026fc6916e641bbeeab0575d6ebc40ada4a4e65999b75590d6892b8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
