<?php

/* frontal/nosotros.html.twig */
class __TwigTemplate_5953019de51ae6f23d34ab7baa85e9fa1fbf1204dad8649933320a7509f476c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "frontal/nosotros.html.twig", 2);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontal/nosotros.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontal/nosotros.html.twig"));

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
        echo "  Nosotros
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 9
        echo "<!-- Page Content -->
<div class=\"container\">
    <!-- Page Heading/Breadcrumbs -->
    <h1 class=\"mt-4 mb-3\">Quienes
    <small>Somos</small>
    </h1>

    <!-- Image Header -->
      <img class=\"img-fluid rounded mb-4\" src=";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/head.jpg"), "html", null, true);
        echo " alt=\"\">

    <!-- Marketing Icons Section -->
    <h2>Nuestro Equipo</h2>
      <div class=\"row\">
        <div class=\"col-lg-4 mb-4\">
          <div class=\"card h-100 text-center\">
            <img class=\"card-img-top\" src=";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/member1.jpg"), "html", null, true);
        echo " alt=\"\">
            <div class=\"card-body\">
            <h4 class=\"card-title\">Sofía Guerra</h4>
            <h6 class=\"card-subtitle mb-2 text-muted\">Position</h6>
              <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class=\"card-footer\">
              <a href=\"#\">name@example.com</a>
            </div>
          </div>
        </div>
        <div class=\"col-lg-4 mb-4\">
          <div class=\"card h-100 text-center\">
            <img class=\"card-img-top\" src=";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/member1.jpg"), "html", null, true);
        echo " alt=\"\">
            <div class=\"card-body\">
            <h4 class=\"card-title\">Sofía Guerra</h4>
            <h6 class=\"card-subtitle mb-2 text-muted\">Position</h6>
              <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class=\"card-footer\">
              <a href=\"#\">name@example.com</a>
            </div>
          </div>
        </div>
        <div class=\"col-lg-4 mb-4\">
          <div class=\"card h-100 text-center\">
           <img class=\"card-img-top\" src=";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/member1.jpg"), "html", null, true);
        echo " alt=\"\">
            <div class=\"card-body\">
            <h4 class=\"card-title\">Sofía Guerra</h4>
            <h6 class=\"card-subtitle mb-2 text-muted\">Position</h6>
              <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class=\"card-footer\">
              <a href=\"#\">name@example.com</a>
            </div>
          </div>
        </div>
      </div>
    <!-- FIN Tarjetas -->

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontal/nosotros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 50,  106 => 37,  90 => 24,  80 => 17,  70 => 9,  61 => 8,  50 => 5,  41 => 4,  11 => 2,);
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
  Nosotros
{% endblock %}
{# CONTENIDO #}
{% block contenido %}
<!-- Page Content -->
<div class=\"container\">
    <!-- Page Heading/Breadcrumbs -->
    <h1 class=\"mt-4 mb-3\">Quienes
    <small>Somos</small>
    </h1>

    <!-- Image Header -->
      <img class=\"img-fluid rounded mb-4\" src={{asset('img/head.jpg')}} alt=\"\">

    <!-- Marketing Icons Section -->
    <h2>Nuestro Equipo</h2>
      <div class=\"row\">
        <div class=\"col-lg-4 mb-4\">
          <div class=\"card h-100 text-center\">
            <img class=\"card-img-top\" src={{asset('img/member1.jpg')}} alt=\"\">
            <div class=\"card-body\">
            <h4 class=\"card-title\">Sofía Guerra</h4>
            <h6 class=\"card-subtitle mb-2 text-muted\">Position</h6>
              <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class=\"card-footer\">
              <a href=\"#\">name@example.com</a>
            </div>
          </div>
        </div>
        <div class=\"col-lg-4 mb-4\">
          <div class=\"card h-100 text-center\">
            <img class=\"card-img-top\" src={{asset('img/member1.jpg')}} alt=\"\">
            <div class=\"card-body\">
            <h4 class=\"card-title\">Sofía Guerra</h4>
            <h6 class=\"card-subtitle mb-2 text-muted\">Position</h6>
              <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class=\"card-footer\">
              <a href=\"#\">name@example.com</a>
            </div>
          </div>
        </div>
        <div class=\"col-lg-4 mb-4\">
          <div class=\"card h-100 text-center\">
           <img class=\"card-img-top\" src={{asset('img/member1.jpg')}} alt=\"\">
            <div class=\"card-body\">
            <h4 class=\"card-title\">Sofía Guerra</h4>
            <h6 class=\"card-subtitle mb-2 text-muted\">Position</h6>
              <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class=\"card-footer\">
              <a href=\"#\">name@example.com</a>
            </div>
          </div>
        </div>
      </div>
    <!-- FIN Tarjetas -->

</div>
{% endblock %}", "frontal/nosotros.html.twig", "C:\\xampp2\\htdocs\\symphony34\\symfonyweb\\app\\Resources\\views\\frontal\\nosotros.html.twig");
    }
}
