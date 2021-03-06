@extends('template.main')

@section('article')
    <div class="container">
        <div class="row">
            <form action="#"  method="post" enctype="multipart/form-data">
{{--                {{ csrf_field() }}--}}
                <div class="form-group" style="padding-top: 5px">
                    <label for="nameVaccine">Vaccine Name</label>
                    <input type="text" class="form-control" id="nameVaccine" name="vaccineName" required>
                </div>
                <div class="form-group" style="padding-top: 10px">
                    <label for="validationPrice">Price</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend2">Rp</span>
                        </div>
                        <input type="text" class="form-control" id="validationPrice" name="price" required>
                    </div>
                </div>
                <div class="form-group" style="padding-top: 10px">
                    <label for="desc">Description</label>
                    <textarea class="form-control" id="desc" rows="3" name="desc"></textarea>
                </div>
                <div class="form-group" style="padding-top: 10px">
                    <label for="exampleFormControlFile1">Image Choose</label> <br>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" required name="image">
                </div>
                <div class="form-group" style="padding-top: 20px">
                    <button type="submit" class="btn btn-primary" style="width: 10%;">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
