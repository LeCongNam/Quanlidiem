@extends('admin/template/adminTemp')


@section('formSv')
    <style>
        .error {
            color: red;
            font-size: 15px !important;
        }

        .success {
            color: #2ca02c;
        }

        body {
            background-color: #6b7280;
            color: #dfdfdf;
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-6 m-auto">
                {!! Form::open(['url' => '/insert/class','files'=>true] ) !!}
                <h1>Thêm lớp mới</h1>
                <hr>

                @if(count($errors)>0)
                    LỖI <br>
                    @foreach( $errors->all() as $err)
                        <div class="error">
                            <b> {{ $err }}</b>
                        </div><br>
                    @endforeach
                @endif

                @if(isset($mess))
                    <div class="success">
                        {{ $mess }}
                    </div>
                @endif

                {{ Form::label('malop', 'Mã lớp') }}
                {{ Form::text('malop', '', ['class' => 'form-control', 'placeholder' => 'Nhập mã lớp...']) }}


                {{ Form::label('tenlop', 'Tên Lớp') }}
                {{ Form::text('tenlop', '', ['class' => 'form-control', 'placeholder' => 'Nhập tên Lớp...']) }}

                {{ Form::submit('Luu',  ['class' => 'btn btn-primary btn-block mt-3']) }}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

        
    @endsection