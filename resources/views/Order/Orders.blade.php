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
                        <a href="/order" class="nav-link active">
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
                                <th>Name</th>
                                <th>Email</th>
                                <th>Quantity</th>
                                <th>Size</th>
                                <th>Phone</th>
                                <th>Message</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $n)
                                <tr>
                                    <td>{{$n->name}}</td>
                                    <td>{{$n->email}}</td>
                                    <td>{{$n->Quantity}}</td>
                                    <td>{{$n->size}}</td>
                                    <td>{{$n->phone}}</td>
                                    <td>{{$n->message}}</td>
                                    <td> <button type="button" class="btn btn-block btn-danger" onclick="document.getElementById('delete-{{ $n->id }}').submit();">
                                            <strong style="color: white;"><i class="fa fa-trash"></i> Delete</strong>
                                        </button>
                                        <form id="delete-{{ $n->id }}" action="/order/{{ $n->id }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>

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
