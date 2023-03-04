<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FavIcon -->
    <link rel="icon" type="image/x-icon" href="../assets/icons/fav-icon.png">
    <!-- Bootstap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- Main css file -->
    <link rel="stylesheet" href="../assets/style/main.css">

    <title>Gleem System</title>
</head>

<body>

    <div class="overview clients d-flex">

        <div class="sidebar d-flex flex-column">
            <img src="{{asset('assets/icons/logo.png')}}" alt="" class="mb-5">
            <div class="items d-flex flex-column gap-2">
                <a href="/" class="d-flex align-items-center gap-3 py-2 active">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                        fill="none">
                        <path
                            d="M10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM10 18C5.59 18 2 14.41 2 10C2 5.59 5.59 2 10 2C14.41 2 18 5.59 18 10C18 14.41 14.41 18 10 18Z"
                            fill="currentColor" />
                        <path
                            d="M6 14C7.10457 14 8 13.1046 8 12C8 10.8954 7.10457 10 6 10C4.89543 10 4 10.8954 4 12C4 13.1046 4.89543 14 6 14Z"
                            fill="currentColor" />
                        <path
                            d="M10 8C11.1046 8 12 7.10457 12 6C12 4.89543 11.1046 4 10 4C8.89543 4 8 4.89543 8 6C8 7.10457 8.89543 8 10 8Z"
                            fill="currentColor" />
                        <path
                            d="M14 14C15.1046 14 16 13.1046 16 12C16 10.8954 15.1046 10 14 10C12.8954 10 12 10.8954 12 12C12 13.1046 12.8954 14 14 14Z"
                            fill="currentColor" />
                    </svg>
                    <span>Overview</span>
                </a>
                <a href="{{ route('getClient') }}" class="d-flex align-items-center gap-3 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 14"
                        fill="none">
                        <path
                            d="M12.1323 7.57373C13.193 8.34521 13.9363 9.39044 13.9363 10.7841V13.2727H17.0333V10.7841C17.0333 8.97566 14.2692 7.90555 12.1323 7.57373Z"
                            fill="currentColor" />
                        <path
                            d="M10.8394 6.63636C12.5505 6.63636 13.9364 5.15148 13.9364 3.31818C13.9364 1.48489 12.5505 0 10.8394 0C10.4755 0 10.1349 0.0829544 9.80969 0.199091C10.4523 1.05352 10.8394 2.14023 10.8394 3.31818C10.8394 4.49614 10.4523 5.58284 9.80969 6.43727C10.1349 6.55341 10.4755 6.63636 10.8394 6.63636Z"
                            fill="currentColor" />
                        <path
                            d="M6.19389 6.63636C7.90497 6.63636 9.29086 5.15148 9.29086 3.31818C9.29086 1.48489 7.90497 0 6.19389 0C4.48282 0 3.09692 1.48489 3.09692 3.31818C3.09692 5.15148 4.48282 6.63636 6.19389 6.63636ZM6.19389 1.65909C7.04556 1.65909 7.74238 2.40568 7.74238 3.31818C7.74238 4.23068 7.04556 4.97727 6.19389 4.97727C5.34223 4.97727 4.64541 4.23068 4.64541 3.31818C4.64541 2.40568 5.34223 1.65909 6.19389 1.65909Z"
                            fill="currentColor" />
                        <path
                            d="M6.19394 7.46582C4.12671 7.46582 0 8.57741 0 10.784V13.2726H12.3879V10.784C12.3879 8.57741 8.26117 7.46582 6.19394 7.46582ZM10.8394 11.6135H1.54848V10.7923C1.70333 10.195 4.10348 9.12491 6.19394 9.12491C8.28439 9.12491 10.6845 10.195 10.8394 10.784V11.6135Z"
                            fill="currentColor" />
                    </svg>
                    <span>individual clients</span>
                </a>
                <a href="{{ route('getCompany') }}" class="d-flex align-items-center gap-3 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                        fill="none">
                        <path
                            d="M10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM10 18C5.59 18 2 14.41 2 10C2 5.59 5.59 2 10 2C14.41 2 18 5.59 18 10C18 14.41 14.41 18 10 18Z"
                            fill="currentColor" />
                        <path
                            d="M6 14C7.10457 14 8 13.1046 8 12C8 10.8954 7.10457 10 6 10C4.89543 10 4 10.8954 4 12C4 13.1046 4.89543 14 6 14Z"
                            fill="currentColor" />
                        <path
                            d="M10 8C11.1046 8 12 7.10457 12 6C12 4.89543 11.1046 4 10 4C8.89543 4 8 4.89543 8 6C8 7.10457 8.89543 8 10 8Z"
                            fill="currentColor" />
                        <path
                            d="M14 14C15.1046 14 16 13.1046 16 12C16 10.8954 15.1046 10 14 10C12.8954 10 12 10.8954 12 12C12 13.1046 12.8954 14 14 14Z"
                            fill="currentColor" />
                    </svg>
                    <span>Companies</span>
                </a>
                <a href="/" class="d-flex align-items-center gap-3 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                        fill="none">
                        <path
                            d="M2 2H18V14H3.17L2 15.17V2ZM2 0C0.9 0 0.00999999 0.9 0.00999999 2L0 20L4 16H18C19.1 16 20 15.1 20 14V2C20 0.9 19.1 0 18 0H2ZM4 10H12V12H4V10ZM4 7H16V9H4V7ZM4 4H16V6H4V4Z"
                            fill="currentColor" />
                    </svg>
                    <span>Messages</span>
                </a>
                <a href="/" class="d-flex align-items-center gap-3 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21"
                        fill="none">
                        <path
                            d="M17.6964 11.0752C17.7364 10.7552 17.7664 10.4352 17.7664 10.0952C17.7664 9.75521 17.7364 9.43522 17.6964 9.11522L19.8064 7.46521C19.9964 7.31521 20.0464 7.04521 19.9264 6.82521L17.9264 3.36521C17.8364 3.20521 17.6664 3.11521 17.4864 3.11521C17.4264 3.11521 17.3664 3.12522 17.3164 3.14522L14.8264 4.14522C14.3064 3.74522 13.7464 3.41522 13.1364 3.16522L12.7564 0.515215C12.7264 0.275215 12.5164 0.0952148 12.2664 0.0952148H8.26644C8.01644 0.0952148 7.80644 0.275215 7.77644 0.515215L7.39644 3.16522C6.78644 3.41522 6.22644 3.75522 5.70644 4.14522L3.21644 3.14522C3.15644 3.12522 3.09644 3.11521 3.03644 3.11521C2.86644 3.11521 2.69644 3.20521 2.60644 3.36521L0.606441 6.82521C0.476441 7.04521 0.536441 7.31521 0.726441 7.46521L2.83644 9.11522C2.79644 9.43522 2.76644 9.76521 2.76644 10.0952C2.76644 10.4252 2.79644 10.7552 2.83644 11.0752L0.726441 12.7252C0.536441 12.8752 0.486441 13.1452 0.606441 13.3652L2.60644 16.8252C2.69644 16.9852 2.86644 17.0752 3.04644 17.0752C3.10644 17.0752 3.16644 17.0652 3.21644 17.0452L5.70644 16.0452C6.22644 16.4452 6.78644 16.7752 7.39644 17.0252L7.77644 19.6752C7.80644 19.9152 8.01644 20.0952 8.26644 20.0952H12.2664C12.5164 20.0952 12.7264 19.9152 12.7564 19.6752L13.1364 17.0252C13.7464 16.7752 14.3064 16.4352 14.8264 16.0452L17.3164 17.0452C17.3764 17.0652 17.4364 17.0752 17.4964 17.0752C17.6664 17.0752 17.8364 16.9852 17.9264 16.8252L19.9264 13.3652C20.0464 13.1452 19.9964 12.8752 19.8064 12.7252L17.6964 11.0752ZM15.7164 9.36522C15.7564 9.67522 15.7664 9.88521 15.7664 10.0952C15.7664 10.3052 15.7464 10.5252 15.7164 10.8252L15.5764 11.9552L16.4664 12.6552L17.5464 13.4952L16.8464 14.7052L15.5764 14.1952L14.5364 13.7752L13.6364 14.4552C13.2064 14.7752 12.7964 15.0152 12.3864 15.1852L11.3264 15.6152L11.1664 16.7452L10.9664 18.0952H9.56644L9.37644 16.7452L9.21644 15.6152L8.15644 15.1852C7.72644 15.0052 7.32644 14.7752 6.92644 14.4752L6.01644 13.7752L4.95644 14.2052L3.68644 14.7152L2.98644 13.5052L4.06644 12.6652L4.95644 11.9652L4.81644 10.8352C4.78644 10.5252 4.76644 10.2952 4.76644 10.0952C4.76644 9.89521 4.78644 9.66522 4.81644 9.36522L4.95644 8.23522L4.06644 7.53521L2.98644 6.69522L3.68644 5.48521L4.95644 5.99521L5.99644 6.41521L6.89644 5.73521C7.32644 5.41521 7.73644 5.17521 8.14644 5.00521L9.20644 4.57521L9.36644 3.44521L9.56644 2.09521H10.9564L11.1464 3.44521L11.3064 4.57521L12.3664 5.00521C12.7964 5.18521 13.1964 5.41521 13.5964 5.71521L14.5064 6.41521L15.5664 5.98521L16.8364 5.47521L17.5364 6.68521L16.4664 7.53521L15.5764 8.23522L15.7164 9.36522ZM10.2664 6.09521C8.05644 6.09521 6.26644 7.88521 6.26644 10.0952C6.26644 12.3052 8.05644 14.0952 10.2664 14.0952C12.4764 14.0952 14.2664 12.3052 14.2664 10.0952C14.2664 7.88521 12.4764 6.09521 10.2664 6.09521ZM10.2664 12.0952C9.16644 12.0952 8.26644 11.1952 8.26644 10.0952C8.26644 8.99521 9.16644 8.09521 10.2664 8.09521C11.3664 8.09521 12.2664 8.99521 12.2664 10.0952C12.2664 11.1952 11.3664 12.0952 10.2664 12.0952Z"
                            fill="#F6F5F8" />
                    </svg>
                    <span>Settings</span>
                </a>
            </div>
            @if (Auth::user()->role == 1)
                <a href="{{ route('createEmployee') }}">
                    <button class="d-flex align-items-center gap-2 justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10"
                            fill="none">
                            <path d="M6 0H4V4H0V6H4V10H6V6H10V4H6V0Z" fill="currentColor" />
                        </svg>
                        <span>Add new employee</span>
                    </button>
                </a>
            @endif

            <div class="logout d-flex align-items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                    fill="none">
                    <path
                        d="M14 5L12.59 6.41L14.17 8H6V10H14.17L12.59 11.58L14 13L18 9L14 5ZM2 2H9V0H2C0.9 0 0 0.9 0 2V16C0 17.1 0.9 18 2 18H9V16H2V2Z"
                        fill="currentColor" />
                </svg>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
      document.getElementById('logout-form').submit();">
                    logout
                </a>



                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>

        <div class="page">

            <div class="navbar d-flex align-items-center justify-content-between">

                <div class="search">
                    <i class="bi bi-search"></i>
                    <input type="search" placeholder="Search">
                </div>

                <div class="lang-profile d-flex align-items-center gap-5">
                    <a href="/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                            fill="none">
                            <path
                                d="M8 16C6.88 16 5.83333 15.79 4.86 15.37C3.88667 14.95 3.04 14.38 2.32 13.66C1.6 12.94 1.03333 12.09 0.62 11.11C0.206667 10.13 0 9.08 0 7.96C0 6.84 0.206667 5.79667 0.62 4.83C1.03333 3.86333 1.6 3.02 2.32 2.3C3.04 1.58 3.88667 1.01667 4.86 0.61C5.83333 0.203333 6.88 0 8 0C9.12 0 10.1667 0.203333 11.14 0.61C12.1133 1.01667 12.96 1.58 13.68 2.3C14.4 3.02 14.9667 3.86333 15.38 4.83C15.7933 5.79667 16 6.84 16 7.96C16 9.08 15.7933 10.13 15.38 11.11C14.9667 12.09 14.4 12.94 13.68 13.66C12.96 14.38 12.1133 14.95 11.14 15.37C10.1667 15.79 9.12 16 8 16ZM11.16 5H14.16C13.72 4.08 13.1167 3.31333 12.35 2.7C11.5833 2.08667 10.7 1.65333 9.7 1.4C10.0333 1.89333 10.3167 2.42667 10.55 3C10.7833 3.57333 10.9867 4.24 11.16 5ZM6.08 5H9.96C9.81333 4.29333 9.56667 3.61 9.22 2.95C8.87333 2.29 8.46667 1.70667 8 1.2C7.57333 1.56 7.21333 2.03333 6.92 2.62C6.62667 3.20667 6.34667 4 6.08 5ZM1.44 9.78H4.62C4.58 9.42 4.55667 9.09667 4.55 8.81C4.54333 8.52333 4.54 8.24 4.54 7.96C4.54 7.62667 4.54667 7.33 4.56 7.07C4.57333 6.81 4.6 6.52 4.64 6.2H1.44C1.34667 6.52 1.28333 6.80667 1.25 7.06C1.21667 7.31333 1.2 7.61333 1.2 7.96C1.2 8.30667 1.21667 8.61667 1.25 8.89C1.28333 9.16333 1.34667 9.46 1.44 9.78ZM6.3 14.6C5.96667 14.0933 5.68 13.5467 5.44 12.96C5.2 12.3733 5 11.7133 4.84 10.98H1.84C2.34667 11.9267 2.93333 12.67 3.6 13.21C4.26667 13.75 5.16667 14.2133 6.3 14.6ZM1.84 5H4.86C5.00667 4.28 5.19333 3.63667 5.42 3.07C5.64667 2.50333 5.93333 1.95333 6.28 1.42C5.28 1.67333 4.40667 2.1 3.66 2.7C2.91333 3.3 2.30667 4.06667 1.84 5ZM8 14.84C8.46667 14.36 8.85667 13.81 9.17 13.19C9.48333 12.57 9.74 11.8333 9.94 10.98H6.08C6.26667 11.78 6.51667 12.5 6.83 13.14C7.14333 13.78 7.53333 14.3467 8 14.84ZM5.86 9.78H10.16C10.2133 9.36667 10.2467 9.03 10.26 8.77C10.2733 8.51 10.28 8.24 10.28 7.96C10.28 7.69333 10.2733 7.43667 10.26 7.19C10.2467 6.94333 10.2133 6.61333 10.16 6.2H5.86C5.80667 6.61333 5.77333 6.94333 5.76 7.19C5.74667 7.43667 5.74 7.69333 5.74 7.96C5.74 8.24 5.74667 8.51 5.76 8.77C5.77333 9.03 5.80667 9.36667 5.86 9.78ZM9.72 14.58C10.68 14.2733 11.5433 13.8133 12.31 13.2C13.0767 12.5867 13.6933 11.8467 14.16 10.98H11.18C11.0067 11.7 10.8033 12.3533 10.57 12.94C10.3367 13.5267 10.0533 14.0733 9.72 14.58ZM11.36 9.78H14.56C14.6533 9.46 14.7167 9.16333 14.75 8.89C14.7833 8.61667 14.8 8.30667 14.8 7.96C14.8 7.61333 14.7833 7.31333 14.75 7.06C14.7167 6.80667 14.6533 6.52 14.56 6.2H11.38C11.42 6.66667 11.4467 7.02333 11.46 7.27C11.4733 7.51667 11.48 7.74667 11.48 7.96C11.48 8.25333 11.47 8.53 11.45 8.79C11.43 9.05 11.4 9.38 11.36 9.78Z"
                                fill="currentColor" />
                        </svg>
                    </a>
                    <div class="profile d-flex align-items-center gap-2">
                        <a href="/">
                            <div class="circle">AM</div>
                        </a>
                        <div class="data d-flex flex-column">
                            <h3>{{ Auth::user()->name }}</h3>
                            <h4>Admin</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="add-client add-company pt-4 ps-3 pe-5 mb-5">

                <h2 class="d-flex align-items-center gap-2 mb-4 pt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                        fill="none">
                        <path
                            d="M8 10C5.32571 10 0 11.3371 0 14V16H16V14C16 11.3371 10.6743 10 8 10ZM2.67429 13.7143C3.63429 13.0514 5.95429 12.2857 8 12.2857C10.0457 12.2857 12.3657 13.0514 13.3257 13.7143H2.67429ZM8 8C10.2057 8 12 6.20571 12 4C12 1.79429 10.2057 0 8 0C5.79429 0 4 1.79429 4 4C4 6.20571 5.79429 8 8 8ZM8 2.28571C8.94857 2.28571 9.71429 3.05143 9.71429 4C9.71429 4.94857 8.94857 5.71429 8 5.71429C7.05143 5.71429 6.28571 4.94857 6.28571 4C6.28571 3.05143 7.05143 2.28571 8 2.28571Z"
                            fill="#2D3245" />
                    </svg>
                    Add new employee
                </h2>


                <form method="POST" class="data" action="{{ route('createEmployee') }}">
                    @csrf

                    <div class="top bg-white p-4 mb-5">

                        <div class="head mb-4 d-flex align-items-center justify-content-between">
                            <h2>company information</h2>
                        </div>

                        <div class="mb-4">

                            <div class="line d-flex justify-content-between gap-3 mb-4">

                                <div class="input d-flex flex-column gap-2">
                                    <label>employee name</label>

                                    <input id="name" type="text" placeholder="Ex. Mohamed Ali"
                                        class="p-3 @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="input d-flex flex-column gap-2">
                                    <label>Phone Number</label>

                                    <input id="phone" placeholder="Ex. 0002827766666" type="number"
                                        class="p-3 @error('phone') is-invalid @enderror" name="phone"
                                        value="{{ old('phone') }}" required autocomplete="phone">

                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>

                            <div class="line d-flex justify-content-between gap-3 mb-4">

                                <div class="input d-flex flex-column gap-2 w-50">
                                    <label>Email</label>

                                    <input id="email" placeholder="Ex. gleem@email.com" type="email"
                                        class="p-3 @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input d-flex flex-column gap-2 ">
                                    <label>Password</label>

                                    <input id="password" placeholder="*************" type="password"
                                        class="p-3 @error('password') is-invalid @enderror" name="password" required
                                        autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>

                            <div class="line d-flex justify-content-between gap-3 mb-4">

                                <div class="input d-flex flex-column gap-2 w-50">
                                    <label>Role</label>
                                    <select name="role" id="" class="p-3">
                                        <option value="" disabled selected>Choose</option>
                                        <option value="0">employee</option>
                                        <option value="1">admin</option>
                                    </select>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="bottom d-flex align-items-center justify-content-between">
                        <div class="clear d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="18"
                                viewBox="0 0 14 18" fill="none">
                                <path
                                    d="M11 6V16H3V6H11ZM9.5 0H4.5L3.5 1H0V3H14V1H10.5L9.5 0ZM13 4H1V16C1 17.1 1.9 18 3 18H11C12.1 18 13 17.1 13 16V4Z"
                                    fill="currentColor" />
                            </svg>
                            <input type="reset" value="Clear">
                        </div>
                        <div class="buttons d-flex align-items-center gap-4">
                            <a href="/">Cancel</a>
                            <button type="submit">Save</button>
                        </div>
                    </div>

                </form>


            </div>

            <div class="rights mb-4">
                made with <span class="heart" style="color: red;">&#10084;</span> by <span>BetterWP</span>.
            </div>

        </div>

    </div>



















    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
