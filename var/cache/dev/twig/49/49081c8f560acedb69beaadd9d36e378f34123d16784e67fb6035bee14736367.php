<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Improve/Design/Cms/Blocks/form.html.twig */
class __TwigTemplate_69e3bb520997beb80057bf4924549507deb7af3bb493889bbd13afbeb97d9075 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'cms_page_form_rest' => [$this, 'block_cms_page_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Cms/Blocks/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Cms/Blocks/form.html.twig"));

        // line 25
        echo "
";
        // line 26
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Improve/Design/Cms/Blocks/form.html.twig", 26)->unwrap();
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["cmsPageForm"] ?? $this->getContext($context, "cmsPageForm")), 'form_start');
        echo "
  <div class=\"card\">
    <div class=\"card-header\">
      ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Page", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
    </div>
    <div class=\"card-block row\">
      <div class=\"card-text\">
        ";
        // line 35
        $this->displayBlock('cms_page_form_rest', $context, $blocks);
        // line 38
        echo "      </div>
    </div>

    <div class=\"card-footer\">
      <div class=\"d-inline-flex\">
        <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_cms_pages_index", ["id_cms_category" => ($context["cmsCategoryParentId"] ?? $this->getContext($context, "cmsCategoryParentId"))]), "html", null, true);
        echo "\" class=\"btn btn-outline-secondary\">
          ";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
        </a>
      </div>

      <div class=\"d-inline-flex float-right\">
        <button type=\"submit\" class=\"btn btn-primary\" name=\"save-and-preview\">
        ";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save and preview", [], "Admin.Actions"), "html", null, true);
        echo "
      </button>

      <button type=\"submit\" class=\"btn btn-primary ml-3\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
    </div>
  </div>

</div>
";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["cmsPageForm"] ?? $this->getContext($context, "cmsPageForm")), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 35
    public function block_cms_page_form_rest($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_page_form_rest"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_page_form_rest"));

        // line 36
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["cmsPageForm"] ?? $this->getContext($context, "cmsPageForm")), 'rest');
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Cms/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 36,  106 => 35,  94 => 58,  86 => 53,  80 => 50,  71 => 44,  67 => 43,  60 => 38,  58 => 35,  51 => 31,  45 => 28,  42 => 27,  40 => 26,  37 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 *#}

{% import '@PrestaShop/Admin/macros.html.twig' as ps %}

{{ form_start(cmsPageForm) }}
  <div class=\"card\">
    <div class=\"card-header\">
      {{ 'Page'|trans({}, 'Admin.Shopparameters.Feature') }}
    </div>
    <div class=\"card-block row\">
      <div class=\"card-text\">
        {% block cms_page_form_rest %}
          {{ form_rest(cmsPageForm) }}
        {% endblock %}
      </div>
    </div>

    <div class=\"card-footer\">
      <div class=\"d-inline-flex\">
        <a href=\"{{ path('admin_cms_pages_index', {'id_cms_category' : cmsCategoryParentId}) }}\" class=\"btn btn-outline-secondary\">
          {{ 'Cancel'|trans({}, 'Admin.Actions') }}
        </a>
      </div>

      <div class=\"d-inline-flex float-right\">
        <button type=\"submit\" class=\"btn btn-primary\" name=\"save-and-preview\">
        {{ 'Save and preview'|trans({}, 'Admin.Actions') }}
      </button>

      <button type=\"submit\" class=\"btn btn-primary ml-3\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
    </div>
  </div>

</div>
{{ form_end(cmsPageForm) }}
", "@PrestaShop/Admin/Improve/Design/Cms/Blocks/form.html.twig", "C:\\wamp64\\www\\susu\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\Design\\Cms\\Blocks\\form.html.twig");
    }
}
