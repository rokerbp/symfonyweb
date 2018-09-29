<?php

/* frontal/servicio.html.twig */
class __TwigTemplate_2dc5eb01729c4db9efaec14760a24f98106489e0417be6e0c0f67c30128ad513 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "frontal/servicio.html.twig", 2);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontal/servicio.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontal/servicio.html.twig"));

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
        echo "    Servicios
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
        echo "    <!-- Page Content -->
    <div class=\"container\">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class=\"mt-4 mb-3\">Todos Nuestros Servicios</h1>

      <!-- Portfolio Item Row -->
      <div class=\"row\">

        <div class=\"col-md-8\">
          <img class=\"img-fluid\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/slide1.jpg"), "html", null, true);
        echo "\" alt=\"\">
        </div>

        <div class=\"col-md-4\">
          <h3 class=\"my-3\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["servicio"] ?? $this->getContext($context, "servicio")), "nombre", array()), "html", null, true);
        echo "</h3>
          <p>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["servicio"] ?? $this->getContext($context, "servicio")), "descripcion", array()), "html", null, true);
        echo "</p>
          <h3 class=\"my-3\">caracteristicas</h3>
            ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["servicio"] ?? $this->getContext($context, "servicio")), "caracteristicas", array()), "html", null, true);
        echo "
        </div>

      </div>
      <!-- /.row -->

      <!-- Related Projects Row -->
      <h3 class=\"my-4\">Otros Servicios</h3>

      <div class=\"row\">

        <div class=\"col-md-3 col-sm-6 mb-4\">
          <a href=\"#\">
            <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
          </a>
        </div>

        <div class=\"col-md-3 col-sm-6 mb-4\">
          <a href=\"#\">
            <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
          </a>
        </div>

        <div class=\"col-md-3 col-sm-6 mb-4\">
          <a href=\"#\">
            <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
          </a>
        </div>

        <div class=\"col-md-3 col-sm-6 mb-4\">
          <a href=\"#\">
            <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
          </a>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontal/servicio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 26,  93 => 24,  89 => 23,  82 => 19,  70 => 9,  61 => 8,  50 => 5,  41 => 4,  11 => 2,);
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
    Servicios
{% endblock %}
{# CONTENIDO #}
{% block contenido %}
    <!-- Page Content -->
    <div class=\"container\">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class=\"mt-4 mb-3\">Todos Nuestros Servicios</h1>

      <!-- Portfolio Item Row -->
      <div class=\"row\">

        <div class=\"col-md-8\">
          <img class=\"img-fluid\" src=\"{{asset('img/slide1.jpg')}}\" alt=\"\">
        </div>

        <div class=\"col-md-4\">
          <h3 class=\"my-3\">{{servicio.nombre}}</h3>
          <p>{{servicio.descripcion}}</p>
          <h3 class=\"my-3\">caracteristicas</h3>
            {{ servicio.caracteristicas }}
        </div>

      </div>
      <!-- /.row -->

      <!-- Related Projects Row -->
      <h3 class=\"my-4\">Otros Servicios</h3>

      <div class=\"row\">

        <div class=\"col-md-3 col-sm-6 mb-4\">
          <a href=\"#\">
            <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
          </a>
        </div>

        <div class=\"col-md-3 col-sm-6 mb-4\">
          <a href=\"#\">
            <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
          </a>
        </div>

        <div class=\"col-md-3 col-sm-6 mb-4\">
          <a href=\"#\">
            <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
          </a>
        </div>

        <div class=\"col-md-3 col-sm-6 mb-4\">
          <a href=\"#\">
            <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
          </a>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

{% endblock %}", "frontal/servicio.html.twig", "C:\\xampp2\\htdocs\\symphony34\\symfonyweb\\app\\Resources\\views\\frontal\\servicio.html.twig");
    }
}
