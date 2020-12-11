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
                                <h3 class="nk-block-title page-title">Alunos</h3>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="row g-gs">
                            <div class="col-xxl-3">
                                <div class="card card-full">
                                    <div class="card-inner">
                                        <div class="preview-block">
                                            <span class="preview-title-lg overline-title">Cadastro de alunos</span>
                                            @if (\Session::has('success'))
                                                <div class="mb-2">
                                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                        {!! \Session::get('success') !!}
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                                    </div>
                                                </div>
                                            @endif
                                            <form action="/uscs/students/create" method="POST">
                                                @csrf
                                                <div class="row gy-4">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="form-label" for="name">Aluno</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-left">
                                                                    <em class="icon ni ni-user"></em>
                                                                </div>
                                                                <input id="name" required type="text" class="form-control" name="name" placeholder="Digite o nome do aluno">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="form-label" for="phone">Telefone</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-left">
                                                                    <em class="icon ni ni-mobile"></em>
                                                                </div>
                                                                <input required name="phone" type="text" class="form-control" id="phone" placeholder="Digite o telefone do aluno">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="form-label" for="address">Endereço</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-left">
                                                                    <em class="icon ni ni-map-pin"></em>
                                                                </div>
                                                                <input required name="address" type="text" class="form-control" id="address" placeholder="Digite o endereço do aluno">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-lg btn-primary btn-block"><em class="icon ni ni-save"></em>&nbsp;&nbsp;Cadastrar aluno</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div><!-- .card -->
                            </div>
                            <div class="col-xxl-9">
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
                        </div><!-- .row -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
    <!-- content @e -->
@endsection
@section('scripts')
    <script>
        $("[name='phone']").mask("(99) 9999-9999");
    </script>
@endsection

