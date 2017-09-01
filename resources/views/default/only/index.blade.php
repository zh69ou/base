@extends('default/pub/base')

@section('title')
首页
@endsection

@section('ascss')
<!-- @parent -->
<link rel="stylesheet" href="assets/css/default/index.css">
@endsection

@section('content')
<div class="textbanner text-center">
  <div class="container">
    <span class="logo">A6VI</span>
    <p>这是一个竞争激烈，飞速淘汰的时代。如果你没有竞争优势，那你注定被这场激流淹没。</p>
    <p>
      <button data-target="#loginbox" type="button" data-toggle="modal" class="btn btn-primary btn-large">加入我们</button>
    </p>
    <ul class="list-inline">
      <li>
        洞&nbsp;察
      </li>
      <li></li>
      <li>
        分&nbsp;析
      </li>
      <li></li>
      <li>
        策&nbsp;略
      </li>
      <li></li>
      <li>
        实&nbsp;践
      </li>
    </ul>
  </div>
</div>
<div class="container">
  <ul class="list-inline text-center">
    <li class="follow-btn">
    <a href="#" class="twitter-follow-button"><i class="fa fa-at"></i>&nbsp;订阅</a>
    </li>
    <li class="tweet-btn">
      <a href="#" class="twitter-share-button"><i class="fa fa-weixin"></i>&nbsp;微信</a>
    </li>
    <li class="tweet-btn">
      <a href="#" class="twitter-share-button"><i class="fa fa-weibo"></i>&nbsp;微博</a>
    </li>
  </ul>
</div>
<div class="container">
  <div class="marketing">
    <h1>实用功能</h1>
    <p class="marketing-byline">好的工具才能有高的效率，实用的工具才能创造出理想的效果。</p>
    <div class="row">
      <div class="col-sm-12 col-md-4">
        <div class="thumbnail">
          <img class="marketing-img" src="/img/bs-docs-twitter-github.png">
          <div class="caption">
            <h3>人员管理</h3>
            <p>铁打的银盘，流水的兵。如何让你的兵各显神通？</p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4">
        <div class="thumbnail">
          <img class="marketing-img" src="/img/bs-docs-responsive-illustrations.png">
          <div class="caption">
            <h3>客户管理</h3>
            <p>你以前的客户还有几个？是否已经被遗忘了某一个角落？</p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4">
        <div class="thumbnail">
          <img class="marketing-img" src="/img/bs-docs-bootstrap-features.png">
          <div class="caption">
            <h3>无纸办公</h3>
            <p>网络化的时代，需要的是效率。跟上时代的步伐才不至于被时代淘汰。</p>
          </div>
        </div>
      </div>
    </div>
    <hr class="soften">
    <h1>合作伙伴</h1>
    <p class="marketing-byline">在这个激流勇进，逆水行舟的时代。你还想着自己一个人打天下？你还觉得耍一点小聪明就能取得意想不到的收获？</p>
    <div class="row">
      <div class="col-xs-6 col-md-3">
        <a class="thumbnail" href="#" target="_blank">
          <img src="/img/soundready.png" alt="SoundReady.fm">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a class="thumbnail" href="#" target="_blank">
          <img src="/img/kippt.png" alt="">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
       <a class="thumbnail" href="#" target="_blank">
          <img src="/img/gathercontent.png" alt="">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
       <a class="thumbnail" href="#" target="_blank">
          <img src="/img/jshint.png" alt="">
        </a>
      </div>
    </div>
  </div>
</div>
@endsection
@section('asjs')
<script type="text/javascript" src="assets/js/index.js" ></script>
@endsection