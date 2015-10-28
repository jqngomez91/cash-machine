<?php

/* base.html.twig */
class __TwigTemplate_2de5d80f813c447feb6681f2bd2fe703c58a45d846244dd90aa71c556378051a extends Twig_Template
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
        $__internal_b7bea4a28c8ee0443103df35a17b2b070514c34a0c6093a47e89bff8ba906f77 = $this->env->getExtension("native_profiler");
        $__internal_b7bea4a28c8ee0443103df35a17b2b070514c34a0c6093a47e89bff8ba906f77->enter($__internal_b7bea4a28c8ee0443103df35a17b2b070514c34a0c6093a47e89bff8ba906f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b7bea4a28c8ee0443103df35a17b2b070514c34a0c6093a47e89bff8ba906f77->leave($__internal_b7bea4a28c8ee0443103df35a17b2b070514c34a0c6093a47e89bff8ba906f77_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b37ba0f27de23275afea9d0bdb2ec85c8aae0dc5dc6a86ce6842f0ff41b25f02 = $this->env->getExtension("native_profiler");
        $__internal_b37ba0f27de23275afea9d0bdb2ec85c8aae0dc5dc6a86ce6842f0ff41b25f02->enter($__internal_b37ba0f27de23275afea9d0bdb2ec85c8aae0dc5dc6a86ce6842f0ff41b25f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b37ba0f27de23275afea9d0bdb2ec85c8aae0dc5dc6a86ce6842f0ff41b25f02->leave($__internal_b37ba0f27de23275afea9d0bdb2ec85c8aae0dc5dc6a86ce6842f0ff41b25f02_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_12b51aa91f79b3d496337bfd066dd99f0d13d333ff3d6976186dda893dddffdd = $this->env->getExtension("native_profiler");
        $__internal_12b51aa91f79b3d496337bfd066dd99f0d13d333ff3d6976186dda893dddffdd->enter($__internal_12b51aa91f79b3d496337bfd066dd99f0d13d333ff3d6976186dda893dddffdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_12b51aa91f79b3d496337bfd066dd99f0d13d333ff3d6976186dda893dddffdd->leave($__internal_12b51aa91f79b3d496337bfd066dd99f0d13d333ff3d6976186dda893dddffdd_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4daf68d7ea655464ce59b03e70b0e8fef92722ac37745efc6c4f2711534dded3 = $this->env->getExtension("native_profiler");
        $__internal_4daf68d7ea655464ce59b03e70b0e8fef92722ac37745efc6c4f2711534dded3->enter($__internal_4daf68d7ea655464ce59b03e70b0e8fef92722ac37745efc6c4f2711534dded3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4daf68d7ea655464ce59b03e70b0e8fef92722ac37745efc6c4f2711534dded3->leave($__internal_4daf68d7ea655464ce59b03e70b0e8fef92722ac37745efc6c4f2711534dded3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c4633d124fc3fef88dd32784432d0a5c268996b45e072491ff46c6f2c4dd59b7 = $this->env->getExtension("native_profiler");
        $__internal_c4633d124fc3fef88dd32784432d0a5c268996b45e072491ff46c6f2c4dd59b7->enter($__internal_c4633d124fc3fef88dd32784432d0a5c268996b45e072491ff46c6f2c4dd59b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c4633d124fc3fef88dd32784432d0a5c268996b45e072491ff46c6f2c4dd59b7->leave($__internal_c4633d124fc3fef88dd32784432d0a5c268996b45e072491ff46c6f2c4dd59b7_prof);

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
