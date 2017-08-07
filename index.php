<?
// подключаем файл с функциями
include_once "functions.php"
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Сберегательные программы кредитного потребительского кооператива СОЮЗ-ЗБЕРЗАЙМ</title>
  <style>
    <?php include "critical-style.css";?>
  </style>
</head>
<body>
  <header class="site-header">
    <div class="site-header__inner">
      <div class="site-header__column site-header__logo logo">
        <a href="#" class="logo__link">
          <svg xmlns="http://www.w3.org/2000/svg" width="186" viewBox="0 0 390.1 68.2"><path fill="#83c140" fill-rule="evenodd" d="M67.9 37.3a33.9 33.9 0 0 1-2.4 9.7H29.2l7.2-9.7z"/><path fill="#00753a" fill-rule="evenodd" d="M28.5 21.1h10.2l-7.2 9.8H0a33.9 33.9 0 0 1 2.4-9.8h26.1zm70.2 24.2h19v5.3H87.6v-1.3l19-25.7h-19v-5.3h30.1v1.3l-19 25.7zm104.7-5.4v10.7h-6.3V18.3h20c6.7 0 11.5 4.2 11.5 11s-4.9 10.5-11.5 10.5zm0-15.9v10.2h14.1a4.6 4.6 0 0 0 4.8-4.8c0-3.1-1.9-5.5-5.1-5.5zM167 24v7.4h18V37h-18v8h24.2v5.6h-30.5V18.3h29.5v5.6zm-37.1-.2v6.3c4.9 0 9.8-.1 14.7 0s7.4 1.6 9.4 4.7 1.6 5.4 1.2 8.1a9.7 9.7 0 0 1-5.9 6.7 20.3 20.3 0 0 1-6.7 1.1h-19v-.2c-.1-10.6 0-21.3-.1-31.9v-.2h29.3v5.4h-22.9zm.1 11.9c-.1 3.1 0 6.2 0 9.3 5-.1 10.1.1 15.1-.1 2.3 0 4.6-1.9 4.4-4.3s-2.4-4.7-5-4.8c-4.8-.2-9.7 0-14.5-.1zm-68 18A34.1 34.1 0 0 1 0 37.3h26.7L15.9 51.9v1.6H62z"/><path fill="#83c140" fill-rule="evenodd" d="M34 0a34.1 34.1 0 0 1 34 30.9H41.2L52 16.2v-1.5H5.9A34.1 34.1 0 0 1 34 0zM245.3 45.3h19v5.3h-30.1v-1.3l19-25.7h-19v-5.3h30.1v1.3l-19 25.7zm92-18.3l-20.4 23.6h-6.3V18.3h6.1v23.5L337 18.3h6.3v32.3h-6.1V27zm46.8.8L371 44.5l-13.1-16.8c.2 5.1.2 10.3.2 15.4v7.4h-6.2V18.3h6.6L371.1 35 384 18.2h6.2v32.4h-6.3v-7.4c0-5.1 0-10.3.2-15.4zm-105.2 15l-3.7 7.8h-6.8l15.7-32.3h6.5l15.8 32.3h-6.8l-3.6-7.8zm53.9-30.2h-12.1v5.6h12.1v-5.6zm-51.3 24.7h11.8l-5.9-12.4z"/></svg>

        </a>
        <span class="logo__text">преумножим ваши сбережения быстро и законно</span>
      </div>
      <div class="site-header__column site-header__communications communications-header">
        <a class="communications-header__phone" href="tel:8 (800) 555-41-96">8 (800) 555-41-96</a>
        <a class="communications-header__callback" data-fancybox href="#popup-callback">
          <svg class="communications-header__callback-icon" width="32" height="32">
            <use xlink:href="images/symbols.svg#call"></use>
          </svg>
          Заказать звонок
        </a>
      </div>
    </div>
  </header>


  <section class="welcome">
    <div class="welcome__inner">
      <div class="welcome__content welcome__column">
        <h2 class="welcome__title">
          Откройте депозит в «СОЮЗ<span class="company-name"><span class="company-name__piece">ZБЕР</span>ZАЙМ</span>»
          <small>и получите пассивный доход <mark>до 17%</mark> в год со 100% защитой своих финансов</small>
        </h2>
        <ul class="welcome__features">
          <li>Пайщикам кооператива выплачиваем стабильный процент прибыли</li>
          <li>Ваш депозит будет застрахован на добровольной основе</li>
          <li>Процент депозита выше, чем у любого банка</li>
          <li>Деятельность «СОЮЗ­ ZБЕРZАЙМ» регулируется ЦБ РФ</li>
          <li>Возможность открыть вклад по повышенной ставке в 24% годовых во время акций</li>
          <li>Пакетные продукты под любые задачи — накопительные или с возможностью каждый месяц снимать проценты</li>
        </ul>
      </div>
      <div class="welcome__video welcome__column">
        <div class="welcome__video-poster" style="background-image: url(images/ded.png);">
          <!-- <a class="welcome__video-play" data-fancybox href="https://www.youtube.com/watch?v=NXIH8-4Y0Bk&amp;autoplay=1&amp;showinfo=0">Смтреть видео</a> -->
        </div>
      </div>
    </div>

    <div class="cta cta--pull-left">
      <div class="cta__inner">
        <div class="cta__frame">
          <h2 class="cta__title">Рассчитайте свою будущую прибыль</h2>
          <p>Отправьте заявку и наш менеджер свяжется с вами для уточнения деталей.</p>
          <?
          // подключаем форму сбора лидов
          include "cta_form.php";
          ?>
        </div>
      </div>
    </div>
  </section>

  <section class="section intro">
    <div class="container">
      <h2 class="intro__title section__title">Чтобы найти надежный источник пассивной прибыли, надо постараться</h2>
      <div class="intro__content">
        <div class="intro__text intro__column">
          <p>Когда основная масса потребителей становится неплатежеспособной, инфляция растет немыслимыми темпами, а заработная плата не индексируется для покрытия возникающей разницы, приходится искать дополнительные источники дохода, чтобы сохранить качество жизни на комфортном уровне.</p>
          <p>Одним из наиболее привлекательных источником такого дохода является пассивная прибыль — инвестиции в надежной форме на выгодных условиях с доходностью выше банковского депозита, а именно — приобретение паев потребительского кредитного кооператива.</p>
        </div>
        <div class="intro__image intro__column">
          <img src="images/intro/green.png" srcset="images/intro/green@2x.png 2x" alt="">
        </div>
      </div>

      <section class="intro-subsection">
        <h3 class="intro-subsection__title">«Ежемесячный доход»</h3>
        <div class="intro-subsection__content">
          <div class="intro-subsection__column">
            <table class="intro__table">
              <caption>
                <b>Ежемесячный доход +</b>
                10 000 руб. – 1 400 000 руб.
              </caption>
              <thead>
                <tr>
                  <th>срок, мес.</th>
                  <th>годовой %</th>
                  <th class="intro__table-accent">сумма взноса, руб.</th>
                  <th>сумма по окончанию срока<span class="intro__note-sign">*</span>, руб.</th>
                  <th>ежемесячная компенсация<span class="intro__note-sign">*</span>, руб.</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td data-th="срок, мес.">3</td>
                  <td data-th="годовой %">12</td>
                  <td data-th="сумма взноса, руб." class="intro__table-accent">1 200 000</td>
                  <td data-th="сумма по окончанию срока*, руб.">36 000</td>
                  <td data-th="ежемесячная компенсация*, руб.">12 000</td>
                </tr>
                <tr>
                  <td data-th="срок, мес.">6</td>
                  <td data-th="годовой %">13</td>
                  <td data-th="сумма взноса, руб." class="intro__table-accent">30 000</td>
                  <td data-th="сумма по окончанию срока*, руб.">1 950</td>
                  <td data-th="ежемесячная компенсация*, руб.">325</td>
                </tr>
                <tr>
                  <td data-th="срок, мес.">12</td>
                  <td data-th="годовой %">14</td>
                  <td data-th="сумма взноса, руб." class="intro__table-accent">500 000</td>
                  <td data-th="сумма по окончанию срока*, руб.">70 000</td>
                  <td data-th="ежемесячная компенсация*, руб.">5 833</td>
                </tr>
              </tbody>
            </table>
            <div class="intro__footnote-table">
              <p><span class="intro__note-sign">*</span> – за вычетом НДФЛ 35%</p>
            </div>
          </div>
          <div class="intro-subsection__column intro-subsection__column--text">
            <p>Предоставляем возможность внести сумму от 10 000 руб. до 1 400 000 руб. с возможностью пополнения сбережений и получения процентов ежемесячно.</p>
            <p>Проценты по программе с вкладом составляют:</p>
            <ul>
              <li>на 3 мес. – <b>12%</b>,</li>
              <li>на 6 мес. – <b>13%</b>,</li>
              <li>на 12 мес. – <b>14%</b>.</li>
            </ul>
            <a class="intro-subsection__button button" data-fancybox href="#popup-callback">Выбрать</a>
          </div>
        </div>
      </section>

      <hr class="intro__divider-subsection">

      <section class="intro-subsection intro-subsection--reverse">
        <h3 class="intro-subsection__title">«Cберегательный»</h3>
        <div class="intro-subsection__content">
          <div class="intro-subsection__column">
            <table class="intro__table">
              <caption>
                <b>Сберегательный +</b>
                10 000 руб. – 1 400 000 руб.
              </caption>
              <thead>
                <tr>
                  <th>срок, мес.</th>
                  <th>годовой %</th>
                  <th class="intro__table-accent">сумма взноса, руб.</th>
                  <th>сумма по окончанию срока<span class="intro__note-sign">*</span>, руб.</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td data-th="срок, мес.">3</td>
                  <td data-th="годовой %">15</td>
                  <td class="intro__table-accent" data-th="сумма взноса, руб.">10 000</td>
                  <td data-th="сумма по окончанию срока*, руб.">368</td>
                </tr>
                <tr>
                  <td data-th="срок, мес.">6</td>
                  <td data-th="годовой %">16</td>
                  <td class="intro__table-accent" data-th="сумма взноса, руб.">1 400 000</td>
                  <td data-th="сумма по окончанию срока*, руб.">107 100</td>
                </tr>
                <tr>
                  <td data-th="срок, мес.">12</td>
                  <td data-th="годовой %">17</td>
                  <td class="intro__table-accent" data-th="сумма взноса, руб.">500 000</td>
                  <td data-th="сумма по окончанию срока*, руб.">79 750</td>
                </tr>
              </tbody>
            </table>
            <div class="intro__footnote-table">
              <p><span class="intro__note-sign">*</span> – за вычетом НДФЛ 35%</p>
            </div>
          </div>
          <div class="intro-subsection__column intro-subsection__column--text">
            <p>Предоставляем возможность внести сумму от 10 000 руб. до 1 400 000 руб. с возможностью пополнения сбережений и получения процентов ежемесячно.</p>
            <p>Проценты по программе с вкладом составляют:</p>
            <ul>
              <li>на 3 мес. – <b>15%</b>,</li>
              <li>на 6 мес. – <b>16%</b>,</li>
              <li>на 12 мес. – <b>17%</b>.</li>
            </ul>
            <a class="intro-subsection__button button" data-fancybox href="#popup-callback">Выбрать</a>
          </div>
        </div>
      </section>

    </div>
    <div class="container-slim">
      <section class="intro-bonuses">
        <h3 class="intro-bonuses__title"><span>Дополнительные бонусы – кто от них откажется?</span></h3>
        <ul class="intro-bonuses__list">
          <li class="intro-bonuses__item">
            <div class="intro-bonuses__text">
              <b class="intro-bonuses__caption">Регулярные выплаты пайщикам</b>
              <div class="intro-bonuses__description">
                <p>Мы следим за регулярностью выплат. Поэтому вы можете быть уверены, что выплата придет вовремя!</p>
              </div>
            </div>
          </li>
          <li class="intro-bonuses__item">
            <div class="intro-bonuses__text">
              <b class="intro-bonuses__caption">Акция «24%»</b>
              <div class="intro-bonuses__description">
                <p>В праздничные дни кооператив часто предоставляет пайщикам особые условия договора с годовым процентом равным 24 для вклада на срок 6 и 12 мес.</p>
              </div>
            </div>
          </li>
          <li class="intro-bonuses__item">
            <div class="intro-bonuses__text">
              <b class="intro-bonuses__caption">Сертификаты всем клиентам</b>
              <div class="intro-bonuses__description">
                <p>Дарим сертификаты на сумму 6 000 рублей, при открытии нового офиса или на праздники</p>
              </div>
            </div>
          </li>
        </ul>
      </section>
    </div>
  </section>

  <section class="section container-fluid calculator">
    <h2 class="section__title">Калькулятор выгоды</h2>
    <div class="calculator__text">
      <p>Самостоятельно расчитайте выгоду от предложенных бонусов быстро и легко, с помощью онлайн-калькулятора</p>
    </div>
    <form class="calculator-form">
      <div class="calculator-form__item">
        <b class="calculator-form__caption">Выберите тариф</b>
        <div class="calculator-form__group-radio">
          <label class="calculator-form__radio">
            <input class="calculator-form__radio-input" type="radio" name="tarif" value="every-month" checked>
            <span class="calculator-form__radio-caption">«Ежемесячный доход»</span>
          </label>
          <label class="calculator-form__radio">
            <input class="calculator-form__radio-input" type="radio" name="tarif" value="save">
            <span class="calculator-form__radio-caption">«Сберегательный»</span>
          </label>
        </div>
      </div>
      <div class="calculator-form__item">
        <b class="calculator-form__caption">Первоначальная сумма взноса</b>
        <div class="calculator-form__field">
          <input class="calculator-form__input form-control" type="number" value="10000" name="amount" min="0" max="1000000" step="10">
          <span class="calculator-form__filed-after">руб.</span>
        </div>
      </div>
      <div class="calculator-form__item">
        <b class="calculator-form__caption">Укажите срок размещения сбережений</b>
        <div class="calculator-form__range" id="month-slider"></div>
      </div>
      <div class="calculator-form__output-holder">
        <div class="calculator-form__output"></div>
        <div class="calculator-form__output-ndfl">Ежемесячная компенсация за вычетом НДФЛ 35%: </div>
      </div>
      <a class="button" data-fancybox href="#popup-callback">Зафиксировать прибыль</a>
    </form>
  </section>

  <section class="section safety">
    <div class="container">
      <h2 class="safety__title section__title">Защитим и приумножим ваши сбережения</h2>
      <ul class="safety__list">
        <li class="safety__item">
          <svg class="safety__icon" width="64" height="64">
            <use xlink:href="images/symbols.svg#bank"></use>
          </svg>
          <b class="safety__caption">Высокие проценты</b>
          <div class="safety__description">
            <p>Доходность наших продуктов превышает банковские проценты на депозит.</p>
          </div>
        </li>
        <li class="safety__item">
          <svg class="safety__icon" width="64" height="64">
            <use xlink:href="images/symbols.svg#profile"></use>
          </svg>
          <b class="safety__caption">Доступность</b>
          <div class="safety__description">
            <p>Пайщиком может стать любой гражданин РФ старше 16 лет с обязательным предоставлением паспорта.</p>
          </div>
        </li>
        <li class="safety__item">
          <svg class="safety__icon" width="64" height="64">
            <use xlink:href="images/symbols.svg#notebook"></use>
          </svg>
          <b class="safety__caption">Законность</b>
          <div class="safety__description">
            <p>Деятельность кредитного потребительского кооператива обеспечивается Федеральным законом No 190­ФЗ «О кредитной кооперации».</p>
          </div>
        </li>
        <li class="safety__item">
          <svg class="safety__icon" width="64" height="64">
            <use xlink:href="images/symbols.svg#stopwatch"></use>
          </svg>
          <b class="safety__caption">Контроль</b>
          <div class="safety__description">
            <p>Согласно закону пайщики становятся совладельцами кооператива и могут выполнять контролирующую функцию.</p>
          </div>
        </li>
        <li class="safety__item">
          <svg class="safety__icon" width="64" height="64">
            <use xlink:href="images/symbols.svg#wallet"></use>
          </svg>
          <b class="safety__caption">Повышение благосостояния пайщиков</b>
          <div class="safety__description">
            <p>Поощряем предпринимательскую деятельность, предлагая ссуды из паевого капитала на выгодных условиях.</p>
          </div>
        </li>
        <li class="safety__item">
          <svg class="safety__icon" width="64" height="64">
            <use xlink:href="images/symbols.svg#file"></use>
          </svg>
          <b class="safety__caption">Прозрачное сотрудничество</b>
          <div class="safety__description">
            <p>Между кооперативом и пайщиками заключается договор, который имеет юридическую силу с момента подписания обеими сторонами.</p>
          </div>
        </li>
        <li class="safety__item">
          <svg class="safety__icon" width="64" height="64">
            <use xlink:href="images/symbols.svg#mac"></use>
          </svg>
          <b class="safety__caption">Полная открытость</b>
          <div class="safety__description">
            <p>Все операции по открытию счета, вложениям и выплатам можно выполнять в режиме онлайн на нашем сайте или при личном общении с нашими сотрудниками в офисе кооператива.</p>
          </div>
        </li>
        <li class="safety__item">
          <svg class="safety__icon" width="64" height="64">
            <use xlink:href="images/symbols.svg#badge"></use>
          </svg>
          <b class="safety__caption">100% безопасность</b>
          <div class="safety__description">
            <p>Гарантируем высокий уровень защиты паевого капитала компенсационным и резервным фондами.</p>
          </div>
        </li>
        <li class="safety__item">
          <svg class="safety__icon" width="64" height="64">
            <use xlink:href="images/symbols.svg#heart"></use>
          </svg>
          <b class="safety__caption">Социальные программы</b>
          <div class="safety__description">
            <p>Пенсионеры получают особо выгодные льготные условия вкладов.</p>
          </div>
        </li>
        <li class="safety__item">
          <svg class="safety__icon" width="64" height="64">
            <use xlink:href="images/symbols.svg#thumbs-up"></use>
          </svg>
          <b class="safety__caption">Приятные сюрпризы</b>
          <div class="safety__description">
            <p>Процентная ставка по договорам, заключенным во время очередной акции, может составлять 24% годовых.</p>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <section class="section shareholders">
    <div class="container-slim">
      <h2 class="section__title">Такой возможностью грех не воспользоваться</h2>
      <div class="shareholders__text">
        <p>В безопасном сохранении аккумулированных сбережений, обеспечивающем достаточно высокую прибыль на капитал, заинтересованы все. Поэтому наши сберегательные программы универсальны и отличаются только периодом выплаты процентов и их размером. В целом можно выделить три основные категории пайщиков кредитного потребительского кооператива:</p>
      </div>
      <ul class="shareholders__category-list">
        <li class="shareholders__category-item">
          <div class="shareholders__category-icons-holder">
            <svg class="shareholders__category-icon" width="116" height="116">
              <use xlink:href="images/symbols.svg#man"></use>
            </svg>
            <svg class="shareholders__category-icon" width="116" height="116">
              <use xlink:href="images/symbols.svg#man--hover"></use>
            </svg>
          </div>
          <div class="shareholders__category-content">
            <b class="shareholders__category-caption">Обычные люди</b>
            <div class="shareholders__category-description">
              <p>Пайщики любого рода занятий с излишком денег, из которых они хотят сформировать резервный или целевой фонд, снизив инфляционные риски.</p>
            </div>
          </div>
        </li>
        <li class="shareholders__category-item">
          <div class="shareholders__category-icons-holder">
            <svg class="shareholders__category-icon" width="116" height="116">
              <use xlink:href="images/symbols.svg#oldman"></use>
            </svg>
            <svg class="shareholders__category-icon" width="116" height="116">
              <use xlink:href="images/symbols.svg#oldman--hover"></use>
            </svg>
          </div>
          <div class="shareholders__category-content">
            <b class="shareholders__category-caption">Социально незащищенная группа</b>
            <div class="shareholders__category-description">
              <p>Пайщики с небольшой аккумулированной суммой, которую они намерены приумножить.</p>
            </div>
          </div>
        </li>
        <li class="shareholders__category-item">
          <div class="shareholders__category-icons-holder">
            <svg class="shareholders__category-icon" width="116" height="116">
              <use xlink:href="images/symbols.svg#businessman"></use>
            </svg>
            <svg class="shareholders__category-icon" width="116" height="116">
              <use xlink:href="images/symbols.svg#businessman--hover"></use>
            </svg>
          </div>
          <div class="shareholders__category-content">
            <b class="shareholders__category-caption">Бизнесмены</b>
            <div class="shareholders__category-description">
              <p>Пайщики, которые выбирают выгодные условия для надежного инвестирования части прибыли от своей предпринимательской деятельности.</p>
            </div>
          </div>
        </li>
      </ul>

      <div class="shareholders__subsection">
        <h3 class="shareholders__subsection-title">Наше предложение заинтересует тех, кто:</h3>
        <ul class="shareholders-targets">
          <li>Хочет иметь надежный пассивный доход</li>
          <li>Не доверяет инвестиционным инструментам с высоким риском</li>
          <li>Отказывается от банков из-­за низкого депозитного процента</li>
          <li>Поставил перед собой цель накопить конкретную сумму</li>
          <li>Хочет обеспечить себе стабильное финансовое положение</li>
          <li>Привык извлекать выгоду из денежных активов</li>
          <li>Предпочитает максимально защищенные и гарантированные вклады</li>
          <li>Ищет возможность получить доступ к ссудам на выгодных условиях для своего бизнеса</li>
        </ul>
      </div>
    </div>

    <div class="cta cta--pull-right">
      <div class="cta__inner">
        <div class="cta__frame">
          <h2 class="cta__title">Хотите узнать больше о нашей деятельности?</h2>
          <p>А может о своих возможностях? Отправьте заявку на консультацию у нашего ведущего специалиста!</p>
          <?
          // подключаем форму сбора лидов
          include "cta_form.php";
          ?>
        </div>
      </div>
    </div>
  </section>

  <section class="section stability">
    <div class="container">
      <h2 class="section__title">«СОЮЗ<span class="company-name"><span class="company-name__piece">ZБЕР</span>ZАЙМ</span>»: обеспечиваем клиентам финансовую стабильность</h2>
    </div>
    <div class="stability__group">
      <div class="stability__group-image">
        <img class="stability__image" src="images/stability/01.jpg" srcset="images/stability/01@2x.jpg 2x" alt="">
      </div>
      <div class="stability__group-container">
        <div class="stability__text">
          <p>Потребительский кредитный кооператив «СОЮЗ­ЗБЕРЗАЙМ» — это добровольное объединение грамотных специалистов, цель которых — создать благоприятные условия для сохранения и приумножения личных сбережений пайщиков. Кооператив является членом НП «СРО КПК «Союзмикрофинанс» с записью в реестре No 364, поэтому предоставляет твердые гарантии безопасности вкладов.</p>
        </div>
      </div>
    </div>
    <div class="stability__group stability__group--reverse">
      <div class="stability__group-image">
        <img class="stability__image" src="images/stability/02.jpg" srcset="images/stability/02@2x.jpg 2x" alt="">
      </div>
      <div class="stability__group-container">
        <div class="stability__text">
          <p>Мы обеспечиваем стабильный своевременный доход на вложенный капитал посредством перевода денежных средств на открытый счет пайщика в соответствии с условиями, определенными двумя сберегательными продуктами.</p>
          <p>Наша миссия заключается в предоставлении максимально гарантированных условий для размещения паенакоплений и в обеспечении финансовой стабильности широкого круга населения Российской Федерации без возрастных ограничений.</p>
        </div>
      </div>
    </div>
    <div class="stability__group">
      <div class="stability__group-image">
        <img class="stability__image" src="images/stability/03.jpg" srcset="images/stability/03@2x.jpg 2x" alt="">
      </div>
      <div class="stability__group-container">
        <div class="stability__text">
          <p>Мы оправдываем доверие пайщиков, достигая поставленные перед собой цели, безупречно выполняем взятые на себя договорные обязательства, предлагаем прибыльную деловую инициативу и предоставляем ссуды нашим пайщикам на выгодных условиях, таким образом, способствуем увеличению потребительского спроса.</p>
          <p>Все наши задачи выполняются с учетом интересов наших пайщиков.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section features">
    <h2 class="section__title visuallyhidden">Преимущества</h2>
    <div class="section__body container">
      <ul class="features__list">
        <li class="features__item">
          <div class="features__icon-wrapper">
            <svg class="features__icon" width="28" height="28">
              <use xlink:href="images/symbols.svg#star"></use>
            </svg>
          </div>
          <div class="features__text">
            <p>
              <b class="features__value">100%</b> безопасность вложений
            </p>
          </div>
        </li>
        <li class="features__item">
          <div class="features__icon-wrapper">
            <svg class="features__icon" width="28" height="28">
              <use xlink:href="images/symbols.svg#star"></use>
            </svg>
          </div>
          <div class="features__text">
            <p>
              <b class="features__value">10&nbsp;000</b> руб. – минимальный размер взноса
            </p>
          </div>
        </li>
        <li class="features__item">
          <div class="features__icon-wrapper">
            <svg class="features__icon" width="28" height="28">
              <use xlink:href="images/symbols.svg#star"></use>
            </svg>
          </div>
          <div class="features__text">
            <p>
              <b class="features__value">17%</b> годовых (24% – по акции)
            </p>
          </div>
        </li>
        <li class="features__item">
          <div class="features__icon-wrapper">
            <svg class="features__icon" width="28" height="28">
              <use xlink:href="images/symbols.svg#star"></use>
            </svg>
          </div>
          <div class="features__text">
            <p>
              <b class="features__value">3</b> месяца – минимальный срок вклада
            </p>
          </div>
        </li>
        <li class="features__item">
          <div class="features__icon-wrapper">
            <svg class="features__icon" width="28" height="28">
              <use xlink:href="images/symbols.svg#star"></use>
            </svg>
          </div>
          <div class="features__text">
            <p>
              <b class="features__value">22</b> региональных офиса
            </p>
          </div>
        </li>
        <li class="features__item">
          <div class="features__icon-wrapper">
            <svg class="features__icon" width="28" height="28">
              <use xlink:href="images/symbols.svg#star"></use>
            </svg>
          </div>
          <div class="features__text">
            <p>
              <b class="features__value">1&nbsp;225</b> пайщиков
            </p>
          </div>
        </li>
        <li class="features__item">
          <div class="features__icon-wrapper">
            <svg class="features__icon" width="28" height="28">
              <use xlink:href="images/symbols.svg#star"></use>
            </svg>
          </div>
          <div class="features__text">
            <p>
              <b class="features__value">4</b> года успешной деятельности
            </p>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <section class="section gallery">
    <h2 class="section__title">Открыты и прозрачны на 100%</h2>
    <div class="section__body">
      <div class="gallery-slider base-slider">

        <div class="gallery-slider__item">
          <a data-fancybox="gallery" data-type="image" href="images/offices/1.jpg"><img src="images/offices/thumbs/1.jpg" alt=""></a>
        </div>
        <div class="gallery-slider__item">
          <a data-fancybox="gallery" data-type="image" href="images/offices/2.jpg"><img src="images/offices/thumbs/2.jpg" alt=""></a>
        </div>
        <div class="gallery-slider__item">
          <a data-fancybox="gallery" data-type="image" href="images/offices/3.jpg"><img src="images/offices/thumbs/3.jpg" alt=""></a>
        </div>
        <div class="gallery-slider__item">
          <a data-fancybox="gallery" data-type="image" href="images/offices/4.jpg"><img src="images/offices/thumbs/4.jpg" alt=""></a>
        </div>
        <div class="gallery-slider__item">
          <a data-fancybox="gallery" data-type="image" href="images/offices/5.jpg"><img src="images/offices/thumbs/5.jpg" alt=""></a>
        </div>
        <div class="gallery-slider__item">
          <a data-fancybox="gallery" data-type="image" href="images/offices/6.jpg"><img src="images/offices/thumbs/6.jpg" alt=""></a>
        </div>
        <div class="gallery-slider__item">
          <a data-fancybox="gallery" data-type="image" href="images/offices/7.jpg"><img src="images/offices/thumbs/7.jpg" alt=""></a>
        </div>
        <div class="gallery-slider__item">
          <a data-fancybox="gallery" data-type="image" href="images/offices/8.jpg"><img src="images/offices/thumbs/8.jpg" alt=""></a>
        </div>
        <div class="gallery-slider__item">
          <a data-fancybox="gallery" data-type="image" href="images/offices/9.jpg"><img src="images/offices/thumbs/9.jpg" alt=""></a>
        </div>
        <div class="gallery-slider__item">
          <a data-fancybox="gallery" data-type="image" href="images/offices/10.jpg"><img src="images/offices/thumbs/10.jpg" alt=""></a>
        </div>
        <div class="gallery-slider__item">
          <a data-fancybox="gallery" data-type="image" href="images/offices/11.jpg"><img src="images/offices/thumbs/11.jpg" alt=""></a>
        </div>
        <div class="gallery-slider__item">
          <a data-fancybox="gallery" data-type="image" href="images/offices/12.jpg"><img src="images/offices/thumbs/12.jpg" alt=""></a>
        </div>
        <div class="gallery-slider__item">
          <a data-fancybox="gallery" data-type="image" href="images/offices/13.jpg"><img src="images/offices/thumbs/13.jpg" alt=""></a>
        </div>
        <div class="gallery-slider__item">
          <a data-fancybox="gallery" data-type="image" href="images/offices/14.jpg"><img src="images/offices/thumbs/14.jpg" alt=""></a>
        </div>
        <div class="gallery-slider__item">
          <a data-fancybox="gallery" data-type="image" href="images/offices/15.jpg"><img src="images/offices/thumbs/15.jpg" alt=""></a>
        </div>
        <div class="gallery-slider__item">
          <a data-fancybox="gallery" data-type="image" href="images/offices/16.jpg"><img src="images/offices/thumbs/16.jpg" alt=""></a>
        </div>
        <div class="gallery-slider__item">
          <a data-fancybox="gallery" data-type="image" href="images/offices/17.jpg"><img src="images/offices/thumbs/17.jpg" alt=""></a>
        </div>

      </div>
    </div>
  </section>

  <section class="section faq">
    <div class="container-slim">
      <h2 class="section__title faq__title">Посмотрите — возможно, среди этих вопросов есть и ваш</h2>
    </div>
    <div class="section__body container-slim">
      <dl class="faq__list js-accordion">
        <dt>Что такое кредитные кооперативы и что является их целью?</dt>
        <dd>
          <p>Кредитный потребительский кооператив – это некоммерческая организация, созданная в форме специализированного института финансовой взаимопомощи лицам, объединившимся на основе членства по признаку общности интересов для совместного сбережения денежных средств и защиты своих финансовых интересов. Деятельность кредитного потребительского кооператива осуществляется в соответствии с Федеральным законом № 190-ФЗ «О кредитной кооперации»</p>
        </dd>
        <dt>Как страхуются деньги пайщиков, размещённые в КПК «СОЮЗ-ЗБЕРЗАЙМ»?</dt>
        <dd>
          <p>Банк России осуществляет постоянный контроль над финансовой состоятельностью кооператива и соблюдением им нормативов (Федеральный Закон от 23.07.2013 № 251-ФЗ). Пайщики кредитных кооперативов, как и вкладчики банков, имеют гарантию возврата своих паенакоплений, своего пая. КПК «СОЮЗ-ЗБЕРЗАЙМ» является членом СРО «Союзмикрофинанс». Целью создания СРО является образование специального фонда для компенсации членам кооперативов их сбережений в случае невыполнения (ненадлежащего выполнения) кооперативами своих обязательств перед пайщиками.</p>
        </dd>
        <dt>Почему у вас проценты выше, чем в банке? Вы же некоммерческая организация...</dt>
        <dd>
          <p>Действительно, мы обеспечиваем безопасность вклада пайщиков резервным и компенсационным фондами СРО. К тому же мы предоставляем добровольное страхование. Ваш депозит застрахован. Можете быть уверены в сохранности ваших денег!</p>
        </dd>
        <dt>Как кооператив может обеспечить такую доходность?</dt>
        <dd>
          <p>Компания предоставляет денежные займы, ставка по займам от 180% годовых​.</p>
        </dd>
        <dt>В чем отличия и сходства между Кооперативом и банком?</dt>
        <dd>
          <p>Банки и иные кредитные организации являются согласно ст. 1 закона от 2 декабря 1990 г. N 395-1 «О банках и банковской деятельности» (в редакции Федерального закона от 29.12.2006 № 246-ФЗ) коммерческими организациями, в то время как кредитные потребительские кооперативы строят свою деятельность на некоммерческой основе и действуют на основании № 190-ФЗ от 18 июля 2009 г. «О кредитной кооперации». Деятельность банков и иных кредитных организаций осуществляется в отношении неопределенного числа лиц, т.е. банк обязан заключать такого рода договор на одних и тех же условиях в отношении каждого обратившегося лица. Кредитные потребительские кооперативы принимают сбережения только своих членов-пайщиков. Таким образом, деятельность кредитного потребительского кооператива при внешнем сходстве с банковскими операциями отличается от них тем, что здесь отсутствует признак публичности, отсутствует рыночный характер отношений. Отличительной чертой кооператива от банка является то, что кооперативом управляют сами его члены-пайщики, принимая участие в очередных и внеочередных общих собраниях пайщиков, на которых обсуждаются вопросы деятельности кооператива, смета доходов и расходов, а также принимаются и утверждаются новые положения по приему личных сбережений. В коммерческих банках, как вы понимаете, такая демократия напрочь отсутствует, а решения принимаются узким кругом акционеров.</p>
        </dd>
        <dt>Есть ли свидетельства и разрешения на Вашу деятельность?</dt>
        <dd>
          <p>В соответствии с Федеральным законом от 18.07.2009 № 190-ФЗ «О кредитной кооперации» у Банка России отсутствует обязанность по размещению Государственного реестра кредитных потребительских кооперативов на официальном интернет-представительстве Центробанка. Вместе с тем обращаем внимание, что сведения о действующих на территории Российской Федерации кредитных потребительских кооперативах, являющихся членами саморегулируемых организаций кредитных потребительских кооперативов, отражены в государственном реестре саморегулируемых организаций кредитных потребительских кооперативов, который размещен на официальном сайте Банка России. Все кредитные кооперативы должны входить в состав саморегулируемых организаций (СРО), которые в свою очередь подотчетны Центробанку. В этих СРО, в частности, создаются компенсационные фонды для страхования паев участников КПК. В контроль над работой кредитных кооперативов включилось Минфин России. Так, согласно всем этим требованиям мы являемся членами СРО «Союзмикрофинанс», а реестровый номер КПК «СОЮЗ-ЗБЕРЗАЙМ» – 364, он указан на официальном сайте Банка России. Целями деятельности СРО «Союзмикрофинанс» является содействие кредитным потребительским кооперативам, являющимся её членами, в организации ими финансовой взаимопомощи и осуществлению иных видов деятельности, предусмотренных Федеральным законом «О кредитной кооперации», регулирование и контроль за их деятельностью, а также представление и защита их интересов.</p>
        </dd>
      </dl>
    </div>
  </section>

  <section class="section photos-users">
    <h2 class="section__title photos-users__title">Нас много, потому что нам верят. Присоединяйтесь!</h2>
    <div class="photos-users__list">
      <a href="/images/clients/1.jpg" data-fancybox="clients" data-type="image">
        <img src="/images/clients/1.jpg" alt="">
      </a>
      <a href="/images/clients/2.jpg" data-fancybox="clients" data-type="image">
        <img src="/images/clients/2.jpg" alt="">
      </a>
      <a href="/images/clients/3.jpg" data-fancybox="clients" data-type="image">
        <img src="/images/clients/3.jpg" alt="">
      </a>
      <a href="/images/clients/4.jpg" data-fancybox="clients" data-type="image">
        <img src="/images/clients/4.jpg" alt="">
      </a>
      <a href="/images/clients/5.jpg" data-fancybox="clients" data-type="image">
        <img src="/images/clients/5.jpg" alt="">
      </a>
      <a href="/images/clients/6.jpg" data-fancybox="clients" data-type="image">
        <img src="/images/clients/6.jpg" alt="">
      </a>
      <a href="/images/clients/7.jpg" data-fancybox="clients" data-type="image">
        <img src="/images/clients/7.jpg" alt="">
      </a>
      <a href="/images/clients/8.jpg" data-fancybox="clients" data-type="image">
        <img src="/images/clients/8.jpg" alt="">
      </a>
      <a href="/images/clients/9.jpg" data-fancybox="clients" data-type="image">
        <img src="/images/clients/9.jpg" alt="">
      </a>
      <a href="/images/clients/10.jpg" data-fancybox="clients" data-type="image">
        <img src="/images/clients/10.jpg" alt="">
      </a>
    </div>
  </section>

  <section class="section certs">
    <h2 class="section__title">Сертификаты и лицензии</h2>
    <div class="section__body container-fluid">
      <div class="certs__slider base-slider">
        <div class="certs__item">
          <a data-fancybox="certs" data-type="image" href="/images/docs/souzmicrofinans.jpg">
            <img src="/images/docs/souzmicrofinans.jpg" alt="">
          </a>
        </div>
        <div class="certs__item">
          <a data-fancybox="certs" data-type="image" href="/images/docs/sv-vo_reestr.jpg">
            <img src="/images/docs/sv-vo_reestr.jpg" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="section reviews">
    <h2 class="section__title">Отзывы о нас</h2>
    <div class="section__body container-fluid">
      <div class="reviews__slider base-slider">
        <div class="reviews__item">
          <a data-fancybox="reviews" data-type="image" href="/images/reviews/1.jpg">
            <img src="/images/reviews/thumbs/1.jpg" alt="">
          </a>
        </div>
        <div class="reviews__item">
          <a data-fancybox="reviews" data-type="image" href="/images/reviews/2.jpg">
            <img src="/images/reviews/thumbs/2.jpg" alt="">
          </a>
        </div>
        <div class="reviews__item">
          <a data-fancybox="reviews" data-type="image" href="/images/reviews/3.jpg">
            <img src="/images/reviews/thumbs/3.jpg" alt="">
          </a>
        </div>
        <div class="reviews__item">
          <a data-fancybox="reviews" data-type="image" href="/images/reviews/4.jpg">
            <img src="/images/reviews/thumbs/4.jpg" alt="">
          </a>
        </div>
        <div class="reviews__item">
          <a data-fancybox="reviews" data-type="image" href="/images/reviews/5.jpg">
            <img src="/images/reviews/thumbs/5.jpg" alt="">
          </a>
        </div>
        <div class="reviews__item">
          <a data-fancybox="reviews" data-type="image" href="/images/reviews/6.jpg">
            <img src="/images/reviews/thumbs/6.jpg" alt="">
          </a>
        </div>
      </div>
    </div>
    <div class="reviews__footer container-fluid">
      <a class="button" data-fancybox href="#popup-callback">Присоединиться</a>
    </div>
  </section>

  <section class="section locations">
    <h2 class="section__title visuallyhidden">Контакты</h2>
    <div class="cta">
      <div class="cta__inner">
        <div class="cta__frame">
          <h2 class="cta__title">Предпочитаете искать лучшее предложение из всех имеющихся?</h2>
          <p>Оставьте заявку на бесплатный расчет ваших будущих доходов, чтобы сравнить условия и убедиться, что с «СОЮЗZБЕРZАЙМ» выгоднее!</p>
          <?
          // подключаем форму сбора лидов
          include "cta_form.php";
          ?>
        </div>
      </div>
    </div>
    <div class="locations__map-holder">
      <div class="locations__map" id="locations-map"></div>
    </div>
    <div class="container-slim">
      <div class="locations-list locations-slider"></div>
    </div>
  </section>

  <template id="location-template">
    <p class="locations-list__item locations-slider__item">
      <b class="locations-list__item-city"></b>
      <span class="locations-list__item-street"></span>
      <span class="locations-list__item-phones-list">
        <!-- <span class="locations-list__item-phone">
          т. <a class="locations-list__item-phone-link"></a>
        </span> -->
      </span>
      <span class="locations-list__item-working-time">
        <span class="locations-list__item-working-time-weekdays"></span>
        <span class="locations-list__item-working-time-weekend"></span>
      </span>
    </p>
  </template>

  <footer class="site-footer">
    <div class="site-footer__inner container">
      <div class="site-footer__socials socials">
        <a class="socials__item" href="https://vk.com/zberzaim" target="_blank" title="Мы в Вконтакте">
          <svg class="socials__icon" width="32" height="32">
            <use xlink:href="images/symbols.svg#soc-vk"></use>
          </svg>
        </a>
        <a class="socials__item" href="https://www.instagram.com/souzzberzaim/" target="_blank" title="Мы в Instagram">
          <svg class="socials__icon" width="32" height="32">
            <use xlink:href="images/symbols.svg#soc-instagram"></use>
          </svg>
        </a>
        <a class="socials__item" href="https://www.facebook.com/groups/SOUZZBERZAIM/" target="_blank" title="Мы на Фейсбуке">
          <svg class="socials__icon" width="32" height="32">
            <use xlink:href="images/symbols.svg#soc-facebook"></use>
          </svg>
        </a>
        <a class="socials__item" href="https://ok.ru/group/54504100331637" target="_blank" title="Мы в Однокласники">
          <svg class="socials__icon" width="32" height="32">
            <use xlink:href="images/symbols.svg#soc-ok"></use>
          </svg>
        </a>
      </div>
      <p class="site-footer__copy">СОЮЗZБЕРZАЙМ © 2017</p>
    </div>
  </footer>

  <div id="popup-callback" class="popup popup-callback" hidden>
    <div class="popup__title">Обратный звонок</div>
    <form class="form callback-form" action="" method="post">
      <label class="form-item">
        <span class="form-label form-label--required visuallyhidden">Ваше имя</span>
        <input type="text" name="name" class="form-control" placeholder="Ваше имя" required>
      </label>

      <label class="form-item">
        <span class="form-label form-label--required visuallyhidden">Ваш телефон</span>
        <input type="tel" name="phone" class="form-control" placeholder="Ваш телефон*" required>
      </label>

      <div class="form-submit-wrapper">
        <button class="button form-submit" type="sumbit">Да, позвоните мне</button>
      </div>
    </form>
  </div>

  <link rel="stylesheet" href="style.css">

  <script src="js/jquery-3.2.1.min.js"></script>
  <!-- <script src="js/google-maps-api.js"></script> -->
  <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCfsKll2e1r4xRa16-aA-2Y9PetzUs78Iw"></script>

  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>

	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
	(function (d, w, c) {
		(w[c] = w[c] || []).push(function() {
			try {
				w.yaCounter45488910 = new Ya.Metrika({
					id:45488910,
					clickmap:true,
					trackLinks:true,
					accurateTrackBounce:true,
					webvisor:true
				});
			} catch(e) { }
		});

		var n = d.getElementsByTagName("script")[0],
			s = d.createElement("script"),
			f = function () { n.parentNode.insertBefore(s, n); };
		s.type = "text/javascript";
		s.async = true;
		s.src = "https://mc.yandex.ru/metrika/watch.js";

		if (w.opera == "[object Opera]") {
			d.addEventListener("DOMContentLoaded", f, false);
		} else { f(); }
	})(document, window, "yandex_metrika_callbacks");
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/45488910" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->

</body>
</html>
