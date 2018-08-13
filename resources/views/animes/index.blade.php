@extends('layouts.main')
@section('content')
    <article class="content items-list-page">
        <div class="title-search-block">
            <div class="title-block">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="title"> Animes
                            <a href="#" class="btn btn-primary btn-sm rounded-s"> Nuevo </a>
                            <div class="action dropdown">
                                <button class="btn  btn-sm rounded-s btn-secondary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> More actions... </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <a class="dropdown-item" href="#">
                                        <i class="fa fa-pencil-square-o icon"></i>Mark as a draft</a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#confirm-modal">
                                        <i class="fa fa-close icon"></i>Delete</a>
                                </div>
                            </div>
                        </h3>
                        <p class="title-description"> Listado </p>
                    </div>
                </div>
            </div>
            <div class="items-search">
                <form class="form-inline">
                    <div class="input-group">
                        <input type="text" class="form-control boxed rounded-s" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary rounded-s" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <div class="card items">
            <ul class="item-list striped">
                <li class="item item-list-header">
                    <div class="item-row">
                        <div class="item-col item-col-header fixed item-col-check">
                            <div>
                                <span>N°</span>
                            </div>
                        </div>
                        <div class="item-col item-col-header fixed item-col-img">
                            <div>
                                <span>Imagen</span>
                            </div>
                        </div>
                        <div class="item-col item-col-header item-col-title">
                            <div>
                                <span>Título</span>
                            </div>
                        </div>
                        <div class="item-col item-col-header item-col-fansub">
                            <div>
                                <span>Fansub</span>
                            </div>
                        </div>
                        <div class="item-col item-col-header item-col-tipo">
                            <div class="no-overflow">
                                <span>Tipo</span>
                            </div>
                        </div>
                        <div class="item-col item-col-header item-col-episodios">
                            <div class="no-overflow">
                                <span>Eps.</span>
                            </div>
                        </div>
                        <div class="item-col item-col-header item-col-fuente">
                            <div class="no-overflow">
                                <span>Fuente</span>
                            </div>
                        </div>
                        <div class="item-col item-col-header item-col-video">
                            <div class="no-overflow">
                                <span>Video</span>
                            </div>
                        </div>
                        <div class="item-col item-col-header item-col-audio">
                            <div class="no-overflow">
                                <span>Audio</span>
                            </div>
                        </div>
                        <div class="item-col item-col-header item-col-date">
                            <div>
                                <span>Temp.</span>
                            </div>
                        </div>
                        <div class="item-col item-col-header fixed item-col-actions-dropdown"> </div>
                    </div>
                </li>
                <li class="item">
                    <div class="item-row">
                        <div class="item-col fixed item-col-check">
                            <div>10</div>
                        </div>
                        <div class="item-col fixed item-col-img py-1">
                            <a href="#">
                                <div class="item-img rounded" style="background-image: url(https://res.cloudinary.com/dua4oyonw/image/upload/v1532831734/isekai-no-seikishi-monogatari.101025.jpg)"></div>
                            </a>
                        </div>
                        <div class="item-col fixed pull-left item-col-title">
                            <div class="item-heading">Título</div>
                            <div class="colum-title">
                                <a href="#">
                                    <h4 class="item-title">
                                        Ore no Nounai Sentakushi ga, Gakuen Love Comedy wo Zenryoku de Jama Shiteiru
                                    </h4>
                                </a>
                            </div>
                            <div class="colum-fansub">
                                <a href="#">Fabrebata18</a>,
                                <a href="#">Waqarahmed14</a>
                            </div>
                        </div>
                        <div class="item-col item-col-fansub">
                            <div class="item-heading">Fansub</div>
                            <div>
                                <a href="#">Kamonohashi no Fansub</a>,
                                <a href="#">Tai-Rei Fansubs</a>
                            </div>
                        </div>
                        <div class="item-col item-col-tipo">
                            <div class="item-heading">Tipo</div>
                            <div class="no-overflow">
                                <div>Especial</div>
                            </div>
                        </div>
                        <div class="item-col item-col-episodios">
                            <div class="item-heading episodios">Episodios</div>
                            <div class="item-heading episodios-sm">Eps.</div>
                            <div class="no-overflow">
                                <div>1000</div>
                            </div>
                        </div>
                        <div class="item-col item-col-fuente">
                            <div class="item-heading">Fuente</div>
                            <span class="fuente-anime" data-toggle="tooltip" data-placement="top" title="Bluray" style="background-image: url(http://127.0.0.1:8000/files/bluray.png)"></span>
                            <span class="fuente-anime" data-toggle="tooltip" data-placement="top" title="Bluray" style="background-image: url(http://127.0.0.1:8000/files/bluray.png)"></span>
                            <span class="fuente-anime" data-toggle="tooltip" data-placement="top" title="Bluray" style="background-image: url(http://127.0.0.1:8000/files/bluray.png)"></span>
                            <span class="fuente-anime" data-toggle="tooltip" data-placement="top" title="Bluray" style="background-image: url(http://127.0.0.1:8000/files/bluray.png)"></span>
                            <div class="fuente-info-sm">
                                <span class="fuente-anime-sm" data-toggle="tooltip" data-placement="top" title="Bluray" style="background-image: url(http://127.0.0.1:8000/files/bluray.png)"></span>
                                <span class="fuente-anime-sm" data-toggle="tooltip" data-placement="top" title="Bluray" style="background-image: url(http://127.0.0.1:8000/files/bluray.png)"></span>
                                <span class="fuente-anime-sm" data-toggle="tooltip" data-placement="top" title="Bluray" style="background-image: url(http://127.0.0.1:8000/files/bluray.png)"></span>
                                <span class="fuente-anime-sm" data-toggle="tooltip" data-placement="top" title="Bluray" style="background-image: url(http://127.0.0.1:8000/files/bluray.png)"></span>
                            </div>
                        </div>
                        <div class="item-col item-col-video">
                            <div class="item-heading">Video</div>
                            <div class="no-overflow disp-col">
                                <div class="video-info" data-toggle="tooltip" data-placement="top" title="Ep. 01-26">1920x1080 MKV H.264 <small>(Softsubs)</small></div>
                                <div class="video-info" data-toggle="tooltip" data-placement="top" title="Ep. 01-26">1920x1080 MKV H.264 <small>(Softsubs)</small></div>
                                <div class="video-info" data-toggle="tooltip" data-placement="top" title="Ep. 01-26">1920x1080 MKV H.264 <small>(Softsubs)</small></div>                               
                                <div class="video-info-sm" data-toggle="tooltip" data-placement="top" title="Ep. 01-26 (Softsubs)">1920x1080 MKV H.264</div>
                                <div class="video-info-sm" data-toggle="tooltip" data-placement="top" title="Ep. 01-26 (Softsubs)">1920x1080 MKV H.264</div>
                                <div class="video-info-sm" data-toggle="tooltip" data-placement="top" title="Ep. 01-26 (Softsubs)">1920x1080 MKV H.264</div>
                                @if (false)
                                    <a href="#">Más información</a>
                                    {{-- @break --}}
                                @endif 
                            </div>
                        </div>
                        @if (true)
                        <div class="item-col item-col-audio">
                            <div class="item-heading">Audio</div>
                            <div class="content-audio-info-main">
                                <div class="content-audio-info">
                                    <span class="audio-info" data-toggle="tooltip" data-placement="top" title="Japones" style="background-image: url(http://127.0.0.1:8000/files/jp.png)"></span>
                                    <span class="formato-canal">AAC 5.1</span>
                                </div>
                                <div class="content-audio-info">
                                    <span class="audio-info" data-toggle="tooltip" data-placement="top" title="Japones" style="background-image: url(http://127.0.0.1:8000/files/jp.png)"></span>
                                    <span class="formato-canal">AAC 5.1</span>
                                </div>
                                <div class="content-audio-info">
                                    <span class="audio-info" data-toggle="tooltip" data-placement="top" title="Japones" style="background-image: url(http://127.0.0.1:8000/files/jp.png)"></span>
                                    <span class="formato-canal">AAC 5.1</span>
                                </div>
                                <div class="content-audio-info">
                                    <span class="audio-info" data-toggle="tooltip" data-placement="top" title="Japones" style="background-image: url(http://127.0.0.1:8000/files/jp.png)"></span>
                                    <span class="formato-canal">AAC 5.1</span>
                                </div>    
                            </div>    
                        </div>   
                        @else
                        <div class="item-col item-col-audio max">
                            <div class="item-heading">Audio</div>
                            <div class="content-audio-info-main-sm">
                                <span class="audio-info" data-toggle="tooltip" data-placement="top" title="Japones AAC 5.1" style="background-image: url(http://127.0.0.1:8000/files/jp.png)"></span>
                                <span class="audio-info" data-toggle="tooltip" data-placement="top" title="Japones AAC 5.1" style="background-image: url(http://127.0.0.1:8000/files/jp.png)"></span>
                                <span class="audio-info" data-toggle="tooltip" data-placement="top" title="Japones AAC 5.1" style="background-image: url(http://127.0.0.1:8000/files/jp.png)"></span>
                                <span class="audio-info" data-toggle="tooltip" data-placement="top" title="Japones AAC 5.1" style="background-image: url(http://127.0.0.1:8000/files/jp.png)"></span>
                                <span class="audio-info" data-toggle="tooltip" data-placement="top" title="Japones AAC 5.1" style="background-image: url(http://127.0.0.1:8000/files/jp.png)"></span>
                                <span class="audio-info" data-toggle="tooltip" data-placement="top" title="Japones AAC 5.1" style="background-image: url(http://127.0.0.1:8000/files/jp.png)"></span>
                                <span class="audio-info" data-toggle="tooltip" data-placement="top" title="Japones AAC 5.1" style="background-image: url(http://127.0.0.1:8000/files/jp.png)"></span>
                                <span class="audio-info" data-toggle="tooltip" data-placement="top" title="Japones AAC 5.1" style="background-image: url(http://127.0.0.1:8000/files/jp.png)"></span>
                            </div>
                        </div>                            
                        @endif
                        <div class="item-col item-col-date">
                            <div class="item-heading temporada">Temporada</div>
                            <div class="item-heading temporada-sm">Temp.</div>
                            <div class="temporada-info">Primavera 2018</div>
                            <div class="temporada-info-sm">Prim. 2018</div>
                        </div>
                        <div class="item-col fixed item-col-actions-dropdown">
                            <div class="item-actions-dropdown">
                                <a class="item-actions-toggle-btn">
                                    <span class="inactive">
                                        <i class="fa fa-cog"></i>
                                    </span>
                                    <span class="active">
                                        <i class="fa fa-chevron-circle-right"></i>
                                    </span>
                                </a>
                                <div class="item-actions-block">
                                    <ul class="item-actions-list">
                                        <li>
                                            <a class="remove" href="#" data-toggle="modal" data-target="#confirm-modal">
                                                <i class="fa fa-trash-o "></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="edit" href="item-editor.html">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                @foreach ($animes as $anime)
                <li class="item">
                    <div class="item-row">
                        <div class="item-col fixed item-col-check">
                            <div>{{ $loop->iteration }}</div>
                        </div>
                        <div class="item-col fixed item-col-img py-1">
                            <a href="#">
                                <div class="item-img rounded" style="background-image: url(https://res.cloudinary.com/dua4oyonw/image/upload/v1532831734/isekai-no-seikishi-monogatari.101025.jpg)"></div>
                            </a>
                        </div>
                        <div class="item-col fixed pull-left item-col-title">
                            <div class="item-heading">Título</div>
                            <div class="colum-title">
                                <a href="#">
                                    <h4 class="item-title">
                                        {{ $anime->titulo }}
                                    </h4>
                                </a>
                            </div>
                            <div class="colum-fansub">
                                @foreach ($anime->fansubs as $fansub)
                                    @if (!$loop->last)
                                        <a href="#">{{ $fansub->nombre }}</a>,
                                    @else
                                        <a href="#">{{ $fansub->nombre }}</a>
                                    @endif  
                                @endforeach
                            </div>
                        </div>
                        <div class="item-col item-col-fansub">
                            <div class="item-heading">Fansub</div>
                            <div>
                                @foreach ($anime->fansubs as $fansub)
                                    @if (!$loop->last)
                                        <a href="#">{{ $fansub->nombre }}</a>,
                                    @else
                                        <a href="#">{{ $fansub->nombre }}</a>
                                    @endif  
                                @endforeach
                            </div>
                        </div>
                        <div class="item-col item-col-tipo">
                            <div class="item-heading">Tipo</div>
                            <div class="no-overflow">
                                {{ $anime->tipo->nombre }}
                            </div>
                        </div>
                        <div class="item-col item-col-episodios">
                            <div class="item-heading episodios">Episodios</div>
                            <div class="item-heading episodios-sm">Eps.</div>
                            <div class="no-overflow">
                                <div data-toggle="tooltip" data-placement="top" title="tamano">{{ $anime->episodios }}</div>
                            </div>
                        </div>
                        <div class="item-col item-col-fuente">
                            <div class="item-heading">Fuente</div>
                                @php
                                    $fuentes = $anime->agruparFuentes();
                                    
                                @endphp
                                @foreach ($fuentes as $fuenteVideo)
                                    @if ($loop->count>4 && $loop->iteration===4)
                                        <a href="#">Más información</a>
                                        @break
                                    @endif 
                                    <span class="fuente-anime" data-toggle="tooltip" data-placement="top" title="
                                    {{ $fuenteVideo->get('nombre') }}
                                    @foreach ($fuenteVideo->last() as $episodio)
                                    {{$episodio->get('ini').'-'.$episodio->get('fin')}}
                                    @endforeach
                                    " style="background-image: url({{ $fuenteVideo->get('imagen') }})"></span>                               
                                @endforeach
                                <div class="fuente-info-sm">
                                @foreach ($anime->videos as $video)
                                    @if ($loop->count>4 && $loop->iteration===4)
                                        <a href="#">Más información</a>
                                        @break
                                    @endif 
                                    <span class="fuente-anime-sm" data-toggle="tooltip" data-placement="top" title="{{ $video->fuente->nombre }}" style="background-image: url({{ $video->fuente->imagen }})"></span>                              
                                @endforeach
                            </div>
                        </div>
                        <div class="item-col item-col-video">
                            <div class="item-heading">Video</div>
                            <div class="no-overflow disp-col">
                                @foreach ($anime->videos as $video)
                                    @if ($loop->count>4 && $loop->iteration===4)
                                        <a href="#">Más información</a>
                                        @break
                                    @endif 
                                    <div class="video-info" data-toggle="tooltip" data-placement="top" title="Ep. {{ $video->episodio_ini.'-'.$video->episodio_fin }}">{{ $video->nombre }} <small>(Softsubs)</small></div>
                                    <div class="video-info-sm" data-toggle="tooltip" data-placement="top" title="Ep. 01-26 (Softsubs)">{{ $video->nombre }}</div>
                                @endforeach
                            </div>
                        </div>
                        @if (count($anime->audios) <= 4)
                        <div class="item-col item-col-audio">
                            <div class="item-heading">Audio</div>
                            <div class="content-audio-info-main">
                                @foreach ($anime->audios as $audio)
                                    <div class="content-audio-info">
                                        <span class="audio-info" data-toggle="tooltip" data-placement="top" title="{{ $audio->idioma->nombre }}" style="background-image: url({{ $audio->idioma->imagen }})"></span>
                                        <span class="formato-canal">{{ $audio->nombre }}</span> 
                                    </div>
                                @endforeach
                            </div>    
                        </div>   
                        @else
                        <div class="item-col item-col-audio max">
                            <div class="item-heading">Audio</div>
                            <div class="content-audio-info-main-sm">
                                @foreach ($anime->audios as $audio)
                                    <span class="audio-info" data-toggle="tooltip" data-placement="top" title="{{ $audio->idioma->nombre.' '.$audio->nombre }}" style="background-image: url({{ $audio->idioma->imagen }})"></span>
                                @endforeach
                            </div>
                        </div>                            
                        @endif
                        <div class="item-col item-col-date">
                            <div class="item-heading temporada">Temporada</div>
                            <div class="item-heading temporada-sm">Temp.</div>
                            {{-- {{ $anime->temporada->nombre }} --}}
                            <div class="temporada-info">Primavera 2018</div>
                            <div class="temporada-info-sm">Prim. 2018</div>
                        </div>
                        <div class="item-col fixed item-col-actions-dropdown">
                            <div class="item-actions-dropdown">
                                <a class="item-actions-toggle-btn">
                                    <span class="inactive">
                                        <i class="fa fa-cog"></i>
                                    </span>
                                    <span class="active">
                                        <i class="fa fa-chevron-circle-right"></i>
                                    </span>
                                </a>
                                <div class="item-actions-block">
                                    <ul class="item-actions-list">
                                        <li>
                                            <a class="remove" href="#" data-toggle="modal" data-target="#confirm-modal">
                                                <i class="fa fa-trash-o "></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="edit" href="item-editor.html">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>    
                @endforeach                
            </ul>
        </div>
        <nav class="text-right">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href=""> Prev </a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href=""> 1 </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href=""> 2 </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href=""> 3 </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href=""> 4 </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href=""> 5 </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href=""> Next </a>
                </li>
            </ul>
        </nav>
    </article>
@endsection