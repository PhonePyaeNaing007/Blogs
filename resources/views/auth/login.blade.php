<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <h3 class="text-center my-2 text-primary">Login Form</h3>
                <div class="card p-4 my-3 shadow-sm">
                    <form method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email Address</label>
                            <input required type="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" name="email" value="{{ old('email') }}">
                            <x-error name="email"/>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword" class="form-label">Password</label>
                            <input required type="password" class="form-control" id="exampleInputPassword" name="password">
                        </div>
                        <x-error name="password"/>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </x-layout>
