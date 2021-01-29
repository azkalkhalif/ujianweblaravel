<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- logo icon -->
    <link rel="icon"
        href="https://2020elections.amnestyusa.org/wp-content/uploads/2020/05/cropped-logo_hor_flag-32x32.png"
        sizes="32x32" />
    <link rel="icon"
        href="https://2020elections.amnestyusa.org/wp-content/uploads/2020/05/cropped-logo_hor_flag-192x192.png"
        sizes="192x192" />
    <link rel="apple-touch-icon"
        href="https://2020elections.amnestyusa.org/wp-content/uploads/2020/05/cropped-logo_hor_flag-180x180.png" />
    <meta name="msapplication-TileImage"
        content="https://2020elections.amnestyusa.org/wp-content/uploads/2020/05/cropped-logo_hor_flag-270x270.png" />

    <link rel="stylesheet" href="css/style.css">
    <link rel='stylesheet' id='google-fonts-1-css'
        href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;ver=5.5.3'
        type='text/css' media='all' />
    <script src="https://kit.fontawesome.com/1e09bce9fd.js" crossorigin="anonymous"></script>

    <title>Amnestyusa</title>
</head>

<body>
    <header>
        <div class="jumbotron pt-0">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a style="background-color: yellow;" href="">
                        <div class="color">
                            <p class=""></p>
                            <p class="" style="margin-top: -10px;"></p>
                            <p class="" style="margin-top: -10px;"></p>
                        </div>
                    </a>

                    <form class="form-inline ml-auto my-2 my-lg-0">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                        <i class="fas fa-search " style="background-color: yellow;"></i>
                    </form>
                </nav>
            </div>

        </div>
    </header>

    <main>
        <section class="dua">
            <div class="container bawah p-5">
                <h1>Protecting Human Rights</h1>
                <h2 class="mb-4">Policy Recommendations for the White House and Presidential Campaigns</h2>
                <span></span>
            </div>
            <div class="container">
                <div class="row mt-4">
                    <div class="col col-12 col-md-4 mb-4">
                        <div class="d-flex mb-4">
                            <img class="mr-3" style="width: 13%;" src="img/covid.webp" alt="">
                            <h5 class="my-auto p-2" style="background-color: yellow;"><b> COVID - 19 </b></h5>
                        </div>
                        @foreach ($covid as $item)
                        <div class="dropdown my-2">
                            <button class="btn btn-outline-dark w-100 dropdown-toggle" type="button"
                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                {{$item->title}}
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <a href="">
                            <div class="overlay">Viewl All Issues</div>

                            <img class="w-100" style="height: 250px" src="{{Storage::url($item->image)}}" alt="">
                        </a>
                        @endforeach

                    </div>
                    <div class="col col-12 col-md-4 mb-4">
                        <div class="d-flex mb-4">
                            <img class="mr-3" style="width: 13%;" src="img/mission-300x300.webp" alt="">
                            <h5 class="my-auto p-2" style="background-color: yellow;"><b> THEMES </b></h5>
                        </div>
                        @foreach ($tema as $item)
                        <div class="dropdown my-2">
                            <button class="btn btn-outline-dark w-100 dropdown-toggle" type="button"
                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                {{$item->title}}
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <a href="">
                            <div class="overlay">Viewl All Issues</div>
                            <img class="w-100" style="height: 250px" src="{{Storage::url($item->image)}}" alt="">
                        </a>
                        @endforeach

                    </div>
                    <div class="col col-12 col-md-4 mb-4">
                        <div class="d-flex mb-4" style="opacity: 0;">
                            <img class="mr-3" style="width: 13%;" src="img/covid.webp" alt="">
                            <h5 class="my-auto p-2" style="background-color: yellow;"><b> COVID - 19 </b></h5>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col col-12 col-md-4 mb-4">
                        <div class="d-flex mb-4">
                            <img class="mr-3" style="width: 13%;" src="img/pin-300x300.webp" alt="">
                            <h5 class="my-auto p-2" style="background-color: yellow;"><b> REGIONS </b></h5>
                        </div>
                        <div class="dropdown mb-2">
                            <button class="btn btn-outline-dark w-100 dropdown-toggle" type="button"
                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                AFRIKA
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <a href="">
                            <div class="overlay">Viewl All Issues</div>
                            <img class="w-100" style="height: 250px"
                                src="img/Africa-Regional-Issue-Briefs-1-1024x683.webp" alt="">
                        </a>
                    </div>
                    <div class="col col-12 col-md-4 mb-4">
                        <div class="d-flex mb-4 hover" style="opacity: 0;">
                            <img class="mr-3" style="width: 13%;" src="img/mission-300x300.webp" alt="">
                            <h5 class="my-auto p-2" style="background-color: yellow;"><b> THEMES </b></h5>
                        </div>
                        <div class="dropdown mb-2">
                            <button class="btn btn-outline-dark w-100 dropdown-toggle" type="button"
                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                AMERICAS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <a href="">
                            <div class="overlay">Viewl All Issues</div>
                            <img class="w-100" style="height: 250px" src="img/Americas-768x576.jpg" alt="">
                        </a>
                    </div>
                    <div class="col col-12 col-md-4 mb-4">
                        <div class="d-flex mb-4 hover" style="opacity: 0;">
                            <img class="mr-3" style="width: 13%;" src="img/covid.webp" alt="">
                            <h5 class="my-auto p-2" style="background-color: yellow;"><b> COVID - 19 </b></h5>
                        </div>
                        <div class="dropdown mb-2">
                            <button class="btn btn-outline-dark w-100 dropdown-toggle" type="button"
                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                ASIA
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <a href="">
                            <div class="overlay">Viewl All Issues</div>
                            <img class="w-100" style="height: 250px" src="img/Asia-Issue-Briefs-768x512.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-12 col-md-6 mb-4">
                        <div class="dropdown mb-2">
                            <button class="btn btn-outline-dark w-100 dropdown-toggle" type="button"
                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                EUROPE AND CENTRAL ASIA
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <a href="">
                            <div class="overlay">Viewl All Issues</div>
                            <img class="w-100" style="height: 250px" src="img/GettyImages-1190918506-768x511.jpg"
                                alt="">
                        </a>
                    </div>
                    <div class="col col-12 col-md-6 mb-4">
                        <div class="dropdown mb-2">
                            <button class="btn btn-outline-dark w-100 dropdown-toggle" type="button"
                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                MIDDLE EAST AND NORTH AFRICA
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <a href="">
                            <div class="overlay">Viewl All Issues</div>
                            <img class="w-100" style=" height: 250px" src="img/Lebanon-1024x576.jpg" alt="">
                        </a>
                    </div>
                </div>
        </section>
    </main>

    <footer class="p-5" style="background-color: black;">
        <div class="container d-flex">
            <div class="kiri d-flex">
                <a class="mr-3" href="facebook.com">
                    <i class="text-white fa-2x fab fa-facebook-square"></i>
                </a>
                <a class="mr-3" href="instagram.com">
                    <i class="text-white fa-2x fab fa-instagram-square"></i>
                </a>
                <a class="mr-3" href="linkedin.com">
                    <i class="text-white fa-2x fab fa-linkedin"></i>
                </a>
                <a class="mr-3" href="twitter.com">
                    <i class="text-white fa-2x fab fa-twitter-square"></i>
                </a>
            </div>
            <div class="kanan my-auto ml-auto">
                <p class="text-white my-auto">© 2021 Amnesty International USA</p>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>
