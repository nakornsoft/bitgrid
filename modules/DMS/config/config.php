<?php
return [
    'name' => 'DMS', // This is the name of menu
    'title' => 'DMS', // This is the title of the module
    'category' => 'DMS', // This is the category of the module
    'route-name' => 'dms', // This is the route name of the module
    'role' => 'dms view', // This is the role of the module
    'icon' => '<svg width="20" height="20" viewBox="0 0 24 24" class="shrink-0 group-hover:!text-primary" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M14.5 19.9815C16.0728 19.9415 17.1771 19.815 18 19.4151V20.9999C18 21.5522 17.5523 21.9999 17 21.9999H15.5C14.9477 21.9999 14.5 21.5522 14.5 20.9999V19.9815Z" fill="currentColor"/> <path d="M6 19.415C6.82289 19.815 7.9272 19.9415 9.5 19.9815V20.9999C9.5 21.5522 9.05228 21.9999 8.5 21.9999H7C6.44772 21.9999 6 21.5522 6 20.9999V19.415Z" fill="currentColor"/> <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd" d="M5.17157 3.17157C6.34315 2 8.22876 2 12 2C15.7712 2 17.6569 2 18.8284 3.17157C19.8915 4.23467 19.99 5.8857 19.9991 9L20 13C19.9909 16.1143 19.8915 17.7653 18.8284 18.8284C18.5862 19.0706 18.3136 19.2627 18 19.4151C17.1771 19.8151 16.0728 19.9415 14.5 19.9815C13.7729 19.9999 12.9458 20 12 20C11.0542 20 10.2271 20 9.5 19.9815C7.9272 19.9415 6.82289 19.815 6 19.415C5.68645 19.2626 5.41375 19.0706 5.17157 18.8284C4.10848 17.7653 4.00911 16.1143 4 13L4.00093 9C4.01004 5.8857 4.10848 4.23467 5.17157 3.17157Z" fill="currentColor"/> <path d="M17.75 16C17.75 15.5858 17.4142 15.25 17 15.25H15.5C15.0858 15.25 14.75 15.5858 14.75 16C14.75 16.4142 15.0858 16.75 15.5 16.75H17C17.4142 16.75 17.75 16.4142 17.75 16Z" fill="currentColor"/> <path d="M6.25 16C6.25 15.5858 6.58579 15.25 7 15.25H8.5C8.91421 15.25 9.25 15.5858 9.25 16C9.25 16.4142 8.91421 16.75 8.5 16.75H7C6.58579 16.75 6.25 16.4142 6.25 16Z" fill="currentColor"/> <path d="M5.5 9.5C5.5 10.9142 5.5 11.6213 5.93934 12.0607C6.37868 12.5 7.08579 12.5 8.5 12.5H15.5C16.9142 12.5 17.6213 12.5 18.0607 12.0607C18.5 11.6213 18.5 10.9142 18.5 9.5V6.99998C18.5 5.58578 18.5 4.87868 18.0607 4.43934C17.6213 4 16.9142 4 15.5 4H8.5C7.08579 4 6.37868 4 5.93934 4.43934C5.5 4.87868 5.5 5.58579 5.5 7V9.5Z" fill="currentColor"/> <path d="M2.4 11.8L4 13L4.00093 9H3C2.44772 9 2 9.44772 2 10V11C2 11.3148 2.14819 11.6111 2.4 11.8Z" fill="currentColor"/> <path d="M21 9H19.999L20 13L21.6 11.8C21.8518 11.6111 22 11.3148 22 11V10C22 9.44772 21.5522 9 21 9Z" fill="currentColor"/> </svg>',
    'version' => '1.0', // This is the version of the module
    'website' => 'https://www.example.com', // This is the website of the module
    'description' => 'category management', // This is the description of the module
    'sub-menu' => [
        [
            'name' => 'ภาพรวม',
            'route-name' => 'dms.overview',
            'title' => 'ภาพรวม',
            'description' => 'ภาพรวม',
        ],
        [
            'name' => 'ติดตาม',
            'route-name' => 'dms.monitor',
            'title' => 'ติดตาม',
            'description' => 'ติดตาม',
        ],
        [
            'name' => 'อุปกรณ์',
            'route-name' => 'dms',
            'title' => 'อุปกรณ์',
            'description' => 'อุปกรณ์',
        ],
        [
            'name' => 'ประวัติการแจ้งเตือน',
            'route-name' => 'dms.history',
            'title' => 'ประวัติการแจ้งเตือน',
            'description' => 'ประวัติการแจ้งเตือน',
        ],
    ], // This is the sub-menu of the module
    'technical' => 'DMS', // This is the name of the module folder
    'installable' => true, // This is the installable of the module
    'application' => true, // This is the application of the module
    'license' => 'GPL', // This is the license of the module
    'config' => [
        'url' => 'https://dms.adapos.com',
    ],
];
