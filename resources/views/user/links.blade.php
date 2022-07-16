<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ $user->name }}</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Overpass+Mono&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;600&display=swap" rel="stylesheet">

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@800&display=swap" rel="stylesheet">

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;600&display=swap" rel="stylesheet">

		<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">

        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js" integrity="sha256-6XMVI0zB8cRzfZjqKcD01PBsAy3FlDASrlC8SxCpInY=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>

        <link href="https://cdn.jsdelivr.net/npm/tom-select@2.0.3/dist/css/tom-select.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/tom-select@2.0.3/dist/js/tom-select.complete.min.js"></script>

        <style type="text/css">
        	body{
			    background: #f1f2f2;
			    background-repeat: no-repeat;
    			background-attachment: fixed;
			}
			span{
			    font-size:15px;
			}
			a{
			  text-decoration:none;
			  color: #0062cc;
			  /* border-bottom:2px solid #0062cc; */
			}
			.box{
			    padding:60px 0px;
			}

			.box-part{
			    background:#fcfcf9;
			    border-radius:25;
			    padding:20px 10px;
			    margin:30px 0px;
			    -webkit-box-shadow: 1px 1px 4px 0px rgba(0, 0, 0, 0.12);
				-moz-box-shadow: 1px 1px 4px 0px rgba(0, 0, 0, 0.12);
				box-shadow: 1px 1px 4px 0px rgba(0, 0, 0, 0.12);
			}
			.box-part2{
			    background:#fcfcf9;
			    border-radius:25;
			    margin:8px 0px 0px 0px;
			    -webkit-box-shadow: 1px 1px 4px 0px rgba(0, 0, 0, 0.12);
				-moz-box-shadow: 1px 1px 4px 0px rgba(0, 0, 0, 0.12);
				box-shadow: 1px 1px 4px 0px rgba(0, 0, 0, 0.12);
			}
			.text{
			    margin:20px 0px;
			}

			.fa{
			     color:#4183D7;
			}
			.rounded-circle{
				width:80px;
				height:80px;
			}
			.img {
			    width: 25px;
			    height: 25px;
			    border-radius: 50%;
			    margin-right: 0;
			    background-position: center center;
			    -wekit-background-size: cover;
			    background-size: cover;
			    background-repeat: no-repeat;
			}
            .imgg {
			    width: 25px;
			    height: 25px;
			    /* border-radius: 50%; */
			    margin-right: 0;
			    background-position: center center;
			    -wekit-background-size: cover;
			    background-size: cover;
			    background-repeat: no-repeat;
			}
            @font-face {
                font-family: Oi; /* Имя шрифта */
                src: url({{asset('public/fonts/Oi-Regular.ttf')}}); /* Путь к файлу со шрифтом */
            }
            @font-face {
                font-family: Rampart One; /* Имя шрифта */
                src: url({{asset('public/fonts/RampartOne-Regular.ttf')}}); /* Путь к файлу со шрифтом */
            }
            @font-face {
                font-family: Yomogi; /* Имя шрифта */
                src: url({{asset('public/fonts/Yomogi-Regular.ttf')}}); /* Путь к файлу со шрифтом */
            }
            @font-face {
                font-family: Yuji Syuku; /* Имя шрифта */
                src: url({{asset('public/fonts/YujiSyuku-Regular.ttf')}}); /* Путь к файлу со шрифтом */
            }
            @font-face {
                font-family: Zen Kurenaido; /* Имя шрифта */
                src: url({{asset('public/fonts/ZenKurenaido-Regular.ttf')}}); /* Путь к файлу со шрифтом */
            }
            @font-face {
                font-family: Comforter; /* Имя шрифта */
                src: url({{asset('public/fonts/Comforter-Regular.ttf')}}); /* Путь к файлу со шрифтом */
            }
            @font-face {
                font-family: Murecho; /* Имя шрифта */
                src: url({{asset('public/fonts/Murecho-VariableFont_wght.ttf')}}); /* Путь к файлу со шрифтом */
            }
            @font-face {
                font-family: Train One; /* Имя шрифта */
                src: url({{asset('public/fonts/TrainOne-Regular.ttf')}}); /* Путь к файлу со шрифтом */
            }
            @font-face {
                font-family: Alumni Sans; /* Имя шрифта */
                src: url({{asset('public/fonts/AlumniSans-VariableFont_wght.ttf')}}); /* Путь к файлу со шрифтом */
            }
            @font-face {
                font-family: DotGothic16; /* Имя шрифта */
                src: url({{asset('public/fonts/DotGothic16-Regular.ttf')}}); /* Путь к файлу со шрифтом */
            }
            @font-face {
                font-family: Noto Sans Mono; /* Имя шрифта */
                src: url({{asset('public/fonts/NotoSansMono-VariableFont_wdth,wght.ttf')}}); /* Путь к файлу со шрифтом */
            }
            @font-face {
                font-family: Podkova; /* Имя шрифта */
                src: url({{asset('public/fonts/Podkova-VariableFont_wght.ttf')}}); /* Путь к файлу со шрифтом */
            }
            @font-face {
                font-family: Spectral SC; /* Имя шрифта */
                src: url({{asset('public/fonts/SpectralSC-ExtraLight.ttf')}}); /* Путь к файлу со шрифтом */
            }
            @font-face {
                font-family: JetBrains Mono; /* Имя шрифта */
                src: url({{asset('public/fonts/JetBrainsMono-VariableFont_wght.ttf')}}); /* Путь к файлу со шрифтом */
            }
            @font-face {
                font-family: Roboto; /* Имя шрифта */
                src: url({{asset('public/fonts/Roboto-Light.ttf')}}); /* Путь к файлу со шрифтом */
            }
            @font-face {
                font-family: Open Sans; /* Имя шрифта */
                src: url({{asset('public/fonts/OpenSans-VariableFont_wdth,wght.ttf')}}); /* Путь к файлу со шрифтом */
            }
            @font-face {
                font-family: Montserrat; /* Имя шрифта */
                src: url({{asset('public/fonts/Montserrat-VariableFont_wght.ttf')}}); /* Путь к файлу со шрифтом */
            }
            @font-face {
                font-family: Noto Sans; /* Имя шрифта */
                src: url({{asset('public/fonts/NotoSans-Light.ttf')}}); /* Путь к файлу со шрифтом */
            }
            @font-face {
                font-family: Russo One; /* Имя шрифта */
                src: url({{asset('public/fonts/RussoOne-Regular.ttf')}}); /* Путь к файлу со шрифтом */
            }
            @font-face {
                font-family: Poiret One; /* Имя шрифта */
                src: url({{asset('public/fonts/PoiretOne-Regular.ttf')}}); /* Путь к файлу со шрифтом */
            }
        </style>
    </head>
    <body class="antialiased">

        <div class="container-fluid justify-content-center text-center">
            @if ($errors->any())
                <div class="row">
                    <div class="col-12" style="padding: 0">
                        <div class="alert alert-warning alert-dismissible fade show" role="alert" style="margin: 0; background-color: red">
                            @foreach ($errors->all() as $error)
                                <div class="title">
                                    <span style="font-family: 'Rubik', sans-serif; font-size: 80%; line-height: 16px; display:block; color: white;">- {{$error}}</span>
                                </div>
                            @endforeach
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            @endif
            @if ($message = Session::get('error'))
                <div class="row">
                    <div class="col-12" style="padding: 0">
                        <div class="alert alert-warning alert-dismissible fade show" role="alert" style="margin: 0; background-color: red">
                            <div class="title">
                                <span style="font-family: 'Rubik', sans-serif; font-size: 80%; line-height: 16px; display:block; color: white;">- {{$message}}</span>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            @endif
        </div>

        <div class="container-fluid" style="padding: 0">
            <nav class="navbar navbar-expand-lg " style="background-color: #f1f2f2">
                <div class="container-fluid">
                    <a class="mb-1" href="{{ route('editProfileForm', ['id' => Auth::user()->id]) }}">
                        <img src="https://i.ibb.co/DM6hKmk/bbbbbbbbbbb.png" class="img-fluid" style="width:20px; border: 0">
                    </a>
                    <form class="" action="{{ route('searchLink', ['id' => Auth::user()->id]) }}">
                        <input class="form-control me-2" type="search" placeholder="Поиск ссылок" aria-label="Search" name="search" style="height: 30px">
                    </form>
                    <a class="" href="{{ route('userHomePage',  ['slug' => Auth::user()->slug]) }}" style="text-decoration: none; border: 0; padding: 0">
                        <div class="img" style="background-image: url({{$user->avatar}});"></div>
                    </a>
                </div>
            </nav>
        </div>

        <!-- Массовое изменение -->
        <div class="container-fluid justify-content-center text-center">
            <div class="row" style="margin-top: px" >
                <div class="col-12 mt-" data-bs-toggle="modal" data-bs-target="#exampleModalLink" style="padding-right: 0; padding-left: 0">
					<div class="box-part text-center shadow-sm " style="margin: 0; background-color: #feae72">
						<div class="title">
							<h4 class="mt-2" style="font-family: 'Rubik', sans-serif; color: white">@lang('app.a_edit_links')</h4>
						</div>
						<div class="text mb-1">
							<span style="font-family: 'Rubik', sans-serif; font-size: 75%; line-height: 16px; display:block; color: white">@lang('app.a_edit_links_descr')</span>
						</div>
					</div>
				</div>
            </div>
            <div class="modal fade" id="exampleModalLink" tabindex="-1" aria-labelledby="exampleModalLink" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" style="font-family: 'Rubik', sans-serif;">@lang('app.a_edit_links')</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('editAllLink', ['id' => Auth::user()->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf @method('PATCH')
                                <div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label mb-2" style="font-family: 'Rubik', sans-serif;">@lang('app.a_title')</label>
                                        <div class="mb-3 text-center d-flex justify-content-center">
                                            <input type="color" class="form-control " id="exampleColorInput" value="" title="Choose your color" name="title_color" style="height: 40px;">
                                        </div>
                                    </div>
                                    <div class="mb- text-center d-flex justify-content-between">
                                        <div>
                                            <select class="form-select" aria-label="Default select example" name="font">
                                                <option value="Inter">Выбрать шрифт...</option>
                                                <option style="font-family: Russo One" value="Russo One">Russo One Font</option>
                                                <option style="font-family: Poiret One" value="Poiret One">Poiret One Font</option>
                                                <option style="font-family: Noto Sans" value="Noto Sans">Noto Sans Font</option>
                                                <option style="font-family: Montserrat" value="Montserrat">Montserrat Font</option>
                                                <option style="font-family: Open Sans" value="Open Sans">Open Sans Font</option>
                                                <option style="font-family: Roboto" value="Roboto">Roboto Font</option>
                                                <option style="font-family: JetBrains Mono" value="JetBrains Mono">JetBrains Mono Font</option>
                                                <option style="font-family: Spectral SC" value="Spectral SC">Spectral SC Font</option>
                                                <option style="font-family: Podkova" value="Podkova">Podkova Font</option>
                                                <option style="font-family: Noto Sans Mono" value="Noto Sans Mono">Noto Sans Mono Font</option>
                                                <option style="font-family: DotGothic16" value="DotGothic16">DotGothic16 Font</option>
                                                <option style="font-family: Alumni Sans" value="Alumni Sans">Alumni Sans Font</option>
                                                <option style="font-family: Murecho" value="Murecho">Murecho Font</option>
                                                <option style="font-family: Comforter" value="Comforter">Comforter Font</option>
                                                <option style="font-family: Zen Kurenaido" value="Zen Kurenaido">Zen Kurenaido Font</option>
                                                <option style="font-family: Yuji Syuku" value="Yuji Syuku">Yuji Syuku Font</option>
                                                <option style="font-family: Yomogi" value="Yomogi">Yomogi Font</option>
                                                <option style="font-family: Rampart One" value="Rampart One">Rampart One Font</option>
                                                <option style="font-family: Oi" value="Oi">Oi Font</option>
                                            </select>
                                        </div>
                                        <div>
                                            <select class="form-select" aria-label="Default select example" name="font_size">
                                                <option value="0.9">1</option>
                                                <option value="1">2</option>
                                                <option value="1.1">3</option>
                                                <option value="1.2">4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <label class="mb-3" style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">Вы можете выбрать шрифт и его размер для текста вашей ссылки</label>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label mb-2" style="font-family: 'Rubik', sans-serif;">@lang('app.a_back_color')</label>
                                        <div class="mb-3 text-center d-flex justify-content-center">
                                            <input type="color" class="form-control " id="exampleColorInput" value="" title="Choose your color" name="background_color" style="height: 40px;">
                                        </div>
                                    </div>

                                    <label for="exampleInputEmail1" class="form-label mb-2" style="font-family: 'Rubik', sans-serif;">@lang('app.a_trans')</label>
                                    <div class="mb- text-center d-flex justify-content-center">
                                        <input type="range" class="form-range" min="0.0" max="1.0" step="0.1" id="customRange2" name="transparency">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label mb-2" style="font-family: 'Rubik', sans-serif;">@lang('app.a_shadow')</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="shadow" id="inlineRadio1" value="shadow-none">
                                            <label class="form-check-label" for="inlineRadio1">none</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="shadow" id="inlineRadio2" value="shadow-sm" >
                                            <label class="form-check-label" for="inlineRadio2">sm</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="shadow" id="inlineRadio3" value="shadow" >
                                            <label class="form-check-label" for="inlineRadio3">md</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="shadow" id="inlineRadio3" value="shadow-lg" >
                                            <label class="form-check-label" for="inlineRadio3">lg</label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label mb-2" style="font-family: 'Rubik', sans-serif;">@lang('app.a_round')</label><br>
                                        <input type="range" class="form-range" min="1" max="50" step="1" id="customRange2" name="rounded">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Изменить</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ЗАКРЕПЛЕННЫЕ  ссылки -->
        <table class="table" style="margin-bottom: 0">
            <tbody>
                @foreach($pinnedLinks as $link)
                    <tr data-index="{{$link->id}}" data-position="{{$link->position}}">
                        <td style="padding-left: 0; padding-right: 0; padding-bottom: 0; border: 0">
                            <div class="ms-2 me-2 justify-content-center text-center" data-index="{{$link->id}}" data-position="{{$link->position}}">
                                <div class="col-12">
                                    <div class="row card ms-1 me-1 {{$link->shadow}}" style="background-color:rgba({{$link->background_color}}, {{$link->transparency}}); border: 0; margin-top: 12px; border-radius: {{$link->rounded}}px; background-position: center;">
                                        <div class="d-flex align-items-center justify-content-start mt-1 mb-1" style="padding-left: 4px; padding-right: 4px">
                                            <div class="col-1">
                                                @if($link->type == 'POST')
                                                    @if($link->photos)
                                                        @foreach(unserialize($link->photos) as $key => $photo)
                                                            @if($key == 0)
                                                                <img src="{{$photo}}" style="width:50px; border-radius: {{$link->rounded}}px;">
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                @elseif($link->type != 'POST')
                                                    @if($link->icon)
                                                        <img src="{{$link->icon}}" style="width:50px; border-radius: {{$link->rounded}}px;">
                                                    @elseif($link->icon == false)
                                                        <img src="{{$link->photo}}" style="width:50px; border-radius: {{$link->rounded}}px;">
                                                    @endif
                                                @endif
                                            </div>
                                            <div class=" col-10 text-center">
                                                <div class="me-5 ms-5">
                                                    <h4 class="" style="font-family: '{{$link->font}}', sans-serif; line-height: 1.5; font-size: {{$link->font_size}}rem; margin: 0;color: {{$link->title_color}}; @if($link->photo == '' && $link->photos == '') margin-top: 14px; margin-bottom: 14px @endif">{{$link->title}}</h4>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div id="up" class="imgg" style="background-image: url(https://cdn-icons-png.flaticon.com/512/238/238081.png);"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between rounded-bottom rounded-3" style="padding: 0;">
                                        <div class="col-4 border-end " style="background-color: #f0eeef; box-shadow: 5px 0px 0px black;">
                                            <a href="{{ route('showClickLinkStatistic', ['id' => $user->id, 'link' => $link->id]) }}" style="text-decoration: none; color: black">
                                                <button href="{{ route('showClickLinkStatistic', ['id' => $user->id, 'link' => $link->id]) }}" class="btn-sm" style="background-color: #f1f2f2; border: 0;">
                                                    @lang('app.s_stats')
                                                </button>
                                            </a>
                                        </div>
                                        <div class="col-4 border-end" style="background-color: #f0eeef; box-shadow: 5px 0px 0px black;" @if($link->type == 'POST') data-bs-toggle="modal" data-bs-target="#exampleModalPost{{$link->id}}" @elseif($link->type != 'POST') data-bs-toggle="modal" data-bs-target="#exampleModalEdit{{$link->id}}" @endif>
                                            <button class="btn-sm" style="background-color: #f1f2f2; border: 0;">
                                                @lang('app.a_edit')
                                            </button>
                                        </div>
                                        <div class="col-4" style="background-color: #f1f2f2; ">
                                            <form action="{{ route('delLink', ['id' => Auth::user()->id, 'link' => $link->id]) }}" method="POST">
                                                @csrf @method('DELETE')
                                                <button class="btn-sm" style="background-color: #f0eeef; border: 0;">
                                                    @lang('app.a_del')
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="exampleModalEdit{{$link->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" style="font-family: 'Rubik', sans-serif;">@lang('app.a_edit_link')</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>

                                                @if($link->icon == false)
                                                    @if($link->photo)
                                                        <div class="mb-3">
                                                            <label for="exampleInputEmail1" class="form-label mt-3" style="font-family: 'Rubik', sans-serif;">@lang('app.a_now_link')</label><br>
                                                            <div class="row d-flex align-items-center justify-content-center">
                                                                <div class="col-12">
                                                                    <img class="rounded-3" src="{{$link->photo}}" style="width:50px;">
                                                                </div>
                                                                <div class="col-12 mt-2">
                                                                    <form action="{{ route('delPhoto', ['id' => Auth::user()->id, 'link' => $link->id]) }}" method="POST">
                                                                        @csrf @method('PATCH')
                                                                        <input type="hidden" name="type" value="LINK">
                                                                        <button class="btn btn-sm btn-danger">@lang('app.a_now_del')</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @elseif($link->icon)
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label mt-3" style="font-family: 'Rubik', sans-serif;">@lang('app.a_now_icon')</label><br>
                                                        <div class="row d-flex align-items-center justify-content-center">
                                                            <div class="col-12">
                                                                <img class="rounded-3" src="{{$link->icon}}" style="width:50px;">
                                                            </div>
                                                            <div class="col-12 mt-2">
                                                                <form action="{{ route('delLinkIcon', ['id' => Auth::user()->id, 'link' => $link->id]) }}" method="POST">
                                                                    @csrf @method('PATCH')
                                                                    <button class="btn btn-sm btn-danger">@lang('app.a_now_del')</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif

                                                <div class="modal-body">
                                                    <form action="{{ route('editLink', ['id' => Auth::user()->id, 'link' => $link->id]) }}" method="post" enctype="multipart/form-data">
                                                        @csrf @method('PATCH')
                                                        <div>
                                                            <input type="hidden" name="type" value="LINK"> <!-- Тип ссылки -->
                                                            <div class="mb-3">
                                                                <label for="exampleInputEmail1" class="form-label" style="font-family: 'Rubik', sans-serif;">@lang('app.p_title')</label>
                                                                <input type="text" class="form-control" name="title" placeholder="Моя красивая ссылка" maxlength="50" value="{{$link->title}}">
                                                                <span style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">@lang('app.m_text_link_span')</span>
                                                            </div>
                                                            <div class="mb- text-center d-flex justify-content-between">
                                                                <div>
                                                                    <select class="form-select" aria-label="Default select example" name="font">
                                                                        <option @if($link->font == 'Inter') selected @endif value="Inter">Выбрать шрифт...</option>
                                                                        <option @if($link->font == 'Russo One') selected @endif style="font-family: Russo One" value="Russo One">Russo One Font</option>
                                                                        <option @if($link->font == 'Poiret One') selected @endif style="font-family: Poiret One" value="Poiret One">Poiret One Font</option>
                                                                        <option @if($link->font == 'Noto Sans') selected @endif style="font-family: Noto Sans" value="Noto Sans">Noto Sans Font</option>
                                                                        <option @if($link->font == 'Montserrat') selected @endif style="font-family: Montserrat" value="Montserrat">Montserrat Font</option>
                                                                        <option @if($link->font == 'Open Sans') selected @endif style="font-family: Open Sans" value="Open Sans">Open Sans Font</option>
                                                                        <option @if($link->font == 'Roboto') selected @endif style="font-family: Roboto" value="Roboto">Roboto Font</option>
                                                                        <option @if($link->font == 'JetBrains Mono') selected @endif style="font-family: JetBrains Mono" value="JetBrains Mono">JetBrains Mono Font</option>
                                                                        <option @if($link->font == 'Spectral SC') selected @endif style="font-family: Spectral SC" value="Spectral SC">Spectral SC Font</option>
                                                                        <option @if($link->font == 'Podkova') selected @endif style="font-family: Podkova" value="Podkova">Podkova Font</option>
                                                                        <option @if($link->font == 'Noto Sans Mono') selected @endif style="font-family: Noto Sans Mono" value="Noto Sans Mono">Noto Sans Mono Font</option>
                                                                        <option @if($link->font == 'DotGothic16') selected @endif style="font-family: DotGothic16" value="DotGothic16">DotGothic16 Font</option>
                                                                        <option @if($link->font == 'Alumni Sans') selected @endif style="font-family: Alumni Sans" value="Alumni Sans">Alumni Sans Font</option>
                                                                        <option @if($link->font == 'Murecho') selected @endif style="font-family: Murecho" value="Murecho">Murecho Font</option>
                                                                        <option @if($link->font == 'Comforter') selected @endif style="font-family: Comforter" value="Comforter">Comforter Font</option>
                                                                        <option @if($link->font == 'Zen Kurenaido') selected @endif style="font-family: Zen Kurenaido" value="Zen Kurenaido">Zen Kurenaido Font</option>
                                                                        <option @if($link->font == 'Yuji Syuku') selected @endif style="font-family: Yuji Syuku" value="Yuji Syuku">Yuji Syuku Font</option>
                                                                        <option @if($link->font == 'Yomogi') selected @endif style="font-family: Yomogi" value="Yomogi">Yomogi Font</option>
                                                                        <option @if($link->font == 'Rampart One') selected @endif style="font-family: Rampart One" value="Rampart One">Rampart One Font</option>
                                                                        <option @if($link->font == 'Oi') selected @endif style="font-family: Oi" value="Oi">Oi Font</option>
                                                                    </select>
                                                                </div>
                                                                <div>
                                                                    <select class="form-select" aria-label="Default select example" name="font_size">
                                                                        <option @if($link->font_size == 0.9) selected @endif value="0.9">1</option>
                                                                        <option @if($link->font_size == 1) selected @endif value="1">2</option>
                                                                        <option @if($link->font_size == 1.1) selected @endif value="1.1">3</option>
                                                                        <option @if($link->font_size == 1.2) selected @endif value="1.2">4</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <label class="mb-3" style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">Вы можете выбрать шрифт и его размер для текста вашей ссылки</label>
                                                            <div class="mb-3">
                                                                <label for="exampleInputEmail1" class="form-label" style="font-family: 'Rubik', sans-serif;">@lang('app.m_insert_link')</label>
                                                                <input type="text" class="form-control" name="link" placeholder="http://..." value="{{$link->link}}">
                                                                <span style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">@lang('app.a_edit_link')</span>
                                                            </div>

                                                            <label for="exampleInputEmail1" class="form-label mb-2" style="font-family: 'Rubik', sans-serif;">@lang('app.m_icon')</label>
                                                            <div class="mb-3">
                                                                <select id="select-beast-empty{{$link->id}}" data-placeholder="Поиск иконки..."  autocomplete="off" name="icon">
                                                                    <option value="">None</option>
                                                                    <option value="4">telegram</option>
                                                                    <option value="1">vkontakte</option>
                                                                    <option value="3">facebook</option>
                                                                    <option value="5">viber</option>
                                                                    <option value="6">wechat</option>
                                                                    <option value="7">instagram</option>
                                                                    <option value="8">odnoclasniki</option>
                                                                    <option value="9">averro</option>
                                                                </select>
                                                                <span style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">@lang('app.m_icon_description')</span>
                                                            </div>
                                                            @if($link->icon == false)
                                                                <div class="mb-3">
                                                                    <label for="exampleInputEmail1" class="form-label" style="font-family: 'Rubik', sans-serif;">@lang('app.m_photo')</label>
                                                                    <input type="file" class="form-control" id="inputGroupFile02" name="photo">
                                                                    <span style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">@lang('app.m_photo_description')</span>
                                                                </div>
                                                            @endif

                                                            <div class="mb-3">
                                                                <label for="exampleInputEmail1" class="form-label mb-2" style="font-family: 'Rubik', sans-serif;">@lang('app.m_title_color')</label>
                                                                <div class="mb-3 text-center d-flex justify-content-center">
                                                                    <input type="color" class="form-control " id="exampleColorInput" value="{{$link->title_color_hex}}" title="Choose your color" name="title_color" style="height: 40px;">
                                                                </div>
                                                            </div>


                                                            <div class="mb-3">
                                                                <label for="exampleInputEmail1" class="form-label mb-2" style="font-family: 'Rubik', sans-serif;">@lang('app.m_background_color')</label>
                                                                <div class="mb-3 text-center d-flex justify-content-center">
                                                                    <input type="color" class="form-control " id="exampleColorInput" value="{{$link->background_color_hex}}" title="Choose your color" name="background_color" style="height: 40px;">
                                                                </div>
                                                            </div>


                                                            <label for="exampleInputEmail1" class="form-label mb-2" style="font-family: 'Rubik', sans-serif;">@lang('app.m_transparency')</label>
                                                            <div class="mb- text-center d-flex justify-content-center">
                                                                <input type="range" class="form-range" min="0.0" max="1.0" step="0.1" id="customRange2" name="transparency" value="{{$link->transparency}}">
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="exampleInputEmail1" class="form-label mb-2" style="font-family: 'Rubik', sans-serif;">@lang('app.m_shadow')</label><br>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="shadow" id="inlineRadio1" value="shadow-none" @if($link->shadow == 'shadow-none') checked @endif>
                                                                    <label class="form-check-label" for="inlineRadio1">none</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="shadow" id="inlineRadio2" value="shadow-sm" @if($link->shadow == 'shadow-sm') checked @endif>
                                                                    <label class="form-check-label" for="inlineRadio2">sm</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="shadow" id="inlineRadio3" value="shadow" @if($link->shadow == 'shadow') checked @endif>
                                                                    <label class="form-check-label" for="inlineRadio3">md</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="shadow" id="inlineRadio3" value="shadow-lg" @if($link->shadow == 'shadow-lg') checked @endif>
                                                                    <label class="form-check-label" for="inlineRadio3">lg</label>
                                                                </div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="exampleInputEmail1" class="form-label mb-2" style="font-family: 'Rubik', sans-serif;">@lang('app.m_round')</label>
                                                                <div class="mb-3 text-center d-flex justify-content-center">
                                                                    <input type="range" class="form-range" min="1" max="50" step="1" id="customRange2" name="rounded" value="{{$link->rounded}}">
                                                                </div>
                                                            </div>

                                                            <div class="mb-3 text-center">
                                                                <div>
                                                                    <select class="form-select" aria-label="Default select example" name="animation">
                                                                        <option >Выбрать анимацию...</option>
                                                                        <option @if($link->animation == 'animate__animated animate__pulse animate__infinite infinite') selected @endif value="animate__animated animate__pulse animate__infinite infinite">Pulse</option>
                                                                        <option @if($link->animation == 'animate__animated animate__headShake animate__infinite infinite') selected @endif value="animate__animated animate__headShake animate__infinite infinite">Head Shake</option>
                                                                    </select>
                                                                </div>
                                                                <label style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">Вы можете выделить свою ссылку от остальных выбрав одну из анимаций</label>
                                                            </div>
                                                            <div class="mb-3 text-center">
                                                                <div class="form-check text-center">
                                                                    <input @if($link->pinned == 1) checked @endif name="pinned" class="form-check-input" type="checkbox" value="{{true}}" id="flexCheckDefault">
                                                                    <label class="form-check-label" for="flexCheckDefault">
                                                                        Закрепите ссылку и она всегда будет вверху списка
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <button type="submit" class="btn btn-primary">@lang('app.a_edit')</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @if($link->type == 'POST')
                    <div class="modal fade" id="exampleModalPost{{$link->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background-color: #1b1b1b">
                        <div class="modal-dialog">
                        <div class="modal-content text-center" style="background-color: #FBF6EA">
                                <div class="modal-header">
                                    <h5 class="modal-title" style="font-family: 'Rubik', sans-serif;">@lang('app.a_edit_post')</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                @if($link->photos)
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label mt-3" style="font-family: 'Rubik', sans-serif;">@lang('app.a_now_link')</label><br>
                                        <div class="">
                                            <div class="col-12">
                                                @foreach(unserialize($link->photos) as $photo)
                                                    <img class="rounded-3 mt-2" src="{{$photo}}" style="width:50px;">
                                                @endforeach
                                            </div>
                                            <div class="col-12 mt-2">
                                                <form action="{{ route('delPhoto', ['id' => Auth::user()->id, 'link' => $link->id]) }}" method="POST">
                                                    @csrf @method('PATCH')
                                                    <input type="hidden" name="type" value="POST">
                                                    <button class="btn btn-sm btn-danger">@lang('app.a_now_del')</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div class="modal-body">
                                    <form action="{{ route('editLink', ['id' => Auth::user()->id, 'link' => $link->id]) }}" method="post" enctype="multipart/form-data">
                                        @csrf @method('PATCH')
                                        <input type="hidden" value="POST" name="type"> <!-- Тип ссылки -->
                                        <div class="mb-3"> <!-- Заголовок -->
                                            <label for="exampleInputEmail1" class="form-label" style="font-family: 'Rubik', sans-serif; ">@lang('app.p_title')</label>
                                            <input type="text" class="form-control" name="title" maxlength="100" value="{{$link->title}}">
                                            <span style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">@lang('app.p_title_description')</span>
                                        </div>
                                        <div class="mb- text-center d-flex justify-content-between">
                                            <div>
                                                <select class="form-select" aria-label="Default select example" name="font">
                                                    <option @if($link->font == 'Inter') selected @endif value="Inter">Выбрать шрифт...</option>
                                                    <option @if($link->font == 'Russo One') selected @endif style="font-family: Russo One" value="Russo One">Russo One Font</option>
                                                    <option @if($link->font == 'Poiret One') selected @endif style="font-family: Poiret One" value="Poiret One">Poiret One Font</option>
                                                    <option @if($link->font == 'Noto Sans') selected @endif style="font-family: Noto Sans" value="Noto Sans">Noto Sans Font</option>
                                                    <option @if($link->font == 'Montserrat') selected @endif style="font-family: Montserrat" value="Montserrat">Montserrat Font</option>
                                                    <option @if($link->font == 'Open Sans') selected @endif style="font-family: Open Sans" value="Open Sans">Open Sans Font</option>
                                                    <option @if($link->font == 'Roboto') selected @endif style="font-family: Roboto" value="Roboto">Roboto Font</option>
                                                    <option @if($link->font == 'JetBrains Mono') selected @endif style="font-family: JetBrains Mono" value="JetBrains Mono">JetBrains Mono Font</option>
                                                    <option @if($link->font == 'Spectral SC') selected @endif style="font-family: Spectral SC" value="Spectral SC">Spectral SC Font</option>
                                                    <option @if($link->font == 'Podkova') selected @endif style="font-family: Podkova" value="Podkova">Podkova Font</option>
                                                    <option @if($link->font == 'Noto Sans Mono') selected @endif style="font-family: Noto Sans Mono" value="Noto Sans Mono">Noto Sans Mono Font</option>
                                                    <option @if($link->font == 'DotGothic16') selected @endif style="font-family: DotGothic16" value="DotGothic16">DotGothic16 Font</option>
                                                    <option @if($link->font == 'Alumni Sans') selected @endif style="font-family: Alumni Sans" value="Alumni Sans">Alumni Sans Font</option>
                                                    <option @if($link->font == 'Murecho') selected @endif style="font-family: Murecho" value="Murecho">Murecho Font</option>
                                                    <option @if($link->font == 'Comforter') selected @endif style="font-family: Comforter" value="Comforter">Comforter Font</option>
                                                    <option @if($link->font == 'Zen Kurenaido') selected @endif style="font-family: Zen Kurenaido" value="Zen Kurenaido">Zen Kurenaido Font</option>
                                                    <option @if($link->font == 'Yuji Syuku') selected @endif style="font-family: Yuji Syuku" value="Yuji Syuku">Yuji Syuku Font</option>
                                                    <option @if($link->font == 'Yomogi') selected @endif style="font-family: Yomogi" value="Yomogi">Yomogi Font</option>
                                                    <option @if($link->font == 'Rampart One') selected @endif style="font-family: Rampart One" value="Rampart One">Rampart One Font</option>
                                                    <option @if($link->font == 'Oi') selected @endif style="font-family: Oi" value="Oi">Oi Font</option>
                                                </select>
                                            </div>
                                            <div>
                                                <select class="form-select" aria-label="Default select example" name="font_size">
                                                    <option @if($link->font_size == 0.9) selected @endif value="0.9">1</option>
                                                    <option @if($link->font_size == 1) selected @endif value="1">2</option>
                                                    <option @if($link->font_size == 1.1) selected @endif value="1.1">3</option>
                                                    <option @if($link->font_size == 1.2) selected @endif value="1.2">4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <label class="mb-3" style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">Вы можете выбрать шрифт и его размер для текста вашей ссылки</label>
                                        <div class="mb-3"> <!-- Полный текст -->
                                            <label for="exampleInputEmail1" class="form-label" style="font-family: 'Rubik', sans-serif; ">@lang('app.p_text')</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="full_text">{{$link->full_text}}</textarea>
                                            <span style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">@lang('app.p_free_text')</span>
                                        </div>
                                        <div class="mb-3"> <!-- Ссылка на источник -->
                                            <label for="exampleInputEmail1" class="form-label" style="font-family: 'Rubik', sans-serif;">@lang('app.p_link')</label>
                                            <input type="text" class="form-control" name="link" value="{{$link->link}}">
                                            <span style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">@lang('app.p_description_link')</span>
                                        </div>
                                        <div class="mb-3"> <!-- Фотографии -->
                                            <label for="exampleInputEmail1" class="form-label" style="font-family: 'Rubik', sans-serif;">@lang('app.p_photos')</label>
                                            <input type="file" class="form-control" id="inputGroupFile02" name="photos[]" accept=".png, .jpg, .jpeg" multiple>
                                            <span style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">@lang('app.p_photos_description')</span>
                                        </div>
                                        <div class="mb-3"> <!-- Ссылка на видео -->
                                            <label for="exampleInputEmail1" class="form-label" style="font-family: 'Rubik', sans-serif;">@lang('app.p_video')</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="video">{{$link->video}}</textarea>
                                            <span style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">@lang('app.p_video_description')</span>
                                        </div>
                                        <div class="mb-3"> <!-- Ссылка на любое медиа -->
                                            <label for="exampleInputEmail1" class="form-label" style="font-family: 'Rubik', sans-serif;">@lang('app.p_media')</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="media">{{$link->media}}</textarea>
                                            <span style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">@lang('app.p_media_description')</span>
                                        </div>

                                        <label for="exampleInputEmail1" class="form-label mb-2" style="font-family: 'Rubik', sans-serif;"@lang('app.p_title_color')</label>
                                        <div class="mb-3 text-center d-flex justify-content-center"> <!-- выбор цвета на заголовок -->
                                            <input type="color" class="form-control" id="exampleColorInput" value="{{$link->title_color}}" title="Choose your color" name="title_color" style="height: 40px;"><br>
                                            <span style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">@lang('app.p_title_color_def')</span>
                                        </div>
                                        <label for="exampleInputEmail1" class="form-label mb-2" style="font-family: 'Rubik', sans-serif;">@lang('app.p_background_color')</label>
                                        <div class="mb-3 text-center d-flex justify-content-center"> <!-- выбор цвета на фон -->
                                            <input type="color" class="form-control " id="exampleColorInput" value="{{$link->background_color_hex}}" title="Choose your color" name="background_color" style="height: 40px;">
                                            <span style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">@lang('app.p_background_color_def')</span>
                                        </div>
                                        <label for="exampleInputEmail1" class="form-label mb-2" style="font-family: 'Rubik', sans-serif;">@lang('app.p_transparency')</label>
                                        <div class="mb-3 text-center d-flex justify-content-center"> <!-- выбор прозрачности фона -->
                                            <input type="range" class="form-range" min="0.0" max="1.0" step="0.1" id="customRange2" name="transparency" value="{{$link->transparency}}">
                                        </div>
                                        <label for="exampleInputEmail1" class="form-label mb-2" style="font-family: 'Rubik', sans-serif;">@lang('app.p_shadow')</label>
                                        <div class="mb-3 text-center d-flex justify-content-center"> <!-- Добавить тень -->
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="shadow" id="inlineRadio1" value="shadow-none" @if($link->shadow == 'shadow-none') checked @endif>
                                                <label class="form-check-label" for="inlineRadio1">none</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="shadow" id="inlineRadio2" value="shadow-sm" @if($link->shadow == 'shadow-sm') checked @endif>
                                                <label class="form-check-label" for="inlineRadio2">sm</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="shadow" id="inlineRadio3" value="shadow" @if($link->shadow == 'shadow') checked @endif>
                                                <label class="form-check-label" for="inlineRadio3">md</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="shadow" id="inlineRadio3" value="shadow-lg" @if($link->shadow == 'shadow-lg') checked @endif>
                                                <label class="form-check-label" for="inlineRadio3">lg</label>
                                            </div>
                                        </div>
                                        <label for="exampleInputEmail1" class="form-label mb-2" style="font-family: 'Rubik', sans-serif;">@lang('app.p_round')</label>
                                        <div class="mb-3 text-center d-flex justify-content-center"> <!-- Добивить округление углов -->
                                            <input type="range" class="form-range" min="1" max="50" step="1" id="customRange2" name="rounded" value="{{$link->rounded}}">
                                        </div>
                                        <div class="mb-3 text-center">
                                            <div>
                                                <select class="form-select" aria-label="Default select example" name="animation">
                                                    <option >Выбрать анимацию...</option>
                                                    <option @if($link->animation == 'animate__animated animate__pulse animate__infinite infinite') selected @endif value="animate__animated animate__pulse animate__infinite infinite">Pulse</option>
                                                    <option @if($link->animation == 'animate__animated animate__headShake animate__infinite infinite') selected @endif value="animate__animated animate__headShake animate__infinite infinite">Head Shake</option>
                                                </select>
                                            </div>
                                            <label style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">Вы можете выделить свою ссылку от остальных выбрав одну из анимаций</label>
                                        </div>
                                        <div class="mb-3 text-center">
                                            <div class="form-check text-center">
                                                <input @if($link->pinned == 1) checked @endif name="pinned" class="form-check-input" type="checkbox" value="{{true}}" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Закрепите ссылку и она всегда будет вверху списка
                                                </label>
                                            </div>
                                        </div>
                                    <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary">@lang('app.p_edit_prof')</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    </div>
                    @endif
                @endforeach
            </tbody>
        </table>

        <!-- Ссылки -->
        <table class="table">
            <tbody>
                @foreach($links as $link)
                    <tr data-index="{{$link->id}}" data-position="{{$link->position}}">
                        <td style="padding-left: 0; padding-right: 0; padding-bottom: 0; border: 0">
                            <div class="ms-2 me-2 justify-content-center text-center" data-index="{{$link->id}}" data-position="{{$link->position}}">
                                <div class="col-12">
                                    <div class="row card ms-1 me-1 {{$link->shadow}}" style="background-color:rgba({{$link->background_color}}, {{$link->transparency}}); border: 0; margin-top: 12px; border-radius: {{$link->rounded}}px; background-position: center;">
                                        <div class="d-flex align-items-center justify-content-start mt-1 mb-1" style="padding-left: 4px; padding-right: 4px">
                                            <div class="col-1">
                                                @if($link->type == 'POST')
                                                    @if($link->photos)
                                                        @foreach(unserialize($link->photos) as $key => $photo)
                                                            @if($key == 0)
                                                                <img src="{{$photo}}" style="width:50px; border-radius: {{$link->rounded}}px;">
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                @elseif($link->type != 'POST')
                                                    @if($link->icon)
                                                        <img src="{{$link->icon}}" style="width:50px; border-radius: {{$link->rounded}}px;">
                                                    @elseif($link->icon == false)
                                                        <img src="{{$link->photo}}" style="width:50px; border-radius: {{$link->rounded}}px;">
                                                    @endif
                                                @endif
                                            </div>
                                            <div class=" col-10 text-center">
                                                <div class="me-5 ms-5">
                                                    <h4 class="" style="font-family: '{{$link->font}}', sans-serif; line-height: 1.5; font-size: {{$link->font_size}}rem; margin: 0;color: {{$link->title_color}}; @if($link->photo == '' && $link->photos == '') margin-top: 14px; margin-bottom: 14px @endif">{{$link->title}}</h4>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div id="up" class="imgg" style="background-image: url(https://i.ibb.co/VLbJkrG/dots.png);"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between rounded-bottom rounded-3" style="padding: 0;">
                                        <div class="col-4 border-end " style="background-color: #f0eeef; box-shadow: 5px 0px 0px black;">
                                            <a href="{{ route('showClickLinkStatistic', ['id' => $user->id, 'link' => $link->id]) }}" style="text-decoration: none; color: black">
                                                <button href="{{ route('showClickLinkStatistic', ['id' => $user->id, 'link' => $link->id]) }}" class="btn-sm" style="background-color: #f1f2f2; border: 0;">
                                                    @lang('app.s_stats')
                                                </button>
                                            </a>
                                        </div>
                                        <div class="col-4 border-end" style="background-color: #f0eeef; box-shadow: 5px 0px 0px black;" @if($link->type == 'POST') data-bs-toggle="modal" data-bs-target="#exampleModalPost{{$link->id}}" @elseif($link->type != 'POST') data-bs-toggle="modal" data-bs-target="#exampleModalEdit{{$link->id}}" @endif>
                                            <button class="btn-sm" style="background-color: #f1f2f2; border: 0;">
                                                @lang('app.a_edit')
                                            </button>
                                        </div>
                                        <div class="col-4" style="background-color: #f1f2f2; ">
                                            <form action="{{ route('delLink', ['id' => Auth::user()->id, 'link' => $link->id]) }}" method="POST">
                                                @csrf @method('DELETE')
                                                <button class="btn-sm" style="background-color: #f0eeef; border: 0;">
                                                    @lang('app.a_del')
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="exampleModalEdit{{$link->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" style="font-family: 'Rubik', sans-serif;">@lang('app.a_edit_link')</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>

                                                @if($link->icon == false)
                                                    @if($link->photo)
                                                        <div class="mb-3">
                                                            <label for="exampleInputEmail1" class="form-label mt-3" style="font-family: 'Rubik', sans-serif;">@lang('app.a_now_link')</label><br>
                                                            <div class="row d-flex align-items-center justify-content-center">
                                                                <div class="col-12">
                                                                    <img class="rounded-3" src="{{$link->photo}}" style="width:50px;">
                                                                </div>
                                                                <div class="col-12 mt-2">
                                                                    <form action="{{ route('delPhoto', ['id' => Auth::user()->id, 'link' => $link->id]) }}" method="POST">
                                                                        @csrf @method('PATCH')
                                                                        <input type="hidden" name="type" value="LINK">
                                                                        <button class="btn btn-sm btn-danger">@lang('app.a_now_del')</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @elseif($link->icon)
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label mt-3" style="font-family: 'Rubik', sans-serif;">@lang('app.a_now_icon')</label><br>
                                                        <div class="row d-flex align-items-center justify-content-center">
                                                            <div class="col-12">
                                                                <img class="rounded-3" src="{{$link->icon}}" style="width:50px;">
                                                            </div>
                                                            <div class="col-12 mt-2">
                                                                <form action="{{ route('delLinkIcon', ['id' => Auth::user()->id, 'link' => $link->id]) }}" method="POST">
                                                                    @csrf @method('PATCH')
                                                                    <button class="btn btn-sm btn-danger">@lang('app.a_now_del')</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif

                                                <div class="modal-body">
                                                    <form action="{{ route('editLink', ['id' => Auth::user()->id, 'link' => $link->id]) }}" method="post" enctype="multipart/form-data">
                                                        @csrf @method('PATCH')
                                                        <div>
                                                            <input type="hidden" name="type" value="LINK"> <!-- Тип ссылки -->
                                                            <div class="mb-3">
                                                                <label for="exampleInputEmail1" class="form-label" style="font-family: 'Rubik', sans-serif;">@lang('app.p_title')</label>
                                                                <input type="text" class="form-control" name="title" placeholder="Моя красивая ссылка" maxlength="50" value="{{$link->title}}">
                                                                <span style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">@lang('app.m_text_link_span')</span>
                                                            </div>
                                                            <div class="mb- text-center d-flex justify-content-between">
                                                                <div>
                                                                    <select class="form-select" aria-label="Default select example" name="font">
                                                                        <option @if($link->font == 'Inter') selected @endif value="Inter">Выбрать шрифт...</option>
                                                                        <option @if($link->font == 'Russo One') selected @endif style="font-family: Russo One" value="Russo One">Russo One Font</option>
                                                                        <option @if($link->font == 'Poiret One') selected @endif style="font-family: Poiret One" value="Poiret One">Poiret One Font</option>
                                                                        <option @if($link->font == 'Noto Sans') selected @endif style="font-family: Noto Sans" value="Noto Sans">Noto Sans Font</option>
                                                                        <option @if($link->font == 'Montserrat') selected @endif style="font-family: Montserrat" value="Montserrat">Montserrat Font</option>
                                                                        <option @if($link->font == 'Open Sans') selected @endif style="font-family: Open Sans" value="Open Sans">Open Sans Font</option>
                                                                        <option @if($link->font == 'Roboto') selected @endif style="font-family: Roboto" value="Roboto">Roboto Font</option>
                                                                        <option @if($link->font == 'JetBrains Mono') selected @endif style="font-family: JetBrains Mono" value="JetBrains Mono">JetBrains Mono Font</option>
                                                                        <option @if($link->font == 'Spectral SC') selected @endif style="font-family: Spectral SC" value="Spectral SC">Spectral SC Font</option>
                                                                        <option @if($link->font == 'Podkova') selected @endif style="font-family: Podkova" value="Podkova">Podkova Font</option>
                                                                        <option @if($link->font == 'Noto Sans Mono') selected @endif style="font-family: Noto Sans Mono" value="Noto Sans Mono">Noto Sans Mono Font</option>
                                                                        <option @if($link->font == 'DotGothic16') selected @endif style="font-family: DotGothic16" value="DotGothic16">DotGothic16 Font</option>
                                                                        <option @if($link->font == 'Alumni Sans') selected @endif style="font-family: Alumni Sans" value="Alumni Sans">Alumni Sans Font</option>
                                                                        <option @if($link->font == 'Murecho') selected @endif style="font-family: Murecho" value="Murecho">Murecho Font</option>
                                                                        <option @if($link->font == 'Comforter') selected @endif style="font-family: Comforter" value="Comforter">Comforter Font</option>
                                                                        <option @if($link->font == 'Zen Kurenaido') selected @endif style="font-family: Zen Kurenaido" value="Zen Kurenaido">Zen Kurenaido Font</option>
                                                                        <option @if($link->font == 'Yuji Syuku') selected @endif style="font-family: Yuji Syuku" value="Yuji Syuku">Yuji Syuku Font</option>
                                                                        <option @if($link->font == 'Yomogi') selected @endif style="font-family: Yomogi" value="Yomogi">Yomogi Font</option>
                                                                        <option @if($link->font == 'Rampart One') selected @endif style="font-family: Rampart One" value="Rampart One">Rampart One Font</option>
                                                                        <option @if($link->font == 'Oi') selected @endif style="font-family: Oi" value="Oi">Oi Font</option>
                                                                    </select>
                                                                </div>
                                                                <div>
                                                                    <select class="form-select" aria-label="Default select example" name="font_size">
                                                                        <option @if($link->font_size == 0.9) selected @endif value="0.9">1</option>
                                                                        <option @if($link->font_size == 1) selected @endif value="1">2</option>
                                                                        <option @if($link->font_size == 1.1) selected @endif value="1.1">3</option>
                                                                        <option @if($link->font_size == 1.2) selected @endif value="1.2">4</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <label class="mb-3" style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">Вы можете выбрать шрифт и его размер для текста вашей ссылки</label>
                                                            <div class="mb-3">
                                                                <label for="exampleInputEmail1" class="form-label" style="font-family: 'Rubik', sans-serif;">@lang('app.m_insert_link')</label>
                                                                <input type="text" class="form-control" name="link" placeholder="http://..." value="{{$link->link}}">
                                                                <span style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">@lang('app.a_edit_link')</span>
                                                            </div>

                                                            <label for="exampleInputEmail1" class="form-label mb-2" style="font-family: 'Rubik', sans-serif;">@lang('app.m_icon')</label>
                                                            <div class="mb-3">
                                                                <select id="select-beast-empty{{$link->id}}" data-placeholder="Поиск иконки..."  autocomplete="off" name="icon">
                                                                    <option value="">None</option>
                                                                    <option value="4">telegram</option>
                                                                    <option value="1">vkontakte</option>
                                                                    <option value="3">facebook</option>
                                                                    <option value="5">viber</option>
                                                                    <option value="6">wechat</option>
                                                                    <option value="7">instagram</option>
                                                                    <option value="8">odnoclasniki</option>
                                                                    <option value="9">averro</option>
                                                                </select>
                                                                <span style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">@lang('app.m_icon_description')</span>
                                                            </div>
                                                            @if($link->icon == false)
                                                                <div class="mb-3">
                                                                    <label for="exampleInputEmail1" class="form-label" style="font-family: 'Rubik', sans-serif;">@lang('app.m_photo')</label>
                                                                    <input type="file" class="form-control" id="inputGroupFile02" name="photo">
                                                                    <span style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">@lang('app.m_photo_description')</span>
                                                                </div>
                                                            @endif

                                                            <div class="mb-3">
                                                                <label for="exampleInputEmail1" class="form-label mb-2" style="font-family: 'Rubik', sans-serif;">@lang('app.m_title_color')</label>
                                                                <div class="mb-3 text-center d-flex justify-content-center">
                                                                    <input type="color" class="form-control " id="exampleColorInput" value="{{$link->title_color_hex}}" title="Choose your color" name="title_color" style="height: 40px;">
                                                                </div>
                                                            </div>


                                                            <div class="mb-3">
                                                                <label for="exampleInputEmail1" class="form-label mb-2" style="font-family: 'Rubik', sans-serif;">@lang('app.m_background_color')</label>
                                                                <div class="mb-3 text-center d-flex justify-content-center">
                                                                    <input type="color" class="form-control " id="exampleColorInput" value="{{$link->background_color_hex}}" title="Choose your color" name="background_color" style="height: 40px;">
                                                                </div>
                                                            </div>


                                                            <label for="exampleInputEmail1" class="form-label mb-2" style="font-family: 'Rubik', sans-serif;">@lang('app.m_transparency')</label>
                                                            <div class="mb- text-center d-flex justify-content-center">
                                                                <input type="range" class="form-range" min="0.0" max="1.0" step="0.1" id="customRange2" name="transparency" value="{{$link->transparency}}">
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="exampleInputEmail1" class="form-label mb-2" style="font-family: 'Rubik', sans-serif;">@lang('app.m_shadow')</label><br>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="shadow" id="inlineRadio1" value="shadow-none" @if($link->shadow == 'shadow-none') checked @endif>
                                                                    <label class="form-check-label" for="inlineRadio1">none</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="shadow" id="inlineRadio2" value="shadow-sm" @if($link->shadow == 'shadow-sm') checked @endif>
                                                                    <label class="form-check-label" for="inlineRadio2">sm</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="shadow" id="inlineRadio3" value="shadow" @if($link->shadow == 'shadow') checked @endif>
                                                                    <label class="form-check-label" for="inlineRadio3">md</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="shadow" id="inlineRadio3" value="shadow-lg" @if($link->shadow == 'shadow-lg') checked @endif>
                                                                    <label class="form-check-label" for="inlineRadio3">lg</label>
                                                                </div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="exampleInputEmail1" class="form-label mb-2" style="font-family: 'Rubik', sans-serif;">@lang('app.m_round')</label>
                                                                <div class="mb-3 text-center d-flex justify-content-center">
                                                                    <input type="range" class="form-range" min="1" max="50" step="1" id="customRange2" name="rounded" value="{{$link->rounded}}">
                                                                </div>
                                                            </div>

                                                            <div class="mb-3 text-center">
                                                                <div>
                                                                    <select class="form-select" aria-label="Default select example" name="animation">
                                                                        <option >Выбрать анимацию...</option>
                                                                        <option @if($link->animation == 'animate__animated animate__pulse animate__infinite infinite') selected @endif value="animate__animated animate__pulse animate__infinite infinite">Pulse</option>
                                                                        <option @if($link->animation == 'animate__animated animate__headShake animate__infinite infinite') selected @endif value="animate__animated animate__headShake animate__infinite infinite">Head Shake</option>
                                                                    </select>
                                                                </div>
                                                                <label style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">Вы можете выделить свою ссылку от остальных выбрав одну из анимаций</label>
                                                            </div>
                                                            <div class="mb-3 text-center">
                                                                <div class="form-check text-center">
                                                                    <input name="pinned" class="form-check-input" type="checkbox" value="{{true}}" id="flexCheckDefault">
                                                                    <label class="form-check-label" for="flexCheckDefault">
                                                                        Закрепите ссылку и она всегда будет вверху списка
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <button type="submit" class="btn btn-primary">@lang('app.a_edit')</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @if($link->type == 'POST')
                    <div class="modal fade" id="exampleModalPost{{$link->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background-color: #1b1b1b">
                        <div class="modal-dialog">
                        <div class="modal-content text-center" style="background-color: #FBF6EA">
                                <div class="modal-header">
                                    <h5 class="modal-title" style="font-family: 'Rubik', sans-serif;">@lang('app.a_edit_post')</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                @if($link->photos)
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label mt-3" style="font-family: 'Rubik', sans-serif;">@lang('app.a_now_link')</label><br>
                                        <div class="">
                                            <div class="col-12">
                                                @foreach(unserialize($link->photos) as $photo)
                                                    <img class="rounded-3 mt-2" src="{{$photo}}" style="width:50px;">
                                                @endforeach
                                            </div>
                                            <div class="col-12 mt-2">
                                                <form action="{{ route('delPhoto', ['id' => Auth::user()->id, 'link' => $link->id]) }}" method="POST">
                                                    @csrf @method('PATCH')
                                                    <input type="hidden" name="type" value="POST">
                                                    <button class="btn btn-sm btn-danger">@lang('app.a_now_del')</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div class="modal-body">
                                    <form action="{{ route('editLink', ['id' => Auth::user()->id, 'link' => $link->id]) }}" method="post" enctype="multipart/form-data">
                                        @csrf @method('PATCH')
                                        <input type="hidden" value="POST" name="type"> <!-- Тип ссылки -->
                                        <div class="mb-3"> <!-- Заголовок -->
                                            <label for="exampleInputEmail1" class="form-label" style="font-family: 'Rubik', sans-serif; ">@lang('app.p_title')</label>
                                            <input type="text" class="form-control" name="title" maxlength="100" value="{{$link->title}}">
                                            <span style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">@lang('app.p_title_description')</span>
                                        </div>
                                        <div class="mb- text-center d-flex justify-content-between">
                                            <div>
                                                <select class="form-select" aria-label="Default select example" name="font">
                                                    <option @if($link->font == 'Inter') selected @endif value="Inter">Выбрать шрифт...</option>
                                                    <option @if($link->font == 'Russo One') selected @endif style="font-family: Russo One" value="Russo One">Russo One Font</option>
                                                    <option @if($link->font == 'Poiret One') selected @endif style="font-family: Poiret One" value="Poiret One">Poiret One Font</option>
                                                    <option @if($link->font == 'Noto Sans') selected @endif style="font-family: Noto Sans" value="Noto Sans">Noto Sans Font</option>
                                                    <option @if($link->font == 'Montserrat') selected @endif style="font-family: Montserrat" value="Montserrat">Montserrat Font</option>
                                                    <option @if($link->font == 'Open Sans') selected @endif style="font-family: Open Sans" value="Open Sans">Open Sans Font</option>
                                                    <option @if($link->font == 'Roboto') selected @endif style="font-family: Roboto" value="Roboto">Roboto Font</option>
                                                    <option @if($link->font == 'JetBrains Mono') selected @endif style="font-family: JetBrains Mono" value="JetBrains Mono">JetBrains Mono Font</option>
                                                    <option @if($link->font == 'Spectral SC') selected @endif style="font-family: Spectral SC" value="Spectral SC">Spectral SC Font</option>
                                                    <option @if($link->font == 'Podkova') selected @endif style="font-family: Podkova" value="Podkova">Podkova Font</option>
                                                    <option @if($link->font == 'Noto Sans Mono') selected @endif style="font-family: Noto Sans Mono" value="Noto Sans Mono">Noto Sans Mono Font</option>
                                                    <option @if($link->font == 'DotGothic16') selected @endif style="font-family: DotGothic16" value="DotGothic16">DotGothic16 Font</option>
                                                    <option @if($link->font == 'Alumni Sans') selected @endif style="font-family: Alumni Sans" value="Alumni Sans">Alumni Sans Font</option>
                                                    <option @if($link->font == 'Murecho') selected @endif style="font-family: Murecho" value="Murecho">Murecho Font</option>
                                                    <option @if($link->font == 'Comforter') selected @endif style="font-family: Comforter" value="Comforter">Comforter Font</option>
                                                    <option @if($link->font == 'Zen Kurenaido') selected @endif style="font-family: Zen Kurenaido" value="Zen Kurenaido">Zen Kurenaido Font</option>
                                                    <option @if($link->font == 'Yuji Syuku') selected @endif style="font-family: Yuji Syuku" value="Yuji Syuku">Yuji Syuku Font</option>
                                                    <option @if($link->font == 'Yomogi') selected @endif style="font-family: Yomogi" value="Yomogi">Yomogi Font</option>
                                                    <option @if($link->font == 'Rampart One') selected @endif style="font-family: Rampart One" value="Rampart One">Rampart One Font</option>
                                                    <option @if($link->font == 'Oi') selected @endif style="font-family: Oi" value="Oi">Oi Font</option>
                                                </select>
                                            </div>
                                            <div>
                                                <select class="form-select" aria-label="Default select example" name="font_size">
                                                    <option @if($link->font_size == 0.9) selected @endif value="0.9">1</option>
                                                    <option @if($link->font_size == 1) selected @endif value="1">2</option>
                                                    <option @if($link->font_size == 1.1) selected @endif value="1.1">3</option>
                                                    <option @if($link->font_size == 1.2) selected @endif value="1.2">4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <label class="mb-3" style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">Вы можете выбрать шрифт и его размер для текста вашей ссылки</label>
                                        <div class="mb-3"> <!-- Полный текст -->
                                            <label for="exampleInputEmail1" class="form-label" style="font-family: 'Rubik', sans-serif; ">@lang('app.p_text')</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="full_text">{{$link->full_text}}</textarea>
                                            <span style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">@lang('app.p_free_text')</span>
                                        </div>
                                        <div class="mb-3"> <!-- Ссылка на источник -->
                                            <label for="exampleInputEmail1" class="form-label" style="font-family: 'Rubik', sans-serif;">@lang('app.p_link')</label>
                                            <input type="text" class="form-control" name="link" value="{{$link->link}}">
                                            <span style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">@lang('app.p_description_link')</span>
                                        </div>
                                        <div class="mb-3"> <!-- Фотографии -->
                                            <label for="exampleInputEmail1" class="form-label" style="font-family: 'Rubik', sans-serif;">@lang('app.p_photos')</label>
                                            <input type="file" class="form-control" id="inputGroupFile02" name="photos[]" accept=".png, .jpg, .jpeg" multiple>
                                            <span style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">@lang('app.p_photos_description')</span>
                                        </div>
                                        <div class="mb-3"> <!-- Ссылка на видео -->
                                            <label for="exampleInputEmail1" class="form-label" style="font-family: 'Rubik', sans-serif;">@lang('app.p_video')</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="video">{{$link->video}}</textarea>
                                            <span style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">@lang('app.p_video_description')</span>
                                        </div>
                                        <div class="mb-3"> <!-- Ссылка на любое медиа -->
                                            <label for="exampleInputEmail1" class="form-label" style="font-family: 'Rubik', sans-serif;">@lang('app.p_media')</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="media">{{$link->media}}</textarea>
                                            <span style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">@lang('app.p_media_description')</span>
                                        </div>

                                        <label for="exampleInputEmail1" class="form-label mb-2" style="font-family: 'Rubik', sans-serif;"@lang('app.p_title_color')</label>
                                        <div class="mb-3 text-center d-flex justify-content-center"> <!-- выбор цвета на заголовок -->
                                            <input type="color" class="form-control" id="exampleColorInput" value="{{$link->title_color}}" title="Choose your color" name="title_color" style="height: 40px;"><br>
                                            <span style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">@lang('app.p_title_color_def')</span>
                                        </div>
                                        <label for="exampleInputEmail1" class="form-label mb-2" style="font-family: 'Rubik', sans-serif;">@lang('app.p_background_color')</label>
                                        <div class="mb-3 text-center d-flex justify-content-center"> <!-- выбор цвета на фон -->
                                            <input type="color" class="form-control " id="exampleColorInput" value="{{$link->background_color_hex}}" title="Choose your color" name="background_color" style="height: 40px;">
                                            <span style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">@lang('app.p_background_color_def')</span>
                                        </div>
                                        <label for="exampleInputEmail1" class="form-label mb-2" style="font-family: 'Rubik', sans-serif;">@lang('app.p_transparency')</label>
                                        <div class="mb-3 text-center d-flex justify-content-center"> <!-- выбор прозрачности фона -->
                                            <input type="range" class="form-range" min="0.0" max="1.0" step="0.1" id="customRange2" name="transparency" value="{{$link->transparency}}">
                                        </div>
                                        <label for="exampleInputEmail1" class="form-label mb-2" style="font-family: 'Rubik', sans-serif;">@lang('app.p_shadow')</label>
                                        <div class="mb-3 text-center d-flex justify-content-center"> <!-- Добавить тень -->
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="shadow" id="inlineRadio1" value="shadow-none" @if($link->shadow == 'shadow-none') checked @endif>
                                                <label class="form-check-label" for="inlineRadio1">none</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="shadow" id="inlineRadio2" value="shadow-sm" @if($link->shadow == 'shadow-sm') checked @endif>
                                                <label class="form-check-label" for="inlineRadio2">sm</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="shadow" id="inlineRadio3" value="shadow" @if($link->shadow == 'shadow') checked @endif>
                                                <label class="form-check-label" for="inlineRadio3">md</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="shadow" id="inlineRadio3" value="shadow-lg" @if($link->shadow == 'shadow-lg') checked @endif>
                                                <label class="form-check-label" for="inlineRadio3">lg</label>
                                            </div>
                                        </div>
                                        <label for="exampleInputEmail1" class="form-label mb-2" style="font-family: 'Rubik', sans-serif;">@lang('app.p_round')</label>
                                        <div class="mb-3 text-center d-flex justify-content-center"> <!-- Добивить округление углов -->
                                            <input type="range" class="form-range" min="1" max="50" step="1" id="customRange2" name="rounded" value="{{$link->rounded}}">
                                        </div>
                                        <div class="mb-3 text-center">
                                            <div>
                                                <select class="form-select" aria-label="Default select example" name="animation">
                                                    <option >Выбрать анимацию...</option>
                                                    <option @if($link->animation == 'animate__animated animate__pulse animate__infinite infinite') selected @endif value="animate__animated animate__pulse animate__infinite infinite">Pulse</option>
                                                    <option @if($link->animation == 'animate__animated animate__headShake animate__infinite infinite') selected @endif value="animate__animated animate__headShake animate__infinite infinite">Head Shake</option>
                                                </select>
                                            </div>
                                            <label style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">Вы можете выделить свою ссылку от остальных выбрав одну из анимаций</label>
                                        </div>
                                        <div class="mb-3 text-center">
                                            <div class="form-check text-center">
                                                <input name="pinned" class="form-check-input" type="checkbox" value="{{true}}" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Закрепите ссылку и она всегда будет вверху списка
                                                </label>
                                            </div>
                                        </div>
                                    <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary">@lang('app.p_edit_prof')</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    </div>
                    @endif
                @endforeach
            </tbody>
        </table>

        @foreach($links as $link)
            <script type="text/javascript">
                $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                });

                $(document).ready(function () {
                    $('table tbody').sortable({
                        // delay:2000,
                        handle:'#up',
                        update: function (event, ui) {
                            $(this).children().each(function (index) {
                                    if ($(this).attr('data-position') != (index+1)) {
                                        $(this).attr('data-position', (index+1)).addClass('updated');
                                    }
                            });

                            saveNewPositions();
                        }
                    });
                });

                function saveNewPositions() {
                    var userId = {{$user->id}};
                    var positions = [];
                    $('.updated').each(function () {
                        positions.push([$(this).attr('data-index'), $(this).attr('data-position')]);
                        $(this).removeClass('updated');
                    });

                    $.ajax({
                        url: "ppp/sort",
                        method: 'POST',
                        dataType: 'text',
                        data: {
                            update: 1,
                            positions: positions
                        }, success: function (response) {
                                console.log(response);
                        }
                    });
                }
            </script>

            <script>
                new TomSelect('#select-beast-empty{{$link->id}}',{
                    valueField: 'img',
                    searchField: 'title',
                    options: [
                        @foreach($allIconsInsideFolder as $icon)
                            {id: {{$icon->getInode()}}, title: '{{$icon->getFilename()}}', img: '{{'http://links/public/images/social/'.$icon->getFilename()}}'},
                        @endforeach
                    ],
                    render: {
                        option: function(data, escape) {
                            return  '<table>' +
                                        '<tr>' +
                                            '<img  width="90" src="' + escape(data.img) + '">' +
                                        '</tr>' +
                                    '</table>';
                        },
                        item: function(data, escape) {
                            return  '<img style="margin-right: 16px" width="30" src="' + escape(data.img) + '">' + '<span class="title">' + escape(data.title) + '</span>';
                        }
                    }
                });
            </script>
        @endforeach
    </body>
</html>








