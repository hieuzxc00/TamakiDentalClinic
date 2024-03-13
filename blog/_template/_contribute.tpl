<ONContribute id="$contribute_id"></ONContribute>
<?php $current_category_id= $category_id; $current_category_name = $category_name;?>
<ONCategory>
  <?php if( $current_category_id==$category_id ) $current_category_url = $category_url; ?>
</ONCategory>
<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=-100%, user-scalable=yes" />
<meta name="format-detection" content="telephone=no">
<title>{=$title=}</title>
<meta name="description" content="{=$title=}｜{=$base_title=}" />
<meta name="keywords" content="{=$title=}｜{=$base_title=}" />
<link rel="stylesheet" href="../../css/uikit.min.css">
<link rel="stylesheet" href="../../css/styles.css">
<link rel="stylesheet" href="../../css/responsive.css">
<link rel="canonical" href="https://www.tamaki-dent.com/blog/{=$url=}">
<!-- Begin Google Analytics --> 
<!-- Google Analytics Start --> 
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-133572972-13', 'auto');
  ga('send', 'pageview');

</script> 
<!-- Google Analytics End --> 
<!-- End Google Analytics -->
<script type="application/ld+json">
	{
	"@context": "http://schema.org",
	"@type": "BreadcrumbList",
	"itemListElement": [{
	"@type": "ListItem",
	"position": 1,
	"item": {
	"@id": "https://www.tamaki-dent.com/",
	"name": "藤沢の歯医者　玉木歯科医院｜日本歯周病学会専門医研修施設"
	}
	},{
	"@type": "ListItem",
	"position": 2,
	"item": {
	"@id": "https://www.tamaki-dent.com/blog/",
	"name": "{=$base_title=}一覧"
	}
	},{
	"@type": "ListItem",
	"position": 3,
	"item": {
	"@id": "https://www.tamaki-dent.com/blog/{=$current_category_url=}/",
	"name": "{=$current_category_name=}"
	}
	},{
	"@type": "ListItem",
	"position": 4,
	"item": {
	"@id": "https://www.tamaki-dent.com/blog/{=$url=}",
	"name": "{=$title=}"
	}
	}]
	}
	</script>
</head>

<body class="under">
<div id="wrapper">
  <header id="header">
    <div class="container">
      <h1>{=mb_strimwidth($title, 0, 20, '…', 'UTF-8')=}</h1>
      <div class="h-main">
        <div class="h-left">
          <p class="logo"><a href="https://www.tamaki-dent.com"><img src="../../images/logo.png" alt="玉木歯科医院"></a></p>
          <p class="h-txt">日本歯周病学会専門医研修施設・藤沢駅徒歩5分</p>
<p class="h-left-txtsp">藤沢駅徒歩5分</p>
        </div>
        <div class="h-right">
          <div class="h-info">
            <p class="h-tel">0466-29-5007</p>
            <p class="h-time">受付時間：10：00 ～ 13：00/14：00 ～ 18：30<br>（土曜17：00まで）休診日：木曜、日曜、祝日</p>
          </div>
          <p class="h-btn"><a onClick="ga('send', 'event', 'content', 'reservation')" a href="https://plus.dentamap.jp/apl/netuser/?id=4863&fbclid=IwAR1FE8qflxq6Usr4kFVeeG5FmPSgd_XBIKeNIX8uw1XxT9SpM_RsjvRx0Og" target="_blank">初診専用ネット予約</a></p>
        </div>
        <div class="h-right-sp">
          <label class="menu-icon sp"><span></span></label>
        </div>
      </div>
    </div>
    <div class="gnavi-fixed">
      <div class="container">
        <ul class="gnavi">
          <li><a href="https://www.tamaki-dent.com">TOP</a></li>
          <li class="over"><span>院長・ドクター紹介</span>
            <ul class="submenu">
              <li><a href="../../doctor.html">院長紹介</a></li>
              <li><a href="../../doctors.html">ドクター紹介</a></li>
            </ul>
          </li>
          <li class="over"><span>医院について</span>
            <ul class="submenu">
              <li><a href="../../facility.html">日本歯周病学会専門医研修施設について</a></li>
             <!-- <li><a href="../../nintei.html">日本歯周病学会認定歯科衛生士について</a></li> -->
              <li><a href="../../clinic.html">医院情報</a></li>
              <li><a href="../../blog">症例紹介</a></li>
              <li><a href="../../treatment#ttl01">デンタルローンについて</a></li>
              <li><a href="../../blog">お知らせ</a></li>
            </ul>
          </li>
          <li><a href="../concept.html#ttl01">コンセプト</a></li>
          <li class="over"><span>治療メニュー</span>
            <ul class="submenu">
              <li><a href="../../treatment">診療一覧</a></li>
              <li><a href="../../treatment/perio.html">歯周病治療</a></li>
              <li><a href="../../treatment/regeneration.html">歯周形成外科</a></li>
              <li><a href="../../treatment/endo.html">根管治療</a></li>
              <li><a href="../../treatment/prevent.html">予防処置</a></li>
              <li><a href="../../treatment/aesthetic.html">セラミック治療</a></li>
              <li><a href="../../treatment/implant.html">インプラント治療</a></li>
              <li><a href="../../treatment/prosthetics.html">精密義歯（入れ歯）</a></li>
              <li><a href="../../oralcancer.html">口腔がん</a></li>
              <li><a href="../../whitening/">ホワイトニング</a></li>
            </ul>
          </li>
          <li><a href="../../clinic.html#ttl01">アクセス</a></li>
        </ul>
        <div class="h-right">
          <div class="h-info">
            <p class="h-tel">0466-29-5007</p>
          </div>
          <p class="h-btn"><a onClick="ga('send', 'event', 'content', 'reservation')" a href="https://plus.dentamap.jp/apl/netuser/?id=4863&fbclid=IwAR1FE8qflxq6Usr4kFVeeG5FmPSgd_XBIKeNIX8uw1XxT9SpM_RsjvRx0Og" target="_blank">初診専用ネット予約</a></p>
        </div>
      </div>
    </div>
  </header>
  <nav id="gnavi">
    <div class="container">
        <ul class="gnavi">
          <li><a href="https://www.tamaki-dent.com">TOP</a></li>
          <li class="over"><span>院長・ドクター紹介</span>
            <ul class="submenu">
              <li><a href="../../doctor.html">院長紹介</a></li>
              <li><a href="../../doctors.html">ドクター紹介</a></li>
            </ul>
          </li>
          <li class="over"><span>医院について</span>
            <ul class="submenu">
              <li><a href="../../facility.html">日本歯周病学会専門医研修施設について</a></li>
             <!-- <li><a href="../../nintei.html">日本歯周病学会認定歯科衛生士について</a></li> -->
              <li><a href="../../clinic.html">医院情報</a></li>
              <li><a href="../../blog">症例紹介</a></li>
              <li><a href="../../treatment#ttl01">デンタルローンについて</a></li>
              <li><a href="../../blog">お知らせ</a></li>
            </ul>
          </li>
          <li><a href="../concept.html#ttl01">コンセプト</a></li>
          <li class="over"><span>治療メニュー</span>
            <ul class="submenu">
              <li><a href="../../treatment">診療一覧</a></li>
              <li><a href="../../treatment/perio.html">歯周病治療</a></li>
              <li><a href="../../treatment/regeneration.html">歯周形成外科</a></li>
              <li><a href="../../treatment/endo.html">根管治療</a></li>
              <li><a href="../../treatment/prevent.html">予防処置</a></li>
              <li><a href="../../treatment/aesthetic.html">セラミック治療</a></li>
              <li><a href="../../treatment/implant.html">インプラント治療</a></li>
              <li><a href="../../treatment/prosthetics.html">精密義歯（入れ歯）</a></li>
              <li><a href="../../oralcancer.html">口腔がん</a></li>
              <li><a href="../../whitening/">ホワイトニング</a></li>
            </ul>
          </li>
          <li><a href="../../clinic.html#ttl01">アクセス</a></li>
        </ul>
    </div>
  </nav>
  <div id="mainvisual">
    <div class="container">
      <h2>
        <ONIf condition="$field_id==3"> {=$current_category_name=}
          <ONElse>
          {=$current_category_name=}</ONIf>
      </h2>
    </div>
  </div>
  <main id="main">
    <div id="content">
      <ul class="topic-path">
        <li><a href="https://www.tamaki-dent.com">TOP</a></li>
        <li><a href="../">{=$base_title=}一覧</a></li>
        <li><a href="../{=$current_category_url=}">{=$current_category_name=}</a></li>
        <li>{=mb_strimwidth($title, 0, 20, '…', 'UTF-8')=}</li>
      </ul>
      <ONIf condition="$field_id==1">
        <h3 class="blog-ttl-h3">{=$title=}</h3>
        <ONIf condition="$img_before_Value || $img_after_Value || $txt_area_Value">
          <div class="section">
            <h4 class="blog-ttl-h4">ビフォーアフター</h4>
            <ONIf condition="$img_before_Value || $img_after_Value">
              <div class="blog-field1-list" uk-lightbox="animation: scale">
                <ONIf condition="$img_before_Value">
                  <div class="blog-field1-itm">
                    <h5>治療前</h5>
                    <p class="blog-field1-img"><a class="uk-inline" href="{=$img_before_Src=}"><img src="{=$img_before_Src=}" alt="治療前"></a></p>
                  </div>
                </ONIf>
                <ONIf condition="$img_after_Value">
                  <div class="blog-field1-itm">
                    <h5>治療後</h5>
                    <p class="blog-field1-img"><a class="uk-inline" href="{=$img_after_Src=}"><img src="{=$img_after_Src=}" alt="治療後"></a></p>
                  </div>
                </ONIf>
              </div>
            </ONIf>
            <ONIf condition="$txt_area_Value">
              <div class="blog-field1-txt"> {=$txt_area_Value=} </div>
            </ONIf>
          </div>
        </ONIf>
        <ONIf condition="$tbl_txt1_Value || $tbl_txt2_Value || $tbl_txt3_Value || $tbl_txt4_Value || $tbl_txt5_Value || $tbl_txt6_Value || $tbl_txt7_Value || $tbl_txt8_Value">
          <div class="section">
            <table class="under-tbl tbl-block">
              <ONIf condition="$tbl_txt1_Value">
                <tr>
                  <th class="w25">主訴</th>
                  <td>{=$tbl_txt1_Value=}</td>
                </tr>
              </ONIf>
              <ONIf condition="$tbl_txt2_Value">
                <tr>
                  <th class="w25">治療内容</th>
                  <td>{=$tbl_txt2_Value=}</td>
                </tr>
              </ONIf>
              <ONIf condition="$tbl_txt3_Value">
                <tr>
                  <th class="w25">患者様の年齢</th>
                  <td>{=$tbl_txt3_Value=}</td>
                </tr>
              </ONIf>
              <ONIf condition="$tbl_txt4_Value">
                <tr>
                  <th class="w25">患者様の性別</th>
                  <td>{=$tbl_txt4_Value=}</td>
                </tr>
              </ONIf>
              <ONIf condition="$tbl_txt5_Value">
                <tr>
                  <th class="w25">治療期間</th>
                  <td>{=$tbl_txt5_Value=}</td>
                </tr>
              </ONIf>
              <ONIf condition="$tbl_txt6_Value">
                <tr>
                  <th class="w25">治療費</th>
                  <td>{=$tbl_txt6_Value=}</td>
                </tr>
              </ONIf>
              <ONIf condition="$tbl_txt7_Value">
                <tr>
                  <th class="w25">治療で得られるメリット</th>
                  <td>{=$tbl_txt7_Value=}</td>
                </tr>
              </ONIf>
              <ONIf condition="$tbl_txt8_Value">
                <tr>
                  <th class="w25">治療する際に起こる<br>リスク・副作用</th>
                  <td>{=$tbl_txt8_Value=}</td>
                </tr>
              </ONIf>
            </table>
          </div>
        </ONIf>
        <ONElseIf condition="$field_id==2">
        <p class="field-cat-name">{=$current_category_name=}</p>
        <h3 class="blog-ttl-h3">{=$title=}</h3>
        <?php
          for($i=1;$i<=10;$i++){

               $tlt = 'ttl_h4_'.$i.'_Value';
               $txt = 'txt'.$i.'_Value';
               $img01 = 'img'.$i.'_1_Value';
               $img02 = 'img'.$i.'_2_Value';
               $img03 = 'img'.$i.'_3_Value';
               $img04 = 'img'.$i.'_4_Value';
               $img05 = 'img'.$i.'_5_Value';

               if($$tlt && ($$img01 || $$img02 || $$img03 || $$img04 || $$img05 || $$txt)):?>
        <div class="section">
          <h4 class="blog-ttl-h4"><?php echo $$tlt;?></h4>
          <div class="blog-field2-img" uk-lightbox="animation: scale">
            <?php for($j=1;$j<=5;$j++){
            $imgVl = 'img'.$i.'_'.$j.'_Value';
            $imgSrc = 'img'.$i.'_'.$j.'_Src';
            
              if($$imgVl):?>
            <div class="blog-field2-itm"><a href="<?php echo $$imgSrc;?>"><img src="<?php echo $$imgSrc;?>" alt="<?php echo $$tlt;?>"></a></div>
            <?php endif;?>
            <?php }?>
            <p class="hidden"></p>
          </div>
          <?php if($$txt):?>
          <div class="blog-fiedld2-txt"> <?php echo $$txt; ?> </div>
          <?php endif;?>
        </div>
        <?php endif; } ?>
        <ONIf condition="$tbl_txt1_Value || $tbl_txt2_Value || $tbl_txt3_Value || $tbl_txt4_Value || $tbl_txt5_Value || $tbl_txt6_Value || $tbl_txt7_Value || $tbl_txt8_Value">
          <div class="section">
            <table class="under-tbl tbl-block">
              <ONIf condition="$tbl_txt1_Value">
                <tr>
                  <th class="w25">主訴</th>
                  <td>{=$tbl_txt1_Value=}</td>
                </tr>
              </ONIf>
              <ONIf condition="$tbl_txt2_Value">
                <tr>
                  <th class="w25">治療内容</th>
                  <td>{=$tbl_txt2_Value=}</td>
                </tr>
              </ONIf>
              <ONIf condition="$tbl_txt3_Value">
                <tr>
                  <th class="w25">患者様の年齢</th>
                  <td>{=$tbl_txt3_Value=}</td>
                </tr>
              </ONIf>
              <ONIf condition="$tbl_txt4_Value">
                <tr>
                  <th class="w25">患者様の性別</th>
                  <td>{=$tbl_txt4_Value=}</td>
                </tr>
              </ONIf>
              <ONIf condition="$tbl_txt5_Value">
                <tr>
                  <th class="w25">治療期間</th>
                  <td>{=$tbl_txt5_Value=}</td>
                </tr>
              </ONIf>
              <ONIf condition="$tbl_txt6_Value">
                <tr>
                  <th class="w25">治療費</th>
                  <td>{=$tbl_txt6_Value=}</td>
                </tr>
              </ONIf>
              <ONIf condition="$tbl_txt7_Value">
                <tr>
                  <th class="w25">治療で得られるメリット</th>
                  <td>{=$tbl_txt7_Value=}</td>
                </tr>
              </ONIf>
              <ONIf condition="$tbl_txt8_Value">
                <tr>
                  <th class="w25">治療する際に起こる<br>リスク・副作用</th>
                  <td>{=$tbl_txt8_Value=}</td>
                </tr>
              </ONIf>
            </table>
          </div>
        </ONIf>
        <ONElse>
        <p class="blog-date mb15">{=$date=}</p>
        <h3 class="blog-ttl-h3">{=$title=}</h3>
        <ONIf condition="$news_h4_Value">
          <h4 class="blog-ttl-h4">{=$news_h4_Value=}</h4>
        </ONIf>
        <ONIf condition="$news_img1_Value || $news_img2_Value || $news_img3_Value || $news_txt_Value">
          <div class="section">
            <ul class="blog-field3-img" uk-lightbox="animation: scale">
              <ONIf condition="$news_img1_Value">
                <li> <a href="{=$news_img1_Src=}"><img src="{=$news_img1_Src=}" alt="{=$title=}"></a> </li>
              </ONIf>
              <ONIf condition="$news_img2_Value">
                <li> <a href="{=$news_img2_Src=}"><img src="{=$news_img2_Src=}" alt="{=$title=}"></a> </li>
              </ONIf>
              <ONIf condition="$news_img3_Value">
                <li> <a href="{=$news_img3_Src=}"><img src="{=$news_img3_Src=}" alt="{=$title=}"></a> </li>
              </ONIf>
            </ul>
            <ONIf condition="$news_txt_Value">
              <div class="blog-field3-txt"> {=$news_txt_Value=} </div>
            </ONIf>
          </div>
        </ONIf>
      </ONIf>
      <div class="section"> 
        
        <!-- next prev button -->
        <?php $current_url = $url; ?>
        <ONContributeSearch category="$current_category_id">
          <ONContributeFetch>
            <?php $pages[] = $url; ?>
          </ONContributeFetch>
        </ONContributeSearch>
        <?php $current_page = array_search($current_url,$pages); ?>
        <ul class="blog-btn">
          <?php if($prev = @$pages[$current_page+1]): ?>
          <li class="prevPage"><a href="../<?php echo $prev ?>">&laquo; 前の事例へ</a></li>
          <?php endif; ?>
          <li><a href="../{=$current_category_url=}">一覧に戻る</a></li>
          <?php if($next = @$pages[$current_page-1]): ?>
          <li class="nextPage"><a href="../<?php echo $next ?>">次の事例へ &raquo;</a></li>
          <?php endif ?>
        </ul>
        <!-- /next prev button --> 
        <!-- *********   CATEGORIES   ********* -->
        <ul class="blog-cate">
          <ONCategory>
            <li class="blog-cate-{=$category_url=}<?php if($category_id==1){echo ' none';} ?>"> <a href="../{=$category_url=}">{=$category_name=}</a> </li>
          </ONCategory>
        </ul>
        <!-- *********    /CATEGORIES ********* --> 
        
      </div>
    </div>
  </main>
  <footer id="footer">
    <p id="totop"><a href="#wrapper"><img src="../../images/totop.png" alt="totop"></a></p>
    <div class="footer01">
      <div class="container">
        <div class="f01-info"> <a href="tel:0466295007" class="sweetlink">
          <p class="f01-tel">0466-29-5007</p>
          <p class="f01-time">受付時間：10：00～13：00/14：00～18：30（土曜17：00まで）<br>休診日：木曜、日曜、祝日</p>
          </a> </div>
        <p class="f01-btn"><a onClick="ga('send', 'event', 'content', 'reservation')" a href="https://plus.dentamap.jp/apl/netuser/?id=4863&fbclid=IwAR1FE8qflxq6Usr4kFVeeG5FmPSgd_XBIKeNIX8uw1XxT9SpM_RsjvRx0Og" target="_blank">初診専用ネット予約</a></p>
      </div>
    </div>
    <div class="footer02">
      <div class="container">
        <p class="f02-logo"><a href="https://www.tamaki-dent.com/"><img src="../../images/f_logo.png" alt="玉木歯科医院"></a></p>
        <div class="f02-info">
          <div class="f02-info-left">
            <p class="f02-info-add">〒251-0055<br>神奈川県藤沢市南藤沢18-1　<br class="sp425">グレイシャスＫ南藤沢 4F<br>診療時間：10：00～13：00/14：00～18：30<br>　　　　（土曜17：00まで）<br>休診日：木曜・日曜・祝日</p>
            <p class="f02-info-txt">日本歯周病学会専門医研修施設<br class="sp425">・藤沢駅徒歩5分</p>
          </div>
          <p class="f02-calendar"><img src="../../images/f_calendar.png" alt="診療時間"></p>
        </div>
        <div class="f02-cnt">
          <div class="f02-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26037.99974769169!2d139.47288913955074!3d35.337029900000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60184fca6592198f%3A0x4f31cb67b15f0b54!2z546J5pyo5q2v56eR5Yy76Zmi!5e0!3m2!1sja!2sjp!4v1571792463865!5m2!1sja!2sjp" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
          </div>
          <div id="f02-video"></div>
        </div>
      </div>
    </div>
    <div class="footer03">
      <div class="container">
        <h3 class="f03-h3"><span>連携医院</span></h3>
        <ul class="f03-bnr">
          <li>
            <p class="f03-bnr-img"><a href="https://teeth-alignment.jp/" target="_blank"><img src="../../images/f_bnr01.jpg" alt="AQUA日本橋デンタルクリニック"></a></p>
            <p class="f03-bnr-ttl">矯正歯科</p>
          </li>
          <li>
            <p class="f03-bnr-img"><a href="http://brace.tokyo/" target="_blank"><img src="../../images/f_bnr02.jpg" alt="広瀬矯正歯科"></a></p>
            <p class="f03-bnr-ttl">矯正歯科</p>
          </li>
          <li>
            <p class="f03-bnr-img"><a href="http://www.hosp.keio.ac.jp/annai/shinryo/otorhino/" target="_blank"><img src="../../images/f_bnr03.jpg" alt="慶應義塾大学病院 Keio University Hospital"></a></p>
            <p class="f03-bnr-ttl">耳鼻咽喉科</p>
          </li>
        </ul>
      </div>
    </div>
    <div class="footer04">
      <div class="container">
        <div class="f04-link">
          <div class="f04-col">
            <ul>
              <li><a href="https://www.tamaki-dent.com">TOP</a></li>
            </ul>
          </div>
          <div class="f04-col">
            <p class="f04-col-ttl">医院情報</p>
            <ul>
              <li><a href="../../doctor.html">院長紹介</a></li>
              <li><a href="../../doctors.html">ドクター紹介</a></li>
              <li><a href="../../facility.html">専門医研修施設について</a></li>
              <!-- <li><a href="../../nintei.html">認定歯科衛生士について</a></li> -->
              <li><a href="../../clinic.html">医院情報</a></li>
              <li><a href="../../clinic.html#ttl01">アクセス</a></li>
              <li><a href="../../concept.html">コンセプト・特徴</a></li>
              <li><a href="../../blog">症例紹介</a></li>
            </ul>
          </div>
          <div class="f04-col">
            <p class="f04-col-ttl">診療メニュー</p>
            <ul>
              <li><a href="../../treatment">診療一覧</a></li>
              <li><a href="../../treatment/perio.html">歯周病治療</a></li>
              <li><a href="../../treatment/regeneration.html">歯周形成外科</a></li>
              <li><a href="../../treatment/endo.html">根管治療</a></li>
            </ul>
            <ul>
              <li><a href="../../treatment/prevent.html">予防処置</a></li>
              <li><a href="../../treatment/aesthetic.html">セラミック治療</a></li>
              <li><a href="../../treatment/implant.html">インプラント治療</a></li>
              <li><a href="../../treatment/prosthetics.html">精密義歯（入れ歯）</a></li>
              <li><a href="../../oralcancer.html">口腔がん</a></li>
              <li><a href="../../whitening/">ホワイトニング</a></li>
            </ul>
          </div>
          <div class="close-menu sp">メニューを閉じる</div>
        </div>
        <p class="copyright">Copyright &copy; TAMAKI DENTAL CLINIC All Rights Reserved.</p>
      </div>
    </div>
    <div class="footer-fixed sp">
      <ul>
        <li class="fx-tel"><a href="tel:0466295007" class="sweetlink"><img src="../../images/f_tel_ico.png" alt="tel">0466-29-5007</a></li>
        <li class="fx-btn"><a onclick="ga('send', 'event', 'content', 'reservation')" href="https://plus.dentamap.jp/apl/netuser/?id=4863&amp;fbclid=IwAR1FE8qflxq6Usr4kFVeeG5FmPSgd_XBIKeNIX8uw1XxT9SpM_RsjvRx0Og" target="_blank">初診専用ネット予約</a></li>
      </ul>
    </div>
  </footer>
</div>
<script src="../../js/jquery.js"></script> 
<script src="../../js/youtube_top.js"></script> 
<script src="../../js/uikit.min.js"></script> 
<script src="../../js/uikit-icons.min.js"></script> 
<script src="../../js/sweetlink.js"></script>
<script src="../../js/track-tel.js"></script>
<script src="../../js/common.js"></script>
<script src=""//sitest.jp/tracking/sitest_js?p=5e71fe34d408b"" async></script>
</body>
</html>