<?php
return [
    'name' => 'PageBuilder',
    'category' => 'PageBuilder',
    'route-name' => 'page',
    'role' => 'page view',
    'icon' => '<svg width="20" height="20" viewBox="0 0 24 24" class="shrink-0 group-hover:!text-primary" fill="none" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" clip-rule="evenodd" d="M2.02783 11.25C2.41136 6.07745 6.72957 2 12.0001 2C11.1693 2 10.4295 2.36421 9.82093 2.92113C9.21541 3.47525 8.70371 4.24878 8.28983 5.16315C7.87352 6.08292 7.55013 7.15868 7.33126 8.32611C7.1558 9.26194 7.04903 10.2485 7.01344 11.25H2.02783ZM2.02783 12.75H7.01344C7.04903 13.7515 7.1558 14.7381 7.33126 15.6739C7.55013 16.8413 7.87351 17.9171 8.28983 18.8368C8.70371 19.7512 9.21541 20.5247 9.82093 21.0789C10.4295 21.6358 11.1693 22 12.0001 22C6.72957 22 2.41136 17.9226 2.02783 12.75Z" fill="currentColor"/> <path d="M12.0001 2C12.831 2 13.5708 2.36421 14.1793 2.92113C14.7849 3.47525 15.2966 4.24878 15.7104 5.16315C16.1267 6.08292 16.4501 7.15868 16.669 8.32612C16.8445 9.26194 16.9512 10.2485 16.9868 11.25H21.9724C21.5889 6.07745 17.2707 2 12.0001 2Z" fill="currentColor"/> <path d="M16.669 15.6739C16.4501 16.8413 16.1267 17.9171 15.7104 18.8368C15.2966 19.7512 14.7849 20.5247 14.1793 21.0789C13.5708 21.6358 12.831 22 12.0001 22C17.2707 22 21.5889 17.9226 21.9724 12.75H16.9868C16.9512 13.7515 16.8445 14.7381 16.669 15.6739Z" fill="currentColor"/> <g opacity="0.5"> <path d="M12.0002 3.39551C11.7252 3.39551 11.3699 3.51252 10.9568 3.89058C10.5406 4.27142 10.124 4.86831 9.7559 5.68153C9.39025 6.48936 9.09334 7.46456 8.88902 8.55435C8.72811 9.41258 8.62829 10.3223 8.59326 11.2502H15.4071C15.3721 10.3223 15.2723 9.41258 15.1113 8.55435C14.907 7.46457 14.6101 6.48937 14.2445 5.68153C13.8764 4.86831 13.4597 4.27142 13.0436 3.89058C12.6305 3.51252 12.2752 3.39551 12.0002 3.39551Z" fill="currentColor"/> <path d="M8.88902 15.446C9.09334 16.5358 9.39025 17.511 9.7559 18.3188C10.124 19.132 10.5406 19.7289 10.9568 20.1097C11.3699 20.4878 11.7252 20.6048 12.0002 20.6048C12.2752 20.6048 12.6305 20.4878 13.0436 20.1097C13.4597 19.7289 13.8764 19.132 14.2445 18.3188C14.6101 17.511 14.907 16.5358 15.1113 15.446C15.2723 14.5877 15.3721 13.678 15.4071 12.7502H8.59326C8.62829 13.678 8.72811 14.5877 8.88902 15.446Z" fill="currentColor"/> </g> </svg>',
    'version' => '1.0',
    'depends' => '', // This is the name of the module folder
    'author' => 'Bitgrid', // This is the author of the module
    'website' => 'https://www.example.com',
    'description' => 'category management',
    'sub-menu' => [
        [
            'name' => 'หน้าเว็บ',
            'route-name' => 'website',
            'title' => 'หน้าเว็บ',
            'description' => 'หน้าเว็บ',
        ],
        [
            'name' => 'เมนู',
            'route-name' => 'website',
            'title' => 'เมนู',
            'description' => 'เมนู',
        ],
    ],
    'technical' => 'website',
    'application' => true,
    'license' => 'LTE',
];
