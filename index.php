<?php
include "db_conn.php";


$full_day= mysqli_query($conn,"SELECT * FROM `full_day`");
$morning= mysqli_query($conn,"SELECT * FROM `morning`");
$group_training= mysqli_query($conn,"SELECT * FROM `group_training`");
$personal_training= mysqli_query($conn,"SELECT * FROM `personal_training`");
$single_training= mysqli_query($conn,"SELECT * FROM `single_trainnig`");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main_style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>SportChance</title>
</head>
<body>

<header class="header-info" role="contentinfo">
    <div class="wrapper ">
        <ul class="header-info__ul">
            <li class="header-info__li">
			<span class="header-info__icon icon icon_small" aria-label="Іконка для розкладу">
	            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 91.8 90.8" style="enable-background:new 0 0 91.8 90.8;" xml:space="preserve">
	                <g>
	                    <path d="M46,0.6c-24.9,0-45,20.1-45,45s20.1,45,45,45s45-20.1,45-45S70.9,0.6,46,0.6z M64.2,64.1c-0.9,0.9-2,1.3-3.2,1.3
	s-2.3-0.4-3.2-1.3L41.2,47.5v-27c0-2.5,2-4.5,4.5-4.5s4.5,2,4.5,4.5v23.3l14,14C65.9,59.5,65.9,62.4,64.2,64.1z"></path>
	                </g>
	            </svg>
	        </span>
                <span class="header-info__text">
	        	Пн-Пт 07:00-22:00, Сб-Вс 09:00-21:00	        </span>
            </li>
            <li class="header-info__li">
                <a href="tel:(096) 108-9729" class="header-info__link">
	            <span class="header-info__icon icon icon_small" aria-label="Іконка для телефону">
	                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.75 23.5">
	                    <title>phone</title>
	                    <g>
	                        <path d="M6.34,13.67c-1.75-3-2.53-4.75-.23-5.74C8.15,7.05,8.73,6,7.6,3.1,6.55.4,6.05-.3,3.8,1.18-1,4.33-.68,8.79,3.16,15.44s7.6,9.23,12.72,6.66c2.41-1.21,2.05-2,.24-4.24-2-2.44-3.16-2.45-4.93-1.13-2,1.5-3.1,0-4.85-3.07Z"></path>
	                    </g>
	                </svg>
	            </span>
                    (092) 451-44-79	        </a>
            </li>
            <li class="header-info__li">
                <a href="tel:(093) 140-56-68" class="header-info__link">
	            <span class="header-info__icon icon icon_small" aria-label="Іконка для телефону">
	                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.75 23.5">
	                    <title>phone</title>
	                    <g>
	                        <path d="M6.34,13.67c-1.75-3-2.53-4.75-.23-5.74C8.15,7.05,8.73,6,7.6,3.1,6.55.4,6.05-.3,3.8,1.18-1,4.33-.68,8.79,3.16,15.44s7.6,9.23,12.72,6.66c2.41-1.21,2.05-2,.24-4.24-2-2.44-3.16-2.45-4.93-1.13-2,1.5-3.1,0-4.85-3.07Z"></path>
	                    </g>
	                </svg>
	            </span>
                    (093) 140-56-68	        </a>
            </li>
        </ul>
          </div>
</header>


<section class="first-screen">
	<div class="wrapper">
		<nav class="navigation" role="navigation">
			<ul class="navigation__ul navigation__ul_home">
				<li class="navigation__li_home" tabindex="-1">
					<figure class="header-navbar__logo">
						<img src="./assets/SportChance.png" class="custom-logo" alt="Логотип SportChance" style="max-width: 200px; max-height: 200px;" itemprop="logo">
					</figure>
				</li>
			</ul>
			<ul class="navigation__ul navigation__ul_nav">
				<li class="navigation__li">
					<a href="#services" class="navigation__link">Послуги</a>
				</li><li class="navigation__li">
				<a href="#about" class="navigation__link">Про клуб</a>
			</li><li class="navigation__li">
				<a href="#prices" class="navigation__link">Ціни</a>
			</li><li id="log_but" class="navigation__li">
				<a  class="navigation__link">Вхід</a>


                <form id="login" action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
          <a href="signup.php" class="ca">Create an account</a>

     </form>
			</li><li class="navigation__li">
				<a href="#contacts" class="navigation__link">Регістрація</a>
			</li>                </ul>

		</nav>

		<article class="banner">
			<h5 class="banner__h tt-u">
				<span class="banner__span d-b">Твій фітнес клуб завжди поруч</span> будь у формі <span class="banner__span_end d-b">будь сильніше</span>
			</h5>
			<a href="#about" class="banner__link btn btn_link">
				<span class="tt-u">вперед</span>
			</a>
		</article>
	</div>




</section>

<main id="about" class="about">
	<h1 class="sr-only">Спортивний клуб SPORCHANCE</h1>
	<div class="wrapper">
		<article class="about-article row">
			<figure class="about-article__logo">
				<figcaption class="about-article__figcaption"> Ласкаво просимо </figcaption>
				<img src="./assets/SportChance.png" alt="Логотип Sporchance" class="about-article__img">
			</figure>
			<p class="about-article__p">
				 Ми пропонуємо відвідувати просторий та укомплектований тренажерний зал з персональними тренерами, масаж, групові заняття (фітнес), заняття єдиноборствами в групах і персонально, і велика кількість тренувань для дітей. В кожен абонемент входить відвідування фінської сауни                </p>
		</article>
	</div>
</main>

<section id="services" class="services">
	<div class="wrapper">

		<div data-aos="fade-right">
		<article class="service">
			<figure class="service__figure">
				<img src="https://www.sportfit-obolon.com.ua/wp-content/uploads/2018/12/service1.jpg" alt="Фото качка" class="service__img">
			</figure>
			<div class="service__wrap">

				<h4 class="service__h4">
					Персональні тренування                               </h4>
				<h3 class="service__h3">
					01. ТРЕНАЖЕРНА ЗАЛА                        </h3>
				<p class="service__p">
				</p><p class="service__p">Спорт клуб SportChance є сучасним фітнес клубом з проведення тренувань різного спрямування і стилю. &nbsp;В тренажерній залі ви можете розвивати сили свого організму і зміцнювати духовне здоров'я.</p>
				<p></p>
			</div>
		</article>
			</div>


		        <div data-aos="fade-left">
		<article class="service">
			<figure class="service__figure">
				<img src="https://www.sportfit-obolon.com.ua/wp-content/uploads/2018/12/service2.jpg" alt="Фото - жіночий фітнес" class="service__img">
			</figure>
			<div class="service__wrap">

				<h4 class="service__h4">
					ГРУПОВІ ЗАНЯТТЯ                               </h4>
				<h3 class="service__h3">
					02. ЖІНОЧИЙ ФІТНЕС                        </h3>
				<p class="service__p">
				</p><p id="tw-target-text" class="tw-data-text tw-ta tw-text-small" dir="ltr" data-placeholder="Перевод"><span lang="uk" style="color: #ffffff;">&nbsp;Вам запропонують фітнес програми різних напрямів і рівнів підготовленості: як для новачків, так і для досвідчених атлетів. Поставте собі за мету і досвідчені тренери приведуть вас до тіла вашої мрії!</span></p>
				<p></p>
				<button data-target="schedule20" class="btn service__btn btn_modal">

					<span class="tt-u">Дізнатись розклад</span>
				</button>
			</div>
		</article>
				</div>


		                    <div data-aos="fade-right">
		<article class="service">
			<figure class="service__figure">
				<img src="https://www.sportfit-obolon.com.ua/wp-content/uploads/2018/12/service3.jpg" alt="Фото - єдиноборств" class="service__img">
			</figure>
			<div class="service__wrap">

				<h4 class="service__h4">
					Персональні тренування                               </h4>
				<h3 class="service__h3">
					03. ЄДИНОБОРСТВА                        </h3>
				<p class="service__p">
					Сьогодні фізична і духовна підготовка, здатність захистити себе і близьких дуже актуальні. Пропонуємо наступні класи з самооборони та бойових мистецтв:
					<br><br>Спортивна боротьба - це єдиноборство двох суперників, що використовують в поєдинку свої фізичні і морально-вольові якості для досягнення перемоги.
					<br><br>Бокс - контактний вид спорту, в якому суперники завдають один одному ударів кулаками. Дозволені удари тільки вище пояса.
					<br><br>Кікбоксинг — у широкому сенсі слова під кікбоксингом розуміють різні ударні єдиноборства, правилами яких дозволені удари руками і ногами з використанням в екіпіровці боксерських рукавичок.

				</p>
				<button data-target="schedule21" class="btn service__btn btn_modal">

					<span class="tt-u">Дізнатись розклад</span>
				</button>
			</div>
		</article>
							</div>

		<div data-aos="fade-left">
		<article class="service">
			<figure class="service__figure">
				<img src="https://www.sportfit-obolon.com.ua/wp-content/uploads/2018/12/service4.jpg" alt="04. ДИТЯЧІ ЗАНЯТТЯ" class="service__img">
			</figure>
			<div class="service__wrap">

				<h4 class="service__h4">
					ГРУПОВІ ЗАНЯТТЯ                               </h4>
				<h3 class="service__h3">
					04. ДИТЯЧІ ЗАНЯТТЯ                        </h3>
				<p class="service__p">
				</p><p class="service__p">В клубі SportChance представленні різноманітні дитячі класи на різний вік і рівень підготовки. На данний момент можливо обрати з таких секцій - Тхеквондо, Дитячий фітнес, Бокс, Айкідо, Фрі-Файт, ММА  "</p>
				<p></p>
				<button data-target="schedule19" class="btn service__btn btn_modal">

					<span class="tt-u">Дізнатись розклад</span>
				</button>
			</div>
		</article>
		</div>

		<div data-aos="fade-right">
		<article class="service">
			<figure class="service__figure">
				<img src="https://www.sportfit-obolon.com.ua/wp-content/uploads/2018/12/service5.jpg" alt="05. МАСАЖ" class="service__img">
			</figure>
			<div class="service__wrap">

				<h3 class="service__h3">
					05. МАСАЖ                        </h3>
				<p class="service__p">
					У спортклубі  ви можете отримати більше 5 видів масажу.&nbsp;Професійний масажист проведе сеанс масажу для покращення вашого самопочуття, розслаблення, лікування проблем звязаних с больовими відчуттями.
					<br><br>У спортклубі  ви можете отримати такі види масажу:
					<br>- Масаж спини,&nbsp;шийно-комірцевої зони
					<br>- Загальний (спортивний) масаж
					<br>- Антицелюлітний масаж
					<br>- Масаж ніг
					<br>- Медовий массаж
					<br><br>Масаж - це система прийомів механічного і рефлекторного впливу на тканини і органи у вигляді розтирання, тиску, вібрації, проведених безпосередньо на поверхні тіла людини.
				</p>
			</div>
		</article>
		</div>

		<div data-aos="fade-left">
		<article class="service">
			<figure class="service__figure">
				<img src="https://www.sportfit-obolon.com.ua/wp-content/uploads/2018/12/service6.jpg" alt="06. САУНА" class="service__img">
			</figure>
			<div class="service__wrap">

				<h3 class="service__h3">
					06. САУНА                        </h3>
				<p class="service__p">
				</p><p class="service__p">Придбавши клубну карту  ви маєте можливість безкоштовно користуватись фінською сауною.
				Фінська сауна - це лазня сухого жару, коли повітря в приміщенні має низьку вологість (10-25%) і високу температуру в межах 80-100° С. Відвідування фінської сауни сприяє швидкому виведенню шлаків і токсинів. Відпочинок тут знімає стрес, напругу, в тому числі і психологічну. Це прекрасний профілактичний засіб від застуди. Крім цього, через гаряче повітря робляться більш часті вдихи, цим фінська сауна корисна для дихальної системи. Адже чим більше ми робимо вдихів, тим більше повітря вдихаємо, а це підвищує тонус судин дихальної системи.
				Для спортсменів користь фінської сауни просто безперечна. Під час тренувань в організмі виробляється молочна кислота, з-за якої тіло напружується, ниє, виникає відчуття фізичної втоми. Відвідування фінської сауни після тренажерного залу сприяє виводу цієї самої кислоти, тіло заряджається енергією, відчуття втоми йде, змінюючись бадьорістю і позитивом.</p>
				<p></p>
			</div>
		</article>
		</div>
		
		<div data-aos="fade-right">
		<article class="service">
			<figure class="service__figure">
				<img src="https://www.sportfit-obolon.com.ua/wp-content/uploads/2018/12/service7.jpg" alt="07. ФІТОБАР" class="service__img">
			</figure>
			<div class="service__wrap">

				<h3 class="service__h3">
					07. ФІТОБАР                        </h3>
				<p class="service__p">
				</p><p class="service__p">Фітобар в SportChance - місце, де вам завжди запропонують корисне і смачне харчування, напої, коктейлі та спортивне харчування. На барі ви можете замовити каву, фреш, протеїнові і багатокалорійні коктеїлі, батончики і багато іншого.</p>
				&nbsp;
				<p></p>
			</div>
		</article>
		</div>
	</div>
</section>
<section id="prices" class="prices">
    <div class="wrapper">
        <h2 class="prices__h">
            <span class="prices__span_h d-b"> Оберіть свою </span> Клубну карту </h2>
        <div class="row">
            <section class="card">
                <h3 class="card__h tt-u">
                    Повний день                        </h3>
                <p class="card__p">
                    7:00-22:00                        </p>
                <ul class="card__ul">
                    <li class="card__li">
                        Безліміт відвідувань клубу:
                    </li>
                    <li class="card__li">
                        - тренажерний зал
                    </li>
                    <li class="card__li">
                        - зал єдиноборств
                    </li>
                    <li class="card__li">
                        - зал кроссфіту
                    </li>
                    <li class="card__li">
                        Перше БЕЗКОШТОВНЕ тренування з тренером
                    </li>
                    <li class="card__li">
                        Сауна                                </li>
                </ul>
                <h4 class="card__price">
                    1000 грн.                        </h4>
                <button data-target="prices" id="myBtn1" class="btn card__btn tt-u btn_modal">

                    <span class="ttu">Детальніше</span>
                </button>
            </section>
            <section class="card">
                <h3 class="card__h tt-u">
                    Ранок                        </h3>
                <p class="card__p">
                    7:00-17:00                        </p>
                <ul class="card__ul">
                    <li class="card__li">
                        Безліміт відвідувань клубу:
                    </li>
                    <li class="card__li">
                        - тренажерний зал
                    </li>
                    <li class="card__li">
                        - зал єдиноборств
                    </li>
                    <li class="card__li">
                        - зал кроссфіту
                    </li>
                    <li class="card__li">
                        Перше БЕЗКОШТОВНЕ тренування з тренером
                    </li>
                    <li class="card__li">
                        Сауна                                </li>
                </ul>
                <h4 class="card__price">
                    700 грн.                        </h4>
                <button data-target="prices" id="myBtn2" class="btn card__btn tt-u btn_modal">

                    <span  class="ttu">Детальніше</span>
                </button>
            </section>
            <div class="btn-wrap">
                <button data-target="prices" id="myBtn3" class="btn prices__btn tt-u btn_modal">
                    <span class="ttu">Подивитися ціни на всі послуги</span>
                </button>
            </div>
        </div>
    </div>
</section>





<section id="myModal" class="modals">
    <div class="controls">
        <button class="controls__btn controls__btn_closer">
            <svg version="1.1" id="close" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 25 25" style="enable-background:new 0 0 25 25;" xml:space="preserve">
                <path d="M24.3,6.6l-21,14.9c-0.6,0.4-1.4,0.3-1.9-0.3l-1-1.5c-0.4-0.6-0.3-1.4,0.3-1.9l21-14.9c0.6-0.4,1.4-0.3,1.9,0.3l1,1.5 C25.1,5.3,24.9,6.1,24.3,6.6z"></path>
                <path d="M0.7,6.6l21,14.9c0.6,0.4,1.4,0.3,1.9-0.3l1-1.5c0.4-0.6,0.3-1.4-0.3-1.9L3.3,2.9C2.7,2.5,1.8,2.6,1.4,3.2l-1,1.5 C-0.1,5.3,0.1,6.1,0.7,6.6z"></path>
            </svg>
        </button>
    </div>
    <section class="modal-content modal-prices active ">
        <h2 class="modal-prices__h modals__h"> Ціни </h2>
                    <div class="block-prices">
                <section class="card card-modal">
                    <h3 class="card__h card-modal__h tt-u">
                        Повний день                    </h3>
                                            <p class="card__p card-modal__p">
                            7:00-22:00                        </p>
                                            <ul class="card__ul card-modal__ul">
                                                            <li class="card__li card-modal__li">
                                    Безліміт відвідувань клубу:
                                </li>
                                                            <li class="card__li card-modal__li">
                                     - тренажерний зал
                                </li>
                                                            <li class="card__li card-modal__li">
                                     - зал єдиноборств
                                </li>
                                                            <li class="card__li card-modal__li">
                                     - зал кроссфіту
                                </li>
                                                            <li class="card__li card-modal__li">
                                    Перше БЕЗКОШТОВНЕ тренування з тренером
                                </li>
                                                            <li class="card__li card-modal__li">
                                    Сауна                                </li>

                        </ul>
                                            <h4 class="card__price card-modal__price">
                            1000 грн.                        </h4>
                                    </section>
                <div class="table-wrap">
                    <table class="table-prices">
                        <thead class="table-prices__thead">
                            <tr class="table-prices__tr table-prices__tr_head">
                                                                    <td class="table-prices__td table-prices__td_head">
                                        Термін                                             </td>
                                                                    <td class="table-prices__td table-prices__td_head">
                                           Вартість                                          </td>
                                                                    <td class="table-prices__td table-prices__td_head">
                                              В місяць
                                    </td>
                                                            </tr>
                        </thead>
                        <tbody class="table-prices__tbody">
                                                        

                        <?php
                                                        
                                                        while($info = mysqli_fetch_assoc($full_day)){
                                                            ?>
                                                            <tr class="table-prices__tr table-prices__tr_body">
                                                            <td class="table-prices__td table-prices__td_body"><?php  echo $info['count_mounth'] ?> </td>
                                                            <td class="table-prices__td table-prices__td_body"><?php  echo $info['sum'] ?> </td>
                                                            <td class="table-prices__td table-prices__td_body"><?php  echo $info['sumPermounth'] ?> </td>
                                                            </tr>
                                                           <?php
                                                        }
                                                        
                                                        ?>
                                              
                                                </tbody>
                    </table>
                </div>
            </div>
                    <div class="block-prices">
                <section class="card card-modal">
                    <h3 class="card__h card-modal__h tt-u">
                        Ранок                    </h3>
                                            <p class="card__p card-modal__p">
                            7:00-17:00                        </p>
                                            <ul class="card__ul card-modal__ul">
                                                            <li class="card__li card-modal__li">
                                    Безліміт відвідувань клубу:
                                </li>
                                                            <li class="card__li card-modal__li">
                                     - тренажерний зал
                                </li>
                                                            <li class="card__li card-modal__li">
                                     - зал єдиноборств
                                </li>
                                                            <li class="card__li card-modal__li">
                                     - зал кроссфіту
                                </li>
                                                            <li class="card__li card-modal__li">
                                    Перше БЕЗКОШТОВНЕ тренування з тренером
                                </li>
                                                            <li class="card__li card-modal__li">
                                    Сауна                                </li>

                        </ul>
                                            <h4 class="card__price card-modal__price">
                            700 грн.                        </h4>
                                    </section>
                <div class="table-wrap">
                    <table class="table-prices">
                        <thead class="table-prices__thead">
                            <tr class="table-prices__tr table-prices__tr_head">
                                                                    <td class="table-prices__td table-prices__td_head">
                                        Термін                                             </td>
                                                                    <td class="table-prices__td table-prices__td_head">
                                            Вартість                                          </td>
                                                                    <td class="table-prices__td table-prices__td_head">
                                            В місяць
                                    </td>
                                                            </tr>
                        </thead>
                        <tbody class="table-prices__tbody">
                        <?php
                                                        
                                                        while($info = mysqli_fetch_assoc($morning)){
                                                            ?>
                                                            <tr class="table-prices__tr table-prices__tr_body">
                                                            <td class="table-prices__td table-prices__td_body"><?php  echo $info['count_mounth'] ?> </td>
                                                            <td class="table-prices__td table-prices__td_body"><?php  echo $info['sum'] ?> </td>
                                                            <td class="table-prices__td table-prices__td_body"><?php  echo $info['sumPermounth'] ?> </td>
                                                            </tr>
                                                           <?php
                                                        }
                                                        
                                                        ?>
                                                </tbody>
                    </table>
                </div>
            </div>
                    <div class="block-prices">
                <section class="card card-modal">
                    <h3 class="card__h card-modal__h tt-u">
                        Групові заняття                    </h3>
                                    </section>
                <div class="table-wrap">
                    <table class="table-prices">
                        <thead class="table-prices__thead">
                            <tr class="table-prices__tr table-prices__tr_head">
                                                                    <td class="table-prices__td table-prices__td_head">
                                        Вид карти                                                             </td>
                                                                    <td class="table-prices__td table-prices__td_head">
                                           Вартість                                             </td>
                                                                    <td class="table-prices__td table-prices__td_head">
                                          Вартість 1-го відвідування
                                    </td>
                                                            </tr>
                        </thead>
                        <tbody class="table-prices__tbody">
                        <?php
                                                        
                                                        while($info = mysqli_fetch_assoc($group_training)){
                                                            ?>
                                                            <tr class="table-prices__tr table-prices__tr_body">
                                                            <td class="table-prices__td table-prices__td_body"><?php  echo $info['count_mounth'] ?> </td>
                                                            <td class="table-prices__td table-prices__td_body"><?php  echo $info['sum'] ?> </td>
                                                            <td class="table-prices__td table-prices__td_body"><?php  echo $info['sumPermounth'] ?> </td>
                                                            </tr>
                                                           <?php
                                                        }
                                                        
                                                        ?>
                                                </tbody>
                    </table>
                </div>
            </div>
                    <div class="block-prices">
                <section class="card card-modal">
                    <h3 class="card__h card-modal__h tt-u">
                        Персональні тренування  (тренажерний зал)                    </h3>
                                    </section>
                <div class="table-wrap">
                    <table class="table-prices">
                        <thead class="table-prices__thead">
                            <tr class="table-prices__tr table-prices__tr_head">
                                                                    <td class="table-prices__td table-prices__td_head">
                                        Категорія                                          </td>
                                                                    <td class="table-prices__td table-prices__td_head">
                                           Вартість за 1                                       </td>
                                                                    <td class="table-prices__td table-prices__td_head">
                                           Вартість за 10+1
                                    </td>
                                                            </tr>
                        </thead>
                        <tbody class="table-prices__tbody">
                        <?php
                                                        
                                                        while($info = mysqli_fetch_assoc($personal_training)){
                                                            ?>
                                                            <tr class="table-prices__tr table-prices__tr_body">
                                                            <td class="table-prices__td table-prices__td_body"><?php  echo $info['count_mounth'] ?> </td>
                                                            <td class="table-prices__td table-prices__td_body"><?php  echo $info['sum'] ?> </td>
                                                            <td class="table-prices__td table-prices__td_body"><?php  echo $info['sumPermounth'] ?> </td>
                                                            </tr>
                                                           <?php
                                                        }
                                                        
                                                        ?>
                                                </tbody>
                    </table>
                </div>
            </div>
                    <div class="block-prices">
                <section class="card card-modal">
                    <h3 class="card__h card-modal__h tt-u">
                        Разові тренування                    </h3>
                                    </section>
                <div class="table-wrap">
                    <table class="table-prices">
                        <thead class="table-prices__thead">
                            <tr class="table-prices__tr table-prices__tr_head">
                                                                    <td class="table-prices__td table-prices__td_head">
                                                                                                                          </td>
                                                                    <td class="table-prices__td table-prices__td_head">
                                            Кількість                                       </td>
                                                                    <td class="table-prices__td table-prices__td_head">
                                            Вартість                                        </td>
                                                                    <td class="table-prices__td table-prices__td_head">
                                            Строк дії
                                    </td>
                                                            </tr>
                        </thead>
                        <tbody class="table-prices__tbody">
                        <?php
                                                        
                                                        while($info = mysqli_fetch_assoc($single_training)){
                                                            ?>
                                                            <tr class="table-prices__tr table-prices__tr_body">
                                                            <td class="table-prices__td table-prices__td_body"><?php  echo $info['count_mounth'] ?> </td>
                                                            <td class="table-prices__td table-prices__td_body"><?php  echo $info['sum'] ?> </td>
                                                            <td class="table-prices__td table-prices__td_body"><?php  echo $info['sumPermounth'] ?> </td>
                                                            </tr>
                                                           <?php
                                                        }
                                                        
                                                        ?>
                                                </tbody>
                    </table>
                </div>
            </div>
            </section>

</section>

<section class="services">
    <div class="wrapper">
        <div class="contact_form">
            <form action="telegram_bot.php" method="post">
                    <div class="title">
                        <h1>Зв'яжіться з нами</h1>
                    </div>
                <hr>

                <div class="wrap_fields">
                    <div class="fields">
                        <label>
                            Ваше ім'я
                        </label>
                            <input type="text" placeholder="Ваше ім'я " name="user_name" required>


                        <label>
                            Ваш номер телефону
                        </label>
                            <input type="tel" name="user_phone" placeholder="Ваш номер телефону" required>

                        <label>
                            Ваш email
                        </label>
                            <input type="email" name="user_email" placeholder=" Ваш email" required>

                    </div>
                    <button type="submit">
                        <a>Відправити</a>
                    </button>
                </div>
            </form>

            <div class="contact">
                <div class="info">
                   <h2>Наша андреса</h2>

                    <p>Loreplem</p>
                </div>
                <div class="info">
                    <h2>Зателефонуйте нам</h2>
                    <p>-12319410753</p>
                </div>
            </div>

        </div>
    </div>
</section>


</body>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15/dist/smooth-scroll.polyfills.min.js"></script>
<script>


    var scroll = new SmoothScroll('a[href*="#"]');

    AOS.init();
// Get the modal
var modals = document.getElementById("myModal");
var log_window = document.getElementById("login");

// Get the button that opens the modal
var btn1 = document.getElementById("myBtn1");
var btn2 = document.getElementById("myBtn2");
var btn3 = document.getElementById("myBtn3");  
var btn_log  = document.getElementById("log_but") ;

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("controls__btn")[0];

// When the user clicks on the button, open the modal
btn1.onclick = function() {
	modals.style.display= 'block';
}

btn2.onclick = function() {

	modals.style.display= 'block';
}


btn3.onclick = function() {
	modals.style.display= 'block';
}
btn_log.onclick = function() {
    if (log_window.style.display === 'none'){
        log_window.style.display= 'block';
    }
    else {
        log_window.style.display = 'none';}
        
	
}

span.onclick = function() {
	modals.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
	if (event.target === modals  ) {
		modals.style.display = "none";
        log_window.style.display = "none";
	}
}


</script>
</html>