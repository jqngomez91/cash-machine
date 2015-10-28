<?php

/* CashBundle:Default:index.html.twig */
class __TwigTemplate_3d9f7c4c73f0afb486c06773c01d2050a4e3379a8c212648513a5b5eb637d7ad extends Twig_Template
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
        $__internal_1c69d3066613c86c28aabb3d27be08f3178148d2931aeba702b62030bdb4a80e = $this->env->getExtension("native_profiler");
        $__internal_1c69d3066613c86c28aabb3d27be08f3178148d2931aeba702b62030bdb4a80e->enter($__internal_1c69d3066613c86c28aabb3d27be08f3178148d2931aeba702b62030bdb4a80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CashBundle:Default:index.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form', array("action" => "/result", "method" => "POST"));
        
        $__internal_1c69d3066613c86c28aabb3d27be08f3178148d2931aeba702b62030bdb4a80e->leave($__internal_1c69d3066613c86c28aabb3d27be08f3178148d2931aeba702b62030bdb4a80e_prof);

    }

    public function getTemplateName()
    {
        return "CashBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ form(form, {'action': '/result', 'method': 'POST'}) }}*/
