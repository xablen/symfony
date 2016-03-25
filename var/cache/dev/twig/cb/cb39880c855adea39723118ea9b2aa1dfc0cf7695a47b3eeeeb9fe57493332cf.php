<?php

/* OCPlatformBundle:Default:index.html.twig */
class __TwigTemplate_d4263212255ba112aa0c7b66a3f5b2c576b2aec8747e5186e2fc266cb9e71c5e extends Twig_Template
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
        $__internal_1844616ed6ddc7b38ff79df5e84043c2c394c884cba0584ad62c114ed5733299 = $this->env->getExtension("native_profiler");
        $__internal_1844616ed6ddc7b38ff79df5e84043c2c394c884cba0584ad62c114ed5733299->enter($__internal_1844616ed6ddc7b38ff79df5e84043c2c394c884cba0584ad62c114ed5733299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Default:index.html.twig"));

        // line 1
        echo "<html>
  <body>
    Hello ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
  </body>
</html>";
        
        $__internal_1844616ed6ddc7b38ff79df5e84043c2c394c884cba0584ad62c114ed5733299->leave($__internal_1844616ed6ddc7b38ff79df5e84043c2c394c884cba0584ad62c114ed5733299_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <html>*/
/*   <body>*/
/*     Hello {{ name }}!*/
/*   </body>*/
/* </html>*/
