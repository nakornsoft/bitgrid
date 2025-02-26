@extends('layouts.layout')
@section('title', 'โปรไฟล์')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/flatpickr.min.css') }}" />
    <style>
        .upload-field-customized {
            position: relative;
            cursor: pointer;
            top: -50px;
            left: -50px;
            float: right;
            background: #eeeeee;
            input[type="file"] {
                position: absolute;
                width: 50px;
                height: 50px;
                opacity: 0;
                cursor: pointer;
                left: -5px;
                top: -10px;
                z-index: 10;
            }
        }
        .btn-upload {
            cursor: pointer;
        }
        .wrap-inline-flex {
            align-items: center;
            display: inline-flex;
            width: 150px;
            height: 100px;
        }
    </style>
@endsection
@section('content')
    <div>


        <div class="mb-5 flex flex-wrap items-center justify-between gap-4">
            <div class="text-lg font-semibold ltr:sm:text-left rtl:sm:text-right dark:text-white-light">ตั้งค่าทั่วไป</div>
            <div class="flex flex-wrap items-center justify-between gap-4">
                <ul class="flex text-gray-500 dark:text-white-dark">
                    <li>
                        <a href="javascript:;" class="hover:text-gray-500/70 dark:hover:text-white-dark/70">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 shrink-0">
                                <path opacity="0.5" d="M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z" stroke="currentColor" stroke-width="1.5"></path>
                                <path d="M12 15L12 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="before:content-['/'] before:px-1.5"><a href="javascript:;" class="text-black dark:text-white-light hover:text-black/70 dark:hover:text-white-light/70">ตั้งค่าทั่วไป</a></li>
                </ul>
            </div>
        </div>


        <div>
            <div x-data="{ tab: 'settings' }">
                <ul class="sm:flex font-semibold border-b border-[#ebedf2] dark:border-[#191e3a] mb-5 whitespace-nowrap overflow-y-auto">
                    <li class="inline-block">
                        <a href="javascript:;"
                            class="flex gap-2 p-4 border-b border-transparent hover:border-primary hover:text-primary"
                            :class="{ '!border-primary text-primary': tab == 'settings' }" @click="tab='settings'">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="1.5" />
                                <path opacity="0.5"
                                    d="M13.7654 2.15224C13.3978 2 12.9319 2 12 2C11.0681 2 10.6022 2 10.2346 2.15224C9.74457 2.35523 9.35522 2.74458 9.15223 3.23463C9.05957 3.45834 9.0233 3.7185 9.00911 4.09799C8.98826 4.65568 8.70226 5.17189 8.21894 5.45093C7.73564 5.72996 7.14559 5.71954 6.65219 5.45876C6.31645 5.2813 6.07301 5.18262 5.83294 5.15102C5.30704 5.08178 4.77518 5.22429 4.35436 5.5472C4.03874 5.78938 3.80577 6.1929 3.33983 6.99993C2.87389 7.80697 2.64092 8.21048 2.58899 8.60491C2.51976 9.1308 2.66227 9.66266 2.98518 10.0835C3.13256 10.2756 3.3397 10.437 3.66119 10.639C4.1338 10.936 4.43789 11.4419 4.43786 12C4.43783 12.5581 4.13375 13.0639 3.66118 13.3608C3.33965 13.5629 3.13248 13.7244 2.98508 13.9165C2.66217 14.3373 2.51966 14.8691 2.5889 15.395C2.64082 15.7894 2.87379 16.193 3.33973 17C3.80568 17.807 4.03865 18.2106 4.35426 18.4527C4.77508 18.7756 5.30694 18.9181 5.83284 18.8489C6.07289 18.8173 6.31632 18.7186 6.65204 18.5412C7.14547 18.2804 7.73556 18.27 8.2189 18.549C8.70224 18.8281 8.98826 19.3443 9.00911 19.9021C9.02331 20.2815 9.05957 20.5417 9.15223 20.7654C9.35522 21.2554 9.74457 21.6448 10.2346 21.8478C10.6022 22 11.0681 22 12 22C12.9319 22 13.3978 22 13.7654 21.8478C14.2554 21.6448 14.6448 21.2554 14.8477 20.7654C14.9404 20.5417 14.9767 20.2815 14.9909 19.902C15.0117 19.3443 15.2977 18.8281 15.781 18.549C16.2643 18.2699 16.8544 18.2804 17.3479 18.5412C17.6836 18.7186 17.927 18.8172 18.167 18.8488C18.6929 18.9181 19.2248 18.7756 19.6456 18.4527C19.9612 18.2105 20.1942 17.807 20.6601 16.9999C21.1261 16.1929 21.3591 15.7894 21.411 15.395C21.4802 14.8691 21.3377 14.3372 21.0148 13.9164C20.8674 13.7243 20.6602 13.5628 20.3387 13.3608C19.8662 13.0639 19.5621 12.558 19.5621 11.9999C19.5621 11.4418 19.8662 10.9361 20.3387 10.6392C20.6603 10.4371 20.8675 10.2757 21.0149 10.0835C21.3378 9.66273 21.4803 9.13087 21.4111 8.60497C21.3592 8.21055 21.1262 7.80703 20.6602 7C20.1943 6.19297 19.9613 5.78945 19.6457 5.54727C19.2249 5.22436 18.693 5.08185 18.1671 5.15109C17.9271 5.18269 17.6837 5.28136 17.3479 5.4588C16.8545 5.71959 16.2644 5.73002 15.7811 5.45096C15.2977 5.17191 15.0117 4.65566 14.9909 4.09794C14.9767 3.71848 14.9404 3.45833 14.8477 3.23463C14.6448 2.74458 14.2554 2.35523 13.7654 2.15224Z"
                                    stroke="currentColor" stroke-width="1.5" />
                            </svg>
                            ตั้งค่า
                        </a>
                    </li>
                </ul>
                <template x-if="tab === 'settings'">
                    <form id="uploadForm" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="switch">
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 mb-5">
                                <div class="panel space-y-5">
                                    <h5 class="font-semibold text-lg mb-4">Logo</h5>
                                    <div class="flex justify-around">
                                        <div class="inline-flex wrap-inline-flex">
                                            <span>
                                                <img class="ms-3" id="preview1" width="100" height="100" alt="settings-dark" src="{{ asset('assets/images') }}/{{ config('settings.logo') }}" />
                                            </span>
                                            <p class="mt-1">Logo</p>
                                            <div class="upload-field-customized block p-2 rounded-full bg-white-light/40 dark:bg-dark/40 hover:text-primary hover:bg-white-light/90 dark:hover:bg-dark/60">
                                                <input type="file" name="image" accept="image/svg+xml" id="image" onchange="previewImage1(event)">
                                                <span class="btn-upload">
                                                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path> <path opacity="0.5" d="M2 12.5001L3.75159 10.9675C4.66286 10.1702 6.03628 10.2159 6.89249 11.0721L11.1822 15.3618C11.8694 16.0491 12.9512 16.1428 13.7464 15.5839L14.0446 15.3744C15.1888 14.5702 16.7369 14.6634 17.7765 15.599L21 18.5001" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path> <path d="M18.562 2.9354L18.9791 2.5183C19.6702 1.82723 20.7906 1.82723 21.4817 2.5183C22.1728 3.20937 22.1728 4.32981 21.4817 5.02087L21.0646 5.43797M18.562 2.9354C18.562 2.9354 18.6142 3.82172 19.3962 4.60378C20.1783 5.38583 21.0646 5.43797 21.0646 5.43797M18.562 2.9354L14.7275 6.76995C14.4677 7.02968 14.3379 7.15954 14.2262 7.30273C14.0945 7.47163 13.9815 7.65439 13.8894 7.84776C13.8112 8.01169 13.7532 8.18591 13.637 8.53437L13.2651 9.65M21.0646 5.43797L17.23 9.27253C16.9703 9.53225 16.8405 9.66211 16.6973 9.7738C16.5284 9.90554 16.3456 10.0185 16.1522 10.1106C15.9883 10.1888 15.8141 10.2468 15.4656 10.363L14.35 10.7349M14.35 10.7349L13.6281 10.9755C13.4567 11.0327 13.2676 10.988 13.1398 10.8602C13.012 10.7324 12.9673 10.5433 13.0245 10.3719L13.2651 9.65M14.35 10.7349L13.2651 9.65" stroke="currentColor" stroke-width="1.5"></path> </svg>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="inline-flex wrap-inline-flex">
                                            <span>
                                                <img class="ms-3" id="preview2" width="50" height="50" alt="settings-light" src="{{ asset('/') }}{{ config('settings.favicon') }}" />
                                            </span>
                                            <p class="mt-1">Favicon</p>
                                            <div class="upload-field-customized block p-2 rounded-full bg-white-light/40 dark:bg-dark/40 hover:text-primary hover:bg-white-light/90 dark:hover:bg-dark/60">
                                                <input type="file" name="favicon" accept="image/ico" id="favicon" onchange="previewImage2(event)">
                                                <span class="btn-upload">
                                                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path> <path opacity="0.5" d="M2 12.5001L3.75159 10.9675C4.66286 10.1702 6.03628 10.2159 6.89249 11.0721L11.1822 15.3618C11.8694 16.0491 12.9512 16.1428 13.7464 15.5839L14.0446 15.3744C15.1888 14.5702 16.7369 14.6634 17.7765 15.599L21 18.5001" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path> <path d="M18.562 2.9354L18.9791 2.5183C19.6702 1.82723 20.7906 1.82723 21.4817 2.5183C22.1728 3.20937 22.1728 4.32981 21.4817 5.02087L21.0646 5.43797M18.562 2.9354C18.562 2.9354 18.6142 3.82172 19.3962 4.60378C20.1783 5.38583 21.0646 5.43797 21.0646 5.43797M18.562 2.9354L14.7275 6.76995C14.4677 7.02968 14.3379 7.15954 14.2262 7.30273C14.0945 7.47163 13.9815 7.65439 13.8894 7.84776C13.8112 8.01169 13.7532 8.18591 13.637 8.53437L13.2651 9.65M21.0646 5.43797L17.23 9.27253C16.9703 9.53225 16.8405 9.66211 16.6973 9.7738C16.5284 9.90554 16.3456 10.0185 16.1522 10.1106C15.9883 10.1888 15.8141 10.2468 15.4656 10.363L14.35 10.7349M14.35 10.7349L13.6281 10.9755C13.4567 11.0327 13.2676 10.988 13.1398 10.8602C13.012 10.7324 12.9673 10.5433 13.0245 10.3719L13.2651 9.65M14.35 10.7349L13.2651 9.65" stroke="currentColor" stroke-width="1.5"></path> </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel space-y-5">
                                    <h5 class="font-semibold text-lg mb-4">Activity data</h5>
                                    <p>Download your Summary, Task and Payment History Data</p>
                                    <button type="button" class="btn btn-primary">Download Data</button>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                                <div class="panel space-y-5">
                                    <h5 class="font-semibold text-lg mb-4">Public Profile</h5>
                                    <p>Your <span class="text-primary">Profile</span> will be visible to anyone on the network.
                                    </p>
                                    <label class="w-12 h-6 relative">
                                        <input type="checkbox"
                                            class="custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer"
                                            id="custom_switch_checkbox1" />
                                        <span for="custom_switch_checkbox1"
                                            class="bg-[#ebedf2] dark:bg-dark block h-full rounded-full before:absolute before:left-1 before:bg-white dark:before:bg-white-dark dark:peer-checked:before:bg-white before:bottom-1 before:w-4 before:h-4 before:rounded-full peer-checked:before:left-7 peer-checked:bg-primary before:transition-all before:duration-300"></span>
                                    </label>
                                </div>
                                <div class="panel space-y-5">
                                    <h5 class="font-semibold text-lg mb-4">Show my email</h5>
                                    <p>Your <span class="text-primary">Email</span> will be visible to anyone on the network.
                                    </p>
                                    <label class="w-12 h-6 relative">
                                        <input type="checkbox"
                                            class="custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer"
                                            id="custom_switch_checkbox2" />
                                        <span for="custom_switch_checkbox2"
                                            class="bg-[#ebedf2] dark:bg-dark block h-full rounded-full before:absolute before:left-1 before:bg-white  dark:before:bg-white-dark dark:peer-checked:before:bg-white before:bottom-1 before:w-4 before:h-4 before:rounded-full peer-checked:before:left-7 peer-checked:bg-primary before:transition-all before:duration-300"></span>
                                    </label>
                                </div>
                                <div class="panel space-y-5">
                                    <h5 class="font-semibold text-lg mb-4">Enable keyboard shortcuts</h5>
                                    <p>When enabled, press <span class="text-primary">ctrl</span> for help</p>
                                    <label class="w-12 h-6 relative">
                                        <input type="checkbox"
                                            class="custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer"
                                            id="custom_switch_checkbox3" />
                                        <span for="custom_switch_checkbox3"
                                            class="bg-[#ebedf2] dark:bg-dark block h-full rounded-full before:absolute before:left-1 before:bg-white  dark:before:bg-white-dark dark:peer-checked:before:bg-white before:bottom-1 before:w-4 before:h-4 before:rounded-full peer-checked:before:left-7 peer-checked:bg-primary before:transition-all before:duration-300"></span>
                                    </label>
                                </div>
                                <div class="panel space-y-5">
                                    <h5 class="font-semibold text-lg mb-4">Hide left navigation</h5>
                                    <p>Sidebar will be <span class="text-primary">hidden</span> by default</p>
                                    <label class="w-12 h-6 relative">
                                        <input type="checkbox"
                                            class="custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer"
                                            id="custom_switch_checkbox4" />
                                        <span for="custom_switch_checkbox4"
                                            class="bg-[#ebedf2] dark:bg-dark block h-full rounded-full before:absolute before:left-1 before:bg-white  dark:before:bg-white-dark dark:peer-checked:before:bg-white before:bottom-1 before:w-4 before:h-4 before:rounded-full peer-checked:before:left-7 peer-checked:bg-primary before:transition-all before:duration-300"></span>
                                    </label>
                                </div>
                                <div class="panel space-y-5">
                                    <h5 class="font-semibold text-lg mb-4">Advertisements</h5>
                                    <p>Display <span class="text-primary">Ads</span> on your dashboard</p>
                                    <label class="w-12 h-6 relative">
                                        <input type="checkbox"
                                            class="custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer"
                                            id="custom_switch_checkbox5" />
                                        <span for="custom_switch_checkbox5"
                                            class="bg-[#ebedf2] dark:bg-dark block h-full rounded-full before:absolute before:left-1 before:bg-white  dark:before:bg-white-dark dark:peer-checked:before:bg-white before:bottom-1 before:w-4 before:h-4 before:rounded-full peer-checked:before:left-7 peer-checked:bg-primary before:transition-all before:duration-300"></span>
                                    </label>
                                </div>
                                <div class="panel space-y-5">
                                    <h5 class="font-semibold text-lg mb-4">Social Profile</h5>
                                    <p>Enable your <span class="text-primary">social</span> profiles on this network</p>
                                    <label class="w-12 h-6 relative">
                                        <input type="checkbox"
                                            class="custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer"
                                            id="custom_switch_checkbox6" />
                                        <span for="custom_switch_checkbox6"
                                            class="bg-[#ebedf2] dark:bg-dark block h-full rounded-full before:absolute before:left-1 before:bg-white  dark:before:bg-white-dark dark:peer-checked:before:bg-white before:bottom-1 before:w-4 before:h-4 before:rounded-full peer-checked:before:left-7 peer-checked:bg-primary before:transition-all before:duration-300"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>
                </template>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script src="{{ asset('assets/js/flatpickr.js') }}"></script>
<script src="{{ asset('assets/js/alpine-mask.min.js') }}"></script>
<script>
    function previewImage1(event) {
        var input = event.target;
        var image = document.getElementById('preview1');
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                image.src = e.target.result;
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    function previewImage2(event) {
        var input = event.target;
        var image = document.getElementById('preview2');
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                image.src = e.target.result;
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    async function showAlert() {
        const toast = window.Swal.mixin({
            toast: true,
            position: 'top',
            showConfirmButton: false,
            timer: 4000,
            padding: '2em',
        });
        toast.fire({
            icon: 'success',
            title: 'บันทึกสำเร็จ',
            padding: '2em',
        });
    }
</script>
<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script>
    $(function () {
    $('#uploadForm').on('change', (e) => {
        e.preventDefault();
        var formData = new FormData();
        let _token = document.querySelector('input[name=_token]').value;
        let file =  $('#image')[0].files.length;
        if (file != 0) {
            var image = $('#image').prop('files')[0];
            formData.append('image', image);
        }
        let favicon1 =  $('#favicon')[0].files.length;
        if (favicon1 != 0) {
            var favicon = $('#favicon').prop('files')[0];
            formData.append('favicon', favicon);
        }
        $.ajax({
            url: '{{ url('general/update') }}',
            type: 'POST',
            headers: {
                'X-CSRF-Token': _token
            },
            contentType: 'multipart/form-data',
            cache: false,
            contentType: false,
            processData: false,
            data: formData,
            success: (response) => {
                showAlert();
            },
            error: (response) => {
                console.log(response);
            }
        });
    });
});
</script>
@endsection
