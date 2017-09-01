<div id="{{$modalsname}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="{{$modalsname}}Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        @if(!empty($modalstitle))
        <h3 id="{{$modalsname}}Label">{{$modalstitle}}</h3>
        @endif
      </div>
      <div class="modal-body">
      @if($modalsbody=='login')
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          @include('default.pub.loginbox')
        </div>
      </div>
      @else
      {{$modalsbody}}
      @endif
      </div>
      @if(!empty($modalfoot))
      <div class="modal-footer">{{$modalfoot}}</div>
      @endif
    </div>
  </div>
</div>