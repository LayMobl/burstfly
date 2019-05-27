
<div class="image-morefrom">

  @foreach ($works as $work)



  <a href="#"><div class="image-morefrom-{{$loop->index+1}}"><img src="{{asset('img/psd-1.jpg')}}" alt="" width="430" height="330"/></div></a>

      @endforeach
</div>
