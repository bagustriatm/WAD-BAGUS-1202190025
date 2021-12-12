@extends('template.main')

@section('article')
    <div class="container" style="padding-bottom: 75px">
        <div class="row">
            <h2 style="text-align: center">Register Astra-zeneca 2</h2>
            <form action="">
                <div class="form-group" style="padding-top: 5px">
                    <label for="vaccineid">Vaccine ID</label>
                    <input type="number" class="form-control" id="vaccineid" name="vaccineid" disabled readonly value="1">
                </div>
                <div class="form-group" style="padding-top: 5px">
                    <label for="patientname">Patient Name</label>
                    <input type="text" class="form-control" id="patientname" name="patientName" required>
                </div>
                <div class="form-group" style="padding-top: 5px">
                    <label for="idNumber">NIK</label>
                    <input type="text" class="form-control" id="idNumber" name="idnumber" required>
                </div>
                <div class="form-group" style="padding-top: 5px">
                    <label for="userAddress">Alamat</label>
                    <input type="text" class="form-control" id="userAddress" name="address" required>
                </div>
                <div class="form-group" style="padding-top: 10px">
                    <label for="identitycard">KTP</label> <br>
                    <input type="file" class="form-control-file" id="identitycard" name="idcard" required>
                </div>
                <div class="form-group" style="padding-top: 5px">
                    <label for="phoneNumber">No HP</label>
                    <input type="text" class="form-control" id="phoneNumber" name="phone" required>
                </div>
                <div class="form-group" style="padding-top: 20px">
                    <button type="submit" class="btn btn-primary" style="width: 10%;" name="reg">Register</button>
                </div>
            </form>
        </div>
    </div>

@endsection()
