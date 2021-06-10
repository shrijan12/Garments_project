@extends('layouts.adminlte')
@section('sidebar')
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="/home" class="brand-link text-center">
            <span class="brand-text font-weight-light">Admin Dashboard</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{asset('resources/logo.png')}}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{auth()->user()->name}}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item active">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <!--nav section-->
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-bars"></i>
                            <p>
                                Navigation Section
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/navigation/create" class="nav-link">
                                    <i class="fa  fa-arrow-circle-right nav-icon"></i>
                                    <p>Create Navigation</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/navigation" class="nav-link active">
                                    <i class="fa  fa-arrow-circle-right nav-icon"></i>
                                    <p>View Navigation</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/social" class="nav-link">
                                    <i class="fa  fa-arrow-circle-right nav-icon"></i>
                                    <p>View Social Navigation</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/navitem" class="nav-link">
                                    <i class="fa  fa-arrow-circle-right nav-icon"></i>
                                    <p>View Nav Items</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/navcontact" class="nav-link">
                                    <i class="fa  fa-arrow-circle-right nav-icon"></i>
                                    <p>View NavContact </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-bars"></i>
                            <p>
                                Banner Section
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/banner/create" class="nav-link">
                                    <i class="fa  fa-arrow-circle-right nav-icon"></i>
                                    <p>Create Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/banner" class="nav-link">
                                    <i class="fa  fa-arrow-circle-right nav-icon"></i>
                                    <p>View Banner</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-bars"></i>
                            <p>
                                Home Content Section
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/homeContent/create" class="nav-link">
                                    <i class="fa  fa-arrow-circle-right nav-icon"></i>
                                    <p>Create HomeContent</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/homeContent" class="nav-link">
                                    <i class="fa  fa-arrow-circle-right nav-icon"></i>
                                    <p>View HomeContent</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-bars"></i>
                            <p>
                                About Section
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/abouts/create" class="nav-link">
                                    <i class="fa  fa-arrow-circle-right nav-icon"></i>
                                    <p>Create About</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/abouts" class="nav-link">
                                    <i class="fa  fa-arrow-circle-right nav-icon"></i>
                                    <p>View About</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/service" class="nav-link">
                                    <i class="fa  fa-arrow-circle-right nav-icon"></i>
                                    <p>View Services</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/partner" class="nav-link">
                                    <i class="fa  fa-arrow-circle-right nav-icon"></i>
                                    <p>View Partners</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-bars"></i>
                            <p>
                                Categories Section
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/categories/create" class="nav-link">
                                    <i class="fa  fa-arrow-circle-right nav-icon"></i>
                                    <p>Create Categories</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/categories" class="nav-link">
                                    <i class="fa  fa-arrow-circle-right nav-icon"></i>
                                    <p>View Categories</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/products" class="nav-link">
                                    <i class="fa  fa-arrow-circle-right nav-icon"></i>
                                    <p>Products</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-bars"></i>
                            <p>
                                Footer Section
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/footer/create" class="nav-link">
                                    <i class="fa  fa-arrow-circle-right nav-icon"></i>
                                    <p>Create Footer</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/footer" class="nav-link">
                                    <i class="fa  fa-arrow-circle-right nav-icon"></i>
                                    <p>View Footer</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--Contact Section-->
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-door-open"></i>
                            <p>
                                Contact Section
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/contacts/create" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Create Contact</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/contacts" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>View Contact</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/ContactDetails" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Contact Details</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/queries" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>View Queries</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="/order" class="nav-link">
                            <i class="nav-icon fa fa-bars"></i>
                            <p>
                                Orders
                            </p>
                        </a>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
@endsection
@section('breadcumb')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1> Navigation View </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/home">Home</a></li>
                            <li class="breadcrumb-item active">Navigation View</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    @endsection

@section('content')
    <div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Navigation view items</h3>
          </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Logo</th>
                    <th>Add Social</th>
                    <th>Nav Items</th>
                    <th>Nav Contact</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($navigations as $n)
                <tr>
                        <td><img src="/storage/{{$n->logo}}" width="80" height="80"></td>
                        <td><a href="#"><button class="btn btn-primary" data-toggle="modal" data-id="{{ $n->id }}" data-target="#logoutModal1{{$n->id}}"><i class="fa fa-plus"></i> Social</button>
                            </a>
                        </td>
                        <td><a href="#"><button class="btn btn-primary" data-toggle="modal" data-id="{{ $n->id }}" data-target="#logoutModal2{{$n->id}}"><i class="fa fa-plus"></i> NavItems</button>
                            </a>
                        </td>
                        <td><a href="#"><button class="btn btn-primary" data-toggle="modal" data-id="{{ $n->id }}" data-target="#logoutModal3{{$n->id}}"><i class="fa fa-plus"></i> NavContact</button>
                            </a>
                        </td>

                        <td>
                           <a href="/navigation/{{$n->id}}/edit"><button class="btn btn-secondary">
                                <i class="fa fa-edit"></i> Edit
                            </button></a>
                        </td>

                    <td> <button type="button" class="btn btn-block btn-danger" onclick="event.preventDefault();
                                                    document.getElementById('delete-form').submit();">
                                <strong style="color: white;"><i class="fa fa-trash"></i> Delete</strong>
                            </button>
                            <form id="delete-form" action="/navigation/{{ $n->id }}" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                        <div class="modal fade" id="logoutModal1{{$n->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add Social Icons</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/social/{{$n->id}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="Icons">Icon Label</label>
                                                        <input type="text" class="form-control @error('social_name') is-invalid @enderror" id="social_name" name="social_name" placeholder="Icon Name">
                                                        @error('social_name')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="Icons">Icon Class</label>
                                                        <input type="text" class="form-control @error('social_name') is-invalid @enderror" id="icons" name="icons" placeholder="Icon Name">
                                                        @error('icons')
                                                            <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        <p>Please follow the link for mode icons classes <a href="https://boxicons.com/">Boxicons</a> </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Icon_url</label>
                                                        <input type="text" class="form-control @error('icon_url') is-invalid @enderror" id="icon_url" name="icon_url" placeholder="Icon Url">
                                                        @error('icon_url')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary buttons"  value="submit" type="submit">Submit</button>
                                            <button class="btn btn-warning buttons"  value="reset" type="reset">Reset</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--its for the nav items-->
                    <div class="modal fade" id="logoutModal2{{$n->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Navigation Items</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="/navitem/{{$n->id}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="Icons">Navigation Name</label>
                                                    <input type="text" class="form-control @error('nav_name') is-invalid @enderror" id="nav_name" name="nav_name" placeholder="Home, Contact....">
                                                    @error('nav_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="Icons">Navigation Route</label>
                                                    <input type="text" class="form-control @error('nav_url') is-invalid @enderror" id="icons" name="nav_url" placeholder="/,/about,/product/">
                                                    @error('nav_url')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary buttons"  value="submit" type="submit">Submit</button>
                                        <button class="btn btn-warning buttons"  value="reset" type="reset">Reset</button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="logoutModal3{{$n->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Navigation Contact Items</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="/navcontact/{{$n->id}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="Icons">Contact Item</label>
                                                    <input type="text" class="form-control @error('contact_item') is-invalid @enderror" id="nav_name" name="contact_item" placeholder="Contact Name">
                                                    @error('contact_item')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="Icons">Contact Url</label>
                                                    <input type="text" class="form-control @error('contact_url') is-invalid @enderror" id="icons" name="contact_url" placeholder="Contact Url">
                                                    @error('contact_url')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="Icons">Contact Icons</label>
                                                    <input type="text" class="form-control @error('contact_icons') is-invalid @enderror " id="icons" name="contact_icons" placeholder="Contact Icons">
                                                    @error('contact_icons')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary buttons"  value="submit" type="submit">Submit</button>
                                        <button class="btn btn-warning buttons"  value="reset" type="reset">Reset</button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                </tr>
                @endforeach
                </tbody>

            </table>
        </div>
        <!-- /.card-body -->
    </div>

    <!-- /.card -->
    </div>
    </div>
@endsection
