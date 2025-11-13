
      
      
      @extends('layouts.generator')
 
@section('title', 'create short link url')
 
@section('content')


      <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
        <h1>Short URL</h1>
        <h2>Paste the URL to be shortened</h2>
        
           <form  class="row row-cols-lg-auto g-3 align-items-center" action="{{route('index.generators')}}" method="get">
                @csrf
                <div class="col-12">

                    <div class="row g-3">
                        <div class="col-12">
                            <input type="text" name="link" class="form-control @error('link') is-invalid @enderror" value="{{  old('link') }}" placeholder="enter url link here">
                            @error('link')
                                <span class=" invalid-feedback mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <input type="text" name="parameter" class="form-control @error('parameter') is-invalid @enderror" value="{{  old('parameter') }}" placeholder="no space for parameter">
                            @error('parameter')
                                <span class=" invalid-feedback mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-5">
                            <button class="btn" type="submit">Short URL</button>
                        </div>
                    </div>
                </div>

                
            </form>

      </section>


@endsection
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      



