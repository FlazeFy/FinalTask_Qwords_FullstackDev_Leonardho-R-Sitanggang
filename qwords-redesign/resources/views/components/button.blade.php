@if($type == "dropdown_nav")
    <a class="nav_link" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">{{$main_title}} <i class="fa-solid fa-chevron-down"></i></a>
    <ul class="dropdown-menu mt-5" aria-labelledby="dropdownMenuLink">
        @foreach($sub_menu as $sm)
            <li>
                <a class="dropdown-item" href="{{$sm['link']}}">
                    <div class="d-inline">
                        <img src="{{$sm['icon']}}" style="width:40px;">
                    </div>
                    <div class="d-inline">
                        <b>{{$sm['title']}}</b>
                        <p>{{$sm['desc']}}</p>
                    </div>
                </a>
            </li>
        @endforeach
    </ul>
@endif