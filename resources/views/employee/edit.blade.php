<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand mb-0 h1"><i class="bi-hexagon-fill me-2"></i> Data
                Master</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="{{ route('employees.index') }}" class="nav-link">Employee List</a>
                    </li>
                </ul>
                <a href="{{ route('profile') }}" class="btn btn-outline-light my-2 my-md-0"><i
                        class="bi-person-circle me-1"></i> My Profile</a>
            </div>
        </div>
    </nav>

    <div class="container-sm mt-5">
      
        <form method="post" action="{{ route('employees.update', $employee->employee_id) }}">

            @csrf
            @method('PUT')
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">
                    <div class="mb-3">
                        <div class="text-center">
                            <i class="bi-pencil fs-1"></i>
                            <h4>Edit Employee</h4>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstName" name="firstName"
                                    value="{{ old('firstName', $employee->firstname) }}">
                                @error('firstName')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastName" name="lastName"
                                    value="{{ old('lastName', $employee->lastname) }}">
                                @error('lastName')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ old('email', $employee->email) }}">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="age" class="form-label">Age</label>
                                <input type="number" class="form-control" id="age" name="age"
                                    value="{{ old('age', $employee->age) }}">
                                @error('age')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="position" class="form-label">Position</label>
                                <select class="form-select" id="position" name="position">
                                    @foreach ($positions as $position)
                                        <option value="{{ $position->id }}"
                                            {{ $position->id == $employee->position_id ? 'selected' : '' }}>
                                            {{ $position->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6 d-grid">
                                    <a href="{{ route('employees.index') }}"
                                        class="btn btn-outline-dark btn-lg mt-3"><i
                                            class="bi-arrow-left-circle me-2"></i> Cancel</a>
                                </div>
                                <div class="col-md-6 d-grid">
                                    <button type="submit" class="btn btn-dark btn-lg mt-3"><i
                                            class="bi-check-circle me-2"></i>
                                        Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </form>
    </div>
    @vite('resources/js/app.js')

</body>

</html>
