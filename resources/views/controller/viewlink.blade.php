
      
      
      @extends('layouts.generator')
 
@section('title', 'view short link url')
 
@section('content')


      <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
        <h1>Short URL</h1>
        <h2>Here’s your shortened </h2>
        <h2>{{$shortlink}}</h2>
        <div class="row g-3">
            <div class="col-7">
                <a class="btncopy btn mb-3" data-clipboard-text="{{$shortlink}}"> copy link</a>
            </div>
            <div class="col-5">
                <a href="/" class="btn" >back</a> 
            </div>
        </div>
        
       
        


      </section>

          <script>
      var btns = document.querySelectorAll('.btncopy');
      var clipboard = new ClipboardJS(btns);

      clipboard.on('success', function (e) {
        console.info('Action:', e.action);
        console.info('Text:', e.text);
        console.info('Trigger:', e.trigger);
      });

      clipboard.on('error', function (e) {
        console.info('Action:', e.action);
        console.info('Text:', e.text);
        console.info('Trigger:', e.trigger);
      });
    </script>


@endsection
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      



