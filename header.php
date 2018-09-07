<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();
?>
<!DOCTYPE html>
<html>
<head>
    <title><? $APPLICATION->ShowTitle(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"/>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900&subset=latin,cyrillic-ext'
          rel='stylesheet' type='text/css'>
<script src="https://api-maps.yandex.ru/2.0/?load=package.standard&mode=debug&lang=ru-RU" type="text/javascript"></script>
    <?
    /*$APPLICATION->ShowHead();*/
    $APPLICATION->ShowMeta("robots", false, true);
    $APPLICATION->ShowMeta("keywords", false, true);
    $APPLICATION->ShowMeta("description", false, true);
    $APPLICATION->ShowCSS(true, true);
    $APPLICATION->ShowHeadStrings();
    ?>

    <!--Библиотеки CSS-->
    <? $APPLICATION->SetAdditionalCSS("/bitrix/templates/gosuslugi/vendor/bootstrap/css/bootstrap.min.css"); ?>
    <? $APPLICATION->SetAdditionalCSS("/bitrix/templates/gosuslugi/vendor/select2/select2.css"); ?>
    <? $APPLICATION->SetAdditionalCSS("/bitrix/templates/gosuslugi/vendor/themify-icons/themify-icons.css"); ?>
    <? $APPLICATION->SetAdditionalCSS("/bitrix/templates/gosuslugi/vendor/font-awesome-4.6.3/css/font-awesome.css"); ?>
    <? $APPLICATION->SetAdditionalCSS("/bitrix/templates/gosuslugi/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"); ?>
    <? $APPLICATION->SetAdditionalCSS("/bitrix/templates/gosuslugi/vendor/sweetalert-master/dist/sweetalert.css"); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/vendor/bootstrap-tour/bootstrap-tour.css"); ?>	

    <!--Стили-->
    <? $APPLICATION->SetAdditionalCSS("/bitrix/templates/gosuslugi_blind/style/all.css"); ?>
    <? $APPLICATION->SetAdditionalCSS("/bitrix/templates/gosuslugi_blind/style/browser-check.css"); ?>
	
	<!--Библиотеки JS-->

    <? $APPLICATION->AddHeadScript('/bitrix/templates/gosuslugi/vendor/jquery/jquery-2.2.3.min.js'); ?>
    <? $APPLICATION->AddHeadScript('/bitrix/templates/gosuslugi/vendor/jquery/jquery-migrate-1.2.1.min.js'); ?>
    <? $APPLICATION->AddHeadScript('/bitrix/templates/gosuslugi//vendor/browser-check/browser-warning.js'); ?>
    <? $APPLICATION->AddHeadScript('/bitrix/templates/gosuslugi/vendor/bootstrap/js/bootstrap.min.js'); ?>
    <? $APPLICATION->AddHeadScript('/bitrix/templates/gosuslugi/vendor/select2/select2.js'); ?>
	<? $APPLICATION->AddHeadScript('/bitrix/templates/gosuslugi/vendor/select2/select2_locale_ru.js'); ?>
    <? $APPLICATION->AddHeadScript('/bitrix/templates/gosuslugi/vendor/momentjs/moment-with-locales.js'); ?>
    <? $APPLICATION->AddHeadScript('/bitrix/templates/gosuslugi/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js'); ?>
    <? $APPLICATION->AddHeadScript('/bitrix/templates/gosuslugi/vendor/sweetalert-master/dist/sweetalert.min.js'); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/vendor/bootstrap-tour/bootstrap-tour.min.js'); ?>
    <? $APPLICATION->AddHeadScript('/bitrix/templates/gosuslugi/js/main.js');?>	
    <? $APPLICATION->AddHeadScript('/lib/js/common.js');?>

    <!-- Библиотека inputmask -->
    <? $APPLICATION->AddHeadScript('/bitrix/templates/gosuslugi/vendor/input-mask/inputmask.js');?>
    <? $APPLICATION->AddHeadScript('/bitrix/templates/gosuslugi/vendor/input-mask/inputmask.numeric.extensions.js');?>
    <? $APPLICATION->AddHeadScript('/bitrix/templates/gosuslugi/vendor/input-mask/inputmask.phone.extensions.js');?>
    <? $APPLICATION->AddHeadScript('/bitrix/templates/gosuslugi/vendor/input-mask/inputmask.regex.extensions.js');?>
    <? $APPLICATION->AddHeadScript('/bitrix/templates/gosuslugi/vendor/input-mask/jquery.inputmask.min.js');?>
 
    <?
    global $USER;
    ?>	
    
    <!-- ГОСБАР-->
        <script>
            _govWidget = {
                cssOrigin: '//gosbar.gosuslugi.ru',
                catalogOrigin: '//gosbar.gosuslugi.ru',
                menu: [{
                    text: 'Портал Госуслуг',
                    link: 'https://www.gosuslugi.ru'
                }],
               // localSearch: '/search/index.php?q=%query%'
	       disableSearch: true
            }
        </script>
        <script type="text/javascript" language="JavaScript" src="//gosbar.gosuslugi.ru/widget/widget.js" async="async"></script>

    <!-- ГОСБАР-->
    <script>
        function set_cookie(name, value, exp_y, exp_m, exp_d, path, domain, secure) {
            var cookie_string = name + "=" + escape(value);

            if (exp_y) {
                var expires = new Date(exp_y, exp_m, exp_d);
                cookie_string += "; expires=" + expires.toGMTString();
            }

            if (path)
                cookie_string += "; path=" + escape(path);

            if (domain)
                cookie_string += "; domain=" + escape(domain);

            if (secure)
                cookie_string += "; secure";

            document.cookie = cookie_string;
        }
        function get_cookie(cookie_name) {
            var results = document.cookie.match('(^|;) ?' + cookie_name + '=([^;]*)(;|$)');

            if (results)
                return ( unescape(results[2]) );
            else
                return null;
        }
    </script>
</head>
<body>
<div id="panel">
    <? $APPLICATION->ShowPanel(); ?>
</div>
<section id="blue-header" style="display: none;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="gerb-top" onclick="$('.gerb-top-info').toggle(); $('.gerb-top').toggleClass('active');">
                    <img class="gerb-img" src="/bitrix/templates/gosuslugi/images/1gerb_penzenskoj_oblasti.png" alt="Герб Пензенской области">
                    <img class="gerb-img-bottom" src="/bitrix/templates/gosuslugi/images/dr1x-top.png" alt="dr1x top">
                </div>
            </div>
            <div class="col-md-8 col-sm-8 col-xs-8">
                <h3 class="pull-right  hidden-xs">Региональный портал государственных и муниципальных услуг Пензенской
                    области</h3>
            </div>
        </div>
        <div class="row gerb-top-info" style="display: none;">
            <div class="col-md-6 col-sm-6 catalog-info">
                <h2>О каталоге</h2>
                <p>
                    В каталог государственных сайтов включены официальные информационные интернет-ресурсы, посвященные
                    деятельности государственных ведомств.
                </p>
                <p>
                    Навигация в каталоге организована таким образом, чтобы вы могли быстро найти нужное ведомство и его
                    контактную информацию, ознакомиться с предоставляемыми услугами или перейти на официальный сайт.
                </p>
                <p class="p-title">В настоящее время каталог содержит:</p>
                <div class="row num-ved">
                    <? CModule::IncludeModule("iblock");

                    $itemsVed = CIBlockElement::GetList(array("SORT" => "ASC"), array("IBLOCK_ID" => 3, "ACTIVE" => "Y", "SECTION_ID" => array("20", "19")), false, array("ID"), false);
                    $activeVed = $itemsVed->SelectedRowsCount();

                    $itemsService = CIBlockElement::GetList(array("SORT" => "ASC"), array("IBLOCK_ID" => 4, "ACTIVE" => "Y"), false, array("ID"), false);
                    $activeService = $itemsService->SelectedRowsCount();

                    ?>
                    <div class="col-md-3">
                        <p><?= $activeVed ?></p>
                        <span>Ведомства</span>
                    </div>
                    <div class="col-md-3">
                        <p><?= $activeService ?></p>
                        <span>Услуги</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 category-info">
                <h2>Категории</h2>
                <div class="row">
                    <?

                    $arSort = array("SORT" => "ASC", "id" => "DESC");
                    $arFilter = array("IBLOCK_ID" => 6, "ACTIVE" => "Y");
                    $arSelect = array("ID", "CODE", "NAME", "DESCRIPTION", "SECTION_ID");
                    $arNavStartParams = false;
                    $itemsList = CIBlockSection::GetList($arSort, $arFilter, false, $arSelect, $arNavStartParams);

                    if ($itemsList->SelectedRowsCount() > 0) {
                        while ($item = $itemsList->Fetch()) {
                            ?>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <a class="no-avter" href="/e-services/detail2.php?catID=<?= $item["ID"] ?>">
                                    <h3><?= $item["NAME"] ?></h3></a>
                                <p><?= $item["DESCRIPTION"] ?></p>
                            </div>
                            <?
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="top-menu">
    <nav class="navbar">
        <div class="container">
            <div class="row">
                <!--                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4">-->
                <div class="marg-b">
                    <!--<a href="/"><img style="width: 90%;" src="/bitrix/templates/gosuslugi/images/logo-penza.jpg"></a>-->
					<a href="/"><h1>Госуслуги</h1>
					<h4>Пензенская область</h4>
					</a>
                </div>
                <!--                <div class="col-lg-7 col-md-8 col-sm-7 col-xs-8">-->
                
                <!--                <div class="col-lg-2 col-md-1 col-sm-2 col-xs-6">-->
                
                    
                            <?
                            if ($USER->IsAuthorized()) {
                                $rsUser = CUser::GetByID($USER->GetParam('USER_ID'));
                                $arUser = $rsUser->Fetch();

                                ?>
						<div class="pull-left marg-b">
							<ul class="nav nav-blind">
								<li>
                                <a class="lk-show-menu"><?= $arUser["LAST_NAME"] ?> <?= substr($arUser["NAME"], 0, 1); ?>
                                    . <?= substr($arUser["SECOND_NAME"], 0, 1); ?>.</a>
                                <div class="lk-menu">
                                    <p>
                                        <a href="/lk/">Личный
                                            кабинет</a>
                                    </p>
                                    <p>
                                        <a href="/?logout=yes">Выход</a>

                                    </p>
                                </div>
								</li>
                    </ul>
                                <?
                            } else {
                               ?>
							  <div class="pull-left marg-b w-100">
							   <h4>
											Теперь пользоваться госуслугами очень просто!
										</h4>
							   <ul class="nav pull-left">
                        <li><a href="/rest.php" class="lk-show-blind">Личный кабинет</a></li>
						<li><a href="https://esia.gosuslugi.ru/registration/" class="lk-show-blind">
											Зарегистрироваться
											
										</a></li></ul>
						
                           <? }
                            ?>
							<!-- Регистрация -->
                </div>
                
				<div class="pull-left w-100">
                    <div>
                        <ul class="nav navbar-nav navbar-blind w-100">
                            <li>
                                <a href="/e-services/">
                                    Каталог услуг
                                </a>
                            </li>
                            <li>
                                <a href="/news/">Новости</a>
                            </li>
							<?
                            if ($USER->IsAuthorized()) {
                                ?>
                                <li>
                                    <a href="/lk/payments/">Оплата</a>
                                </li>
                            <? } ?>
                            <li>
                                <a href="/contact/">Контакты</a>
                            </li>
                            <li>
                                <a href="#base" onclick="setCookie('special','N',5);location.reload();" title="#">Обычная версия сайта</a>
                            </li>
                            <!--<li>
                                <a href="#">
                                    <img onclick="showFind();"
                                         style="background: #fff;height: 30px; float: left; margin-top: -5px;"
                                         src="/bitrix/templates/gosuslugi/images/search.png">
                                </a>
                            </li>-->
                        </ul>
                    </div>
                </div>
            </div>
			
        </div>
    </nav>
    <script>
        function showMobileMenu() {
            $("#mobile-menu").show();
            $('body').css('height', '375px');
            $('body').css('overflow', 'hidden');
        }
        function hideMobileMenu() {
            $("#mobile-menu").hide();
            $('body').css('height', 'auto');
            $('body').css('overflow', 'visible');
        }
    </script>
</section>
<section class="gos-search-mainpage top-search-form">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
				<? //$APPLICATION->IncludeComponent("bitrix:search.form", "gos-search-mainpage", Array(
//"COMPONENT_TEMPLATE" => ".default",
//"PAGE" => "#SITE_DIR#search/index.php",
//"USE_SUGGEST" => "N",
//), false); ?>
            </div>
            <style>
                .top-search-form .col-md-12 {
                    width: 91% !important;
                }
            </style>
        </div>
    </div>
    <script>
        function showFind() {
            $('.top-search-form').toggle();
            $('.top-search-form').find('.data-form').append('' +
                '<div class="top-search-form-close"><img onclick="$(\'.top-search-form\').toggle(); $(\'.top-search-form-close\').remove();" src="/bitrix/templates/gosuslugi/images/search-close.png"> </div>' +
                '');
        }
    </script>

</section>
<? if (!CSite::InDir('/index.php')): ?>
<section id="page-breadcrum">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="overflow: hidden; height: 42px;">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:breadcrumb",
                    "gos-breadcrum",
                    array(
                        "COMPONENT_TEMPLATE" => "breadcrumb",
                        "START_FROM" => "0",
                        "PATH" => "",
                        "SITE_ID" => "-"
                    ),
                    false
                ); ?>
            </div>
        </div>
    </div>
</section>
<section id="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <? if (!CSite::InDir('/service/') AND !CSite::InDir('/search/')){ ?>
                <h1><? $APPLICATION->ShowTitle('h1') ?></h1>
                <? if ($APPLICATION->GetPageProperty("BACK_BUTTON") != "N") { ?>
                    <button class="btn btn-default btn-md btn-left button-hide" onclick="window.history.back();">
                        Вернуться
                    </button>
                <? } ?>
                <div class="row">
                    <div class="col-md-12">
                        <? } ?>
                        <? endif ?>
	
						