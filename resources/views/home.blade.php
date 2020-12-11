@extends('layouts.app')

@section('content')
    <!-- content @s -->
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Dashboard</h3>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="row g-gs">
                            <div class="col-xxl-3 col-sm-6">
                                <div class="card">
                                    <div class="nk-ecwg nk-ecwg6">
                                        <div class="card-inner">
                                            <div class="card-title-group">
                                                <div class="card-title">
                                                    <h6 class="title">Professores</h6>
                                                </div>
                                            </div>
                                            <div class="data">
                                                <div class="data-group">
                                                    <div class="amount">{{ count($teachers) }}</div>
                                                    <span class="nk-menu-icon"><em class="icon ni ni-happy"></em></span>
                                                </div>
                                            </div>
                                        </div><!-- .card-inner -->
                                    </div><!-- .nk-ecwg -->
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-xxl-3 col-sm-6">
                                <div class="card">
                                    <div class="nk-ecwg nk-ecwg6">
                                        <div class="card-inner">
                                            <div class="card-title-group">
                                                <div class="card-title">
                                                    <h6 class="title">Cursos</h6>
                                                </div>
                                            </div>
                                            <div class="data">
                                                <div class="data-group">
                                                    <div class="amount">{{ count($courses) }}</div>
                                                    <span class="nk-menu-icon"><em class="icon ni ni-notice"></em></span>
                                                </div>
                                            </div>
                                        </div><!-- .card-inner -->
                                    </div><!-- .nk-ecwg -->
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-xxl-3 col-sm-6">
                                <div class="card">
                                    <div class="nk-ecwg nk-ecwg6">
                                        <div class="card-inner">
                                            <div class="card-title-group">
                                                <div class="card-title">
                                                    <h6 class="title">Turmas</h6>
                                                </div>
                                            </div>
                                            <div class="data">
                                                <div class="data-group">
                                                    <div class="amount">{{ count($classes) }}</div>
                                                    <span class="nk-menu-icon"><em class="icon ni ni-book-read"></em></span>
                                                </div>
                                            </div>
                                        </div><!-- .card-inner -->
                                    </div><!-- .nk-ecwg -->
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-xxl-3 col-sm-6">
                                <div class="card">
                                    <div class="nk-ecwg nk-ecwg6">
                                        <div class="card-inner">
                                            <div class="card-title-group">
                                                <div class="card-title">
                                                    <h6 class="title">Alunos</h6>
                                                </div>
                                            </div>
                                            <div class="data">
                                                <div class="data-group">
                                                    <div class="amount">{{ count($students) }}</div>
                                                    <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                                </div>
                                            </div>
                                        </div><!-- .card-inner -->
                                    </div><!-- .nk-ecwg -->
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-xxl-8">
                                <div class="card card-full">
                                    <div class="card-inner">
                                        <div class="card-title-group">
                                            <div class="card-title">
                                                <h6 class="title">Alunos</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-tb-list mt-n2">
                                        <div class="nk-tb-item nk-tb-head">
                                            <div class="nk-tb-col"><span>No.</span></div>
                                            <div class="nk-tb-col tb-col-sm"><span>Nome</span></div>
                                            <div class="nk-tb-col tb-col-md"><span>Telefone</span></div>
                                            <div class="nk-tb-col"><span>Endereço</span></div>
                                            <div class="nk-tb-col"><span class="d-none d-sm-inline">Cadastro</span></div>
                                        </div>
                                        @foreach($students as $student)
                                            <div class="nk-tb-item">
                                                <div class="nk-tb-col">
                                                    <span class="tb-lead"><a href="#">#{{ $student->code_student }}</a></span>
                                                </div>
                                                <div class="nk-tb-col tb-col-sm">
                                                    <div class="user-card">
                                                        <div class="user-name">
                                                            <span class="tb-lead">{{ $student->name }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col tb-col-md">
                                                    <span class="tb-sub"><em class="icon ni ni-mobile"></em> {{ $student->phone }}</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-md">
                                                    <span class="tb-sub"><em class="icon ni ni-map-pin"></em> {{ $student->address }}</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="tb-sub"><em class="icon ni ni-calendar-alt"></em> {{ date('d/m/Y', strtotime($student->created_at)) }}</span>
                                                </div>
                                            </div>
                                        @endforeach


                                    </div>
                                </div><!-- .card -->
                            </div>
                            <div class="col-xxl-4 col-md-8 col-lg-6">
                                <div class="card h-100">
                                    <div class="card-inner">
                                        <div class="card-title-group mb-2">
                                            <div class="card-title">
                                                <h6 class="title">Professores</h6>
                                            </div>
                                        </div>
                                        <ul class="nk-top-products">
                                            @foreach($teachers as $teacher)
                                                <li class="item">
                                                    <div class="info">
                                                        <div class="title">{{ $teacher->name }}</div>
                                                    </div>
                                                    <div class="total">
                                                        <div class="amount"><em class="icon ni ni-mobile"></em> {{ $teacher->phone }}</div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div><!-- .card-inner -->
                                </div><!-- .card -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
    <!-- content @e -->
@endsection
