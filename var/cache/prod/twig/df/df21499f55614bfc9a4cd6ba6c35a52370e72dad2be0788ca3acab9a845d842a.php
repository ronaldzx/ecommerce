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

/* @PrestaShop/Admin/Improve/Design/Cms/Blocks/listing_panel_footer.html.twig */
class __TwigTemplate_0b12ba83711b88688e0b2bc956238f1dc1d4a7b54ce483d0ea5b91b80398e512 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
<div class=\"card-footer\">
  <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_cms_pages_index");
        echo "\" class=\"btn btn-outline-secondary\">
    <i class=\"material-icons\">arrow_back</i>
    ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Back to list", [], "Admin.Actions"), "html", null, true);
        echo "
  </a>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Cms/Blocks/listing_panel_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 29,  34 => 27,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Cms/Blocks/listing_panel_footer.html.twig", "/home2/tuquidel/public_html/ecommerce/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Cms/Blocks/listing_panel_footer.html.twig");
    }
}
