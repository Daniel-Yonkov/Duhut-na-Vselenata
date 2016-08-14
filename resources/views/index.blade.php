@extends('welcome')
@section('content')
	<div id="slide">
        <ul>
            <li><img src="slide/picture-1.jpg" width="604" height="453"/></li>
            <li><img src="slide/picture-2.jpg" width="604" height="453"/></li>
            <li><img src="slide/picture-3.jpg" width="604" height="453"/></li>
            <li><img src="slide/picture-4.jpg" width="604" height="453"/></li>
            <li><img src="slide/picture-5.jpg" width="604" height="453"/></li>
            <li><img src="slide/picture-6.jpg" width="604" height="453"/>
            </li>
            <li><img src="slide/picture-7.jpg" width="604" height="453"/></li>
            <li><img src="slide/picture-8.jpg" width="604" height="453"/></li>
            <li><img src="slide/picture-9.jpg" width="604" height="453"/></li>
            </ul>
        <span class="button prevButton" data-transition="slide"></span>
        <span class="button nextButton" data-transition="slide"></span>
    </div>
@stop
@section('footer')
  <script>
            $(window).load(function(){
                var pages = $('#slide li'), current=0;
                var currentPage,nextPage;

                $('#slide .button').click(function(){
                    currentPage= pages.eq(current);
                    if($(this).hasClass('prevButton'))
                    {

                        if (current <= 0)
                            current=pages.length-1;
                        else
                            current=current-1;
                    }
                    else
                    {
                        if (current >= pages.length-1)
                            current=0;
                        else
                            current=current+1;
                    }
                    nextPage = pages.eq(current);
                    //currentPage.hide();
                    currentPage.fadeOut('slow');
                    //nextPage.show();
                    nextPage.fadeIn('slow');
                });
            });
</script>
@stop