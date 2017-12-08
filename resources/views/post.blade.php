@extends('layouts.master')

@section('title','home')

@section('headerContent')
    
    <h4>Ini Postingan</h4>

@endsection

@section('content')
    <div class="container">
        <div class="container">
            <div class="post">
                <h5 class="post-title"><a href="#" class="black-text">Sebuah Quotes</a></h5>
                <div class="post-pict">
                    <img class="responsive-img" src="{{url('meme/1.jpg')}}">
                </div>
                <div class="post-menu">
                    <div class="row">
                        <div class="col l4 s12">
                            <a class="btn-floating btn-small waves-effect waves-light blue "><i class="material-icons left">directions_bike</i></a>
                            <b class="right hide-on-large-only">Cacadosman</b>
                        </div>
                        <div class="col l8 s12">
                            <p class="grey-text right hide-on-med-and-down"><b>Cacadosman</b> - 96 Tersepeda.</p>
                            <p class="grey-text left hide-on-large-only">96 Tersepeda, 1001 Komentar.</p>
                        </div><hr>
                        <div class="col s12">
                            <div id="disqus_thread"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        /**
        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
        /*
        var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        */
        (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://meme-oti.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
@endsection