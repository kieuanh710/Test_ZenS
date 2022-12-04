<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/grid.css">
    <title>Jokee Single Serving Website</title>
</head>
<body>
    <div class="main">
        <header class="header">
            <div class="header__content">
                <div class="grid wide">
                    <div class="row">
                        <div class="header__logo">
                            <img src="https://images.unsplash.com/photo-1601158935942-52255782d322?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fGxvZ298ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="">
                        </div>
                        <div class="header__image">
                            <div class="header__image--info">
                                <h3 class="header__image--title">Handicated by</h3>
                                <h4 class="header__image--author">Jin HLS</h4>
                            </div>
                            <img src="https://images.unsplash.com/photo-1601158935942-52255782d322?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fGxvZ298ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="">
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
            <div class="container__content">
                <div class="carousel-container" style="width: 1260px;">
                    <div class="inner-carousel">
                        <div class="track">
                            @foreach($listJoke as $key => $item)
                            <div class="card-container event">
                                <div class="card">
                                    <div class="event_item">
                                        
                                        <div class="event_item--content">
                                            <span>{{$item->content}}</span>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="nav">
                        <button class="prev round"><i class="icon fas fa-solid fa-caret-left"></i></button>
                        <button class="next round"><i class="icon fas fa-solid fa-caret-right"></i></button>
                    </div>
                </div>
                {{-- <div class="grid wide">
                    <div class="row">

                        <span class="container__heading">A child asked his father, "How were people born?" So his father said, "Adam and Eve made babies, then their babies became adults and made babies, and so on."

                            The child then went to his mother, asked her the same question and she told him, "We were monkeys then we evolved to become like we are now."
                            
                            The child ran back to his father and said, "You lied to me!" His father replied, "No, your mom was talking about her side of the family."
                            
                            </span>
                        <div class="line"></div>
                    </div>
                    <div class="container__button">
                        <button class="btn container__button--funny next round">This is Funny</button>
                        <button class="btn container__button--notfunny prev round">This is not Funny</button>
                    </div>
                </div> --}}
            </div>
        </div>
        <footer>

        </footer>
    </div>
    <script src="../assets/js/slideshow.js"></script>
</body>
</html>