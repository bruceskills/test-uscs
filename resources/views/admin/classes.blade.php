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
                                <h3 class="nk-block-title page-title">Turmas</h3>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="row g-gs">
                            <div class="col-xxl-3">
                                <div class="card card-full">
                                    <div class="card-inner">
                                        <div class="preview-block">
                                            <span class="preview-title-lg overline-title">Cadastro de turmas</span>
                                            @if (\Session::has('success'))
                                                <div class="mb-2">
                                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                        {!! \Session::get('success') !!}
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                                    </div>
                                                </div>
                                            @endif
                                            <form action="/uscs/classes/create" method="POST">
                                                @csrf
                                                <div class="row gy-4">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="form-label" for="hour">Horário</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-left">
                                                                    <em class="icon ni ni-clock"></em>
                                                                </div>
                                                                <input id="hour" required type="time" class="form-control" name="hour">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="form-label" for="start_date">Início</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-left">
                                                                    <em class="icon ni ni-calendar"></em>
                                                                </div>
                                                                <input required name="start_date" type="date" class="form-control" id="start_date">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="form-label" for="end_date">Fim</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-left">
                                                                    <em class="icon ni ni-calendar"></em>
                                                                </div>
                                                                <input required name="end_date" type="date" class="form-control" id="end_date">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="form-label" for="price">Preço</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-left">
                                                                    <em class="icon ni ni-money"></em>
                                                                </div>
                                                                <input required name="price" type="number" class="form-control" id="price">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-lg btn-primary btn-block"><em class="icon ni ni-save"></em>&nbsp;&nbsp;Cadastrar turma</button>
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
                                                <h6 class="title">Turmas</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-tb-list mt-n2">
                                        <div class="nk-tb-item nk-tb-head">
                                            <div class="nk-tb-col"><span>No.</span></div>
                                            <div class="nk-tb-col tb-col-sm"><span>Horário</span></div>
                                            <div class="nk-tb-col tb-col-md"><span>Início</span></div>
                                            <div class="nk-tb-col tb-col-md"><span>Fim</span></div>
                                            <div class="nk-tb-col tb-col-md"><span>Preço</span></div>
                                            <div class="nk-tb-col tb-col-md"><span>Professor</span></div>
                                        </div>
                                        @foreach($classes as $class)
                                            <div class="nk-tb-item">
                                                <div class="nk-tb-col">
                                                    <span class="tb-lead"><a href="#">#{{ $class->code_classes }}</a></span>
                                                </div>
                                                <div class="nk-tb-col tb-col-sm">
                                                    <div class="user-card">
                                                        <div class="user-name">
                                                            <span class="tb-lead"><em class="icon ni ni-clock"></em> {{ $class->hour }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col tb-col-md">
                                                    <span class="tb-sub"><em class="icon ni ni-calendar"></em> {{ date('d/m/Y', strtotime($class->start_date)) }}</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-md">
                                                    <span class="tb-sub"><em class="icon ni ni-calendar"></em> {{ date('d/m/Y', strtotime($class->end_date)) }}</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-md">
                                                    <span class="tb-sub"><em class="icon ni ni-money"></em> R$ {{ number_format($class->price, 2, ",", ".") }}</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-md">
                                                    <span class="tb-sub"><em class="icon ni ni-happy"></em> {{ $class->teacher->name }}</span>
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

