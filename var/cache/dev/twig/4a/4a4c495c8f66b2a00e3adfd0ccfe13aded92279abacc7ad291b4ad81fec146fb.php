<?php

/* frontal/servicios.html.twig */
class __TwigTemplate_384f5277951600d05f31095f814bb5645d263445fcffd92dfc47647da12264c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "frontal/servicios.html.twig", 2);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontal/servicios.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontal/servicios.html.twig"));

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
        echo "<!-- Page Content -->
<div class=\"container\">
    <!-- Page Heading/Breadcrumbs -->
    <h1 class=\"mt-4 mb-3\">Nuestros
    <small>Servicios</small>
    </h1>

<!-- Servicio Popayan -->
";
        // line 17
        if (((($context["sitio"] ?? $this->getContext($context, "sitio")) == "pop") || (($context["sitio"] ?? $this->getContext($context, "sitio")) == "todos"))) {
            // line 18
            echo "
<div class=\"row\">
<!-- Map Column -->
<div class=\"col-lg-8 mb-4\">
    <!-- Embedded Google Map -->
    <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15944.71098408522!2d-76.60069851114503!3d2.4478175810008618!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8d3ad6fd0bf92cea!2sUrbanizaci%C3%B3n+Pomona!5e0!3m2!1ses-419!2sco!4v1537570693541\" width=\"550\" height=\"250\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
</div>
<!-- Contact Details Column -->
<div class=\"col-lg-4 mb-4\">
    <h3>Contact Details</h3>
    <p>
    3481 Pomona
    <br>Popayan, CO 91000
    <br>
    </p>
    <p>
    <abbr title=\"Phone\">P</abbr>: (123) 456-7890
    </p>
    <p>
    <abbr title=\"Email\">E</abbr>:
    <a href=\"mailto:name@example.com\">name@example.com
    </a>
    </p>
    <p>
    <abbr title=\"Hours\">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM
    </p>
</div>
</div>
";
        }
        // line 47
        echo "<!-- MAPA -->

<!-- Servicio Cali -->
";
        // line 50
        if (((($context["sitio"] ?? $this->getContext($context, "sitio")) == "cal") || (($context["sitio"] ?? $this->getContext($context, "sitio")) == "todos"))) {
            // line 51
            echo "
<div class=\"row\">
<!-- Map Column -->
<div class=\"col-lg-8 mb-4\">
    <!-- Embedded Google Map -->
    <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.7243018489125!2d-76.53522478538979!3d3.417209447512693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e30a6bbb78c308d%3A0xed40877f9106c442!2sPasoancho%2C+Cali%2C+Valle+del+Cauca!5e0!3m2!1ses-419!2sco!4v1537570740510\" width=\"550\" height=\"250\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
</div>
<!-- Contact Details Column -->
<div class=\"col-lg-4 mb-4\">
    <h3>Contact Details</h3>
    <p>
    3481 Paso Ancho
    <br>Cali, CO 90210
    <br>
    </p>
    <p>
    <abbr title=\"Phone\">P</abbr>: (123) 456-7890
    </p>
    <p>
    <abbr title=\"Email\">E</abbr>:
    <a href=\"mailto:name@example.com\">name@example.com
    </a>
    </p>
    <p>
    <abbr title=\"Hours\">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM
    </p>
</div>
</div>
";
        }
        // line 80
        echo "<!-- MAPA -->

<!-- Servicio Bogota -->
";
        // line 83
        if (((($context["sitio"] ?? $this->getContext($context, "sitio")) == "bog") || (($context["sitio"] ?? $this->getContext($context, "sitio")) == "todos"))) {
            // line 84
            echo "
<div class=\"row\">
<!-- Map Column -->
<div class=\"col-lg-8 mb-4\">
    <!-- Embedded Google Map -->
    <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7953.326238843921!2d-74.11799657643189!3d4.65403038647709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9b8e3f0b6cd7%3A0x2751387a49099904!2sCiudad+Salitre%2C+Bogot%C3%A1!5e0!3m2!1ses-419!2sco!4v1537570799735\" width=\"550\" height=\"250\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
</div>
<!-- Contact Details Column -->
<div class=\"col-lg-4 mb-4\">
    <h3>Contact Details</h3>
    <p>
    3481 Ciudad Salitre
    <br>Bogota, CO 90210
    <br>
    </p>
    <p>
    <abbr title=\"Phone\">P</abbr>: (123) 456-7890
    </p>
    <p>
    <abbr title=\"Email\">E</abbr>:
    <a href=\"mailto:name@example.com\">name@example.com
    </a>
    </p>
    <p>
    <abbr title=\"Hours\">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM
    </p>
</div>
</div>
";
        }
        // line 113
        echo "<!-- MAPA -->

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontal/servicios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 113,  158 => 84,  156 => 83,  151 => 80,  120 => 51,  118 => 50,  113 => 47,  82 => 18,  80 => 17,  70 => 9,  61 => 8,  50 => 5,  41 => 4,  11 => 2,);
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
{# Contenido #}
{% block contenido %}
<!-- Page Content -->
<div class=\"container\">
    <!-- Page Heading/Breadcrumbs -->
    <h1 class=\"mt-4 mb-3\">Nuestros
    <small>Servicios</small>
    </h1>

<!-- Servicio Popayan -->
{% if sitio=='pop' or sitio=='todos'%}

<div class=\"row\">
<!-- Map Column -->
<div class=\"col-lg-8 mb-4\">
    <!-- Embedded Google Map -->
    <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15944.71098408522!2d-76.60069851114503!3d2.4478175810008618!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8d3ad6fd0bf92cea!2sUrbanizaci%C3%B3n+Pomona!5e0!3m2!1ses-419!2sco!4v1537570693541\" width=\"550\" height=\"250\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
</div>
<!-- Contact Details Column -->
<div class=\"col-lg-4 mb-4\">
    <h3>Contact Details</h3>
    <p>
    3481 Pomona
    <br>Popayan, CO 91000
    <br>
    </p>
    <p>
    <abbr title=\"Phone\">P</abbr>: (123) 456-7890
    </p>
    <p>
    <abbr title=\"Email\">E</abbr>:
    <a href=\"mailto:name@example.com\">name@example.com
    </a>
    </p>
    <p>
    <abbr title=\"Hours\">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM
    </p>
</div>
</div>
{% endif %}
<!-- MAPA -->

<!-- Servicio Cali -->
{% if sitio=='cal' or sitio=='todos'%}

<div class=\"row\">
<!-- Map Column -->
<div class=\"col-lg-8 mb-4\">
    <!-- Embedded Google Map -->
    <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.7243018489125!2d-76.53522478538979!3d3.417209447512693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e30a6bbb78c308d%3A0xed40877f9106c442!2sPasoancho%2C+Cali%2C+Valle+del+Cauca!5e0!3m2!1ses-419!2sco!4v1537570740510\" width=\"550\" height=\"250\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
</div>
<!-- Contact Details Column -->
<div class=\"col-lg-4 mb-4\">
    <h3>Contact Details</h3>
    <p>
    3481 Paso Ancho
    <br>Cali, CO 90210
    <br>
    </p>
    <p>
    <abbr title=\"Phone\">P</abbr>: (123) 456-7890
    </p>
    <p>
    <abbr title=\"Email\">E</abbr>:
    <a href=\"mailto:name@example.com\">name@example.com
    </a>
    </p>
    <p>
    <abbr title=\"Hours\">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM
    </p>
</div>
</div>
{% endif %}
<!-- MAPA -->

<!-- Servicio Bogota -->
{% if sitio=='bog' or sitio=='todos'%}

<div class=\"row\">
<!-- Map Column -->
<div class=\"col-lg-8 mb-4\">
    <!-- Embedded Google Map -->
    <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7953.326238843921!2d-74.11799657643189!3d4.65403038647709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9b8e3f0b6cd7%3A0x2751387a49099904!2sCiudad+Salitre%2C+Bogot%C3%A1!5e0!3m2!1ses-419!2sco!4v1537570799735\" width=\"550\" height=\"250\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
</div>
<!-- Contact Details Column -->
<div class=\"col-lg-4 mb-4\">
    <h3>Contact Details</h3>
    <p>
    3481 Ciudad Salitre
    <br>Bogota, CO 90210
    <br>
    </p>
    <p>
    <abbr title=\"Phone\">P</abbr>: (123) 456-7890
    </p>
    <p>
    <abbr title=\"Email\">E</abbr>:
    <a href=\"mailto:name@example.com\">name@example.com
    </a>
    </p>
    <p>
    <abbr title=\"Hours\">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM
    </p>
</div>
</div>
{% endif %}
<!-- MAPA -->

</div>
{% endblock %}", "frontal/servicios.html.twig", "C:\\xampp2\\htdocs\\symphony34\\example1\\app\\Resources\\views\\frontal\\servicios.html.twig");
    }
}
