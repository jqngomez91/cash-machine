<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_e8d5e8ca277d4f940c1a9bd9ba48cfdadfab476133ae0464c8b06f07b5584b85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43b60209cdc17961d4d1ec0dba9e9df037edc1005db0b503c717208853c67a4b = $this->env->getExtension("native_profiler");
        $__internal_43b60209cdc17961d4d1ec0dba9e9df037edc1005db0b503c717208853c67a4b->enter($__internal_43b60209cdc17961d4d1ec0dba9e9df037edc1005db0b503c717208853c67a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43b60209cdc17961d4d1ec0dba9e9df037edc1005db0b503c717208853c67a4b->leave($__internal_43b60209cdc17961d4d1ec0dba9e9df037edc1005db0b503c717208853c67a4b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_87d2e8ff804662c8577f7a80b801958c89cddcda59518e4c063e5a807dc701a0 = $this->env->getExtension("native_profiler");
        $__internal_87d2e8ff804662c8577f7a80b801958c89cddcda59518e4c063e5a807dc701a0->enter($__internal_87d2e8ff804662c8577f7a80b801958c89cddcda59518e4c063e5a807dc701a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_87d2e8ff804662c8577f7a80b801958c89cddcda59518e4c063e5a807dc701a0->leave($__internal_87d2e8ff804662c8577f7a80b801958c89cddcda59518e4c063e5a807dc701a0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_563ba3132a04771c819613d2e3892204bd494b259b296de8b0c3b6695c85a7ab = $this->env->getExtension("native_profiler");
        $__internal_563ba3132a04771c819613d2e3892204bd494b259b296de8b0c3b6695c85a7ab->enter($__internal_563ba3132a04771c819613d2e3892204bd494b259b296de8b0c3b6695c85a7ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_563ba3132a04771c819613d2e3892204bd494b259b296de8b0c3b6695c85a7ab->leave($__internal_563ba3132a04771c819613d2e3892204bd494b259b296de8b0c3b6695c85a7ab_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_643cfb5e7ae387c2ac6ac619acb1de6801918c5810735685cfb033171e59fe30 = $this->env->getExtension("native_profiler");
        $__internal_643cfb5e7ae387c2ac6ac619acb1de6801918c5810735685cfb033171e59fe30->enter($__internal_643cfb5e7ae387c2ac6ac619acb1de6801918c5810735685cfb033171e59fe30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_643cfb5e7ae387c2ac6ac619acb1de6801918c5810735685cfb033171e59fe30->leave($__internal_643cfb5e7ae387c2ac6ac619acb1de6801918c5810735685cfb033171e59fe30_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
/* {% extends 'TwigBundle::layout.html.twig' %}*/
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
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
