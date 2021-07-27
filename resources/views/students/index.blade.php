@extends('layouts.app')


@section('content')
<main class="mx-auto">
<div class="container">
    <div class="row">
        <div class="col-md-8">
    <div class="card">
        <div class="card-header bg-dark text-white">
            <h4>Student List</h4>
        </div>
        <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th># id</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>ID no.</th>
                </tr>
            </thead>
            <tbody id="studentData">
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
        </div>

        <!-- beginning of insert form -->
        <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-dark text-white">
                <h4>Add Student</h4>
            </div>
            <div class="card-body">
                <form action="#" method="POST" id="createStudent">
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">First name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="first name">
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Last name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="last name">
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">ID no.</label>
                <input type="text" class="form-control" id="id_number" name="id_name" placeholder="id number">
                </div>
                <div class="justify-content-center">
                    <button class="btn btn-success">Submit</button>
                </div>
                </form>
            </div>
        </div>
        </div>

        <!-- end of insert form -->
    </div>
</div>
</main>



@endsection