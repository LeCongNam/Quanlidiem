@extends('/Template/adminTemp')
@section('formScore')
    <style>
        .error {
            color: red;
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
                {!! Form::open(['url' => '/insert/score', 'files' => true]) !!}
                <h1>Nhập Điểm sinh viên </h1>
                <hr>

                @if (count($errors) > 0)
                    LỖI <br>
                    @foreach ($errors->all() as $err)
                        <div class="error">
                            <b> {{ $err }}</b>
                        </div><br>
                    @endforeach
                @endif

                @if (isset($mess))
                    <div class="success">
                        {{ $mess }}
                    </div>
                @endif

                {{ Form::label('masv', 'Mã số sinh viên') }}
                {{ Form::text('masv', '', ['class' => 'form-control', 'placeholder' => 'Nhập mssv']) }}

                {{ Form::label('tenmh', 'Tên Môn Học') }}
                {{ Form::text('tenmh', '', ['class' => 'form-control', 'placeholder' => 'Nhập Tên môn học']) }}

                {{ Form::label('sotc', 'Số tín chỉ') }}
                {{ Form::number('sotc', 1, ['class' => 'form-control']) }}

                {{ Form::label('diem', 'Điểm') }}
                {{ Form::number('diem', 1,['class' => 'form-control']) }}


                {{ Form::label('lop', 'Lớp') }}
                {{ Form::text('lop', '', ['class' => 'form-control', 'placeholder' => 'Nhập Lớp']) }}

                {{ Form::label('lanthi', 'Lần  thi') }}
                {{ Form::number('lanthi', 1, ['class' => 'form-control']) }}
               
                {{ Form::submit('Luu', ['class' => 'btn btn-primary btn-block mt-3']) }}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

        
    @endsection