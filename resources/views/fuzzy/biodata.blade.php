@extends('fuzzy.layouts.layout')

@section('body')
    <div class="main main-raised">
        <div class="container">
            <div class="p-3">
                <b style="font-size: 1.125rem; ">Form Biodata</b>
            </div>
        </div>
    </div>

    <div class="main main-raised my-2">
        <div class="container">
            <div class="section">
                <div class="row">
                    <div class="col-md col-sm-12 text-center">
                        <img src="https://images-platform.99static.com/AKiJ0kIzDQuCf-TkrEOJUYvhJvk=/170x203:788x821/500x500/top/smart/99designs-contests-attachments/86/86859/attachment_86859730"
                            width="60%" alt="">
                    </div>
                    <div class="col col-md col-sm">
                        <form action="/create-bio" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Name</label>
                                    <input type="name" name="name" class="form-control" id="name" placeholder="Your Name"
                                        required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="gender">Select Gender</label>
                                    <select class="form-control selectpicker" name="gender" data-style="btn btn-link"
                                        id="gender" required>
                                        <option value=""> -- Choice Gender --</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="place_of_birth">Place Of Birth</label>
                                    <input type="text" name="place_of_birth" class="form-control" id="place_of_birth"
                                        placeholder="Jakarta Timur" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="place_of_birth">Age</label>
                                    <input type="number" name="age" class="form-control" id="age" min="1" placeholder="17"
                                        required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email"
                                    placeholder="example@gmail.com" required>
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" name="address" class="form-control" id="address"
                                    placeholder="Jln jakarta no 123" required>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Lanjutkan</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
