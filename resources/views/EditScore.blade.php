@extends('/Template/adminTemp')
@section('editScores')
    <style>
        .error {
            color: red;
            font-size: 15px !important;
        }

        .success {
            color: #2ca02c;
        }

 

    </style>

    <div class="container">
        <div class="row">
            <div class="col-6 m-auto">



                {!! Form::open(['url' => '/admin/update', 'files' => true]) !!}
                <h3 style="text-align: center">CẬP NHẬT THÔNG TIN KẾT QUẢ HỌC TẬP</h3>
                <hr>

                @if (count($errors) > 0)
                    LỖI <br>
                    @foreach ($errors->all() as $err)
                        <div class="error">
                            <span style="font-size: 10px"> {{ $err }}</span>
                        </div><br>
                    @endforeach
                @endif

                @if (isset($mess))
                    <div class="success">
                        {{ $mess }}
                    </div>
                @endif

                    @if (isset($scores))
                     
                        @foreach ($scores as $row)
                        {{ Form::hidden('id', $row->id) }}

                        {{ Form::label('masv', 'Mã số sinh viên') }}
                        {{ Form::text('masv', $row->masv, ['class' => 'form-control','readonly' => 'true','placeholder' => 'Nhập mssv']) }}

                        {{ Form::label('tenmh', 'Tên Môn Học') }}
                        {{ Form::text('tenmh', $row->tenmh, ['class' => 'form-control', 'placeholder' => 'Nhập Tên môn học']) }}

                        {{ Form::label('sotc', 'Số tín chỉ') }}
                        {{ Form::number('sotc', $row->sotc, ['class' => 'form-control', 'readonly' => 'true']) }}

                        {{ Form::label('diem', 'Điểm') }}
                        {{ Form::text('diem', $row->diem, ['class' => 'form-control']) }}


                        {{ Form::label('lop', 'Lớp') }}
                        {{ Form::text('lop', $row->lop, ['class' => 'form-control', 'readonly' => 'true', 'placeholder' => 'Nhập Lớp']) }}

                        {{ Form::label('lanthi', 'Lần  thi') }}
                        {{ Form::number('lanthi', $row->lanthi, ['class' => 'form-control']) }}
                        {{ Form::submit('Cập nhật', ['class' => 'btn btn-primary btn-block mt-3']) }}
                        {!! Form::close() !!}
                    @endforeach   
                    @else
                    {{ Form::hidden('id', '') }}

                    {{ Form::label('masv', 'Mã số sinh viên') }}
                    {{ Form::text('masv','', ['class' => 'form-control','readonly' => 'true','placeholder' => 'Nhập mssv']) }}

                    {{ Form::label('tenmh', 'Tên Môn Học') }}
                    {{ Form::text('tenmh','', ['class' => 'form-control', 'placeholder' => 'Nhập Tên môn học']) }}

                    {{ Form::label('sotc', 'Số tín chỉ') }}
                    {{ Form::number('sotc','', ['class' => 'form-control', 'readonly' => 'true']) }}

                    {{ Form::label('diem', 'Điểm') }}
                    {{ Form::number('diem','', ['class' => 'form-control']) }}


                    {{ Form::label('lop', 'Lớp') }}
                    {{ Form::text('lop','', ['class' => 'form-control', 'readonly' => 'true', 'placeholder' => 'Nhập Lớp']) }}

                    {{ Form::label('lanthi', 'Lần  thi') }}
                    {{ Form::number('lanthi','', ['class' => 'form-control']) }}
                    {{ Form::submit('Cập nhật', ['class' => 'btn btn-primary btn-block mt-3']) }}
                    {!! Form::close() !!}
                    @endif

            </div>
        </div>
    </div>

    @endsection