<?php

/* frontal/index.html.twig */
class __TwigTemplate_ab8906e1ca34bc5ae3fb4fdbf602252f865bfcd905c307daa55add911aecc078 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "frontal/index.html.twig", 2);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontal/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontal/index.html.twig"));

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
        echo "  Página principal
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
        echo "    <!-- SECCION DE SLIDES -->
  <header>
      <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
        </ol>
        <div class=\"carousel-inner\" role=\"listbox\">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class=\"carousel-item active\" style=\"background-image: url(";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/slide1.jpg"), "html", null, true);
        echo ")\">
            <div class=\"carousel-caption d-none d-md-block\">
              <h3>Sitios Web</h3>
              <p>Llega a más gente con tu sitio web integrado con redes sociales.</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class=\"carousel-item\" style=\"background-image: url(";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/slide2.jpg"), "html", null, true);
        echo ")\">
            <div class=\"carousel-caption d-none d-md-block\">
              <h3>Social Media </h3>
              <p>Estrategias para marketing y llegar a tus clientes efectivamente.</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class=\"carousel-item\" style=\"background-image: url(";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/slide4.jpg"), "html", null, true);
        echo ")\">
            <div class=\"carousel-caption d-none d-md-block\">
              <h3>Compatible con SmartPhones</h3>
              <p>No pierdas visitas, nuestros sitios web son 100% compatibles con SmartPhones
              .</p>
            </div>
          </div>
        </div>
        <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
          <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
          <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Next</span>
        </a>
      </div>
    </header>

  <!-- Portfolio Section -->
    <div class=\"container\">
      <h1 class=\"my-4\">Servicios</h2>
      <div class=\"row\">
        <div class=\"col-lg-4 col-sm-6 portfolio-item\">
          <div class=\"card h-100\">
            <a href=\"#\"><img class=\"card-img-top\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/slide1.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
            <div class=\"card-body\">
              <h4 class=\"card-title\">
                <a href=\"#\">Sitios Web</a>
              </h4>
              <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
            </div>
          </div>
        </div>
        <div class=\"col-lg-4 col-sm-6 portfolio-item\">
          <div class=\"card h-100\">
            <a href=\"#\"><img class=\"card-img-top\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/slide2.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
            <div class=\"card-body\">
              <h4 class=\"card-title\">
                <a href=\"#\">Social Networking</a>
              </h4>
              <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
          </div>
        </div>
        <div class=\"col-lg-4 col-sm-6 portfolio-item\">
          <div class=\"card h-100\">
            <a href=\"#\"><img class=\"card-img-top\" src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/slide3.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
            <div class=\"card-body\">
              <h4 class=\"card-title\">
                <a href=\"#\">Web para SmartPhones</a>
              </h4>
              <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontal/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 80,  144 => 69,  130 => 58,  102 => 33,  92 => 26,  82 => 19,  70 => 9,  61 => 8,  50 => 5,  41 => 4,  11 => 2,);
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
  Página principal
{% endblock %}
{# Contenido #}
{% block contenido %}
    <!-- SECCION DE SLIDES -->
  <header>
      <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
        </ol>
        <div class=\"carousel-inner\" role=\"listbox\">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class=\"carousel-item active\" style=\"background-image: url({{asset('img/slide1.jpg')}})\">
            <div class=\"carousel-caption d-none d-md-block\">
              <h3>Sitios Web</h3>
              <p>Llega a más gente con tu sitio web integrado con redes sociales.</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class=\"carousel-item\" style=\"background-image: url({{asset('img/slide2.jpg')}})\">
            <div class=\"carousel-caption d-none d-md-block\">
              <h3>Social Media </h3>
              <p>Estrategias para marketing y llegar a tus clientes efectivamente.</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class=\"carousel-item\" style=\"background-image: url({{asset('img/slide4.jpg')}})\">
            <div class=\"carousel-caption d-none d-md-block\">
              <h3>Compatible con SmartPhones</h3>
              <p>No pierdas visitas, nuestros sitios web son 100% compatibles con SmartPhones
              .</p>
            </div>
          </div>
        </div>
        <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
          <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
          <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Next</span>
        </a>
      </div>
    </header>

  <!-- Portfolio Section -->
    <div class=\"container\">
      <h1 class=\"my-4\">Servicios</h2>
      <div class=\"row\">
        <div class=\"col-lg-4 col-sm-6 portfolio-item\">
          <div class=\"card h-100\">
            <a href=\"#\"><img class=\"card-img-top\" src=\"{{asset('img/slide1.jpg')}}\" alt=\"\"></a>
            <div class=\"card-body\">
              <h4 class=\"card-title\">
                <a href=\"#\">Sitios Web</a>
              </h4>
              <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
            </div>
          </div>
        </div>
        <div class=\"col-lg-4 col-sm-6 portfolio-item\">
          <div class=\"card h-100\">
            <a href=\"#\"><img class=\"card-img-top\" src=\"{{asset('img/slide2.jpg')}}\" alt=\"\"></a>
            <div class=\"card-body\">
              <h4 class=\"card-title\">
                <a href=\"#\">Social Networking</a>
              </h4>
              <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
          </div>
        </div>
        <div class=\"col-lg-4 col-sm-6 portfolio-item\">
          <div class=\"card h-100\">
            <a href=\"#\"><img class=\"card-img-top\" src=\"{{asset('img/slide3.jpg')}}\" alt=\"\"></a>
            <div class=\"card-body\">
              <h4 class=\"card-title\">
                <a href=\"#\">Web para SmartPhones</a>
              </h4>
              <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->
{% endblock %}", "frontal/index.html.twig", "C:\\xampp\\htdocs\\symfony\\symfonyweb\\app\\Resources\\views\\frontal\\index.html.twig");
    }
}
