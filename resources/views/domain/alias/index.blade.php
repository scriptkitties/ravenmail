@extends('main')

@section('content')
<h2>Aliases</h2>
<section>
    <p>
        <a href="{{ route('domain.alias.create', ['domain' => $domain]) }}"><i class="fa fa-plus"></i> Add alias</a>
    </p>
</section>
<table>
    <thead>
        <tr>
            <th>Origin</th>
            <th>Destination</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($aliases as $alias)
            <tr>
                <td>{{ $alias->getAddress() }}</td>
                <td>{{ $alias->destination }}</td>
                <td>
                    <form method="post" action="{{ route('domain.alias.destroy', ['domain' => $alias->domain, 'address' => $alias->getAddress()]) }}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button class="button-primary" type="submit">
                            <i class="fa fa-fw fa-trash"></i>
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

