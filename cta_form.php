<form class="cta__form" action="send_email.php" method="post">
  <label class="form-item cta__form-column cta__form-column--field">
    <span class="form-label">Как к вам обращаться?</span>
    <input class="form-control" type="text" name="name" placeholder="Как к вам обращаться?" required>
  </label>
  <label class="form-item cta__form-column cta__form-column--field">
    <span class="form-label">Ваш номер телефона</span>
    <input class="form-control" type="tel" name="phone" placeholder="+7 (___) ___-__-__" required>
  </label>
  <div class="cta__form-column cta__form-column--submit">
    <input class="cta__form-submit" type="submit" value="Отправить заявку">
    <label class="form-agree">
      <input type="checkbox" name="agree" value="yes" required>
      Согласен на обработку персональных данных
    </label>
  </div>
</form>
<div class="cta__note">
  <p>Помните! Заполнение и отправка заявки вас ни к чему не обязывает, вы сможете просто проконсультироваться и, при желании, воспользоваться нашей услугой.</p>
</div>

