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

/* registration/registration.html.twig */
class __TwigTemplate_5ec85b2bb4d05545b90e86ded40107696c5c869403c13ddcb3499e11478c08c4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/registration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/registration.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/registration.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Enregistrer";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <style>
        fieldset
        {
            border: 1px solid #ddd !important;
            margin-top: 20px;
            xmin-width: 0;
            padding: 10px;
            position: relative;
            border-radius:4px;
            background-color:#f5f5f5;
            padding-left:10px!important;
            left: 232px;
        }

        legend
        {
            font-size:14px;
            font-weight:bold;
            margin-bottom: 0px;
            width: 35%;
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px 5px 5px 10px;
            background-color: #ffffff;
        }
        .form-group.required .control-label:after {
            content:\"*\";
            color:red;
        }
    </style>
<div class=\"container\">
        <fieldset class=\"border col-md-6\">
            <legend class=\"col-md-3\"> Login details</legend>
    ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 39, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
            <div class=\"form-group  required\">
                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 41, $this->source); })()), "username", [], "any", false, false, false, 41), 'label', ["label_attr" => ["class" => "col-sm-6 control-label requis"], "label" => "User name : "]);
        echo "
                <div class=\"col-sm-9\">
                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 43, $this->source); })()), "username", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
            </div>
            <div class=\"form-group required\">
                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 47, $this->source); })()), "password", [], "any", false, false, false, 47), 'label', ["label_attr" => ["class" => "col-sm-6 control-label requis"], "label" => "Password :"]);
        echo "
                <div class=\"col-sm-9\">
                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 49, $this->source); })()), "password", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control", "type" => "password"]]);
        echo "
                </div>
            </div>
            <div class=\"form-group required\">
                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 53, $this->source); })()), "retypePassword", [], "any", false, false, false, 53), 'label', ["label_attr" => ["class" => "col-sm-6 control-label requis"], "label" => "Retype password :"]);
        echo "
                <div class=\"col-sm-9\">
                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 55, $this->source); })()), "retypePassword", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control", "type" => "password"]]);
        echo "
                </div>
            </div>
        </fieldset>
</div>
<div class=\"container\">
    <fieldset class=\"border col-md-6\">
        <legend class=\"col-md-6\"> Personal Information</legend>
            <div class=\"content\">
                    <div class=\"form-group required\">
                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 65, $this->source); })()), "nom", [], "any", false, false, false, 65), 'label', ["label_attr" => ["class" => "col-sm-6 control-label"], "label" => "First name :"]);
        echo "
                        <div class=\"col-sm-9\">
                            ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 67, $this->source); })()), "nom", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group required\">
                        ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 71, $this->source); })()), "prenom", [], "any", false, false, false, 71), 'label', ["label_attr" => ["class" => "col-sm-6 control-label requis"], "label" => "Laste name :"]);
        echo "
                        <div class=\"col-sm-9\">
                            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 73, $this->source); })()), "prenom", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group required\">
                        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 77, $this->source); })()), "email", [], "any", false, false, false, 77), 'label', ["label_attr" => ["class" => "col-sm-6 control-label requis"], "label" => "Email adress :"]);
        echo "
                        <div class=\"col-sm-9\">
                            ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 79, $this->source); })()), "email", [], "any", false, false, false, 79), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group required\">
                        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 83, $this->source); })()), "adresse", [], "any", false, false, false, 83), 'label', ["label_attr" => ["class" => "col-sm-6 control-label requis"], "label" => "Adresse :"]);
        echo "
                        <div class=\"col-sm-9\">
                            ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 85, $this->source); })()), "adresse", [], "any", false, false, false, 85), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>
                <div class=\"form-group required\">
                    ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 89, $this->source); })()), "institution", [], "any", false, false, false, 89), 'label', ["label_attr" => ["class" => "col-sm-6 control-label "], "label" => "Institution :"]);
        echo "
                    <div class=\"col-sm-9\">
                        ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 91, $this->source); })()), "institution", [], "any", false, false, false, 91), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                </div>
                <div class=\"form-group required\">
                    <label for=\"IsValide\" class=\"col-sm-6 control-label\">Avaible as Reviewer : </label>
                    <div class=\"col-sm-9\">
                        ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 97, $this->source); })()), "isValide", [], "any", false, false, false, 97), 'widget');
        echo "
                    </div>
                </div>
            </div>

    </fieldset>
</div>

<div class=\"container\">
    <fieldset class=\"border col-md-6\">
        <legend class=\"col-md-6\"> Ereas of interest or Expertise</legend>
    </fieldset>
</div>
<div class=\"container\">
    <div class=\"form-group\">
        <button class=\"btn btn-success\" style=\"margin-left: 472px;margin-top: 18px;\" type=\"submit\" style=\"margin-top: 10px\">Submit</button>
    </div>
</div>
    ";
        // line 115
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formuser"]) || array_key_exists("formuser", $context) ? $context["formuser"] : (function () { throw new RuntimeError('Variable "formuser" does not exist.', 115, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration/registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 115,  232 => 97,  223 => 91,  218 => 89,  211 => 85,  206 => 83,  199 => 79,  194 => 77,  187 => 73,  182 => 71,  175 => 67,  170 => 65,  157 => 55,  152 => 53,  145 => 49,  140 => 47,  133 => 43,  128 => 41,  123 => 39,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Enregistrer{% endblock %}

{% block body %}
    <style>
        fieldset
        {
            border: 1px solid #ddd !important;
            margin-top: 20px;
            xmin-width: 0;
            padding: 10px;
            position: relative;
            border-radius:4px;
            background-color:#f5f5f5;
            padding-left:10px!important;
            left: 232px;
        }

        legend
        {
            font-size:14px;
            font-weight:bold;
            margin-bottom: 0px;
            width: 35%;
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px 5px 5px 10px;
            background-color: #ffffff;
        }
        .form-group.required .control-label:after {
            content:\"*\";
            color:red;
        }
    </style>
<div class=\"container\">
        <fieldset class=\"border col-md-6\">
            <legend class=\"col-md-3\"> Login details</legend>
    {{ form_start(formuser, {'attr': {'novalidate': 'novalidate'}}) }}
            <div class=\"form-group  required\">
                {{ form_label(formuser.username, \"User name : \", {'label_attr': {'class': 'col-sm-6 control-label requis'}}) }}
                <div class=\"col-sm-9\">
                    {{ form_widget(formuser.username,{'attr':{'class':'form-control'}}) }}
                </div>
            </div>
            <div class=\"form-group required\">
                {{ form_label(formuser.password, \"Password :\", {'label_attr': {'class': 'col-sm-6 control-label requis'}}) }}
                <div class=\"col-sm-9\">
                    {{ form_widget(formuser.password,{'attr':{'class':'form-control', 'type': 'password'}}) }}
                </div>
            </div>
            <div class=\"form-group required\">
                {{ form_label(formuser.retypePassword, \"Retype password :\", {'label_attr': {'class': 'col-sm-6 control-label requis'}}) }}
                <div class=\"col-sm-9\">
                    {{ form_widget(formuser.retypePassword,{'attr':{'class':'form-control', 'type': 'password'}}) }}
                </div>
            </div>
        </fieldset>
</div>
<div class=\"container\">
    <fieldset class=\"border col-md-6\">
        <legend class=\"col-md-6\"> Personal Information</legend>
            <div class=\"content\">
                    <div class=\"form-group required\">
                        {{ form_label(formuser.nom, \"First name :\", {'label_attr': {'class': 'col-sm-6 control-label'}}) }}
                        <div class=\"col-sm-9\">
                            {{ form_widget(formuser.nom,{'attr':{'class':'form-control'}}) }}
                        </div>
                    </div>
                    <div class=\"form-group required\">
                        {{ form_label(formuser.prenom, \"Laste name :\", {'label_attr': {'class': 'col-sm-6 control-label requis'}}) }}
                        <div class=\"col-sm-9\">
                            {{ form_widget(formuser.prenom,{'attr':{'class':'form-control'}}) }}
                        </div>
                    </div>
                    <div class=\"form-group required\">
                        {{ form_label(formuser.email, \"Email adress :\", {'label_attr': {'class': 'col-sm-6 control-label requis'}}) }}
                        <div class=\"col-sm-9\">
                            {{ form_widget(formuser.email,{'attr':{'class':'form-control'}}) }}
                        </div>
                    </div>
                    <div class=\"form-group required\">
                        {{ form_label(formuser.adresse, \"Adresse :\", {'label_attr': {'class': 'col-sm-6 control-label requis'}}) }}
                        <div class=\"col-sm-9\">
                            {{ form_widget(formuser.adresse,{'attr':{'class':'form-control'}}) }}
                        </div>
                    </div>
                <div class=\"form-group required\">
                    {{ form_label(formuser.institution, \"Institution :\", {'label_attr': {'class': 'col-sm-6 control-label '}}) }}
                    <div class=\"col-sm-9\">
                        {{ form_widget(formuser.institution,{'attr':{'class':'form-control'}}) }}
                    </div>
                </div>
                <div class=\"form-group required\">
                    <label for=\"IsValide\" class=\"col-sm-6 control-label\">Avaible as Reviewer : </label>
                    <div class=\"col-sm-9\">
                        {{ form_widget(formuser.isValide) }}
                    </div>
                </div>
            </div>

    </fieldset>
</div>

<div class=\"container\">
    <fieldset class=\"border col-md-6\">
        <legend class=\"col-md-6\"> Ereas of interest or Expertise</legend>
    </fieldset>
</div>
<div class=\"container\">
    <div class=\"form-group\">
        <button class=\"btn btn-success\" style=\"margin-left: 472px;margin-top: 18px;\" type=\"submit\" style=\"margin-top: 10px\">Submit</button>
    </div>
</div>
    {{ form_end(formuser) }}
{% endblock %}
", "registration/registration.html.twig", "/application/templates/registration/registration.html.twig");
    }
}
