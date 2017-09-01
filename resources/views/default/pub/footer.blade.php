<footer class="box-footer text-center">
  <div class="container">
    <p>如果您有好的意见或建议，请联系我们。</p>
    <ul class="list-inline">
      <li><a href="#">关于我们</a></li>
      <li class="muted">&middot;</li>
      <li><a href="#">投诉建议</a></li>
      <li class="muted">&middot;</li>
      <li><a href="#">网站公告</a></li>
    </ul>
  </div>
</footer>
@if(Route::currentRouteName()!='login')
@include('default.pub.modals',['modalsname'=>'loginbox','modalstitle'=>'','modalsbody'=>'login','modalfoot'=>''])
@endif