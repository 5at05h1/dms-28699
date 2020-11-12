@extends('layouts.app')

@section('header')
<title>{{ $item->name }} - DMS online</title>
<link rel="stylesheet" href="css/detail.css">
<link rel="stylesheet" href="css/detail_sp.css">
@endsection

@section('content')
<nav class="breadCrumb">
  <ul class="section">
    <li><a href="#">TOP</a></li>
    <li><span>商品詳細</span></li>
  </ul>
</nav>




<div class="twoCol section">
<div class="twoColLeft">
  <!-- Mod: 画像切り替えモジュール -->
  <section class="itemImageModule">
    <div class="imageShow" id="imageShow">
      <div class="image">
        <img src="images/item/1.jpg" alt="">
      </div>
      <div class="favorite">
        <a href="#" class="favorite_btn"><i class="fa fa-heart"></i></a>
      </div>
    </div>
    <div class="imageSelect" id="imageSelect">
      <ul>
        <li><img src="images/item/1_2.jpg" alt=""></li>
        <li><img src="images/item/1_3.jpg" alt=""></li>
        <li><img src="images/item/1_4.jpg" alt=""></li>
      </ul>      
    </div>
  </section>
</div>
<div class="twoColRight">


  <!-- Mod: 説明モジュール -->
  <section class="itemInfoModule">
    <h1 class="name">{{ $item->name }}</h1>
    <div class="price">税込<span>390</span>円</div>
    <ul class="tabNav" id="tabNav">
        <li class="select"><a href="#container_1">詳細文</a></li>
        <li><a href="#container_2">オススメの声</a></li>
    </ul>
    <div class="tabContainer" id="tabContainer">
      <div class="description textBlock container container_1 show">
        <p>ふわっとしたニットをひとつずつ丁寧にハンドメイドで作りました。冬でも夏でもストレスなく着用できます。サイズはS・M・Lの3サイズ展開</p>
        <p>素材：100%コットン　ハンドメイド</p>
      </div>
      <div class="recommend textBlock container container_2">
        <p>あけみママ：30代主婦<br>
        冷え性のため、肌に合う靴下を探していたところ、ぴったりでした！この靴下と出会って以来、肌がカサカサすることもなくなりました。</p>
        <p>ゆっち：10代学生主<br>
        学校にも履いていけるデザインでとても重宝しています。足首のしめつけも優しく、痕が残らないのもとても良かったです。</p>
      </div>
    </div>
  </section>


  <!-- Mod: フォームモジュール -->
  <section class="formModule">
    <form action="#" class="form">
      <div class="sizeSelect">
        <ul>
          <li class="select"><a href="#">S</a></li>
          <li class="empty"><a href="#">M</a></li>
          <li><a href="#">L</a></li>
        </ul>
      </div>
      <div class="alert hidden">ご指定のサイズは在庫切れです。サイズを選びなおしてください。</div>
      <div class="unitSelect">
        <span>数量</span>
        <label>
          <select name="unit" id="">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
        </label>
      </div>
      <div class="buttons">
        <a href="#" class="button black" id="addCartButton">カートに入れる</a>
      </div>
    </form>
  </section>


  <!-- Mod: 注意事項モジュール -->
  <section class="noticeModule textBlock">
    <p>配送料：700円</p>
    <p class="red">総額10,000円（税込）から<strong>送料無料</strong></p>
    <p class="red">ネットストア限定：5,000円以上お買い上げでポイント2倍</p>
  </section>


</div>


</div>
@endsection