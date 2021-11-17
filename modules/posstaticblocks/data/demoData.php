<?php

class demoData
{
    public function initData()
    {
        $return = true;
        $languages = Language::getLanguages(true);
        $id_shop = Context::getContext()->shop->id;
        $id_hook_nav = (int)Hook::getIdByName('displayNav');
        $id_hook_home = (int)Hook::getIdByName('displayHome');
        $id_hook_bottom = (int)Hook::getIdByName('displayFullbottom2');
        
        $queries = [
            'INSERT INTO `'._DB_PREFIX_.'pos_staticblock` (`id_pos_staticblock`, `id_hook`, `position`, `name`,`active`) VALUES
                (1, '.$id_hook_nav.', 1, "static nav", 1),
                (2, '.$id_hook_home.', 2, "Home Banner", 1),
                (3, '.$id_hook_bottom.', 3, "Home Banner2", 1)'
        ];

        foreach (Language::getLanguages(true, Context::getContext()->shop->id) as $lang) {
            $queries[] = 'INSERT INTO `'._DB_PREFIX_.'pos_staticblock_lang` (`id_pos_staticblock`, `id_lang`, `content`) VALUES
				(1, '.(int)$lang['id_lang'].', \'<div id="_desktop_static">
				<div class="static-nav">Welcome you to Ecolife store!</div>
				</div>\'),
				(2, '.(int)$lang['id_lang'].', \'<div class="home-banner">
				<div class="row">
				<div class="col col-md-4 col-sm-12  col-xs-12">
				<div class="banner-box"><img src="/pos_ecolife_fastfood/img/cms/1_1.jpg" alt="" />
				<div class="txt_cms">
				<h3>Fast Food<br />Best<br />Quality</h3>
				<a href="#">shop now</a></div>
				</div>
				</div>
				<div class="col col-md-4 col-sm-12 col-xs-12">
				<div class="banner-box"><img src="/pos_ecolife_fastfood/img/cms/2_1.jpg" alt="" />
				<div class="txt_cms">
				<h3>Breakfast<br />Sandwiches<br />50% Off</h3>
				<a href="#">shop now</a></div>
				</div>
				</div>
				<div class="col col-md-4 col-sm-12  col-xs-12">
				<div class="banner-box"><img src="/pos_ecolife_fastfood/img/cms/3_1.jpg" alt="" />
				<div class="txt_cms">
				<h3>Ice Cream<br />Cupcake<br />Vanilla</h3>
				<a href="#">shop now</a></div>
				</div>
				</div>
				</div>
				</div>\'),	
				(3, '.(int)$lang['id_lang'].', \'<div class="home-banner banner-bottom">
				<div class="row">
				<div class="col col-md-6 col-sm-12 col-xs-12">
				<div class="banner-box"><a href="#"><img src="/pos_ecolife_fastfood/img/cms/5_1.jpg" alt="" /></a></div>
				</div>
				<div class="col col-md-6 col-sm-12  col-xs-12">
				<div class="banner-box"><a href="#"><img src="/pos_ecolife_fastfood/img/cms/6_1.jpg" alt="" /></a></div>
				</div>
				</div>
				</div>\')'
            ;
        }

        $queries[] = 'INSERT INTO `'._DB_PREFIX_.'pos_staticblock_shop` (`id_pos_staticblock`, `id_shop`) VALUES
                (1, 1),
                (2, 1),
                (3, 1)';
        foreach ($queries as $query) {
            $return &= Db::getInstance()->execute($query);
        }

        return $return;
    }
}
?>