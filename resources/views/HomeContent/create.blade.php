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
                        <a href="#" class="nav-link">
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
                                <a href="/navigation" class="nav-link">
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
                                <a href="/homeContent/create" class="nav-link active">
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
                        <h1> Home Content </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/home">Home</a></li>
                            <li class="breadcrumb-item active">HomeContent</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    @endsection
    <!-- Main content -->

        <!-- /.card-body -->
    </div>
@section('content')
    <div class="container-fluid">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row">
            <div class="col-lg-2">

            </div>
            <div class="col-lg-8">
                <div class="card" style="background-color: white">
                    <div class="card-header">
                        <h3 class="card-title">Create Home Content</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form role="form" method="post" action="/homeContent" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label> About_us Heading</label>
                                        <input type="text"  class="form-control" name="aboutus_heading" placeholder="Place About-Us heading">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label> About_us Image </label>
                                        <input type="file"  class="form-control" name="aboutus_image" placeholder="Place About-Us Image">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label> About_us Description</label>
                                        <textarea class="textarea" name="about_title" placeholder="Place About-Us Description"
                                                  style="width: 100%; height: 180px; font-size: 14px; line-height: 7px; border: 1px solid #dddddd; padding: 10px;"></textarea>                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label> Factory Heading</label>
                                        <input type="text"  class="form-control" name="factory_heading" placeholder="Place Factory Heading">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label> Factory Image</label>
                                        <input type="file"  class="form-control" name="factory_image" placeholder="Place Factory Image">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label> Factory Description</label>
                                        <textarea class="textarea" name="factory_content" placeholder="Place Factory Description here"
                                                  style="width: 100%; height: 180px; font-size: 14px; line-height: 7px; border: 1px solid #dddddd; padding: 10px;"></textarea>                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label> Outlets Heading</label>
                                        <input type="text"  class="form-control" name="outlet_heading" placeholder="Place Outlets Heading">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label> Outlets Image</label>
                                        <input type="file"  class="form-control" name="outlet_image" placeholder="Place Outlet Image">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label> Outlets Description</label>
                                        <textarea class="textarea" name="outlet_content" placeholder="Place Outlet Description here"
                                                  style="width: 100%; height: 180px; font-size: 14px; line-height: 7px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <button type="submit" value="submit" class="btn btn-primary">Submit</button> &nbsp;
                            <button type="reset" class="btn btn-secondary">Reset</button>

                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <div class="col-lg-2">
            </div>
        </div>
    </div>
    </div>
@endsection
