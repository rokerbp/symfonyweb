<?php

/* frontal/login.html.twig */
class __TwigTemplate_080bc7cac23aa62e415952c636836ba38f32dae4604520a5bc4ee3f2b7ef26f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "frontal/login.html.twig", 2);
        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontal/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontal/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        // line 5
        echo "Login
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 9
        echo "<div class=\"container\">
    <h1 class=\"mt-4 mb-3\">Login
        <small>Usuario</small>
    </h1>
    <!-- Intro Content -->
    <div class=\"row\">
        <div class=\"col-lg-6\">
            ";
        // line 16
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 17
            echo "            <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
            ";
        }
        // line 19
        echo "            <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
                <div class=\"control-group form-group\">
                    <div class=\"controls\">
                        <label for=\"username\">Username:</label>
                        <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
                    </div>
                </div>
                <div class=\"control-group form-group\">
                    <div class=\"controls\">
                        <label for=\"password\">Password:</label>
                        <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" />
                    </div>
                </div>
                <button class=\"btn btn-primary\" type=\"submit\">login</button>
            </form>
        </div>
        <div class=\"col-lg-6\">
            <h2>¿Para qué registrarse?</h2>
            <p>Con el registro de usuario se podrá realizar la compra de nuestros distintos productos de una forma
                rápida y sencilla</p>
            <p>Mediante la introducción del correo electrónico y la contraseña, podrás realizar una nueva compra de
                producto o anulación de la misma.</p>
            <p>Si aun no te has registrado en la aplicacion, haz click en el enlace de <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registro");
        echo "\"><b>REGISTRO</b></a> </p>
        </div>
    </div>
    <!-- /.row -->
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontal/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 41,  95 => 23,  87 => 19,  81 => 17,  79 => 16,  70 => 9,  61 => 7,  50 => 5,  41 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Plantilla de la aplicación #}
{% extends 'base.html.twig' %}
{# Titulo #}
{% block titulo %}
Login
{% endblock %}
{% block contenido %}
{# Contenido #}
<div class=\"container\">
    <h1 class=\"mt-4 mb-3\">Login
        <small>Usuario</small>
    </h1>
    <!-- Intro Content -->
    <div class=\"row\">
        <div class=\"col-lg-6\">
            {% if error %}
            <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
            {% endif %}
            <form action=\"{{ path('login') }}\" method=\"post\">
                <div class=\"control-group form-group\">
                    <div class=\"controls\">
                        <label for=\"username\">Username:</label>
                        <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />
                    </div>
                </div>
                <div class=\"control-group form-group\">
                    <div class=\"controls\">
                        <label for=\"password\">Password:</label>
                        <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" />
                    </div>
                </div>
                <button class=\"btn btn-primary\" type=\"submit\">login</button>
            </form>
        </div>
        <div class=\"col-lg-6\">
            <h2>¿Para qué registrarse?</h2>
            <p>Con el registro de usuario se podrá realizar la compra de nuestros distintos productos de una forma
                rápida y sencilla</p>
            <p>Mediante la introducción del correo electrónico y la contraseña, podrás realizar una nueva compra de
                producto o anulación de la misma.</p>
            <p>Si aun no te has registrado en la aplicacion, haz click en el enlace de <a href=\"{{path('registro')}}\"><b>REGISTRO</b></a> </p>
        </div>
    </div>
    <!-- /.row -->
</div>
{% endblock %}", "frontal/login.html.twig", "C:\\xampp2\\htdocs\\symphony34\\symfonyweb\\app\\Resources\\views\\frontal\\login.html.twig");
    }
}
