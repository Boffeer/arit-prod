<?php
	$url;
	$get_current_url = home_url($url->requiest);
?>
    <div class="form-wrapper">
      <div class="form-map">
        <script class="ym-lazy" type="text/javascript" charset="utf-8" async data-src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A4e0949e6941d52d78f94a84b1d3430955dacdefab8154e7ad5c100bae25f7aa5&amp;amp;width=100%25&amp;amp;lang=ru_RU&amp;amp;scroll=true"></script>
      </div>
      <div class="container">
        <form class="form" id="mainform" method="post" onsubmit="return false;">
          <div class="form__border">
            <h2 class="form__title">Оставить заявку</h2>
                        <div class="form-fields">
                          <div class="form-input-wrap">
													<input type="hidden" name="arit_formpage" value="<?php echo add_query_arg( $wp->query_vars, home_url( $wp->request ) ); ?>">
                          </div>
                          <div class="form-input-wrap">
                            <input type="hidden" name="arit_formname" value="Форма в подвале">
                          </div>
                          <div class="form-input-wrap">
                            <input class="form__input" required name="arit_name" type="text" placeholder="Имя">
                          </div>
                          <div class="form-input-wrap">
                            <input class="form__input input--phone" required name="arit_phone" type="tel" autocorrect="off" autocomplete="tel" placeholder="Телефон">
                          </div>
                          <div class="form-input-wrap">
                            <input class="form__input" name="arit_email" type="email" autocapitalize="off" autocorrect="off" autocomplete="email" placeholder="Эл. почта" data-value-missing="Пожалуйста, введите свою электронную почту" data-value-invalid="Проверьте правильно ли написана почта">
                          </div>
                          <div class="form-input-wrap form-input-wrap--button">
                            <button class="primary-button form__button" >Отправить заявку</button>
                          </div>
                        </div>
                        <div class="gdpr">Нажимая на эту кнопку, Вы даете согласие 
                          <button class="gdpr__button">на обработку персональных данных</button>
                        </div>
          </div>
				<!-- .form-message -->
				<div class="form-message" style="padding: 20px; border-radius: 10px;">
				</div>



				<!-- /.form-message -->
        </form>
      </div>
    </div>
    <footer class="footer-wrapper" id="footer">
      <div class="container">
        <div class="footer">
          <div class="footer-top"><a class="footer__logo" href="#top"><img src="<?php echo get_template_directory_uri()?>/img/0-common/logo-solid.svg" alt="logo"></a>
            <div class="footer-top__content">
              <p class="footer-copyright">Компания &laquo;Академия развития инновационных технологий&raquo;<br> Все права защищены &copy; 2010-2021</p>
            </div>
          </div>
          <nav class="footer-nav">
            <h3 class="footer-title">Разделы</h3>
            <ul class="footer-nav-list">
              <li class="footer-nav-list-item"><a class="footer-nav-list-item__text" href="#about">Об академии</a></li>
              <li class="footer-nav-list-item"><a class="footer-nav-list-item__text" href="#seminars">Семинары</a></li>
              <li class="footer-nav-list-item"><a class="footer-nav-list-item__text" href="#webinars">Вебинары</a></li>
              <li class="footer-nav-list-item"><a class="footer-nav-list-item__text" href="#learning">Обучение</a></li>
              <li class="footer-nav-list-item"><a class="footer-nav-list-item__text" href="#media">Медиа</a></li>
              <li class="footer-nav-list-item"><a class="footer-nav-list-item__text" href="#news">Новости</a></li>
              <li class="footer-nav-list-item"><a class="footer-nav-list-item__text" href="#testimonials">Отзывы</a></li>
              <li class="footer-nav-list-item"><a class="footer-nav-list-item__text" href="#partners">Партнеры</a></li>
              <li class="footer-nav-list-item"><a class="footer-nav-list-item__text" href="#contacts">Контакты</a></li>
            </ul>
          </nav>
          <div class="footer-contacts-wrap">
            <h3 class="footer-title">Контакты</h3>
            <div class="footer-contacts">
              <div class="footer-contact footer-contact--geo"><img src="<?php echo get_template_directory_uri()?>/img/0-common/geo-footer.svg" alt="geo">
                <p class="footer-contacts__text">Москва, улица Образцова, д. 4</p>
              </div><a class="footer-contact footer-contact--phone" href="tel:+74997026069"><img src="<?php echo get_template_directory_uri()?>/img/0-common/phone.svg" alt="phone">
                <p class="footer-contacts__text">+7 (499) 702-60-69</p></a><a class="footer-contact footer-contact--mail" href="mailto:undefined"><img src="<?php echo get_template_directory_uri()?>/img/0-common/mail.svg" alt="email">
                <div class="footer-contacts__text">dpo@dpoarit.ru</div></a>
              <button class="footer_get-contacts secondary-button">Получить консультацию</button>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <div class="consult-pop-wrap" hidden>
      <button class="pop-closer">X</button>
      <div class="pop-aligner">
        <div class="consult-pop">
          <form class="form pop-form" method="post" onsubmit="return false">
            <div class="form__border">
              <h2 class="form__title">Оставить заявку</h2>
                          <div class="form-fields">
                            <div class="form-input-wrap">
                              <input class="formname" type="hidden" name="arit_formname" value="Всплывающее окно">
													<input type="hidden" name="arit_formpage" value="<?php echo add_query_arg( $wp->query_vars, home_url( $wp->request ) ); ?>">
                            </div>
                            <div class="form-input-wrap">
                              <input class="form__input" required name="arit_name" type="text" placeholder="Имя">
                            </div>
                            <div class="form-input-wrap">
                              <input class="form__input input--phone" required name="arit_phone" type="tel" autocorrect="off" autocomplete="tel" placeholder="Телефон">
                            </div>
                            <div class="form-input-wrap">
                              <input class="form__input" name="arit_email" type="arit" autocapitalize="off" autocorrect="off" autocomplete="email" placeholder="Эл. почта" data-value-missing="Пожалуйста, введите свою электронную почту" data-value-invalid="Проверьте правильно ли написана почта">
                            </div>
                            <div class="form-input-wrap form-input-wrap--button">
                              <button class="primary-button form__button">Отправить заявку</button>
                            </div>
                          </div>
                          <div class="gdpr">Нажимая на эту кнопку, Вы даете согласие 
                            <a href="" class="gdpr__button">на обработку персональных данных</a>
                          </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="burger-menu">
      <div class="burger-nav"></div>
      <div class="burger-contacts"></div>
    </div>
    <!--<script src="js/modal.min.js"></script>
    <script src="js/blocks/headerAndFooter.min.js"></script>
    <script src="js/blocks/tabbar.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/zzz-main.min.js"></script>-->

	<script>



		// var formElement = document.querySelector("#mainform");
		var getForms = [...document.querySelectorAll(".form")];
    var formData = new FormData(); 
		var actor = "<?php echo get_template_directory_uri() . '/form.php' ?>";

		var strToSend = '';
		

		getForms.map(function(formItem){
			formItem.addEventListener('submit', function(){
				var inputs = [...this.querySelectorAll("input")];
				inputs.map(function(inputItem){
					strToSend = strToSend + inputItem.name + '=' + inputItem.value + '&';
				})	

				var xhr = new XMLHttpRequest;
				xhr.onload = function() {
					if (xhr.status != 200) {
						console.log(xhr.status)
						console.log(xhr.statusText)
					} else {
						console.log('Форма отправлена')
					}
					formItem.querySelector('.form__button').classList.add('form__button--pressed');
					formItem.querySelector('.form__button').setAttribute('disabled', 'disabled')
					formItem.querySelector('.form__button').innerText = 'Заявка отпаравлена'
				}

				xhr.open('POST', actor);
				xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xhr.send(strToSend);
				return false
			})
		});

	</script>


	<?php wp_footer();?>
  </body>
</html>
