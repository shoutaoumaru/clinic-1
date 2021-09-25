<?php
 /* Template Name: treatment
 */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>診療について | 医院テンプレート1</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendor/bootstrap-reboot.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendor/animsition.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/style.css" />
</head>

<body>
  <div class="treatment-wrapper animsition">
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
    <div class="treatment-contents">
      <div id="c-topview" class="c-topview">
        <div class="c-topview__inner">
          <div class="c-topview__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home/medical__2.jpg" alt="">
          </div>
          <h2 class="c-topview__title clip-js1 left">
            診療について
          </h2>
        </div>
      </div>
      <div class="l-content" id="content">
        <div class="c-container">
          <div class="tr-message">
            <div class="tr-message__inner appear up">
              <h2 class="c-head01 item">
                <span>RivRound医院の診療コンセプト</span>
                <p>“患者様の納得”のための、<br class="view-pc">わかりやすく明確な治療方針の提示</p>
              </h2>
              <div class="c-txtarea01 item">
                <p class="c-txt-sm">
                  ざっと診察して薬を処方するのではなく、今の症状がなぜ起きているのかを分かりやすく患者様にお伝えをし、症状がよくなった後も出来るかぎり再発しないように予防策を丁寧にお伝えしていきます。
                </p>
                <p class="c-txt-sm">その場しのぎの治療ではなく、しっかりとご自身の健康に向き合いメインテナンスをしていく。</p>
                <p class="c-txt-sm">それが私たちが当たり前に取り組む予防医療です。</p>
              </div>
            </div>
            <div class="tr-message__photo">
              <img src="<?php echo get_template_directory_uri(); ?>/images/home/counseling-2.jpg" alt="">
              <img src="<?php echo get_template_directory_uri(); ?>/images/home/counseling.jpg" alt="">
            </div>
          </div>
          <!-- /tr-message -->
          <div class="tr-menu">
            <div class="tr-menu__inner appear up">
              <h2 class="c-head01 item">
                <span>RivRound医院の診療科目</span>
                <p>あらゆるお悩みに<br class="view-pc">
                  幅広くお答えするために</p>
              </h2>
              <div class="c-txtarea01 item">
                <p class="c-txt-sm">
                  RivRound医院では、患者さんの病状や生活背景に合わせて柔軟に対応すべく、幅広く治療法をご用意しております。また、当院で対応できないような、より専門性の高い処置についても、高次医療機関（大学病院など）と連携をとりながら診療していきます。
                </p>
              </div>
              <ul class="tr-menu__list item">
                <li><span>一般内科</span></li>
                <li><span>予防接種</span></li>
                <li><span>循環器内科</span></li>
                <li><span>各種検診</span></li>
              </ul>
              <div class="c-txtarea01 item">
                <p class="c-txt-sm">
                  どんなに良い治療を施したとしても、それを維持する方法を知らない、あるいは実践しなければいずれ不具合が生じてしまいます。治療の繰り返しにならないよう、予防を軸とした診療の流れに沿って治療を進めていきます。
                </p>
              </div>
            </div>
          </div>
          <!-- /tr-menu -->
          <div class="tr-machine">
            <ul class="tr-machine__list">
              <li class="tr-machine__item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home/ct.jpg" alt="">
                <h5 class="c-txt-sm">CT検査</h5>
                <p class="c-txt-sm">レントゲンよりもより詳細な情報が得られる、みみ・はな用のCT検査を予約なしに10分程度の短時間で行うことができます。</p>
              </li>
              <li class="tr-machine__item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home/img-point2@2x.jpg" alt="">
                <h5 class="c-txt-sm">内視鏡検査</h5>
                <p class="c-txt-sm">刺激の少ない径3.3㎜の細いファイバースコープと異物摘出や
                  組織検査も可能な鉗子付きファイバースコープの両方を導入しています</p>
              </li>
              <li class="tr-machine__item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home/img-point3@2x.jpg" alt="">
                <h5 class="c-txt-sm">聴力検査</h5>
                <p class="c-txt-sm">防音構造の聴力検査室でより正確な聴力検査が可能です。</p>
              </li>
              <li class="tr-machine__item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home/img-point4@2x.jpg" alt="">
                <h5 class="c-txt-sm">赤外線CCDカメラ</h5>
                <p class="c-txt-sm">めまいの際に出現する『眼振』という異常な眼球運動を画像で確認することができます。</p>
              </li>
            </ul>
          </div>
          <nav class="btn-category appear up">
            <ul class="item">
              <li><a class="animsition-link" href="<?php echo esc_url( home_url('/first')); ?>"><span
                    class="btn-category__first"></span><i>初めての方へ</i></a></li>
              <li><a class="animsition-link" href="<?php echo esc_url( home_url('/treatment')); ?>"><span
                    class="btn-category__care"></span><i>診療について</i></a></li>
              <li><a class="animsition-link" href="<?php echo esc_url( home_url('/staff')); ?>"><span
                    class="btn-category__staff"></span><i>スタッフ紹介</i></a></li>
              <li class="u-hidden-pc"><a class="animsition-link" href="<?php echo esc_url( home_url('/faq')); ?>"><span
                    class="btn-category__faq"></span><i>よくあるご質問</i></a>
              </li>
            </ul>
          </nav>
          <nav class="btn-topicpath">
            <ul>
              <li><a class="animsition-link" href="/">TOP</a></li>
              <li>診療について</li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <!-- /.treatment-contents -->
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
            <li><a class="animsition-link" href="<?php echo esc_url( home_url('/staff')); ?>">スタッフ紹介</a></li>
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
  <!-- /.treatment-wrapper -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/animsition.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/simpleParallax.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll-btn.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/page.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/text-animation.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/parallax.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/mobile-menu.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/date.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/c-main.js"></script>
</body>

</html>