<?php

/* base.html.twig */
class __TwigTemplate_23bbb93f2c55ab2dd889208072716a2717d3b4edd2cd0f6917e4e16aacfc36a6 extends Twig_Template
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
        $__internal_781968a27294d7df4c2e4798c0cba9205a4117ae252190882ad6109f7a01746d = $this->env->getExtension("native_profiler");
        $__internal_781968a27294d7df4c2e4798c0cba9205a4117ae252190882ad6109f7a01746d->enter($__internal_781968a27294d7df4c2e4798c0cba9205a4117ae252190882ad6109f7a01746d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_781968a27294d7df4c2e4798c0cba9205a4117ae252190882ad6109f7a01746d->leave($__internal_781968a27294d7df4c2e4798c0cba9205a4117ae252190882ad6109f7a01746d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_857711205da4d6167904887ee30ea56baf777c6495e905f0f5d43442eb8e4430 = $this->env->getExtension("native_profiler");
        $__internal_857711205da4d6167904887ee30ea56baf777c6495e905f0f5d43442eb8e4430->enter($__internal_857711205da4d6167904887ee30ea56baf777c6495e905f0f5d43442eb8e4430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_857711205da4d6167904887ee30ea56baf777c6495e905f0f5d43442eb8e4430->leave($__internal_857711205da4d6167904887ee30ea56baf777c6495e905f0f5d43442eb8e4430_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e100251f6d120da3ff354eded98a4949556cc055b77bf9a35380bcc96d58532d = $this->env->getExtension("native_profiler");
        $__internal_e100251f6d120da3ff354eded98a4949556cc055b77bf9a35380bcc96d58532d->enter($__internal_e100251f6d120da3ff354eded98a4949556cc055b77bf9a35380bcc96d58532d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e100251f6d120da3ff354eded98a4949556cc055b77bf9a35380bcc96d58532d->leave($__internal_e100251f6d120da3ff354eded98a4949556cc055b77bf9a35380bcc96d58532d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c21ac55a3aab115a5f8b948d5467075daf72afdc586c40f8c47c3ddad62ef2c7 = $this->env->getExtension("native_profiler");
        $__internal_c21ac55a3aab115a5f8b948d5467075daf72afdc586c40f8c47c3ddad62ef2c7->enter($__internal_c21ac55a3aab115a5f8b948d5467075daf72afdc586c40f8c47c3ddad62ef2c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c21ac55a3aab115a5f8b948d5467075daf72afdc586c40f8c47c3ddad62ef2c7->leave($__internal_c21ac55a3aab115a5f8b948d5467075daf72afdc586c40f8c47c3ddad62ef2c7_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e8eb51f774dc170628067f910431ffa338826946c82837efce0a36991dd57f1b = $this->env->getExtension("native_profiler");
        $__internal_e8eb51f774dc170628067f910431ffa338826946c82837efce0a36991dd57f1b->enter($__internal_e8eb51f774dc170628067f910431ffa338826946c82837efce0a36991dd57f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e8eb51f774dc170628067f910431ffa338826946c82837efce0a36991dd57f1b->leave($__internal_e8eb51f774dc170628067f910431ffa338826946c82837efce0a36991dd57f1b_prof);

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
