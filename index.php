<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="高品質な施術と癒やしの空間を提供する、大人のためのプライベートサロン「Lumière（ルミエール）」。心ゆくまでリラックスできる至福のひとときをご提供します。">
  <title>Lumière | プライベートビューティーサロン</title>
  
  <!-- Google Fonts: Elegant Mincho and clean Sans-serif -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho:wght@400;500;600&family=Zen+Kaku+Gothic+New:wght@300;400;500&display=swap" rel="stylesheet">
  
  <!-- XREA広告自動挿入の無効化 -->
  <!--nobanner-->
  <?php wp_head(); ?>
</head>
<body class="page">
  <!-- XREA手動広告挿入 -->
  <div style="text-align: center; background: #fff;">
    <script type="text/javascript" src="https://cache1.value-domain.com/xa.j?site=bulauza.s325.xrea.com"></script>
  </div>
  
  <!-- Header -->
  <header class="header js-header">
    <div class="header__inner">
      <h1 class="header__logo">
        <a href="#" class="header__logo-link">Lumière</a>
      </h1>
      <nav class="header__nav">
        <ul class="header__nav-list">
          <li class="header__nav-item"><a href="#concept" class="header__nav-link">Concept</a></li>
          <li class="header__nav-item"><a href="#menu" class="header__nav-link">Menu</a></li>
          <li class="header__nav-item"><a href="#salon" class="header__nav-link">Salon</a></li>
        </ul>
        <a href="#reservation" class="header__reserve-btn button button--small">ご予約</a>
      </nav>
      <!-- Hamburger -->
      <button class="header__hamburger js-hamburger" aria-label="Menu" type="button">
        <span class="header__hamburger-line"></span>
        <span class="header__hamburger-line"></span>
        <span class="header__hamburger-line"></span>
      </button>
    </div>
  </header>

  <main class="main">
    
    <!-- Hero Section -->
    <section class="hero">
      <div class="hero__image-wrapper">
        <img src="<?php echo get_template_directory_uri(); ?>/images/hero_salon.png" alt="サロンの内観" class="hero__image js-hero-zoom">
      </div>
      <div class="hero__content js-fade-up">
        <h2 class="hero__title">
          <span class="hero__title-line">光満ちる、</span>
          <span class="hero__title-line">わたしだけの場所。</span>
        </h2>
        <p class="hero__subtitle">Private Salon Lumière</p>
      </div>
      <div class="hero__scroll">
        <span class="hero__scroll-text">Scroll</span>
        <span class="hero__scroll-line"></span>
      </div>
    </section>

    <!-- Concept Section -->
    <section id="concept" class="section concept">
      <div class="section__inner concept__inner">
        <div class="concept__text-box js-fade-up">
          <span class="section__en-title">Concept</span>
          <h2 class="section__title">美しさは、<br>癒やしから生まれる。</h2>
          <p class="section__description">
            日々の喧騒から離れ、心と体を解き放つ。<br>
            Lumière（ルミエール）は、<br>
            あなた本来の輝きを取り戻すための<br>
            完全プライベートサロンです。<br><br>
            洗練された技術と選び抜かれた商材で、<br>
            一人ひとりに寄り添った<br>
            オーダーメイドのケアをご提供いたします。
          </p>
          <a href="#menu" class="button button--outline concept__button">メニューを見る</a>
        </div>
        <div class="concept__image-box js-fade-up js-fade-up--delay">
          <img src="<?php echo get_template_directory_uri(); ?>/images/about_salon.png" alt="リラックスできる空間" class="concept__image">
        </div>
      </div>
    </section>

    <!-- Menu Section -->
    <section id="menu" class="section menu bg-light">
      <div class="section__inner">
        <div class="section__header js-fade-up">
          <span class="section__en-title">Menu</span>
          <h2 class="section__title">心を満たす、至福のメニュー</h2>
        </div>
        
        <div class="menu__list">
          <!-- Card 1 -->
          <article class="card menu__card js-fade-up">
            <div class="card__image-box">
              <img src="<?php echo get_template_directory_uri(); ?>/images/service_facial.png" alt="フェイシャルケア" class="card__image">
            </div>
            <div class="card__body">
              <h3 class="card__title">Premium Facial</h3>
              <p class="card__price">¥15,000 <span class="card__price-tax">(税込)</span> / 90min</p>
              <p class="card__description">
                厳選された高純度美容液を贅沢に使用し、手技による極上のリフトアップマッサージで、透明感のある艶やかな肌へ導きます。
              </p>
            </div>
          </article>
          
          <!-- Card 2 -->
          <article class="card menu__card js-fade-up js-fade-up--delay">
            <div class="card__image-box">
              <div class="card__image-placeholder bg-brown"></div>
            </div>
            <div class="card__body">
              <h3 class="card__title">Aroma Body Treatment</h3>
              <p class="card__price">¥18,000 <span class="card__price-tax">(税込)</span> / 120min</p>
              <p class="card__description">
                その日の体調や気分に合わせてブレンドする天然アロマオイル。凝り固まった筋肉を深部からほぐし、全身の巡りを整えます。
              </p>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- Reservation / CTA Section -->
    <section id="reservation" class="section reservation">
      <div class="reservation__inner js-fade-up">
        <h2 class="reservation__title">ご予約・お問い合わせ</h2>
        <p class="reservation__text">完全予約制となっております。<br>WEBまたは公式LINEよりお気軽にご連絡ください。</p>
        <div class="reservation__buttons">
          <a href="#" class="button button--large">WEBから予約する</a>
          <a href="#" class="button button--large button--line">LINEで相談する</a>
        </div>
      </div>
    </section>

  </main>

  <!-- Footer -->
  <footer class="footer">
    <div class="footer__inner">
      <div class="footer__info">
        <h2 class="footer__logo">Lumière</h2>
        <p class="footer__address">
          〒150-0000<br>
          東京都渋谷区神宮前X-X-X<br>
          （詳細な住所はご予約時にお伝えします）
        </p>
        <p class="footer__hours">営業時間 / 10:00 - 20:00（不定休）</p>
      </div>
      <div class="footer__nav">
        <ul class="footer__nav-list">
          <li class="footer__nav-item"><a href="#concept">Concept</a></li>
          <li class="footer__nav-item"><a href="#menu">Menu</a></li>
          <li class="footer__nav-item"><a href="#salon">Salon</a></li>
          <li class="footer__nav-item"><a href="#">Privacy Policy</a></li>
        </ul>
      </div>
    </div>
    <div class="footer__copyright">
      <small>&copy; 2026 Lumière All rights reserved.</small>
    </div>
  </footer>

<?php wp_footer(); ?>
</body>
</html>
