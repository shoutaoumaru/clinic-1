<?php
 /* Template Name: first
 */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>初めての方へ | 医院テンプレート1</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendor/bootstrap-reboot.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendor/animsition.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/style.css" />
</head>

<body>
  <div class="first-wrapper animsition">
    <header id="header" class="p-header">
      <div class="logo">
        <a class="animsition-link" href="/">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/riv_logo_official2.png" alt="">
        </a>
      </div>
      <!-- /.logo -->
      <div class="l-menu-sp-button"><i></i><i></i><i></i></div>
      <!-- /.l-menu-sp-button -->
      <div class="pc-menu">
        <nav class="pc-nav">
          <ul class="pc-nav__list">
            <li class="pc-nav__item">
              <a class="animsition-link" href="<?php echo esc_url( home_url('/first')); ?>">初めての方へ</a>
            </li>
            <li class="pc-nav__item">
              <a class="animsition-link" href="<?php echo esc_url( home_url('/treatment')); ?>">診療について</a>
            </li>
            <li class="pc-nav__item">
              <a class="animsition-link" href="<?php echo esc_url( home_url('/staff')); ?>">スタッフ紹介</a>
            </li>
            <li class="pc-nav__item">
              <a class="animsition-link" href="<?php echo esc_url( home_url('/faq')); ?>">よくあるご質問</a>
            </li>
            <li class="pc-nav__item">
              <a class="animsition-link" href="<?php echo esc_url( home_url('/recruit')); ?>">採用情報</a>
            </li>
          </ul>
        </nav>
      </div>
      <!-- /.pc-menu -->
      <div class="l-action-sp">
        <ul class="l-action-sp__buttons">
          <li class="l-action-sp__button-access">
            <a href="https://goo.gl/maps/zHQuAuFJBFJgpG6fA"><i>アクセス</i></a>
          </li>
          <li class="l-action-sp__button-tel">
            <a href="tel:092-686-7954"><i>ご予約のお電話</i></a>
          </li>
        </ul>
      </div>
      <!-- /.l-action-sp__buttons -->
    </header>
    <!-- /.p-header -->
    <div class="first-contents">
      <div id="c-topview" class="c-topview">
        <div class="c-topview__inner">
          <div class="c-topview__img">
            <img class="view-sp" src="<?php echo get_template_directory_uri(); ?>/images/home/clinc.jpg" alt="">
          </div>
          <h2 class="c-topview__title clip-js1 left">
            初めての方へ
          </h2>
        </div>
      </div>
      <!-- /.c-topview -->
      <div class="fs-message">
        <div class="c-container appear up">
          <h2 class="c-head01 item">
            <span>RivRound医院の想い</span>
            <p>健康を育み、ゆたかな未来へ</p>
          </h2>
          <div class="fs-message-wrap item">
            <div class="fs-message__img">
              <img class="fs-message__photo" src="<?php echo get_template_directory_uri(); ?>/images/home/staff__1.jpg" alt="">
            </div>
            <div class="fs-message__text">
              <p class="c-txt-sm">
                耳鼻咽喉科疾患は、症状を何度も繰り返したり、症状が長く続くこともあります。また、お子様からご年配の方まで幅広い年齢層の方が対象となります。それ故、それぞれの患者様に合った治療方針や治療方法を十分に説明し、同意をえた上で行うことが大切であると考えています。
                <p class="c-txt-sm">
                  当院のコンセプト“健康を育み、ゆたかな未来へ”には、みなさんの健康意識を高め、より多くの方を健康的に保つことで、次世代のゆたかなまちづくりに貢献したいという想いが込められています。</p>
                <p class="text-right">
                  <span class="u-text-smaller">院長</span><span class="u-text-bold">利部 翔太</span>
                </p>
                <div class="fs-message__button">
                  <a href="<?php echo esc_url( home_url('/staff')); ?>">院長のプロフィールを見る</a>
                </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.fs-message -->
      <div class="fs-promise">
        <div class="fs-promise__inner">
          <h2 class="c-head01 appear up">
            <span class="item">RivRound医院が<br class="view-pc">大切にしている3つの約束</span>
            <p class="item">患者さんと健康を<br class="view-pc">“共に真剣に”向き合うために</p>
          </h2>
          <div class="fs-promise__block appear up">
            <div class="fs-promise__img cover-slide">
              <img class="img-zoom" src="<?php echo get_template_directory_uri(); ?>/images/home/medical__2.jpg" alt="">
            </div>
            <div class="fs-promise__desc item">
              <h3 class="num-tit">
                <i>1</i>
                <span>耳鼻咽喉科の専門医として</span>
              </h3>
              <div class="description">
                <p class="c-txt-sm">
                  当クリニックでは、専門医の強みを活かして早期発見、早期治療につながる内視鏡検査や超音波検査を行うことができます。また、連携する施設に依頼したCTやMRIなども、診察室で画像を見ながら、わかりやすく結果を説明することができます。
                  万一、紹介が必要となった際でも、疾患に合わせて信頼できるドクターや医療機関をご紹介しています。
                  わからないことやご不安がありましたらご相談ください。
                </p>
              </div>
            </div>
          </div>
          <div class="fs-promise__block appear up">
            <div class="fs-promise__img cover-slide">
              <img class="img-zoom" src="<?php echo get_template_directory_uri(); ?>/images/home/room.jpg" alt="">
            </div>
            <div class="fs-promise__desc item">
              <h3 class="num-tit">
                <i>2</i>
                <span>周りが気にならない“個室診療室”</span>
              </h3>
              <div class="description">
                <p class="c-txt-sm">
                  診療室は全室個室となっており、プライバシーの保護に配慮しております。周囲の目を気にせず、ご自身の診療だけに専念していただけます。お連れの方も一緒に診療室に入り、説明をお聞きいただくことももちろん可能です。
                </p>
              </div>

            </div>
          </div>
          <div class="fs-promise__block appear up">
            <div class="fs-promise__img cover-slide">
              <img class="img-zoom" src="<?php echo get_template_directory_uri(); ?>/images/home/counseling.jpg" alt="">
            </div>
            <div class="fs-promise__desc item">
              <h3 class="num-tit">
                <i>3</i>
                <span>皆様のかかりつけ医として</span>
              </h3>
              <div class="description">
                <p class="c-txt-sm">
                  感冒やワクチン接種などの一般的な内科診療のほか、健康長寿の妨げになる生活習慣病（高血圧や高脂血症、骨粗しょう症など）を早期に発見し、大病にならないよう継続的に診療を行います。
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.fs-promise -->
      <div class="fa-contents">
        <div class="fa-message">
          <div class="fa-message__inner appear up">
            <h2 class="c-head01 clip-js left">
              <p>クリニック・施設紹介</p>
            </h2>
            <h2 class="c-head01 item">
              <span>安心して治療に専念して頂くために</span>
              <p>清潔で誰もが<br class="view-pc">
                すごしやすい空間を</p>
            </h2>
            <div class="fa-text item">
              <p class="c-txt-sm">
                診療室は全て個室となっており、プライバシー保護に配慮しております。見た目に綺麗はもちろんのこと、目に見えない細菌の感染に対しても最大限気を配り、小さいお子さんから大人の方まで、リラックスして過ごしやすい環境づくりを心がけています。
              </p>
            </div>
          </div>
        </div>
        <!-- /fa-message -->
        <div class="fa-gallery">
          <ul class="fa-gallery__list appear up">
            <li class="fa-gallery__item item" data-target="1"><img src="<?php echo get_template_directory_uri(); ?>/images/home/store__2.jpg" alt=""><span
                class="fa-gallery__name">外観</span></li>
            <li class="fa-gallery__item item" data-target="2"><img src="<?php echo get_template_directory_uri(); ?>/images/home/clinic__1@pc.jpg" alt=""><span
                class="fa-gallery__name">受付・待合</span>
            </li>
            <li class="fa-gallery__item item" data-target="3"><img src="<?php echo get_template_directory_uri(); ?>/images/home/room.jpg" alt=""><span
                class="fa-gallery__name">診療室</span></li>
            <li class="fa-gallery__item item" data-target="4"><img src="<?php echo get_template_directory_uri(); ?>/images/home/rentogen.jpg" alt=""><span
                class="fa-gallery__name">レントゲン室</span></li>
            <li class="fa-gallery__item item" data-target="5"><img src="<?php echo get_template_directory_uri(); ?>/images/home/img-machine5@2x.jpg" alt=""><span
                class="fa-gallery__name">滅菌スペース</span></li>
            <li class="fa-gallery__item item" data-target="6"><img src="<?php echo get_template_directory_uri(); ?>/images/home/kid-space.jpg" alt=""><span
                class="fa-gallery__name">キッズ・フレンドリー</span>
            </li>
            <li class="fa-gallery__item item" data-target="7"><img src="<?php echo get_template_directory_uri(); ?>/images/home/toilet.jpg" alt=""><span
                class="fa-gallery__name">お手洗い・洗面所</span>
            </li>
            <li class="fa-gallery__item item" data-target="8"><img src="<?php echo get_template_directory_uri(); ?>/images/home/car-space.jpg" alt=""><span
                class="fa-gallery__name">駐車スペース</span></li>
          </ul>
        </div>
        <!-- /fa-gallery -->
        <div id="access" class="p-access">
          <h2 class="m-heading-normal clip-js left">アクセス</h2>
          <div class="m-block-access appear up">
            <div class="m-block-access__visual item">
              <div class="m-block-access__photos">
                <div class="m-block-access__photo">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/home/store__2.jpg" alt="" />
                </div>
                <div class="m-block-access__photo">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/home/clinic__1@pc.jpg" alt="" />
                </div>
              </div>
              <div class="m-block-access__map" id="content-map">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13294.424791215797!2d130.40662633372042!3d33.58957259174761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x354191942250e0dd%3A0x7a79d2c5edd8fafe!2zUml2Um91bmQg5qCq5byP5Lya56S-!5e0!3m2!1sja!2sjp!4v1624609784270!5m2!1sja!2sjp"
                  width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </div>
            <div class="m-block-access__info item">
              <div class="m-block-access__description">
                <p class="m-block-access__address">
                  〒812-0011 福岡県福岡市博多区博多駅前3-27-25-9F
                </p>
                <p class="m-block-access__car">駐車場 10台</p>
                <p class="m-block-access__train">
                  最寄駅 「博多駅」 徒歩5分
                </p>
              </div>
              <div class="m-block-access__button">
                <div class="m-button-normal -narrow">
                  <a href="https://goo.gl/maps/SnjZhyAMaboygzb19"><i>GoogleMapを開く</i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /#access -->
        <nav class="btn-category appear up">
          <ul class="item">
            <li><a href="<?php echo esc_url( home_url('/first')); ?>"><span class="btn-category__first"></span><i>初めての方へ</i></a></li>
            <li><a href="<?php echo esc_url( home_url('/treatment')); ?>"><span class="btn-category__care"></span><i>診療について</i></a></li>
            <li><a href="<?php echo esc_url( home_url('/staff')); ?>"><span class="btn-category__staff"></span><i>スタッフ紹介</i></a></li>
            <li class="u-hidden-pc"><a href="<?php echo esc_url( home_url('/faq')); ?>"><span class="btn-category__faq"></span><i>よくあるご質問</i></a>
            </li>
          </ul>
        </nav>
        <nav class="btn-topicpath">
          <ul>
            <li><a href=" <?php echo esc_url( home_url('/')); ?>">TOP</a></li>
            <li>初めての方へ</li>
          </ul>
        </nav>
      </div>
      <!-- /.fa-contents -->
    </div>
    <!-- /.first-contents -->
    <footer class="p-footer">
      <div class="p-footer__label">
        <h2 class="p-footer__logo">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/riv_logo_official2.png" />
        </h2>
        <p class="p-footer__subject">
          一般内科 / 予防接種 / 耳鼻咽喉科 / 各種検診
        </p>
      </div>
      <div class="p-footer__wrap">
        <address>
          <p class="c-txt-sm">
            〒812-0011<br>福岡県福岡市博多区博多駅前3-27-25-9F
          </p>
          <p class="c-txt-sm">
            <span>Google Map</span>
          </p>
        </address>
        <div class="p-open-time">
          <div class="p-open-time__wrap">
            <p class="p-open-time__date">
              <span id="log" class="u-display-date"></span>
            </p>
            <table class="p-open-time__table">
              <tbody>
                <tr>
                  <th><span class="u-hidden-sp">診療時間</span></th>
                  <th>月</th>
                  <th>火</th>
                  <th>水</th>
                  <th>木</th>
                  <th>金</th>
                  <th>土</th>
                  <th>日祝</th>
                </tr>
                <tr>
                  <td>午前<span class="u-hidden-sp"> 9：00〜12：30</span></td>
                  <td>
                    <img src="https://www.dc-tsurumi.com/wp/wp-content/themes/tsurumi/assets/images/calendar_circle.svg"
                      alt="診療日" class="open" />
                  </td>
                  <td>
                    <img src="https://www.dc-tsurumi.com/wp/wp-content/themes/tsurumi/assets/images/calendar_circle.svg"
                      alt="診療日" class="open" />
                  </td>
                  <td>
                    <img src="https://www.dc-tsurumi.com/wp/wp-content/themes/tsurumi/assets/images/calendar_none.svg"
                      alt="休診日" class="close" />
                  </td>
                  <td>
                    <img src="https://www.dc-tsurumi.com/wp/wp-content/themes/tsurumi/assets/images/calendar_circle.svg"
                      alt="診療日" class="open" />
                  </td>
                  <td>
                    <img src="https://www.dc-tsurumi.com/wp/wp-content/themes/tsurumi/assets/images/calendar_circle.svg"
                      alt="診療日" class="open" />
                  </td>
                  <td>
                    <img src="https://www.dc-tsurumi.com/wp/wp-content/themes/tsurumi/assets/images/calendar_circle.svg"
                      alt="診療日" class="open" />
                  </td>
                  <td>
                    <img src="https://www.dc-tsurumi.com/wp/wp-content/themes/tsurumi/assets/images/calendar_none.svg"
                      alt="休診日" class="close" />
                  </td>
                </tr>
                <tr>
                  <td>午後<span class="u-hidden-sp"> 14：00〜18：00</span></td>
                  <td>
                    <img src="https://www.dc-tsurumi.com/wp/wp-content/themes/tsurumi/assets/images/calendar_circle.svg"
                      alt="診療日" class="open" />
                  </td>
                  <td>
                    <img src="https://www.dc-tsurumi.com/wp/wp-content/themes/tsurumi/assets/images/calendar_circle.svg"
                      alt="診療日" class="open" />
                  </td>
                  <td>
                    <img src="https://www.dc-tsurumi.com/wp/wp-content/themes/tsurumi/assets/images/calendar_none.svg"
                      alt="休診日" class="close" />
                  </td>
                  <td>
                    <img src="https://www.dc-tsurumi.com/wp/wp-content/themes/tsurumi/assets/images/calendar_circle.svg"
                      alt="診療日" class="open" />
                  </td>
                  <td>
                    <img src="https://www.dc-tsurumi.com/wp/wp-content/themes/tsurumi/assets/images/calendar_circle.svg"
                      alt="診療日" class="open" />
                  </td>
                  <td>
                    <img src="https://www.dc-tsurumi.com/wp/wp-content/themes/tsurumi/assets/images/calendar_circle.svg"
                      alt="診療日" class="open" />
                  </td>
                  <td>
                    <img src="https://www.dc-tsurumi.com/wp/wp-content/themes/tsurumi/assets/images/calendar_none.svg"
                      alt="休診日" class="close" />
                  </td>
                </tr>
              </tbody>
            </table>
            <p class="p-open-time__hours u-hidden-pc">
              午前：9：00〜12：30 ／ 午後：14：00〜18：00
            </p>
          </div>
        </div>
      </div>
      <!-- /.p-open-time -->
      <nav class="p-footer__nav">
        <ul>
          <li><a href="<?php echo esc_url( home_url('/first')); ?>" class="animsition-link m-button-arrow-l">初めての方へ</a></li>
          <li><a href="<?php echo esc_url( home_url('/treatment')); ?>" class="animsition-link m-button-arrow-l">診療について</a></li>
          <li><a href="<?php echo esc_url( home_url('/staff')); ?>" class="animsition-link m-button-arrow-l">スタッフ紹介</a></li>
          <li><a href="<?php echo esc_url( home_url('/faq')); ?>" class="animsition-link m-button-arrow-l">よくあるご質問</a></li>
          <li><a href=" <?php echo esc_url( home_url('/news')); ?>" class="animsition-link m-button-arrow-l">お知らせ</a></li>
          <li><a href="<?php echo esc_url( home_url('/recruit')); ?>" class="animsition-link m-button-arrow-l">採用情報</a></li>
        </ul>
      </nav>
      <div class="p-footer__copyright">
        © RIV ROUND DENTAL CLINIC ALL RIGHTS RESERVED.
      </div>
    </footer>
    <!-- /.p-footer -->
    <div class="l-menu-sp">
      <div class="l-menu-sp__inner">
        <nav class="l-menu-sp__nav">
          <ul>
            <li><a class="animsition-link" href="<?php echo esc_url( home_url('/first')); ?>">初めての方へ</a></li>
            <li><a class="animsition-link" href="<?php echo esc_url( home_url('/treatment')); ?>">診療について</a></li>
            <li><a class="animsition-link" href=" <?php echo esc_url( home_url('/staff')); ?>">スタッフ紹介</a></li>
            <li><a class="animsition-link" href="<?php echo esc_url( home_url('/faq')); ?>">よくあるご質問</a></li>
            <li><a class="animsition-link" href=" <?php echo esc_url( home_url('/news')); ?>">お知らせ</a></li>
            <li><a class="animsition-link" href="<?php echo esc_url( home_url('/recruit')); ?>">採用情報</a></li>
          </ul>
          <div class="reserve-btn-wrap">
            <div class="reserve-btn-tel">
              <h4>電話予約はこちら</h4>
              <div class="reserve-btn">
                <a href="tel:092-686-7954"><span>092-686-7954</span></a>
              </div>
            </div>
            <div class="reserve-btn-net">
              <h4>ネット予約はこちら</h4>
              <div class="reserve-btn">
                <a href="https://beauty.hotpepper.jp/" target="_blank"><span>ONLINE RESERVE</span></a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <!-- /.l-menu-sp -->
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/animsition.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll-btn.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/page.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/text-animation.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/mobile-menu.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/date.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/c-main.js"></script>
</body>

</html>