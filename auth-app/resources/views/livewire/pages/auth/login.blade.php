<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div class="flex flex-wrap">
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <!-- github link -->
    <div class="flex items-center justify-between">


        <div class="text-center w-10">

            <a href="{{ route('github.login') }}">
                <svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <title>github [#142]</title>
                        <desc>Created with Sketch.</desc>
                        <defs> </defs>
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Dribbble-Light-Preview" transform="translate(-140.000000, -7559.000000)" fill="#000000">
                                <g id="icons" transform="translate(56.000000, 160.000000)">
                                    <path d="M94,7399 C99.523,7399 104,7403.59 104,7409.253 C104,7413.782 101.138,7417.624 97.167,7418.981 C96.66,7419.082 96.48,7418.762 96.48,7418.489 C96.48,7418.151 96.492,7417.047 96.492,7415.675 C96.492,7414.719 96.172,7414.095 95.813,7413.777 C98.04,7413.523 100.38,7412.656 100.38,7408.718 C100.38,7407.598 99.992,7406.684 99.35,7405.966 C99.454,7405.707 99.797,7404.664 99.252,7403.252 C99.252,7403.252 98.414,7402.977 96.505,7404.303 C95.706,7404.076 94.85,7403.962 94,7403.958 C93.15,7403.962 92.295,7404.076 91.497,7404.303 C89.586,7402.977 88.746,7403.252 88.746,7403.252 C88.203,7404.664 88.546,7405.707 88.649,7405.966 C88.01,7406.684 87.619,7407.598 87.619,7408.718 C87.619,7412.646 89.954,7413.526 92.175,7413.785 C91.889,7414.041 91.63,7414.493 91.54,7415.156 C90.97,7415.418 89.522,7415.871 88.63,7414.304 C88.63,7414.304 88.101,7413.319 87.097,7413.247 C87.097,7413.247 86.122,7413.234 87.029,7413.87 C87.029,7413.87 87.684,7414.185 88.139,7415.37 C88.139,7415.37 88.726,7417.2 91.508,7416.58 C91.513,7417.437 91.522,7418.245 91.522,7418.489 C91.522,7418.76 91.338,7419.077 90.839,7418.982 C86.865,7417.627 84,7413.783 84,7409.253 C84,7403.59 88.478,7399 94,7399" id="github-[#142]"> </path>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </a>
        </div>

        <!-- google link -->

        <div class="text-center w-10 ml-6">

            <a href="{{ route('google.login') }}">
                <svg viewBox="-0.5 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <title>Google-color</title>
                        <desc>Created with Sketch.</desc>
                        <defs> </defs>
                        <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Color-" transform="translate(-401.000000, -860.000000)">
                                <g id="Google" transform="translate(401.000000, 860.000000)">
                                    <path d="M9.82727273,24 C9.82727273,22.4757333 10.0804318,21.0144 10.5322727,19.6437333 L2.62345455,13.6042667 C1.08206818,16.7338667 0.213636364,20.2602667 0.213636364,24 C0.213636364,27.7365333 1.081,31.2608 2.62025,34.3882667 L10.5247955,28.3370667 C10.0772273,26.9728 9.82727273,25.5168 9.82727273,24" id="Fill-1" fill="#FBBC05"> </path>
                                    <path d="M23.7136364,10.1333333 C27.025,10.1333333 30.0159091,11.3066667 32.3659091,13.2266667 L39.2022727,6.4 C35.0363636,2.77333333 29.6954545,0.533333333 23.7136364,0.533333333 C14.4268636,0.533333333 6.44540909,5.84426667 2.62345455,13.6042667 L10.5322727,19.6437333 C12.3545909,14.112 17.5491591,10.1333333 23.7136364,10.1333333" id="Fill-2" fill="#EB4335"> </path>
                                    <path d="M23.7136364,37.8666667 C17.5491591,37.8666667 12.3545909,33.888 10.5322727,28.3562667 L2.62345455,34.3946667 C6.44540909,42.1557333 14.4268636,47.4666667 23.7136364,47.4666667 C29.4455,47.4666667 34.9177955,45.4314667 39.0249545,41.6181333 L31.5177727,35.8144 C29.3995682,37.1488 26.7323182,37.8666667 23.7136364,37.8666667" id="Fill-3" fill="#34A853"> </path>
                                    <path d="M46.1454545,24 C46.1454545,22.6133333 45.9318182,21.12 45.6113636,19.7333333 L23.7136364,19.7333333 L23.7136364,28.8 L36.3181818,28.8 C35.6879545,31.8912 33.9724545,34.2677333 31.5177727,35.8144 L39.0249545,41.6181333 C43.3393409,37.6138667 46.1454545,31.6490667 46.1454545,24" id="Fill-4" fill="#4285F4"> </path>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </a>
        </div>

        <!-- facebook link -->
        <div class="text-center w-10 ml-6">

            <a href="{{ route('facebook.login') }}">
                <svg viewBox="0 0 100 100" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <style type="text/css">
                            .st0 {
                                fill: #FFFFFF;
                            }

                            .st1 {
                                fill: #F5BB41;
                            }

                            .st2 {
                                fill: #2167D1;
                            }

                            .st3 {
                                fill: #3D84F3;
                            }

                            .st4 {
                                fill: #4CA853;
                            }

                            .st5 {
                                fill: #398039;
                            }

                            .st6 {
                                fill: #D74F3F;
                            }

                            .st7 {
                                fill: #D43C89;
                            }

                            .st8 {
                                fill: #B2005F;
                            }

                            .st9 {
                                fill: none;
                                stroke: #000000;
                                stroke-width: 3;
                                stroke-linecap: round;
                                stroke-linejoin: round;
                                stroke-miterlimit: 10;
                            }

                            .st10 {
                                fill-rule: evenodd;
                                clip-rule: evenodd;
                                fill: none;
                                stroke: #000000;
                                stroke-width: 3;
                                stroke-linecap: round;
                                stroke-linejoin: round;
                                stroke-miterlimit: 10;
                            }

                            .st11 {
                                fill-rule: evenodd;
                                clip-rule: evenodd;
                                fill: none;
                                stroke: #040404;
                                stroke-width: 3;
                                stroke-linecap: round;
                                stroke-linejoin: round;
                                stroke-miterlimit: 10;
                            }

                            .st12 {
                                fill-rule: evenodd;
                                clip-rule: evenodd;
                            }

                            .st13 {
                                fill-rule: evenodd;
                                clip-rule: evenodd;
                                fill: #040404;
                            }

                            .st14 {
                                fill: url(#SVGID_1_);
                            }

                            .st15 {
                                fill: url(#SVGID_2_);
                            }

                            .st16 {
                                fill: url(#SVGID_3_);
                            }

                            .st17 {
                                fill: url(#SVGID_4_);
                            }

                            .st18 {
                                fill: url(#SVGID_5_);
                            }

                            .st19 {
                                fill: url(#SVGID_6_);
                            }

                            .st20 {
                                fill: url(#SVGID_7_);
                            }

                            .st21 {
                                fill: url(#SVGID_8_);
                            }

                            .st22 {
                                fill: url(#SVGID_9_);
                            }

                            .st23 {
                                fill: url(#SVGID_10_);
                            }

                            .st24 {
                                fill: url(#SVGID_11_);
                            }

                            .st25 {
                                fill: url(#SVGID_12_);
                            }

                            .st26 {
                                fill: url(#SVGID_13_);
                            }

                            .st27 {
                                fill: url(#SVGID_14_);
                            }

                            .st28 {
                                fill: url(#SVGID_15_);
                            }

                            .st29 {
                                fill: url(#SVGID_16_);
                            }

                            .st30 {
                                fill: url(#SVGID_17_);
                            }

                            .st31 {
                                fill: url(#SVGID_18_);
                            }

                            .st32 {
                                fill: url(#SVGID_19_);
                            }

                            .st33 {
                                fill: url(#SVGID_20_);
                            }

                            .st34 {
                                fill: url(#SVGID_21_);
                            }

                            .st35 {
                                fill: url(#SVGID_22_);
                            }

                            .st36 {
                                fill: url(#SVGID_23_);
                            }

                            .st37 {
                                fill: url(#SVGID_24_);
                            }

                            .st38 {
                                fill: url(#SVGID_25_);
                            }

                            .st39 {
                                fill: url(#SVGID_26_);
                            }

                            .st40 {
                                fill: url(#SVGID_27_);
                            }

                            .st41 {
                                fill: url(#SVGID_28_);
                            }

                            .st42 {
                                fill: url(#SVGID_29_);
                            }

                            .st43 {
                                fill: url(#SVGID_30_);
                            }

                            .st44 {
                                fill: url(#SVGID_31_);
                            }

                            .st45 {
                                fill: url(#SVGID_32_);
                            }

                            .st46 {
                                fill: url(#SVGID_33_);
                            }

                            .st47 {
                                fill: url(#SVGID_34_);
                            }

                            .st48 {
                                fill: url(#SVGID_35_);
                            }

                            .st49 {
                                fill: url(#SVGID_36_);
                            }

                            .st50 {
                                fill: url(#SVGID_37_);
                            }

                            .st51 {
                                fill: url(#SVGID_38_);
                            }

                            .st52 {
                                fill: url(#SVGID_39_);
                            }

                            .st53 {
                                fill: url(#SVGID_40_);
                            }

                            .st54 {
                                fill: url(#SVGID_41_);
                            }

                            .st55 {
                                fill: url(#SVGID_42_);
                            }

                            .st56 {
                                fill: url(#SVGID_43_);
                            }

                            .st57 {
                                fill: url(#SVGID_44_);
                            }

                            .st58 {
                                fill: url(#SVGID_45_);
                            }

                            .st59 {
                                fill: #040404;
                            }

                            .st60 {
                                fill: url(#SVGID_46_);
                            }

                            .st61 {
                                fill: url(#SVGID_47_);
                            }

                            .st62 {
                                fill: url(#SVGID_48_);
                            }

                            .st63 {
                                fill: url(#SVGID_49_);
                            }

                            .st64 {
                                fill: url(#SVGID_50_);
                            }

                            .st65 {
                                fill: url(#SVGID_51_);
                            }

                            .st66 {
                                fill: url(#SVGID_52_);
                            }

                            .st67 {
                                fill: url(#SVGID_53_);
                            }

                            .st68 {
                                fill: url(#SVGID_54_);
                            }

                            .st69 {
                                fill: url(#SVGID_55_);
                            }

                            .st70 {
                                fill: url(#SVGID_56_);
                            }

                            .st71 {
                                fill: url(#SVGID_57_);
                            }

                            .st72 {
                                fill: url(#SVGID_58_);
                            }

                            .st73 {
                                fill: url(#SVGID_59_);
                            }

                            .st74 {
                                fill: url(#SVGID_60_);
                            }

                            .st75 {
                                fill: url(#SVGID_61_);
                            }

                            .st76 {
                                fill: url(#SVGID_62_);
                            }

                            .st77 {
                                fill: none;
                                stroke: #000000;
                                stroke-width: 3;
                                stroke-miterlimit: 10;
                            }

                            .st78 {
                                fill: none;
                                stroke: #FFFFFF;
                                stroke-miterlimit: 10;
                            }

                            .st79 {
                                fill: #4BC9FF;
                            }

                            .st80 {
                                fill: #5500DD;
                            }

                            .st81 {
                                fill: #FF3A00;
                            }

                            .st82 {
                                fill: #E6162D;
                            }

                            .st83 {
                                fill: #F1F1F1;
                            }

                            .st84 {
                                fill: #FF9933;
                            }

                            .st85 {
                                fill: #B92B27;
                            }

                            .st86 {
                                fill: #00ACED;
                            }

                            .st87 {
                                fill: #BD2125;
                            }

                            .st88 {
                                fill: #1877F2;
                            }

                            .st89 {
                                fill: #6665D2;
                            }

                            .st90 {
                                fill: #CE3056;
                            }

                            .st91 {
                                fill: #5BB381;
                            }

                            .st92 {
                                fill: #61C3EC;
                            }

                            .st93 {
                                fill: #E4B34B;
                            }

                            .st94 {
                                fill: #181EF2;
                            }

                            .st95 {
                                fill: #FF0000;
                            }

                            .st96 {
                                fill: #FE466C;
                            }

                            .st97 {
                                fill: #FA4778;
                            }

                            .st98 {
                                fill: #FF7700;
                            }

                            .st99 {
                                fill-rule: evenodd;
                                clip-rule: evenodd;
                                fill: #1F6BF6;
                            }

                            .st100 {
                                fill: #520094;
                            }

                            .st101 {
                                fill: #4477E8;
                            }

                            .st102 {
                                fill: #3D1D1C;
                            }

                            .st103 {
                                fill: #FFE812;
                            }

                            .st104 {
                                fill: #344356;
                            }

                            .st105 {
                                fill: #00CC76;
                            }

                            .st106 {
                                fill-rule: evenodd;
                                clip-rule: evenodd;
                                fill: #345E90;
                            }

                            .st107 {
                                fill: #1F65D8;
                            }

                            .st108 {
                                fill: #EB3587;
                            }

                            .st109 {
                                fill-rule: evenodd;
                                clip-rule: evenodd;
                                fill: #603A88;
                            }

                            .st110 {
                                fill: #E3CE99;
                            }

                            .st111 {
                                fill: #783AF9;
                            }

                            .st112 {
                                fill: #FF515E;
                            }

                            .st113 {
                                fill: #FF4906;
                            }

                            .st114 {
                                fill: #503227;
                            }

                            .st115 {
                                fill: #4C7BD9;
                            }

                            .st116 {
                                fill: #69C9D0;
                            }

                            .st117 {
                                fill: #1B92D1;
                            }

                            .st118 {
                                fill: #EB4F4A;
                            }

                            .st119 {
                                fill: #513728;
                            }

                            .st120 {
                                fill: #FF6600;
                            }

                            .st121 {
                                fill-rule: evenodd;
                                clip-rule: evenodd;
                                fill: #B61438;
                            }

                            .st122 {
                                fill: #FFFC00;
                            }

                            .st123 {
                                fill: #141414;
                            }

                            .st124 {
                                fill: #94D137;
                            }

                            .st125 {
                                fill-rule: evenodd;
                                clip-rule: evenodd;
                                fill: #F1F1F1;
                            }

                            .st126 {
                                fill-rule: evenodd;
                                clip-rule: evenodd;
                                fill: #66E066;
                            }

                            .st127 {
                                fill: #2D8CFF;
                            }

                            .st128 {
                                fill: #F1A300;
                            }

                            .st129 {
                                fill: #4BA2F2;
                            }

                            .st130 {
                                fill: #1A5099;
                            }

                            .st131 {
                                fill: #EE6060;
                            }

                            .st132 {
                                fill-rule: evenodd;
                                clip-rule: evenodd;
                                fill: #F48120;
                            }

                            .st133 {
                                fill: #222222;
                            }

                            .st134 {
                                fill: url(#SVGID_63_);
                            }

                            .st135 {
                                fill: #0077B5;
                            }

                            .st136 {
                                fill: #FFCC00;
                            }

                            .st137 {
                                fill: #EB3352;
                            }

                            .st138 {
                                fill: #F9D265;
                            }

                            .st139 {
                                fill: #F5B955;
                            }

                            .st140 {
                                fill: #DD2A7B;
                            }

                            .st141 {
                                fill: #66E066;
                            }

                            .st142 {
                                fill: #EB4E00;
                            }

                            .st143 {
                                fill: #FFC794;
                            }

                            .st144 {
                                fill: #B5332A;
                            }

                            .st145 {
                                fill: #4E85EB;
                            }

                            .st146 {
                                fill: #58A45C;
                            }

                            .st147 {
                                fill: #F2BC42;
                            }

                            .st148 {
                                fill: #D85040;
                            }

                            .st149 {
                                fill: #464EB8;
                            }

                            .st150 {
                                fill: #7B83EB;
                            }
                        </style>
                        <g id="Layer_1"></g>
                        <g id="Layer_2">
                            <g>
                                <path class="st88" d="M50,2.5c-58.892,1.725-64.898,84.363-7.46,95l0,0h0H50h7.46l0,0C114.911,86.853,108.879,4.219,50,2.5z"></path>
                                <path class="st83" d="M57.46,64.104h11.125l2.117-13.814H57.46v-8.965c0-3.779,1.85-7.463,7.781-7.463h6.021 c0,0,0-11.761,0-11.761c-12.894-2.323-28.385-1.616-28.722,17.66V50.29H30.417v13.814H42.54c0,0,0,33.395,0,33.396H50h7.46l0,0h0 V64.104z"></path>
                            </g>
                        </g>
                    </g>
                </svg>
            </a>
        </div>
        <!-- linkdin link -->

        <div class="text-center w-10 ml-6">

            <a href="{{ route('linkedin.login') }}">
                <svg viewBox="7.025 7.025 497.951 497.951" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <linearGradient id="a" gradientUnits="userSpaceOnUse" x1="-974.482" y1="1306.773" x2="-622.378" y2="1658.877" gradientTransform="translate(1054.43 -1226.825)">
                            <stop offset="0" stop-color="#2489be"></stop>
                            <stop offset="1" stop-color="#0575b3"></stop>
                        </linearGradient>
                        <path d="M256 7.025C118.494 7.025 7.025 118.494 7.025 256S118.494 504.975 256 504.975 504.976 393.506 504.976 256C504.975 118.494 393.504 7.025 256 7.025zm-66.427 369.343h-54.665V199.761h54.665v176.607zM161.98 176.633c-17.853 0-32.326-14.591-32.326-32.587 0-17.998 14.475-32.588 32.326-32.588s32.324 14.59 32.324 32.588c.001 17.997-14.472 32.587-32.324 32.587zm232.45 199.735h-54.4v-92.704c0-25.426-9.658-39.619-29.763-39.619-21.881 0-33.312 14.782-33.312 39.619v92.704h-52.43V199.761h52.43v23.786s15.771-29.173 53.219-29.173c37.449 0 64.257 22.866 64.257 70.169l-.001 111.825z" fill="url(#a)"></path>
                    </g>
                </svg>
            </a>
        </div>
    </div>

    <div class="align-center ml-6"> or </div>
    

    <form wire:submit="login">
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input wire:model="form.email" id="email" class="block mt-1 w-full" type="email" name="email" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input wire:model="form.password" id="password" class="block mt-1 w-full"
                type="password"
                name="password"
                required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember" class="inline-flex items-center">
                <input wire:model="form.remember" id="remember" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}" wire:navigate>
                {{ __('Forgot your password?') }}
            </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</div>