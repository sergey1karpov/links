<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        <!-- Bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Overpass+Mono&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;600&display=swap" rel="stylesheet">
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

        <!-- Подгрузка соц сетей для ссылок-->
        <link href="https://cdn.jsdelivr.net/npm/tom-select@2.0.3/dist/css/tom-select.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/tom-select@2.0.3/dist/js/tom-select.complete.min.js"></script>

        <!-- JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

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
			  border-bottom:2px solid #0062cc;
			}
			.box{
			    padding:60px 0px;
			}

			.box-part{
			    background:#fcfcf9;
			    border-radius:25;
			    padding:30px 20px;
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
			    width: 85px;
			    height: 85px;
			    border-radius: 50%;
			    margin-right: 0;
			    background-position: center center;
			    -wekit-background-size: cover;
			    background-size: cover;
			    background-repeat: no-repeat;
			}
			.imgg {
			    width: 60px;
			    height: 60px;
			    border-radius: 50%;
			    margin-right: 0;
			    background-position: center center;
			    -wekit-background-size: cover;
			    background-size: cover;
			    background-repeat: no-repeat;
			}
            .loader{
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                width: 100%;
                height: 100%;
                background: url('https://flevix.com/wp-content/uploads/2019/07/Box-Loading-1-1.gif') no-repeat 50% 50%;
            }
        </style>
    </head>
    <body class="antialiased">

    	<div class="container-fluid justify-content-center text-center">

            <!-- Отображение валидационных ошибок -->
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

			<!-- БЛОК: Ссылка на профиль -->
			<div class="row">
				<a class="" href="{{ route('userHomePage',  ['slug' => Auth::user()->slug]) }}" style="text-decoration: none; border: 0; padding: 0">
					<div class="col-12">
						<div class="box-part text-center shadow" style="margin: 0; background-color: #ffe0db">
							<div class="d-flex justify-content-center">
                                <div class="img" style="background-image: url({{$user->avatar}});"></div>
                            </div>
							<div class="title">
								<h4 class="mt-3" style="font-family: 'Rubik', sans-serif; color: #464646; font-weight: 600 ;">{{ $user->name }}</h4>
							</div>
							<div class="text mb-1">
							<span style="font-family: 'Rubik', sans-serif; font-size: 75%; line-height: 16px; display:block; color: #464646;">@lang('app.profile_link')</span>
						</div>
						</div>
					</div>
				</a>
			</div>

            <!-- БЛОК: Добавить ссылку или пост -->
            <div class="row" style="margin-right: 0">
				<div class="col-12" style="padding-right: 7px; padding: 0">
					<div class="row d-flex justify-content-start shadow" style="background-color: #ffbdb3">
						<div class="col-4" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
							<div class="imgg m-5" style="background-image: url(https://i.ibb.co/SvCxHnG/zzzzz.png);"></div>
						</div>
						<div class="col-8 d-flex align-items-center" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
							<div class="row">
								<div class="col-12">
									<h4  class="mt-4 text-start" style="font-family: 'Rubik', sans-serif; color: white; font-weight: 600 ;">@lang('app.add_link')</h4>
								</div>
								<div class="col-12">
									<h4  class="mb-3 text-start" style="font-family: 'Rubik', sans-serif; color: white; font-size: 0.7rem">@lang('app.add_link_description')</h4>
								</div>
							</div>
						</div>
                        <div class="collapse" id="collapseExample" style="padding: 0">
                            <div class="card card-body" style="background-color: #ffbdb3; border: 0; padding-left: 28px; padding-bottom: 0; padding-top: 0">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-6 text-center" data-bs-toggle="modal" data-bs-target="#exampleModalLink">
                                        <div class="row">
                                            <div class="col-12">
                                                <h4 class="mt-4 text-center" style="font-family: 'Rubik', sans-serif; color: white; font-weight: 600 ;">@lang('app.link')</h4>
                                            </div>
                                            <div class="col-12">
                                                <h4 class="mb-3 text-center" style="font-family: 'Rubik', sans-serif; color: white; font-size: 0.7rem">@lang('app.link_description')</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 text-center" data-bs-toggle="modal" data-bs-target="#exampleModalPost">
                                        <div class="row">
                                            <div class="col-12">
                                                <h4 class="mt-4 text-center" style="font-family: 'Rubik', sans-serif; color: white; font-weight: 600 ;">@lang('app.post')</h4>
                                            </div>
                                            <div class="col-12">
                                                <h4 class="mb-3 text-center" style="font-family: 'Rubik', sans-serif; color: white; font-size: 0.7rem">@lang('app.post_description')</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>

            <!-- БЛОК: Все ссылки -->
			<div class="row" style="margin-right: 0">
				<a class="" href="{{ route('allLinks', ['id' => Auth::user()->id]) }}" style="text-decoration: none; border: 0; padding: 0">
					<div class="col-12">
						<div class="row shadow" style="background-color: #fe948d">
							<div class="col-4">
								<div class="imgg m-5" style="background-image: url(https://i.ibb.co/k4ykGnT/xxxxx.png);"></div>
							</div>
							<div class="col-8 d-flex align-items-center">
								<div class="row">
									<div class="col-12">
										<h4 class="mt-4 text-start" style="font-family: 'Rubik', sans-serif; color: white; font-weight: 600 ;">@lang('app.all_links')</h4>
									</div>
									<div class="col-12">
										<h4 class="mb-3 text-start" style="font-family: 'Rubik', sans-serif; color: white; font-size: 0.7rem">@lang('app.all_links_description')</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>

            <!-- БЛОК: татистика профиля -->
			<div class="row" style="margin-right: 0">
				<div class="col-12" data-bs-toggle="modal" data-bs-target="#exampleModalStat" style="padding-left: 7px; padding: 0">
					<div class="row shadow" style="background-color: #fe7968">
						<div class="col-4">
							<div class="imgg m-5" style="background-image: url(https://i.ibb.co/djxLR3S/ccccc.png);"></div>
						</div>
						<div class="col-8 d-flex align-items-center">
							<div class="row">
								<div class="col-12">
									<h4 class="mt-4 text-start" style="font-family: 'Rubik', sans-serif; color: white; font-weight: 600 ;">@lang('app.stats')</h4>
								</div>
								<div class="col-12">
									<h4 class="mb-3 text-start" style="font-family: 'Rubik', sans-serif; color: white; font-size: 0.7rem">@lang('app.stats_description')</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

            <!-- БЛОК: Настройки -->
			<div class="row" style="margin-right: 0">
				<div class="col-12" data-bs-toggle="modal" data-bs-target="#exampleModal" style="padding-right: 7px; padding: 0">
					<div class="row shadow" style="background-color: #ec4f43">
						<div class="col-4">
							<div class="imgg m-5" style="background-image: url(https://i.ibb.co/3vmRBDy/vvvvvvvv.png);"></div>
						</div>
						<div class="col-8 d-flex align-items-center">
							<div class="row">
								<div class="col-12">
									<h4 class="mt-4 text-start" style="font-family: 'Rubik', sans-serif; color: white; font-weight: 600 ;">@lang('app.settings')</h4>
								</div>
								<div class="col-12">
									<h4 class="mb-3 text-start" style="font-family: 'Rubik', sans-serif; color: white; font-size: 0.7rem">@lang('app.settings_description')</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

            <!-- БЛОК: Выход -->
			<div class="row" >
                <div class="col-12" style="padding-right: 7px; padding: 0">
					<div class="box-part text-center shadow-sm " style="margin: 0; background-color: white; padding-top: 10px; padding-bottom: 10px">
                        <div class="d-flex justify-content-center text-center">
                            <form method="POST" action="{{ route('logout') }}">
								@csrf
								<button class="nav-link text-muted mt-2" style="padding:  0; border: 0; outline: none; background-color:white;">
									<h4 style="font-family: 'Rubik', sans-serif; font-size: 1rem">@lang('app.exit')</h4>
								</button>
							</form>
                        </div>
					</div>
				</div>
            </div>

            <!-- Модалка для добавления ссылок -->
			<div class="modal fade" id="exampleModalLink" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background-color: #1b1b1b">
		  		<div class="modal-dialog">
				    <div class="modal-content text-center" style="background-color: #FBF6EA">
				    	<div class="modal-header">
				        	<h5 class="modal-title" style="font-family: 'Rubik', sans-serif;">@lang('app.m_add_link')</h5>
				        	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      	</div>
				      	<div class="modal-body">
				        <form action="{{ route('addLink', ['id' => Auth::user()->id]) }}" method="post" enctype="multipart/form-data">
			        		@csrf @method('POST')
		        			<div class="mb-3">
						    	<label for="exampleInputEmail1" class="form-label" style="font-family: 'Rubik', sans-serif; ">@lang('app.m_text_link')</label>
						    	<input type="text" class="form-control" name="title" placeholder="" maxlength="50">
						    	<span style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">@lang('app.m_text_link_span')</span>
						    </div>
						    <div class="mb-3">
						    	<label for="exampleInputEmail1" class="form-label" style="font-family: 'Rubik', sans-serif;">@lang('app.m_insert_link')</label>
						    	<input type="text" class="form-control" name="link">
						    </div>
                            <label for="exampleInputEmail1" class="form-label mb-2" style="font-family: 'Rubik', sans-serif;">@lang('app.m_icon')</label>
                            <div class="mb-3">
                                <select id="select-beast-empty" data-placeholder="Поиск иконки..."  autocomplete="off" name="icon">
                                </select>
                                <span style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">@lang('app.m_icon_description')</span>
                            </div>
                            <div class="mb-3" id="download-file">
						    	<label for="exampleInputEmail1" class="form-label" style="font-family: 'Rubik', sans-serif;">@lang('app.m_photo')</label>
						    	<input type="file" class="form-control" id="inputGroupFile02" name="photo" accept=".jpg, .jpeg, .png, .gif">
						    	<span style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">@lang('app.m_photo_description')</span>
						    </div>
                            <label style="background-color: #ffbdb3" for="exampleInputEmail1" class="form-label mb-2" style="font-family: 'Rubik', sans-serif; font-size: 0.7rem">@lang('app.last_style_1')</label>
                            <div class="mb-4 text-center" style="background-color: #ffbdb3">
                                <div class="form-check" style="background-color: #ffbdb3">
                                    <input name="check_last_link" class="form-check-input" type="checkbox" value="penis" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        @lang('app.last_style_2')
                                    </label>
                                </div>
                            </div>
						    <label for="exampleInputEmail1" class="form-label mb-2" style="font-family: 'Rubik', sans-serif;">@lang('app.m_title_color')</label>
						  	<div class="mb-3 text-center d-flex justify-content-center">
								<input type="color" class="form-control" id="exampleColorInput" value="#050507" title="Choose your color" name="title_color" style="height: 40px;"><br>
								<span style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">@lang('app.m_title_color_description')</span>
						  	</div>
						  	<label for="exampleInputEmail1" class="form-label mb-2" style="font-family: 'Rubik', sans-serif;">@lang('app.m_background_color')</label>
						  	<div class="mb-3 text-center d-flex justify-content-center">
								<input type="color" class="form-control " id="exampleColorInput" value="#ECECE2" title="Choose your color" name="background_color" style="height: 40px;">
								<span style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">@lang('app.m_background_color_description')</span>
						  	</div>
                            <label for="exampleInputEmail1" class="form-label mb-2" style="font-family: 'Rubik', sans-serif;">@lang('app.m_transparency')</label>
                            <div class="mb-3 text-center d-flex justify-content-center">
                                <input type="range" class="form-range" min="0.0" max="1.0" step="0.1" id="customRange2" name="transparency" value="1.0">
                            </div>
                            <label for="exampleInputEmail1" class="form-label mb-2" style="font-family: 'Rubik', sans-serif;">@lang('app.m_shadow')</label>
						  	<div class="mb-3 text-center d-flex justify-content-center">
								<div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="shadow" id="inlineRadio1" value="shadow-none">
                                    <label class="form-check-label" for="inlineRadio1">none</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="shadow" id="inlineRadio2" value="shadow-sm">
                                    <label class="form-check-label" for="inlineRadio2">sm</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="shadow" id="inlineRadio3" value="shadow">
                                    <label class="form-check-label" for="inlineRadio3">md</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="shadow" id="inlineRadio3" value="shadow-lg">
                                    <label class="form-check-label" for="inlineRadio3">lg</label>
                                </div>
						  	</div>
                            <label for="exampleInputEmail1" class="form-label mb-2" style="font-family: 'Rubik', sans-serif;">@lang('app.m_round')</label>
                            <div class="mb-3 text-center d-flex justify-content-center">
                                <input type="range" class="form-range" min="1" max="50" step="1" id="customRange2" name="rounded" value="25">
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">@lang('app.m_add_link')</button>
                              </div>
							</div>
				        </form>
				    </div>
				</div>
		  	</div>

            <!-- Модалка для добавления поста -->
            <div class="modal fade" id="exampleModalPost" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background-color: #1b1b1b" id="add-post-modal">
                <div class="modal-dialog">

                        <div class="modal-content text-center" style="background-color: white">
                            <div class="modal-header">
                                <h5 class="modal-title" style="font-family: 'Rubik', sans-serif;">@lang('app.p_add')</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-post-modal"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('addPost', ['id' => Auth::user()->id]) }}" method="post" enctype="multipart/form-data" id="add-post">
                                    @csrf @method('POST')
                                    <input type="hidden" value="POST" name="type"> <!-- Тип ссылки -->
                                    <div class="mb-3"> <!-- Заголовок -->
                                        <label for="exampleInputEmail1" class="form-label" style="font-family: 'Rubik', sans-serif; ">@lang('app.p_title')</label>
                                        <input type="text" class="form-control" name="title" id="title" placeholder="" maxlength="100">
                                        <span style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">@lang('app.p_title_description')</span>
                                    </div>
                                    <div class="mb-3"> <!-- Полный текст -->
                                        <label for="exampleInputEmail1" class="form-label" style="font-family: 'Rubik', sans-serif; ">@lang('app.p_text')</label>
                                        <textarea class="form-control"  rows="3" name="full_text" id="full_text"></textarea>
                                        <span style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">@lang('app.p_free_text')</span>
                                    </div>
                                    <div class="mb-3"> <!-- Ссылка на источник -->
                                        <label for="exampleInputEmail1" class="form-label" style="font-family: 'Rubik', sans-serif;">@lang('app.p_link')</label>
                                        <input type="text" class="form-control" name="link" id="link">
                                        <span style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">@lang('app.p_description_link')</span>
                                    </div>
                                    <div class="mb-3"> <!-- Фотографии -->
                                        <div style="display: none" id="maxPhoto">
                                            <p><h6>@lang('app.p_photos_rule')</h6></p>
                                        </div>
                                        <label for="exampleInputEmail1" class="form-label" style="font-family: 'Rubik', sans-serif;">@lang('app.p_photos')</label>
                                        <input type="file" class="form-control" id="inputGroupFile022" name="photos[]" accept=".png, .jpg, .jpeg" multiple>
                                        <span style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">@lang('app.p_photos_description')</span>
                                    </div>
                                    <div class="mb-3"> <!-- Ссылка на видео -->
                                        <label for="exampleInputEmail1" class="form-label" style="font-family: 'Rubik', sans-serif;">@lang('app.p_video')</label>
                                        <textarea class="form-control"  rows="2" name="video" id="video"></textarea>
                                        <span style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">@lang('app.p_video_description')</span>
                                    </div>
                                    <div class="mb-4"> <!-- Ссылка на любое медиа -->
                                        <label for="exampleInputEmail1" class="form-label" style="font-family: 'Rubik', sans-serif;">@lang('app.p_media')</label>
                                        <textarea class="form-control"  rows="2" name="media" id="media"></textarea>
                                        <span style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">@lang('app.p_media_description')</span>
                                    </div>
                                    <label style="background-color: #ffbdb3" for="exampleInputEmail1" class="form-label mb-2" style="font-family: 'Rubik', sans-serif; font-size: 0.7rem">Поставив здесь галочку, вам не нужно будет дальше заполнять форму и выбирать стиль ссылки, тк будет использован стиль вашей последней ссылки.</label>
                                    <div class="mb-4 text-center" style="background-color: #ffbdb3">
                                        <div class="form-check" style="background-color: #ffbdb3">
                                            <input name="check_last_link" class="form-check-input" type="checkbox" value="penis" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Использовать дизайн последней ссылки
                                            </label>
                                        </div>
                                    </div>
                                    <label for="exampleInputEmail1" class="form-label mb-2" style="font-family: 'Rubik', sans-serif;">@lang('app.p_title_color')</label>
                                    <div class="mb-3 text-center d-flex justify-content-center"> <!-- выбор цвета на заголовок -->
                                        <input type="color" class="form-control" id="exampleColorInput" value="#050507" title="Choose your color" name="title_color" style="height: 40px;"><br>
                                        <span style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">@lang('app.p_title_color_def')</span>
                                    </div>
                                    <label for="exampleInputEmail1" class="form-label mb-2" style="font-family: 'Rubik', sans-serif;">@lang('app.p_background_color')</label>
                                    <div class="mb-3 text-center d-flex justify-content-center"> <!-- выбор цвета на фон -->
                                        <input type="color" class="form-control " id="exampleColorInput" value="#ECECE2" title="Choose your color" name="background_color" style="height: 40px;">
                                        <span style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">@lang('app.p_background_color_def')</span>
                                    </div>
                                    <label for="exampleInputEmail1" class="form-label mb-2" style="font-family: 'Rubik', sans-serif;">@lang('app.p_transparency')</label>
                                    <div class="mb-3 text-center d-flex justify-content-center"> <!-- выбор прозрачности фона -->
                                        <input type="range" class="form-range" min="0.0" max="1.0" step="0.1" id="customRange2" name="transparency" value="1.0">
                                    </div>
                                    <label for="exampleInputEmail1" class="form-label mb-2" style="font-family: 'Rubik', sans-serif;">@lang('app.p_shadow')</label>
                                    <div class="mb-3 text-center d-flex justify-content-center"> <!-- Добавить тень -->
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="shadow" id="inlineRadio1" value="shadow-none">
                                            <label class="form-check-label" for="inlineRadio1">none</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="shadow" id="inlineRadio2" value="shadow-sm">
                                            <label class="form-check-label" for="inlineRadio2">sm</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="shadow" id="inlineRadio3" value="shadow">
                                            <label class="form-check-label" for="inlineRadio3">md</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="shadow" id="inlineRadio3" value="shadow-lg">
                                            <label class="form-check-label" for="inlineRadio3">lg</label>
                                        </div>
                                    </div>
                                    <label for="exampleInputEmail1" class="form-label mb-2" style="font-family: 'Rubik', sans-serif;">@lang('app.p_round')</label>
                                    <div class="mb-3 text-center d-flex justify-content-center"> <!-- Добивить округление углов -->
                                        <input type="range" class="form-range" min="1" max="50" step="1" id="customRange2" name="rounded" value="25">
                                    </div>
                                    <div class="loader" id="in-pogress" style="display: none;" class="mb-3">
                                        {{-- <img src="https://f.hubspotusercontent40.net/hubfs/5621549/ping-pong-preloader-gif.gif" width="150">
                                        <h5 style="font-family: 'Rubik', sans-serif; font-size: 1rem">Идет обработка изображений. Подождите...</h5> --}}
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button id="post-btn" type="submit" class="btn btn-primary">@lang('app.p_publish')</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                </div>
            </div>


            <!-- Модалка для статистики по профилю -->
            <div class="modal fade" id="exampleModalStat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background-color: #1b1b1b">
                <div class="modal-dialog">
                    <div class="modal-content text-center" style="background-color: #FBF6EA">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">@lang('app.s_stats')</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="padding: 0">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        @lang('app.s_day')
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-center">
                                        <h1 class="display-4" style="margin: 0">{{count($day['stat'])}}</h1>
                                        <h1 class="display-4 mb-3" style="font-size: 1rem">@lang('app.s_profile_show')</h1>
										<ul class="list-group mb-3">
											@foreach($day['uniqueCity'] as $c)
											<li class="list-group-item d-flex justify-content-between align-items-center" style="border-top: 0; border-left: 0; border-right: 0; border-radius: 0">
												{{$c->city}}
											  	<span class="badge bg-light" style="color: black">{{$c->count}}</span>
											</li>
											@endforeach
										</ul>
										<h1 class="display-4" style="font-size: 1rem">@lang('app.s_countries')</h1>
										<ul class="list-group mb-3">
											@foreach($day['uniqueCountry'] as $c)
											<li class="list-group-item d-flex justify-content-between align-items-center" style="border-top: 0; border-left: 0; border-right: 0; border-radius: 0">
												{{$c->country}}
											  	<span class="badge bg-light" style="color: black">{{$c->count}}</span>
											</li>
											@endforeach
										</ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        @lang('app.s_month')
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-center">
                                        <h1 class="display-4" style="margin: 0">{{count($month['stat'])}}</h1>
                                        <h1 class="display-4 mb-3" style="font-size: 1rem">@lang('app.s_profile_show')</h1>
										<ul class="list-group mb-3">
											@foreach($month['uniqueCity'] as $c)
											<li class="list-group-item d-flex justify-content-between align-items-center" style="border-top: 0; border-left: 0; border-right: 0; border-radius: 0">
												{{$c->city}}
											  	<span class="badge bg-light" style="color: black">{{$c->count}}</span>
											</li>
											@endforeach
										</ul>
										<h1 class="display-4" style="font-size: 1rem">@lang('app.s_countries')</h1>
										<ul class="list-group mb-3">
											@foreach($month['uniqueCountry'] as $c)
											<li class="list-group-item d-flex justify-content-between align-items-center" style="border-top: 0; border-left: 0; border-right: 0; border-radius: 0">
												{{$c->country}}
											  	<span class="badge bg-light" style="color: black">{{$c->count}}</span>
											</li>
											@endforeach
										</ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        @lang('app.s_year')
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-center">
                                        <h1 class="display-4" style="margin: 0">{{count($year['stat'])}}</h1>
                                        <h1 class="display-4 mb-3" style="font-size: 1rem">@lang('app.s_profile_show')</h1>
										<ul class="list-group mb-3">
											@foreach($year['uniqueCity'] as $c)
											<li class="list-group-item d-flex justify-content-between align-items-center" style="border-top: 0; border-left: 0; border-right: 0; border-radius: 0">
												{{$c->city}}
											  	<span class="badge bg-light" style="color: black">{{$c->count}}</span>
											</li>
											@endforeach
										</ul>
										<h1 class="display-4" style="font-size: 1rem">@lang('app.s_countries')</h1>
										<ul class="list-group mb-3">
											@foreach($year['uniqueCountry'] as $c)
											<li class="list-group-item d-flex justify-content-between align-items-center" style="border-top: 0; border-left: 0; border-right: 0; border-radius: 0">
												{{$c->country}}
											  	<span class="badge bg-light" style="color: black">{{$c->count}}</span>
											</li>
											@endforeach
										</ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        @lang('app.s_all')
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-center">
                                        <h1 class="display-4" style="margin: 0">{{count($all['stat'])}}</h1>
                                        <h1 class="display-4 mb-3" style="font-size: 1rem">@lang('app.s_profile_show')</h1>
										<ul class="list-group mb-3">
											@foreach($all['uniqueCity'] as $c)
											<li class="list-group-item d-flex justify-content-between align-items-center" style="border-top: 0; border-left: 0; border-right: 0; border-radius: 0">
												{{$c->city}}
											  	<span class="badge bg-light" style="color: black">{{$c->count}}</span>
											</li>
											@endforeach
										</ul>
										<h1 class="display-4" style="font-size: 1rem">@lang('app.s_countries')</h1>
										<ul class="list-group mb-3">
											@foreach($all['uniqueCountry'] as $c)
											<li class="list-group-item d-flex justify-content-between align-items-center" style="border-top: 0; border-left: 0; border-right: 0; border-radius: 0">
												{{$c->country}}
											  	<span class="badge bg-light" style="color: black">{{$c->count}}</span>
											</li>
											@endforeach
										</ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>

			<!-- Модалка для редактирования профиля -->
			<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background-color: #1b1b1b">
		  		<div class="modal-dialog">
				    <div class="modal-content text-center" style="background-color: #FBF6EA">
				    	<div class="modal-header">
				        	<h5 class="modal-title" style="font-family: 'Rubik', sans-serif;">@lang('app.p_edit')</h5>
				        	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      	</div>
				      	<div class="modal-body">
				      		@if($user->avatar)
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label" style="font-family: 'Rubik', sans-serif;">@lang('app.p_ava')</label><br>
                                    <div class="row d-flex align-items-center justify-content-center">
                                        <div class="col-4">
                                            <img src="{{$user->avatar}}" class="img-fluid" width="70px">
                                        </div>
                                        <div class="col-8">
                                            <form action="{{ route('delUserAvatar', ['id' => $user->id]) }}" method="POST">
                                                @csrf @method('PATCH')
                                                <button type="submit" class="btn btn-light mb-3 mt-3" style="font-family: 'Rubik', sans-serif; ">@lang('app.p_ava_del')</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
				      		@endif
				      		@if($user->banner)
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label" style="font-family: 'Rubik', sans-serif;">@lang('app.p_photo')</label><br>
                                    <div class="row d-flex align-items-center justify-content-center">
                                        <div class="col-4">
                                            <img src="{{$user->banner}}" class="img-fluid" width="70px">
                                        </div>
                                        <div class="col-8">
                                            <form action="{{ route('delUserBanner', ['id' => $user->id]) }}" method="POST">
                                                @csrf @method('PATCH')
                                                <button type="submit" class="btn btn-light mb-3 mt-3" style="font-family: 'Rubik', sans-serif; ">@lang('app.p_photo_del')</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
				      		@endif
				        	<form action="{{ route('editUserProfile', ['id' => Auth::user()->id]) }}" method="post" enctype="multipart/form-data">
					        	@csrf @method('PATCH')
							  	<div class="mb-3">
							    	<label for="exampleInputEmail1" class="form-label" style="font-family: 'Rubik', sans-serif;">@lang('app.p_name')</label>
							    	<input value="{{$user->name}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" placeholder="{{$user->name}}" maxlength="100">
							    	<span style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">@lang('app.p_name_descr')</span>
							  	</div>
							  	<label for="exampleInputEmail1" class="form-label mb-2" style="font-family: 'Rubik', sans-serif;">@lang('app.p_name_color')</label>
							  	<div class="mb-3 text-center d-flex justify-content-center">
									<input type="color" class="form-control " id="exampleColorInput" value="{{$user->name_color}}" title="Choose your color" name="name_color" style="height: 40px;">
									<span style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">@lang('app.p_n_def')</span>
							  	</div>
							  	<label for="exampleInputEmail1" class="form-label mb-2" style="font-family: 'Rubik', sans-serif;">@lang('app.page_adress')</label>
							  	<div class="input-group mb-3">
  									<span class="input-group-text" id="basic-addon3">chrry.me/</span>
  									<input placeholder="{{$user->slug}}" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="slug" description="{{$user->slug}}" maxlength="150">
  									<span style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">@lang('app.page_adress_descr')</span>
								</div>
							  	<div class="mb-3">
							    	<label for="exampleFormControlTextarea1" class="form-label" style="font-family: 'Rubik', sans-serif;">@lang('app.page_descr')</label>
				  					<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" maxlength="150">{{$user->description}}</textarea>
				  					<span style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">@lang('app.p_page_descr_descr')</span>
							  	</div>
							  	<label for="exampleInputEmail1" class="form-label mb-2" style="font-family: 'Rubik', sans-serif;">@lang('app.p_color_descr')</label>
							  	<div class="mb-3 text-center d-flex justify-content-center">
									<input type="color" class="form-control " id="exampleColorInput" value="{{$user->description_color}}" title="Choose your color" name="description_color" style="height: 40px;">
									<span style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">@lang('app.p_color_descr_def')</span>
							  	</div>
							  	@if($user->verify == 1)
								  	<label for="exampleInputEmail1" class="form-label mb-2" style="font-family: 'Rubik', sans-serif;">@lang('app.verif_icon_color')</label>
								  	<div class="mb-3 text-center d-flex justify-content-center">
										<input type="color" class="form-control " id="exampleColorInput" value="{{$user->verify_color}}" title="Choose your color" name="verify_color" style="height: 40px;">
										<span style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">@lang('app.p_v_i_c_def')</span>
								  	</div>
							  	@endif
							  	<label for="exampleInputEmail1" class="form-label" style="font-family: 'Rubik', sans-serif;">@lang('app.p_background_color')</label><br>
							  	<label for="exampleInputEmail1" class="form-label mb-2" style="font-family: 'Rubik', sans-serif; font-size:0.7rem">@lang('app.p_background_color')</label>
							  	<div class="mb-3 text-center d-flex justify-content-center">
									<input type="color" class="form-control " id="exampleColorInput" value="{{$user->background_color}}" title="Choose your color" name="background_color" style="height: 40px;">
							  	</div>
							  	<label for="exampleInputEmail1" class="form-label" style="font-family: 'Rubik', sans-serif;">@lang('app.p_download_ava')</label>
							  	<div class="input-group mb-3">
							  		<input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="avatar">
							  		<span style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">@lang('app.p_download_ava_rules')</span>
								</div>

                                <label for="exampleInputEmail1" class="form-label" style="font-family: 'Rubik', sans-serif;">@lang('app.p_select_lang')</label>
                                <select name="locale" class="form-select" aria-label="Default select example">
                                    <option selected>@lang('app.p_select')</option>
                                    <option value="ru">Русский</option>
                                    <option value="en">English</option>
                                </select>

								<label for="exampleInputEmail1" class="form-label" style="font-family: 'Rubik', sans-serif;">@lang('app.p_background_img')</label>
							  	<div class="input-group mb-3">
							  		<input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="banner">
							  		<span style="font-family: 'Rubik', sans-serif; font-size: 0.8rem;">@lang('app.p_background_img_descr')</span>
								</div>
							  	<button type="submit" class="btn btn-dark mb-3 mt-3" style="font-family: 'Rubik', sans-serif; ">@lang('app.p_edit_prof')</button>
							</form>
				      	</div>
				    </div>
		  		</div>
			</div>
    	</div>



        <!-- ХЗ блять че это? -->
        <script>
            $(function(){
                $("input[type='submit']").click(function(){
                    var $fileUpload = $("input[type='file']");
                    if (parseInt($fileUpload.get(0).files.length)>2){
                    alert("You can only upload a maximum of 2 files");
                    }
                });
            });​
        </script>

        <!-- Скрипт подгрузки иконок соц сетей -->

        <script>
            new TomSelect('#select-beast-empty',{
                valueField: 'img',
                searchField: 'title',
                options: [
                    @foreach($allIconsInsideFolder as $icon)
                    {id: {{$icon->getInode()}}, title: '{{$icon->getFilename()}}', img: '{{'http://links/public/images/social/'.$icon->getFilename()}}'},
                    @endforeach
                ],
                render: {
                    option: function(data, escape) {
                        return '<div>' +
                                '<img style="margin-right: 16px" width="30" src="' + escape(data.img) + '">' +
                                '<span class="title">' + escape(data.title) + '</span>' +
                            '</div>';
                    },
                    item: function(data, escape) {
                        return  '<img style="margin-right: 16px" width="30" src="' + escape(data.img) + '">' + '<span class="title">' + escape(data.title) + '</span>';
                    }
                }
            });
        </script>


        <!-- Скрипт скрыть поле если выбрана иконка -->
        <script>
            $( document ).ready(function() {
                $('#select-beast-empty').change(function(){
                    $('#pp').html($(this).val());
                    if($(this).val() != '') {
                        $('#download-file').hide();
                    }
                    if($(this).val() == '') {
                        $('#download-file').show();
                    }
                });
            });
        </script>

        <!-- Прелоадер -->
        <script>
            $( document ).ready(function() {
                $('#post-btn').click(function(){
                    $('#in-pogress').show();
                });
            });
        </script>

        {{-- <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $( "#add-post" ).submit(function( e ) {
                e.preventDefault();

                var formData = new FormData(this);

                $.ajax({
                    type: "POST",
                    @if(Auth::check())
                    url: "{{route('addPost', ['id' => Auth::user()->id])}}",
                    @endif
                    data: formData,
                    beforeSend: function() {
                        $("#in-pogress").html("Обработка изображений. Подождите...");
                    },
                    success: function (data) {
                        console.log('nice');
                        //Close modals
                        $("#close-post-modal").click();
                        //Clear fields
						$('#title').val('').change();
                        $('#full_text').val('').change();
                        $('#link').val('').change();
                        $('#inputGroupFile022').val('').change();
                        $('#video').val('').change();
                        $('#media').val('').change();

                        $("#in-pogress").hide();
                    },
                    error: function(data) {
                        $("#errors").show();
                    },
                    contentType: false,
                    processData: false,
                });
            });
        </script> --}}

    </body>
</html>









