<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_501eada36b26c00bd50a071a7f01771200a1e8b800156fe33256eb2cd07dbd4b extends Twig_Template
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
        $__internal_199a7ee3bf212d0db23aba1e54b99f1e7921edfe56b73992c30663630fcad72f = $this->env->getExtension("native_profiler");
        $__internal_199a7ee3bf212d0db23aba1e54b99f1e7921edfe56b73992c30663630fcad72f->enter($__internal_199a7ee3bf212d0db23aba1e54b99f1e7921edfe56b73992c30663630fcad72f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_199a7ee3bf212d0db23aba1e54b99f1e7921edfe56b73992c30663630fcad72f->leave($__internal_199a7ee3bf212d0db23aba1e54b99f1e7921edfe56b73992c30663630fcad72f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_08903e89043eec143982092d9906406c14fb22d8c5433d6120ad8f709564e38c = $this->env->getExtension("native_profiler");
        $__internal_08903e89043eec143982092d9906406c14fb22d8c5433d6120ad8f709564e38c->enter($__internal_08903e89043eec143982092d9906406c14fb22d8c5433d6120ad8f709564e38c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_08903e89043eec143982092d9906406c14fb22d8c5433d6120ad8f709564e38c->leave($__internal_08903e89043eec143982092d9906406c14fb22d8c5433d6120ad8f709564e38c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c230fe1a7f9a01ebc24098869de4a4d37f6166514f886395d718c3e09d926554 = $this->env->getExtension("native_profiler");
        $__internal_c230fe1a7f9a01ebc24098869de4a4d37f6166514f886395d718c3e09d926554->enter($__internal_c230fe1a7f9a01ebc24098869de4a4d37f6166514f886395d718c3e09d926554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c230fe1a7f9a01ebc24098869de4a4d37f6166514f886395d718c3e09d926554->leave($__internal_c230fe1a7f9a01ebc24098869de4a4d37f6166514f886395d718c3e09d926554_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c5c185eaffed06c2acdfe0596113b70eff4c4684f48dd4f57f2e01290c9178cd = $this->env->getExtension("native_profiler");
        $__internal_c5c185eaffed06c2acdfe0596113b70eff4c4684f48dd4f57f2e01290c9178cd->enter($__internal_c5c185eaffed06c2acdfe0596113b70eff4c4684f48dd4f57f2e01290c9178cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c5c185eaffed06c2acdfe0596113b70eff4c4684f48dd4f57f2e01290c9178cd->leave($__internal_c5c185eaffed06c2acdfe0596113b70eff4c4684f48dd4f57f2e01290c9178cd_prof);

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
