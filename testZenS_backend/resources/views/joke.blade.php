<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/grid.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,500;1,600;1,700;1,800&family=Open+Sans:wght@400;500&family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <title>Jokee Single Serving Website</title>
</head>

<body>
    <div class="main">
        <header class="header">
            <div class="header__content">
                <div class="grid wide">
                    <div class="row">
                        <div class="header__logo">
                            <img src="https://images.unsplash.com/photo-1601158935942-52255782d322?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fGxvZ298ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
                                alt="">
                        </div>
                        <div class="header__image">
                            <div class="header__image--info">
                                <h3 class="header__image--title">Handicated by</h3>
                                <h4 class="header__image--author">Jin HLS</h4>
                            </div>
                            <img src="https://images.unsplash.com/photo-1601158935942-52255782d322?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fGxvZ298ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
                                alt="">
                        </div>

                    </div>
                </div>
            </div>
        </header>
        <nav class="nav__container">
            <div class="nav__container--content">
                <h2 class="nav__content">A joke a day keeps the doctor away</h2>
                <h3 class="nav__subcontent">if you joke wrong way, your teeth have to pay (serious)</h3>
            </div>
        </nav>
        <div class="container">
            <?php 
                $counts= count($listJoke);
                // echo $counts;
            ?>
            @foreach($listJoke as $key => $item)
            <div class="mySlides fade ">
                <div class="card-container joke">
                    <div class="card ">
                        <div class="event_item">
                            <div class="grid wide">
                                @if($key == $counts-1 )
                                    <div style="   
                                    display: flex;
                                    justify-content: center;
                                    align-items: center;" class="event_item--content ">
                                        <span style="font-size: 30px; " class="container__heading">{{$item->content}} </span>
                                    </div>
                                @else
                                    <div class="event_item--content ">
                                        <span class="container__heading">{{$item->content}} </span>
                                    </div>
                                    <div class="line"></div>
                                    <div class="container__button">
                                        <button id="funny" value="funny" data-url="{{route('funny', ['id'=>$item->id])}}" onclick="plusSlides(1)"class="btn container__button--funny next round funny">
                                            This is Funny!
                                        </button>
                                        <button id="notfun" value="notfun" data-url="{{route('notfun', ['id'=>$item->id])}}" onclick="plusSlides(1)"class="btn container__button--funny next round notfun">
                                            This is not funny.
                                        </button>
                                    </div>
                                
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            @endforeach
            {{-- <a href="{{route('detail')}}" class="">check</a> --}}
        </div>
        <footer class="footer">
            <div class="grid wide">
                <div class="row">
                    <div class="footer__content">
                        <span class="footer__content--text">This website is created as part of Hlsolution program. 
                            The material contained on this website are provided for general.
                            Information only and do not consititute any form advice. 
                            HLS assumes no responsibility for the accucacy of any particular statement and accepts no liability for any loss or damage which may arise from rellance on the information contained on this site</span>
                        <h4 class="footer__content--copyright">Copyright 2021 HLS</h4>
                    </div>
                </div>
            </div>

    
        </footer>
    </div>
    {{-- js  --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="../assets/js/slideshow.js"></script>
    <script type="text/javascript">
        //funny
        function funny(e) {
            e.preventDefault()
            let url = $(this).data('url');
            var funny = $('#funny').val();
            // alert(url);
           
            $.ajax({
                method: 'get',
                url: url,
                dataType: 'json',
                success:function(data){
                    $.each(data, function(index, value){
                        
                    })
                },
            });
           
        }
        // not fun
        function notFun(e) {
            e.preventDefault()
            let url = $(this).data('url');
            var notfun = $('#notfun').val();
            // alert(url);
           
            $.ajax({
                method: 'get',
                url: url,
                dataType: 'json',
                success:function(data){
                },
            });
           
        }
        $(function (){
            $('.funny').on('click', funny);
            $('.notfun').on('click', notFun);
        })      
    </script>
</body>

</html>