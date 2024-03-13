<?php

	$setting=unserialize(@file_get_contents(DATA_DIR.'/setting/overnotes.dat'));
	ini_set('mbstring.http_input', 'pass');
	parse_str($_SERVER['QUERY_STRING'],$_GET);
	$keyword=isset($_GET['k'])?trim($_GET['k']):'';
	$category=isset($_GET['c'])?trim($_GET['c']):'';
	$page=isset($_GET['p'])?trim($_GET['p']):'';
	$base_title = !empty($setting['title'])? $setting['title'] : 'OverNotes';

?><?php
	$contribute=get_contribute($contribute_id);
		$title=$contribute['title'];
	$category_id=$contribute['category'];
	$category_data=unserialize(@file_get_contents(DATA_DIR.'/category/'.$category_id.'.dat'));
	$category_name=$category_data['name'];
	$category_text=@$category_data['text'];
	$category_url=$category_data['id'];
	$field_id=$contribute['field'];
	$id=$contribute['id'];
	$field=get_field($field_id);
	$date=$contribute['public_begin_datetime'];
	$url=$contribute['url'].'/';

	foreach($field as $field_index=>$field_data){
		${$field_data['code'].'_Name'}=$field_data['name'];
		${$field_data['code'].'_Value'}=make_value(
		$field_data['name']
				,@$contribute['data'][$field_id][$field_index]
			,$field_data['type']
			,$id
			,$field_id
			,$field_index
		);
		if($field_data['type']=='image'){
			${$field_data['code'].'_Src'}=ROOT_URI.'/_data/contribute/images/'.@$contribute['data'][$field_id][$field_index];
		}
	}

?>
<?php $current_category_id= $category_id; $current_category_name = $category_name;?>
<?php
	$category_index=get_category_index();
	foreach($category_index as $rowid=>$id){
		$category_data=unserialize(@file_get_contents(DATA_DIR.'/category/'.$id.'.dat'));
		$category_url=$category_data['id'];
		$category_name=$category_data['name'];
		$category_text=@$category_data['text'];
		$category_id=$id;
		${'category'.$id.'_url'}=$category_data['id'];
		${'category'.$id.'_name'}=$category_data['name'];
		${'category'.$id.'_text'}=@$category_data['text'];
		$selected=(@$_GET['c']==$id?' selected="selected"':'');

?>
  <?php if( $current_category_id==$category_id ) $current_category_url = $category_url; ?>
<?php
	}
?>
<!doctype html>
<html lang="ja">
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-00000000');</script>
<!-- End Google Tag Manager -->
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="format-detection" content="telephone=no" />
<title><?php echo $title; ?>｜藤沢駅から徒歩5分の歯医者｜玉木歯科医院</title>
<meta name="description" content="<?php echo $title; ?>｜<?php echo $base_title; ?>" />
<meta name="keywords" content="<?php echo $title; ?>｜<?php echo $base_title; ?>" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
    <meta name="thumbnail" content="https://www.hideshima-dental.com/images/logo-dummy.jpg" />
<link rel="canonical" href="https://www.hideshima-dental.com/blog/<?php echo $url; ?>">
<!-- FAVICON -->
<link rel="icon" href="../../favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" sizes="180x180" href="../../favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../../favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../../favicon/favicon-16x16.png">
<link rel="manifest" href="../../favicon/site.webmanifest">
<!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.18.3/dist/css/uikit.min.css" />
<!-- STYLESHEET -->
<link rel="stylesheet" media="all" href="../../css/styles.css" />
<link rel="stylesheet" media="all" href="../../css/responsive.css" />
<link rel="stylesheet" media="all" href="../../css/under.css" />
<link rel="stylesheet" media="all" href="../../css/under_responsive.css" />
<link rel="canonical" href="https://www.tamaki-dent.com/blog/<?php echo $url; ?>">
<!-- Begin Google Analytics --> 
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
	"name": "藤沢の歯医者「玉木歯科医院」TOP"
	}
	},{
	"@type": "ListItem",
	"position": 2,
	"item": {
	"@id": "https://www.tamaki-dent.com/blog/",
	"name": "<?php echo $base_title; ?>一覧"
	}
	},{
	"@type": "ListItem",
	"position": 3,
	"item": {
	"@id": "https://www.tamaki-dent.com/blog/<?php echo $current_category_url; ?>/",
	"name": "<?php echo $current_category_name; ?>"
	}
	},{
	"@type": "ListItem",
	"position": 4,
	"item": {
	"@id": "https://www.tamaki-dent.com/blog/<?php echo $url; ?>",
	"name": "<?php echo $title; ?>"
	}
	}]
	}
	</script>
</head>

<body class="under">
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-00000000"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
<div id="wrapper">
    <header>
            <h1><?php echo $title; ?></h1>
            <div class="idx-fx-h">
                <div class="idx-logo">
                    <p class="logo">
                        <a href="https://www.tamaki-dent.com/">
                            <img src="../../images/logo.png" width="262" height="59" alt="藤沢の歯医者「玉木歯科医院」">
                        </a>
                    </p>
                    <p class="logo-ttl">日本歯周病学会専門医研修施設<br>藤沢駅徒歩5分</p>
                </div>
                <div class="gnavi">
                    <ul class="idx-menu">
                        <li class="pc">
                            <a href="https://www.tamaki-dent.com/">TOP</a>
                        </li>
                        <li class="pc has">
                            <label>院長･ドクター紹介</label>
                            <ul class="sub-menu">
                                <li>
                                    <a href="../../director.html">院長紹介</a>
                                </li>
                                <li>
                                    <a href="../../doctor.html">副院長紹介</a>
                                </li>
                                <li>
                                    <a href="../../doctors.html">ドクター紹介</a>
                                </li>
                            </ul>
                        </li>
                        <li class="pc has active">
                            <label>医院について</label>
                            <ul class="sub-menu">
                                <li>
                                    <a href="../../facility.html">日本歯周病学会専門医研修施設について</a>
                                </li>
                                <li>
                                    <a href="../../clinic.html">医院情報</a>
                                </li>
                                <li>
                                    <a href="../../blog">症例紹介一覧</a>
                                </li>
                                <li>
                                    <a href="../../treatment/#ttl01">デンタルローンについて</a>
                                </li>
                                <li>
                                    <a href="../../blog/news/">お知らせ</a>
                                </li>
                            </ul>
                        </li>
                        <li class="pc">
                            <a href="../../concept.html#ttl01">コンセプト</a>
                        </li>
                        <li class="pc has">
                            <label>治療メニュー</label>
                            <ul class="sub-menu">
                                <li>
                                    <a href="../../treatment/">診療一覧</a>
                                </li>
                                <li>
                                    <a href="../../treatment/perio.html">歯周病治療</a>
                                </li>
                                <li>
                                    <a href="../../treatment/regeneration.html">歯周形成外科</a>
                                </li>
                                <li>
                                    <a href="../../treatment/endo.html">根管治療</a>
                                </li>
                                <li>
                                    <a href="../../treatment/prevent.html">予防処置</a>
                                </li>
                                <li>
                                    <a href="../../treatment/aesthetic.html">セラミック治療</a>
                                </li>
                                <li>
                                    <a href="../../treatment/implant.html">インプラント治療</a>
                                </li>
                                <li>
                                    <a href="../../treatment/prosthetics.html">精密義歯（入れ歯）</a>
                                </li>
                                <li>
                                    <a href="../../treatment/oralcancer.html">口腔がん</a>
                                </li>
                                <li>
                                    <a href="../../treatment/whitening.html">ホワイトニング</a>
                                </li>
                            </ul>
                        </li>
                        <li class="pc last-li">
                            <a href="../../clinic.html#ttl01">アクセス</a>
                        </li>
                        <li class="has sp">
                            <label>医院情報</label>
                            <ul class="sub-menu">
                                <li>
                                    <a href="../../director.html">院長紹介</a>
                                </li>
                                <li>
                                    <a href="../../doctor.html">副院長紹介</a>
                                </li>
                                <li>
                                    <a href="../../doctors.html">ドクター紹介</a>
                                </li>
                                <li>
                                    <a href="../../facility.html">専門医研修施設について</a>
                                </li>
                                <li>
                                    <a href="../../clinic.html">医院情報・アクセス</a>
                                </li>
                                <li>
                                    <a href="../../concept.html">コンセプト・特長</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has sp">
                            <label>診療メニュー</label>
                            <ul class="sub-menu">
                                <li>
                                    <a href="../../treatment/">診療一覧</a>
                                </li>
                                <li>
                                    <a href="../../treatment/perio.html">歯周病治療</a>
                                </li>
                                <li>
                                    <a href="../../treatment/regeneration.html">歯周形成外科</a>
                                </li>
                                <li>
                                    <a href="../../treatment/endo.html">根管治療</a>
                                </li>
                                <li>
                                    <a href="../../treatment/prevent.html">予防処置</a>
                                </li>
                                <li>
                                    <a href="../../treatment/aesthetic.html">セラミック治療</a>
                                </li>
                                <li>
                                    <a href="../../treatment/implant.html">インプラント治療</a>
                                </li>
                                <li>
                                    <a href="../../treatment/prosthetics.html">精密義歯（入れ歯）</a>
                                </li>
                                <li>
                                    <a href="../../treatment/oralcancer.html">口腔がん</a>
                                </li>
                                <li>
                                    <a href="../../treatment/whitening.html">ホワイトニング</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </header>
  <main>
    <div id="top_info">
      <div class="inner">
          <p class="top_info-title">
            <?php
	if($field_id==3){
?> <?php echo $current_category_name; ?>
            <?php
	}else{
?>
            <?php echo $current_category_name; ?><?php
	}
?>
          </p>
      </div>
    </div>
    <div id="topic_path">
      <div class="inner">
          <ul>
              <li><a href="https://www.tamaki-dent.com/">藤沢の歯医者「玉木歯科医院」TOP</a></li>
              <li><a href="../"><?php echo $base_title; ?>一覧</a></li>
              <li><a href="../<?php echo $current_category_url; ?>"><?php echo $current_category_name; ?></a></li>
              <li><?php echo $title; ?></li>
          </ul>
      </div>
    </div>
    <div id="content">
      <div class="inner">
        <?php
	if($field_id==1){
?>
          <h2><?php echo $title; ?></h2>
          <?php
	if($img_before_Value || $img_after_Value || $txt_area_Value){
?>
            <section>
              <h4 class="blog-ttl-h4">ビフォーアフター</h4>
              <?php
	if($img_before_Value || $img_after_Value){
?>
                <div class="blog-field1-list" uk-lightbox="animation: scale">
                  <?php
	if($img_before_Value){
?>
                    <div class="blog-field1-itm">
                      <h5>治療前</h5>
                      <p class="blog-field1-img"><a class="uk-inline" href="<?php echo $img_before_Src; ?>"><img src="<?php echo $img_before_Src; ?>" alt="治療前"></a></p>
                    </div>
                  <?php
	}
?>
                  <?php
	if($img_after_Value){
?>
                    <div class="blog-field1-itm">
                      <h5>治療後</h5>
                      <p class="blog-field1-img"><a class="uk-inline" href="<?php echo $img_after_Src; ?>"><img src="<?php echo $img_after_Src; ?>" alt="治療後"></a></p>
                    </div>
                  <?php
	}
?>
                </div>
              <?php
	}
?>
              <?php
	if($txt_area_Value){
?>
                <div class="blog-field1-txt"> <?php echo $txt_area_Value; ?> </div>
              <?php
	}
?>
            </section>
          <?php
	}
?>
          <?php
	if($tbl_txt1_Value || $tbl_txt2_Value || $tbl_txt3_Value || $tbl_txt4_Value || $tbl_txt5_Value || $tbl_txt6_Value || $tbl_txt7_Value || $tbl_txt8_Value){
?>
            <section>
              <table class="under-tbl tbl-block">
                <?php
	if($tbl_txt1_Value){
?>
                  <tr>
                    <th class="w25">主訴</th>
                    <td><?php echo $tbl_txt1_Value; ?></td>
                  </tr>
                <?php
	}
?>
                <?php
	if($tbl_txt2_Value){
?>
                  <tr>
                    <th class="w25">治療内容</th>
                    <td><?php echo $tbl_txt2_Value; ?></td>
                  </tr>
                <?php
	}
?>
                <?php
	if($tbl_txt3_Value){
?>
                  <tr>
                    <th class="w25">患者様の年齢</th>
                    <td><?php echo $tbl_txt3_Value; ?></td>
                  </tr>
                <?php
	}
?>
                <?php
	if($tbl_txt4_Value){
?>
                  <tr>
                    <th class="w25">患者様の性別</th>
                    <td><?php echo $tbl_txt4_Value; ?></td>
                  </tr>
                <?php
	}
?>
                <?php
	if($tbl_txt5_Value){
?>
                  <tr>
                    <th class="w25">治療期間</th>
                    <td><?php echo $tbl_txt5_Value; ?></td>
                  </tr>
                <?php
	}
?>
                <?php
	if($tbl_txt6_Value){
?>
                  <tr>
                    <th class="w25">治療費</th>
                    <td><?php echo $tbl_txt6_Value; ?></td>
                  </tr>
                <?php
	}
?>
                <?php
	if($tbl_txt7_Value){
?>
                  <tr>
                    <th class="w25">治療で得られるメリット</th>
                    <td><?php echo $tbl_txt7_Value; ?></td>
                  </tr>
                <?php
	}
?>
                <?php
	if($tbl_txt8_Value){
?>
                  <tr>
                    <th class="w25">治療する際に起こる<br>リスク・副作用</th>
                    <td><?php echo $tbl_txt8_Value; ?></td>
                  </tr>
                <?php
	}
?>
              </table>
            </section>
          <?php
	}
?>
          <?php
	}elseif($field_id==2){
?>
          <p class="field-cat-name"><?php echo $current_category_name; ?></p>
          <h2><?php echo $title; ?></h2>
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
          <section>
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
            <div class="blog-field2-txt"> <?php echo $$txt; ?> </div>
            <?php endif;?>
          </section>
          <?php endif; } ?>
          <?php
	if($tbl_txt1_Value || $tbl_txt2_Value || $tbl_txt3_Value || $tbl_txt4_Value || $tbl_txt5_Value || $tbl_txt6_Value || $tbl_txt7_Value || $tbl_txt8_Value){
?>
            <section>
              <table class="under-tbl tbl-block">
                <?php
	if($tbl_txt1_Value){
?>
                  <tr>
                    <th class="w25">主訴</th>
                    <td><?php echo $tbl_txt1_Value; ?></td>
                  </tr>
                <?php
	}
?>
                <?php
	if($tbl_txt2_Value){
?>
                  <tr>
                    <th class="w25">治療内容</th>
                    <td><?php echo $tbl_txt2_Value; ?></td>
                  </tr>
                <?php
	}
?>
                <?php
	if($tbl_txt3_Value){
?>
                  <tr>
                    <th class="w25">患者様の年齢</th>
                    <td><?php echo $tbl_txt3_Value; ?></td>
                  </tr>
                <?php
	}
?>
                <?php
	if($tbl_txt4_Value){
?>
                  <tr>
                    <th class="w25">患者様の性別</th>
                    <td><?php echo $tbl_txt4_Value; ?></td>
                  </tr>
                <?php
	}
?>
                <?php
	if($tbl_txt5_Value){
?>
                  <tr>
                    <th class="w25">治療期間</th>
                    <td><?php echo $tbl_txt5_Value; ?></td>
                  </tr>
                <?php
	}
?>
                <?php
	if($tbl_txt6_Value){
?>
                  <tr>
                    <th class="w25">治療費</th>
                    <td><?php echo $tbl_txt6_Value; ?></td>
                  </tr>
                <?php
	}
?>
                <?php
	if($tbl_txt7_Value){
?>
                  <tr>
                    <th class="w25">治療で得られるメリット</th>
                    <td><?php echo $tbl_txt7_Value; ?></td>
                  </tr>
                <?php
	}
?>
                <?php
	if($tbl_txt8_Value){
?>
                  <tr>
                    <th class="w25">治療する際に起こる<br>リスク・副作用</th>
                    <td><?php echo $tbl_txt8_Value; ?></td>
                  </tr>
                <?php
	}
?>
              </table>
            </section>
          <?php
	}
?>
          <?php
	}else{
?>
          <p class="blog-date mb15"><?php echo $date; ?></p>
          <h2><?php echo $title; ?></h2>
          <?php
	if($news_h4_Value){
?>
            <h4 class="blog-ttl-h4"><?php echo $news_h4_Value; ?></h4>
          <?php
	}
?>
          <?php
	if($news_img1_Value || $news_img2_Value || $news_img3_Value || $news_txt_Value){
?>
            <section>
              <ul class="blog-field3-img" uk-lightbox="animation: scale">
                <?php
	if($news_img1_Value){
?>
                  <li> <a href="<?php echo $news_img1_Src; ?>"><img src="<?php echo $news_img1_Src; ?>" alt="<?php echo $title; ?>"></a> </li>
                <?php
	}
?>
                <?php
	if($news_img2_Value){
?>
                  <li> <a href="<?php echo $news_img2_Src; ?>"><img src="<?php echo $news_img2_Src; ?>" alt="<?php echo $title; ?>"></a> </li>
                <?php
	}
?>
                <?php
	if($news_img3_Value){
?>
                  <li> <a href="<?php echo $news_img3_Src; ?>"><img src="<?php echo $news_img3_Src; ?>" alt="<?php echo $title; ?>"></a> </li>
                <?php
	}
?>
              </ul>
              <?php
	if($news_txt_Value){
?>
                <div class="blog-field3-txt"> <?php echo $news_txt_Value; ?> </div>
              <?php
	}
?>
            </section>
          <?php
	}
?>
        <?php
	}
?>
        <section> 
          
          <!-- next prev button -->
          <?php $current_url = $url; ?>
          <?php
	$contribute_index=contribute_search(
		$current_category_id
		,''
		,''
		,''
		,''
		,''
		,''
	);
	$max_record_count=count($contribute_index);

?>
            <?php
	$local_index=0;
	foreach($contribute_index as $rowid=>$index){
		$contribute=unserialize(@file_get_contents(DATA_DIR.'/contribute/'.$index['id'].'.dat'));
		$title=$contribute['title'];
		$url=$contribute['url'].'/';
		$category_id=$index['category'];
		$category_data=unserialize(@file_get_contents(DATA_DIR.'/category/'.$category_id.'.dat'));
		$category_name=$category_data['name'];
		$category_text=@$category_data['text'];
		$field_id=$index['field'];
		$date=$index['public_begin_datetime'];
		$id=$index['id'];
		$field=get_field($field_id);

		foreach($field as $field_index=>$field_data){
			${$field_data['code'].'_Name'}=$field_data['name'];
			${$field_data['code'].'_Value'}=make_value(
		$field_data['name']
				,@$contribute['data'][$field_id][$field_index]
				,$field_data['type']
				,$id
				,$field_id
				,$field_index
			);
	
			if($field_data['type']=='image'){
				${$field_data['code'].'_Src'}=ROOT_URI.'/_data/contribute/images/'.@$contribute['data'][$field_id][$field_index];
			}
		}
		$local_index++;

?>
              <?php $pages[] = $url; ?>
            <?php
		foreach($field as $field_index=>$field_data){
			unset(${$field_data['code'].'_Name'});
			unset(${$field_data['code'].'_Value'});
			unset(${$field_data['code'].'_Src'});
		}
	}
?>
          
          <?php $current_page = array_search($current_url,$pages); ?>
          <ul class="blog-btn">
            <?php if($prev = @$pages[$current_page+1]): ?>
            <li class="prevPage"><a href="../<?php echo $prev ?>" class="udr-btn">&laquo; 前の事例へ</a></li>
            <?php endif; ?>
            <li><a href="../<?php echo $current_category_url; ?>" class="udr-btn">一覧に戻る</a></li>
            <?php if($next = @$pages[$current_page-1]): ?>
            <li class="nextPage"><a href="../<?php echo $next ?>" class="udr-btn">次の事例へ &raquo;</a></li>
            <?php endif ?>
          </ul>
          <!-- /next prev button --> 
          <!-- *********   CATEGORIES   ********* -->
          <ul class="blog-cate">
            <?php
	$category_index=get_category_index();
	foreach($category_index as $rowid=>$id){
		$category_data=unserialize(@file_get_contents(DATA_DIR.'/category/'.$id.'.dat'));
		$category_url=$category_data['id'];
		$category_name=$category_data['name'];
		$category_text=@$category_data['text'];
		$category_id=$id;
		${'category'.$id.'_url'}=$category_data['id'];
		${'category'.$id.'_name'}=$category_data['name'];
		${'category'.$id.'_text'}=@$category_data['text'];
		$selected=(@$_GET['c']==$id?' selected="selected"':'');

?>
              <li class="blog-cate-<?php echo $category_url; ?><?php if($category_id==1){echo ' none';} ?>"> <a href="../<?php echo $category_url; ?>" class="udr-btn"><?php echo $category_name; ?></a> </li>
            <?php
	}
?>
          </ul>
          <!-- *********    /CATEGORIES ********* --> 
          
        </section>
      </div>
      <div class="udr-bottom">
        <div class="inner">
            <p class="udr-bottom-contact">
                <a href="tel:0466-29-5007" class="sweetlink">
                    <span class="contact-tel">Tel <span class="num">0466-29-5007</span></span>
                    <span class="contact-desc">
                        受付時間：10：00～13：00/14：00～18：30<br class="sp">（土曜17：00まで）<br>
                        休診日：木曜、日曜、祝日
                    </span>
                </a>
            </p>
            <p class="udr-bottom-booking">
                <a href="https://plus.dentamap.jp/apl/netuser/?id=4863&fbclid=IwAR1FE8qflxq6Usr4kFVeeG5FmPSgd_XBIKeNIX8uw1XxT9SpM_RsjvRx0Og" target="_blank" rel="noopener">初診専用ネット予約</a>
            </p>
        </div>
      </div>
      <div class="idx-recruit">
                    <div class="inner">
                        <div class="idx-fx-recruit">
                            <div class="idx-recruit-ttl">
                                <div class="idx-fx-ttl-recruit">
                                    <p class="idx-h3">採用情報</p>
                                    <p class="idx-sub-h3">RECRUITMENT</p>
                                </div>
                                <p class="idx-btn idx-btn02 pc">
                                    <a href="#">採用について</a>
                                </p>
                            </div>
                            <div class="idx-recruit-r">
                                <p class="ttl01">プロフェッショナルを育てる環境がここにあります</p>
                                <p class="ttl02">日本歯周病学会専門医研修施設で<br>精度の高い診療を共に提供しましょう
                                </p>
                                <div class="idx-recruit-ttl">
                                    <p class="idx-btn idx-btn02 sp">
                                        <a href="#">採用について</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
  </main>
<footer>
            <div class="f-box01">
                <div class="inner">
                    <div class="f-fx-logo">
                        <p class="f-logo">
                            <a href="https://www.tamaki-dent.com/">
                                <img src="../../images/f-logo.png" width="252" height="58" alt="藤沢の歯医者「玉木歯科医院」" loading="lazy">
                            </a>
                        </p>
                        <p class="f-ttl-logo">日本歯周病学会専門医研修施設・藤沢駅徒歩5分</p>
                    </div>
                    <div class="f-fx-box">
                        <div class="f-left">
                            <p class="f-address">〒251-0055<br>神奈川県藤沢市南藤沢18-1　<br class="sp">グレイシャスＫ南藤沢 4F</p>
                            <ul class="f-list-btn">
                                <li class="web">
                                    <a href="https://plus.dentamap.jp/apl/netuser/?id=4863&fbclid=IwAR1FE8qflxq6Usr4kFVeeG5FmPSgd_XBIKeNIX8uw1XxT9SpM_RsjvRx0Og" target="_blank" rel="noopener">初診専用ネット予約</a>
                                </li>
                                <li class="tel">
                                    <a href="tel:0466295007" class="sweetlink"><span>Tel</span>0466-29-5007</a>
                                </li>
                            </ul>
                            <p class="f-calendar sp">
                                <img src="../../images/f-calendar.png" width="480" height="162" alt="診療時間" loading="lazy">
                            </p>
                            <div class="f-map">
                                <img src="../../images/idx-img-map.png" width="480" height="273" alt="map" loading="lazy">
                            </div>
                        </div>
                        <div class="f-right">
                            <p class="f-calendar pc">
                                <img src="../../images/f-calendar.png" width="480" height="162" alt="診療時間" loading="lazy">
                            </p>
                            <p class="f-youtube">
                                <iframe width="486" height="274" src="https://www.youtube.com/embed/ALGsqO0fHcs?si=zE3JulJ9UjxoMJt3" title="YouTube" frameborder="0 " allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture;
                                            web-share " allowfullscreen></iframe>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="f-box02">
                <div class="inner ">
                    <div class="idx-fx-ttl">
                        <p class="idx-h3">連携医院</p>
                        <p class="idx-sub-h3">ALIGNMENT</p>
                    </div>
                    <ul class="f-list-bnr">
                        <li>
                            <a href="https://teeth-alignment.jp/" target="_blank" rel="noopener">
                                <img src="../../images/f-img-bnr01.jpg " width="260" height="80" alt="矯正歯科" loading="lazy">
                                <span class="ttl ">矯正歯科<img src="../../images/f-ico-bnr.png" width="13" height="11"
                                                alt="矯正歯科 " loading="lazy "></span>
                            </a>
                        </li>
                        <li>
                            <a href="http://brace.tokyo/" target="_blank" rel="noopener">
                                <img src="../../images/f-img-bnr02.jpg" width="260" height="80" alt="矯正歯科" loading="lazy">
                                <span class="ttl">矯正歯科<img src="../../images/f-ico-bnr.png" width="13" height="11"
                                                alt="矯正歯科" loading="lazy"></span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.hosp.keio.ac.jp/annai/shinryo/otorhino/" target="_blank" rel="noopener">
                                <img src="../../images/f-img-bnr03.jpg" width="260" height="80" alt="耳鼻咽喉科" loading="lazy">
                                <span class="ttl">耳鼻咽喉科<img src="../../images/f-ico-bnr.png" width="13" height="11"
                                                alt="耳鼻咽喉科" loading="lazy"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="f-box03">
                <div class="inner">
                    <div class="f-fx-box03">
                        <ul class="f-menu">
                            <li>
                                <a href="https://www.tamaki-dent.com/" class="ttl">TOP</a>
                            </li>
                            <li>
                                <a href="../../blog/news/">お知らせ</a>
                            </li>
                            <li>
                                <a href="../../blog/">症例紹介</a>
                            </li>
                        </ul>
                        <ul class="f-menu">
                            <li>
                                <p class="ttl">医院情報</p>
                            </li>
                            <li>
                                <a href="../../director.html">院長紹介</a>
                            </li>
                            <li>
                                <a href="../../doctor.html">副院長紹介</a>
                            </li>
                            <li>
                                <a href="../../doctors.html">ドクター紹介</a>
                            </li>
                            <li>
                                <a href="../../facility.html">専門医研修施設について</a>
                            </li>
                            <li>
                                <a href="../../clinic.html">医院情報・アクセス</a>
                            </li>
                            <li>
                                <a href="../../concept.html">コンセプト・特長</a>
                            </li>
                        </ul>
                        <ul class="f-menu">
                            <li>
                                <p class="ttl">診療メニュー</p>
                            </li>
                            <div class="f-fx-menu">
                                <ul class="f-menu">
                                    <li>
                                        <a href="../../treatment/">診療一覧</a>
                                    </li>
                                    <li>
                                        <a href="../../treatment/perio.html">歯周病治療</a>
                                    </li>
                                    <li>
                                        <a href="../../treatment/regeneration.html">歯周形成外科</a>
                                    </li>
                                    <li>
                                        <a href="../../treatment/endo.html">根管治療</a>
                                    </li>
                                </ul>
                                <ul class="f-menu">
                                    <li>
                                        <a href="../../treatment/prevent.html">予防処置</a>
                                    </li>
                                    <li>
                                        <a href="../../treatment/aesthetic.html">セラミック治療</a>
                                    </li>
                                    <li>
                                        <a href="../../treatment/implant.html">インプラント治療</a>
                                    </li>
                                    <li>
                                        <a href="../../treatment/prosthetics.html">精密義歯（入れ歯）</a>
                                    </li>
                                    <li>
                                        <a href="../../treatment/oralcancer.html">口腔がん</a>
                                    </li>
                                    <li>
                                        <a href="../../treatment/whitening.html">ホワイトニング</a>
                                    </li>
                                </ul>
                            </div>
                        </ul>
                    </div>
                    <p class="f-bnr">
                        <a href="https://www.shika-town.com/i00086789" target="_blank" rel="noopener">
                            <img src="../../images/f-bnr.jpg" width="185" height="65" alt="shika-town" loading="lazy">
                        </a>
                    </p>
                </div>
            </div>
            <address>藤沢の歯医者 玉木歯科 | All Rights Reserved.</address>
            <div class="idx-sliderfix">
                <ul class="idx-list-sliderfix">
                    <li class="tel pc">
                        <span class="ttl">TEL</span>
                        <div class="idx-box-tel">
                            <div class="cnt">
                                <p class="tel"><span>Tel</span>0466-29-5007</p>
                                <p class="ttl-tel">受付時間</p>
                                <p class="tel-time">10：00-13：00<br>14：00-18：30<br>（土曜　17：00まで）</p>
                                <p class="ttl-tel">休診日</p>
                                <p class="tel-txt">木曜、日曜、祝日</p>
                                <a href="tel:0466295007" class="link-in sweetlink"></a>
                            </div>
                        </div>
                    </li>
                    <li class="tel sp">
                        <a href="tel:0466295007" class="sweetlink"><span>Tel</span>0466-29-5007</a>
                    </li>
                    <li class="web">
                        <a href="https://plus.dentamap.jp/apl/netuser/?id=4863&fbclid=IwAR1FE8qflxq6Usr4kFVeeG5FmPSgd_XBIKeNIX8uw1XxT9SpM_RsjvRx0Og" target="_blank" rel="noopener">初診専用ネット予約</a>
                    </li>
                </ul>
            </div>
            <div class="to-top">
                <a href="#wrapper"></a>
            </div>
        </footer>
</div>
<script src="../../js/jquery.js"></script>
<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.18.3/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.18.3/dist/js/uikit-icons.min.js"></script>
<script src="../../js/sweetlink.js"></script>
<script src="../../js/common.js"></script>
</body>
</html>