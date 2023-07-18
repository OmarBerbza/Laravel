@extends('contacts.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <a href="{{ url('/contacts/create') }}" class="btn btn-success btn-sm" title="Add New User">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                            </svg> ADD
                        </a>
                        <br><br>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Le nom</th>
                                        <th>Le prenom</th>
                                        <th>Email</th>
                                        <th>Photo</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($post as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->nom }}</td>
                                            <td>{{ $item->prenom }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->photo }}</td>
                                            <td>
                                                <a href="{{ url('/contacts/' . $item->id) }}" title="View user">
                                                    <button class="btn btn-primary btn-sm">Afficher</button>
                                                </a>
                                                <a href="{{ url('/contacts/' . $item->id) . '/edit' }}" title="edit user">
                                                    <button class="btn btn-warnning btn-sm">Modifier</button>
                                                </a>
                                                <form method="POST" action="{{ url('/contacts/' . $item->id) }}" accept="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(&quot;Confirm delete?&quot;)" title="delete user">Supprimer</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection