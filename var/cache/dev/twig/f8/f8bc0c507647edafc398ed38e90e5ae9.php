<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* ver/index.html.twig */
class __TwigTemplate_a4ad789071533b236916ccd2aa487f45 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ver/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ver/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ver/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello VerController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "<style> 
table {
    width:100vw;
    border-spacing:0;
}
.boton { 
    width: 80px;
    height: 50px;
  background-color:red;
  border-radius: 10px;
  display:flex;
  justify-content: center;
  align-items: center;
  
}

a:link, a:visited {
    text-decoration: none;
    cursor: pointer;
    color:blue;
}
.boton:hover {
    background-color:yellow;
    transition:all 0.5s ease-out;
    cursor:pointer;
    transform: translateY(10px);
}
.contenedor {
    
    display:flex;
    justify-content:center;
  width:100vw;
}

</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 43
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo "
<table border='1'>
<tr>
<th> Nombre</th>
<th>Correo</th>
<th>Telefono</th>
<th>Tipo_de_Proveedor</th>
<th>Estado</th>
<th>Eliminar</th>
<th>Editar</th>

";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["conjunto"]) || array_key_exists("conjunto", $context) ? $context["conjunto"] : (function () { throw new RuntimeError('Variable "conjunto" does not exist.', 55, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 56
            echo "
<tr>
<td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "Nombre", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
<td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "Correoelectronico", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
<td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "TelefonodeContacto", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
<td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "TipodeProveedor", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
<td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "Estado", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
<td>
<a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_borrar", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\">eliminiar</a>
</td>
<td>
<a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modificando", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 67)]), "html", null, true);
            echo "\">Editar</a>
</td>

</tr>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "
</table>
<div class=\"contenedor\">
<div class=\"boton\">
<a href=\"/\">Añadir</a>
</div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "ver/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 73,  192 => 67,  186 => 64,  181 => 62,  177 => 61,  173 => 60,  169 => 59,  165 => 58,  161 => 56,  157 => 55,  144 => 44,  134 => 43,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello VerController!{% endblock %}

{% block stylesheets %}
<style> 
table {
    width:100vw;
    border-spacing:0;
}
.boton { 
    width: 80px;
    height: 50px;
  background-color:red;
  border-radius: 10px;
  display:flex;
  justify-content: center;
  align-items: center;
  
}

a:link, a:visited {
    text-decoration: none;
    cursor: pointer;
    color:blue;
}
.boton:hover {
    background-color:yellow;
    transition:all 0.5s ease-out;
    cursor:pointer;
    transform: translateY(10px);
}
.contenedor {
    
    display:flex;
    justify-content:center;
  width:100vw;
}

</style>
{% endblock %}

{% block body %}

<table border='1'>
<tr>
<th> Nombre</th>
<th>Correo</th>
<th>Telefono</th>
<th>Tipo_de_Proveedor</th>
<th>Estado</th>
<th>Eliminar</th>
<th>Editar</th>

{% for i in conjunto %}

<tr>
<td>{{i.Nombre}}</td>
<td>{{i.Correoelectronico}}</td>
<td>{{i.TelefonodeContacto}}</td>
<td>{{i.TipodeProveedor}}</td>
<td>{{i.Estado}}</td>
<td>
<a href=\"{{ path('app_borrar',{id:i.id})}}\">eliminiar</a>
</td>
<td>
<a href=\"{{ path('modificando',{id:i.id})}}\">Editar</a>
</td>

</tr>

{% endfor %}

</table>
<div class=\"contenedor\">
<div class=\"boton\">
<a href=\"/\">Añadir</a>
</div>
</div>
{% endblock %}
", "ver/index.html.twig", "C:\\xampp\\htdocs\\proyecto_symfony\\templates\\ver\\index.html.twig");
    }
}
