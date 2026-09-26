<?php
$pageTitle = 'Школа корпоративного заемщика Сергея Акинина';
$pageDescription = 'Практические знания о корпоративном кредитовании на всем жизненном цикле заемщика — от первого кредитного решения до урегулирования проблемной задолженности.';
$pageCanonical = 'https://school.askoza.ru/';
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>

<main id="main">
  <section class="hero hero-redesign section-dark">
    <div class="hero-orbit hero-orbit-a" aria-hidden="true"></div>
    <div class="hero-orbit hero-orbit-b" aria-hidden="true"></div>
    <div class="container hero-grid hero-grid-redesign">
      <div class="hero-copy reveal">
        <p class="eyebrow">Авторская образовательная платформа</p>
        <h1>Школа корпоративного заемщика <span>Сергея Акинина</span></h1>
        <p class="hero-lead">Понимать кредит. Управлять риском. Сохранять бизнес.</p>
        <p class="hero-text">Практические знания о корпоративном кредитовании на всем жизненном цикле заемщика — от принятия решения о финансировании до управления кредитными рисками и урегулирования проблемной задолженности.</p>
        <div class="hero-actions">
          <a class="button button-primary" href="#lifecycle">Определить свою ситуацию</a>
          <a class="button button-ghost" href="#programs">Посмотреть программы</a>
        </div>
        <div class="hero-trust">
          <span class="trust-line"></span>
          <p>Под эгидой АСКОЗА — Ассоциации корпоративных заемщиков и специалистов по корпоративному кредитованию</p>
        </div>
      </div>

      <div class="hero-system reveal" aria-label="Жизненный цикл корпоративного заемщика">
        <div class="hero-system-glow" aria-hidden="true"></div>
        <svg class="hero-system-svg" viewBox="0 0 640 520" role="img" aria-labelledby="hero-system-title hero-system-desc">
          <title id="hero-system-title">Жизненный цикл корпоративного заемщика</title>
          <desc id="hero-system-desc">Переход от кредита и управления обязательствами к зоне риска и урегулированию.</desc>
          <defs>
            <linearGradient id="pathGradient" x1="0" y1="0" x2="1" y2="0">
              <stop offset="0%" stop-color="#8fd8ff"/>
              <stop offset="55%" stop-color="#29a9f0"/>
              <stop offset="78%" stop-color="#d8b766"/>
              <stop offset="100%" stop-color="#d47b7b"/>
            </linearGradient>
            <filter id="glow">
              <feGaussianBlur stdDeviation="5" result="blur"/>
              <feMerge><feMergeNode in="blur"/><feMergeNode in="SourceGraphic"/></feMerge>
            </filter>
          </defs>
          <g class="hero-grid-lines" opacity=".14">
            <path d="M40 90H600M40 180H600M40 270H600M40 360H600M40 450H600"/>
            <path d="M120 50V470M240 50V470M360 50V470M480 50V470"/>
          </g>
          <path class="hero-main-path" d="M58 318 C145 300 174 292 228 298 C296 306 325 238 390 250 C456 262 466 204 584 192" />
          <path class="hero-main-path hero-main-path-glow" d="M58 318 C145 300 174 292 228 298 C296 306 325 238 390 250 C456 262 466 204 584 192" />
          <g class="hero-nodes">
            <g transform="translate(74 315)"><circle r="7"/><circle class="pulse" r="18"/><text x="-18" y="45">Кредит</text><text class="node-index" x="-17" y="-22">01</text></g>
            <g transform="translate(232 298)"><circle r="7"/><circle class="pulse" r="18"/><text x="-38" y="45">Управление</text><text class="node-index" x="-17" y="-22">02</text></g>
            <g transform="translate(391 250)"><circle r="7"/><circle class="pulse risk" r="18"/><text x="-18" y="45">Риск</text><text class="node-index" x="-17" y="-22">03</text></g>
            <g transform="translate(565 195)"><circle r="7"/><circle class="pulse critical" r="18"/><text x="-50" y="45">Урегулирование</text><text class="node-index" x="-17" y="-22">04</text></g>
          </g>
          <g class="hero-data-cloud" aria-hidden="true">
            <circle cx="390" cy="250" r="72"/><circle cx="390" cy="250" r="112"/><circle cx="390" cy="250" r="154"/>
          </g>
        </svg>
        <div class="hero-system-caption">
          <span>Навигация заемщика</span>
          <strong>от решения о кредите до сложной ситуации</strong>
        </div>
      </div>
    </div>
  </section>

  <section class="manifesto manifesto-redesign section">
    <div class="container manifesto-grid">
      <div class="manifesto-number reveal" aria-hidden="true">01</div>
      <div class="manifesto-copy reveal">
        <p class="eyebrow eyebrow-dark">Зачем существует Школа</p>
        <h2><span class="manifesto-muted">Предпринимателей учат, как получить кредит.</span><br><span class="manifesto-focus">Мы учим, как быть заемщиком.</span></h2>
      </div>
      <div class="manifesto-body reveal">
        <p>Корпоративный кредит не заканчивается в момент выдачи денег. С этого момента начинаются обязательства, контроль финансовых показателей, взаимодействие с банком и ответственность за принимаемые решения.</p>
        <p>Школа помогает предпринимателю понимать эту систему и профессионально действовать как в нормальной ситуации, так и тогда, когда финансовое положение бизнеса начинает меняться.</p>
      </div>
    </div>
  </section>

  <section class="lifecycle lifecycle-redesign section section-soft" id="lifecycle">
    <div class="container">
      <div class="section-heading reveal">
        <div>
          <p class="eyebrow eyebrow-dark">Навигация по жизненному циклу</p>
          <h2>Где вы сейчас как заемщик?</h2>
        </div>
        <p>Выберите свою ситуацию — и мы покажем, какие знания и инструменты актуальны именно на этом этапе.</p>
      </div>

      <div class="lifecycle-map reveal" data-lifecycle>
        <div class="lifecycle-line" aria-hidden="true"><span></span></div>
        <button class="life-node is-active" type="button" data-stage="1" aria-pressed="true">
          <span class="life-index">01</span><i></i><strong>Планирую кредит</strong><small>Решение и условия</small>
        </button>
        <button class="life-node" type="button" data-stage="2" aria-pressed="false">
          <span class="life-index">02</span><i></i><strong>Работаю с кредитом</strong><small>Контроль и стратегия</small>
        </button>
        <button class="life-node life-node-risk" type="button" data-stage="3" aria-pressed="false">
          <span class="life-index">03</span><i></i><strong>Появился риск</strong><small>Диагностика и позиция</small>
        </button>
        <button class="life-node life-node-critical" type="button" data-stage="4" aria-pressed="false">
          <span class="life-index">04</span><i></i><strong>Проблема возникла</strong><small>Сценарии и урегулирование</small>
        </button>

        <div class="life-detail" data-stage-panel="1">
          <div><span class="life-detail-label">Стадия 01</span><h3>Планирую кредит</h3><p>Оцениваете возможность привлечения финансирования или готовитесь подписывать кредитные документы.</p></div>
          <ul><li>условия</li><li>риски</li><li>обеспечение</li><li>ответственность</li></ul>
          <a href="#programs">Перейти к программе <span>→</span></a>
        </div>
        <div class="life-detail" data-stage-panel="2" hidden>
          <div><span class="life-detail-label">Стадия 02</span><h3>Уже работаю с кредитом</h3><p>Компания обслуживает долг, и важно сохранить управляемость кредитной нагрузки и отношений с банком.</p></div>
          <ul><li>графики</li><li>ковенанты</li><li>мониторинг</li><li>стратегия</li></ul>
          <a href="#programs">Перейти к программе <span>→</span></a>
        </div>
        <div class="life-detail" data-stage-panel="3" hidden>
          <div><span class="life-detail-label">Стадия 03</span><h3>Появились признаки риска</h3><p>Просрочки еще может не быть, но появились кассовые разрывы, снижение показателей или риск нарушения условий финансирования.</p></div>
          <ul><li>диагностика</li><li>прогноз</li><li>позиция</li><li>коммуникация</li></ul>
          <a href="#programs">Перейти к программе <span>→</span></a>
        </div>
        <div class="life-detail" data-stage-panel="4" hidden>
          <div><span class="life-detail-label">Стадия 04</span><h3>Проблема уже возникла</h3><p>Просрочка, дефолт, работа с проблемным подразделением банка, угроза взыскания или банкротства.</p></div>
          <ul><li>оценка</li><li>сценарии</li><li>урегулирование</li><li>план</li></ul>
          <a href="#programs">Перейти к программе <span>→</span></a>
        </div>
      </div>

      <div class="lifecycle-note lifecycle-note-redesign reveal">
        <div class="note-signal" aria-hidden="true"><span></span><span></span><span></span></div>
        <strong>Чем раньше заемщик понимает, что его положение изменилось, тем больше решений остается в его распоряжении.</strong>
        <p>Финансовая проблема не всегда означает кризис. Но поздняя реакция, отсутствие объективной картины и ошибочные действия способны значительно сократить пространство для решений.</p>
      </div>
    </div>
  </section>

  <section class="method method-redesign section section-dark" id="method">
    <div class="method-aurora" aria-hidden="true"></div>
    <div class="container method-layout">
      <div class="method-intro reveal">
        <p class="eyebrow">Методология Школы</p>
        <h2>Понимать ситуацию до того, как принимать решение</h2>
        <p>Мы учим не универсальным рецептам, а последовательности профессионального анализа.</p>
      </div>

      <div class="method-flow" data-method-flow>
        <div class="method-flow-line" aria-hidden="true"><span></span></div>
        <article class="method-step is-active reveal"><span>01</span><div><h3>Понять ситуацию</h3><p>Что происходит с бизнесом и обязательствами?</p></div></article>
        <article class="method-step reveal"><span>02</span><div><h3>Подтвердить фактами</h3><p>Какие цифры и документы описывают реальное положение?</p></div></article>
        <article class="method-step reveal"><span>03</span><div><h3>Оценить последствия</h3><p>Как ситуацию видит банк и куда она может развиваться?</p></div></article>
        <article class="method-step reveal"><span>04</span><div><h3>Определить сценарии</h3><p>Какие решения действительно доступны?</p></div></article>
        <article class="method-step reveal"><span>05</span><div><h3>Действовать</h3><p>Какой следующий шаг необходимо сделать сейчас?</p></div></article>
      </div>
    </div>
  </section>

  <section class="programs programs-redesign section" id="programs">
    <div class="container">
      <div class="section-heading reveal">
        <div><p class="eyebrow eyebrow-dark">Программы Школы</p><h2>Одна система. Четыре стадии заемщика.</h2></div>
        <p>Переключайте стадии — содержание программы меняется вместе с ситуацией заемщика.</p>
      </div>

      <div class="program-tabs reveal" data-program-tabs>
        <div class="program-tablist" role="tablist" aria-label="Программы Школы">
          <button class="program-tab is-active" type="button" role="tab" aria-selected="true" data-program="1"><span>01</span> Первый кредит</button>
          <button class="program-tab" type="button" role="tab" aria-selected="false" data-program="2"><span>02</span> Управление</button>
          <button class="program-tab" type="button" role="tab" aria-selected="false" data-program="3"><span>03</span> Зона риска</button>
          <button class="program-tab" type="button" role="tab" aria-selected="false" data-program="4"><span>04</span> Проблемный заемщик</button>
        </div>

        <div class="program-panel is-active" data-program-panel="1">
          <div class="program-copy">
            <p class="program-state">До возникновения обязательств</p>
            <h3>Ваш первый корпоративный кредит</h3>
            <p>Как оценить возможности бизнеса, понимать кредитные документы и заранее видеть финансовые и личные риски.</p>
            <dl class="program-meta"><div><dt>Фокус</dt><dd>готовность к кредиту</dd></div><div><dt>Результат</dt><dd>карта рисков и ответственности</dd></div></dl>
            <a class="button button-dark" href="#">О программе</a>
          </div>
          <div class="program-visual program-visual-1" aria-hidden="true"><span class="pv-ring r1"></span><span class="pv-ring r2"></span><span class="pv-core"></span><span class="pv-label l1">договор</span><span class="pv-label l2">залог</span><span class="pv-label l3">ковенанты</span></div>
        </div>

        <div class="program-panel" data-program-panel="2" hidden>
          <div class="program-copy">
            <p class="program-state">Для действующих заемщиков</p>
            <h3>Кредитная стратегия и управление обязательствами</h3>
            <p>Как управлять долговой нагрузкой, графиками платежей, финансовыми условиями и взаимодействием с банком после получения кредита.</p>
            <dl class="program-meta"><div><dt>Фокус</dt><dd>контроль обязательств</dd></div><div><dt>Результат</dt><dd>управляемая кредитная стратегия</dd></div></dl>
            <a class="button button-dark" href="#">О программе</a>
          </div>
          <div class="program-visual program-visual-2" aria-hidden="true"><svg viewBox="0 0 420 260"><path d="M18 210 C80 190 102 145 158 162 C220 181 242 104 304 118 C346 128 372 92 402 54"/><g><circle cx="18" cy="210" r="6"/><circle cx="158" cy="162" r="6"/><circle cx="304" cy="118" r="6"/><circle cx="402" cy="54" r="6"/></g></svg></div>
        </div>

        <div class="program-panel" data-program-panel="3" hidden>
          <div class="program-copy">
            <p class="program-state">Когда ситуация еще управляема</p>
            <h3>Я — заемщик в зоне риска</h3>
            <p>Ранняя диагностика кредитного риска, финансовая самодиагностика и подготовка конструктивной позиции для переговоров.</p>
            <dl class="program-meta"><div><dt>Формат</dt><dd>3 часа · 2 × 90 минут</dd></div><div><dt>Результат</dt><dd>«Паспорт заемщика» + план действий</dd></div></dl>
            <a class="button button-dark" href="#">О программе</a>
          </div>
          <div class="program-visual program-visual-3" aria-hidden="true"><div class="risk-bars"><i style="--h:24%"></i><i style="--h:42%"></i><i style="--h:57%"></i><i style="--h:74%"></i><i style="--h:92%"></i></div><span class="risk-line"></span></div>
        </div>

        <div class="program-panel" data-program-panel="4" hidden>
          <div class="program-copy">
            <p class="program-state">Когда проблема уже реализовалась</p>
            <h3>Я — проблемный заемщик</h3>
            <p>Логика проблемной задолженности, риски взыскания и выбор реалистичного механизма урегулирования.</p>
            <dl class="program-meta"><div><dt>Формат</dt><dd>3 часа · 2 × 90 минут</dd></div><div><dt>Результат</dt><dd>карта механизмов + план 7 / 30 / 90 дней</dd></div></dl>
            <a class="button button-dark" href="#">О программе</a>
          </div>
          <div class="program-visual program-visual-4" aria-hidden="true"><span class="scenario s1">реструктуризация</span><span class="scenario s2">медиация</span><span class="scenario s3">реализация актива</span><span class="scenario s4">банкротный сценарий</span><i class="scenario-core"></i></div>
        </div>
      </div>
    </div>
  </section>

  <section class="founder section" id="akinin">
    <div class="container founder-grid">
      <div class="founder-photo"><div class="portrait-placeholder portrait-placeholder-light"><span>Фото</span><strong>Сергея Акинина</strong></div></div>
      <div class="founder-copy">
        <p class="eyebrow eyebrow-dark">Основатель Школы</p>
        <h2>Сергей Акинин</h2>
        <p class="founder-role">Основатель и методический руководитель Школы корпоративного заемщика</p>
        <p>Практический опыт работы на стыке корпоративного кредитования, права, проблемной задолженности и урегулирования финансовых конфликтов стал основой методологии Школы.</p>
        <p>Ключевая идея: предприниматель должен понимать не только собственный бизнес, но и логику кредитора, последствия своих решений и момент, когда обычная финансовая сложность начинает превращаться в кредитный риск.</p>
        <div class="founder-facts">
          <div><strong>20+</strong><span>лет профессионального опыта</span></div>
          <div><strong>АСКОЗА</strong><span>Председатель Совета</span></div>
          <div><strong>Практика</strong><span>корпоративное кредитование и проблемные активы</span></div>
        </div>
        <a class="text-link" href="#">Подробнее о Сергее Акинине <span>→</span></a>
      </div>
    </div>
  </section>

  <section class="practice section section-soft">
    <div class="container">
      <div class="section-heading">
        <div><p class="eyebrow eyebrow-dark">Формат обучения</p><h2>Не теория о финансах. Практика решений.</h2></div>
        <p>Участник не просто слушает лекцию — он анализирует ситуацию, принимает решения и собирает собственный практический результат.</p>
      </div>
      <div class="feature-grid">
        <div class="feature-card"><span>01</span><h3>Реальные ситуации</h3><p>Кейсы корпоративных заемщиков и сценарии из практики.</p></div>
        <div class="feature-card"><span>02</span><h3>Кредитные документы</h3><p>Работа с условиями, обеспечением, ковенантами и последствиями.</p></div>
        <div class="feature-card"><span>03</span><h3>Диагностика</h3><p>Финансовая и ситуационная оценка текущего положения.</p></div>
        <div class="feature-card"><span>04</span><h3>Сценарный анализ</h3><p>Что может произойти при различных вариантах поведения.</p></div>
        <div class="feature-card"><span>05</span><h3>Переговорные симуляции</h3><p>Отработка конструктивной коммуникации с кредитором.</p></div>
        <div class="feature-card"><span>06</span><h3>Рабочие инструменты</h3><p>Чек-листы, карты, алгоритмы и планы действий.</p></div>
      </div>
    </div>
  </section>

  <section class="audiences section">
    <div class="container">
      <div class="section-heading"><div><p class="eyebrow eyebrow-dark">Для кого работает Школа</p><h2>Площадка для всех участников рынка</h2></div></div>
      <div class="audience-grid">
        <article><span>01</span><h3>Бизнес</h3><p>Собственники, генеральные директора, CFO и руководители компаний-заемщиков.</p><strong>Управление кредитом и действия в сложных финансовых ситуациях.</strong></article>
        <article><span>02</span><h3>Профессиональное сообщество</h3><p>Банковские специалисты, юристы, медиаторы, консультанты и специалисты по проблемной задолженности.</p><strong>Единый профессиональный язык и методические подходы.</strong></article>
        <article><span>03</span><h3>Организации</h3><p>Банки, институты развития, гарантийные фонды, ТПП, бизнес-объединения и государственные структуры.</p><strong>Программы для клиентов, сотрудников и профессиональных сообществ.</strong></article>
      </div>
    </div>
  </section>

  <section class="partners section section-dark" id="partners">
    <div class="container partners-grid">
      <div>
        <p class="eyebrow">Для банков и партнеров</p>
        <h2>Образование заемщика — часть культуры ответственного кредитования</h2>
        <p>Школа не противопоставляет интересы бизнеса и кредитора. Ее программы формируют более зрелое поведение заемщика: своевременную диагностику рисков, достоверную информацию, реалистичные предложения и профессиональную коммуникацию.</p>
        <a class="button button-primary" href="mailto:info@askoza.ru?subject=Партнерская%20программа%20Школы%20корпоративного%20заемщика">Обсудить партнерскую программу</a>
      </div>
      <ul class="partner-principles">
        <li>Не учим уклоняться от обязательств</li>
        <li>Не обучаем сокрытию информации или активов</li>
        <li>Не обещаем гарантированную реструктуризацию</li>
        <li>Рассматриваем только правовые и экономически обоснованные решения</li>
      </ul>
    </div>
  </section>

  <section class="institution section">
    <div class="container institution-grid">
      <div class="institution-mark" aria-hidden="true">АСКОЗА</div>
      <div>
        <p class="eyebrow eyebrow-dark">Институциональная основа</p>
        <h2>Школа работает под эгидой АСКОЗА</h2>
        <p>Ассоциация корпоративных заемщиков и специалистов по корпоративному кредитованию объединяет бизнес и профессиональных участников рынка вокруг задачи развития цивилизованных механизмов корпоративного кредитования и сохранения работающих предприятий.</p>
        <a class="text-link" href="https://askoza.ru/" target="_blank" rel="noopener">Подробнее об АСКОЗА <span>↗</span></a>
      </div>
    </div>
  </section>

  <section class="library section section-soft" id="library">
    <div class="container">
      <div class="section-heading">
        <div><p class="eyebrow eyebrow-dark">Библиотека корпоративного заемщика</p><h2>Знания, которые продолжают работать после обучения</h2></div>
        <p>Статьи, выступления, методические материалы и практические разборы Сергея Акинина и экспертов Школы.</p>
      </div>
      <div class="library-grid">
        <article class="library-card"><span>Статья</span><h3>Как банк видит заемщика, когда появляются первые признаки риска</h3><a href="#">Читать <b>→</b></a></article>
        <article class="library-card"><span>Практическое руководство</span><h3>Что проверить до начала переговоров с банком</h3><a href="#">Открыть <b>→</b></a></article>
        <article class="library-card"><span>Видео</span><h3>Корпоративный кредит как управляемая система отношений</h3><a href="#">Смотреть <b>→</b></a></article>
      </div>
    </div>
  </section>

  <section class="final-cta section section-dark" id="start">
    <div class="container final-cta-inner">
      <p class="eyebrow">Начать с главного</p>
      <h2>На каком этапе находитесь вы?</h2>
      <p>Корпоративный кредит остается управляемым инструментом, пока заемщик понимает свое положение и действует своевременно.</p>
      <div class="hero-actions">
        <a class="button button-primary" href="#lifecycle">Определить свою ситуацию</a>
        <a class="button button-ghost" href="#programs">Посмотреть программы Школы</a>
      </div>
      <div class="final-signature">Под защитой АСКОЗА — бизнесу ЖИТЬ!</div>
    </div>
  </section>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
