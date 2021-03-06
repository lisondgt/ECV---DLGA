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

/* actualites/press.html.twig */
class __TwigTemplate_35fadeb6dbd0ad0c881b7a24d38824f4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "actualites/press.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "actualites/press.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "actualites/press.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "DLGA - Articles de press";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"actualites-press-page\">
        <div class=\"container\">
            <nav style=\"--bs-breadcrumb-divider: '|';\" aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\" aria-current=\"page\"><a href=\"/\">Page d'accueil</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\"><span>Dans la presse</span></li>
                </ol>
            </nav>
            <div class=\"header\">
                <div class=\"content-title\">
                    <h3 class=\"text-book-24 text-grey-darker subtitle-header\">Dans la press</h3>
                    <h1 class=\"title-medium-64 text-grey-text\">
                        Nos collaborateurs sont aussi dans la <span class=\"fst-italic\">presse ??crite</span> !
                    </h1>
                </div>
                <div class=\"content-scrolldown\">
                    <a href=\"#anchor-scrolldown\" class=\"scrolldown\">
                        <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/arrow-down-grey-dark.svg"), "html", null, true);
        echo "\" class=\"icon-arrow-down\">
                    </a>
                </div>
            </div>
        </div>

        <div id=\"anchor-scrolldown\"></div>

        <div class=\"list-container\">
            <a href=\"#\" class=\"list-element-link\" data-bs-toggle=\"modal\"
               data-bs-target=\"#pressModal1\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo "\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Vers une meilleure gestion des crises - Analyse
                            juridique</h2>
                        <span class=\"show-hover decouvrir-link\">D??couvrir</span>
                    </div>
                </div>
            </a>
            <div class=\"modal fade modal-press\" id=\"pressModal1\" tabindex=\"-1\"
                 aria-labelledby=\"pressModal1Label\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title title-medium-40 text-grey-text\"
                                id=\"pressModal1Label\">Vers une meilleure gestion des crises - Analyse juridique</h5>
                            <a href=\"\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
                                Fermer
                            </a>
                        </div>
                        <div class=\"modal-body\">
                            <div class=\"content-left\">
                                <img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"content-right\">
                                <p class=\"text-book-18 text-grey-darker\">
                                    La proposition de loi port??e par le d??put?? Fabien Matras visant ?? consolider le
                                    mod??le de s??curit?? civile et valoriser les pompiers profes- sionnels et volontaires
                                    a ??t?? d??finitive- ment adopt??e le 16 novembre 2021. Cette loi a vocation ?? r??pondre
                                    aux ?? d??fis auxquels nous faisons face ?? et ?? adapter notre mod??le pour r??pondre
                                    davantage aux besoins actuels.
                                </p>
                                <p class=\"text-book-18 text-grey-darker\">
                                    En effet, par exemple, en mati??re de risques technologiques, il est apparu, lors de
                                    la commission d???enqu??te s??na- toriale sur l???incendie de l???usine Lubrizol ?? Rouen,
                                    que 10 % de la population interrog??e affirme savoir r??agir si un accident se produit
                                    pr??s de chez elle et 62 % des ??lus font part d???un manque d???information sur les
                                    risques indus- triels. Cela est d???autant plus domma- geable que les premi??res heures
                                    sont d??cisives dans la gestion de crise.
                                </p>
                                <p class=\"text-book-18 text-grey-darker\">
                                    La loi apporte une nouvelle envergure ?? la coop??ration locale en mati??re de
                                    pr??vention, renforce les synergies, l???efficacit?? des diff??rents intervenants et
                                    adapte les outils. C???est d???ailleurs en ce sens qu'elle indique que la direc- tion
                                    des op??rations est assur??e par le repr??sentant de l?????tat dans le d??parte- ment
                                    (article 12), qu???un correspondant incendie et secours sera cr???? comme interlocuteur
                                    privil??gi?? du service d??partemental ou territorial d???incendie et de secours dans la
                                    commune. De nouvelles r??gles ont ??t?? instaur??es concernant les plans communaux et
                                    intercommunaux de sauvegarde pour accro??tre leur existence et renforcer leur
                                    efficacit?? afin d???enrichir la gestion de crise.
                                    Plan communal de sauvegarde
                                    Cr???? par l???article 13 de la loi n?? 2004- 811 du 13 ao??t 2004, le plan communal de
                                    sauvegarde (PCS) est l'outil de plani- fication permettant ?? une commune d'organiser
                                    et de mettre en ??uvre les moyens d'information, de formation, d'alerte, de
                                    sauvegarde et de soutien aux populations pour faire face ?? des crises et ?? des
                                    ??v??nements de s??curit?? civile divers (inondations, ??pisodes neigeux, canicules,
                                    accident de trans- port de mati??res dangereuses, etc.). M??me si le PCS ne cr??e aucun
                                    moyen suppl??mentaire, il recense les moyens existants pour offrir une r??ponse orga-
                                    nis??e et adapt??e lors de la survenance d???une crise.
                                </p>
                                <p class=\"text-book-18 text-grey-darker\">
                                    La loi avait instaur?? une obligation de r??aliser un tel document pour les communes
                                    consid??r??es tr??s expo- s??es ?? un risque. Ainsi, l???obligation de r??aliser un PCS
                                    concernait auparavant les communes dot??es d???un plan de pr??vention des risques
                                    naturels pr??vi- sibles approuv?? (PPRNP) ou comprises dans le champ d???application
                                    d???un plan particulier d???intervention (PPI) dans le cadre du plan Orsec (organisation
                                    de la r??ponse de s??curit?? civile, ndlr).
                                    M??me si toutes les communes souhai- tant renforcer la r??silience des terri- toires
                                    peuvent volontairement se doter d???un PCS, en pratique, en raison du co??t que
                                    celui-ci peut repr??senter pour certaines collectivit??s, ces cas sont rares. Ainsi,
                                    en 2015, le minist??re de l???Int??rieur indiquait que seuls les deux tiers des communes
                                    soumises ?? l???obligation d?????laborer un PCS l???avaient adopt??.
                                    La loi a dor??navant ??tendu le champ d???application de l???obligation de r??aliser un PCS
                                    au regard de l???utilit?? d???un tel document lors de la survenance d???une crise. En ce
                                    sens, l???obligation d?????tablis- sement d???un PCS est applicable sur de nombreuses
                                    nouvelles zones (1), concern??es par un risque sp??cifique, tel que, par exemple, les
                                    territoires ?? risque important d'inondation (2). L???article L.731-1 du code de la
                                    s??curit?? int??rieure pr??voyait, dans sa version ant??rieure ?? la loi Matras, qu???un
                                    plan intercommunal de sauvegarde (PICS) pouvait ?? ??tre ??tabli en lieu et place du
                                    plan communal de sauvegarde ??, de mani??re donc facultative. Dans une contribution
                                    ??crite, la Direction g??n??rale de la s??curit?? civile et de la gestion des crises
                                    (DGSCGC) a indiqu?? aux rapporteurs qu???elle a constat?? que ?? les PICS ont d??montr??
                                    leur utilit?? l?? o?? ils ont ??t?? cr????s ?? et que ?? les Sdis [services d??partemen- taux
                                    d'incendie et de secours, ndlr] de ces d??partements ont reconnu l???utilit?? de ces
                                    dispositifs tant dans la pr??pa- ration ?? la gestion de crise que dans la r??ponse
                                    d???urgence ??.
                                </p>
                                <p class=\"text-book-18 text-grey-darker\">
                                    Les PICS ne sont donc pas une nouveaut?? mais l?????volution tient en leur caract??re
                                    dor??navant obli- gatoire. Codifi?? dans un nouvel article L.731-4 qui modifie
                                    significati- vement les dispositions applicables au PICS, il est instaur?? que ce
                                    plan est d??sormais obligatoire pour tous les EPCI dont au moins une commune membre
                                    est tenue d?????laborer un PCS. Ce changement n???est pas anodin puisqu???il concernerait,
                                    selon la DGSCGC, 1 125 ??tablissements publics de coop??ration intercom- munale ??
                                    fiscalit?? propre (EPCI-FP) sur 1 270. Leur r??le, jusqu????? maintenant marginal en
                                    mati??re de s??curit?? civile, va donc ??voluer.
                                    Le choix de l?????chelle de l???EPCI r??pond ?? la volont?? de proposer une r??ponse
                                    effective et efficace d??passant le seul rayon d???action de la commune lorsqu???un
                                    sinistre d???ampleur touche une commune. En effet, il est rare que celui-ci n???ait pas
                                    d???impact sur les communes voisines.
                                </p>
                                <p class=\"text-book-18 text-grey-darker\">
                                    L???objectif est ?? de pr??parer la r??ponse aux situations de crise en organisant, a
                                    minima, la mobilisation des capa- cit??s intercommunales au profit de la ou des
                                    communes concern??es, la mutualisation des capacit??s commu- nales ainsi que le
                                    r??tablissement des comp??tences ou int??r??ts commu- nautaires ?? (3). Les EPCI
                                    concern??s ont jusqu???en d??cembre 2026 pour ??laborer le PICS.
                                    R??partition et partage des comp??tences
                                    Cr???? par l???article 13 de la loi n?? 2004- 811 du 13 ao??t 2004, le plan communal de
                                    sauvegarde (PCS) est l'outil de plani- fication permettant ?? une commune d'organiser
                                    et de mettre en ??uvre les moyens d'information, de formation, d'alerte, de
                                    sauvegarde et de soutien aux populations pour faire face ?? des crises et ?? des
                                    ??v??nements de s??curit?? civile divers (inondations, ??pisodes neigeux, canicules,
                                    accident de trans- port de mati??res dangereuses, etc.). M??me si le PCS ne cr??e aucun
                                    moyen suppl??mentaire, il recense les moyens existants pour offrir une r??ponse orga-
                                    nis??e et adapt??e lors de la survenance d???une crise.
                                </p>
                                <p class=\"text-book-18 text-grey-darker\">
                                    La loi avait instaur?? une obligation de r??aliser un tel document pour les communes
                                    consid??r??es tr??s expo- s??es ?? un risque. Ainsi, l???obligation de r??aliser un PCS
                                    concernait auparavant les communes dot??es d???un plan de pr??vention des risques
                                    naturels pr??vi- sibles approuv?? (PPRNP) ou comprises dans le champ d???application
                                    d???un plan particulier d???intervention (PPI) dans le cadre du plan Orsec (organisation
                                    de la r??ponse de s??curit?? civile, ndlr).
                                    M??me si toutes les communes souhai- tant renforcer la r??silience des terri- toires
                                    peuvent volontairement se doter d???un PCS, en pratique, en raison du co??t que
                                    celui-ci peut repr??senter pour certaines collectivit??s, ces cas sont rares. Ainsi,
                                    en 2015, le minist??re de l???Int??rieur indiquait que seuls les deux tiers des communes
                                    soumises ?? l???obligation d?????laborer un PCS l???avaient adopt??.
                                    La loi a dor??navant ??tendu le champ d???application de l???obligation de r??aliser un PCS
                                    au regard de l???utilit?? d???un tel document lors de la survenance d???une crise.
                                </p>
                                <p class=\"text-book-18 text-grey-darker\">
                                    En ce sens, l???obligation d?????tablis- sement d???un PCS est applicable sur de nombreuses
                                    nouvelles zones (1), concern??es par un risque sp??cifique, tel que, par exemple, les
                                    territoires ?? risque important d'inondation (2). L???article L.731-1 du code de la
                                    s??curit?? int??rieure pr??voyait, dans sa version ant??rieure ?? la loi Matras, qu???un
                                    plan intercommunal de sauvegarde (PICS) pouvait ?? ??tre ??tabli en lieu et place du
                                    plan communal de sauvegarde ??, de mani??re donc facultative. Dans une contribution
                                    ??crite, la Direction g??n??rale de la s??curit?? civile et de la gestion des crises
                                    (DGSCGC) a indiqu?? aux rapporteurs qu???elle a constat?? que ?? les PICS ont d??montr??
                                    leur utilit?? l?? o?? ils ont ??t?? cr????s ?? et que ?? les Sdis [services d??partemen- taux
                                    d'incendie et de secours, ndlr] de ces d??partements ont reconnu l???utilit?? de ces
                                    dispositifs tant dans la pr??pa- ration ?? la gestion de crise que dans la r??ponse
                                    d???urgence ??.
                                </p>
                                <p class=\"text-book-18 text-grey-darker\">
                                    Les PICS ne sont donc pas une nouveaut?? mais l?????volution tient en leur caract??re
                                    dor??navant obli- gatoire. Codifi?? dans un nouvel article L.731-4 qui modifie
                                    significati- vement les dispositions applicables au PICS, il est instaur?? que ce
                                    plan est d??sormais obligatoire pour tous les EPCI dont au moins une commune membre
                                    est tenue d?????laborer un PCS. Ce changement n???est pas anodin puisqu???il concernerait,
                                    selon la DGSCGC, 1 125 ??tablissements publics de coop??ration intercom- munale ??
                                    fiscalit?? propre (EPCI-FP) sur 1 270. Leur r??le, jusqu????? maintenant marginal en
                                    mati??re de s??curit?? civile, va donc ??voluer.
                                    Le choix de l?????chelle de l???EPCI r??pond ?? la volont?? de proposer une r??ponse
                                    effective et efficace d??passant le seul rayon d???action de la commune lorsqu???un
                                    sinistre d???ampleur touche une commune. En effet, il est rare que celui-ci n???ait pas
                                    d???impact sur les communes voisines.
                                </p>
                                <p class=\"text-book-18 text-grey-darker\">
                                    L???objectif est ?? de pr??parer la r??ponse aux situations de crise en organisant, a
                                    minima, la mobilisation des capa- cit??s intercommunales au profit de la ou des
                                    communes concern??es, la mutualisation des capacit??s commu- nales ainsi que le
                                    r??tablissement des comp??tences ou int??r??ts commu- nautaires ?? (3). Les EPCI
                                    concern??s ont jusqu???en d??cembre 2026 pour ??laborer le PICS.
                                    Par Johanna Leplanois, Avocate associ??e au sein du cabinet DLGA
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo "\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Entretien avec Johanna Leplanois - R??glementation
                            Littoral</h2>
                        <span class=\"show-hover decouvrir-link\">D??couvrir</span>
                    </div>
                </div>
            </a>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo "\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">??valuation environnnementale - BL.L??gibase
                            Urbanisme</h2>
                        <span class=\"show-hover decouvrir-link\">D??couvrir</span>
                    </div>
                </div>
            </a>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo "\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Un nouveau r??gime Cat Nat entre deux eaux - Johanna
                            Leplanois</h2>
                        <span class=\"show-hover decouvrir-link\">D??couvrir</span>
                    </div>
                </div>
            </a>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo "\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Urbanisme - Recul du trait de c??te - Johanna
                            Leplanois</h2>
                        <span class=\"show-hover decouvrir-link\">D??couvrir</span>
                    </div>
                </div>
            </a>
        </div>

        <div class=\"section-two\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12 col-lg-3 col-left\">
                        <p class=\"text-book-18 text-grey-darker\">Table-ronde</p>
                    </div>
                    <div class=\"col-12 col-lg-9 col-right\">
                        <p class=\"title-medium-64 text-grey-text\">
                            D??couvrez nos derni??res <span class=\"fst-italic\">interventions</span>,
                            <span class=\"fst-italic\">conf??rences</span> et <span class=\"fst-italic\">table-ronde</span>
                            ci-dessous
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "actualites/press.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 238,  329 => 228,  316 => 218,  303 => 208,  146 => 54,  123 => 34,  107 => 21,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}DLGA - Articles de press{% endblock %}
{% block body %}
    <div class=\"actualites-press-page\">
        <div class=\"container\">
            <nav style=\"--bs-breadcrumb-divider: '|';\" aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\" aria-current=\"page\"><a href=\"/\">Page d'accueil</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\"><span>Dans la presse</span></li>
                </ol>
            </nav>
            <div class=\"header\">
                <div class=\"content-title\">
                    <h3 class=\"text-book-24 text-grey-darker subtitle-header\">Dans la press</h3>
                    <h1 class=\"title-medium-64 text-grey-text\">
                        Nos collaborateurs sont aussi dans la <span class=\"fst-italic\">presse ??crite</span> !
                    </h1>
                </div>
                <div class=\"content-scrolldown\">
                    <a href=\"#anchor-scrolldown\" class=\"scrolldown\">
                        <img src=\"{{ asset('images/arrow-down-grey-dark.svg') }}\" class=\"icon-arrow-down\">
                    </a>
                </div>
            </div>
        </div>

        <div id=\"anchor-scrolldown\"></div>

        <div class=\"list-container\">
            <a href=\"#\" class=\"list-element-link\" data-bs-toggle=\"modal\"
               data-bs-target=\"#pressModal1\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"{{ asset('images/image-default.png') }}\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Vers une meilleure gestion des crises - Analyse
                            juridique</h2>
                        <span class=\"show-hover decouvrir-link\">D??couvrir</span>
                    </div>
                </div>
            </a>
            <div class=\"modal fade modal-press\" id=\"pressModal1\" tabindex=\"-1\"
                 aria-labelledby=\"pressModal1Label\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title title-medium-40 text-grey-text\"
                                id=\"pressModal1Label\">Vers une meilleure gestion des crises - Analyse juridique</h5>
                            <a href=\"\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
                                Fermer
                            </a>
                        </div>
                        <div class=\"modal-body\">
                            <div class=\"content-left\">
                                <img src=\"{{ asset('images/image-default.png') }}\">
                            </div>
                            <div class=\"content-right\">
                                <p class=\"text-book-18 text-grey-darker\">
                                    La proposition de loi port??e par le d??put?? Fabien Matras visant ?? consolider le
                                    mod??le de s??curit?? civile et valoriser les pompiers profes- sionnels et volontaires
                                    a ??t?? d??finitive- ment adopt??e le 16 novembre 2021. Cette loi a vocation ?? r??pondre
                                    aux ?? d??fis auxquels nous faisons face ?? et ?? adapter notre mod??le pour r??pondre
                                    davantage aux besoins actuels.
                                </p>
                                <p class=\"text-book-18 text-grey-darker\">
                                    En effet, par exemple, en mati??re de risques technologiques, il est apparu, lors de
                                    la commission d???enqu??te s??na- toriale sur l???incendie de l???usine Lubrizol ?? Rouen,
                                    que 10 % de la population interrog??e affirme savoir r??agir si un accident se produit
                                    pr??s de chez elle et 62 % des ??lus font part d???un manque d???information sur les
                                    risques indus- triels. Cela est d???autant plus domma- geable que les premi??res heures
                                    sont d??cisives dans la gestion de crise.
                                </p>
                                <p class=\"text-book-18 text-grey-darker\">
                                    La loi apporte une nouvelle envergure ?? la coop??ration locale en mati??re de
                                    pr??vention, renforce les synergies, l???efficacit?? des diff??rents intervenants et
                                    adapte les outils. C???est d???ailleurs en ce sens qu'elle indique que la direc- tion
                                    des op??rations est assur??e par le repr??sentant de l?????tat dans le d??parte- ment
                                    (article 12), qu???un correspondant incendie et secours sera cr???? comme interlocuteur
                                    privil??gi?? du service d??partemental ou territorial d???incendie et de secours dans la
                                    commune. De nouvelles r??gles ont ??t?? instaur??es concernant les plans communaux et
                                    intercommunaux de sauvegarde pour accro??tre leur existence et renforcer leur
                                    efficacit?? afin d???enrichir la gestion de crise.
                                    Plan communal de sauvegarde
                                    Cr???? par l???article 13 de la loi n?? 2004- 811 du 13 ao??t 2004, le plan communal de
                                    sauvegarde (PCS) est l'outil de plani- fication permettant ?? une commune d'organiser
                                    et de mettre en ??uvre les moyens d'information, de formation, d'alerte, de
                                    sauvegarde et de soutien aux populations pour faire face ?? des crises et ?? des
                                    ??v??nements de s??curit?? civile divers (inondations, ??pisodes neigeux, canicules,
                                    accident de trans- port de mati??res dangereuses, etc.). M??me si le PCS ne cr??e aucun
                                    moyen suppl??mentaire, il recense les moyens existants pour offrir une r??ponse orga-
                                    nis??e et adapt??e lors de la survenance d???une crise.
                                </p>
                                <p class=\"text-book-18 text-grey-darker\">
                                    La loi avait instaur?? une obligation de r??aliser un tel document pour les communes
                                    consid??r??es tr??s expo- s??es ?? un risque. Ainsi, l???obligation de r??aliser un PCS
                                    concernait auparavant les communes dot??es d???un plan de pr??vention des risques
                                    naturels pr??vi- sibles approuv?? (PPRNP) ou comprises dans le champ d???application
                                    d???un plan particulier d???intervention (PPI) dans le cadre du plan Orsec (organisation
                                    de la r??ponse de s??curit?? civile, ndlr).
                                    M??me si toutes les communes souhai- tant renforcer la r??silience des terri- toires
                                    peuvent volontairement se doter d???un PCS, en pratique, en raison du co??t que
                                    celui-ci peut repr??senter pour certaines collectivit??s, ces cas sont rares. Ainsi,
                                    en 2015, le minist??re de l???Int??rieur indiquait que seuls les deux tiers des communes
                                    soumises ?? l???obligation d?????laborer un PCS l???avaient adopt??.
                                    La loi a dor??navant ??tendu le champ d???application de l???obligation de r??aliser un PCS
                                    au regard de l???utilit?? d???un tel document lors de la survenance d???une crise. En ce
                                    sens, l???obligation d?????tablis- sement d???un PCS est applicable sur de nombreuses
                                    nouvelles zones (1), concern??es par un risque sp??cifique, tel que, par exemple, les
                                    territoires ?? risque important d'inondation (2). L???article L.731-1 du code de la
                                    s??curit?? int??rieure pr??voyait, dans sa version ant??rieure ?? la loi Matras, qu???un
                                    plan intercommunal de sauvegarde (PICS) pouvait ?? ??tre ??tabli en lieu et place du
                                    plan communal de sauvegarde ??, de mani??re donc facultative. Dans une contribution
                                    ??crite, la Direction g??n??rale de la s??curit?? civile et de la gestion des crises
                                    (DGSCGC) a indiqu?? aux rapporteurs qu???elle a constat?? que ?? les PICS ont d??montr??
                                    leur utilit?? l?? o?? ils ont ??t?? cr????s ?? et que ?? les Sdis [services d??partemen- taux
                                    d'incendie et de secours, ndlr] de ces d??partements ont reconnu l???utilit?? de ces
                                    dispositifs tant dans la pr??pa- ration ?? la gestion de crise que dans la r??ponse
                                    d???urgence ??.
                                </p>
                                <p class=\"text-book-18 text-grey-darker\">
                                    Les PICS ne sont donc pas une nouveaut?? mais l?????volution tient en leur caract??re
                                    dor??navant obli- gatoire. Codifi?? dans un nouvel article L.731-4 qui modifie
                                    significati- vement les dispositions applicables au PICS, il est instaur?? que ce
                                    plan est d??sormais obligatoire pour tous les EPCI dont au moins une commune membre
                                    est tenue d?????laborer un PCS. Ce changement n???est pas anodin puisqu???il concernerait,
                                    selon la DGSCGC, 1 125 ??tablissements publics de coop??ration intercom- munale ??
                                    fiscalit?? propre (EPCI-FP) sur 1 270. Leur r??le, jusqu????? maintenant marginal en
                                    mati??re de s??curit?? civile, va donc ??voluer.
                                    Le choix de l?????chelle de l???EPCI r??pond ?? la volont?? de proposer une r??ponse
                                    effective et efficace d??passant le seul rayon d???action de la commune lorsqu???un
                                    sinistre d???ampleur touche une commune. En effet, il est rare que celui-ci n???ait pas
                                    d???impact sur les communes voisines.
                                </p>
                                <p class=\"text-book-18 text-grey-darker\">
                                    L???objectif est ?? de pr??parer la r??ponse aux situations de crise en organisant, a
                                    minima, la mobilisation des capa- cit??s intercommunales au profit de la ou des
                                    communes concern??es, la mutualisation des capacit??s commu- nales ainsi que le
                                    r??tablissement des comp??tences ou int??r??ts commu- nautaires ?? (3). Les EPCI
                                    concern??s ont jusqu???en d??cembre 2026 pour ??laborer le PICS.
                                    R??partition et partage des comp??tences
                                    Cr???? par l???article 13 de la loi n?? 2004- 811 du 13 ao??t 2004, le plan communal de
                                    sauvegarde (PCS) est l'outil de plani- fication permettant ?? une commune d'organiser
                                    et de mettre en ??uvre les moyens d'information, de formation, d'alerte, de
                                    sauvegarde et de soutien aux populations pour faire face ?? des crises et ?? des
                                    ??v??nements de s??curit?? civile divers (inondations, ??pisodes neigeux, canicules,
                                    accident de trans- port de mati??res dangereuses, etc.). M??me si le PCS ne cr??e aucun
                                    moyen suppl??mentaire, il recense les moyens existants pour offrir une r??ponse orga-
                                    nis??e et adapt??e lors de la survenance d???une crise.
                                </p>
                                <p class=\"text-book-18 text-grey-darker\">
                                    La loi avait instaur?? une obligation de r??aliser un tel document pour les communes
                                    consid??r??es tr??s expo- s??es ?? un risque. Ainsi, l???obligation de r??aliser un PCS
                                    concernait auparavant les communes dot??es d???un plan de pr??vention des risques
                                    naturels pr??vi- sibles approuv?? (PPRNP) ou comprises dans le champ d???application
                                    d???un plan particulier d???intervention (PPI) dans le cadre du plan Orsec (organisation
                                    de la r??ponse de s??curit?? civile, ndlr).
                                    M??me si toutes les communes souhai- tant renforcer la r??silience des terri- toires
                                    peuvent volontairement se doter d???un PCS, en pratique, en raison du co??t que
                                    celui-ci peut repr??senter pour certaines collectivit??s, ces cas sont rares. Ainsi,
                                    en 2015, le minist??re de l???Int??rieur indiquait que seuls les deux tiers des communes
                                    soumises ?? l???obligation d?????laborer un PCS l???avaient adopt??.
                                    La loi a dor??navant ??tendu le champ d???application de l???obligation de r??aliser un PCS
                                    au regard de l???utilit?? d???un tel document lors de la survenance d???une crise.
                                </p>
                                <p class=\"text-book-18 text-grey-darker\">
                                    En ce sens, l???obligation d?????tablis- sement d???un PCS est applicable sur de nombreuses
                                    nouvelles zones (1), concern??es par un risque sp??cifique, tel que, par exemple, les
                                    territoires ?? risque important d'inondation (2). L???article L.731-1 du code de la
                                    s??curit?? int??rieure pr??voyait, dans sa version ant??rieure ?? la loi Matras, qu???un
                                    plan intercommunal de sauvegarde (PICS) pouvait ?? ??tre ??tabli en lieu et place du
                                    plan communal de sauvegarde ??, de mani??re donc facultative. Dans une contribution
                                    ??crite, la Direction g??n??rale de la s??curit?? civile et de la gestion des crises
                                    (DGSCGC) a indiqu?? aux rapporteurs qu???elle a constat?? que ?? les PICS ont d??montr??
                                    leur utilit?? l?? o?? ils ont ??t?? cr????s ?? et que ?? les Sdis [services d??partemen- taux
                                    d'incendie et de secours, ndlr] de ces d??partements ont reconnu l???utilit?? de ces
                                    dispositifs tant dans la pr??pa- ration ?? la gestion de crise que dans la r??ponse
                                    d???urgence ??.
                                </p>
                                <p class=\"text-book-18 text-grey-darker\">
                                    Les PICS ne sont donc pas une nouveaut?? mais l?????volution tient en leur caract??re
                                    dor??navant obli- gatoire. Codifi?? dans un nouvel article L.731-4 qui modifie
                                    significati- vement les dispositions applicables au PICS, il est instaur?? que ce
                                    plan est d??sormais obligatoire pour tous les EPCI dont au moins une commune membre
                                    est tenue d?????laborer un PCS. Ce changement n???est pas anodin puisqu???il concernerait,
                                    selon la DGSCGC, 1 125 ??tablissements publics de coop??ration intercom- munale ??
                                    fiscalit?? propre (EPCI-FP) sur 1 270. Leur r??le, jusqu????? maintenant marginal en
                                    mati??re de s??curit?? civile, va donc ??voluer.
                                    Le choix de l?????chelle de l???EPCI r??pond ?? la volont?? de proposer une r??ponse
                                    effective et efficace d??passant le seul rayon d???action de la commune lorsqu???un
                                    sinistre d???ampleur touche une commune. En effet, il est rare que celui-ci n???ait pas
                                    d???impact sur les communes voisines.
                                </p>
                                <p class=\"text-book-18 text-grey-darker\">
                                    L???objectif est ?? de pr??parer la r??ponse aux situations de crise en organisant, a
                                    minima, la mobilisation des capa- cit??s intercommunales au profit de la ou des
                                    communes concern??es, la mutualisation des capacit??s commu- nales ainsi que le
                                    r??tablissement des comp??tences ou int??r??ts commu- nautaires ?? (3). Les EPCI
                                    concern??s ont jusqu???en d??cembre 2026 pour ??laborer le PICS.
                                    Par Johanna Leplanois, Avocate associ??e au sein du cabinet DLGA
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"{{ asset('images/image-default.png') }}\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Entretien avec Johanna Leplanois - R??glementation
                            Littoral</h2>
                        <span class=\"show-hover decouvrir-link\">D??couvrir</span>
                    </div>
                </div>
            </a>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"{{ asset('images/image-default.png') }}\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">??valuation environnnementale - BL.L??gibase
                            Urbanisme</h2>
                        <span class=\"show-hover decouvrir-link\">D??couvrir</span>
                    </div>
                </div>
            </a>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"{{ asset('images/image-default.png') }}\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Un nouveau r??gime Cat Nat entre deux eaux - Johanna
                            Leplanois</h2>
                        <span class=\"show-hover decouvrir-link\">D??couvrir</span>
                    </div>
                </div>
            </a>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"{{ asset('images/image-default.png') }}\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Urbanisme - Recul du trait de c??te - Johanna
                            Leplanois</h2>
                        <span class=\"show-hover decouvrir-link\">D??couvrir</span>
                    </div>
                </div>
            </a>
        </div>

        <div class=\"section-two\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12 col-lg-3 col-left\">
                        <p class=\"text-book-18 text-grey-darker\">Table-ronde</p>
                    </div>
                    <div class=\"col-12 col-lg-9 col-right\">
                        <p class=\"title-medium-64 text-grey-text\">
                            D??couvrez nos derni??res <span class=\"fst-italic\">interventions</span>,
                            <span class=\"fst-italic\">conf??rences</span> et <span class=\"fst-italic\">table-ronde</span>
                            ci-dessous
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "actualites/press.html.twig", "/Applications/MAMP/htdocs/ECV/DLGA/templates/actualites/press.html.twig");
    }
}
