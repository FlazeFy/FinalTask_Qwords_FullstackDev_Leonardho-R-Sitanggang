<nav class="navbar navbar-expand-lg p-0">
    <div class="nav_holder">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
            <div class="container" style="width:200px;">
                <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/logo-qw-light.webp">
            </div>
            <div class="container">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                    <li class="nav_item">
                        @include('components.button', [
                            'type' => 'dropdown_nav', 
                            'main_title' => 'Cloud Hosting',
                            'sub_menu' => [ 
                                [
                                    'title' => 'Cloud Hosting Lite',
                                    'desc' => 'Lorem ipsum',
                                    'link' => '/',
                                    'icon' => 'https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/cloud%20hosting/Value%20Cloud%20Hsting.webp'
                                ],
                                [
                                    'title' => 'Cloud Hosting Lite',
                                    'desc' => 'Lorem ipsum',
                                    'link' => '/',
                                    'icon' => 'https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/cloud%20hosting/Value%20Cloud%20Hsting.webp'
                                ]
                            ]
                        ])
                    </li>
                    <li class="nav_item">
                        @include('components.button', [
                            'type' => 'dropdown_nav', 
                            'main_title' => 'Server',
                            'sub_menu' => [ 
                                [
                                    'title' => 'Menu 1',
                                    'desc' => 'Lorem ipsum',
                                    'link' => '/',
                                    'icon' => 'https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/cloud%20hosting/Value%20Cloud%20Hsting.webp'
                                ],
                                [
                                    'title' => 'Menu 2',
                                    'desc' => 'Lorem ipsum',
                                    'link' => '/',
                                    'icon' => 'https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/cloud%20hosting/Value%20Cloud%20Hsting.webp'
                                ]
                            ]
                        ])
                    </li>
                    <li class="nav_item">
                        @include('components.button', [
                            'type' => 'dropdown_nav', 
                            'main_title' => 'Domain',
                            'sub_menu' => [ 
                                [
                                    'title' => 'Menu 1',
                                    'desc' => 'Lorem ipsum',
                                    'link' => '/',
                                    'icon' => 'https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/cloud%20hosting/Value%20Cloud%20Hsting.webp'
                                ],
                                [
                                    'title' => 'Menu 2',
                                    'desc' => 'Lorem ipsum',
                                    'link' => '/',
                                    'icon' => 'https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/cloud%20hosting/Value%20Cloud%20Hsting.webp'
                                ]
                            ]
                        ])
                    </li>
                    <li class="nav_item">
                        @include('components.button', [
                            'type' => 'dropdown_nav', 
                            'main_title' => 'Email Suite',
                            'sub_menu' => [ 
                                [
                                    'title' => 'Menu 1',
                                    'desc' => 'Lorem ipsum',
                                    'link' => '/',
                                    'icon' => 'https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/cloud%20hosting/Value%20Cloud%20Hsting.webp'
                                ],
                                [
                                    'title' => 'Menu 2',
                                    'desc' => 'Lorem ipsum',
                                    'link' => '/',
                                    'icon' => 'https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/cloud%20hosting/Value%20Cloud%20Hsting.webp'
                                ]
                            ]
                        ])
                    </li>
                    <li class="nav_item">
                        @include('components.button', [
                            'type' => 'dropdown_nav', 
                            'main_title' => 'Services',
                            'sub_menu' => [ 
                                [
                                    'title' => 'Menu 1',
                                    'desc' => 'Lorem ipsum',
                                    'link' => '/',
                                    'icon' => 'https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/cloud%20hosting/Value%20Cloud%20Hsting.webp'
                                ],
                                [
                                    'title' => 'Menu 2',
                                    'desc' => 'Lorem ipsum',
                                    'link' => '/',
                                    'icon' => 'https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/cloud%20hosting/Value%20Cloud%20Hsting.webp'
                                ]
                            ]
                        ])
                    </li>
                    <li class="nav_item">
                        @include('components.button', [
                            'type' => 'dropdown_nav', 
                            'main_title' => 'Internet Access',
                            'sub_menu' => [ 
                                [
                                    'title' => 'Menu 1',
                                    'desc' => 'Lorem ipsum',
                                    'link' => '/',
                                    'icon' => 'https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/cloud%20hosting/Value%20Cloud%20Hsting.webp'
                                ],
                                [
                                    'title' => 'Menu 2',
                                    'desc' => 'Lorem ipsum',
                                    'link' => '/',
                                    'icon' => 'https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/cloud%20hosting/Value%20Cloud%20Hsting.webp'
                                ]
                            ]
                        ])
                    </li>
                </ul>
            </div>
            <div class="container" style="width:200px;">
                <a class="btn btn-outline me-2">Promo</a>
                <a class="btn btn-outline">Log In</a>
            </div>
        </div>
    </div>
</nav>