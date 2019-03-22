<?php
function get_content($array,$defaults){
    if(!empty($array)){$var = $array;}
    else{$var = $defaults;}
    return $var;
}
switch(get_content($_GET['p'],'main'))
{
    // Главная страница
    case "main":
	$t_name = "Главная";
	$head = "./pages/main/head.htm";
	$content = "./pages/main/content.htm";
    break;
    // Как начать торговлю
    case "how-start":
	$t_name = "Как начать";
	$head = "./pages/how-start/head.htm";
	$content = "./pages/how-start/content.htm";
    break;
    // Обучение
    case "edu":
	$t_name = "Обучение";
	$head = "./pages/edu/head.htm";
	$content = "./pages/edu/content.htm";
    break;
			// Обучение Урок 1
			case "less1":
			$t_name = "Урок 1";
			$head = "./pages/edu/less1/head.htm";
			$content = "./pages/edu/less1/content.htm";
			break;
    // FAQ
    case "faq":
	$t_name = "FAQ";
	$head = "./pages/faq/head.htm";
	$content = "./pages/faq/content.htm";
    break;
    // Торговые условия
    case "torg-usl":
	$t_name = "Торговые условия";
	$head = "./pages/torg-usl/head.htm";
	$content = "./pages/torg-usl/content.htm";
    break;
    // Партнеры
    case "partners":
	$t_name = "Торговые условия";
	$head = "./pages/partners/head.htm";
	$content = "./pages/partners/content.htm";
    break;
    // Ввод вывод
    case "in-out":
	$t_name = "Ввод/Вывод";
	$head = "./pages/in-out/head.htm";
	$content = "./pages/in-out/content.htm";
    break;
}
?>

<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $t_name; ?> | MFX Options</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/table.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	
	
	<script src="./js/owl.carousel.min.js"></script>
	<link rel="stylesheet" href="./css/owl.carousel.css">
</head>

<body>
    <section class="slide-block slide-01">
        <div class="wrap">
            <div class="header">
                <div class="header-logo">
                    <div class="table-cell">
                        <a href="./"><img src="./img/logo.png" alt="MFX Options" class="mr_30"></a>
                    </div>
                </div>
                <div class="header-contacts">
                    <div class="table-cell">
                        <span class="need_help mr_30"><a href="" class="Roboto light size_12 ico_help underline">Нужна помощь?</a></span>
                    </div>
                    <div class="table-cell hide_640">
                        <span class="register mr_30 right-header-bg"><a href="" class="Roboto light size_14 mr_30 ico_enter">Войти</a><a href="" class="Roboto light size_14">Регистрация</a></span>
                    </div>
                    <div class="table-cell hide_640">
                        <span class="lang right-header-bg Roboto light size_12">Язык:<a href="" class="ml_20 mr_30 ico_lang size_14">Rus</a></span>
                    </div>
                </div>
            </div>
			<table class="mob_head">
				<tbody>
					<tr>
						<td><a href="" class="Roboto light size_14 mr_30">Войти</a></td>
						<td><a href="" class="Roboto light size_14">Регистрация</a></td>
						<td><a href="" class="ml_20 mr_30 size_14">Rus</a></td>
					</tr>
				</tbody>
			</table>
			<?php include $head; ?>
			
        </div>
		<div class="header-menu">
			<div class="wrap">
				<a href="" class="right-button">Начать торговлю</a>
				<ul>
					<li><a href="./">Главная</a></li>
					<li><a href="index.php?p=how-start">Как начать торговлю</a></li>
					<li><a href="index.php?p=edu">Обучение</a></li>
					<li><a href="index.php?p=torg-usl">Торговые условия</a></li>
					<li><a href="index.php?p=in-out">Ввод/вывод</a></li>
					<li><a href="index.php?p=partners">Партнерская программа</a></li>
					<li><a href="index.php?p=faq">FAQ</a></li>
				</ul>
				<div class="show_640 RobotoS">
					<a href="javascript:PopUpShowMenu()" class="ico_menu">Меню</a>
					<a href="#" class="scroll_top">Вверх</a>
				</div>
			</div>
		</div>
    </section>
		<?php include $content; ?>
    <section class="slide-block slide-06">
        <div class="wrap">
			<div class="mb_65"><a href="mailto:support@mfxoptions.com" class="mail">support@mfxoptions.com</a><a href="call:+78129830960" class="phone">+7(812) 983-09-60</a></div>
			<table cellpadding="0" cellspacing="0" class="footer-table mb_35">
				<tbody>
					<tr>
						<td class="border" style="width: 40%; padding: 0;">
							<img src="./img/flogo.png" alt="" class="mb_35">
							<div class="Roboto size_14 light opacity_075 color_gray lh_21 mb_35">Услуги, условия оказания которых описываются на страницах данного сайта, предоставляются компанией Master Services Inc. Компания зарегистрирована в качестве International business company, под регистрационным номером 138,716 в г. Белиз-сити</div>
						</td>
						
				<div class="show_640 mob_fast_link">
					<a href="javascript:PopUpShowMenuFooter()" class="ico_menu">Быстрые ссылки</a>
				</div>
						<td>
							<div class="Roboto size_17 bold color_white mb_25 hide_640">Быстрые ссылки</div>
							<table cellpadding="0" cellspacing="0" class="footer-link hide_640">
								<tbody>
									<tr>
										<td>
											<a href="index.php?p=how-start">Как начать торговлю</a>
											<a href="index.php?p=edu">Обучение</a>
											<a href="index.php?p=faq">FAQ</a>
										</td>
										<td>
											<a href="index.php?p=torg-usl">Торговые условия</a>
											<a href="index.php?p=partners">Партнерская программа</a>
											<a href="index.php?p=in-out">Ввод/вывод</a>
										</td>
										<td>
											
										</td>
										<td>
											
										</td>
									</tr>
								</tbody>
							</table>
						</td>
						
						
						<!--
						<td style="display: none;">
							<div class="Roboto size_17 bold color_white mb_25">Быстрые ссылки</div>
							<table cellpadding="0" cellspacing="0" class="footer-link">
								<tbody>
									<tr>
										<td>
											<a href="">О компании</a>
											<a href="">Контакты</a>
											<a href="">Партнерская программа</a>
											<a href="index.php?p=edu">Обучение</a>
											<a href="index.php?p=how-start">Как начать торговлю</a>
										</td>
										<td>
											<a href="">Тренажер торговли</a>
											<a href="">Клиентское соглашение</a>
											<a href="">Безопасность</a>
										</td>
										<td>
											<a href="">Конкурсы для трейдеров</a>
											<a href="">Бонусная программа</a>
											<a href="">Активы</a>
										</td>
										<td>
											<a href="">Тренажер торговли</a>
											<a href="">Клиентское соглашение</a>
											<a href="">Безопасность</a>
										</td>
									</tr>
								</tbody>
							</table>
						</td> -->
					</tr>
				</tbody>
			</table>
			<div class="table-cell"><img src="./img/flogo2.png" alt=""></div>
			<div class="table-cell"><div class="Roboto size_12 light opacity_075 color_gray border ml_20 pr_20">Перед началом торговли необходимо ознакомиться со всеми рисками, сопряженными с торговлей бинарными опционами</div></div>
			<div class="table-cell social">
				<div class="Roboto size_14 bold color_white ml_20">Расскажите о нас: <span class="right-footer-bg Roboto light size_12">+654</span></div>
			</div>
		</div>
    </section>

		<section class="pop-up" id="pop_menu">
			<div class="modal_pop">
				<div class="cont">
					<div class="pos_left">Главное меню</div>
					<div class="pos_right"><a href="javascript:PopUpHideMenu()"><img src="./img/close.png" alt=""></a></div>
					<div class="clear"></div>
					<div class="border-hr-full"></div>
				<ul class="RobotoS">
					<li><a href="./">Главная</a></li>
					<li><a href="index.php?p=how-start">Как начать торговлю</a></li>
					<li><a href="index.php?p=edu">Обучение</a></li>
					<li><a href="index.php?p=torg-usl">Торговые условия</a></li>
					<li><a href="index.php?p=in-out">Ввод/вывод</a></li>
					<li><a href="index.php?p=partners">Партнерская программа</a></li>
					<li><a href="index.php?p=faq">FAQ</a></li>
				</ul>
					<a href="#" class="color_green mb_20 block">Начать торговлю</a>
				</div>
			</div>
		</section>

		<section class="pop-up" id="pop_menu_footer">
			<div class="modal_pop">
				<div class="cont">
					<div class="pos_left">Быстрые ссылки</div>
					<div class="pos_right"><a href="javascript:PopUpHideMenuFooter()"><img src="./img/close.png" alt=""></a></div>
					<div class="clear"></div>
					<div class="border-hr-full"></div>
				<ul class="RobotoS">
					<li><a href="./">Главная</a></li>
					<li><a href="index.php?p=how-start">Как начать торговлю</a></li>
					<li><a href="index.php?p=edu">Обучение</a></li>
					<li><a href="index.php?p=torg-usl">Торговые условия</a></li>
					<li><a href="index.php?p=in-out">Ввод/вывод</a></li>
					<li><a href="index.php?p=partners">Партнерская программа</a></li>
					<li><a href="index.php?p=faq">FAQ</a></li>
				</ul>
					
				</div>
			</div>
		</section>
		
<script src="./js/main.js"></script>

</body>
</html>
