<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>

<div class="container">
      <div class="container-item item-img">
		   <!-- wp:gallery {"linkTo":"none"} -->
 			<figure class="wp-block-gallery has-nested-images columns-default is-cropped"><!-- wp:image {"id":7,"sizeSlug":"large","linkDestination":"none"} -->
 			<figure class="wp-block-image size-large"><img src="http://testcom.local/wp-content/uploads/2022/04/japan-image.png" alt="" class="wp-image-7"/></figure>
 			<!-- /wp:image --></figure>
			 <!-- /wp:gallery -->
      </div>
      <div class="container-item item-div">
        <select id="pre-select">
          <option hidden>地域を選択してください</option>
          <option value="0">北海道</option>
          <option value="1">東北地方</option>
          <option value="2">中部地方</option>
          <option value="3">関東地方</option>
          <option value="4">近畿地方</option>
          <option value="5">中国地方</option>
          <option value="6">四国地方</option>
          <option value="7">九州地方</option>
        </select>

        <div id="container-card">
          <div class="pre-card">東京都</div>
          <div class="pre-card">千葉県</div>
          <div class="pre-card">埼玉県</div>
          <div class="pre-card">神奈川県</div>
          <div class="pre-card">茨城県</div>
          <div class="pre-card">栃木県</div>
          <div class="pre-card">群馬県</div>
        </div>
      </div>
    </div>

    <script>
      const cardList = document.getElementById("container-card");
      const select = document.getElementById("pre-select");
      const prefectures = [
        ["北海道"],
        ["青森県", "秋田県", "岩手県", "山形県", "宮城県", "福島県"],
        [
          "新潟県",
          "富山県",
          "石川県",
          "福井県",
          "長野県",
          "岐阜県",
          "山梨県",
          "愛知県",
          "静岡県",
        ],
        [
          "群馬県",
          "栃木県",
          "茨城県",
          "埼玉県",
          "東京都",
          "千葉県",
          "神奈川県",
        ],
        [
          "三重県",
          "京都県",
          "滋賀県",
          "大阪府",
          "兵庫県",
          "奈良県",
          "和歌山県",
        ],
        ["鳥取県", "島根県", "岡山県", "広島県", "山口県"],
        ["徳島県", "香川県", "愛媛県", "高知県"],
        [
          "福岡県",
          "佐賀県",
          "長崎県",
          "熊本県",
          "大分県",
          "宮崎県",
          "鹿児島県",
          "沖縄県",
        ],
      ];

      select.addEventListener("change", (event) => {
        cardList.textContent = "";
        const result = prefectures[event.target.value];
        for (let i = 0; i < result.length; i++) {
          let card = document.createElement("div");
          card.className = "pre-card";
          card.textContent = result[i];
          cardList.append(card);
        }
      });
    </script>

