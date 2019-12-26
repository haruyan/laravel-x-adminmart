@extends('layouts.template', ['activePage' => 'users-index', 'pageTitle' => 'User'])

@include('layouts.partials.datatable')

@section('breadcrumb')
    <div class="row">
        <div class="col-5 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">User Management</h3>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="text-muted">Home</a></li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">User</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center mb-4">
                    <h4 class="card-title">List User</h4>
                    <div class="ml-auto">
                        <button type="button" class="btn btn-primary btn-rounded" @click="createModal()"><i class="fas fa-user-plus"></i> Add User</button>
                    </div>
                </div>
                <h6 class="card-subtitle">DataTables has most features enabled by default, so all you
                        need to do to use it with your own tables is to call the construction
                        function:<code> $().DataTable();</code>. You can refer full documentation from here
                        <a href="https://datatables.net/">Datatables</a></h6>
                <div class="table-responsive">
                    <table id="default_table" class="table table-striped table-bordered no-wrap table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <a href="javascript:void(0);" @click="editModal({{ $user }})" class="text-success" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="far fa-edit"></i></a>
                                        <a href="javascript:void(0);" @click="deleteUser({{ $user->id }})" class="text-danger" data-toggle="tooltip" data-placement="top" data-original-title="Hapus"><i class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!--  Modal content -->
<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" v-show="!editMode" id="myLargeModalLabel">Add User</h4>
                <h4 class="modal-title" v-show="editMode" id="myLargeModalLabel">Edit User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form @submit.prevent="editMode ? updateUser() : createUser()" @keydown="form.onKeydown($event)">
                <div class="modal-body mx-4">

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input v-model="form.name" id="name" name="name" type="text" placeholder="Input name"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                        <has-error :form="form" field="name"></has-error>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input v-model="form.email" id="email" name="email" type="email" placeholder="Input email"
                                class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                            <has-error :form="form" field="email"></has-error>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="username">Username</label>
                            <input v-model="form.username" id="username" name="username" type="text" placeholder="Input username"
                                class="form-control" :class="{ 'is-invalid': form.errors.has('username') }">
                            <has-error :form="form" field="username"></has-error>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="password">Password</label>
                            <input v-model="form.password" id="password" name="password" type="password" placeholder="Input password"
                                class="form-control" :class="{ 'is-invalid': form.errors.has('password') }">
                            <has-error :form="form" field="password"></has-error>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="password2">Confirm Password</label>
                            <input v-model="form.password_confirmation" id="password_confirmation" type="password" placeholder="Retype your password"
                                class="form-control" :class="{ 'is-invalid': form.errors.has('password_confirmation') }">
                            <has-error :form="form" field="password_confirmation"></has-error>
                        </div>
                    </div>

                    <br>
                    <hr>
                    <h4 class="card-title">Ignore Form Below</h4>
                    <h6 class="card-subtitle mb-2">
                        Form below is just<code> sample</code></h6>
                        
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">City</label>
                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio1">Toggle 1</label>
                                    </div>
                                </div>
                                <div class="form-check form-check-inline">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio2">Toggle 2</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">State</label>
                            <select id="inputState" class="form-control custom-select">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputZip">Zip</label>
                            <input type="text" class="form-control" id="inputZip">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    <button v-show="!editMode" type="submit" class="btn btn-primary">Save</button>
                    <button v-show="editMode" type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection

@push('jquery')

<script>
    $('#default_table').DataTable();

    var app = new Vue({
        el: '#app',
        data: {
            editMode : false,
            form : new Form({
                id: '',
                name : '',
                username : '',
                email : '',
                password : '',
            }),
        },
        // created() : At this stage DOM has not been mounted or added yet. So you cannot do any DOM manipulation here
        // mounted() : Here you have access to the DOM elements and DOM manipulation can be performed for example get the innerHTML
        mounted() {
        },
        methods: {
            createModal(){
                this.editMode = false;
                this.form.reset();
                $('#defaultModal').modal('show');
            },
            editModal(user){
                this.editMode = true;
                this.form.fill(user)
                $('#defaultModal').modal('show');
            },
            toast(icon, message){
                toast.fire({ icon: icon, title: message })
            },
            reloadDelay(){
                setTimeout(() => {
                    window.location.reload();
                }, 2000);
            },
            createUser(){
                this.form.post("{{ route('users.store') }}")
                    .then(response => {
                        $('#defaultModal').modal('hide');
                        this.toast('success', 'User created successfully')
                        this.reloadDelay();
                    })
                    .catch(e => {
                        console.log(e.response.data.message)
                        e.response.status != 422 ? this.toast('error', 'An internal error occurred') : ''; // show error toast when it's not from form input
                    })
            },
            updateUser(){
                url = "{{ route('users.update', ':id') }}".replace(':id', this.form.id)
                this.form.put(url)
                    .then(response => {
                        $('#defaultModal').modal('hide');
                        this.toast('success', 'User updated successfully')
                        this.reloadDelay();
                    })
                    .catch(e => {
                        console.log(e.response.data.message)
                        e.response.status != 422 ? this.toast('error', 'An internal error occurred') : '';
                    })
            },
            deleteUser(id){
                swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.value) {
                            url = "{{ route('users.destroy', ':id') }}".replace(':id', id)
                            this.form.delete(url)
                                .then(response => {
                                    this.toast('success', 'User deleted successfully')
                                    this.reloadDelay();
                                })
                                .catch(e => {
                                    console.log(e.response.data.message)
                                    e.response.status != 422 ? this.toast('error', 'An internal error occurred') : '';
                                })
                        }
                    })
            }
        },
    })
</script>
@endpush