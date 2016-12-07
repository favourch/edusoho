<?php

/* TopxiaAdminBundle:Default:cloud-notice.html.twig */
class __TwigTemplate_465e15df6b5436ffb36a52587d7b788175681c69216394db4fa14c461fa8b4a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:Default:cloud-notice.html.twig", 2);
        // line 3
        if ($this->env->getExtension('topxia_web_twig')->isTrial()) {
            // line 4
            echo "  <script>
    var _hmt = _hmt || [];
  </script>
  <script charset=\"utf-8\" src=\"http://wpa.b.qq.com/cgi/wpa.php\"></script>
  <div class=\"row form-group\">
    <div class=\"help-block\">
      <p style = \"text-align: left;font-size:18px\">
        &nbsp;&nbsp;";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("欢迎使用，试用将于"), "html", null, true);
            echo " 
        <span style=\"color:#fed032;\"> 
          ";
            // line 13
            if ($this->getAttribute((isset($context["trialTime"]) ? $context["trialTime"] : null), "endTime", array(), "any", true, true)) {
                // line 14
                echo "            ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["trialTime"]) ? $context["trialTime"] : null), "endTime", array()), "Y-m-d"), "html", null, true);
                echo " 
          ";
            } else {
                // line 15
                echo " 
            ";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("未知时间"), "html", null, true);
                echo "
          ";
            }
            // line 18
            echo "        </span> 
        ";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("到期,剩余"), "html", null, true);
            echo " 
        <span style=\"color:#fed032;\">
          ";
            // line 21
            if ($this->getAttribute((isset($context["trialTime"]) ? $context["trialTime"] : null), "remainDays", array(), "any", true, true)) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trialTime"]) ? $context["trialTime"] : null), "remainDays", array()), "html", null, true);
                echo " ";
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("未知"), "html", null, true);
            }
            // line 22
            echo "        </span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("天。"), "html", null, true);
            echo "
      </p>
      <p style = \"text-align: left;font-size:18px\">
        &nbsp; ";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您可以联系销售人员购买授权版本，或者延长试用期限。"), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("电话："), "html", null, true);
            echo "0571-86819929 ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("或"), "html", null, true);
            echo " 
        <span>
          <a id=\"BizQQWPA\" href=\"javascript:\" onclick=\"_hmt.push(['_trackEvent', 'advisory', 'click', 'qq'])\" style='text-decoration:none;'>QQ：800023860 </a>。
        </span>
      </p>
    </div>
  </div>

  <script type=\"text/javascript\">
    BizQQWPA.addCustom({aty: '0', a: '0', nameAccount: 800023860, selector: 'BizQQWPA'}); 
  </script>
";
        } else {
            // line 37
            echo "  ";
            if (((array_key_exists("notices", $context)) ? (_twig_default_filter((isset($context["notices"]) ? $context["notices"] : null), false)) : (false))) {
                // line 38
                echo "    <div class=\"col-md-12\">
      <div class=\"main-system-alert\">
        <h2> ";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("站长公告"), "html", null, true);
                echo "</h2>
          <ul class=\"alert-list\">
          ";
                // line 42
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["notices"]) ? $context["notices"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["notice"]) {
                    // line 43
                    echo "            <li class=\"glyphicon glyphicon-bell\" style=\"color:#fed032;font-size:16px;\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["notice"], "detailUrl", array()), "html", null, true);
                    echo "\" style=\"margin-left:22px;\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["notice"], "content", array()), "html", null, true);
                    echo "<span>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["notice"], "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
                    echo "</span></a></li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "          </ul>
      </div>
    </div>
  ";
            }
        }
        // line 50
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:cloud-notice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 50,  126 => 45,  113 => 43,  109 => 42,  104 => 40,  100 => 38,  97 => 37,  79 => 25,  72 => 22,  64 => 21,  59 => 19,  56 => 18,  51 => 16,  48 => 15,  42 => 14,  40 => 13,  35 => 11,  26 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
