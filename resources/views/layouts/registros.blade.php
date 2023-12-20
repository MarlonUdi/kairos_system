@extends('layouts.main')

@section('title', 'Kairos')

@section('content')


    <!DOCTYPE html>
    <html lang="pt-PT" data-bs-theme="light">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <meta name="description" content="Sistema de gestão de documentos para empresas de pequeno, médio e grande porte.">
        <meta name="author" content="Chronos">
        <meta name="keywords"
            content="gestão, chronos, chronos manager, documentos, empresas, colaboradores, contratante, análise">

        <title>Chronos</title>

        <link rel="stylesheet" href="https://chronosmanager.com.br/css/bootstrap.css">



        <link rel="stylesheet" href="https://chronosmanager.com.br/css/style.css">

        <link rel="shortcut icon" href="https://chronosmanager.com.br/img/favicon.png" type="image/x-icon">

    </head>

    <body>


        <div style="height: 3.6rem; background: transparent"></div>

        <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container-fluid">


                <a href="https://chronosmanager.com.br" class="navbar-brand mx-5">
                    <img src="/img/logo_kairos.png" alt="kairos" width="70px">
                </a>



                <button class="btn btn-light btn-sm mx-5  notificacao " type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#main-menu" aria-controls="main-menu">
                    <span class="small">
                        (1)
                        Menu
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                        class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                    </svg>
                </button>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="main-menu" aria-labelledby="main-menu-Label">
                    <div class="offcanvas-header text-white bg-dark">
                        <h5 class="offcanvas-title" id="main-menu-Label">


                            <button type="button" class="btn btn-sm btn-light  notificacao " data-bs-toggle="modal"
                                data-bs-target="#notifications">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                    class="bi bi-bell" viewBox="0 0 16 16">
                                    <path
                                        d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                                </svg> (1)
                            </button>


                            <div class="btn-group dropdown">
                                <button type="button" class="btn btn-sm btn-light dropdown-toggle text-truncate"
                                    style="width: 16rem;" data-bs-toggle="dropdown" aria-expanded="false">
                                    André Campos
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark border border-dark shadow w-100"
                                    aria-labelledby="dropdown-menu">
                                    <li>
                                        <a href="https://chronosmanager.com.br/user-settings" class="dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                                                <path
                                                    d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
                                            </svg> Configurações
                                        </a>
                                    </li>

                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>

                                    <li>
                                        <a href="https://chronosmanager.com.br/logout" class="dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                                <path fill-rule="evenodd"
                                                    d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                            </svg> Sair
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </h5>

                        <button type="button" class="btn btn-link text-white" data-bs-dismiss="offcanvas"
                            aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                class="bi bi-x-lg" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z" />
                                <path fill-rule="evenodd"
                                    d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z" />
                            </svg>
                        </button>

                    </div>

                    <div class="offcanvas-body bg-light">
                        <div class="list-group list-group-flush border-bottom scrollarea">
                            <ul class="nav nav-pills flex-column mb-auto">


                                <li class="nav-item my-1">
                                    <a class="btn btn-outline-dark btn-sm w-100"
                                        href="https://chronosmanager.com.br/company-profile/5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-buildings" viewBox="0 0 16 16">
                                            <path
                                                d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022ZM6 8.694 1 10.36V15h5V8.694ZM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15Z" />
                                            <path
                                                d="M2 11h1v1H2v-1Zm2 0h1v1H4v-1Zm-2 2h1v1H2v-1Zm2 0h1v1H4v-1Zm4-4h1v1H8V9Zm2 0h1v1h-1V9Zm-2 2h1v1H8v-1Zm2 0h1v1h-1v-1Zm2-2h1v1h-1V9Zm0 2h1v1h-1v-1ZM8 7h1v1H8V7Zm2 0h1v1h-1V7Zm2 0h1v1h-1V7ZM8 5h1v1H8V5Zm2 0h1v1h-1V5Zm2 0h1v1h-1V5Zm0-2h1v1h-1V3Z" />
                                        </svg> Construtora Reis
                                    </a>
                                </li>

                                <li class="nav-item my-1">
                                    <a class="btn btn-outline-dark btn-sm w-100"
                                        href="https://chronosmanager.com.br/deactivation-records/5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-person-x" viewBox="0 0 16 16">
                                            <path
                                                d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                            <path fill-rule="evenodd"
                                                d="M12.146 5.146a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z" />
                                        </svg> Colaboradores Desativados
                                    </a>
                                </li>


















                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <div id="div-toast-alert">




        </div>

        <div id="div-toast-notification">
            <div class="toast show my-1 border-dark" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header ps-2 pe-3 py-1">
                    <span class="me-2 badge bg-primary-subtle text-primary border border-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-bell" viewBox="0 0 16 16">
                            <path
                                d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                        </svg>
                    </span>
                    <strong class="me-auto">Documento Vencido</strong>
                    <span class="badge text-warning">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                            class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                        </svg>
                    </span>
                    <small>14/12/2023 15:00</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <a class="d-block text-decoration-none toast-body text-dark small p-2" data-bs-toggle="modal"
                    data-bs-target="#notifications" role="button">
                    (Construtora Reis) O documento &quot;Seguro de Vida&quot; está vencido!
                </a>
            </div>
        </div>


        <div class="modal fade" id="notifications" tabindex="-1" aria-labelledby="notifications-Label"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="notifications-Label">
                            Notificações (1)
                        </h6>

                        <div class="d-inline ms-3">
                            <form action="https://chronosmanager.com.br/all-notification-viewed" method="POST"
                                class="d-inline">
                                <input type="hidden" name="_method" value="PUT"> <input type="hidden"
                                    name="_token" value="ZxUQ6ZLMOP6BxSGD0lYeLOmq5ICZzDzCW1NGgAja"> <button
                                    class="btn btn-sm btn-outline-primary shadow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                        <path
                                            d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                                    </svg>
                                    Visualizar Tudo
                                </button>
                            </form>

                            <form action="https://chronosmanager.com.br/delete-all-notifications" method="POST"
                                class="d-inline">
                                <input type="hidden" name="_method" value="DELETE"> <input type="hidden"
                                    name="_token" value="ZxUQ6ZLMOP6BxSGD0lYeLOmq5ICZzDzCW1NGgAja"> <button
                                    class="btn btn-sm btn-outline-danger shadow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                        <path
                                            d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                    </svg>
                                    Deletar Tudo
                                </button>
                            </form>
                        </div>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="mb-2">
                            <span class="d-block mb-2 small">
                                Novas notificações:
                            </span>

                            <div class="card border-secondary shadow my-2">
                                <div class="card-header ps-2 pe-1 py-1">
                                    <span class="me-1 badge bg-primary-subtle text-primary border border-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                                            <path
                                                d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                                        </svg>
                                    </span>
                                    <span class="me-auto h6">
                                        Documento Vencido
                                    </span>
                                    <span class="badge text-warning">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                    </span>
                                    <span class="float-end d-block">
                                        <span class="text-muted small me-2">
                                            14/12/2023 15:00
                                        </span>

                                        <form action="https://chronosmanager.com.br/notification-viewed/4" method="POST"
                                            class="d-inline">
                                            <input type="hidden" name="_method" value="PUT"> <input type="hidden"
                                                name="_token" value="ZxUQ6ZLMOP6BxSGD0lYeLOmq5ICZzDzCW1NGgAja"> <button
                                                class="btn btn-sm btn-outline-primary shadow">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                                    <path
                                                        d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                                                </svg>
                                            </button>
                                        </form>

                                        <form action="https://chronosmanager.com.br/delete-notification/4" method="POST"
                                            class="d-inline">
                                            <input type="hidden" name="_method" value="DELETE"> <input type="hidden"
                                                name="_token" value="ZxUQ6ZLMOP6BxSGD0lYeLOmq5ICZzDzCW1NGgAja"> <button
                                                class="btn btn-sm btn-outline-danger shadow pt-0 pb-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                    <path
                                                        d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                                </svg>
                                            </button>
                                        </form>
                                    </span>
                                </div>
                                <div class="card-body px-3 py-2">
                                    <span class="card-text">
                                        (Construtora Reis) O documento &quot;Seguro de Vida&quot; está vencido!
                                    </span>
                                </div>
                            </div>

                        </div>

                        <div class="d-block">


                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div id="botao-whatsapp" class="shadow text-white" style="z-index: 1000;">
            <a href="https://api.whatsapp.com/send?phone=5534997711583" target="_blank" class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                    class="bi bi-whatsapp" viewBox="0 0 16 16">
                    <path
                        d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                </svg>
            </a>

            <div id="whatsapp-mensagem" style="z-index: 1000"
                class="shadow rounded p-2 border small border-success text-success bg-success-subtle">
                Em caso de dúvidas, entre em contato com o suporte! <br>
                Suporte: <span class="whatsapp">34997711583</span> <br>
                Ou clicando no ícone de WhatsApp.
            </div>
        </div>


        <main class="px-2">

            <div class="col-lg-11 mx-auto mt-4 mb-5">


                <div class="card border-secondary shadow-lg col-lg-10 mx-auto my-3">
                    <div class="card-body row">

                        <div class="col-lg-3 mx-auto mb-2">
                            <div class="m-0">
                                <img src="https://chronosmanager.com.br/profile-img/cmy_2cbd600a79c79fd6f91f614f104bb1cf.jpg"
                                    class="d-block mx-auto border border-secondary rounded shadow" alt="Construtora Reis"
                                    width="200px" height="150px">
                            </div>
                            <hr class="my-3">



                            <!-- Button trigger modal -->
                            <div class="my-2">
                                <button type="button" class="notificacao btn btn-dark btn-sm shadow w-100 text-light"
                                    data-bs-toggle="modal" data-bs-target="#document-notifications">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                                        <path
                                            d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                                    </svg> Notificações (3)
                                </button>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="document-notifications" tabindex="-1"
                                aria-labelledby="document-notifications-Label" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h6 class="modal-title" id="document-notifications-Label">
                                                Documentos:
                                            </h6>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">

                                            <p class="my-1">
                                                Reprovados:
                                            </p>
                                            <div class="border border-dark rounded shadow-lg small my-2">
                                                <div class="w-100 border-bottom border-dark p-2">
                                                    <span class="d-block">
                                                        "Pagamento de Salário (Colaboradores e Pró-Labore)"
                                                    </span>
                                                </div>

                                                <div class="text-end mb-2 pe-2">
                                                    <span class="badge text-bg-info float-start mt-3 mx-3">
                                                        Reprovado
                                                    </span>

                                                    <a class="btn btn-outline-dark btn-sm shadow mt-2"
                                                        href="https://chronosmanager.com.br/company/send-document/5">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="bi bi-arrow-90deg-right" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M14.854 4.854a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 4H3.5A2.5 2.5 0 0 0 1 6.5v8a.5.5 0 0 0 1 0v-8A1.5 1.5 0 0 1 3.5 5h9.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4z" />
                                                        </svg> Ver mais
                                                    </a>
                                                </div>

                                            </div>
                                            <div class="border border-dark rounded shadow-lg small my-2">
                                                <div class="w-100 border-bottom border-dark p-2">
                                                    <span class="d-block">
                                                        "PGR (Programa de Gerenciamento de Riscos)"
                                                    </span>
                                                </div>

                                                <div class="text-end mb-2 pe-2">
                                                    <span class="badge text-bg-info float-start mt-3 mx-3">
                                                        Reprovado
                                                    </span>

                                                    <a class="btn btn-outline-dark btn-sm shadow mt-2"
                                                        href="https://chronosmanager.com.br/company/send-document/5">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="bi bi-arrow-90deg-right" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M14.854 4.854a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 4H3.5A2.5 2.5 0 0 0 1 6.5v8a.5.5 0 0 0 1 0v-8A1.5 1.5 0 0 1 3.5 5h9.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4z" />
                                                        </svg> Ver mais
                                                    </a>
                                                </div>

                                            </div>

                                            <p class="my-1  border-top border-dark mt-4 p-2 ">
                                                Vencidos:
                                            </p>
                                            <div class="border border-dark rounded shadow small my-2">
                                                <div class="w-100 border-bottom border-dark p-2">
                                                    <span class="d-block">
                                                        "Seguro de Vida"
                                                    </span>
                                                </div>

                                                <div class="text-end mb-2 pe-2">
                                                    <span class="badge text-bg-danger float-start mt-3 mx-3">
                                                        Vencido
                                                    </span>

                                                    <a class="btn btn-outline-dark btn-sm shadow mt-2"
                                                        href="https://chronosmanager.com.br/company/send-document/5">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="bi bi-arrow-90deg-right" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M14.854 4.854a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 4H3.5A2.5 2.5 0 0 0 1 6.5v8a.5.5 0 0 0 1 0v-8A1.5 1.5 0 0 1 3.5 5h9.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4z" />
                                                        </svg> Ver mais
                                                    </a>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-2">
                                <a href="https://chronosmanager.com.br/register-collaborator/5"
                                    class="btn btn-secondary btn-sm shadow w-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                                        <path
                                            d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                        <path fill-rule="evenodd"
                                            d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                                    </svg> Cadastrar Colaborador
                                </a>
                            </div>


                            <div class="my-2">
                                <a href="https://chronosmanager.com.br/company-edit/5"
                                    class="btn btn-outline-secondary btn-sm shadow w-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path
                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd"
                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                    </svg> Editar Perfil
                                </a>
                            </div>

                            <div class="my-2">
                                <a href="https://chronosmanager.com.br/records/cmy/5"
                                    class="btn btn-outline-secondary btn-sm shadow w-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                                        <path
                                            d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z" />
                                        <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z" />
                                        <path
                                            d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
                                    </svg> Histórico
                                </a>
                            </div>

                            <div class="my-2">
                                <a href="https://chronosmanager.com.br/company/send-document/5"
                                    class="btn btn-outline-secondary btn-sm shadow w-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-file-earmark-plus" viewBox="0 0 16 16">
                                        <path
                                            d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5z" />
                                        <path
                                            d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z" />
                                    </svg> Anexar Documentos
                                </a>
                            </div>

                            <div class="my-2">
                                <a href="https://chronosmanager.com.br/all-docs/5/cmy"
                                    class="btn btn-outline-secondary btn-sm shadow w-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-filetype-pdf" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z" />
                                    </svg> Todos os Documentos
                                </a>
                            </div>

                            <div class="my-2">
                                <a href="https://chronosmanager.com.br/deactivation-records/5"
                                    class="btn btn-outline-secondary btn-sm shadow w-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-person-x" viewBox="0 0 16 16">
                                        <path
                                            d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                        <path fill-rule="evenodd"
                                            d="M12.146 5.146a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z" />
                                    </svg> Colaboradores Desativados
                                </a>
                            </div>

                            <div class="mb-2">
                                <a href="https://chronosmanager.com.br/select-collaborators/5"
                                    class="btn btn-outline-secondary btn-sm shadow w-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-person-vcard" viewBox="0 0 16 16">
                                        <path
                                            d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5ZM9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8Zm1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Z" />
                                        <path
                                            d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2ZM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96c.026-.163.04-.33.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1.006 1.006 0 0 1 1 12V4Z" />
                                    </svg> Selecionar Carteirinhas
                                </a>
                            </div>

                            <div class="my-2">
                                <a href="https://chronosmanager.com.br/report-situation/5"
                                    class="btn btn-outline-secondary btn-sm shadow w-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-pie-chart" viewBox="0 0 16 16">
                                        <path
                                            d="M7.5 1.018a7 7 0 0 0-4.79 11.566L7.5 7.793V1.018zm1 0V7.5h6.482A7.001 7.001 0 0 0 8.5 1.018zM14.982 8.5H8.207l-4.79 4.79A7 7 0 0 0 14.982 8.5zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z" />
                                    </svg> Relatório de Situação
                                </a>
                            </div>

                        </div>

                        <div class="col-lg-9 mx-auto mb-2">
                            <div class="col-lg-8 m-auto">
                                <div class="btn-hover">
                                    <a href="https://chronosmanager.com.br/company-profile/5"
                                        class="btn btn-sm btn-danger shadow w-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-hand-thumbs-down" viewBox="0 0 16 16">
                                            <path
                                                d="M8.864 15.674c-.956.24-1.843-.484-1.908-1.42-.072-1.05-.23-2.015-.428-2.59-.125-.36-.479-1.012-1.04-1.638-.557-.624-1.282-1.179-2.131-1.41C2.685 8.432 2 7.85 2 7V3c0-.845.682-1.464 1.448-1.546 1.07-.113 1.564-.415 2.068-.723l.048-.029c.272-.166.578-.349.97-.484C6.931.08 7.395 0 8 0h3.5c.937 0 1.599.478 1.934 1.064.164.287.254.607.254.913 0 .152-.023.312-.077.464.201.262.38.577.488.9.11.33.172.762.004 1.15.069.13.12.268.159.403.077.27.113.567.113.856 0 .289-.036.586-.113.856-.035.12-.08.244-.138.363.394.571.418 1.2.234 1.733-.206.592-.682 1.1-1.2 1.272-.847.283-1.803.276-2.516.211a9.877 9.877 0 0 1-.443-.05 9.364 9.364 0 0 1-.062 4.51c-.138.508-.55.848-1.012.964l-.261.065zM11.5 1H8c-.51 0-.863.068-1.14.163-.281.097-.506.229-.776.393l-.04.025c-.555.338-1.198.73-2.49.868-.333.035-.554.29-.554.55V7c0 .255.226.543.62.65 1.095.3 1.977.997 2.614 1.709.635.71 1.064 1.475 1.238 1.977.243.7.407 1.768.482 2.85.025.362.36.595.667.518l.262-.065c.16-.04.258-.144.288-.255a8.34 8.34 0 0 0-.145-4.726.5.5 0 0 1 .595-.643h.003l.014.004.058.013a8.912 8.912 0 0 0 1.036.157c.663.06 1.457.054 2.11-.163.175-.059.45-.301.57-.651.107-.308.087-.67-.266-1.021L12.793 7l.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581 0-.211-.027-.414-.075-.581-.05-.174-.111-.273-.154-.315l-.353-.354.353-.354c.047-.047.109-.176.005-.488a2.224 2.224 0 0 0-.505-.804l-.353-.354.353-.354c.006-.005.041-.05.041-.17a.866.866 0 0 0-.121-.415C12.4 1.272 12.063 1 11.5 1z" />
                                        </svg> Não Liberada
                                    </a>

                                    <div class="div-hover col-lg-12 shadow border border-secondary rounded">
                                        <iframe src="https://chronosmanager.com.br/situation/cmy/5" frameborder="0"
                                            class="div-iframe"></iframe>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-12 mx-auto mt-3 row">
                                <div class="col-lg-6 mx-auto">
                                    <p class="m-1 border border-secondary rounded py-1 px-2 shadow w-100">
                                        <span class="font-label">Nome:</span>
                                        <span class="font-small">Construtora Reis</span>
                                    </p>

                                    <p class="m-1 border border-secondary rounded py-1 px-2 shadow w-100">
                                        <span class="font-label">CNPJ:</span>
                                        <span class="font-small cnpj">44444444444444</span>
                                    </p>

                                    <p class="m-1 border border-secondary rounded py-1 px-2 shadow w-100">
                                        <span class="font-label">Ramo de atividade:</span>
                                        <span class="font-small">Construção Civil</span>
                                    </p>

                                    <p class="m-1 border border-secondary rounded py-1 px-2 shadow w-100">
                                        <span class="font-label">Tipo de empresa:</span>
                                        <span class="font-small">Empresas em Geral</span>
                                    </p>

                                    <p class="m-1 border border-secondary rounded py-1 px-2 shadow w-100">
                                        <span class="font-label">Tipo de atuação:</span>
                                        <span class="font-small">Contínuo</span>
                                    </p>
                                </div>

                                <div class="col-lg-6 mx-auto">
                                    <p class="m-1 border border-secondary rounded py-1 px-2 shadow w-100">
                                        <span class="font-label">Email:</span>
                                        <span class="font-small">aconstrutorareis@companhiareis.com</span>
                                    </p>

                                    <p class="m-1 border border-secondary rounded py-1 px-2 shadow w-100">
                                        <span class="font-label">Telefone da empresa:</span>
                                        <span class="font-small telefone_fixo">7777777777</span>
                                    </p>

                                    <p class="m-1 border border-secondary rounded py-1 px-2 shadow w-100">
                                        <span class="font-label">Responsável:</span>
                                        <span class="font-small">André campos</span>
                                    </p>

                                    <p class="m-1 border border-secondary rounded py-1 px-2 shadow w-100">
                                        <span class="font-label">Telefone do Responsável:</span>
                                        <span class="font-small telefone">11111111111</span>
                                    </p>

                                    <p class="m-1 border border-secondary rounded py-1 px-2 shadow w-100">
                                        <span class="font-label">Nível de risco:</span>
                                        <span class="font-small">Alto</span>
                                    </p>
                                </div>
                            </div>
                            <hr class="my-3">

                            <div class="mx-auto p-0 small">

                                <span class="mb-1 badge text-bg-secondary">
                                    Em Análise:
                                </span>
                                <div class="row">
                                    <div class="col-md-6 my-1">
                                        <div class="mx-auto border border-secondary rounded py-1 px-2 shadow w-100 small">
                                            <span class="d-block text-truncate">
                                                GFIP-SEFIP (Guia de Recolhimento do FGTS e de Informações à Previdência
                                                Social)
                                            </span>
                                            <hr class="my-0">
                                            <span class="d-block">
                                                Enviado dia: 14/12/2023 13:37h
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 my-1">
                                        <div class="mx-auto border border-secondary rounded py-1 px-2 shadow w-100 small">
                                            <span class="d-block text-truncate">
                                                Guia de Recolhimento FGTS + Comprovante de Pagamento
                                            </span>
                                            <hr class="my-0">
                                            <span class="d-block">
                                                Enviado dia: 14/12/2023 13:37h
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 my-1">
                                        <div class="mx-auto border border-secondary rounded py-1 px-2 shadow w-100 small">
                                            <span class="d-block text-truncate">
                                                Guia de Recolhimento INSS + Comprovante de Pagamento
                                            </span>
                                            <hr class="my-0">
                                            <span class="d-block">
                                                Enviado dia: 14/12/2023 13:38h
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <hr class="mb-1 mt-2">

                                <span class="my-1 badge text-bg-primary">
                                    Reprovados:
                                </span>
                                <div class="row">
                                    <div class="col-md-12 my-1">
                                        <div class="mx-auto border border-primary rounded py-1 px-2 shadow w-100 small">
                                            <span class="d-block text-truncate">
                                                Pagamento de Salário (Colaboradores e Pró-Labore)
                                            </span>
                                            <hr class="my-1">
                                            <h6 class="m-0 mb-1" style="font-size: .8rem;">Motivo:</h6>
                                            <span class="d-block">
                                                Verificamos que o comprovante de pagamento está zerado sem constar o motivo
                                                da ausência de valores a receber. Por gentileza, postar o comprovante de
                                                pagamento constando o motivo dos descontos. </span>
                                            <hr class="my-1">
                                            <span class="d-block text-muted">
                                                Reprovado por: Mariane De Castro - 14/12/2023 14:28h
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 my-1">
                                        <div class="mx-auto border border-primary rounded py-1 px-2 shadow w-100 small">
                                            <span class="d-block text-truncate">
                                                PGR (Programa de Gerenciamento de Riscos)
                                            </span>
                                            <hr class="my-1">
                                            <h6 class="m-0 mb-1" style="font-size: .8rem;">Motivo:</h6>
                                            <span class="d-block">
                                                Ausente a assinatura do profissional que elaborou o PGR. </span>
                                            <hr class="my-1">
                                            <span class="d-block text-muted">
                                                Reprovado por: Mariane De Castro - 14/12/2023 14:29h
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <hr class="mb-1 mt-2">

                                <span class="mb-1 badge text-bg-success">
                                    Vigentes:
                                </span>
                                <div class="row">
                                    <div class="col-md-6 my-1">
                                        <div class="mx-auto border border-success rounded py-1 px-2 shadow w-100 small">
                                            <span class="d-block text-truncate">
                                                CNPJ - Cadastro Nacional de Pessoa Jurídica
                                            </span>
                                            <hr class="my-1">
                                            <span class="">
                                                Enviado dia: 14/12/2023 13:34h
                                            </span>
                                            <hr class="my-1">
                                            <span class="d-block text-muted">
                                                Aprovado por: Mariane De Castro - 14/12/2023 14:27h
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 my-1">
                                        <div class="mx-auto border border-success rounded py-1 px-2 shadow w-100 small">
                                            <span class="d-block text-truncate">
                                                Contrato Social
                                            </span>
                                            <hr class="my-1">
                                            <span class="">
                                                Enviado dia: 14/12/2023 13:34h
                                            </span>
                                            <hr class="my-1">
                                            <span class="d-block text-muted">
                                                Aprovado por: Mariane De Castro - 14/12/2023 14:27h
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 my-1">
                                        <div class="mx-auto border border-success rounded py-1 px-2 shadow w-100 small">
                                            <span class="d-block text-truncate">
                                                CRF FGTS (Certificado de Regularidade do Fundo de Garantia Tempo de Serviço)
                                            </span>
                                            <hr class="my-1">
                                            <span class="">
                                                Válido até: 04/01/2024
                                            </span>
                                            <hr class="my-1">
                                            <span class="d-block text-muted">
                                                Aprovado por: Mariane De Castro - 14/12/2023 14:28h
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <hr class="mb-1 mt-2">

                                <span class="mb-1 badge text-bg-warning">
                                    A Vencer:
                                </span>
                                <div class="row">
                                    <div class="col-md-6 my-1">
                                        <div class="mx-auto border border-warning rounded py-1 px-2 shadow w-100 small">
                                            <span class="d-block text-truncate">
                                                CND INSS (Certidão Negativa de Débitos)
                                            </span>
                                            <hr class="my-1">
                                            <span class="">
                                                Válido até: 21/12/2023
                                            </span>
                                            <hr class="my-1">
                                            <span class="d-block text-muted">
                                                Aprovado por: Mariane De Castro
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 my-1">
                                        <div class="mx-auto border border-warning rounded py-1 px-2 shadow w-100 small">
                                            <span class="d-block text-truncate">
                                                PCMSO - (Programa de Controle Médico e Saúde Ocupacional)
                                            </span>
                                            <hr class="my-1">
                                            <span class="">
                                                Válido até: 21/12/2023
                                            </span>
                                            <hr class="my-1">
                                            <span class="d-block text-muted">
                                                Aprovado por: Mariane De Castro
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <hr class="mb-1 mt-2">

                                <span class="my-1 badge text-bg-danger">
                                    Vencidos:
                                </span>
                                <div class="row">
                                    <div class="col-md-6 my-1">
                                        <div class="mx-auto border border-danger rounded py-1 px-2 shadow w-100 small">
                                            <span class="d-block text-truncate">
                                                Seguro de Vida
                                            </span>
                                            <hr class="my-0">
                                            <span class="d-block">
                                                Vencido dia: 12/12/2023
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="col-md-6 mx-auto mt-3 mb-4">
                    <form action="https://chronosmanager.com.br/company-profile/5" method="GET" autocomplete="off">
                        <input type="hidden" name="_token" value="ZxUQ6ZLMOP6BxSGD0lYeLOmq5ICZzDzCW1NGgAja">
                        <div class="input-group">
                            <input name="search" type="search" class="form-control form-control-sm shadow border-dark"
                                placeholder="Buscar" aria-describedby="btn-pesquisar">


                            <a href="https://chronosmanager.com.br/company-profile/5"
                                class="btn btn-outline-dark shadow btn-sm border-start-0">
                                N° de Colaboradores: 2
                            </a>

                            <button class="btn btn-dark shadow btn-sm" type="submit" id="btn-pesquisar">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                    fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                            </button>

                        </div>
                    </form>
                </div>



                <div class="card border-secondary my-3 shadow col-lg-10 mx-auto">
                    <div class="card-body row">

                        <div class="col-lg-3 my-2">
                            <div class="m-0">
                                <img src="https://chronosmanager.com.br/profile-img/clr_8a9d30c3e6954b5bfcd6ff62185e274b.jpg"
                                    class="d-block mx-auto border border-secondary rounded shadow"
                                    alt="João Antônio Santos" width="105px" height="140px">
                            </div>
                            <hr class="my-3">

                            <div class="my-2">
                                <a href="https://chronosmanager.com.br/collaborator-profile/8"
                                    class="btn btn-secondary btn-sm shadow w-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path
                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                    </svg> Ver Colaborador
                                </a>
                            </div>


                            <div class="my-2">
                                <a href="https://chronosmanager.com.br/collaborator-edit/8"
                                    class="btn btn-outline-secondary btn-sm shadow w-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path
                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd"
                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                    </svg> Editar Perfil
                                </a>
                            </div>

                            <div class="my-2">
                                <button type="button" class="btn btn-outline-secondary btn-sm shadow w-100"
                                    data-bs-toggle="modal" data-bs-target="#deactivate-col8">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-person-x" viewBox="0 0 16 16">
                                        <path
                                            d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                        <path fill-rule="evenodd"
                                            d="M12.146 5.146a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z" />
                                    </svg> Desativar Colaborador
                                </button>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="deactivate-col8" tabindex="-1"
                                aria-labelledby="deactivate-col8-Label" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h6 class="modal-title" id="deactivate-col8-Label">
                                                Desativar: João Antônio Santos - CPF: <span
                                                    class="cpf">34244444444</span>
                                            </h6>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">

                                            <div class="border border-secondary rounded shadow py-2 px-3">
                                                Para desativar o colaborador, envie o respectivo documento de rescisão!
                                            </div>

                                            <hr class="mt-4">
                                            <div class="col-lg-12">
                                                <a href="https://chronosmanager.com.br/collaborator/send-document/8"
                                                    class="btn btn-primary btn-sm shadow float-end">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-file-earmark-plus"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5z" />
                                                        <path
                                                            d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z" />
                                                    </svg> Anexar Documentos
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="my-2">
                                <a href="https://chronosmanager.com.br/records/clr/8"
                                    class="btn btn-outline-secondary btn-sm shadow w-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                                        <path
                                            d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z" />
                                        <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z" />
                                        <path
                                            d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
                                    </svg> Histórico
                                </a>
                            </div>


                            <div class="my-2">
                                <a href="https://chronosmanager.com.br/collaborator/send-document/8"
                                    class="btn btn-outline-secondary btn-sm shadow w-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-file-earmark-plus" viewBox="0 0 16 16">
                                        <path
                                            d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5z" />
                                        <path
                                            d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z" />
                                    </svg> Anexar Documentos
                                </a>
                            </div>

                            <div class="my-2">
                                <a href="https://chronosmanager.com.br/all-docs/8/clr"
                                    class="btn btn-outline-secondary btn-sm shadow w-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-filetype-pdf" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z" />
                                    </svg> Todos os Documentos
                                </a>
                            </div>

                            <div class="my-2">
                                <a href="https://chronosmanager.com.br/wallet/8"
                                    class="btn btn-outline-secondary btn-sm shadow w-100" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-person-vcard" viewBox="0 0 16 16">
                                        <path
                                            d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5ZM9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8Zm1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Z" />
                                        <path
                                            d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2ZM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96c.026-.163.04-.33.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1.006 1.006 0 0 1 1 12V4Z" />
                                    </svg> Carteirinha
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-9 my-2">

                            <div class="col-lg-8 m-auto">
                                <div class="btn-hover">
                                    <a href="https://chronosmanager.com.br/collaborator-profile/8"
                                        class="btn btn-sm btn-danger shadow w-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-hand-thumbs-down" viewBox="0 0 16 16">
                                            <path
                                                d="M8.864 15.674c-.956.24-1.843-.484-1.908-1.42-.072-1.05-.23-2.015-.428-2.59-.125-.36-.479-1.012-1.04-1.638-.557-.624-1.282-1.179-2.131-1.41C2.685 8.432 2 7.85 2 7V3c0-.845.682-1.464 1.448-1.546 1.07-.113 1.564-.415 2.068-.723l.048-.029c.272-.166.578-.349.97-.484C6.931.08 7.395 0 8 0h3.5c.937 0 1.599.478 1.934 1.064.164.287.254.607.254.913 0 .152-.023.312-.077.464.201.262.38.577.488.9.11.33.172.762.004 1.15.069.13.12.268.159.403.077.27.113.567.113.856 0 .289-.036.586-.113.856-.035.12-.08.244-.138.363.394.571.418 1.2.234 1.733-.206.592-.682 1.1-1.2 1.272-.847.283-1.803.276-2.516.211a9.877 9.877 0 0 1-.443-.05 9.364 9.364 0 0 1-.062 4.51c-.138.508-.55.848-1.012.964l-.261.065zM11.5 1H8c-.51 0-.863.068-1.14.163-.281.097-.506.229-.776.393l-.04.025c-.555.338-1.198.73-2.49.868-.333.035-.554.29-.554.55V7c0 .255.226.543.62.65 1.095.3 1.977.997 2.614 1.709.635.71 1.064 1.475 1.238 1.977.243.7.407 1.768.482 2.85.025.362.36.595.667.518l.262-.065c.16-.04.258-.144.288-.255a8.34 8.34 0 0 0-.145-4.726.5.5 0 0 1 .595-.643h.003l.014.004.058.013a8.912 8.912 0 0 0 1.036.157c.663.06 1.457.054 2.11-.163.175-.059.45-.301.57-.651.107-.308.087-.67-.266-1.021L12.793 7l.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581 0-.211-.027-.414-.075-.581-.05-.174-.111-.273-.154-.315l-.353-.354.353-.354c.047-.047.109-.176.005-.488a2.224 2.224 0 0 0-.505-.804l-.353-.354.353-.354c.006-.005.041-.05.041-.17a.866.866 0 0 0-.121-.415C12.4 1.272 12.063 1 11.5 1z" />
                                        </svg> Não Liberado
                                    </a>

                                    <div class="div-hover col-lg-12 shadow border border-secondary rounded">
                                        <iframe src="https://chronosmanager.com.br/situation/clr/8" frameborder="0"
                                            class="div-iframe"></iframe>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-12 mx-auto mt-3 row">
                                <div class="col-lg-6 mx-auto">
                                    <p class="m-1 border border-secondary rounded py-1 px-2 shadow w-100">
                                        <span class="font-label">Nome:</span>
                                        <span class="font-small">João Antônio Santos</span>
                                    </p>

                                    <p class="m-1 border border-secondary rounded py-1 px-2 shadow w-100">
                                        <span class="font-label">CPF:</span>
                                        <span class="font-small cpf">34244444444</span>
                                    </p>

                                    <p class="m-1 border border-secondary rounded py-1 px-2 shadow w-100">
                                        <span class="font-label">Profissão:</span>
                                        <span class="font-small">Servente</span>
                                    </p>
                                </div>

                                <div class="col-lg-6 mx-auto">
                                    <p class="m-1 border border-secondary rounded py-1 px-2 shadow w-100">
                                        <span class="font-label">Categoria:</span>
                                        <span class="font-small">Contrato CLT</span>
                                    </p>

                                    <p class="m-1 border border-secondary rounded py-1 px-2 shadow w-100">
                                        <span class="font-label">Admissão:</span>
                                        <span class="font-small">01/02/2023</span>
                                    </p>

                                    <p class="m-1 border border-secondary rounded py-1 px-2 shadow w-100">
                                        <span class="font-label">Cidade:</span>
                                        <span class="font-small">Aracaju - SE</span>
                                    </p>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>



                <div class="card border-secondary my-3 shadow col-lg-10 mx-auto">
                    <div class="card-body row">

                        <div class="col-lg-3 my-2">
                            <div class="m-0">
                                <img src="https://chronosmanager.com.br/profile-img/clr_07ae76faf2192539faf4a152669830bd.jpg"
                                    class="d-block mx-auto border border-secondary rounded shadow"
                                    alt="Samuel Tonielo Lima" width="105px" height="140px">
                            </div>
                            <hr class="my-3">

                            <div class="my-2">
                                <a href="https://chronosmanager.com.br/collaborator-profile/9"
                                    class="btn btn-secondary btn-sm shadow w-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path
                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                    </svg> Ver Colaborador
                                </a>
                            </div>


                            <div class="my-2">
                                <a href="https://chronosmanager.com.br/collaborator-edit/9"
                                    class="btn btn-outline-secondary btn-sm shadow w-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path
                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd"
                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                    </svg> Editar Perfil
                                </a>
                            </div>

                            <div class="my-2">
                                <button type="button" class="btn btn-outline-secondary btn-sm shadow w-100"
                                    data-bs-toggle="modal" data-bs-target="#deactivate-col9">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-person-x" viewBox="0 0 16 16">
                                        <path
                                            d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                        <path fill-rule="evenodd"
                                            d="M12.146 5.146a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z" />
                                    </svg> Desativar Colaborador
                                </button>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="deactivate-col9" tabindex="-1"
                                aria-labelledby="deactivate-col9-Label" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h6 class="modal-title" id="deactivate-col9-Label">
                                                Desativar: Samuel Tonielo Lima - CPF: <span
                                                    class="cpf">64523258985</span>
                                            </h6>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">

                                            <div class="border border-secondary rounded shadow py-2 px-3">
                                                Para desativar o colaborador, envie o respectivo documento de rescisão!
                                            </div>

                                            <hr class="mt-4">
                                            <div class="col-lg-12">
                                                <a href="https://chronosmanager.com.br/collaborator/send-document/9"
                                                    class="btn btn-primary btn-sm shadow float-end">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-file-earmark-plus"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5z" />
                                                        <path
                                                            d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z" />
                                                    </svg> Anexar Documentos
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="my-2">
                                <a href="https://chronosmanager.com.br/records/clr/9"
                                    class="btn btn-outline-secondary btn-sm shadow w-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                                        <path
                                            d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z" />
                                        <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z" />
                                        <path
                                            d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
                                    </svg> Histórico
                                </a>
                            </div>


                            <div class="my-2">
                                <a href="https://chronosmanager.com.br/collaborator/send-document/9"
                                    class="btn btn-outline-secondary btn-sm shadow w-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-file-earmark-plus" viewBox="0 0 16 16">
                                        <path
                                            d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5z" />
                                        <path
                                            d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z" />
                                    </svg> Anexar Documentos
                                </a>
                            </div>

                            <div class="my-2">
                                <a href="https://chronosmanager.com.br/all-docs/9/clr"
                                    class="btn btn-outline-secondary btn-sm shadow w-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-filetype-pdf" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z" />
                                    </svg> Todos os Documentos
                                </a>
                            </div>

                            <div class="my-2">
                                <a href="https://chronosmanager.com.br/wallet/9"
                                    class="btn btn-outline-secondary btn-sm shadow w-100" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-person-vcard" viewBox="0 0 16 16">
                                        <path
                                            d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5ZM9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8Zm1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Z" />
                                        <path
                                            d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2ZM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96c.026-.163.04-.33.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1.006 1.006 0 0 1 1 12V4Z" />
                                    </svg> Carteirinha
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-9 my-2">

                            <div class="col-lg-8 m-auto">
                                <div class="btn-hover">
                                    <a href="https://chronosmanager.com.br/collaborator-profile/9"
                                        class="btn btn-sm btn-danger shadow w-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-hand-thumbs-down" viewBox="0 0 16 16">
                                            <path
                                                d="M8.864 15.674c-.956.24-1.843-.484-1.908-1.42-.072-1.05-.23-2.015-.428-2.59-.125-.36-.479-1.012-1.04-1.638-.557-.624-1.282-1.179-2.131-1.41C2.685 8.432 2 7.85 2 7V3c0-.845.682-1.464 1.448-1.546 1.07-.113 1.564-.415 2.068-.723l.048-.029c.272-.166.578-.349.97-.484C6.931.08 7.395 0 8 0h3.5c.937 0 1.599.478 1.934 1.064.164.287.254.607.254.913 0 .152-.023.312-.077.464.201.262.38.577.488.9.11.33.172.762.004 1.15.069.13.12.268.159.403.077.27.113.567.113.856 0 .289-.036.586-.113.856-.035.12-.08.244-.138.363.394.571.418 1.2.234 1.733-.206.592-.682 1.1-1.2 1.272-.847.283-1.803.276-2.516.211a9.877 9.877 0 0 1-.443-.05 9.364 9.364 0 0 1-.062 4.51c-.138.508-.55.848-1.012.964l-.261.065zM11.5 1H8c-.51 0-.863.068-1.14.163-.281.097-.506.229-.776.393l-.04.025c-.555.338-1.198.73-2.49.868-.333.035-.554.29-.554.55V7c0 .255.226.543.62.65 1.095.3 1.977.997 2.614 1.709.635.71 1.064 1.475 1.238 1.977.243.7.407 1.768.482 2.85.025.362.36.595.667.518l.262-.065c.16-.04.258-.144.288-.255a8.34 8.34 0 0 0-.145-4.726.5.5 0 0 1 .595-.643h.003l.014.004.058.013a8.912 8.912 0 0 0 1.036.157c.663.06 1.457.054 2.11-.163.175-.059.45-.301.57-.651.107-.308.087-.67-.266-1.021L12.793 7l.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581 0-.211-.027-.414-.075-.581-.05-.174-.111-.273-.154-.315l-.353-.354.353-.354c.047-.047.109-.176.005-.488a2.224 2.224 0 0 0-.505-.804l-.353-.354.353-.354c.006-.005.041-.05.041-.17a.866.866 0 0 0-.121-.415C12.4 1.272 12.063 1 11.5 1z" />
                                        </svg> Não Liberado
                                    </a>

                                    <div class="div-hover col-lg-12 shadow border border-secondary rounded">
                                        <iframe src="https://chronosmanager.com.br/situation/clr/9" frameborder="0"
                                            class="div-iframe"></iframe>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-12 mx-auto mt-3 row">
                                <div class="col-lg-6 mx-auto">
                                    <p class="m-1 border border-secondary rounded py-1 px-2 shadow w-100">
                                        <span class="font-label">Nome:</span>
                                        <span class="font-small">Samuel Tonielo Lima</span>
                                    </p>

                                    <p class="m-1 border border-secondary rounded py-1 px-2 shadow w-100">
                                        <span class="font-label">CPF:</span>
                                        <span class="font-small cpf">64523258985</span>
                                    </p>

                                    <p class="m-1 border border-secondary rounded py-1 px-2 shadow w-100">
                                        <span class="font-label">Profissão:</span>
                                        <span class="font-small">Servente</span>
                                    </p>
                                </div>

                                <div class="col-lg-6 mx-auto">
                                    <p class="m-1 border border-secondary rounded py-1 px-2 shadow w-100">
                                        <span class="font-label">Categoria:</span>
                                        <span class="font-small">Contrato CLT</span>
                                    </p>

                                    <p class="m-1 border border-secondary rounded py-1 px-2 shadow w-100">
                                        <span class="font-label">Admissão:</span>
                                        <span class="font-small">10/10/2022</span>
                                    </p>

                                    <p class="m-1 border border-secondary rounded py-1 px-2 shadow w-100">
                                        <span class="font-label">Cidade:</span>
                                        <span class="font-small">Belo Horizonte - MG</span>
                                    </p>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>


            </div>

        </main>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"
            integrity="sha256-yE5LLp5HSQ/z+hJeCqkz9hdjNkk1jaiGG0tDCraumnA=" crossorigin="anonymous"></script>

        <script>
            $(document).ready(function($) {
                $('.cnpj').mask('99.999.999/9999-99');
            });

            $(document).ready(function($) {
                $('.cpf').mask('999.999.999-99');
            });

            $(document).ready(function($) {
                $('.telefone').mask('(99) 9.9999-9999');
            });

            $(document).ready(function($) {
                $('.telefone_fixo').mask('(99) 9999-9999');
            });

            $(document).ready(function($) {
                $('.whatsapp').mask('(00) 0.0000-0000');
            });

            $(document).ready(function($) {
                $('.cep').mask('00000-000');
            });

            $(document).ready(function($) {
                $('.cc-number').mask('0000 0000 0000 0000');
            });

            $(document).ready(function($) {
                $('.cc-validity').mask('00/00');
            });

            $(document).ready(function($) {
                $('.cc-cvc').mask('000');
            });
        </script>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>


        <script src="https://chronosmanager.com.br/js/script.js"></script>


        <script async src="https://www.googletagmanager.com/gtag/js?id=G-4SVTFCT8WB"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-4SVTFCT8WB');
        </script>

    </body>

    </html>

@endsection
